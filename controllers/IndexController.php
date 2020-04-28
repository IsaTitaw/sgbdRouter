<?php

class IndexController {
    protected $dao;
    protected $template_name;

    function __construct($get, $post, $route) {
        $this->dao = new ProductDAO();
        $this->template_name = 'product';

        if (isset($get)) {
            $this->handle_get($get);
        } else if (isset($post)) {
            $this->handle_post($post);
        }

        die(404);
    }

    function handle_get($get) {
        if (isset($get['pk'])) {
            $product = $this->dao->fetch($get['pk']);
            $display = 'one';
        } else {
            $product_list = $this->dao->fetchAll();
            $display = 'list';
        }

        include 'views/template.php';
    }

    function handle_post($post)
    {
        if (isset($_POST) && isset($_POST['type'])) {
            if ($_POST['type'] == 'create') {
                $ret = $this->dao->save($_POST);
                if (!$ret) {
                    echo "Les données encodées ne sont pas correctes, veuillez recommencer sans choisir un prix ou une quantitté négative";
                }
            }
            if ($_POST['type'] == 'edit') {
                if ($this->dao->update($_POST)) {
                    echo "true";
                } else {
                    echo "Les données encodées ne sont pas correctes, veuillez recommencer sans choisir un prix ou une quantitté négative";
                }
                exit;
            } else if ($_POST['type'] == 'delete') // appelée dans script.js ($('.delete-btn').on('click'...))
            {
                if ($this->dao->delete($_POST['pk'])) {
                    echo "true";
                } else {
                    echo "false";
                }
                exit;
            }
        }
    }
}
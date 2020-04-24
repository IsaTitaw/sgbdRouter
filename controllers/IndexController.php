<?php

class IndexController {
    function __construct($get, $post, $route) {
        if(!get && !post){
            $dao = new ProductDAO();
            var_dump($dao->fetchAll());
        }
    }
}
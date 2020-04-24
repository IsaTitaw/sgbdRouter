<?php

class Router {
    private $get;
    private $post;
    private $route;
    private $root;
    private $controller_list;
    private $controller;
    private $controller_name;
    
    function __construct($get, $post, $self, $url) {
        $this->get = $get;
        $this->post = $post;
        $this->controller_list = ['index'];
        $this->controller_name = false;
        $this->controller = false;
        $this->root = $this->parseRoot($self);
        $this->route = $this->parseURL($url);
        $this->run();
    }
    
    private function parseRoot($self) {
        var_dump(str_replace('index.php', '', $self)); //='routeur2/'
        return str_replace('index.php', '', $self);

    }
    
    private function parseURL($url) {
        $path = str_replace($this->root, '', $url);
//        var_dump($this->root); //= /routeur2/
        if (stristr($path,'?')){
            $toHide = stristr($path, '?');
            $path= str_replace($toHide, '', $path);
        }

        $path = explode('/', $path);
//        var_dump($path);  //='gghkghdfhks' si je tape au départ localhost/routeur2/gghkghdfhks

        $controller = false;
        
        if($path && count($path) && strlen($path[0])) {
            $controller = $path[0];
        } else if(count($path) && !strlen($path[0])) {
            $controller = 'index';
        }
        
        if($controller && in_array($controller, $this->controller_list)) {
            $this->controller_name = ucfirst($controller.'Controller');

        }  
        return $path;
    }
    
    private function run() {
        if($this->controller_name) {
            $this->controller = new $this->controller_name($this->get, $this->post, $this->route);
        }
    }
}

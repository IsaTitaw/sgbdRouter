<?php
spl_autoload_register(function($class) {
//    var_dump('in autoload', $class);
    if($class == "Router") {
        include "router/Router.php";
    } else if (strpos($class, "Controller")) {
        include "controllers/{$class}.php";
    } else if (strpos($class, "DAO")){
        include "models/dao/{$class}.php";
    }else{
        include "models/entities/{$class}.php";
    }
});

$router = new Router($_GET, $_POST, $_SERVER['PHP_SELF'], $_SERVER['REQUEST_URI']);
?>

<!--//grâce à la configuration dans htaccess, tout est redirigé vers index.php même localhost/routeur2/jkqzbcqzgfezhjuysqe-->
<!--    //du coup ça lance new Router et "new" déclenche le fonction spl_autoload_register qui va donc inclure le fichier correspondant par exemple router.php-->

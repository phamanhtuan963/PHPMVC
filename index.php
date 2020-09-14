<?php
    require_once ("controller/Controller.php");

    $controller = new Controller();

    if(!isset($_GET['title']))
        $controller->viewall();
    else
        $controller->view();

?>
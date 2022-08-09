<?php

session_start();
    $controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Employee';

    $action =isset($_GET['action']) ?  $_GET['action'] : 'index';

    $controllerWithController = $controller."Controller"; //CategoriesCOntroller.php

    require_once("Controllers/$controllerWithController.php"); // COntroller/CategoriesController.php
    
    $controllerInstance = new $controllerWithController(); //  = new EmployeeController

    echo $controllerInstance->$action();  // CategoresController.php index();

?>
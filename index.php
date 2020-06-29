<?php

define("BASE_URL","http://localhost/Projet_MVC");
require_once("./libs/Router.php");
$router=new Router();
$router->route();
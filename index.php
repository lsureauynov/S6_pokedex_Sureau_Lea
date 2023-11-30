<?php

require "vendor/autoload.php";

$controller_name='HomepageController';
$action_name="index";
$params=[];

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $url= explode('/', $_GET['p']);

if (isset($url[0])) {
    $controller_name=$url[0];
    unset($url[0]);
}

if (isset($url[1])) {
    $action_name=$url[1];
    unset($url[1]);
}

$params=$url ? $url : [];

if (!empty($_POST)) {
    foreach ($_POST as $key=>$value) {
        $params[]=$value;
    }
}
}

if (file_exists("src/Controller/".$controller_name.".php")) {
    $controller_class= "\\App\\Controller\\".$controller_name;
    $controller = new $controller_class();

    call_user_func_array([$controller, $action_name],$params);
}
else {
    echo "<p> Erreur 404. <br> La page " . $controller_name. " n'existe pas </p>";
}

?>


<?php
$route = $_GET['route'];
require 'templates/header.php';
switch ($route){
    case '':
        require 'main.php';
        break;
    case 'basket':
        require 'basket.php';
        break;
    case 'pay':
        require 'pay.php';
        break;
    case 'shipping':
        require 'shipping.php';
        break;
    case 'contacts':
        require 'contacts.php';
        break;
    case 'admin':
        require 'admin.php';
        break;
     break;
}
require 'templates/footer.php';
switch ($route){
    case '':
        require 'templates/scripts.php';
        break;
    case 'basket':
        require 'templates/scripts_basket.php';
        break;
    case 'pay':
        require 'templates/scripts.php';
        break;
    case 'shipping':
        require 'templates/scripts.php';
        break;
    case 'contacts':
        require 'templates/scripts.php';
        break;
    case 'admin':
        require 'templates/scripts.php';
        break;
}
?>
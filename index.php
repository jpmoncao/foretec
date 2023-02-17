<?php
include("src/config.php");

switch (@$_REQUEST['page']) {
    case 'controller':
        include('controller/controller.php');
        break;
    case 'login':
        include('view/login.php');
        break;
    case 'acess':
        include('view/acess.php');
        break;
    default:
        include('view/welcome.php');
        break;
}
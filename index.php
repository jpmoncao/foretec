<?php
switch (@$_REQUEST['page']) {
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
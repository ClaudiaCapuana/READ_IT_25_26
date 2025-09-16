<?php
use \App\Controllers\UsersController;

include_once '../app/controllers/usersController.php';
switch ($_GET['users']) :
    case 'logout':
           
    \App\Controllers\UsersController\logoutAction();
        break;
    
    default:
     UsersController\indexAction($conn);
        break;
    endswitch;
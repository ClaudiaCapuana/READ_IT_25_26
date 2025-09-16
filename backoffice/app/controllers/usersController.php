<?php
namespace App\Controllers\UsersController;
use \App\Models\UsersModel;
use \PDO;
function logoutAction(){
// on tue la var de session
   unset($_SESSION['user']);

    // on redirige vers la connexion
    header('Location: '.PUBLIC_BASE_URL.'users/login-form');

}

function indexAction(PDO $conn){
    include_once "../app/models/usersModel.php";
    $users = UsersModel\findAll($conn);
    global $title, $content;
    $title = "Users List";
    ob_start();
    include "../app/views/users/index.php";
    $content = ob_get_clean()
;}

function newAction(){
   
    global $title, $content;
    $title = "Add a User";
    ob_start();
    include "../app/views/users/new.php";
    $content = ob_get_clean();

}
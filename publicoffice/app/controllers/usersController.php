<?php
namespace App\Controllers\UsersController;
use \App\Models\UsersModel;
use \PDO;


function loginFormAction(){
    global $content, $title;
    $title = "User Connection";
    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}

function loginAction(PDO $conn, array $data){
    include_once'../app/models/usersModel.php';
    $user = UsersModel\findOneByEmailAndPassword($conn, $data);
    if($user):
        $_SESSION['user'] = $user;
        header('Location:'.ADMIN_BASE_URL.'dashboard');

    else:
        header('Location:'.PUBLIC_BASE_URL.'users/login-form');
    endif;    
   
}
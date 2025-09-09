<?php
namespace App\Controllers\UsersController;
function logoutAction(){
// on tue la var de session
   unset($_SESSION['user']);

    // on redirige vers la connexion
    header('Location: '.PUBLIC_BASE_URL.'users/login-form');

}
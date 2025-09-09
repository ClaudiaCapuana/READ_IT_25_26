<?php

// route des users
if(isset($_GET['users'])):

include_once '../app/routers/users.php';
else:
//route par défaut:
//PATTERN: /
// CTRL: pagesController
//Action: dashboard

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($conn);
endif;
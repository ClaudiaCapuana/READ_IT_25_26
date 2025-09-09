<?php



//route par défaut:
//PATTERN: /
// CTRL: pagesController
//Action: dashboard

include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($conn);
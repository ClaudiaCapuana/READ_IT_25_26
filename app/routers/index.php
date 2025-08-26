<?php
use \App\Controllers\PostsController;

// Route par défaut: 
// PATTERN: /
// CTRL: postsController
// ACTION: index
include_once '../app/controllers/postsController.php';
PostsController\indexAction($conn);

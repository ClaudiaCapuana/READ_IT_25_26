<?php
use \App\Controllers\PostsController;
// route des posts

if (isset($_GET['posts'])):
   include_once '../app/routers/posts.php';



// Route par défaut: 
// PATTERN: /
// CTRL: postsController
// ACTION: index
else:
include_once '../app/controllers/postsController.php';
PostsController\indexAction($conn);

endif;
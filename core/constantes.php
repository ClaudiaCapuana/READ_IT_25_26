<?php


define('PUBLIC_BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . explode('index.php', $_SERVER['PHP_SELF'])[0]);



// echo $_SERVER['HTTP_HOST'];
// echo explode('index.php',$_SERVER['HTTP_SELF'])[0];
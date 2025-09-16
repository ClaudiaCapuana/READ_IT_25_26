<?php
namespace App\Models\UsersModel;
use \PDO;


function findAll(PDO $conn){
    $sql = "SELECT * FROM users ORDER BY createdat DESC";
    $rs = $conn->query($sql);
return $rs-> fetchAll(PDO::FETCH_ASSOC);
}
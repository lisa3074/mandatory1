<?php
require_once(__DIR__.'/../db.php');
$q = $db ->prepare('SELECT * FROM users');
$q->execute();
$users = $q->fetchAll();

//$user->id is json
//$user['id'] is associative array
foreach($users as $user){
    echo "<div class='user'>
    <div>ID: $user->id</div>
    <div>EMAIL: $user->email</div>
    </div>";

}
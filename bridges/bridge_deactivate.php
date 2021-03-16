<?php
require_once(__DIR__.'/../db.php');
$q = $db ->prepare("UPDATE users SET active=0 WHERE id = :id ");
$q->bindValue(':id', $id);
$q->execute();


session_start();
session_destroy(); 
header('Location: /5_semester_webdev/mandatory1/login');
exit();
<?php
require_once(__DIR__.'/../db.php');
try{
    
    $q = $db ->prepare('SELECT * FROM users WHERE email = :email');
    $q->bindValue(':email', $_POST['user_email']);
    $q->execute();
    $user = $q->fetchAll();

    //email isn't an email (frontend)
    if( ! filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) ){
        header('Location: /5_semester_webdev/mandatory1/login/error/Invalid Email');
        exit();
    }
    //If user does not exist (backend)
    if(count($user) == 0){
        //if email doesn't match user (backend) 
        header('Location: /5_semester_webdev/mandatory1/login/error/Email not found');
        exit();
    }
//if password is less than 8 or more than 50 characters (frontend)
$password_length = strlen($_POST['user_password']);
 if( $password_length > 50 or $password_length < 8){
       if($password_length > 50){
           header('Location: /5_semester_webdev/mandatory1/login/error/Password should be max 50 characters');
           exit();
       }
       header('Location: /5_semester_webdev/mandatory1/login/error/Password should be min 8 characters');
       exit();
   }
//if password does not match the user login (backend)
if($_POST['user_password'] != $user[0]->password){
   header('Location: /5_semester_webdev/mandatory1/login/error/Password does not match the user');
}
else{
    //if all is good
    session_start();
    $_SESSION['email'] = $_POST['user_email'];
    header('Location: /5_semester_webdev/mandatory1/admin');
    exit();
}
    //echo json_encode($user);
}catch(PDOExeption $ex){
    echo $ex;
}
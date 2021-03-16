<?php
require_once(__DIR__.'/../db.php');
    $q = $db ->prepare('SELECT * FROM users WHERE email = :email');
    $q->bindValue(':email', $_POST['user_email']);
    $q->execute();
    $user = $q->fetchAll();

$fname_length = strlen($_POST['user_firstname']);
$lname_length = strlen($_POST['user_lastname']);
$age_length = strlen($_POST['age']);
$password_length = strlen($_POST['user_password']);
$signed_up_user = [];

//Does the email already exist? (backend)
  if(!count($user) == 0){
        header('Location: /5_semester_webdev/mandatory1/signup/error/A user with this email already exists.');
        exit();
    }else{
        //Frontend validation
        if($fname_length < 2){
            header('Location: /5_semester_webdev/mandatory1/signup/error/First name should contain at least 2 characters');
            exit();
        }  
        if($fname_length > 20){
            header('Location: /5_semester_webdev/mandatory1/signup/error/First name should contain max 20 characters');
            exit();
        }
        if($lname_length < 2){
            header('Location: /5_semester_webdev/mandatory1/signup/error/Last name should contain at least 2 characters');
            exit();
        }  
        if($lname_length > 30){
            header('Location: /5_semester_webdev/mandatory1/signup/error/Last name should contain max 20 characters');
            exit();
        }
        if($age_length < 2){
            header('Location: /5_semester_webdev/mandatory1/signup/error/You need to be at least 18 years old to sign up.');
            exit();
        }
        if($age_length < 1){
            header('Location: /5_semester_webdev/mandatory1/signup/error/You need to fill out your age.');
            exit();
        }
        if( ! filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) ){
            header('Location: /5_semester_webdev/mandatory1/signup/error/Invalid Email');
            exit();
        }
        if( !preg_match("/^((?!(0))[0-9]{8})$/", $_POST['user_phone'])){
            header('Location: /5_semester_webdev/mandatory1/signup/error/Phone should contain excactly 8 digits');
            exit();
        } 
        if( $password_length > 50 or $password_length < 8){
            if($password_length > 50){
                header('Location: /5_semester_webdev/mandatory1/signup/error/Password should be max 50 characters');
                exit();
            }
            header('Location: /5_semester_webdev/mandatory1/signup/error/Password should be min 8 characters');
            exit();
        }
        if($_POST['user_password'] != $_POST['confirm_user_password']){
            header('Location: /5_semester_webdev/mandatory1/signup/error/The two passwords does not match');
            exit();
        } 

        //POST all values
        $ran_id = rand(10,100000000);
   
          if( isset($_POST['user_firstname'], $_POST['user_lastname'], $_POST['age'], $_POST['user_email'], $_POST['user_phone'], $_POST['user_password']) ) {
          $q = $db ->prepare("INSERT INTO users (id, firstname, lastname, age, email, phone, password, active) 
            VALUES (
                :id, 
                :firstname, 
                :lastname, 
                :age, 
                :email,
                :phone, 
                :password, 
                1
                )"
            );
            $q->bindValue(':id', $ran_id);
            $q->bindValue(':firstname', $_POST['user_firstname']);
            $q->bindValue(':lastname', $_POST['user_lastname']);
            $q->bindValue(':age', $_POST['age']);
            $q->bindValue(':email', $_POST['user_email']);
            $q->bindValue(':phone', $_POST['user_phone']);
            $q->bindValue(':password', $_POST['user_password']);
            $q->execute();
          }

        
        //Go to profile (successful sign up)
        header('Location: /5_semester_webdev/mandatory1/login');
        exit();
        
    }
        
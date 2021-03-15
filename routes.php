<?php
require_once(__DIR__.'/router.php');


//###################################
//############# GET #################
//###################################

//############# INDEX #################

get('/index', 'serve_index');
function serve_index(){
    $page_title ='COMPANY';
    require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__. '/views/view_index.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# LOGIN #################

get('/login/error/:message', 'serve_error_login');
function serve_error_login($message){
    $display_error = $message;
    $page_title ='LOGIN';
    require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__. '/views/view_login.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}
get('/login', 'serve_login');
function serve_login(){
    $page_title ='LOGIN';
    require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__. '/views/view_login.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# LOGOUT #################

get('/logout', 'logout');
function logout(){
    require_once(__DIR__. '/bridges/bridge_logout.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# USERS #################

get('/users', 'serve_users');
function serve_users(){
    $page_title ='USERS';
    require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__. '/views/view_users.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# ADMIN #################

get('/admin', 'serve_admin');
function serve_admin(){
    session_start();
    
    if(! isset($_SESSION['email'])){
        header('Location: /5_semester_webdev/mandatory1/login');
        exit();
    }
    require_once(__DIR__. '/views/view_admin.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# SIGNUP #################

get('/signup', 'serve_signup');
function serve_signup(){
     require_once(__DIR__. '/views/view_top.php');
     require_once(__DIR__ . '/views/view_signup.php');
     require_once(__DIR__. '/views/view_bottom.php');
exit();
}

get('/signup/error/:message', 'serve_signup_error');
function serve_signup_error($message){
  $display_error_signup = $message;
    require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__ . '/views/view_signup.php');
    require_once(__DIR__. '/views/view_bottom.php');
  exit();
}

//###################################
//############# POST #################
//###################################
// You only use post when you're passing data



//############# LOGIN #################

post('/login', 'login');
function login(){
  require_once(__DIR__.'/bridges/bridge_login.php');
  exit();
}

//############# SIGNUP #################
post('/signup', 'signup');
function signup(){
      require_once(__DIR__ . '/bridges/bridge_signup.php');
    exit();
}

//############# 404 #################

// For GET or POST
any('/404', 'error404');
function error404(){
  echo 'Not found';
  exit();
}
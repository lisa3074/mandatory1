<?php
require_once(__DIR__.'/router.php');


//###################################
//############# GET #################
//###################################

//############# INDEX #################

get('/index', 'serve_index');
function serve_index(){
    $page_title ='COMPANY';
  require_once(__DIR__. '/views/view_default_top.php');
    require_once(__DIR__. '/views/view_index.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# LOGIN #################

get('/login/error/:message', 'serve_error_login');
function serve_error_login($message){
    $display_error = $message;
    $page_title ='LOGIN';
    require_once(__DIR__. '/views/view_default_top.php');
    require_once(__DIR__. '/views/view_login.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}
get('/login', 'serve_login');
function serve_login(){
    $page_title ='LOGIN';
     require_once(__DIR__. '/views/view_default_top.php');
    require_once(__DIR__. '/views/view_login.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# LOGOUT #################

get('/logout', 'logout');
function logout(){
  require_once(__DIR__. '/views/view_default_top.php');
  require_once(__DIR__. '/bridges/bridge_logout.php');
  require_once(__DIR__. '/views/view_bottom.php');
  exit();
}

//############# DEACTIVATE #################

 get('/deactivate/:id', 'serve_deactivate');
function serve_deactivate(){
    require_once(__DIR__. '/views/view_default_top.php');
    require_once(__DIR__. '/views/view_login.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
} 


//############# PROFILE #################

get('/profile/:id', 'serve_profile');
function serve_profile($id){
      $page_title ='PROFILE';
      $user_id = $id;
    session_start();
    
    if(! isset($_SESSION['email'])){
        header('Location: /5_semester_webdev/mandatory1/');
        exit();
    }
       require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__. '/views/view_profile.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}

//############# SIGNUP #################

get('/signup', 'serve_signup');
function serve_signup(){
      $page_title ='SIGN UP';
    require_once(__DIR__. '/views/view_default_top.php');
     require_once(__DIR__ . '/views/view_signup.php');
     require_once(__DIR__. '/views/view_bottom.php');
exit();
}

get('/signup/error/:message', 'serve_signup_error');
function serve_signup_error($message){
  $display_error_signup = $message;
      $page_title ='SIGN UP';
     require_once(__DIR__. '/views/view_default_top.php');
    require_once(__DIR__ . '/views/view_signup.php');
    require_once(__DIR__. '/views/view_bottom.php');
  exit();
}

//############# USERS #################

get('/users/:id', 'serve_users');
function serve_users($id){
    $page_title ='USERS';
    $sort = 'age';
    $order = 'asc';
    session_start();
     if(! isset($_SESSION['email'])){
        header('Location: /5_semester_webdev/mandatory1/');
        exit();
    }
    require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__. '/views/view_users.php');
    require_once(__DIR__. '/views/view_bottom.php');
    exit();
}
get('/users/:id/:sort/:order', 'serve_sort_users');
function serve_sort_users($id, $sort, $order){
   session_start();
     if(! isset($_SESSION['email'])){
        header('Location: /5_semester_webdev/mandatory1/');
        exit();
    }
      $page_title ='USERS';
    require_once(__DIR__. '/views/view_top.php');
    require_once(__DIR__ . '/views/view_users.php');
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

//############# DEACTIVATE #################
post('/deactivate/:id', 'deactivate');
function deactivate($id){
      require_once(__DIR__ . '/bridges/bridge_deactivate.php');
}



//############# 404 #################

// For GET or POST
any('/404', 'error404');
function error404(){
  echo 'Not found';
  exit();
}
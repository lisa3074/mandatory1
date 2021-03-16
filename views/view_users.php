<?php
 require(__DIR__.'/../db.php');
$q = $db ->prepare("SELECT * FROM users WHERE active=1 ORDER BY $sort $order");
$q->execute();
$users = $q->fetchAll(); 

$qi = $db ->prepare("SELECT * FROM users WHERE active=0 ORDER BY $sort $order");
$qi->execute();
$inactive_users = $qi->fetchAll(); 

?>
<h1>ACTIVE USERS</h1>
<h3>Chosen filter:<?php
if($sort == 'firstname'){
    echo ' Name';
    if($order == 'asc'){
        echo ' (A - Z)';
    }else{
        echo ' (Z - A)';
    }
}else{
    echo ' Age';
    if($order == 'asc'){
        echo ' (ascending)';
    }else{
        echo ' (descending)';
    }
}
;
?></h3>
<nav class="sort">
    <a href="/5_semester_webdev/mandatory1/users/<?=$id?>/firstname/asc">
        Name ↑
    </a>
    <a href="/5_semester_webdev/mandatory1/users/<?=$id?>/firstname/desc">
        Name ↓
    </a>
    <a href="/5_semester_webdev/mandatory1/users/<?=$id?>/age/asc">
        Age ↑
    </a>
    <a href="/5_semester_webdev/mandatory1/users/<?=$id?>/age/desc">
        Age ↓ </a>
</nav>
<div class='user_list'>
    <?php


foreach($users as $user){
    echo "<div class='user'>
    <p>NAME: $user->firstname $user->lastname</p>
    <p>AGE: $user->age</p>";
    echo "
    <p>EMAIL: $user->email</p>";
    if($user->active = 0){
        echo "
        <p>ACTIVE: No</p>
           </div>";
    }else{
        echo "
        <p>ACTIVE: Yes</p>
         </div>";
    };
}
echo "</div>";
?>
    <h1>INACTIVE USERS</h1>
    <div class='user_list'>
        <?php

foreach($inactive_users as $i_user){
    echo "<div class='user'>
    <p>NAME: $i_user->firstname $i_user->lastname</p>
    <p>AGE: $i_user->age</p>";
    echo "
    <p>EMAIL: $i_user->email</p>";
    if($i_user->active = 0){
        echo "
        <p>ACTIVE: No</p>
           </div>";
    }else{
        echo "
        <p>ACTIVE: Yes</p>
         </div>";
    };
}
echo "</div>";
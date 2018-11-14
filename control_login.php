<?php
  session_start();
  require_once './modelos_usuarios.php';
  $userslistPath = getProducts();

function login($gamertag, $password){

    global $userslistPath;
    foreach($userslistPath as $userlist){

    if(($userlist["gamertag"]===$gamertag) && ($userlist["password"] === $password) ){
        $_SESSION["gamertag"] = $gamertag;
        $_SESSION["password"] = $password;
        $_SESSION["start_time"] = time();
        $_SESSION["started"] = true;

        return true;
    }
}

    return false;

}


if( isset($_POST["login"]) && isset($_POST["gamertag"]) && isset($_POST["password"]) ){

    if( login($_POST["gamertag"], $_POST["password"]) ){
        header("Location: ./profile.php");
    }
    else{
        header("Location: ./login.php");
    }

}

 ?>

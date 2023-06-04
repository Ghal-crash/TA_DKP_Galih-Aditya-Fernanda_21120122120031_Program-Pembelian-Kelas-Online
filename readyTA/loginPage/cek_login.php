<?php
    include("config_login.php");
    $user = new userConfig($_POST['email'], $_POST['password']);
    if($get_user = $user->login()){
        header("Location: ../homePage/index.php");
    }else{
        header("Location: ./failed_login.php");
    }
  ?>
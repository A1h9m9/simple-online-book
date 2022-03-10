<?php
if(isset($_POST['username'])&&
isset($_POST['name']) &&
isset($_POST['password'])){
    //db connect
include './db.php';

    $username= $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $data= 'name=' . $_POST['name'] . '&username=' . $_POST['username'];
    if(empty($name)){
        $em='name is required';
        header("Location:signup.php?error=$em&$data");
        exit;
    }elseif(empty($username)){
        $em = 'username is required';
        header("Location:signup.php?error=$em&$data");
        exit;
    }elseif(empty($password)){
        $em = 'password is required';
        header("Location: signup.php?error=$em&$data");
        exit;
    }else{
       $stmt=$con->prepare("SELECT username FROM users WHERE username=?");
       $stmt->execute([$username]);
       if($stmt->rowCount()>0){
           $em="this username is taken";
            header("Location:signup.php?error=$em&$data");
            exit;
       }else{
            $stmt = $con->prepare("INSERT INTO users (name, username, password)VALUE(:zname, :zusername, :zpassword)");
            $stmt->execute(array(
                'zname' => $name,
                'zusername' => $username,
                'zpassword' => $password,
            ));
            if($stmt->rowCount() > 0){
                echo 'Account create successfully';
                header("Location:index.php");
                exit;
            }
       }
    }
}else{
    header("Location:signup.php");
    exit;
}

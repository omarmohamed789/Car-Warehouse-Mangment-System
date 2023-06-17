<?php
session_start();

// initializing variables
$username = " ";
$email= " ";
$errors = array(); 

// connect to the database
include('config.php');

//registration
if (isset($_POST['reg_user'])){
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $first_name=mysqli_real_escape_string($db,$_POST['first_name']);
    $last_name=mysqli_real_escape_string($db,$_POST['last_name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2=mysqli_real_escape_string($db,$_POST['password_2']);
    $mobile=mysqli_real_escape_string($db,$_POST['mobile']);
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($first_name)){
        array_push($errors,'First Name is required');
    }
    if(empty($last_name)){
        array_push($errors,'Last Name is required');
    }
    if(empty($email)){
        array_push($errors,'Email is required');
    }
    if(empty($mobile)){
        array_push($errors,'Mobile is required');
    }
    if(empty($password_1)){
        array_push($errors,'Password is required');
    }
    if($password_1!= $password_2){
        array_push($errors,'The Two passwords do not match');
    }
    //check user exists
    $user_check_query= "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
    $result =mysqli_query($db,$user_check_query);
    $user=mysqli_fetch_assoc($result);
    if($user){
        if($user['username']===$username){
            array_push($errors, "Username already exists");
        }
        if($user['email']===$email){
            array_push($errors, "Email already exists");
        }
    }
    if(count($errors)==0){
        $password=md5($password_1);
        $query="INSERT INTO register (username,email,password_1,first_name,last_name,mobile)
        VALUES('$username','$email','$password','$first_name','$last_name','$mobile')";
        mysqli_query($db,$query);
        $_SESSION['username']=$username;
        $_SESSION['first_name']=$first_name;
        $_SESSION['last_name']=$last_name;
        header('location:html/login.html');
        
    }
};
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password_1']);

    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($password)){
        array_push($errors,"Password is required");
    }
    if(count($errors)== 0){
        $password =md5($password);
        if(md5($_POST['password_1']) !== $password)
        {
            echo"Password is required";
        }
            $query="SELECT * FROM register WHERE username='$username' AND password_1='$password'";
         $sql="SELECT first_name,last_name FROM register WHERE username='$username' AND password_1='$password'";
         $result=mysqli_query($db,$sql);
         $row=mysqli_fetch_assoc($result);

          $results= mysqli_query($db,$query);
          $res=mysqli_num_rows($results);
          if($res){
            $_SESSION['username'] = $username;
            $_SESSION['first_name'] =$row["first_name"];
            
            $_SESSION['last_name'] =$row["last_name"];
            header('location:html/display.html');
          }
          else 
          {
            array_push($errors, "Wrong username/password combination");
          }
        }
          
    }
    ?>
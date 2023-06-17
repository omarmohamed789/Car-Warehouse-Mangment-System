<?php
$errors = array(); 
include('config.php');
$carID=$_GET['updateid'];
$sql="SELECT * FROM product WHERE car_id=$carID";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$carID=$row['car_id'];
$carModel=$row['car_model'];
$carColor=$row['car_color'];
$Quantity=$row['quantity'];
if(isset($_POST['car_new'])){
    $carModel= mysqli_real_escape_string($db,$_POST['car_model']);
    $carColor= mysqli_real_escape_string($db,$_POST['car_color']);
    $Quantity= mysqli_real_escape_string($db,$_POST['quantity']);
  
    if(empty($carID)){
      array_push($errors,"CarID is required");
     }
    if(empty($carModel)){
      array_push($errors,"CarModel is required");
     }
    if(empty($carColor)){
      array_push($errors,"CarColor is required");
      }
    if(empty($Quantity)){
      array_push($errors,"Quantity is required");
      }
      $query="UPDATE  product SET car_id='$carID',car_model='$carModel',car_color='$carColor',quantity='$Quantity' WHERE car_id=$carID";
      $result=mysqli_query($db,$query);
      if($result){
          header('location: display.php');
      }
      else{
          array_push($errors, "Wrong car combination");
      }
  
  }
  include('html/update.html');
?>

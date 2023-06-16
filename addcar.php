<?php 
include('config.php');
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
      $query="INSERT INTO  product (car_id,car_model,car_color,quantity)
      VALUES('$carID','$carModel','$carColor','$Quantity')";
      $result=mysqli_query($db,$query);
      if($result){
          header('location: display.php');
      }
      else{
          array_push($errors, "Wrong car combination");
      }
  
  }

?>
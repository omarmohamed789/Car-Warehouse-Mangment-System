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

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/car.css">
</head>

<body>
    <div class="car-form">
        <form method="POST">
            <?php include('errors.php'); ?>
            <div class="form-icon">
                <span><i class="icon icon-magic-wand"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="car_model" id="car_model" placeholder="Car Model"
                    required value=<?php echo $carModel?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="car_color" id="car_color" placeholder="Car Color"
                    required value=<?php echo $carColor?> >
            </div>
            <div class="form-group">
                <input type="number" class="form-control item" name="quantity" min="1"  id="quantity" placeholder="Quantity"
                    required value=<?php echo $Quantity?> >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-car" name="car_new">Update Car</button>
            </div>
        </form>

    </div>
    </div>

</body>

</html>

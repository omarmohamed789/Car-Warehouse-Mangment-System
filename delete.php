<?php
include('config.php');
if(isset($_GET['deleteid'])){
    $carID=$_GET['deleteid'];
    $sql="DELETE FROM product WHERE car_id=$carID";
    $result=mysqli_query($db,$sql);
    if($result){
        header('location:display.php');
    }
}
?>

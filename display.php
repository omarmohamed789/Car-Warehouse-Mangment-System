
<?php 
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Warehouse magment system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/display.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <a href="car.php" class="btn btn-sm btn-primary pull-left"><i
                                        class="fa fa-plus-circle"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th>Car-ID</th>
                                    <th>Car-Model</th>
                                    <th>Car-Color</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                          $sql="SELECT * FROM product " ;
                          $result=mysqli_query($db,$sql);
                          if($result){
                            while($row= mysqli_fetch_assoc($result)){
                                 $carID=$row['car_id'];
                                 $carModel=$row['car_model'];
                                 $carColor=$row['car_color'];
                                 $Quantity=$row['quantity'];
                                 echo' <tr>
                                 <td>'.$carID.'</td>
                                 <td>'.$carModel.'</td>
                                 <td>'.$carColor.'</td>
                                 <td>'.$Quantity.'</td>
                                 <td>
                                     <ul class="action-list">
                                         <li><a href="update.php?
                                         updateid='.$carID.'" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a></li>
                                         <li><a href="delete.php?
                                         deleteid='.$carID.'" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                                     </ul>
                                 </td>
                             </tr>
                                 ';
                                 
                            }
                          }
                          
                          
                          
                          
                          
                          ?>




                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


</body>

</html>
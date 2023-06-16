<?php
$errors = array(); 
include('config.php');

include ('addcar.php');
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
                    required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="car_color" id="car_color" placeholder="Car Color"
                    required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control item" name="quantity" min="1"  id="quantity" placeholder="Quantity"
                    required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-car" name="car_new">Add New Car</button>
            </div>
        </form>

    </div>
    </div>

</body>

</html>
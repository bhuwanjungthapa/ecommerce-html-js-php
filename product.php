<?php

session_start();


require_once ('component.php');


// create instance of Createdb class
$database = "web";

if (isset($_POST['add'])){
   // print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "f_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'product.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                "f_id" => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
            // print_r($_POST['product_id']);
        }

    }else{

        $item_array = array(
                'f_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        // print_r($_POST['product_id']);
    }
}




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="cartproduct.css">
</head>
<body>


<?php require_once ("header.php"); ?>
<div class="container">
        <div class="row text-center py-5">
            <?php
                        $conn=mysqli_connect('localhost','root','','web');
                        $sql= "SELECT * FROM cooler";
                        $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['f_name'], $row['f_price'], $row['f_id']);
                }
            ?>
        </div>
</div>


<div class="container">
        <div class="row text-center py-5">
            <?php
                        $conn=mysqli_connect('localhost','root','','web');
                        $sql= "SELECT * FROM cpu";
                        $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['c_name'], $row['c_price'], $row['c_id']);
                }
            ?>
        </div>
</div>

<div class="container">
        <div class="row text-center py-5">
            <?php
                        $conn=mysqli_connect('localhost','root','','web');
                        $sql= "SELECT * FROM gpu";
                        $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['g_name'], $row['g_price'], $row['g_id']);
                }
            ?>
        </div>
</div>

<div class="container">
        <div class="row text-center py-5">
            <?php
                        $conn=mysqli_connect('localhost','root','','web');
                        $sql= "SELECT * FROM ram";
                        $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['r_name'], $row['r_price'], $row['r_id']);
                }
            ?>
        </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
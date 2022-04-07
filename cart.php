<?php

session_start();
$_SESSION['products'] = '';
$_SESSION['cpu']=array();
$_SESSION['cooler']=array();
$_SESSION['ram']=array();
$_SESSION['gpu']=array();

$_SESSION['uid'] = '';

require_once ("component.php");

$conn=mysqli_connect('localhost','root','','web');

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['product_id']){
            
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
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
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
       <link rel="stylesheet" href="cartproduct1.css">
       <link rel="stylesheet" href="cartproduct.css">

   
</head>
<body class="bg-light">

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.php"><img src="logo.jpg" style="width:100px;height:100px;"> </a>    
    <a href="product.php" class="navbar-brand">
            <h3 class="px-5">
           
            <i class="fas fa-shopping-basket"></i> Welcome to the cart
                
                
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'f_id'); 
                        $conn=mysqli_connect('localhost','root','','web');
                        ?>
                        <?php
                        $sql= "SELECT * FROM cooler";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['f_id'] == $id){
                                    array_push($_SESSION['cooler'],$row['f_id']);
                                    ?>
                                    <?php
                                    cartElement($row['f_name'],$row['f_price'], $row['f_id']);
                                 
                                    $_SESSION['products'] .= $row['f_name'].", ";
                                    $total = $total + (int)$row['f_price'];
                                    
                                }
                            }
                        }
                        ?>
                        <?php
                        $sql= "SELECT * FROM cpu";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['c_id'] == $id){
                                    array_push($_SESSION['cpu'],$row['c_id']);
                                    
                                    cartElement($row['c_name'],$row['c_price'], $row['c_id']);
                                    $_SESSION['products'] .= $row['c_name'].", ";
                                    $total = $total + (int)$row['c_price'];
                                }
                            }
                        }
?>
<?php
                        $sql= "SELECT * FROM gpu";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['g_id'] == $id){
                                    array_push($_SESSION['gpu'],$row['g_id']);
                                    
                                    cartElement($row['g_name'],$row['g_price'], $row['g_id']);
                                    $_SESSION['products'] .= $row['g_name'].", ";
                                    $total = $total + (int)$row['g_price'];
                                }
                            }
                        }
?>
<?php
                        $sql= "SELECT * FROM ram";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['r_id'] == $id){
                                    array_push($_SESSION['ram'],$row['r_id']); 
                                    cartElement($row['r_name'],$row['r_price'], $row['r_id']);
                                    $_SESSION['products'] .= $row['r_name'].", ";
                                    $total = $total + (int)$row['r_price'];
                                }
                            }
                        }
?>
<?php

                    }else{
                        
                        echo "<h5>Cart is Empty</h5>";
                       // echo $_SESSION['cart']['f_id'];
                           
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <h6>Payment Type</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                        <hr>
                        <button onclick="document.getElementById('id01').style.display='block'" style=" background-color: #008CBA; margin-left:150px;border: none;color: white;padding: 15px;text-align: center;
                        text-decoration: none; display: inline-block; font-size: 16px;" type="submit" >Checkout</button>
                    </div>
                    
                    
                    <div class="col-md-6">
        
                   <?php $_SESSION['total_price']=$total;  ?>
                        <h6>Npr <?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <h6 class="text-success">Cash on Delivery</h6>
                        <hr>
                        <h6>Npr <?php
                            echo $total;
                            ?></h6>
                    </div>




                    
<!--Login Popup-->
<div id="id01" class="login">

    <div class="main">
        <div class="container" id="container">
            <div class="form-container log-in-container">
                <form method="POST" action="">
                    <h1 style="color:green;">Enter you Credentials</h1>
                    
                    <input type="text" name="name" id="name" value="" placeholder="Full Name" required>
                    <input type="number" name="phone" id="phone" value="" placeholder="Phone Number" required>
                    <input type="text" name="address" id="address" value="" placeholder="Home Address" required>
                    
                    <button type="submit" name="submitorder">Submit</button>  
                </form>
            </div>
           
        </div>
       
    </div>
</body>
</html>

<?php
	if(isset($_POST['submitorder'])){
        $total = $_SESSION['total_price'];

       substr( $_SESSION['products'], 0, -1);
       $products = $_SESSION['products'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['address'] = $_POST["address"];
        $_SESSION['name'] = $_POST['name'];

		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"web");
		$query = "insert into orderlist1 values(null,'$_POST[name]',$_POST[phone],'$_POST[address]','$products', $total)";
		$query_run = mysqli_query($connection,$query);
		echo "<script type='text/javascript'>
            alert('order added successfully');
            window.location.href = 'disporder.php';
        </script>";
	}
?>


</div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

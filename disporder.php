<?php

session_start();
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
       <link rel="stylesheet" href="disp.css">


   
</head>
<body class="bg-light">
    
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.php"><img src="logo.jpg" style="width:100px;height:100px;"> </a>    
    <a href="product.php" class="navbar-brand">
            <h3 class="px-5">
           
            <i class="fas fa-shopping-basket"></i> Back to the shop
                
                
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



<style>
    
</style>


<div class="menu">
<table class="table-bordered">
				<tr>
					<th>Name:</th>
					<th>Phone</th>
					<th>Address:</th>
					<th>Products:</th>
					<th>Total Price:</th>

				</tr>
				
						<tr>
							<td><?php echo $_SESSION['name']; ?></td>
							<td><?php echo $_SESSION['phone']; ?></td>
                            <td><?php echo $_SESSION['address']; ?></td>
                            <td><?php echo $_SESSION['products']; ?></td>
                            <td><?php echo $_SESSION['total_price']; ?></td>
							
						</tr>
					
			</table>
</div>
</body>
</html>

<?php
session_destroy();
?>
<?php
session_start();
$_SESSION["u_id"] = rand(21000,30000);
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForgePC</title>
	<link rel="stylesheet" type="text/css" href="style2.css">

	<link
 	 href="https://fonts.googleapis.com/css?family=Poppins&display=swap"
      rel="stylesheet"
    />

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
      integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
      crossorigin="anonymous"
    /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">

	<!--  Favicon -->
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" sizes="32*32">  

     <!-- Fontawesome -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
</head>
<body>


<header>
	<div class="top">
		<p>  <span id="span1"> 24/7 Life Support  </span>
		<span id="span2"> <i class="fa fa-phone" aria-hidden="true"></i> +977 9827355425 </span> 
  </p>
		
	</div>
<div class="nav">
	<ul class="topnav" id="myTopnav">
		<li class="logo">ForgePC</li>
		<li>HOME</li>
		<li> <a href="product.php" style="text-decoration:none; color:white;" target="_blank">PRODUCTS</a>  </li>
		<li><a style="text-decoration: none; color: white; " href="about.html" target="_blank">ABOUT</a> </li>
		<li class="offer" onclick="scrollWin(0,3450)">CONTACT</li>
		
		

<!--Login Popup-->
<div id="id01" class="login">
	<form action="" class="login-content">
		<div class="imgcontainer">
			<span onclick="document.getElementById('id01').style.display = 'none'" class="close"
			title="Close Login">&times;</span>
			<img src="img/bhuwan.PNG" alt="Avatar" class="avatar">
		</div>
		<div class="containerl">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username.." name="uname" required>
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter password" name="psw" required>
			<button type="submit">Login</button>
		</div>
		<div class="containerl" style="background-color:#f1f1f1">
		<button type="button" 
		onclick="document.getElementById('id01').style.display='none'" 
		class="cancelbtn">Cancel</button>

		</div>
	</form>
	
</div>
	</ul>
	</div>

	
</header>
<!-- Body1 -->
<img id="img11" src="img/image1.jpg" width="100%" height="675px">

<div class="body">
	<h1 class="nvdi">THE ULTIMATE PLAY</h1>
	<p class="nvidia">NVIDIA GeForce RTX 3070 Ti and 3080 Ti now <br> avaiable at 
	<span style="color: red;" class="logo1">ForgePC</span></p>
	<a href="product.php"><button class="learn">SHOP NOW</button></a>
</div>


<h1 id="fp" style="text-align:center; color: white; margin-top: -7px;
padding-top: 50px;
background-color: black">FEATURED PRODUCTS</h1>


<!-- Products -->

<div class="container">

	<div class="top-row">
		<div class="glaptop">
			<img src="img/cpu.png" alt="case">
			<p><a href="product.php"> CPU</a> </p>
			<a href="product.php"><button>BUY NOW</button></a>
		</div>

		<div class="cpu">
			<img src="img/gpu.png" alt="mb">
			<p> <a href="product.php">GPU</a> </p>
			<a href="product.php"><button>BUY NOW</button></a>
		</div>
	</div>

	<div class="mid-row">
		<div class="processor">
			<img src="img/ram.png" alt="processor">
			<p> <a href="product.php">RAM </a></p>
			<a href="product.php"><button>BUY NOW</button></a>
		</div>

		<div class="cooler">
			<img src="img/cooler.png" alt="CPU Cooler">
			<p> <a href="product.php">CPU Cooler</a> </p>
			<a href="product.php"><button>BUY NOW</button></a>
		</div>
	</div>

<!-- <div class="bottom-row">
		<div class="gpu">
			<img src="image6.jpg" alt="gpu">
			<p> <a href="#">ACCESSORIES</a> </p>
			<button>BUY NOW</button>
		</div>

	 <div class="ram">
			<img src="image4.jpg" alt="ram">
			<p>RAM</p>
			<button>Add to Cart</button>
		</div> 
	</div> -->


</div>

<!-- Testimonial -->


<div id="cont">
<div class="container1">
	<h2 class="testimonial">TESTIMONIALS</h2>
        <div class="wrapper">

            <div class="card">

                <div class="card-thumb">
                    <img src="img/Timg1.jpeg" class="client-img" alt="">
                    <span class="client-name">Scarlette</span>
                </div>

                <div class="card-body">
                    <p class="review">"The CEO ,Nishanta helped me with a new pc build I had done using some of the parts I had bought from an old ForgePC. He was extremely helpful and quick with whatever questions I had and helped guide my project. I was very happy that during the process I had zero issues from start to finish! Great leader!!"</p>
                    <div class="rating">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-no-fill.png" class="star" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-thumb">
                    <img src="img/Timg2.jpg" class="client-img" alt="">
                    <span class="client-name">Tim Cook</span>
                </div>
                <div class="card-body">
                    <p class="review">"Very, VERY pleased with my new rig from ForgePC! A beautiful machine well-built, super nice support staff, fast shipping even with this Covid insanity and love the way the machine was packed! No issues during boot; actually, the only issue I have is where to place this rig so I can pet it on a daily. Yep, I'm way happy. Thanks Nishant and whole team I will most certainly recommend y'all to others! Rock on!"</p>
                    <div class="rating">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-thumb">
                    <img src="img/Timg3.jpeg" class="client-img" alt="">
                    <span class="client-name">Bill</span>
                </div>
                <div class="card-body">
                    <p class="review">"I had an issue with my PC that started small and just turned into a parade of errors. Support was able to walk me through all the steps to troubleshoot the problem, provided me with clear instructions and was incredibly patient and willing to work with me regardless of the hour I was calling. Because of them I was able to resolve the issue on the same day, which was beyond my expectations."</p>
                    <div class="rating">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-fill.png" class="star" alt="">
                        <img src="img/star-no-fill.png" class="star" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="indicators">
            <button class="active"></button>
            <button></button>
            <button></button>
        </div>
    </div>
</div>

<!-- <div class="container1">
  <img src="img/Timg1.jpeg" alt="Avatar" style="width:90px; height: 120px;">
  <p><span>Scarlette</span> CEO at Mighty Schools.</p>
  <p style="font-size: 20px;">"The CEO ,Nishanta helped me with a new pc build I had done using some of the parts I had bought from an old ForgePC. He was extremely helpful and quick with whatever questions I had and helped guide my project. I was very happy that during the process I had zero issues from start to finish! Great leader!!"</p>

</div>

<div class="container1">
  <img src="img/Timg2.jpg" alt="Avatar" style="width:90px" height="120px">
  <p><span>Tim Cook</span> CEO at Apple</p>
  <p style="font-size:20px">"Very, VERY pleased with my new rig from ForgePC! A beautiful machine well-built, super nice support staff, fast shipping even with this Covid insanity and love the way the machine was packed! No issues during boot; actually, the only issue I have is where to place this rig so I can pet it on a daily. Yep, I'm way happy. Thanks ForgePC! I will most certainly recommend y'all to others! Rock on!"</p>
</div>
 -->

<!-- INDUSTRY AWARDS -->

<h1 class="iw">INDUSTRY AWARDS</h1>


<div class="award">
	
	<div class="frow">
			<img src="img/award1.webp" alt="award 1st">
			<img src="img/award2.webp" alt="award 2nd">
			<img src="img/award3.webp" alt="award 3rd">
	
</div>

	<div class="srow">
			<img src="img/award4.webp" alt="award 4th">
			<img src="img/award5.webp" alt="award 5th">
			<img src="img/award6.webp" alt="award 6th">
	</div>
</div>
</div>




<!-- 	COVID-19 -->
<div class="covid">
	<p class="txt2">
		<i class="fas fa-exclamation-triangle"></i>
		 COVID 19 :  <b>ForgePC</b> is operating and following health 
		 guidelines to keep our employees safe. This situation is impacting 
		 delivery and service levels. We thank you greatly for your patience.
	</p>
</div>


<!-- CONTACT FORM -->

<h1 class="contact">CONTACT FORM</h1>

<div class="container2">
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="validateForm()" method="post">

    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Your name.." required>

    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email.." required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
    	<option value="nepal">Nepal</option>
      <option value="australia">Australia</option>
      <option value="china">China</option>
      <option value="new-zealand">New Zealand</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="other">Other</option>
    </select>

	
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write your message.." style="height:200px" required></textarea>

    <input type="submit" value="Submit" name="add">
  </form>
</div>




<!-- Footer -->




<footer>
	<div class="footer-content">
		<h3>ForgePC</h3>
		<p>	"Customizing your dream Computer"
			<br>
			Baneswor, Kathmandu <br>
			01-556774, 556065 <br>
			contactforgepc@info.com
		</p>

		<ul class="socials">
			<li><a href="https://www.facebook.com/Forgepc-103341548892664/" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://twitter.com/forgepc" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
		</ul>

	</div>
	<div class="footer-bottom">
		<p>Copyright &copy; 2022 ForgePC. desined by <span>Nishant Nepal, Bhuwan Jung Thapa, Saujanya Chand </span></p>
	</div>
</footer>


<!-- <footer>
	<div class="row">
		<p>Connect With us</p>
	</div>

	<div class="row">
		<ul class="social-links">
			<li><a href="#"><i class="fa fa-facebook" style="font-size:24px"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram" style="font-size:24px"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" style="font-size:24px"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a></li>
		</ul>
	</div>

	<div class="row">
		<p>
			&copy;Copyrights ForgePC. All right reserved
		</p>
	</div>

</footer>
 -->

<!-- 
<footer>
	
		<p class="des">
			<h2>ForgePC</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</p>

	<ul>
		<li>Links</li>
		<li>h</li>
		<li>a</li>
		<li>b</li>
	</ul>

	<ul>
		<li>Social</li>
		<li>f</li>
		<li>t</li>
		<li>i</li>
	</ul>
	
</footer>
   -->

<?php

///contact form 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection Failed: " .mysqli_connect_error());
}

 $errFirstname=$erremail=$errCountry=$errMessage="";
     if(isset($_POST['add'])){
        $FullName=$_POST['fullname'];
         $Email=$_POST['email'];
         $Country=$_POST['country'];
		 $Message = $_POST['message'];


$sql = "INSERT INTO contact(contact_name,contact_email, contact_country, contact_msg)
		 VALUES('$FullName', '$Email', '$Country', '$Message')";



if (mysqli_query($conn, $sql)) {
    echo '<script> alert ("Sucessfully sent")</script>';
  } 
  
  else {
    echo "Error adding value: " . mysqli_error($conn);
  }

	 }

mysqli_close($conn);






// $sql = "CREATE TABLE Contact (
// 	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 	Full_Name VARCHAR(30) NOT NULL,
// 	email VARCHAR(30) NOT NULL,
// 	country VARCHAR(50),
// 	message VARCHAR(70)
// 	)";





?>







<script src="app.js"></script> 
</body>
</html>




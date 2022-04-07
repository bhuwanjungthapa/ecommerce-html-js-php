<html>
<head>
     <title>Edit Panel</title>
</head>
<style>
   *{
    margin-top:30px;
    text-align: center;
    justify-content: center;
    font-size:30px;
    padding: 0;
    box-sizing: border-box;
    }
    body{
    background: linear-gradient(45deg, #49a09d, #5f2c82);
    }
    form{
    margin-left:700px;
    background-color: rgba(255,255,255,0.2);
	color: #fff;
    text-align:center;
    width:500px;
    padding:30px;
    }
</style>
<body>
    <!Initlialize Admin Components->
    <div>
        <a href="admin.php"><button>Back to admin</button></a>
    </div>
    <?php
    $id = $_REQUEST['id'];

    //Preaparing Components Editions
    switch ($id){

    //User Delete
    case ($id>= "10000" && $id<= "20000"):
        $id = $_GET['id'];
        //connect to database
        $conn = mysqli_connect('localhost','root','','web');
        //query to delete record from tbl_category with id
        $sql = "delete from orderlist1 where oid = $id";
        //execute query
        mysqli_query($conn, $sql);
        
        //redirect to listing page
        header('location:admin.php');        
    break;
    
    //CPU Delete
    case ($id>= "1000" && $id<= "1999"): 
        $id = $_GET['id'];
        //connect to database
        $conn = mysqli_connect('localhost','root','','web');
        //query to delete record from tbl_category with id
        $sql = "delete from cpu where c_id = $id";
        //execute query
        mysqli_query($conn, $sql);
        
        //redirect to listing page
        header('location:admin.php');
    break;
    
    //GPU Delete
    case ($id>= "2000" && $id<= "2999"): 
        $id = $_GET['id'];
        //connect to database
        $conn = mysqli_connect('localhost','root','','web');
        //query to delete record from tbl_category with id
        $sql = "delete from gpu where g_id = $id";
        //execute query
        mysqli_query($conn, $sql);
        
        //redirect to listing page
        header('location:admin.php');
    break;
    
    //RAM Delete
    case ($id>= "3000" && $id<= "3999"): 
        $id = $_GET['id'];
        //connect to database
        $conn = mysqli_connect('localhost','root','','web');
        //query to delete record from tbl_category with id
        $sql = "delete from ram where r_id = $id";
        //execute query
        mysqli_query($conn, $sql);
        
        //redirect to listing page
        header('location:admin.php');
    break;
    
    //Cooler Delete
    case ($id>= "4000" && $id<= "5999"): 
        $id = $_GET['id'];
        //connect to database
        $conn = mysqli_connect('localhost','root','','web');
        //query to delete record from tbl_category with id
        $sql = "delete from cooler where f_id = $id";
        //execute query
        mysqli_query($conn, $sql);
        
        //redirect to listing page
        header('location:admin.php');
    break;
    
    default: 
        echo "Invalid ID";
    break;
 }

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

    //CPU Editing
    case ($id>= "1000" && $id<= "1999"): 
            $conn = mysqli_connect('localhost','root','','web');
            if (isset($_POST['submit1'])) {
                //$id1=$_POST['id'];
                $c_name = $_POST['c_name'];
                $c_price = $_POST['c_price'];
                $c_stock=$_POST['c_stock'];

                $sql = "UPDATE cpu set c_name = '$c_name' , c_price = '$c_price',c_stock='$c_stock' where c_id = '$id'";
                mysqli_query($conn, $sql);
                if (mysqli_affected_rows($conn) == 1) {
                echo "updated successfully";
            }
            else{
                echo "Data update failed".mysqli_error($conn);
            }
            }
            $sql1 = "select * from cpu where c_id = $id";
            $res = mysqli_query($conn, $sql1);
            $data = mysqli_fetch_assoc($res);
        ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input type="hidden" name="id" value="<?php echo $data['c_id'] ?>">
                    <label>CPU Name:</label>
                    <input type="text" name="c_name" value="<?php echo $data['c_name']; ?>">
                    <br>
                    <label>CPU Price:</label>
                    <input type="number" name="c_price" value="<?php echo $data['c_price']; ?>">
                    <br>
                    <label>CPU Stock:</label>
                    <input type="number" name="c_stock" value="<?php echo $data['c_stock']; ?>">
                    <br>
                    <button type="submit" name="submit1">Submit</button>
                    
                </form>
                <script>
                        if ( window.history.replaceState ) {
                              window.history.replaceState( null, null, window.location.href );
                            }
                        </script>
            </div>
       <?php
    break;
    
    //GPU Editing
    case ($id>= "2000" && $id<= "2999"): 
        $conn = mysqli_connect('localhost','root','','web');
        if (isset($_POST['submit2'])) {
            //$id1=$_POST['id'];
            $g_name = $_POST['g_name'];
            $g_price = $_POST['g_price'];
            $g_stock=$_POST['g_stock'];

            $sql = "UPDATE gpu set g_name = '$g_name' , g_price = '$g_price',g_stock='$g_stock' where g_id = '$id'";
            mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) == 1) {
            echo "updated successfully";
        }
        else{
            echo "Data update failed".mysqli_error($conn);
        }
        }
        $sql1 = "select * from gpu where g_id = $id";
        $res = mysqli_query($conn, $sql1);
        $data = mysqli_fetch_assoc($res);
    ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input type="hidden" name="id" value="<?php echo $data['g_id'] ?>">
                <label>GPU Name:</label>
                <input type="text" name="g_name" value="<?php echo $data['g_name']; ?>">
                <br>
                <label>GPU Price:</label>
                <input type="number" name="g_price" value="<?php echo $data['g_price']; ?>">
                <br>
                <label>GPU Stock:</label>
                <input type="number" name="g_stock" value="<?php echo $data['g_stock']; ?>">
                <br>
                <button type="submit" name="submit2">Submit</button>
                
            </form>
            <script>
                    if ( window.history.replaceState ) {
                          window.history.replaceState( null, null, window.location.href );
                        }
                    </script>
        </div>
   <?php
    break;
    
    //RAM Editing
    case ($id>= "3000" && $id<= "3999"): 
        $conn = mysqli_connect('localhost','root','','web');
        if (isset($_POST['submit3'])) {
            //$id1=$_POST['id'];
            $r_name = $_POST['r_name'];
            $r_price = $_POST['r_price'];
            $r_stock=$_POST['r_stock'];

            $sql = "UPDATE ram set r_name = '$r_name' , r_price = '$r_price',r_stock='$r_stock' where r_id = '$id'";
            mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) == 1) {
            echo "updated successfully";
        }
        else{
            echo "Data update failed".mysqli_error($conn);
        }
        }
        $sql1 = "select * from ram where r_id = $id";
        $res = mysqli_query($conn, $sql1);
        $data = mysqli_fetch_assoc($res);
    ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input type="hidden" name="id" value="<?php echo $data['r_id'] ?>">
                <label>RAM Name:</label>
                <input type="text" name="r_name" value="<?php echo $data['r_name']; ?>">
                <br>
                <label>RAM Price:</label>
                <input type="number" name="r_price" value="<?php echo $data['r_price']; ?>">
                <br>
                <label>RAM Stock:</label>
                <input type="number" name="r_stock" value="<?php echo $data['r_stock']; ?>">
                <br>
                <button type="submit" name="submit3">Submit</button>
                
            </form>
            <script>
                    if ( window.history.replaceState ) {
                          window.history.replaceState( null, null, window.location.href );
                        }
                    </script>
        </div>
   <?php
    break;
    
    //Cooler Editing
    case ($id>= "4000" && $id<= "5999"): 
        $conn = mysqli_connect('localhost','root','','web');
        if (isset($_POST['submit4'])) {
            //$id1=$_POST['id'];
            $f_name = $_POST['f_name'];
            $f_price = $_POST['f_price'];
            $f_stock=$_POST['f_stock'];

            $sql = "UPDATE cooler set f_name = '$f_name' , f_price = '$f_price',f_stock='$f_stock' where f_id = '$id'";
            mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) == 1) {
            echo "updated successfully";
        }
        else{
            echo "Data update failed".mysqli_error($conn);
        }
        }
        $sql1 = "select * from cooler where f_id = $id";
        $res = mysqli_query($conn, $sql1);
        $data = mysqli_fetch_assoc($res);
    ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input type="hidden" name="id" value="<?php echo $data['f_id'] ?>">
                <label>Cooler Name:</label>
                <input type="text" name="f_name" value="<?php echo $data['f_name']; ?>">
                <br>
                <label>Cooler Price:</label>
                <input type="number" name="f_price" value="<?php echo $data['f_price']; ?>">
                <br>
                <label>Cooler Stock:</label>
                <input type="number" name="f_stock" value="<?php echo $data['f_stock']; ?>">
                <br>
                <button type="submit" name="submit4">Submit</button>
                
            </form>
            <script>
                    if ( window.history.replaceState ) {
                          window.history.replaceState( null, null, window.location.href );
                        }
                    </script>
        </div>
   <?php
    break;
    
    default: 
        echo "Invalid ID";
    break;
 }

<?php
$conn=mysqli_connect('localhost','root','','web');
?>
<html>
<head>
     <title>Admin Panel</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background: linear-gradient(45deg, #49a09d, #5f2c82);
    }

    .menu {
        background: linear-gradient(1deg, #49a09d, #5f2c82);
        height: 80px;
        padding: 5px;
        position: -webkit-sticky;
        position: sticky;
        top: 0px;
        text-align: center;
        justify-content: center;
        width: auto;
    }
        
    .menu li {
        width: 200px;
        text-align: center;
        list-style: none;
        background-color: rgba(255,255,255,0.2);
        display: inline-block;
        align-items: center;
        justify-content: center;
    }
        
    .menu a {
        padding: 18px 0;
        border-left: 1px solid #ccc9c9;
        text-decoration: none;
        color: white;
        display: block;
    }
        
    .menu li ul {
        display: none;
        height: auto;
        margin: 0;
        padding: 0;
        position: fixed;
    }
        
    .menu li:hover ul {
        display: block;
    }
        
    .menu li ul li {
        background-color: rgba(255,255,255,0.2);
        display: block;
    }
        
    .menu li ul li a {
        border-left: 1px solid #444444;
        border-right: 1px solid #444444;
        border-top: 1px solid #c9d4d8;
        border-bottom: 1px solid #444444;
    }
.menu a:hover {
  background-color: #ddd;
  color: black;
}
 #table1, #table2, #table3, #table4, #table5, #table6, #table7, #table8, #table9, #table10 {
     display: none;
 }
 .detail{
    margin-top:50px;
    display: flex;
    align-items: center;
    justify-content: center;
}
th,td{
    
    
	padding: 15px;
    text-align:center;
    background-color: rgba(255,255,255,0.2);
	color: #fff;
}
thead th {
	background-color: #55608f;
}
a,li{
    list-style: none;
    text-decoration: none;
}
td,a{
    font-size:21px;
}
</style>
<body>
    <!Initlialize Admin Components->
    <div class="menu">
        <ul>
            <li>
                <a href="#" onclick='display(1);'>View Order Detail</a>
            </li>
            <li>
                <a href="#" onclick='display(2);'>View CPU Detail</a>
            </li>
            <li>
                <a href="#" onclick='display(3);'>View GPU Detail</a>
            </li>
            <li>
                <a href="#" onclick='display(4);'>View RAM Detail</a>
            </li>
            <li>
                <a href="#" onclick='display(5);'>View Cooler Detail</a>
            </li>
            <li>
                <a href="#" onclick='display(6);'>View Contact Detail</a>
            </li>
            <li>
                <a href="#">Add Items</a>
                <ul>
                    <li>
                        <a href="#" onclick='display(7);'>CPU</a>
                    </li>
                    <li>
                        <a href="#" onclick='display(8);'>GPU</a>
                    </li>
                    <li>
                        <a href="#" onclick='display(9);'>RAM</a>
                    </li>
                    <li>
                        <a href="#" onclick='display(10);'>Cooler</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!Preaparing Components Tables->
    <div class="detail">
        <table>
            <td>
                <!Components User->
                <div id="table1">
                    <?php
                        $sql= "SELECT * FROM orderlist1";
                        $res = mysqli_query($conn, $sql);
                        $data = [];
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                array_unshift($data, $row);		
                            }
                        }
                    ?>
                    <table border="1">
                        <thead>
                            <th colspan=8>Order Details</th>
                        </thead>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Order ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Items</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <?php
                            $i=1;
                            foreach ($data as  $d) {
                        ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $d['oid']; ?></td>
                                <td><?php echo $d['oname'];?></td>
                                <td><?php echo $d['ophone'];?></td>
                                <td><?php echo $d['0address'];?></td>
                                <td><?php echo $d['0item'];?></td>
                                <td><?php echo $d['oprice'];?></td>
                                <td>
                                    <a href="delete.php?id=<?php echo $d['oid'] ?>" onclick = "return confirm('are you sure to delete??')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                     <?php } ?>
                    </table>
                </div>

                <!Components CPU->
                <div id="table2">
                <?php
                        $sql= "SELECT * FROM cpu";
                        $res = mysqli_query($conn, $sql);
                        $data = [];
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                array_unshift($data, $row);		
                            }
                        }
                    ?>
                    <table border="1">
                        <thead>
                            <th colspan=6>CPU Details</th>
                        </thead>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>CPU ID</th>
                                <th>CPU Name</th>
                                <th>CPU Price</th>
                                <th>CPU Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $i=1;
                            foreach ($data as  $d) {
                        ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $d['c_id']; ?></td>
                                <td><?php echo $d['c_name']; ?></td>
                                <td><?php echo $d['c_price'];?></td>
                                <td><?php echo $d['c_stock'];?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $d['c_id'] ?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $d['c_id'] ?>" onclick = "return confirm('are you sure to delete??')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>

                <!Components GPU->
                <div id="table3">
                <?php
                        $sql= "SELECT * FROM gpu";
                        $res = mysqli_query($conn, $sql);
                        $data = [];
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                array_unshift($data, $row);		
                            }
                        }
                    ?>
                    <table border="1">
                        <thead>
                            <th colspan=6>GPU Details</th>
                        </thead>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>GPU ID</th>
                                <th>GPU Name</th>
                                <th>GPU Price</th>
                                <th>GPU Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $i=1;
                            foreach ($data as  $d) {
                        ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $d['g_id']; ?></td>
                                <td><?php echo $d['g_name']; ?></td>
                                <td><?php echo $d['g_price'];?></td>
                                <td><?php echo $d['g_stock'];?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $d['g_id'] ?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $d['g_id'] ?>" onclick = "return confirm('are you sure to delete??')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>

                <!Components RAM->
                <div id="table4">
                <?php
                        $sql= "SELECT * FROM ram";
                        $res = mysqli_query($conn, $sql);
                        $data = [];
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                array_unshift($data, $row);		
                            }
                        }
                    ?>
                    <table border="1">
                        <thead>
                            <th colspan=6>RAM Details</th>
                        </thead>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>RAM ID</th>
                                <th>RAM Name</th>
                                <th>RAM Price</th>
                                <th>RAM Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $i=1;
                            foreach ($data as  $d) {
                        ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $d['r_id']; ?></td>
                                <td><?php echo $d['r_name']; ?></td>
                                <td><?php echo $d['r_price'];?></td>
                                <td><?php echo $d['r_stock'];?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $d['r_id'] ?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $d['r_id'] ?>" onclick = "return confirm('are you sure to delete??')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>

                <!Components Cooler->
                <div id="table5">
                <?php           
                        $sql= "SELECT * FROM cooler";
                        $res = mysqli_query($conn, $sql);
                        $data = [];
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                array_unshift($data, $row);		
                            }
                        }
                    ?>
                    <table border="1">
                        <thead>
                            <th colspan=6>Cooler Details</th>
                        </thead>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Cooler ID</th>
                                <th>Cooler Name</th>
                                <th>Cooler Price</th>
                                <th>Cooler Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $i=1;
                            foreach ($data as  $d) {
                        ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $d['f_id']; ?></td>
                                <td><?php echo $d['f_name']; ?></td>
                                <td><?php echo $d['f_price'];?></td>
                                <td><?php echo $d['f_stock'];?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $d['f_id'] ?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $d['f_id'] ?>" onclick = "return confirm('are you sure to delete??')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>

                <!Components Contact->
                <div id="table6">
                <?php
                        $sql= "SELECT * FROM contact";
                        $res = mysqli_query($conn, $sql);
                        $data = [];
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                array_unshift($data, $row);		
                            }
                        }
                    ?>
                    <table border="1">
                        <thead>
                            <th colspan=7>Contact Details</th>
                        </thead>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Contact ID</th>
                                <th>Contact Name</th>
                                <th>Contact Email</th>
                                <th>Countact Country</th>
                                <th>Contact Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $i=1;
                            foreach ($data as  $d) {
                        ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $d['contact_id']; ?></td>
                                <td><?php echo $d['contact_name']; ?></td>
                                <td><?php echo $d['contact_email'];?></td>
                                <td><?php echo $d['contact_country'];?></td>
                                <td><?php echo $d['contact_msg'];?></td>
                                
                                <td>
                                    <a href="delete.php?id=<?php echo $d['contact_id'] ?>" onclick = "return confirm('are you sure to delete??')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                
                <!Insert Components Stared->

                <!CPU Components Insert->
                <div id="table7">
                    <h2>Add new CPU model</h2><br>
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <label for="name">CPU Name</label>
                            <input type="text" name="name" id="name" value="" required>
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" value="" required>
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" id="stock"value="" required>
                            <button type="submit" name="submit">Submit</button>                    
                    </form>
                    <script>
                        if ( window.history.replaceState ) {
                              window.history.replaceState( null, null, window.location.href );
                            }
                        </script>
                    <?php
                        //Create connection
                        $conn = mysqli_connect('localhost','root','','web');
                        //check connection
                        if(!$conn)
                        {
                            die("Connection failed:".mysqli_connect_error());
                        }
                            if(isset($_POST['submit'])){
                                $name=$_POST['name'];
                                $price=$_POST['price'];
                                $stock=$_POST['stock'];

                                $sql = "INSERT INTO cpu(c_name,c_price,c_stock)
                                VALUES ('$name',$price,$stock)";

                                if(mysqli_query($conn,$sql))
                                    {
                                    //    echo "<meta http-equiv='refresh' content='0.1'>";
                                       
                                    echo '<script>alert("New record created succesfully")
                                    document.getElementById("table7").style.display="block";
                                    </script>';
                                    }
                                else 
                                    {
                                        echo "Error:".$sql."<br>".mysqli_error($conn);
                                    }
                                mysqli_close($conn);
                            }
                    ?>
                </div>

                <!GPU Components Insert->
                <div id="table8">
                <h2>Add new GPU model</h2><br>
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <label for="name">GPU Name</label>
                            <input type="text" name="name" id="name" value="" required>
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" value="" required>
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" id="stock"value="" required>
                            <button type="submit" name="submit1">Submit</button>                   
                           
                    </form>
                    <?php
                        //Create connection
                        $conn = mysqli_connect('localhost','root','','web');
                        //check connection
                        if(!$conn)
                        {
                            die("Connection failed:".mysqli_connect_error());
                        }
                            if(isset($_POST['submit1'])){
                                $name=$_POST['name'];
                                $price=$_POST['price'];
                                $stock=$_POST['stock'];

                                $sql = "INSERT INTO gpu(g_name,g_price,g_stock)
                                VALUES ('$name',$price,$stock)";

                                if(mysqli_query($conn,$sql))
                                    {
                                        echo '<script>alert("New record created succesfully");
                                        document.getElementById("table8").style.display="block";
                                        </script>';
                                        
                                    
                                    }
                                else 
                                    {
                                        echo "Error:".$sql."<br>".mysqli_error($conn);
                                    }
                                mysqli_close($conn);
                            }
                    ?>
                </div>
                
                <!RAM Components Insert->
                <div id="table9">
                <h2>Add new RAM model</h2><br>
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <label for="name">RAM Name</label>
                            <input type="text" name="name" id="name" value="" required>
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" value="" required>
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" id="stock"value="" required>
                            <button type="submit" name="submit2">Submit</button>                    
                    </form>
                    <?php
                        //Create connection
                        $conn = mysqli_connect('localhost','root','','web');
                        //check connection
                        if(!$conn)
                        {
                            die("Connection failed:".mysqli_connect_error());
                        }
                            if(isset($_POST['submit2'])){
                                $name=$_POST['name'];
                                $price=$_POST['price'];
                                $stock=$_POST['stock'];

                                $sql = "INSERT INTO ram(r_name,r_price,r_stock)
                                VALUES ('$name',$price,$stock)";

                                if(mysqli_query($conn,$sql))
                                    {
                                        echo '<script>alert("New record created succesfully")
                                        document.getElementById("table9").style.display="block";
                                        </script>';
                                    
                                    }
                                else 
                                    {
                                        echo "Error:".$sql."<br>".mysqli_error($conn);
                                    }
                                mysqli_close($conn);
                            }
                    ?>
                </div>

                <!Cooler Components Insert->
                <div id="table10">
                <h2>Add new Cooler model</h2><br>
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <label for="name">Cooler Name</label>
                            <input type="text" name="name" id="name" value="" required>
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" value="" required>
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" id="stock"value="" required>
                            <button type="submit" name="submit3">Submit</button>                  
                    </form>
                    <?php
                        //Create connection
                        $conn = mysqli_connect('localhost','root','','web');
                        //check connection
                        if(!$conn)
                        {
                            die("Connection failed:".mysqli_connect_error());
                        }
                            if(isset($_POST['submit3'])){
                                $name=$_POST['name'];
                                $price=$_POST['price'];
                                $stock=$_POST['stock'];

                                $sql = "INSERT INTO cooler(f_name,f_price,f_stock)
                                VALUES ('$name',$price,$stock)";

                                if(mysqli_query($conn,$sql))
                                    {
                                        echo '<script>alert("New record created succesfully")
                                        document.getElementById("table10").style.display="block";
                                        </script>';
                                    
                                    }
                                else 
                                    {
                                        echo "Error:".$sql."<br>".mysqli_error($conn);
                                    }
                                mysqli_close($conn);
                            }
                    ?>
                </div>

            </td>
         </table>
    </div>

    

 </body>
 <script>
     function display(nr) {
       
    document.getElementById("table1").style.display="none";
    document.getElementById("table2").style.display="none";
    document.getElementById("table3").style.display="none";
    document.getElementById("table4").style.display="none";
    document.getElementById("table5").style.display="none";
    document.getElementById("table6").style.display="none";
    document.getElementById("table7").style.display="none";
    document.getElementById("table8").style.display="none";
    document.getElementById("table9").style.display="none";
    document.getElementById("table10").style.display="none";
    document.getElementById("table"+nr).style.display="block";
    //window.location.reload(true);
}
 </script>
 </html>
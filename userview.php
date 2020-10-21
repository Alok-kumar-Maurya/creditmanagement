<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="main.js"></script>
    <style>
      ::-webkit-scrollbar{
        display: none;
      }
    </style>
    </head>
    <body>
    <div class="view">
        <h1 style="text-shadow: 6px 6px 10px grey; font-size: 30px;">Choose name for credit transfer</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table style="margin-left: 5%;line-height: auto; font-size: 20px;">
           <th><h2 style="margin-top: 6%;text-shadow: 0 0 10px #b2bec3, 5px 5px 10px #b2bec3;">Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="Credit" style="background-color: black;border: 1px solid white; color: white; padding:  8px 19px; font-size: 15px;margin-top: 17%;"></td>
           </tr>
        </table>
        </form>
        </div>
        
          

         <div id="particles-js" style="margin-top: -35%;background-size: contain;background-position: center;background-attachment: fixed; width: 100%;overflow-x: hidden;">
<script type="text/javascript" src="particles.min.js"></script>
            <script type="text/javascript" src="app.js"></script></div>
    </body>
</html>
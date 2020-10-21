<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Selection</title>
       <link rel="stylesheet" href="css/style.css">
       <script type="text/javascript" src="main.js"></script>>
  <style>
      ::-webkit-scrollbar{
        display: none;
      }
      body .table{
    
    
    border-collapse:collapse;
    font-family: Mool Boron;
    border: none;
            
           -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
           position: relative;
           left: 32%;
           margin-bottom:  6%;
           border: 1px solid white;
           margin-left: -3%;

}
    body .table th {

      font-weight: normal;
    -webkit-font-smoothing: antialiased;
    padding: 0.3rem;
    color: white;
    text-shadow: 0 0 1px rgba(0,0,0,0.1);
    font-size: 1.5em;
    border-bottom: 1px solid white;
  }
body .table td {
   color: white;
    padding: 0.35em 1.4em 0.35em 1.4em;
    text-shadow: 0 0 1px rgba(255,255,255,0.1);
    font-size: 1.4em;
    box-shadow: inset 0 -1px rgba(0,0,0,0.25), 
        inset 0 1px rgba(0,0,0,0.25);
        font-weight: normal;


}
body .table tr {
    -webkit-transition: background 0.3s, box-shadow 0.3s;
    -moz-transition: background 0.3s, box-shadow 0.3s;
    transition: background 0.3s, box-shadow 0.3s;
}
body .table-1 {
    background: black;
}
body .table-1 tr:hover {
    : -webkit-linear-gradient(360deg,#383836 10%,#4a4a4a 360%); background: linear-gradient(360deg,#383836 10%,#4a4a4a 360%);
  }
  </style>     
</head>
<body>


<form  action="userdetails.php" method="post">
    <h1 style="text-shadow: 0 0 10px #b2bec3, 5px 5px 10px #b2bec3;"> Select User from  list</h1>
    <table class="table table-1">


    <?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>




	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>


    <div class="view">

<table cellspacing=50px style="position: relative; left: 30%; margin-top: -5%;">
  <tr>
      <td> <h2 style="text-shadow: 6px 6px 10px grey;font-weight: normal;font-family: Mool Boron;">SELECT USER</h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()" style="background-color: black;color: white;padding:  8px 16px; width: 250px;">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
    </form>
    <div id="particles-js" style="margin-top: -70%; height: 150vh;">
<script type="text/javascript" src="particles.min.js"></script>
            <script type="text/javascript" src="app.js"></script>
         </div>  
</body>
</html>
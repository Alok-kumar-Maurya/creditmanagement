<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="main.js"></script>
   <style>
      ::-webkit-scrollbar{
        display: none;
      }
      body .table{
    
    
    border-collapse:collapse;
    font-family: 'Lato', Calibri, Arial, sans-serif;
    border: none;
            
           -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
           position: relative;
           left: 32%;
           margin-bottom:  6%;
           border: 1px solid white;
           font-family: Mool Boron;

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
    padding: 0.45em 1.15em 0.45em 1.15em;
    text-shadow: 0 0 1px rgba(255,255,255,0.1);
    font-size: 1.4em;
    box-shadow: inset 0 -1px rgba(0,0,0,0.25), 
        inset 0 1px rgba(0,0,0,0.25);
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
      
            
        <h1 style="text-shadow: 0 0 10px #b2bec3, 5px 5px 10px #b2bec3;margin-left: 4%;">USER DETAILS</h1>

        <table class="table table-1">
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
         
           

        
        <div class="css-button" style="margin-top: -5%;">
                  <p class="css-button-text" style="text-align: center;">Home</p>
                  <div class="css-button-inner">
                  <a href="index.php" >
                  <div class="reset-skew">
                  <p class="css-button-inner-text">Home</p>
                </div></a>
                </div>
                </div>
      <div id="particles-js" style="margin-top: -60%; height: 130%;">
<script type="text/javascript" src="particles.min.js"></script>
            <script type="text/javascript" src="app.js"></script>
         </div> 
    </body>
</html>
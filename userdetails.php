<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');
$name="";
if(isset($_POST['name'])){
$name= $_POST['name'];
}
 $q="select * from user where name='$name'";
 $result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

if (isset($_POST['name'])) {
  $_SESSION['name']=$name;
//echo $_SESSION['name'];
}


?>
<html>
<head>
   <title>
   Userview
    </title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="main.js"></script>
    <style>
      ::-webkit-scrollbar{
        display: none;
      }
      body .table{
    
    margin-bottom: 20px;
    border-collapse:collapse;
    font-family: Mool Boron;
    border: none;
            border-radius: 3px;
           -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
           position: relative;
           left: 36%;
           margin-top: 7%;
           border: 1px solid white;
}
    body .table th {

      font-weight: normal;
    -webkit-font-smoothing: antialiased;
    padding: 1em;
    color: white;
    text-shadow: 0 0 1px rgba(0,0,0,0.1);
    font-size: 1.5em;
    border-bottom: 1px solid white;
  }
body .table td {
   color: white;
    padding: 0.7em 1em 0.7em 1.15em;
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
    <div class="view">
        <h2 style="margin-left: 41%; text-shadow: 6px 6px 10px grey; font-size: 30px;font-weight: normal;font-family: Mool Boron;margin-top: 10%;">USER INFORMATION</h2>
       <table class=" table table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" >
                 <p class="css-button-text" style="text-align: center;font-size: 18px;">Transfer To</p>
                 <div class="css-button-inner">
                 <a href="userview.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>


               <br> <br> <br> <br> <br>
               <div class="css-button" >
                 <p class="css-button-text" style="text-align: center;font-size: 18px;">Back</p>
                 <div class="css-button-inner">
                 <a href="select.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Back</p>
               </div></a>
               </div>
               </div>
               
<div id="particles-js" style="margin-top: -39%; height: 109%;">
<script type="text/javascript" src="particles.min.js"></script>
            <script type="text/javascript" src="app.js"></script>
         </div> 

    </body>
</html>
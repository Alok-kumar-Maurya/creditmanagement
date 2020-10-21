<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
if(isset($_POST['transfer'])){
$_SESSION['to']= $_POST["transfer"];
}
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
         input[type=text]
        { 
            margin-top: 5%;
            width:12em;
            height:2em;
            font-size:15px;
           margin-left: 45.5%;
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: black;
            font-weight: bold;
            color: white;
            margin-left: 49%;
            margin-top: 2%;
        }
       
    </style>
    </head>
    <body>
     <form action="creditchecker.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <strong style="text-shadow: 0 0 10px #b2bec3, 5px 5px 10px #b2bec3;margin-left: 45%;border: 1px solid transparent; background-color: black;">Transfer Money:</strong>
          <br>
            <br>
          <input type="text" name="transfer"><br>
          <br>
        
          <input type="submit">
        
        </div>
        </form>

        <div id="particles-js" style="background-size: cover;background-position: center;background-attachment: fixed;margin-top: -21%;height: 104%;">
<script type="text/javascript" src="particles.min.js"></script>
            <script type="text/javascript" src="app.js"></script>
         </div> 
    </body>
</html>

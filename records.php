<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            color:white;
            background-color: black;
        }
    </style>
    <title>records page</title>
  </head>
  <body>
    <h1></h1>
    <?php
         $servername = "remotemysql.com";
         $username = "RAa0VRKfym";
         $password = "ssPGRWRQkX";
         $dbname = "RAa0VRKfym";
         $con = new mysqli($servername,$username,$password,$dbname); 
        $displayquery="select * from joblist";
        $displayqueryresult=$con->query($displayquery);
        // echo"<div style=background-color:black;>";
        echo"<h1 style=text-align:center>List of Employees already placed</h1>";
        echo"<table class=table style=color:white>";
        echo"<tr><th>ID</th><th>Name</th><th>City</th></tr>";
        while($displayrow=$displayqueryresult->fetch_assoc()){
              echo"<tr><td>$displayrow[id]</td>";
              echo"<td>$displayrow[name]</td>";
              echo"<td>$displayrow[city]</td></tr>";
        }
        echo"</table>";
        // echo"</div>";
        
        
        
        
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    include"topbar.php";
?>
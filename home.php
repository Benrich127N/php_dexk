 <?php 
 session_start();
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
  this is the home page <br>
  <a href="index.php">index_oh</a>
 </body>
 </html>
 <?php 
 echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

 
 
 ?>
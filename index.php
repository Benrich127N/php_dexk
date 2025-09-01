<?php
/* a session is a super global variable used to store information on a user to be used across multiple pages.
a user is assigned a  session id
ex Login credentianls 

*/


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
  This is the index page <a href="home.php">home_page</a>
</body>
</html>

<?php
$_SESSION["username"] = "BroCode";
$_SESSION["password"]  = "pizza123";


echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";


?>
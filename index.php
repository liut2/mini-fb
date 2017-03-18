<?php
$connection = mysqli_connect("localhost", "root", "", "mini-fb");
if (!$connection) {
  echo "Failed to connect to db";
}


?>

<html>
  <head>
    <title>Mini FB</title>
  </head>
  <body>
    Hello world!
  </body>
</html>

<?php
$connection = mysqli_connect("localhost", "root", "", "mini-fb");
if (!$connection) {
  echo "Failed to connect to db";
}

$firstName = $lastName = $email = $password = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $date = date("Y-m-d");
  //insert into user table
  echo "$firstName $lastName has just joined mini-fb since $date";
}

?>

<html>
  <head>
    <title>Mini FB</title>
  </head>
  <body>
    <form action="signup.php" method="POST">
      <input type="text" name="firstName" placeholder="First Name" required />
      <br />
      <input type="text" name="lastName" placeholder="Last Name" required />
      <br />
      <input type="email" name="email" placeholder="Email" required />
      <br />
      <input type="password" name="password" placeholder="Password" required />
      <br />
      <input type="submit" name="submitBtn" placeholder="Submit" required />
    </form>
  </body>
</html>

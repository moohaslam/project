<?php
include("db.php");

$email = $_POST["email"];
$password = $_POST["password"];
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if ($count == 0) {
    header(header:"location:dashboard.html");
}
else {
    echo"invalid email or passowrd.";
}
?>
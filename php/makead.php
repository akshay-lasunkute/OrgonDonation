<?php
$servername = "localhost";
$username = "root";
$password = "Sahyak@11";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=OrganDonation", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $password=$_POST['password'];

   $que="insert into admin values($_POST[staffid],'$password')";
   
    $pdo->exec($que);
    print("Success");
    header("Location:MknewAdmin.php");
} catch(PDOException $e) {
  echo "Connection failed: Some error is occured please check the data ";
  echo '<a href="MknewAdmin.php">To go back click here</a>';
}
$pdo = null;
?>
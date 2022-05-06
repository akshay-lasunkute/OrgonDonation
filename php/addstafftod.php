<?php
$servername = "localhost";
$username = "root";
$password = "Sahyak@11";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=OrganDonation", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $name= $_POST['name'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $birth=$_POST['bdate'];
  $designation=$_POST['designation'];
   $que="insert into staff values('$name','$birth',$_POST[monum],'$address',$_POST[govid],'$gender','$designation')";
  
   $pdo->exec($que);
    print("Success");
    header("Location:Addstaffpage.php");
} catch(PDOException $e) {
  echo "Connection failed: Some error is occured please check the data ";
  echo '<a href="Addstaffpage.php">To go back click here</a>';
}
$pdo = null;
?>
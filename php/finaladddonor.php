<?php
$servername = "localhost";
$username = "root";
$password = "Sahyak@11";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=OrganDonation", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $name= $_POST['dname'];
  $address=$_POST['daddress'];
  $gender=$_POST['dgender'];
  $birth=$_POST['ddate'];
  $blood=$_POST['dblood'];
   $que="insert into finaldonor values($_POST[did],'$name','$birth','$address',$_POST[dmobile],'$gender','$blood')";
    
    $heart=(isset($_POST['heart']))?1:0;
    $eye= (isset($_POST['eye']))?1:0;
    $kidney= (isset($_POST['kidney']))?1:0;
    $lungs= (isset($_POST['lungs']))?1:0;
    $pancreas= (isset($_POST['pancreas']))?1:0;
    $skin= (isset($_POST['skin']))?1:0;
    $liver= (isset($_POST['liver']))?1:0;

    $que1="insert into finalorgan values($_POST[did],$heart,$eye,$kidney,$lungs,$pancreas,$skin,$liver)";
    $pdo->exec($que);
    $pdo->exec($que1);
    print("Success");
    header("Location:Add_Donor.php");
    
} catch(PDOException $e) {
  echo "Connection failed: Some error is occured please check the data ";
  echo '<a href="Add_Donor.php">To go back click here</a>';
}
$pdo = null;
?>
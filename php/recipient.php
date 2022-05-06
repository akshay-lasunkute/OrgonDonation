 create table recipient(id bigint primary key,name varchar(30),bdate date,address varchar(60),
 mobnum bigint,gender varchar(10),blood varchar(10),organ varchar(10));


 [rgov,rname,rdate,raddress,rmob,rgender,rblood,organ]
 <?php
$servername = "localhost";
$username = "root";
$password = "Sahyak@11";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=OrganDonation", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $name= $_POST['rname'];
  $address=$_POST['raddress'];
  $gender=$_POST['rgender'];
  $birth=$_POST['rdate'];
  $blood=$_POST['rblood'];
  $organ=$_POST['organ'];
   $que="insert into recipient values($_POST[rgov],'$name','$birth','$address',$_POST[rmob],'$gender','$blood','$organ')";
   
   $pdo->exec($que);
    print("Success");
    header("Location:reg.php");
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$pdo = null;
?>
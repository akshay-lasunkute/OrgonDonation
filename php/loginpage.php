<?php
$flag=0;
$servername = "localhost";
$username = "root";
$password = "Sahyak@11";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=OrganDonation", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      $stmt = $pdo->prepare("select id,pass from admin");
      $stmt->execute();

      $result = $stmt->fetchAll();

      foreach($result as $re)
      {
        if($re['id']==$_POST['uname'] and $re['pass']==$_POST[pswd])   
        {
                $flag=1;
                $stmt2= $pdo->prepare("delete from lastone");
                $stmt2->execute();
                $stmt1 = $pdo->prepare("insert into lastone values($_POST[uname])");
                $stmt1->execute();
                header("Location:Adminpage.php");
        }
      }
      
      if($flag==0)
      {
        header("Location:../index.php");
      }
      $pdo=null;
       

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

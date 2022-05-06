<!DOCTYPE html>
<html>
<head>

<?php
$servername = "localhost";
$username = "root";
$password = "Sahyak@11";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=OrganDonation", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php
  if(isset($_POST['submit']))
  {
   // | id  | name                       | bdate      | address    | mobnum | gender | blood |
    $stmt1 = $pdo->prepare("select id,name,bdate,address,mobnum,gender,blood,organ from recipient where id=$_POST[submit]");
    $stmt1->execute();
    $result1 = $stmt1->fetchAll();

    foreach($result1 as $re)
    {
     $stmt2=$pdo->prepare("insert into finalrecipient values($re[id],'$re[name]','$re[bdate]','$re[address]',$re[mobnum],'$re[gender]','$re[blood]','$re[organ]')");   
      $stmt2->execute();  
        //| id    | heart | eye  | kidney | lungs | pancreas | skin | liver |

      $stml=$pdo->prepare("delete from recipient where id=$re[id]");
      $stml->execute();

    } 
    header("Location:viewnewrec.php");
  }
?>

<title>organ donation</title>
    <meta charset="utf-8">
    <!------bootstrap Files--------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>organ donation - Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/staffstyle.css">
</head>
<body>
    <header>
        <h1><span class="multicolortext">ORGAN DONATION</span></h1>
        <section id="nav-bar" >
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            
               <a class="navbar-brand" href="#">ORGAN DONATION</a>
               <a class="navbar-brand">Admin Section - Recipient Dashboard</a>
            </nav>
        </section>
    </header>

  <?php

  //id,name,bdate,address,mobnum,gender,blood,organ
  $stmt = $pdo->prepare("select id,name,bdate,address,mobnum,gender,blood,organ from recipient");
  $stmt->execute();

  $result = $stmt->fetchAll();

  foreach($result as $re)
  {
      echo "<div style='font-weight:bold;box-shadow: 0px 0px 10px 0px black;margin-left:5%;margin-top:5%;padding-top:3%;padding-left:3%;padding-bottom:3%;width:40%;float:left;'>";
      echo 'ID : <label>'.$re['id'].'</label>';
      echo '<br>';
      echo 'Name : <label>'.$re['name'].'</label>';
      echo '<br>';
      echo 'Birth Date : <label>'.$re['bdate'].'</label>';
      echo '<br>';
      echo 'Address : <label>'.$re['address'].'</label>';
      echo '<br>';
      echo 'Mobile Number : <label>'.$re['mobnum'].'</label>';
      echo '<br>';
      echo 'Gender : <label>'.$re['gender'].'</label>';
      echo '<br>';
      echo 'Blood Group : <label>'.$re['blood'].'</label>';
      echo '<br>';
      echo 'Blood Group : <label>'.$re['organ'].'</label>';
      echo '<br>';
      echo '<form method="post"><input type="submit" value='.$re['id'].' name="submit"></form>';
      echo "</div>";
  }
  ?>

</body>
</html>
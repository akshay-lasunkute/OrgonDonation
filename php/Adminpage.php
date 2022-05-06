<!DOCTYPE html>
<html lang="en">
<head>

<style>
.checkb
{
    width:25%;
}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "Sahyak@11";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=OrganDonation", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $stmt = $pdo->prepare("select id from lastone");
      $stmt->execute();

      $result = $stmt->fetchAll();
        
      foreach($result as $re)
      {
          $id= $re['id'];
      }

      $stmt = $pdo->prepare("select name,bdate,id from staff where id=$id");
      $stmt->execute();

      $result = $stmt->fetchAll();
        
      foreach($result as $re)
      {
          $name= $re['name'];
          $bdate=$re['bdate'];
          $id1=$re['id'];
      }



} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>organ donation - Home</title>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1><span class="multicolortext">ORGAN DONATION</span></h1>
        <section id="nav-bar" >
            <nav class="navbar navbar-expand-md bg-dark navbar-dark" >
            
               <a class="navbar-brand" href="#">ORGAN DONATION</a>
               <a class="navbar-brand" id='colorchange'>Admin Section - DASHBOARD</a>
            </nav>
        </section>
    </header>
    <section id="sidenavbar">
        <button>Dashboard</button>
            <div>
                <a id="current" href="Adminpage.php">Dashboard</a>
            </div>
            <button>Donor</button>
                <div>
                    <a href="Add_Donor.php">Add Donor</a>
                    <a href="view_Donor.php">View/search Donor</a>
                </div>
    
                <button>Recipient</button>
                <div>
                    <a href="RecAddpage.php">Add Recipient</a>
                    <a href="Recsearchpage.php">View/Search Recipient</a>
                </div>

            <button>Hospital</button>
            <div>
                <a href="addhsptl.php">Add Hospital</a>
                <a href="Searchhospital.php">View/search</a>
                <a href="adddoc.php">Add Doctor</a>
                <a href="Searchdoctor.php">view/search Doctor</a>
                <a href="Deletedoc.php">update/delete doctor</a>
            </div>

            <button>Staff</button>
            <div>
                <a href="Addstaffpage.php">add staff</a>
                <a href="searchstaffpage.php">search staff</a>
                <a href="updestaffpage.php">delete/update staff</a>
                <a href="MknewAdmin.php">create new admin</a>
            </div>
    </section>
    
    <section class="container-fluid bg">
        <section class="row justify-content-center ">
        <section style="margin-top: 3%;margin-left: -10%;box-shadow: 0px 0px 10px 0px black;padding-right: 4%;padding-left: 3%;padding-top: 3%;padding-bottom: 3%;">
    
            <section class="bg">
                <h4 style="text-align: center;color: orangered;margin-top: 2%;background-color: lightpink;margin-top: -2%;">ADMIN INFORMATION</h4>
                <div id="imagepart">
                    <img src="../img/1.jpg" height="130px" width="100px" alt="Admin Image">
                </div>
                
        
                <section id="admininfo">
                    <div>
                    <?php 
                        echo '<label style="width:200%;">Name : '.$name.'</label>';
                    ?>
                    <br>
                    <?php 
                        echo '<label style="width:200%;">Birth Date : '.$bdate.'</label>';
                        
                    ?>  
                    <br>
                    <?php 
                    echo '<label style="width:200%;">Id : '.$id1.'</label>';
                        
                    ?> 
                    <br>
                    <?php
                    echo '<label style="width:200%;">Date : '.date('y-m-d').'</label>';
                        
                    ?>
                    </section>
            </section>     
            <section>             
            </section>
        </section>
        
            
            <section style="display:block;margin-top:3%;width:60%;box-shadow:0px 0px 10px 0px #000;">
            <?php
            echo "<div >";
            $stmt = $pdo->prepare("select count(*) as total from donor");
            $stmt->execute();

            $result = $stmt->fetchAll();
            foreach($result as $re)
            {
                echo 'Total number of new Donors : '.$re['total'];
                
            }
            echo '<button style="float:right;" class="checkb"><a href="viewnewdonors.php">View Donors</a></button>';
            echo "</div>";
            
            echo "<div >";
            $stmt = $pdo->prepare("select count(*) as total from recipient");
            $stmt->execute();
            
            $result = $stmt->fetchAll();
            echo "<br>";
            foreach($result as $re)
            {
                echo 'Total number of new Recipients : '.$re['total'];
            }
            echo '<button style="float:right;" class="checkb"><a href="viewnewrec.php">View Recipients</a></button>';
            echo "</div>";
            $pdo=null;
            ?>  
            </section>
                 
</body>
</html>
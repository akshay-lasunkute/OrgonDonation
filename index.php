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

<script type="text/javascript">

</script>

    <script>
        var i=0;
        var images=[];
        var time=3000;

        images[0]="img/1.jpg";
        images[1]="img/2.jpg";
        images[2]="img/3.jpg";
        images[3]="img/4.jpg";
        images[4]="img/5.jpg";

        function changeImg()
        {
            window.history.forward();
            document.slideview.src=images[i];

            if(i<images.length-1)
            {
                i++;
            }else
            {
                i=0;
            }
            setTimeout("changeImg()",time);
        }

        window.onload=changeImg;
    </script>

	<title>organ donation</title>
	<meta charset="utf-8">
  <!------bootstrap--------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Outstyle.css">
    <link rel="stylesheet" type="text/css" href="css/style4.css">
</head>
<body >
<header>
<h1><span class="multicolortext">ORGAN DONATION</span></h1><br>
<h4>Support Organ Donation Across Our Great Nation</h4>

	
</header>

                                
<section id="nav-bar" >
    <nav class="navbar navbar-expand-md bg-light navbar-light">
                <a class="nav-link" href="index.php">HOME</a>
                 <a class="nav-link" href="php/reg.php">REGISTER</a>
                 <a class="nav-link" href="php/finalabout_us.php">ABOUT US</a>
    </nav>
</section>

<section>
<img id="slideview" name="slideview" width="100%" height="200px" >
</section>
 

<section class="container-fluid bg">
<section class="row justify-content-center  ">
	
<section class="col-12 col-sm-6  col-md-3" >
    <section class="info1">
        <h2>What organs and tissues can be transplanted?</h2>
        <p>Organs and tissues that can be transplanted include: Liver Kidney Pancreas Heart Lung Intestine Cornea
            Middle ear Skin Bone Bone marrow Heart valves Connective tissue
            Vascularized composite allografts (transplant of several structures that may include skin, bone, muscles
            , blood vessels, nerves, and connective tissue)</p>
    <section class="info1">
        <h2>Will organ donation disfigure the body?</h2>
        <p>
            The recovery of organs, tissue, and eyes is a surgical procedure performed by trained medical professionals.
             Generally, the family may still have a traditional funeral service</p>
    </section>
    </section>
     </section>
<section class="col-12 col-sm-6  col-md-3" >
    <section class="info1">
        <h2>Who can be an organ donor?</h2>
        <p>People of all ages should consider themselves potential donors.
             When a person dies, he or she is evaluated for donor suitability based on their medical history and age. 
            The Organ Procurement Agency determines medical suitability for donation.</p>
    </section>
     
</section>

   <section class="col-12 col-sm-6 col-md-3" > 
        <form action="php/loginpage.php" method="post" class="needs-validation form-container view ">
      <h3>Admin Login</h3>
            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>

            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> Only Authorized Person can Login
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
             </div>

            <button  class="btn btn-dark btn-block " type="submit" >Submit</button>

        </form>
</section>
</section>
</section>

</body>
</html>
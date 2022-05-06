<!DOCTYPE html>
<html lang="en">
<head>
<?php
   // require 'databaseconnection.php';
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
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            
               <a class="navbar-brand" href="#">ORGAN DONATION</a>
               <a class="navbar-brand" id='colorchange'>Admin Section - DASHBOARD</a>

            </nav>
        </section>
    </header>
    <section id="sidenavbar">
        <button>Dashboard</button>
            <div>
                <a  href="Adminpage.php">Dashboard</a>
            </div>
            <button>Donor</button>
            <div>
                <a href="Add_Donor.php">Add Donor</a>
                <a href="view_Donor.php">View/search Donor</a>
            </div>

            <button>Recipient</button>
            <div>
                <a  href="RecAddpage.php">Add Recipient</a>
                <a href="Recsearchpage.php">View/Search Recipient</a>
            </div>


            <button>Hospital</button>
            <div>
                <a id="current" href="addhsptl.php">Add Hospital</a>
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

    <section id="staffpart">
        <h4 style="text-align: center;color: orangered;margin-top: 2%;background-color: lightpink;width: 100%;">Add Hospital</h4>
        <form method="post" action="addhospitalpage.php" style="margin-top: 2%;width: 102%;" >
        
               
        <br><label>Enter the Hospital ID : </label><input name="id" type="text" required style="float: right;"><br>
        <br><label>Enter the Name :</label><input name="name" type="text"required style="float: right;"><br>
        <br><label>Enter the Address:</label> <input name="address" type="text"required style="float: right;"><br>
        <br><label>Enter the City:</label><input name="city" type="text"required style="float: right;"><br>
        <br><label>Enter the district : </label><input name="district" type="text"required style="float: right;"><br>
        <br><label>Enter the state : </label><input name="state" type="text"required style="float: right;"><br>
        <br><label>Enter the Pincode : </label><input name="pincode" type="number"required style="float: right;"><br>
        <br><label>Enter the Mobile Number : </label><input name="mobile" type="number" required style="float: right;"><br>
        <br><input type="submit" value="Add the hospital" style="margin-left: 30%;">
                       
        </form>
    </section>
    </section>
    </section>
    </section>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>organ donation</title>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style5.css">

</head>
<body>
    <header>
        <h1><span class="multicolortext">ORGAN DONATION</span></h1>
        <section id="nav-bar" >
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            
               <a class="navbar-brand" href="#">ORGAN DONATION</a>
               <a class="navbar-brand">Admin Section -Donor dashboard</a>
            </nav>
        </section>
    </header>
    <section id="sidenavbar">
            <button>Dashboard</button>
            <div>
                <a href="Adminpage.php">Dashboard</a>
            </div>
            <button>Donor</button>
            <div>
                <a id="current" href="">Add Donor</a>
                <a href="view_Donor.php">View/search Donor</a>
            </div>

            <button>Recipient</button>
            <div>
                <a  href="RecAddpage.php">Add Recipient</a>
                <a href="Recsearchpage.php">View/Search Recipient</a>
            </div>

            <button>Hospital</button>
            <div>
                <a  href="addhsptl.php">Add Hospital</a>
                <a href="Searchhospital.php">View/search</a>
                <a href="adddoc.php">Add Doctor</a>
                <a href="Searchdoctor.php">view/search Doctor</a>
                <a href="Deletedoc.php">update/delete doctor</a>
            </div>

            <button>Staff</button>
            <div>
                <a  href="Addstaffpage.php">add staff</a>
                <a href="searchstaffpage.php">search staff</a>
                <a href="updestaffpage.php">delete/update staff</a>
                <a href="MknewAdmin.php">create new admin</a>
            </div>
    </section>
   
<section class="container-fluid bg">
<section class="row justify-content-center ">
    <section id="donorform ">
    <form class="needs-validation form-container view" method="post" action="finaladddonor.php">
        <h4 style="text-align: center;color: orangered;background-color: lightpink;">ADD DONOR</h4>

        <div class="form-group col-md-6">

            <label>Enter Aadhar card No:</label>
            <input type="text" name="did" class="form-control" id="Ano" placeholder="Enter Aadhar card No">
        </div>  
    <div class="form-group col-md-6">
            <label>Enter Full Name </label>
            <input type="text" name="dname" class="form-control" id="fname" placeholder="Enter Full Name ">
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
    </div>
          
        <div class="form-group col-md-4">
            <label for="dgender">Select the Donor gender</label>
            <select id="dgender" name="dgender">
             <option value="Male">Male</option>
             <option value="Female">Female</option>
             <option value="Other">Other</option>
             </select>
        </div>  
         
    <div class="form-group col-md-4">
        <label for="dblood">Choose the blood</label>
        <select id="dblood" name="dblood">
            <option value="default">---</option>
            <option value="apos">A+</option>
            <option value="bpos">B+</option>
            <option value="abpos">AB+</option>
            <option value="opos">O+</option>
            <option value="aneg">A-</option>
            <option value="bneg">B-</option>
            <option value="abneg">AB-</option>
            <option value="oneg">O-</option>
        </select>
    </div> 
    
    <div class="form-group col-md-6">
        
        <label for="phone"> Enter your mobile number:</label>
        <input type="tel" id="mobile" name="dmobile" class="form-control" placeholder="Enter your mobile no"
       required>        
    </div>
   
    <div class="form-group form-check">
        <label for="dorgan">Choose the organs</label>
        <br>
        heart <input type="checkbox" name="heart" value="heart">
        Eye <input type="checkbox" name="eye" value="eye">
        Kidney <input type="checkbox" name="kidney" value="kidney">
        Lungs <input type="checkbox" name="lungs" value="lungs">
        Pancreas <input type="checkbox" name="pancreas" value="Pancreas">
        Skin <input type="checkbox" name="skin" value="skin">
        Liver <input type="checkbox" name="liver" value="liver">
    </div>
  
    <div class="form-group  col-md-6 ">
        <label for="birthday">Birthday</label>
        <input type="date"  name="ddate" class="form-control" id="birthday" >
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="daddress" id="inputAddress" placeholder="Enter Your Address">
    </div>
               
            <button type="submit" class="btn btn-primary btn-block " >Submit</button>
    </form>
        
        </section>
    </section>
</section>
</body>
</html>
<?php

  //id,name,bdate,address,mobnum,gender,blood,organ
  $stmt = $pdo->prepare("select hospid,name,address,city,district,state,pincode,mobile from hospital;");
  $stmt->execute();

  $result = $stmt->fetchAll();

  foreach($result as $re)
  {
      echo "<div style='font-weight:bold;box-shadow: 0px 0px 10px 0px black;margin-left:5%;margin-top:5%;padding-top:3%;padding-left:3%;padding-bottom:3%;width:40%;float:left;'>";
      echo 'ID : <label>'.$re['hospid'].'</label>';
      echo '<br>';
      echo 'Name : <label>'.$re['name'].'</label>';
      echo '<br>';
      echo 'Birth Date : <label>'.$re['address'].'</label>';
      echo '<br>';
      echo 'Address : <label>'.$re['city'].'</label>';
      echo '<br>';
      echo 'Mobile Number : <label>'.$re['district'].'</label>';
      echo '<br>';
      echo 'Gender : <label>'.$re['state'].'</label>';
      echo '<br>';
      echo 'Blood Group : <label>'.$re['pincode'].'</label>';
      echo '<br>';
      echo 'Blood Group : <label>'.$re['mobile'].'</label>';
      echo '<br>';
      echo "</div>";
  }
  ?>

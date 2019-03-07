<!DOCTYPE html>
<html>

<head>
    <style>
        body {
background-image: url("https://bei.edu/wp-content/uploads/2016/11/grey-screen-background.jpg");
background-repeat: no-repeat;
background-size: 2000px 1000px
}

.header {
  padding: 0px;
  text-align: center;
  background: black;
  color: white;
  font-size: 30px;
  width:1450px;
}
      .logo {
          margin-right:1000px;
      }
      
      .reciept {
          text-align:center;
          font-size:22px;
          border-style: double;
          padding:20px;
        
    
      }
      h1 {
          text-align:center;
          font-size:30px
      }
          p {
          text-align:center;
          font-size:25px;
              text-decoration:underline;
      }
  
  
    </style>
<body>
    
     <div class="logo">
        <div class="header">
<img src="logo3.png">
        </div>
          </div>
    <h1><b> Thank You For Ordering!</b></h1>
    <p><b>Order Summary</b></p>
<!-- //Starting the session to get the session variable from last page-->
<div class="reciept">
<?php
session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$addressValue = $_POST['txtAddress'];
echo "Name: ".$fullNameValue.".";
echo "<br></br>";
echo "Total Amount Paid : ".$totalValue2.".";
echo "<br></br>";
echo "Address : ".$addressValue.".";
?>
</div>


</body>
<html>
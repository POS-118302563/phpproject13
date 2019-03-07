<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$addressValue = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_Session['txtAddress'] = $addressValue



/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body>
    <style>
    body{
        background-image:  url("https://bei.edu/wp-content/uploads/2016/11/grey-screen-background.jpg");
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
    </style>
            <div class="logo">
        <div class="header">
<img src="logo3.png">
        </div>
          </div>
  
   
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
                        <h1><u>Personal Details</u></h1>
                        <tr>
                            <td><b></b></td>
                            <td><b><u>Enter in your details below</u></b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                          <tr>
                            <td>Address</td>
                            <td><input type="text" id="txtName" name="txtAddress" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""  /></td>
                        </tr>
                        <tr>
   
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
   
        <center>
             
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        </center >
        </div>
    <div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
 
        </form>
    </body>
</html>
<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
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
      
    </style>
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
          <div class="logo">
        <div class="header">
<img src="logo3.png">
        </div>
          </div>
        <hr />
        <center>
                    <table cellspacing="10">
            <tr>
                <td><b><u>Service</u></b></td>
            </tr>
            <tr>
                            <td>Blockchain</td>
                            <td><input type="radio" id="block" name="rdoGroup" value="1000" /></td>
                        </tr>               
            <tr>
                            <td>Autonomous Things</td>
                            <td><input type="radio" id="auto" name="rdoGroup" value="2000" /></td>
                        </tr>               
            <tr>
                            <td>Immersive Experience</td>
                            <td><input type="radio" id="Imm" name="rdoGroup" value="3000" /></td>
                        </tr>   
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @20%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
   
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
    </form>
</div>
       
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var block = parseFloat(document.getElementById('block').value);
            var auto = parseFloat(document.getElementById('auto').value);
            var Imm = parseFloat(document.getElementById('Imm').value);
           
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('block').checked) {
                document.intCalc.txtSubTot.value = block;
                subAmount = block;
                calculation(subAmount);
               
            }
        else if (document.getElementById('auto').checked) {
                document.intCalc.txtSubTot.value = auto;
                subAmount = auto;
                 calculation(subAmount);
              
            }
        else if (document.getElementById('Imm').checked) {
                document.intCalc.txtSubTot.value = Imm;
                subAmount = Imm;
                 calculation(subAmount);
            }
        }   
       
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .10);
           var vatCalc = parseFloat(subTotal * .20);
           var total = parseFloat(subTotal - discCalc + vatCalc);
          
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc; 
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
         
        }
//     

    </script>
   
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
</body>
</html>


<?php?>
<html>
    
    <head>
        <title>Calculator</title>
        <script language="javascript" type="text/javascript">
            function packageTotal()
            //enter in prices here
            
            var x = 5;
            var y = 10;
            var p = x + y * 12;
            var b = x * 12;
            
            if {document.getElementById("basicProgram").checked} {
                //basic package is checked
                document.calculator.total.value = b;
            
            } else if document.getElementById("proProgram").checked} {
            //Pro package is checked
            document.calculator.total.value = p;
            }
            }
         </script>
    </head>
    
        <body>
            <!--opening a html form-->
            <form name="calculator"
                  <!-- User fills out form here-->
                  <br />
                <input type="radio" name="programType" id="basicProgram" value="Basic" />Basic
                <input type="radio" name="programType" id="proProgram" value="Pro" checked />Pro
                <br />
                
                Your Total Price is: <input type="text" name="total">
                
                <input type ="button" value="submit" onclick="javascript:packageTotal():"
            </form>
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <style>
      body{  background-image:url("https://bei.edu/wp-content/uploads/2016/11/grey-screen-background.jpg");
             background-size: 1450px 2000px;
             background-repeat: no-repeat;
             margin:0;
             
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
      
         img {
 
  margin-left:px;
  
  
     
 
}

div.logo {
    margin-right:500px;
   
}
      ul { margin-left:250px;
    margin-right:250px;
    font-size:20px;
    color: white;}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: white;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
p{
    margin-right:250px;
    margin-left:250px;
    font-size:25px;
    color:black;
}

		
    div.description {
	
	
	margin-bottom:700px;
	margin-left:650px;
	float:right;
	}
        p{
            font-size:22px;
            
        }
                   div.gallery {
  margin: 230px;
  border: 1px double black;
  float: left;
  width: 1000px;
  
}
div.gallery:hover {
  border: 1px double #777;
}
div.gallery img {
  width: 100%;
  height: 500px;
}
div.desc {
  padding: 0px;
  text-align: center;
  color:black;
}
h1 {
    font-size:35px;
    text-align: center;
    text-decoration:underline;
    text-decoration-style:double;
}

ol {
    margin-right:250px;
    margin-left:250px;
        font-size: 22px;
}
      </style>
    </head>
    <body>
        
        
        
        <div class="logo">
        <div class="header">
<img src="logo3.png">
        </div>
    </div>
          <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8000/BusinessHome.php">About</a>
  <a href="http://localhost:8000/BlockChain.php">Blockchain</a>
  <a href="http://localhost:8000/AutononmousThings.php">Autonomous Things</a>
  <a href="http://localhost:8000/ImmersiveExperience.php">Immersive Experience</a>
  <a href="http://localhost:8000/eBus1.php">Services</a>

</div>


<span style="font-size:40px;cursor:pointer;color:black;" onclick="openNav()">&#9776; Menu</span>
    
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<h1> Blockchain </h1>
<p><b> Blockchain was first invented by a person using the name Satoshi Nakamoto in 2008. Blockchain is the structure of data that represents a financial ledger entry, or a record of a transaction. Blockchain is the backbone of Bitcoin , the biggest cryptocurrency in todays market. There are 4 main features of Blockchain:</P>
<ol>
    <li> Public Distributed Ledgers: Everyone that is part of the network will be able to access the blockchain. User can look into transaction details from the time the blockchain was created but are not able to identify the people involved in the transaction. Transactions to the blockchain are permanent and cannot be changed.</li>
    <br><li> Encryption: Blockchain uses the SHA256 algorithm to secure its data. Thanks to the SHA256 algorithm , the senders and receiver's addresses will both be protected along with transaction details. After it is verified , the transaction will be added to the blockchain.</li>
    <br><li> Proof Of Work : Each block has its own unique previous hash , transaction details , nonce and hash. The previous hash is used so that the previous block can be identified. Transaction details are used to store the details of the transaction in the block. The nonce is used so that a random variable is assigned to the block.The hash is 64 character long value that is used to identify the block</li>
    <br><li>Mining : The person who finds the nonce and verifies the hash requirement is awarded 12.5 Bitcoins. New Bitcoins are generated in this way.</li>
</ol>
<p> More details are available <a href="https://www.quora.com/How-do-blockchains-work">here</p>
<div class="gallery">
  <a target="_blank" >
    <img src="https://media.g2crowd.com/wp-content/uploads/2018/01/23135723/blocks-2.jpg" alt="Blockchain" width="600" height="400">
  </a>
  <div class="desc"></div>
</div>


    </body>
</html>


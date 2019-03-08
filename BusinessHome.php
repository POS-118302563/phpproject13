<!DOCTYPE html>
<html>
    <head>
        <style>
      body{  background-image:url("https://bei.edu/wp-content/uploads/2016/11/grey-screen-background.jpg");
             background-size: 1450px 1000px;
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
  margin: 50px;
  border: 1px solid black;
  float: left;
  width: 600px;
  
}
div.gallery:hover {
  border: 1px solid #777;
}
div.gallery img {
  width: 100%;
  height: 315px;
}
div.desc {
  padding: 15px;
  text-align: center;
  color:black;
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
  <a href="BusinessHome.php">About</a>
  <a href="BlockChain.php">Blockchain</a>
  <a href="AutononmousThings.php">Autonomous Things</a>
  <a href="hImmersiveExperience.php">Immersive Experience</a>
  <a href="eBus1.php">Services</a>

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
<p><b> CleverConsulting is an Irish owned IT Consulting Agency , currently with one office in Dublin and another in London. Founded in 2018 by college dropout Danny O'Brien , CleverConsulting has been one of the fastest growing businesses in Ireland . The company has accumulated a revenue of €1.5 million in 2018 alone while also gaining over 200 clients. We are proud to say we have gained 99% customer satisfaction since opening in 2018 and we hope to maintain this level of satifaction with our knowledge , contacts and resources. Our expertise in the IT area has proved highly benificial for many of our clients , consistently resulting in increased revenue. Our clients needs is the biggest area of importance to us and our standard of service constantly exceeding expectations.</P>

<div class="gallery">
  <a target="_blank" >
    <img src="https://img.rasset.ie/000f5a94-500.jpg" alt="Dublin" width="600" height="400">
  </a>
  <div class="desc">Dublin Office</div>
</div>

<div class="gallery">
  <a target="_blank" >
    <img src="http://www.mcaleer-rushe.co.uk/wp-content/uploads/2015/02/Cursitor-London-I.jpg" alt="London" width="600" height="400">
  </a>
  <div class="desc">London Office</div>
</div>
    </body>
</html>

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
  <a href="BusinessHome.php">About</a>
  <a href="BlockChain.php">Blockchain</a>
  <a href="AutononmousThings.php">Autonomous Things</a>
  <a href="ImmersiveExperience.php">Immersive Experience</a>
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
<h1> Immersive Experience </h1>
<p><b>Immersive experiences are expected to grow into a $108 billion market by 2021. This means investing in this sector could prove highly profitable. Immersive Experience is split into two main areas:</P>

<ol>
    <li> Virtual Reality : Virtual Reality is a computer generated simulation of a real-life environment or situation. it immerses the user by making them feel like they are in that situation, mainly using vision and hearing. While VR is commonly used for entertainment purposes , it can also be used for training ( flight simulators for pilots).</li>
    <li> Augmented Reality : Augmented Reality is a technology that imposes a computer-generated image on the users view of the world. AR is constantly being used more and more to change how the real world and digital images interact.
</ol>

<p> More details are available <a href="https://www.augment.com/blog/virtual-reality-vs-augmented-reality/">here</p>
<div class="gallery">
  <a target="_blank" >
    <img src="https://assets.entrepreneur.com/content/3x2/2000/20170403182911-GettyImages-648307604.jpeg?width=700&crop=2:1" alt="Dublin" width="600" height="400">
  </a>
  <div class="desc">Virtual Reality</div>
</div>

<div class="gallery">
  <a target="_blank" >
    <img src="https://cdn-images-1.medium.com/max/1000/1*K4v3T5GcJVDAxm3IOJ9mQw.jpeg" alt="London" width="600" height="400">
  </a>
  <div class="desc">Augmented Reality</div>
</div>


    </body>
</html>



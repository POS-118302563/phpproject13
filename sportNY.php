<!DOCTYPE>
<html>
    <head>
        <style>
        h1 {
text-align: center;
    text-decoration: underline;
    color:white;
}

body {
    background-image: url("http://scottdanielcooper.com/wp-content/uploads/2016/07/NYK-at-GSW-17-1-1140x760.jpg");
background-size : 1550px 920px;
}

p {
    margin-left:250px;
    margin-right:250px;
    font-size:20px;
    color: 	white;

   
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

  div.gallery {
  margin: 35px;
  border: 1px solid white;
  float: left;
  width: 385px;
  
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 200px;
}

div.desc {
  padding: 15px;
  text-align: center;
  color:white;
}
    </style>
    </head>
    <body>
        
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8000/newYork.php">Home</a>
  <a href="http://localhost:8000/NYHistory.php">History</a>
  <a href="http://localhost:8000/attractionsNY.php">Tourism</a>
  <a href="http://localhost:8000/sportNY.php">Sports</a>
</div>


<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; Menu</span>
        
        
        <h1> Sport </h1>
      
<p><b>New York City sports fans are some of the most passionate fans in the world. In New York, the fans either 'Love You or Hate You'. The three main sports in New York are Basketball , American Football and Baseball.     </B></p>
<ul><b>
    <li> New York Knicks - The team , established by Ned Irish in 1946 were successful for a number of years winning 2 NBA championships in 1970 & 1973. However , in recent years the Knicks have struggled. They have failed to reach the playoffs since winning the division title in the 2012-13 season.<br>Currently , the team is coached by David Fizdale and have a record of 13-48. Although the Knicks have a poor record this seen , many fans are excited for the future with promising young talent such as Kevin Knox and Dennis Smith Jr.</li>
    <br><li> New York Giants - Established by Tim Mara , the Giants are one of the most successful teams in the NFL , winning 4 Super Bowl Championships ( 1986,1990 , 2007 , 2012). Currently , the team is struggling even though the team has plenty of talent in players like Odell Beckham Jr , Eli Manning and Saquon Barkley.  </li>
    
    <br><li>New York Yankees - The Yankees were first founded in 1902 by Frank J. Farrell and William Stephen Devery but weren't actually named "The New York Yankees" until 1913. The Yankees have won 27 Major League Baseball titles , most recently in 2009. They have had many famous players through the years such as Derek Jeter , Babe Ruth and Mariano Rivera.</li>
    </b></ul>
<div class="gallery">
  <a target="_blank" href="https://www.nba.com/knicks/">
    <img src="https://www.gannett-cdn.com/-mm-/eee0f6a93d82ab44f5d54a64c3b0ff0786f4ee4e/c=0-156-3889-2344/local/-/media/2019/02/25/USATODAY/usatsports/c99dd8fe887a4f00b327ced19978816e.jpg?width=3200&height=1680&fit=crop" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Dennis Smith Jr , New York Knicks</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.giants.com/">
    <img src="https://s3media.247sports.com/Uploads/Assets/475/61/9061475.jpg?fit=bounds&crop=1200:630,offset-y0.50&width=1200&height=630" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Odell Beckham Jr , New York Giants</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.mlb.com/yankees" >
    <img src="https://imagesvc.timeincapp.com/v3/fan/image?url=https%3A%2F%2Fcalltothepen.com%2Fwp-content%2Fuploads%2Fgetty-images%2F2018%2F08%2F1127430105.jpeg&c=sc&w=850&h=560" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Troy Tulowitzki , New York Yankees</div>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
    </body>
</html>

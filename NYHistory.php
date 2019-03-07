<!DOCTYPE>
<html>
    <head>
        <style>
     

body {
    background-image: url("http://www.tomgrill.com/wp-content/uploads/2015/09/ti01079029sm-1300x733.jpg");
background-size : 1450px 800px;
}

p {
    margin-left:250px;
    margin-right:250px;
    font-size:20px;
    color: 	white;

   
}

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
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
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

h1 {
     text-align: center;
    text-decoration: underline;
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
        

        <h1> History </h1>
     

<p><b>New York State was originally named "New Nederland" when the city was first found by European settlers in 1624. They also called a fort and town on the south end of Manhattan "New Amsterdam" , named after their capital city. This would eventually become present day New York City. But in 1664 , The English took over the colony during the Anglo-Dutch War. The English decided to name the state after the Duke of York , who later became King James II. When the English took over the colony there were already Dutch towns that are still part of New York today - Breukelen (Brooklyn) , Vlissingen (Flushing) , Nieuw Haarlem (Harlem) . There was also English areas in these towns - Gravesend in Brooklyn , Newtown in Queens. The population of New York began to rapidly increase from the 1700's. In 1700 , the population was about 5,000.By 1776 , the population had risen to 25,000 and by the end of the 1700's, the population was close to 60,000. Immigration became a popular trend in New York during the 1800's with many Germans and Irish settling there. Between 1892 and 1954, over 16 million immigrant's passed through the immigration station setup on Ellis Island.     </B></p>

<div class="gallery">
  <a target="_blank">
    <img src="https://i.pinimg.com/originals/cd/9f/e1/cd9fe1557b99dacb5201573ce75b0fba.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Brooklyn , 1956</div>
</div>

<div class="gallery">
  <a target="_blank">
    <img src="https://sep.yimg.com/ay/yhst-133252830141239/pushcart-market-mott-st-north-from-bayard-st-manhattan-1907-24.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Manhattan , 1907</div>
</div>

<div class="gallery">
  <a target="_blank" >
    <img src="https://www.nps.gov/common/uploads/grid_builder/elis/crop16_9/A8A4316B-1DD8-B71B-0BCD429C21D49C17.jpg?width=307&quality=90&mode=crop" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Ellis Island</div>
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


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   
  
body {
  font-family: "Lato", sans-serif;
  color: 	 	white;
  background-image: url(http://www.nycbw.com/files/New-York-City-Sunset.jpg);
  background-size : 1450px 800px;
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

h1 {
    text-align: center;
    text-decoration: underline;
    font-style:italic;
    color:  white;
    font-size: 35px;
}
p {
    margin-left:250px;
    margin-right:250px;
    font-size:20px;

   
}

           div.gallery {
  margin: 35px;
  border: 1px solid black;
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
  <a href="newYork.php">Home</a>
  <a href="NYHistory.php">History</a>
  <a href="attractionsNY.php">Tourism</a>
  <a href="sportNY.php">Sports</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<h1> New York City</h1>
<p><b> New York City (NYC) is the most populous city in the United States with a population of over 8 million people. The city is split up into 5 different boroughs : Manhattan , Queens , Brooklyn , The Bronx and Staten Island with Brooklyn being the most popular with a population of about 2.6 million. New York is also one of the most popular cities in the world in terms of immigration. About 800 languages are spoken in New York making is the most linguistically diverse city in the world. About 3.2 million people living in New York weren't born in the United States, making the largest foreign born population in the world. New York is one of the most visited cities in the world attracting over 62 million tourists in 2017. New York holds 3 of the top 10 visited tourist attractions in the world - Times Square (2nd) , Central Park (3rd) and Grand Central Terminal (6th).Some of the worlds tallest skyscraper's in the world - The Empire State Building , The Chrysler Building , Rockefeller Plaza. New York is also home to some of the most passionate sports fans in the world. Fans show up in numbers for New York Giants football games, New York Yankees baseball games and New York Knicks basketball games.</b></p>
<div class="gallery">
  <a target="_blank" href="https://www.timessquarenyc.org/">
    <img src="https://www.kitano.com/resourcefiles/snippet-main-img/times-square-in-new-york-top.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Times Square</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.centralpark.com/">
    <img src="https://www.tripsavvy.com/thmb/qyohdu59JoD6Dr3bKx9qphRL3yY=/960x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-643997141-5b844ed1c9e77c0025b0fcf6.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Central Park</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.grandcentralterminal.com/">
    <img src="https://www.wheretraveler.com/sites/default/files/styles/wt17_promoted_large/public/images/main_concourse_-_credit_grand_central_terminal.jpg?itok=4cV6qu9t&timestamp=1493748684" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Grand Central Terminal</div>
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
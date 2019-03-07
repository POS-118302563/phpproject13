






<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-image: url("https://images.wallpaperscraft.com/image/red_lines_background_texture_69795_300x240.jpg");
            }
            
			
			.header {
  padding: 20px;
  text-align: center;
  background: black;
  color: white;
  font-size: 30px;
  text-decoration:underline;
}
 
 h1 {
 text-align:center;
 text-decoration: underline;
 color:white;
 font-size:40px;
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
 
   div.description {
	
	
	margin-bottom:700px;
	margin-left:650px;
	float:right;
	}
        p{
            font-size:22px;
            color:white;
        }
                   div.gallery {
  margin: 5px;
  border: 1px solid black;
  float: left;
  width: 336px;
  
}




div.gallery:hover {
  border: 1px solid #777;
}
div.gallery img {
  width: 100%;
  height: 250px;
}
div.desc {
  padding: 15px;
  text-align: center;
  color:white;
}

h2 {
font-size:30px;
text-decoration:underline;
font-family:italic;
text-align:center;
color:white;
}


h3 {
font-size:30px;
text-decoration:underline;
font-family:italic;
text-align:left;
color:white;
}
players {
  padding:0px;
  float:left;
  }
  
        </style>
    </head>
    <body>
	  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8000/ManUtdHome.php">Home</a>
  <a href="http://localhost:8000/ManUtdPlayers.php">Former Players</a>
  <a href="http://localhost:8000/ManUtdCurrentSquad.php">Current Squad</a>

</div>


<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
	<div class="header"
        <h1> Former Players </h1>
		</div>
 
     <h2> Cristiano Ronaldo </h2>
      <div class="players">
<img src="https://www.thesun.co.uk/wp-content/uploads/2016/03/2658239.main_image.jpg?strip=all"  hre
 height="300" width="500"style="float:left;border-style: double; margin-right:20px; margin-bottom:15px;"> 
<ul>
<li> 5x Ballon D'Or ( 2008, 2013 ,2014 , 2016, 2017)</li>
<li> 4x UEFA Best Player In Europe ( 2008, 2014 , 2016 , 2017)</li>
<li> 1x European Champion ( 2016 )</li>
<li> 3x Premier League Winner ( 2007 , 2008 , 2009 )</li>
<li> 1x FA Cup Winner ( 2004 )</li>
<li>2x English League Cup Winner ( 2006 , 2009 )</li>
<li>2x FA Community Shield Winner ( 2007 , 2008 )</li>
<li>All Time Champions League Top Scorer ( 121 Goals)</li>
<br>
<br>
<br>
</ul>



<h3> Wayne Rooney </h3>
  <div class="players">
<img src="https://www.irishtimes.com/polopoly_fs/1.3749343.1546813145!/image/image.jpg_gen/derivatives/box_620_330/image.jpg"
   height="300" width="500"style="float:left;border-style: double; margin-right:20px; margin-bottom:15px;"> 
<ul>
<li>1x Champions League Winner ( 2008 )</li>
<li>1x Europa League Winner ( 2017 )</li>
<li>5x Premier League Winner ( 2007 ,2008 ,2009 ,2011 ,2013)</li>
<li>1x FA Cup Winner ( 2016 )</li>
<li>1x Premier League Player Of The Year ( 2010 )</li>
<li>4x English League Cup Winner ( 2006 , 2009 , 2010 , 2017 )</li>
<li>5x FA Community Shield Winner ( 2007 , 2008 , 2010 , 2011 , 2013 , 2016 )</li>
</ul>





    </body>
</html>
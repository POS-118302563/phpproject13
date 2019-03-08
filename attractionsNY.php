<!DOCTYPE>
<html>
    <head>
        <style>


body {
    background-image: url("http://static1.squarespace.com/static/57cf18ae6b8f5ba693497e1a/57cf1c805016e1baecb106a7/595ff586b6ac5051905681ec/1499892811999/1AP_7707070103.jpg?format=1500w");
background-size : 1450px 800px;
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
h1 {
    text-align: center;
    text-decoration: underline;
    color:white;
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
  <a href="newYork.php">Home</a>
  <a href="NYHistory.php">History</a>
  <a href="attractionsNY.php">Tourism</a>
  <a href="sportNY.php">Sports</a>
</div>


<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; Menu</span>
        
        
        <h1> Tourism </h1>


<p><b>Tourism is a massive industry in New York , with the city raking in over $60 Billion every year. Around 12 million people from outside the United States visit New York every year. Most of these tourists come from countries such as the United Kingdom , Canada and China. The city has many attractions that tourists can avail of.     </B></p>
<ul><b>
    <li> Empire State Building - Opened in 1931 , the 381m building is still the most popular attractions in New York City. Tourists can experience fantastic views of the city from the top.</li>
    <li> The Statue Of Liberty - Located in Upper New York Bay on Liberty Island , The Statue Of Liberty is one of the most iconic attractions in New York.</li>
    <li> Madison Square Garden - Madison Square Garden hosts roughly 320 events per year and is popular especially for sports fans , with the New York Knicks and the New York Rangers playing their home games here. The venue also host multiple concerts every year with artists like Travis Scott , Ariana Grande amd Elton John appearing here recently.</li>
    <li> Rockefeller Centre - One of New Yorks top attractions with stunning views from the "Top of The Rock" of Central Park and Downtown Manhattan</li>
    </b></ul>
<div class="gallery">
  <a target="_blank">
    <img src="https://www.msg.com/wp-content/uploads/2017/08/MSG_LinkedIn_-L-1590x890-OPT-1280x720.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Madison Square Garden</div>
</div>

<div class="gallery">
  <a target="_blank">
    <img src="https://www.nps.gov/common/uploads/grid_builder/stli/crop16_9/89721987-1DD8-B71B-0BE77EEAE39E0520.jpg?width=950&quality=90&mode=crop" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Statue Of Liberty</div>
</div>

<div class="gallery">
  <a target="_blank" >
    <img src="https://media.timeout.com/images/103650703/630/472/image.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Rockefeller Centre</div>
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


<!doctype html>
<html>
<head>
    
    

	<meta charset="utf-8">
	<title>INTERESTS</title>
	<meta name="title" content="jQuery One Page Scroll by Pete R. | The Pete Design" />
	<meta name="description" content="Create a beautiful 3D tilted effect on scroll with jQuery Tilted Page Scroll plugin by Pete Rojwongsuriya" />
	<link rel="image_src" href="/images/tiltedpage_scroll_image.png" />

	<meta content="http://www.thepetedesign.com/demos/tiltedpage_scroll_demo.html" property="og:url" />
	<meta content="http://www.thepetedesign.com/images/tiltedpage_scroll_image.png" property="og:image" />
	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<meta name="author" content="Pete R.">
	<link rel="canonical" href="" />
  <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.tiltedpage-scroll.js"></script>
  <link href='tiltedpage-scroll.css' rel='stylesheet' type='text/css'>
  <style>
      
    
    html {
      height: 100%;
    }
    body {
      background: #F1f1f2;
      padding: 0;
      text-align: center;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
      background: black;
      
    }
    
    .wrapper {
    	height: auto !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
    
    h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 100px;
      color: #999;
      margin-bottom: 5px;
      font-size: 70px;
      font-weight: 100;
    }
    h2 {
      padding: 00px 20px 30px 20px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      letter-spacing: 0px;
      color: #888;
      font-size: 20px;
      line-height: 160%;
      font-weight: 100;
      margin-top: 10px;
      margin-bottom: 0;
    }
    
    
    .pointer {
      color: #00B0FF;
      font-family: 'Pacifico';
      font-size: 24px;
      margin-top: 15px;
      position: absolute;
      top: 130px;
      right: -40px;
    }
    .pointer2 {
      color: #00B0FF;
      font-family: 'Pacifico';
      font-size: 24px;
      margin-top: 15px;
      position: absolute;
      top: 130px;
      left: -40px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
    }
    
    
    .main h1 {
      padding:20px 50px 10px;
      float: left;
      width: 100%;
      font-size: 60px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      margin: 0;
      padding-top: 55px;
      font-family: 'Open Sans';
      letter-spacing: -1px;
      text-transform: capitalize;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
    
    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }
    
    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }
    
    .reload, .btn{
      display: inline-block;
      border-radius: 3px;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: Open Sans;
      font-weight: bold;
      -webkit-box-shadow: none;
      box-shadow: none;
      background-color: #4D90FE;
      background-image: -webkit-linear-gradient(top,#4D90FE,#4787ED);
      background-image: -webkit-moz-gradient(top,#4D90FE,#4787ED);
      background-image: linear-gradient(top,#4d90fe,#4787ed);
      border: 1px solid #3079ED;
      color: #FFF;
    }
    .reload:hover{
      background: #317af2;
    }
    .btn {
      width: 200px;
      -webkit-box-shadow: none;
      box-shadow: none;
      background-color: #4D90FE;
      background-image: -webkit-linear-gradient(top,#4D90FE,#4787ED);
      background-image: -moz-linear-gradient(top,#4D90FE,#4787ED);
      background-image: linear-gradient(top,#4d90fe,#4787ed);
      border: 1px solid #3079ED;
      color: #FFF;
    }
    .clear {
      width: auto;
    }
    .btn:hover, .btn:hover {
      background: #317af2;
    }
    .btns {
      float: left;
      width: 100%;
      margin: 50px auto;
    }
    .credit {
      text-align: center;
      color: #888;
      padding: 10px 10px;
      margin: 0 0 0 0;
      background: #f5f5f5;
      float: left;
      width: 100%;
    }
    .credit a {
      text-decoration: none;
      font-weight: bold;
      color: black;
    }
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background:#f5f5f5;
      font-weight: bold;
      font-size: 13px;
      color: #888;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      background: #eee;
    }
    
    
    .page-container {
      float: left;
      width: 100%;
      margin: 0 auto 300px;
      position: relative;
    }
    .panorama {
      width: 100%;
      float: left;
      margin-top: -5px;
      height: 700px;
    }
    
    .panorama .credit {
      background: rgba(0,0,0,0.2);
      color: white;
      font-size: 12px;
      text-align: center;
      position: absolute;
      bottom: 0;
      right: 0;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      float: right;
    }
    
    .main {
      margin-bottom: 350px;
      overflow: hidden;
    }
    .tps-section {
      width: 100% !important;
      max-width: 1000px;
      margin: 0 auto;
      height: 500px;
    }
    
    .tps-section .tps-wrapper {
      border-radius: 5px;
    }
    .tps-section .tps-wrapper h1 {
      position: relative;
      height: 100%;
      position: absolute;
    }
    .tps-section .tps-wrapper h1 a{
      color: white;
      position: absolute;
      background: rgba(0,0,0,0.25);
      width: 100%;
      height: 100%;
      top: 0;
      padding-top: 225px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      left: 0;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 4px;
      font-size: 20px;
      font-size: 14px;
      line-height: 190%;
    }
    
    .tps-section .tps-wrapper h1 a small{
      text-transform: none;
      font-style: italic;
      font-weight: 400;
      font-family: noto serif;
      letter-spacing: 1px;
      font-size: 14px;
    }
    
    .tps-section:nth-child(1n+1) .tps-wrapper {
      background: url(https://odis.homeaway.com/odis/destination/03dc5f84-db9b-4fb1-a952-a250e9b69344.hw1.jpg) center center;
      background-size: cover;
      
    }
    
    .tps-section:nth-child(2n+1) .tps-wrapper {
      background:  url(https://media-cdn.tripadvisor.com/media/photo-s/0e/9a/e3/1d/freedom-tower.jpg) center center;
      background-size: cover;
    }
    
    .tps-section:nth-child(3n+1) .tps-wrapper {
      background:  url(http://image.masslive.com/home/mass-media/width600/img/celtics_impact/photo/jayson-tatumkyrie-irving-ca09fbb84b8bead8.jpg) center center;
      background-size: cover;
    }
    
    .tps-section:nth-child(4n+1) .tps-wrapper {
      background:  url("https://s.yimg.com/ny/api/res/1.2/_fRm3C4jwjVjjNPzacyOUg--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9ODAw/http://media.zenfs.com/en-GB/homerun/omnisport.uk/81a8a0be6df995182f494b8df402e84a") center center;
      background-size: cover;
    }
    
      
    
    
    .header {
      overflow: hidden;
      clear: both;
    }
	</style>
	<script>
	  $(document).ready(function(){
      $(".main").tiltedpage_scroll({
        angle: 20
      });
		});
		
	  </script>
    <link rel="stylesheet" href="../css/demo.css">
    <script src="../js/demo.js"></script>
  </head>
  <body>
      <!-- AdPacks.com Ad Code -->
      <script type="text/javascript">
      (function(){
        var bsa = document.createElement('script');
           bsa.type = 'text/javascript';
           bsa.async = true;
           bsa.src = '//s3.buysellads.com/ac/bsa.js';
        (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
      })();
      </script>
  
  	  <div class="main">
	    <div class="header">
        <h1>Interests , Travel , Consulting Services</h1>
 
        <p class="credit">Created by <a href="">Padraig O'Sullivan</a>, Student At <a href="https://www.ucc.ie/" target="_blank">University College Cork</a> , <a href="https://www.ucc.ie/en/ck203/" target="_blank">BIS 1</a></p>
       
  	  </div>
  	  <section class="page1">
        <div class="page_container">
          <h1><a href="http://localhost:8000/Orlando.php" target="_blank">Travel to Orlando, USA<br><small>Completed on 12 April 2017</small></a></h1>
        </div>
      </section>
  	  <section class="page2">
        <div class="page_container">
          <h1><a href="http://localhost:8000/newYork.php" target="_blank">Visit New York , USA<br><small>Completed on 25 July 2018</small></a></h1>
        </div>
      </section>
  	  <section class="page3">
        <div class="page_container">
          <h1><a href="http://localhost:8000/BostonCeltics.php" target="_blank">Boston Celtic's<br><small></small></a></h1>
        </div>
      </section>
  	  <section class="page4">
        <div class="page_container">
          <h1><a href="http://localhost:8000/ManUtdHome.php" target="_blank">Manchester United<br><small></small></a></h1>
        </div>
      </section>
  	  <section class="page5">
        <div class="page_container">
          <h1><a href="http://localhost:8000/BusinessHome.php" target="_blank">Consulting Services<br><small></small></a></h1>
        </div>
      </section>
  	  
    </div>
    <a class="back" href="http://www.thepetedesign.com/#design">Padraig O'Sullivan</a>
   
  </div>
  
  <script>

  	var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
  	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  	s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
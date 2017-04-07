<!DOCTYPE html>
<html>
<title>link2there</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-Teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<style>
.w3-allerta {
  font-family: "Allerta Stencil", Sans-serif;
}
</style>

<body>

<!-- Side Navigation -->
<!-- <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Login</a>
  <a href="#" class="w3-bar-item w3-button">Register</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</div> -->

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> -->
  <div>
  <h4>The New Way To Surf The Net</h4>
  <div class="w3-container w3-teal w3-allerta">
    <p class="w3-xxxlarge w3-animate-bottom">link2there</p>
  </div>
</div>


<!--Search Box -->

<head>
<style>
input[type=text] {
width: 130px;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
font-size: 16px;
background-color: white;
background-image: url('searchicon.png');
background-position: 10px 10px;
background-repeat: no-repeat;
padding: 12px 20px 12px 40px;
-webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
width: 100%;
}
</style>
</head>

<body>
<div class="w3-right">
<form>
<input type="text" name="search" placeholder="Search..">
</form>
</div>
</body>


<!-- Search Box End -->

<div>
  <div class="w3-center">
  <div class="w3-bar w3-theme">
    <h4> <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Recommend')">Recommend</button>
    <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'News')">News</button>
    <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Videos')">Videos</button>
  </div>
  </div>
</h4>
</div>



</header>

<!-- Modal -->

<div id="Recommend" class="w3-container city w3-animate-opacity">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>

<div id="News" class="w3-container city w3-animate-opacity">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p>
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Videos" class="w3-container city w3-animate-opacity">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>
</div>


<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h6>Copyright Yunqing Peng - All Right Reserved</h6>
    <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span> 
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  </footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();





</script>

</body>
</html>

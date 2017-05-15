<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> -->
<div class="w3-container">
  <h4 class="font-effect-3d-float">The New Way To Surf The Net</h4></div>

<div class="w3-container">

  <div class="w3-container w3-cell" style="float:left;">
    <p class="link2there font-effect-3d-float" >Link2there</p>
    <br><a href="map" style="color:white;">choose your location</a>

</div>


  </div>

  <div class="w3-container w3-center">
    <div class="w3-bar w3-theme">
      <h4><button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('recommend') ? "active" : "" }}"> <a href="recommend" style="color:white;">Recommend</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('recommend') ? "active" : "" }}"><a href="news" style="color:white;">News</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('videos') ? "active" : "" }}"><a href="videos" style="color:white;">Videos</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('about') ? "active" : "" }}"><a href="about" style="color:white;">About</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('contact') ? "active" : "" }}"><a href="contact" style="color:white;">Contact</a></button>
      </h4>
    </div>

  </div>




</header>

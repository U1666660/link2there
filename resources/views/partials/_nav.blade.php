<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> -->
<div class="w3-container">
  <h4 class="font-effect-3d-float">The New Way To Surf The Net</h4></div>
  <div class="w3-container">
    <p class="link2there font-effect-3d-float">link2there</p>
  </div>

  <div class="w3-container w3-center">
    <div class="w3-bar w3-theme">
      <h4><button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Recommend') ? "active" : "" }}"> <a href="Recommend" style="color:white;">Recommend</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Recommend') ? "active" : "" }}"><a href="News" style="color:white;">News</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Videos') ? "active" : "" }}"><a href="Videos" style="color:white;">Videos</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('About') ? "active" : "" }}"><a href="About" style="color:white;">About</a></button>
      <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Contact') ? "active" : "" }}"><a href="Contact" style="color:white;">Contact</a></button>
      </h4>
    </div>

  </div>




</header>

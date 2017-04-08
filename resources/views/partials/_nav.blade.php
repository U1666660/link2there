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
background-image: url('css/img/searchicon.png');
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
    <h4> <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Recommend') ? "active" : "" }}"> <a href="Recommend">Recommend</a></button>
    <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Recommend') ? "active" : "" }}"><a href="News">News</a></button>
    <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Videos') ? "active" : "" }}"><a href="Videos">Videos</a></button>
    <button class="w3-bar-item w3-button testbtn w3-padding-16" "{{ Request::is('Test') ? "active" : "" }}"><a href="Test">Test</a></button>
  </div>
  </div>
</h4>
</div>



<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows
 <script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

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

</script> -->



<!-- Login Register -->
<ul class="nav navbar-nav navbar-right">

<!-- Authentication Links
@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('profile.index') }}">Profile</a></li>
            <li><a href="{{ route('settings.index') }}">Settings</a></li>

                <li><a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif
Login Register -->



</header>

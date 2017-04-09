@extends('main')

@section('title', '| Test')

@section('content')


{!! Html::style('css/tiltedpage-scroll.css') !!}

<style>

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
padding: 20px 50px 10px;
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
.reload, .btn {
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
background-image: -webkit-linear-gradient(top, #4D90FE, #4787ED);
background-image: -webkit-moz-gradient(top, #4D90FE, #4787ED);
background-image: linear-gradient(top, #4d90fe, #4787ed);
border: 1px solid #3079ED;
color: #FFF;
}
.reload:hover {
background: #317af2;
}
.btn {
width: 200px;
-webkit-box-shadow: none;
box-shadow: none;
background-color: #4D90FE;
background-image: -webkit-linear-gradient(top, #4D90FE, #4787ED);
background-image: -moz-linear-gradient(top, #4D90FE, #4787ED);
background-image: linear-gradient(top, #4d90fe, #4787ed);
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
background: #f5f5f5;
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
.tps-section .tps-wrapper h1 a {
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
.tps-section .tps-wrapper h1 a small {
text-transform: none;
font-style: italic;
font-weight: 400;
font-family: noto serif;
letter-spacing: 1px;
font-size: 14px;
}
.tps-section:nth-child(1n+1) .tps-wrapper {
background:url(css/img/demo1.jpg) center center;
background-size: cover;
}
.tps-section:nth-child(2n+1) .tps-wrapper {
background: url(css/img/demo2.jpg) center center;
background-size: cover;
}
.tps-section:nth-child(3n+1) .tps-wrapper {
background: url(css/img/demo3.jpg) center center;
background-size: cover;
}
.tps-section:nth-child(4n+1) .tps-wrapper {
background: url(css/img/demo4.jpg) center center;
background-size: cover;
}

.tps-section:nth-child(5n+1) .tps-wrapper {
background: url(css/img/demo5.jpg) center center;
background-size: cover;
}

.tps-section:nth-child(6n+1) .tps-wrapper {
background: url(css/img/demo6.jpg) center center;
background-size: cover;
}

.tps-section:nth-child(7n+1) .tps-wrapper {
background: url(css/img/demo7.jpg) center center;
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
</head>
<body>
<div class="wrapper">
<div class="main">
<div class="header">
<div class="jquery-script-ads">
<script type="text/javascript">
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</div>

<!-- Core Content of Page -->

<section class="page1">
<div class="page_container">
<h1><a href="" target="_blank">Travel to Sydney, Australia<br>
<small>Completed on 14 Feb 2014</small></a></h1>
</div>

</section>
<section class="page2">
<div class="page_container">
<h1><a href="" target="_blank">Visit Uluru (Ayers Rock), Australia<br>
<small>Completed on 17 Feb 2014</small></a></h1>
</div>
</section>
<section class="page3">
<div class="page_container">
<h1><a href="" target="_blank">Travel to ZhangJiaJie (Avatar's Mountain) in China<br>
<small>Completed on 20 Jan 2014</small></a></h1>
</div>
</section>
<section class="page4">
<div class="page_container">
<h1><a href="" target="_blank">Ride a Camel in the Australian Outback<br>
<small>Completed on 17 Feb 2014</small></a></h1>
</div>
</section>
<section class="page5">
<div class="page_container">
<h1><a href="" target="_blank">Travel to Sydney, Australia<br>
<small>Completed on 14 Feb 2014</small></a></h1>
</div>
</section>
<section class="page6">
<div class="page_container">
<h1><a href="" target="_blank">Visit Uluru (Ayers Rock), Australia<br>
<small>Completed on 17 Feb 2014</small></a></h1>
</div>
</section>
<section class="page7">
<div class="page_container">
<h1><a href="" target="_blank">Travel to ZhangJiaJie (Avatar's Mountain) in China<br>
<small>Completed on 20 Jan 2014</small></a></h1>
</div>
</section>
<section class="page8">
<div class="page_container">
<h1><a href="" target="_blank">Ride a Camel in the Australian Outback<br>
<small>Completed on 17 Feb 2014</small></a></h1>
</div>
</section>

</div>
</div>


































<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>

















@endsection

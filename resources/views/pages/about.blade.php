@extends('main')

@section('title', '| About')

@section('content')

<div class="container center ">

  <div id="change-site">

        <div class="choosesites">



          <div class="w3-third w3-container"  style="float:right;">


            <!-- 3D Cloud Start -->
              <div id='tag-cloud'></div>
              <script src="js/jquery.svg3dtagcloud.min.js"></script>
              <script>

                  $( document ).ready( function() {

                          var entries = [

                              { label: 'Facebook', url: 'https://en-gb.facebook.com/', target: '_top' },
                              { label: 'Twitter', url: 'https://twitter.com', target: '_top' },
                              { label: 'Tumblr', url: 'https://www.tumblr.com', target: '_top' },
                              { label: 'LinkedIn', url: 'https://uk.linkedin.com', target: '_top' },
                              { label: 'Google+', url: 'https://plus.google.com', target: '_top' },
                              { label: 'Pinterest', url: 'https://uk.pinterest.com/', target: '_top' },
                              { label: 'Flickr', url: 'https://www.flickr.com', target: '_top' },
                              { label: 'Snapchat', url: 'https://www.snapchat.com', target: '_top' },
                              { label: 'Reddit', url: 'https://www.reddit.com', target: '_top' },
                              { label: 'Whatsapp', url: 'https://web.whatsapp.com/', target: '_top' },
                              { label: 'Youtube', url: 'https://www.youtube.com/', target: '_top' },
                              { label: 'Vimeo', url: 'https://vimeo.com', target: '_top' },
                              { label: 'MTVUK', url: 'http://www.mtv.co.uk/', target: '_top' },
                              { label: 'Jamendo', url: 'https://www.jamendo.com/', target: '_top' },
                              { label: 'BBCNews', url: 'http://www.bbc.co.uk/news', target: '_top' },
                              { label: 'Guardian', url: 'https://www.theguardian.com/uk', target: '_top' },
                              { label: 'Telegraph', url: 'http://www.telegraph.co.uk/', target: '_top' },
                              { label: 'Metro', url: 'http://metro.co.uk/', target: '_top' },
                              { label: 'Skyscanner', url: 'https://www.skyscanner.net/', target: '_top' },
                              { label: 'Expedia', url: 'https://www.expedia.co.uk', target: '_top' },
                              { label: 'EasyJet', url: 'https://www.easyjet.com/en/', target: '_top' },
                              { label: 'NationalRail', url: 'http://www.nationalrail.co.uk/', target: '_top' },
                              { label: 'TripAdvisor', url: 'https://www.tripadvisor.co.uk/', target: '_top' },
                              { label: 'Amazon', url: 'https://www.amazon.co.uk/', target: '_top' },
                              { label: 'Tesco', url: 'https://www.tesco.com/', target: '_top' },
                              { label: 'BBCSport', url: 'http://www.bbc.co.uk/sport', target: '_top' },
                              { label: 'Gmail', url: 'https://mail.google.com', target: '_top' },
                              { label: 'Paypal', url: 'https://www.paypal.com', target: '_top' }

                          ];

                          var settings = {

                              entries: entries,
                              width: 250,
                              height: 220,

                              radius: '65%',
                              radiusMin: 75,
                              bgDraw: true,
                              bgColor: '#009788',
                              opacityOver: 1.00,
                              opacityOut: 0.05,
                              opacitySpeed: 6,
                              fov: 800,
                              speed: 1,
                              fontFamily: 'Oswald, Arial, sans-serif',
                              fontSize: '15',
                              fontColor: '#fff',
                              fontWeight: 'normal',//bold
                              fontStyle: 'normal',//italic
                              fontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                              fontToUpperCase: false

                          };

                          //var svg3DTagCloud = new SVG3DTagCloud( document.getElementById( 'holder'  ), settings );
                          $( '#tag-cloud' ).svg3DTagCloud( settings );


                        }) ;



              </script>


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

<style media="screen">
@media screen and (max-width: 692px)   {
  .main, .small{
      width:100%;
      float:none;
  }
</style>
              </body>
            <!-- 3D Cloud End -->
          </div>


          <div class="siteslist">
            <h2 class="font-effect-3d-float">About Link2there<span class="arrow">&raquo;</span></h2>




<p style="font: 1em 'Montserrat Alternates', sans-serif;margin-left:20px; margin-right:20px;">
  </br>
  </br>
  Hello! My name is Yunqing Peng!</br>
  </br>
  Link2there is a human-edited directory of the Web built for my final year project. It only shows the absolute best and most popular websites within different topics.</br>
  </br>
  All websites on link2there are selected from the most popular and best websites.
  Provide a user-friendly web directory to everyone make surfing internet quickly and easily.
  The huge range of different sites and daily launches of new sites make it difficult to remember and choose.
  Link2there seeks to solve this issue by provide a clear overview of best resources on the web.</br>
  </br>
  Meanwhile, News page will update the headlines from more than 20 news sites. Video page will display the lates videos from Youtube, Vimeo and Daily Motion. Customisation and localisation functions are still under developing.</br>

  </br>

  If you have any suggestions or questions, please go to Contact Page send message to me or send email to pengyunqing730@gmail.com</br>
  </br>
  Again, Thanks for visiting! <span class="glyphicon glyphicon-heart" style="margin-left: 3px; FONT-SIZE:15px;"></span>
</p>
</div>

</div>


</div>

</div>
</div>


<!--
  <div class="w3-row-padding">
    <div class="col-md-12">
      <h1>About Link2there <span class="glyphicon glyphicon-info-sign"></span></h1>
      <p class="lead">
        <div class="w3-card-2 w3-container">
        <p style="FONT: 'Open Sans', sans-serif; text-align: left;">

Link2there(link2there.com) is a human-edited directory of the Web. Only shows the absolute best and most popular websites within different topics. All websites on link2there are selected from the most popular and best websites. Provide a user-friendly web directory to everyone make surfing internet quickly and easily. The huge range of different sites and daily launches of new sites make it difficult to remember and choose. Link2there seeks to solve this issue by provide a clear overview of best resources on the web.
If you have any suggestions or questions, please go to Contact Page send message to me or send email to pengyunqing730@gmail.com
Again, Thanks for visiting! <span class="glyphicon glyphicon-heart" style="margin-left: 3px; FONT-SIZE:15px;"></span>


  </p>
    </div>
    </div>
    </div>
  </div>
</div>


@endsection

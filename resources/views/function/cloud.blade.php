<div id='tag-cloud'></div>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
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
                width: 400,
                height: 300,
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

		} );

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
</body>

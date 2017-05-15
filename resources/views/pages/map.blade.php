<html>
    <head>

  <title>choose your location</title>
      <link href="css/jqvmap.css" media="screen" rel="stylesheet" type="text/css">

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="js/jqvmap/jquery.vmap.js"></script>
      <script type="text/javascript" src="js/jqvmap/maps/jquery.vmap.world.js" charset="utf-8"></script>

      <script type="text/javascript">
      jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({ map: 'world_en' });
      });

      jQuery('#vmap').vectorMap(
  {
      map: 'world_en',
      backgroundColor: '#a5bfdd',
      borderColor: '#818181',
      borderOpacity: 0.25,
      borderWidth: 1,
      color: '#f4f3f0',
      enableZoom: true,
      hoverColor: '#c9dfaf',
      hoverOpacity: null,
      normalizeFunction: 'linear',
      scaleColors: ['#b6d6ff', '#005ace'],
      selectedColor: '#c9dfaf',
      selectedRegions: null,
      showTooltip: true,
      onRegionClick: function(element, code, region)
      {
          var message = 'You clicked "'
              + region
              + '" which has the code: '
              + code.toUpperCase();

          alert(message);
      }
  });

      </script>
    </head>
    <body>
      <a href="recommend" style="color:black;">Back to Home</a>
      <div id="vmap" style="width: 100%; height: 100%;"></div>
    </body>
  </html>

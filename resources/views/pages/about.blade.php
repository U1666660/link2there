@extends('main')

@section('title', '| About')

@section('content')

<style>
body { font-family:'Helvetica';}
</style>

  
   <script src="js/simple-list-grid.js"></script>

<body>

  <div class="w3-row-padding w3-center w3-margin-top">

    <div class="w3-card-2 w3-container" style="min-height:460px">


   <div class="simple-list-grid w3-margin-top">
   			<ul class="list-grid-ul">

            <?php
              $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bloomberg&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
              $urlArticlesArray = json_decode($urlArticles, true);

               $articles = $urlArticlesArray['articles'];
               for($i = 0; $i < count($articles); $i++) {
                 $sites = $urlArticlesArray['articles'][$i];


                 echo '<li>
                 <table>
                 <tr>
                 <div class="data"><td>'.$sites['title'].'</td></div>
                 </tr>
                 <tr>
                 <div class="thumb"><img src="'.$sites['urlToImage'].'" width="200" " /></div>
                 </tr>
                 <tr>
                 <td>'.$sites['description'].' '.date('M j, Y H:i', strtotime($sites['publishedAt'])).'<a href="'.$sites['url'].' "style="color:blue;"> Read more...</a></td>
                 </tr>
                 </table>
                 </li>';

                 }

            ?>




          <li>
   					<div class="thumb">
   						<img src="https://placeimg.com/550/368/arch" alt="gallery image or whatever" />
   					</div>
   					<div class="data">
   						<div><b>This is the title</b></div>
   						<div>01/01/2017</div>
   						<div>Lorem ipsum ding dong dang yo!</div>
   					</div>
   				</li>
   				<li>
   					<div class="thumb">
   						<img src="https://placeimg.com/550/368/nature" alt="gallery image or whatever" />
   					</div>
   					<div class="data">
   						<div><b>This is the title</b></div>
   						<div>01/01/2017</div>
   						<div>Lorem ipsum ding dong dang yo!</div>
   					</div>
   				</li>
   				<li>
   					<div class="thumb">
   						<img src="https://placeimg.com/550/368/people" alt="gallery image or whatever" />
   					</div>
   					<div class="data">
   						<div><b>This is the title</b></div>
   						<div>01/01/2017</div>
   						<div>Lorem ipsum ding dong dang yo!</div>
   					</div>
   				</li>
   				<li>
   					<div class="thumb">
   						<img src="https://placeimg.com/550/368/tech" alt="gallery image or whatever" />
   					</div>
   					<div class="data">
   						<div><b>This is the title</b></div>
   						<div>01/01/2017</div>
   						<div>Lorem ipsum ding dong dang yo!</div>
   					</div>
   				</li>








        </ul>
   		</div>

   		<hr />

   		<p>Here is a paragraph to make sure stuff is resizing correctly</p>

   		<script>
   			$('.simple-list-grid').simpleListGrid();
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

</div>
</div>



@endsection

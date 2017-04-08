@extends('main')

@section('title', '| News')

@section('content')


<style>

.section {
  margin-top: 30px;
}


.sources li {
  list-style: none;
  float: left;
  margin: 2px;
}

.sources li img {
  width: 150px;
  height: 100px:

}

</style>

<div class="clearfix"></div>

<!-- News Resources  -->

<div class="container">
<div class="col-md-4">
<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">News Resources</h3>
    </div>

    <div class="panel-body">
      <ul class="sources">

        <?php
               $urlSources = file_get_contents('https://newsapi.org/v1/sources?language=en');
               $urlSourcesArray = json_decode($urlSources, true);

                $sources = $urlSourcesArray['sources'];
                for($i =0; $i < count($sources); $i++) {
                  $sites = $urlSourcesArray['sources'][$i];

                  echo '<li><button class="thumbnail" value="value"><img src="'.$sites['urlsToLogos']['medium'].'"></button></li>';

                  }

         ?>
      </ul>

<div class="clearfix"></div>

    </div>
  </div>
</div>
<!-- End Of News Resources  -->

<div class="col-md-8">
  <div class="panel panel-default articles">
    <div class="panel-heading">
      <h3 class="panel-title">Article</h3>
    </div>
    <div class="articles"></div>
    </div>
  </div>

</div>







@endsection

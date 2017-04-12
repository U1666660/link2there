@extends('main')

@section('title', '| News')

@section('content')

@include('news.newssources')

@include('news.newslive')


<style>
  /*  SECTIONS  */
  .section {
  clear: both;
  padding: 0px;
  margin: 0px;
  }

  /*  COLUMN SETUP  */
  .col {
  display: block;
  float:left;
  margin: 1% 0 1% 0.5%;
  }
  .col:first-child { margin-left: 0; }

  /*  GROUPING  */
  .group:before,
  .group:after { content:""; display:table; }
  .group:after { clear:both;}
  .group { zoom:1; /* For IE 6/7 */ }
  /*  GRID OF TWO  */
  .span_2_of_2 {
  width: 100%;
  }
  .span_1_of_2 {
  width: 49.75%;
  }

  /*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

  @media only screen and (max-width: 480px) {
  .col {
  margin: 1% 0 1% 0%;
  }
  }

  @media only screen and (max-width: 480px) {
  .span_2_of_2, .span_1_of_2 { width: 100%; }
  }

</style>

<div class="w3-container">

    <div class="w3-container w3-quarter">
  	   <div class="row">
  			<div class="col-md-12">
  			<div class="panel panel-default">
  			<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Live News</b></div>
  			<div class="panel-body">
  			<div class="row">
  			<div class="col-xs-12">
  			<ul class="livenews">

  			<?php echo articles(); ?>

  			</ul>
  			</div>
  			</div>
  			</div>
  			<div class="panel-footer">
  			</div>

  			</div>
  			</div>
  			</div>
  			<script type="text/javascript">
  							$(function () {
  									$(".livenews").bootstrapNews({
  											newsPerPage: 6,
  											autoplay: true,
  								pauseOnHover:true,
  											direction: 'up',
  											newsTickerInterval: 4000,
  											onToDo: function () {
  													//console.log(this);
  											}
  									});


  							});
  			</script>

      </div>


    <div class="w3-container w3-rest">


      <div class="container">

      @include('news.topnews')

      </div>





    </div>

</div>



@endsection

@extends('main')

@section('title', '| List News')

@section('content')

@include('news.sources')


	    <!-- font libs -->
		<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />

		<!-- demo page styles -->
		<link href="css/jplist.demo-pages.min.css" rel="stylesheet" type="text/css" />

		<!-- jQuery lib -->
  <!-- <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script> -->

		<!-- jPList core js and css  -->
		<link href="css/jplist.core.min.css" rel="stylesheet" type="text/css" />
		<script src="js/jplist.core.min.js"></script>

		<!-- jPList sort bundle -->
		<script src="js/jplist.sort-bundle.min.js"></script>

		<!-- jPList textbox filter control -->
		<script src="js/jplist.textbox-filter.min.js"></script>
		<link href="css/jplist.textbox-filter.min.css" rel="stylesheet" type="text/css" />

		<!-- jPList pagination bundle -->
		<script src="js/jplist.pagination-bundle.min.js"></script>
		<link href="css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />

		<!-- jPList history bundle -->
		<script src="js/jplist.history-bundle.min.js"></script>
		<link href="css/jplist.history-bundle.min.css" rel="stylesheet" type="text/css" />

		<!-- jPList toggle bundle -->
		<script src="js/jplist.filter-toggle-bundle.min.js"></script>
		<link href="css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />

		<!-- jPList views control -->
		<script src="js/jplist.list-grid-view.min.js"></script>
		<link href="css/jplist.list-grid-view.min.css" rel="stylesheet" type="text/css" />





		<style>

		.newspage {

			position:relative;

		}

		@media screen and (min-width:600px) {

		.newslist {
			float:left;
			width: 500px;
		}

		.newsview {
			float:center;
			width: 800px;

		}

		.sourceview {
			float:left;
			width: 1000px;
		}

		}

		@media screen and (max-width:599px) {
			.newslist li {
				display: inline;

			}
		}

		.clear {
			clear:both;
		}

		</style>



		<div class="newspage">

		<div class="newslist">

		</div>

		<!-- News list grid start -->
		<div class="newsview">


		</div>
	<!-- News list grid end -->


		<!-- News sources list start -->
		<div class="sourceview">


		</div>
		<!-- News sources list end -->



		<div class="clear"></div>



	</div> <!-- News Whole Page-->




@endsection

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

<body>
	<!-- main content -->
	<div class="box">
		<div class="right">
	<!--<><><><><><><><><><><><><><><><><><><><><><><><><><>  START <><><><><><><><><><><><><><><><><><><><><><><><><><>-->

		<div id="demo" class="box jplist" style="margin: 20px 0 50px 0">

		<!-- ios button: show/hide panel -->
		<div class="jplist-ios-button">
			<i class="fa fa-sort"></i>
			 Actions
		</div>

		<!-- panel -->
		<div class="jplist-panel box panel-top">

			<!-- back button button -->
			<button
				type="button"
				data-control-type="back-button"
				data-control-name="back-button"
				data-control-action="back-button">
				<i class="fa fa-arrow-left"></i> Go Back
			</button>

			<!-- reset button -->
			<button
				type="button"
				class="jplist-reset-btn"
				data-control-type="reset"
				data-control-name="reset"
				data-control-action="reset">
				Reset &nbsp;<i class="fa fa-share"></i>
			</button>

			<!-- items per page dropdown -->
			<div
				 class="jplist-drop-down"
				 data-control-type="items-per-page-drop-down"
				 data-control-name="paging"
				 data-control-action="paging">

				 <ul>
				 <li><span data-number="3"> 3 per page </span></li>
				 <li><span data-number="5"> 5 per page </span></li>
				 <li><span data-number="10" data-default="true"> 10 per page </span></li>
				 <li><span data-number="all"> View All </span></li>
				 </ul>
			</div>

			<!-- sort dropdown -->
			<div
				class="jplist-drop-down"
				data-control-type="sort-drop-down"
				data-control-name="sort"
				data-control-action="sort"
				data-datetime-format="{month}/{day}/{year}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

				<ul>
					<li><span data-path="default">Sort by</span></li>
					<li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
					<li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
					<li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
					<li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
					<li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
					<li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
					<li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
					<li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
				</ul>
			</div>

			<!-- filter by title -->
			<div class="text-filter-box">

				<i class="fa fa-search jplist-icon"></i>

				<!--[if lt IE 10]>
				<div class="jplist-label">Filter by Title:</div>
				<![endif]-->

				<input
					data-path=".title"
					type="text"
					value=""
					placeholder="Filter by Title"
					data-control-type="textbox"
					data-control-name="title-filter"
					data-control-action="filter"
				/>
			</div>

			<!-- filter by description -->
			<div class="text-filter-box">

				<i class="fa fa-search jplist-icon"></i>

				<!--[if lt IE 10]>
				<div class="jplist-label">Filter by Description:</div>
				<![endif]-->

				<input
					data-path=".desc"
					type="text"
					value=""
					placeholder="Filter by Description"
					data-control-type="textbox"
					data-control-name="desc-filter"
					data-control-action="filter"
				/>
			</div>

			<!-- views -->
			<div
				 class="jplist-views"
				 data-control-type="views"
				 data-control-name="views"
				 data-control-action="views"
				 data-default="jplist-grid-view">

				 <button type="button" class="jplist-view jplist-list-view" data-type="jplist-list-view"></button>
				 <button type="button" class="jplist-view jplist-grid-view" data-type="jplist-grid-view"></button>
				 <button type="button" class="jplist-view jplist-thumbs-view" data-type="jplist-thumbs-view"></button>
			</div>

			<!-- pagination results -->
			<div
				 class="jplist-label"
				 data-type="Page {current} of {pages}"
				 data-control-type="pagination-info"
				 data-control-name="paging"
				 data-control-action="paging">
			</div>

			<!-- pagination control -->
			<div
				 class="jplist-pagination"
				 data-control-type="pagination"
				 data-control-name="paging"
				 data-control-action="paging">
			</div>

		</div>

		<!-- data -->
		<div class="list box text-shadow">

			<!-- item bloomberg -->

				<?php
				  $urlArticles = file_get_contents('https://newsapi.org/v1/articles?source=bloomberg&sortBy=top&apiKey=3329a36068a14512b9acb66f2b8f800a');
				  $urlArticlesArray = json_decode($urlArticles, true);

				   $articles = $urlArticlesArray['articles'];
				   for($i = 0; $i < count($articles); $i++) {
				     $sites = $urlArticlesArray['articles'][$i];


				     echo '
						 <div class="list-item box">
				     	<!-- img -->
				     		<div class="img">
				       	<img src="'.$sites['urlToImage'].'" width="220" height="120" alt="" title=""/>
				     		</div>

				     	<!-- data -->
				     		<div class="block">
				       		<p class="date">'.date('M j, Y H:i', strtotime($sites['publishedAt'])).'</p>
				       		<p class="title">'.$sites['title'].'</p>
				       		<p class="desc">'.$sites['description'].'</p>
				       		<p class="theme">
									<span class="other"><a href="'.$sites['url'].' "style="color:blue;">Read more...</a></span>
									<span class="grop">Bloomberg</span>
				       		</p>
				       		<p class="like">'.$sites['author'].'</p>
				     		</div>

						 </div>


				     ';

				     }

				?>


</div>

		<div class="box jplist-no-results text-shadow align-center">
			<p>No results found</p>
		</div>

	</div>

	<!--<><><><><><><><><><><><><><><><><><><><><><><><><><> END <><><><><><><><><><><><><><><><><><><><><><><><><><>-->
</div>
</div>

</body>

<!-- jPList start -->
<script>
$('document').ready(function(){

$('#demo').jplist({
	itemsBox: '.list'
	,itemPath: '.list-item'
	,panelPath: '.jplist-panel'
});
});
</script>

@extends('main')

@section('title', '| Recommend')

@section('content')

<div class="W3-container center">

    <div id="change-site">
      <div id="bdw" class="bdw">
        <div id="bd" class="cf">
          <div class="choosesites">
            <div class="siteslist">
              <h2 class="font-effect-3d-float">Categories<span class="arrow">&raquo;</span></h2>
              <ol class="hasallcity">
                @include('pages.siteslink')

              </ol>
            </div>
          </div>
        </div>
        <!-- bd end -->
      </div>
      <!-- bdw end -->
    </div>
    <script src="js/jquerysites.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
    $(function (){
      $(".hasallcity li").hover(function(){
        $(this).addClass('hover');
      }, function(){
        $(this).removeClass('hover');
      });
    });
    </script>

</div>

@endsection

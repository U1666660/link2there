
<!-- From _nav.blade.php -->

<!-- Login Register -->
<ul class="nav navbar-nav navbar-right">

<!-- Authentication Links
@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('profile.index') }}">Profile</a></li>
            <li><a href="{{ route('settings.index') }}">Settings</a></li>

                <li><a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif
Login Register -->

<!-- From _nav.blade.php  end-->



<!-- From _head.blade.php  start-->

<!-- @yield('stylesheets') -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- From _head.blade.php  end-->


<!-- News Logo Fetch-->
<!--  <div class="row">
    <div class="col-md-12">
       <div class="panel panel-default">
          <div class="panel-heading"><span class="glyphicon glyphicon-folder-open"></span><b> News Sources</b></div>
           <div class="panel-body">
              <ol class="sources">

                 <?php echo sources(); ?>

                </ol>
                 <div class="clearfix"></div>
                </div>

               </div>
              </div>
            </div> --> <!-- Enf of News Logo Fetch-->

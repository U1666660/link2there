<!DOCTYPE html>
<html lang="en">
 <head>
  @include('partials._head')
  @include('partials._javascript')
 </head>

  <body>
    @include('partials._nav')


    @include('function.findbox')


    @yield('content')

    @include('partials._footer')

    @yield('scripts')
  </body>
</html>

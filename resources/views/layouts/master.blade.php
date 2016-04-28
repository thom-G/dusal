<!DOCTYPE html>
<html lang="en">
  @include('partails.head')
  <body>
    @include('partails.nav')

    <div class="container _minheight">

	@yield('content')      

    </div> <!-- /container -->
    @include('partails.footer')
    @include('partails.javascript')
  </body>
</html>

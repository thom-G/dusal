<!DOCTYPE html>
<html>
@include('admin_partails.head')

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    
    @include('admin_partails.header')
    @include('admin_partails.aside')
    <div class="content-wrapper">
      @yield('content')
    </div>

    @include('admin_partails.footer')
  
  </div>
  @include('admin_partails.javascripts')   
</body>
</html>
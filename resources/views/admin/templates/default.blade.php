<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.templates._head')  
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('admin.templates._top-nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @include('admin.templates._sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          @yield('content')
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('admin.templates._footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
    @include('admin.templates._scripts')
  <!-- End custom js for this page-->
</body>

</html>

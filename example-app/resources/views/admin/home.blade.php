<!DOCTYPE html>
<html lang="en">
  <head>
@include ('admin.css')

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')


      @include ('admin.navbar')

        <!-- partial -->
       @include('admin.body')
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
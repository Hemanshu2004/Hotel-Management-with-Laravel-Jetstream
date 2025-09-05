<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')

      <!-- ✅ Bootstrap 5.3.3 CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->

      <!-- header -->
      <header>
         @include('home.header')
      </header>
      <!-- end header inner -->

      <!-- slider -->
      @include('home.slider')

      <!-- about -->
      @include('home.about')

      <!-- rooms -->
      @include('home.room')

      <!-- gallery -->
      @include('home.gallery')

      <!-- blog -->
      @include('home.blog')

      <!-- contact -->
      @include('home.contact')

      <!-- footer -->
      @include('home.footer')

      <!-- ✅ Bootstrap 5 Bundle (includes Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

      <!-- ✅ jQuery (only if you really need it for custom JS, NOT for Bootstrap 5) -->
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

      <!-- ✅ Your custom scripts -->
      <script src="js/custom.js"></script>

      <!-- ✅ Fix: Scroll Position Restore -->
      <script>
         window.addEventListener("scroll", function() {
            sessionStorage.scrollTop = window.scrollY;
         });
         document.addEventListener("DOMContentLoaded", function() {
            if (sessionStorage.scrollTop !== undefined) {
               window.scrollTo(0, sessionStorage.scrollTop);
            }
         });
      </script>
   </body>
</html>

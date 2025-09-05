<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      

      {{-- Custom CSS --}}
      @include('home.css')
   </head>

   <body class="main-layout">
      <!-- Loader -->
      <!-- <div class="loader_bg">
         <div class="loader">
            <img src="{{ asset('images/loading.gif') }}" alt="Loading..."/>
         </div>
      </div> -->

      <!-- Header -->
      <header>
         @include('home.header')
      </header>

      <!-- Rooms Section -->
      <main>
         @include('home.room')
      </main>

      <!-- Footer -->
      <footer>
         @include('home.footer')
      </footer>
   </body>
</html>

<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="/public">
      @include('home.css')

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <style type="text/css">
         label {
            display: inline-block;
            width: 200px;
         }
         input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
         }

         /* Room card styling */
         .room-detail-card {
            border: 2px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            background-color: #fff;
         }

         .room-img-wrapper {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
         }

         .room-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
         }

         /* Room type badge */
         .room-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: rgba(0, 123, 255, 0.9);
            color: #fff;
            padding: 5px 12px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 4px;
            text-transform: uppercase;
         }

         .room-content h2, .room-content h3, .room-content h4 {
            margin-bottom: 10px;
         }
      </style>
   </head>
   <body class="main-layout">
      
      <!-- Loader -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
     
      <header>
         @include('home.header')
      </header>

      <div class="our_room">
         <div class="container">
            <div class="row">
               <!-- Room Details -->
               <div class="col-md-8">
                  <div class="room-detail-card">
                     <div class="room-img-wrapper">
                        <img src="/room/{{ $room->image }}" alt="Room Image">
                        @if($room->room_type)
                        <span class="room-badge">{{ $room->room_type }}</span>
                        @endif
                     </div>
                     <div class="room-content p-3">
                        <h2>{{ $room->room_title }}</h2>
                        <p>{{ $room->description }}</p>
                        <h4>Free WiFi: {{ $room->wifi }}</h4>
                        <h4>Room Type: {{ $room->room_type }}</h4>
                        <h3>Price: ₹{{ $room->price }}</h3>
                     </div>
                  </div>
               </div>

               <!-- Booking Form -->
               <div class="col-md-4">
                  <h1 style="font-size: 40px!important;">Book Room</h1>

                  @if(session()->has('message'))
                  <div class="alert alert-success">
                     <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="alert"></button>
                     {{ session()->get('message') }}
                  </div>
                  @endif

                  @if($errors)
                     @foreach($errors->all() as $error)
                     <li style="color:red">{{ $error }}</li>
                     @endforeach
                  @endif

                  <form action="{{ url('add_booking', $room->id) }}" method="POST">
                     @csrf
                     <div>
                        <label>Name</label>
                        <input type="text" name="name" @if(Auth::id()) value="{{ Auth::user()->name }}" @endif required>
                     </div>

                     <div>
                        <label>Email</label>
                        <input type="email" name="email" @if(Auth::id()) value="{{ Auth::user()->email }}" @endif  required>
                     </div>

                     <div>
                        <label>Phone</label>
                        <input type="number" name="phone" @if(Auth::id()) value="{{ Auth::user()->phone }}" @endif required>
                     </div>

                     <div>
                        <label>Start Date</label>
                        <input type="date" name="startDate" id="startDate" required>
                     </div>

                     <div>
                        <label>End Date</label>
                        <input type="date" name="endDate" id="endDate" required>
                     </div>

                     <div style="padding-top: 20px">
                        <input type="submit" class="btn btn-primary" value="Book Room">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      @include('home.footer')

      <!-- Javascript files -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>

      <!-- Date validation -->
      <script type="text/javascript">
         $(function(){
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if(month < 10) month = '0' + month;
            if(day < 10) day = '0' + day;

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);
         });
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   </body>
</html>

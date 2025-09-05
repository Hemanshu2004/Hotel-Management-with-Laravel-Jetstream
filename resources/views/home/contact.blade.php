<div class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text-center">
               <h2>Contact Us</h2>
            </div>

          @if(session()->has('message'))
          <div class="alertr alert-success">
          <button type="button" class="close" data-bs-dismiss='alert'></button>
          {{ session()->get('message')}}
          </div>
          @endif






         </div>
      </div>
      <div class="row">
         <!-- Contact Form -->
         <div class="col-md-6">
            <form id="request" class="main_form" action="{{ url('contact') }}" method="POST">
               @csrf
               <div class="row">
                  <div class="col-md-12 mb-3">
                     <input class="form-control contactus" placeholder="Name" type="text" name="name" required>
                  </div>
                  <div class="col-md-12 mb-3">
                     <input class="form-control contactus" placeholder="Email" type="email" name="email" required>
                  </div>
                  <div class="col-md-12 mb-3">
                     <input class="form-control contactus" placeholder="Phone Number" type="tel" name="phone" required>
                  </div>
                  <div class="col-md-12 mb-3">
                     <textarea class="form-control textarea" placeholder="Your Message" name="message" required></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                     <button type="submit" class="btn btn-primary send_btn px-4 py-2">Send</button>
                  </div>
               </div>
            </form>
         </div>

         <!-- Google Map -->
        <!-- Google Map -->
<div class="col-md-6">
   <div class="map_main">
      <div class="map-responsive" style="width:100%; height:500px;"> <!-- Increased height -->
         <iframe 
             src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Nashik,Maharashtra,India" 
            frameborder="0" 
            style="border:0; width: 100%; height: 100%; border-radius:10px; box-shadow:0px 4px 12px rgba(0,0,0,0.2);" 
            allowfullscreen>
         </iframe>
      </div>
   </div>
</div>

      </div>
   </div>
</div>

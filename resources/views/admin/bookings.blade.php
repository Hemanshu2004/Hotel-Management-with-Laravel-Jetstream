<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css ')

    <style type = "text/css">
      .table_deg {
        border: 2px solid white;
        margin: auto;
        width: 100%;
        text-align: center;
        margin-top: 40px;
        border-collapse: collapse;
      }

      .table_deg th, 
      .table_deg td {
        border: 2px solid white;
        padding: 12px;
      }

      .the_deg {
        background-color: silver;
        font-weight: bold;
      }

      .room-img {
        width: 120px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
       @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
      

           <table class="table_deg">
                <tr>
                  <th class="the_deg">Room ID</th>
                  <th class="the_deg">Customer Name</th>
                  <th class="the_deg">Email</th>
                  <th class="the_deg">Phone</th>
                  <th class="the_deg">Status</th>
                  <th class="the_deg">Arrival Date</th>
                  <th class="the_deg">Leaving Date</th>
                  <th class="the_deg">Room Title</th>
                  <th class="the_deg">Room Image</th>
                  <th class="the_deg">Price</th>
                  <th class="the_deg">Delete</th>
                  <th class="the_deg">Status Update</th>

                </tr>

                @foreach($bookings as $booking)
                  <tr>
                    <td>{{ $booking->room_id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>
                      @if($booking->status == 'Approve')
                      <span style="color:Green;">Approved</span>
                      @endif
                      @if($booking->status == 'rejected')
                      <span style="color:Red;">Rejected</span>
                      @endif
                      @if($booking->status == 'pending')
                      <span style="color:yellow;">Pending</span>
                      @endif
                    </td>
                    <td>{{ $booking->start_date }}</td>
                    <td>{{ $booking->end_date }}</td>
                    <td>{{ $booking->room->room_title }}</td>
                    <td>
                      <img style = "width:200 ! important" src ="/room/{{ $booking->room->image }}">
                    </td>
                    <td>{{ $booking->room->price }}</td>
                    <td>
                      <a onclick="return confirm('are you sure you want to delete this');" class="btn btn-danger" href="{{ url('delete_booking',$booking->id) }}">Delete</a>
                    </td>
                    <td>
                      <span style="padding-bottom:10px;">
                        <a class="btn btn-success" href="{{url('approve_book',$booking->id)}}">Approve</a>
                      </span>
                      <a class="btn btn-warning" href="{{url('reject_book',$booking->id)}}">Rejected</a>      
                    </td>
                    
                </tr>
                  @endforeach
                
              </table>
      
      
      
      
      
      </div>
        </div>
          </div>
      
      
      
      
      
      
      
      
      
      
      
          @include('admin.footer')
  </body>
</html>
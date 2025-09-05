<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
      .table_deg {
        border: 2px solid white;
        margin: auto;
        width: 80%;
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
        background-color: skyblue;
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
      <nav id="sidebar">
        @include('admin.sidebar')

        <div class="page-content">
          <div class="page-header">
            <div class="container-fluid">
              
              <table class="table_deg">
                <tr>
                  <th class="the_deg">Room Title</th>
                  <th class="the_deg">Description</th>
                  <th class="the_deg">Price</th>
                  <th class="the_deg">Wifi</th>
                  <th class="the_deg">Room Type</th>
                  <th class="the_deg">Image</th>
                  <th class="the_deg">Delete</th>
                  <th class="the_deg">Update</th>
                </tr>

                @foreach ($data as $room)
                  <tr>
                    <td>{{ $room->room_title }}</td>
                    <td>{{ $room->description }}</td>
                    <td>{{ $room->price }}</td>
                    <td>{{ $room->wifi }}</td>
                    <td>{{ $room->room_type }}</td>
                    <td>
                      <img width="60" src="room/{{ $room->image }}">
                    </td>
                    <td>
                      <a onclick ="return Confirm('Are you sure you want to delete this');" class = "btn btn-danger" href="{{ url('room_delete',$room->id) }}">Delete</a>
                    </td>
                    <td>
                      <a onclick ="return Confirm('Are you sure you want to update this');" class = "btn btn-warning" href="{{ url('room_update',$room->id) }}">Update</a>
                    </td>
                  </tr>
                @endforeach
              </table>

            </div>
          </div>
        </div>
      </nav>
    </div>
      
    @include('admin.footer')
  </body>
</html>

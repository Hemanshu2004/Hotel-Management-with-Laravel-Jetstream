<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
      label {
        display: inline-block;
        width: 120px;
        font-weight: bold;
      }
      .form-group {
        margin-bottom: 15px;
      }
      .room-img {
        width: 150px;
        height: 100px;
        object-fit: cover;
        margin-top: 10px;
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
              <div class="card p-4 shadow">
                <h3>Update Room</h3>
                
                <form action="{{ url('edit_room', $data->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group">
                    <label>Room Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $data->room_title }}" required>
                  </div>

                  <div class="form-group">
                    <label>Current Image</label><br>
                    <img src="{{ asset('room/' . $data->image) }}" class="room-img"><br><br>
                    <label>Change Image</label>
                    <input type="file" name="image" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $data->description }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $data->price }}" required>
                  </div>

                  <div class="form-group">
                    <label>Room Type</label>
                    <select name="type" class="form-control">
                      <option value="regular" {{ $data->room_type == 'regular' ? 'selected' : '' }}>Regular</option>
                      <option value="premium" {{ $data->room_type == 'premium' ? 'selected' : '' }}>Premium</option>
                      <option value="deluxe" {{ $data->room_type == 'deluxe' ? 'selected' : '' }}>Deluxe</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Free Wifi</label>
                    <select name="wifi" class="form-control">
                      <option value="yes" {{ $data->wifi == 'yes' ? 'selected' : '' }}>Yes</option>
                      <option value="no" {{ $data->wifi == 'no' ? 'selected' : '' }}>No</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update Room">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>      

    @include('admin.footer')
  </body>
</html>

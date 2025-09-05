<!DOCTYPE html>
<html>
  <head> 
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
                <h3>Add New Room</h3>
                <form action="{{ url('add_room') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="form-group">
                    <label>Room Title</label>
                    <input type="text" name="title" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Room Type</label>
                    <select name="type" class="form-control">
                      <option value="regular">Regular</option>
                      <option value="premium">Premium</option>
                      <option value="deluxe">Deluxe</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Free Wifi</label>
                    <select name="wifi" class="form-control">
                      <option value="yes" selected>Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Add Room">
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

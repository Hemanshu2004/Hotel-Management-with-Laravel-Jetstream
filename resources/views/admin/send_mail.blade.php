<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        @include('admin.sidebar')

        <div class="page-content">
          <div class="page-header">
            <div class="container-fluid">
              <center>
                <h1 style="font-size:30px; font-weight:bold;">
                  Mail send to {{ $data->name }}
                </h1>

                <form action="{{ url('mail',$data->id) }}" method="POST">
                  @csrf
                  
                  <div class="form-group mt-3">
                    <label>Greetings!</label>
                    <input type="text" name="greeting" class="form-control" required>
                  </div>

                  <!-- <div class="form-group mt-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                  </div> -->

                  <div class="form-group mt-3">
                    <label>Mail Body</label>
                    <textarea name="body" class="form-control" rows="3"></textarea>
                  </div>

                  <div class="form-group mt-3">
                    <label>Action Text</label>
                    <input type="text" name="action_text" class="form-control" required>
                  </div>

                  <div class="form-group mt-3">
                    <label>Action Url</label>
                    <input type="text" name="action_url" class="form-control" required>
                  </div>

                  <div class="form-group mt-3">
                    <label>End Line</label>
                    <input type="text" name="endline" class="form-control" required>
                  </div>

                  <!-- <div class="form-group mt-3">
                    <label>Room Type</label>
                    <select name="type" class="form-control">
                      <option value="regular">Regular</option>
                      <option value="premium">Premium</option>
                      <option value="deluxe">Deluxe</option>
                    </select>
                  </div> -->

                  <div class="form-group mt-4">
                    <input class="btn btn-success" type="submit" value="Send Mail">
                  </div>
                </form>
              </center>
            </div>
          </div>
        </div>  
      </nav>
    </div>
    @include('admin.footer')
  </body>
</html>

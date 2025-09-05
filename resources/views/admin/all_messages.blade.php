<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css ')

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
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
       @include('admin.sidebar')

       <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           <table class="table_deg">
                <tr>
                  <th class="the_deg">Name</th>
                  <th class="the_deg">Email</th>
                  <th class="the_deg">Phone</th>
                  <th class="the_deg">Message</th>
                  <th class="the_deg">Send Email</th>

                  
                </tr>
                 @foreach($data as $data)
               
                  <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->message }}</td>
                    <td>
                      <a class="btn btn-success" href="{{url('send_mail',$data->id)  }}">send mail</a>
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
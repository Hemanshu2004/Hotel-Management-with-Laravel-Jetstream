<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')
    <style>
        .upload-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
            flex-direction: column;
        }
        .form-box {
            background: #2d2d2d;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.3);
            color: white;
            text-align: center;
            width: 400px;
            margin-top: 20px;
        }
        .form-box label {
            font-weight: bold;
            margin-bottom: 15px;
            display: block;
            font-size: 18px;
        }
        .form-box input[type="file"] {
            margin: 15px 0;
            display: block;
            width: 100%;
        }
        .btn-custom {
            background: #ff7f50;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            padding: 10px 20px;
            border: none;
            width: 100%;
        }
        .btn-custom:hover {
            background: #ff5722;
        }

        
        .gallery-card {
            margin-bottom: 20px;
        }
        .gallery-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <nav id="sidebar">
            @include('admin.sidebar')
        </nav>

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    
                    <h1 class="text-center" style="font-size:40px; font-weight:bolder; color:white;">Gallery</h1>

                    
                    <div class="row">
                        @foreach($gallary as $gallary)
                        <div class="col-md-4 gallery-card">
                            <img src="/gallary/{{ $gallary->image }}">
                            <a class="btn btn-danger "href="{{ url('delete_gallary',$gallary->id) }}">Delete Image</a>
                        </div>
                        @endforeach
                    </div>

                   
                    <div class="upload-container">
                        <div class="form-box">
                            <form action="{{ url('upload_gallary') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label>Upload Image</label>
                                <input type="file" name="image" class="form-control" required>
                                <input type="submit" value="Add Image" class="btn btn-custom mt-3">
                            </form>
                        </div>
                    </div>

                    
                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>
</html>

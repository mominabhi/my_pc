<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="col-md-6 offset-3" style="margin-top: 1%">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    Image Upload
                </div>
                <div class="col-md-2 offset-4">
                    <a href="{{route('show.form')}}" class="btn btn-dark">Back </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @foreach($images as $image)
                <img src="{{asset($image->image_name)}}" style="width: 10%" height="10%">
            @endforeach
        </div>
    </div>
</div>
</body>
</html>



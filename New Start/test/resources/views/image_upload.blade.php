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
        <div class="card-header">Image Upload</div>
        <div class="card-body">
            <form method="post" action="{{route('upload.form')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <input type="submit" class="btn btn-success" name="image_upload" value="Upload Image">
            </form>
        </div>
    </div>
</div>
</body>
</html>


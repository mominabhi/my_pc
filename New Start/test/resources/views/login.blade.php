<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="col-md-8 offset-2" style="margin-top: 1%">
    @if(Session::has('error'))
   <div class="alert alert-danger">
       {{Session('error')}}
   </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 style="text-align: center;color: darkgrey">Login User</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('login')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-dark btn-block" value="লগিন">
            </form>
        </div>
    </div>
</div>
</body>
</html>





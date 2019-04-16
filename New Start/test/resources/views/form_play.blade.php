<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="col-md-8 offset-2" style="margin-top: 1%">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 style="text-align: center;color: darkgrey">Play With Form</h3>
        </div>
        <div class="card-body">
            <h3>Registration Form</h3>
            <form method="post" action="{{route('form.submit')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Mobile Number:</label>
                    <input type="number" name="mobile" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Registration Date:</label>
                    <input type="date" name="reg_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Gender:</label>
                    <select class="form-control" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Favorite Programming Language:</label>
                    <select name="language[]" size="3" class="form-control" multiple="multiple">
                        <option value="c">C</option>
                        <option value="c++">C++</option>
                        <option value="java">Java</option>
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <input type="submit" class="btn btn-dark btn-block" value="Registration">
            </form>
        </div>
    </div>
</div>
</body>
</html>



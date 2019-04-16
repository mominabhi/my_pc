<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="col-md-12" style="margin-top: 1%">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session('success')}}
        </div>
    @endif
    <a href="{{route('logout')}}" class="btn btn-dark" style="margin-left: 90%">Logout</a>
    <table class="table">
        <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Registration Date</th>
        <th>Gender</th>
        <th>language</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach($plays as $play)
            <tr>
                <td>{{$play->id}}</td>
                <td>{{$play->name}}</td>
                <td>{{$play->email}}</td>
                <td>{{$play->mobile}}</td>
                <td>{{$play->reg_date}}</td>
                <td>{{$play->gender}}</td>
                <td>
                    @php
                        $languages=explode(',',$play->language);
                   foreach ($languages as $language)
                    {
                     echo $language."<br>";
                    }
                    @endphp
                </td>
                <td>
                    <a href="{{URL::to('forms/edit/'.$play->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{URL::to('forms/delete/'.$play->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
    {{$plays->links()}}
</div>
</body>
</html>



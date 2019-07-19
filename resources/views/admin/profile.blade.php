<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>welcome profile  page</h1>

<ul>
    {{csrf_field()}}


    @foreach ($admins as $admin)
        {{$admin->username}}
    @endforeach


    <h1>Welcome </h1><p></p>
    {{--<p>{{$employees->password}}</p>--}}
    {{--<p>{{$employees->cname}}</p>--}}
    {{--<p>{{$employees->cno}}</p>--}}
    {{--<p>{{$employees->name}}</p>--}}







</ul>

</body>
</html>

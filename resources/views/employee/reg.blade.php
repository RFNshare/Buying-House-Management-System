<!DOCTYPE html>
<html>
<head>
    <title>Seller SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/adminreg.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
<!-- main -->
<div class="main-w3layouts wrapper">
    <h1>Seller SignUp Form</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            {!!  Form::open(['method'=>'POST','action'=>'EmployeeController@store']) !!}
            {{csrf_field()}}
            {!! Form::label('name','Name: ') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
            {!! Form::label('compamyname','Company Name: ') !!}
            {!! Form::text('cname', null,['class'=>'form-control']) !!}
            {!! Form::label('contactno','Contact No: ') !!}
            {!! Form::text('cno', null,['class'=>'form-control']) !!}
            {!! Form::label('username','Username: ') !!}
            {!! Form::text('username', null,['class'=>'form-control']) !!}
            {!! Form::label('password','Password: ') !!}
            {!! Form::password('password', null,['class'=>'form-control']) !!}


            <div class="wthree-text">
               
                <div class="clear"> </div>
            </div>
            {!! Form::submit('Create Seller',['class'=>'btn btn-primary']) !!}
            </form>
            <p>Don't have an Account? <a href="{{route('employee.login')}}"> Login Now!</a></p>

        </div>
    </div>

</body>
</html>

</div>
{{--//  <div>{{session('message')}}</div>--}}
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div>
    @endif

    </div>

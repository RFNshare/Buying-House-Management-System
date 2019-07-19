<!DOCTYPE html>
<html>
<head>
    <title>Seller Login Form</title>
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
    <h1>Seller Login Form</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
           
    {!!  Form::open(['method'=>'POST','action'=>'EloginVerifyController@verify']) !!}
    {{csrf_field()}}
    {!! Form::label('username','Username: ') !!}
    {!! Form::text('username', null,['class'=>'form-control']) !!}<br>
    {!! Form::label('password','Password: ') !!}
    {!! Form::password('password', null,['class'=>'form-control']) !!}<br>
    
   


                <div class="wthree-text">
                    <!-- <label class="anim">
                        <input type="checkbox" class="checkbox" required="">
                        <span>I Agree To The Terms & Conditions</span>
                    </label> -->
                    <div class="clear"> </div>
                </div>
             {!! Form::submit('Login',['class'=>'btn btn-primary']) !!}
            </form>
           <div class="login-page">

            <p class="message">Not registered? <a href="{{route('employee.create')}}">Create an account</a></p>
            <p class="message">Back To Home Page <a href="{{route('home')}}">Click Here</a></p>

    </div>
        </div>
    </div>
    <!-- copyright -->

    <!-- //copyright -->
  
</div>
<!-- //main -->
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
<div>{{session('message')}}</div>

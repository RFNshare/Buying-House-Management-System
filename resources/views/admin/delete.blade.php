<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


{!!  Form::open(['method'=>'DELETE','action'=>['EmployeeController@destroy',$employees->id]]) !!}
{{csrf_field()}}
<div class="form-group">
    {!! Form::submit('Delete User',['class'=>'btn btn-primary']) !!}
</div>


{!! Form::close() !!}

</body>
</html>

@extends('admin_panel.adminLayout') @section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Delete  Employee</title>
</head>










<body>
    {{csrf_field()}}
       <a href="{{route('employee.list')}}">Back to List</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    {!!  Form::open(['method'=>'DELETE','action'=>['EmployeeController@destroy',$employees->id]]) !!}
                        {{csrf_field()}}
                        
    <center>
        <table>
            <caption><b>Confirm Delete</b></caption>


            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td>UserName</td>

            </tr>
            <tr>
                <td><input type="text" name="username" id="Name" disabled value='{{$employees->username}}'   > </td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td>Compnay Name</td>

            </tr>
            <tr>
                <td><input type="text" name="cname" id="Description" disabled value='{{$employees->cname}}' ></td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>





            <tr>
                <td>
                    </br>
                </td>

            </tr>

            <tr>
                <td>Contact No</td>

            </tr>
            <tr>
                <td><input type="text" name="cno" id="Price" disabled  value='{{$employees->cno}}'></td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td>Name</td>

            </tr>
            <tr>
                <td><input type="text" name="name" id="Discounted_Price" disabled value='{{$employees->name}}'></td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td></td>
                <td>{!! Form::submit('Banned Seller?',['class'=>'btn btn-primary']) !!}</td>
            </tr>



            @if($errors->any())


            <ul>
                @foreach($errors->all() as $err)
                <tr>
                    <td>
                        <li>{{$err}}</li>
                    </td>
                </tr>
                @endforeach
            </ul>


            @endif

        </table>
    </center>

</form>


    </br>
    </br>



    </br>
    </br>






</body>

</html>


@endsection

@extends('admin_panel.adminLayout') @section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Delete  Product</title>
</head>










<body>
    {{csrf_field()}}
       <a href="{{route('admin.view')}}">Back to List</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    {!!  Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$products->id]]) !!}
                        {{csrf_field()}}
                        
    <center>
        <table>
            <caption><b>Confirm Delete</b></caption>

            <tr>
                <td>Image</td>

            </tr>
            <tr>
                <td>
                    
                   <img id="imageHolder" src="{{$products->path}}" alt="image" height="300" width="300" />
                    
                </td>

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
                <td><input type="text" name="Name" id="Name" disabled value='{{$products->name}}'   > </td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td>Description</td>

            </tr>
            <tr>
                <td><input type="text" name="Description" id="Description" disabled value='{{$products->description}}' ></td>

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
                <td>Price</td>

            </tr>
            <tr>
                <td><input type="text" name="Price" id="Price" disabled  value='{{$products->price}}'></td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td>Discounted Price</td>

            </tr>
            <tr>
                <td><input type="text" name="Discounted_Price" id="Discounted_Price" disabled value='{{$products->Discounted_Price}}'></td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td></td>
                <td>{!! Form::submit('Delete Product',['class'=>'btn btn-primary']) !!}</td>
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

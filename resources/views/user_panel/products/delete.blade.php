<!DOCTYPE html>
<html>

<head>
    <title>Delete  Product</title>
</head>










<body>
    {{csrf_field()}}
       <a href="{{route('admin.products')}}">Back to List</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <form method="post">
                        {{csrf_field()}}
                        
    <center>
        <table>
            <caption><b>Confirm Delete</b></caption>

            <tr>
                <td>Image</td>

            </tr>
            <tr>
                <td>
                    
                   <img id="imageHolder" src="/uploads/products/{{$product->name}}/{{$product->image_name}}" alt="image" height="300" width="300" />
                    
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
                <td><input type="text" name="Name" id="Name" disabled value='{{$product->name}}'   > </td>

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
                <td><input type="text" name="Description" id="Description" disabled value='{{$product->description}}' ></td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td>Category</td>

            </tr>




            <tr>
                <td><input type="text" name="Category" id="Category" disabled value='{{$product->category->name}}'> </td>
                


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
                <td><input type="text" name="Price" id="Price" disabled  value='{{$product->price}}'></td>

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
                <td><input type="text" name="Discounted_Price" id="Discounted_Price" disabled value='{{$product->discount_price}}'></td>

            </tr>
            <tr>
                <td>
                    </br>
                </td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="deleteButton" id="deleteButton" value="DELETE" /></td>
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



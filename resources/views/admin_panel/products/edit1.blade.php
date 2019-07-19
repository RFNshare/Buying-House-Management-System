<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
</head>


<body>
    {{csrf_field()}}
    <a href="{{route('admin.products')}}">Back to List</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <center>
            <table>
                <caption>
                    <b>Edit Product</b>
                </caption>

                <tr>
                    <td>Current Image</td>

                </tr>
                <tr>
                    <td>

                        <img id="imageHolder" src="/uploads/products/{{$product->name}}/{{$product->image_name}}" alt="add image" height="300" width="300"
                        />

                    </td>

                </tr>
                <tr>
                    <td>New Image</td>

                </tr>
                <tr>
                    <td>
                        <input type="file" name="myfile" id="myfile" onchange="loadFile(event)">
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
                    <td>
                        <input type="text" name="Name" id="Name" value='{{$product->name}}'> </td>

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
                    <td>
                        <input type="text" name="Description" id="Description" value='{{$product->description}}'>
                    </td>

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
                    <td>
                        <select name="Category" id="Category">

                            @php foreach($catlist->all() as $cat) { if($product->category->id==$cat->id) { $select_attribute='selected'; } echo "
                            <option
                                value=".$cat->id." " .$select_attribute.">".$cat->name." </option>"; $select_attribute=''; } @endphp
                        </select>
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
                    <td>
                        <input type="text" name="Price" id="Price" value='{{$product->price}}'>
                    </td>

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
                    <td>
                        <input type="text" name="Discounted_Price" id="Discounted_Price" value='{{$product->discount}}'>
                    </td>

                </tr>
                <tr>
                    <td>
                        </br>
                    </td>

                </tr>
                <tr>
                    <td>Sizes</td>


                </tr>
                <tr>
                    <td>
                        <input type="text" name="Sizes" id="Sizes" value='{{$product->sizes}}'>
                    </td>

                </tr>
                <tr>
                    <td>
                        </br>
                    </td>

                </tr>
                <tr>
                    <td>Colors</td>


                </tr>
                <tr>
                    <td>
                        <input type="text" name="Colors" id="Colors" value='{{$product->colors}}'>
                    </td>

                </tr>
                <tr>
                    <td>
                        </br>
                    </td>

                </tr>
                <tr>
                    <td>Tags</td>


                </tr>
                <tr>
                    <td>
                        <input type="text" name="Tags" id="Tags" value='{{$product->tag}}'>
                    </td>

                </tr>
                <tr>
                    <td>
                        </br>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="saveButton" id="saveButton" value="SAVE" />
                    </td>
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

<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageHolder').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#myfile").change(function () {
        readURL(this);
    });

</script>

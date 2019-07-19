<!DOCTYPE html>
<html>

<head>
    <title>Variations</title>
</head>

<body>
    {{csrf_field()}}
       <a href="{{route('admin.products')}}">Back to Product List</a>

   <form method="post"> <table>
       <input type="hidden" name="Product_id" id="Product_id" value="{{$which_product->id}}" >
       <caption><b>Add New Color,Size of {{$which_product->name}}</b></caption>
        {{csrf_field()}}
        <tr>
            <td>Color</td>
            <td><input type="text" name="Color" id="Color" value={{old('Color')}}><br/></td>
        </tr>
        <tr>
            <td>Size</td>
            <td><input type="text" name="Size" id="Size"  value={{old('Size')}}><br/></td>
        </tr>
        
       <tr>
            <td>Stock</td>
            <td><input type="text" name="Stock" id="Stock"  value={{old('Stock')}}><br/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="saveButton" id="saveButton" value="SAVE" /></td>
        </tr>

       
        @if($errors->any())
       
       
        <ul>
            @foreach($errors->all() as $err)
           <tr> <td><li>{{$err}}</li> </td></tr>
            @endforeach
        </ul>
           
           
        @endif

    </table></form>


    </br>
    </br>



    </br>
    </br>



    <table border="1">
               <caption><b>All Variations</b></caption>

        <tr>
            <th>COLOR</th>
            <th>SIZE</th>
            <th>STOCK</th>
            <th>OPTION</th>

        </tr>

        @foreach($variationslist as $variation)
        <tr>
            <td>{{$variation->color}}</td>
            <td>{{$variation->size}}</td>
             <td>{{$variation->stock}}</td>


            
          <td><a href="{{route('admin.products.variations.edit', ['id' => $variation->id])}}">Edit</a>   |
              {{--<a href="{{route('admin.categories.delete', ['id' => $variation->id])}}">Delete</a>--}}
            </td>
        </tr>
        @endforeach

    </table>



</body>

</html>

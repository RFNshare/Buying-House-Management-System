<!DOCTYPE html>
<html>

<head>
    <title>Edit Variation</title>
</head>

<body>
   <a href="{{route('admin.products.variations', [$variation->product_id])}}">Back to Variation List</a>

   <form method="post" > <table>
                      <caption><b>Edit Variation</b></caption>

        {{csrf_field()}}
        
              <input type="hidden" name="Product_id" id="Product_id" value="{{$variation->product_id}}" >

       <tr>
            <td>Color</td>
            <td><input type="text" name="Color" id="Color" value="{{$variation->color}}"><br/></td>
        </tr>
        <tr>
            <td>Size</td>
            <td><input type="textarea" name="Size" id="Size" value="{{$variation->size}}"><br/></td>
        </tr>
       <tr>
            <td>Stock</td>
            <td><input type="textarea" name="Stock" id="Stock" value="{{$variation->stock}}"><br/></td>
        </tr>
        <tr>
            <td></td>
            <td><input  type="submit" name="updateButton" id="updateButton" value="UPDATE" /></td>
        </tr>


       
        @if($errors->any())
       
       
        <ul>
            @foreach($errors->all() as $err)
           <tr> <td><li>{{$err}}</li> </td></tr>
            @endforeach
        </ul>
           
           
        @endif

    </table></form>


    



</body>

</html>

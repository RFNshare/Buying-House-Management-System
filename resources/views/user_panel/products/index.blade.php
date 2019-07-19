@extends('user_panel.userLayout') @section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Images
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Description
                                    </th>

                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Discounted Price
                                    </th>
                                    <th>
                                        Sizes
                                    </th>
                                    <th>
                                        Colors
                                    </th>
                                    <th>
                                        Tags
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $prd)
                                <tr>
                                    <td>
                                        <img src="{{$prd->path}}" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                        {{$prd->name}}
                                    </td>
                                    <td>
                                        {{$prd->description}}
                                    </td>
                                    <td>
                                        {{$prd->price}}
                                    </td>
                                    <td>
                                        {{$prd->Discounted_Price}}
                                    </td>
                                    <td>
                                        {{$prd->Sizes}}
                                    </td>
                                    <td>
                                        {{$prd->Colors}}
                                    </td>
                                    <td>
                                        {{$prd->Tags}}
                                    </td>
                                    {{--<td>--}}
                                        {{--{{$prd->category->name}}--}}
                                    {{--</td>--}}

                                    {{--<td><a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">Edit</a> </td>--}}
                                    {{--<td><a href="{{route('admin.products.delete', ['id' => $prd->id])}}"class="btn btn-danger">Delete</a></td> --}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


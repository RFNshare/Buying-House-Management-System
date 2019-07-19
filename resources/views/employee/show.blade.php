@extends('user_panel.userLayout') @section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Seller Profile</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        UserName
                                    </th>
                                    <th>
                                        Password
                                    </th>
                                    <th>
                                        Company Name
                                    </th>
                                    <th>
                                        Contact No
                                    </th>

                                    <th>
                                        Update
                                    </th>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>

                                    <td>
                                        {{$employees->name}}
                                    </td>
                                    <td>
                                        {{$employees->username}}
                                    </td>
                                    <td>
                                        {{$employees->password}}
                                    </td>
                                    <td>
                                        {{$employees->cname}}
                                    </td>
                                    <td>
                                        {{$employees->cno}}
                                    </td>
                                    {{--<td>--}}
                                        {{--{{$admins->email}}--}}
                                    {{--</td>--}}

                                    <td><a href="{{route('employee.edit', $employees->id)}}" class="btn btn-warning">Edit</a> </td>
                                    {{--<td><a href="{{route('product.destroy',$prd->id)}}"class="btn btn-danger">Delete</a></td>--}}
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


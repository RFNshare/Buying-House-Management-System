@extends('admin_panel.adminLayout') @section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Admin Profile</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        UserName
                                    </th>
                                    <th>
                                        Password
                                    </th>
                                    <th>
                                        Email
                                    </th>

                                    <th>
                                        Update
                                    </th>


                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>
                                            {{$admins->username}}
                                        </td>
                                        <td>
                                            {{$admins->password}}
                                        </td>
                                        <td>
                                            {{$admins->email}}
                                        </td>

                                        <td><a href="{{route('admin.edit', $admins->id)}}" class="btn btn-warning">Edit</a> </td>
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


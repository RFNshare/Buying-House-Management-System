@extends('admin_panel.adminLayout') @section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Seller List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Company Name
                                    </th>
                                    <th>
                                        Contact Number
                                    </th>

                                    <th>
                                        User Name
                                    </th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $employee)
                                    <tr>

                                        <td>
                                            {{$employee->name}}
                                        </td>
                                        <td>
                                            {{$employee->cname}}
                                        </td>
                                        <td>
                                            {{$employee->cno}}
                                        </td>
                                        <td>
                                            {{$employee->username}}
                                        </td>

                                        {{--<td><a href="{{route('product.edit', $prd->id)}}" class="btn btn-warning">Edit</a> </td>--}}
                                        <td><a href="{{route('employee.destroy',$employee->id)}}"class="btn btn-danger">Delete</a></td>
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


@extends('user_panel.userLayout') @section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                {!!  Form::model($employees, ['method'=>'PATCH','action'=>['EmployeeController@update',$employees->id]]) !!}
                                {{csrf_field()}}

                                <div class="form-group">
                                    {!! Form::label('name','Name: ') !!}
                                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password','password: ') !!}
                                    {!! Form::text('password', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('cname','Comapny name: ') !!}
                                    {!! Form::text('cname', null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('contact','Contact No: ') !!}
                                    {!! Form::text('cno', null,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('username','Name: ') !!}
                                    {!! Form::text('username', null,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
                                </div>




                                {!! Form::close() !!}


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
        $( document ).ready(function() {
            $("#myfile").change(function () {
                readURL(this);
            });

        });

        function onReadyColorList(arrayOfColor){
            var addedColor = document.querySelector("#color_list").value;
            var arrayOfColor = addedColor.split(',');
            for(var i =0 ; i< arrayOfColor.length; i++){
                newColor = `<div style="height:25px;display:inline-block;margin:5px;width:25px!important;background-color:${arrayOfColor[i]}"></div>`;
                document.querySelector("#colors").innerHTML += newColor;
            }
        }
        function addColor(){
            var pickedColor = document.querySelector("#picker").value;
            newColor = `<div style="height:25px;display:inline-block;margin:5px;width:25px!important;background-color:${pickedColor}"></div>`;
            var addedColor = document.querySelector("#color_list").value;
            //console.log(addedColor);
            if (addColor != null){
                var arrayOfColor = addedColor.split(',');
                if(!arrayOfColor.includes(pickedColor)){
                    arrayOfColor.push(pickedColor);
                    document.querySelector("#color_list").value = arrayOfColor.join(',');
                    document.querySelector("#colors").innerHTML += newColor;
                }

                console.log(addedColor);


            }
        }
        function sizeComponent(arrayOfSize){
            var s = ``;

            for(var i = 0 ; i < arrayOfSize.length; i ++){
                //alert(1);
                var temp = `<span style="border:2px solid #eee;padding:5px 5px;margin:4px">${arrayOfSize[i]}</span>`;
                console.log(temp);
                s += temp;
            }
            // console.log(s);
            return s;
        }
        function addSize(){
            var size = document.querySelector("#sizePicker").value;
            var sizeList = document.querySelector("#sizeList").value;
            if(size != ""){
                var arrayOfSize = sizeList.split(",");
                console.log(arrayOfSize);
                if(size != ""){
                    if(!arrayOfSize.includes(size)){
                        arrayOfSize.push(size);
                        document.querySelector("#sizeList").value = arrayOfSize.join(",");
                        document.querySelector("#sizes").innerHTML = sizeComponent(arrayOfSize);
                        console.log(arrayOfSize.join(","));
                    }
                }
            }
            //console.log(sizes);
        }
    </script>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div>
    @endif

    </div>
@endsection


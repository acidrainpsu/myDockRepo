@extends('layouts.admin')
@section('content')
<br>
<div class="row">
        <div class="container-fluid">
                <div class="row centered">
                  <div class="col-sm-2">
                      
                  </div>
                  
                  <div class="col-sm-8">
                        <div class="small-box bg-info">
                                <div class="inner">
                                        <h3>เพิ่มข้อมูลเกษตรกร</h3>

                                      </div>

                                      <div class="icon">
                                            <i class="ion ion-bag"></i>
                                          </div>

                        {!! Form::open(['action' => 'FarmersController@store', 'method' => 'POST', 'file' => 'true']) !!}
                        
                            <div class="form-group">
                                {{Form::label('register_code', 'รหัสการลงทะเบียน')}}
                                {{Form::text('register_code','',['class' => 'form-control','placeholder' => 'รหัสการลงทะเบียน'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('name', 'ชื่อ')}}
                                {{Form::text('name','',['class' => 'form-control','placeholder' => 'ชื่อ'])}}

                                {{Form::label('lastname', 'นามสกุล')}}
                                {{Form::text('lastname','',['class' => 'form-control','placeholder' => 'นามสกุล'])}}
                            </div>
                          
                  
                        
                            <div class="form-group">
                                    {{Form::label('address', 'ที่อยู่')}}
                                    {{Form::textarea('address','',['class' => 'form-control','placeholder' => 'ที่อยู่'])}}
                                </div>
                        
                            <div class="form-group">
                                    {{Form::label('phone', 'เบอร์โทรศัพท์')}}
                                    {{Form::number('phone','',['class' => 'form-control','placeholder' => 'เบอร์โทรศัพท์'])}}
                             </div>
                             <center>
                             {{Form::submit('ส่งข้อมูล',['class' =>'btn btn-default'])}}
                             </center>
                        
                        {!! Form::close() !!}
                  </div>
                  </div>
                  <div class="col-sm-2">
                      
                  </div>
                </div>
              </div>
      
</div>

@endsection
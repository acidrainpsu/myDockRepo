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
                                        <h3>เพิ่มข้อมูลฟาร์ม</h3>

                                      </div>

                                      <div class="icon">
                                            <i class="ion ion-bag"></i>
                                          </div>

                        {!! Form::open(['action' => 'FarmsController@store', 'method' => 'POST', 'file' => 'true']) !!}
                        
                            <div class="form-group">
                                {{Form::label('farm_name', 'ชื่อฟาร์ม')}}
                                {{Form::text('farm_name','',['class' => 'form-control','placeholder' => 'ชื่อฟาร์ม'])}}
                            </div>
                          
                            <div class="form-group">
                                {{Form::label('farm_sign', 'โลโก้ฟาร์ม')}}
                                {{  Form::file('image')}}
                            </div>
                        
                            <div class="form-group">
                                    {{Form::label('address', 'ที่อยู่ของฟาร์ม')}}
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
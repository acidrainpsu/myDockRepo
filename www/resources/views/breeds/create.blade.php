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
                                        <h3>เพิ่มข้อมูลสายพันธ์ (Breeds)</h3>

                                      </div>

                                      <div class="icon">
                                            <i class="ion ion-bag"></i>
                                          </div>

                        {!! Form::open(['action' => 'BreedsController@store', 'method' => 'POST', 'file' => 'true']) !!}
                        
                            <div class="form-group">
                                {{Form::label('breed_name', 'ชื่อสายพันธ์')}}
                                {{Form::text('breed_name','',['class' => 'form-control','placeholder' => 'ชื่อสายพันธ์'])}}
                            </div>
                          
                          
                        
                            <div class="form-group">
                                    {{Form::label('characteristics', 'คุณลักษณะเด่น')}}
                                    {{Form::textarea('characteristics','',['class' => 'form-control','placeholder' => 'คุณลักษณะเด่น'])}}
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
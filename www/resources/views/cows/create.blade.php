<?php 
    use App\Http\Controllers\FarmsController; 
    use App\Http\Controllers\BreedsController; 
    use App\Http\Controllers\FarmersController; 
    
?>
@extends('layouts.admin')
@section('content')

<?php 
    $collection=FarmsController::fetchData();
    $collectionBreeds=BreedsController::fetchData();
    $collectionFarmers=FarmersController::fetchData();
    
?>
<br>
<div class="row">
        <div class="container-fluid">
                <div class="row centered">
                  <div class="col-sm-2">
                      
                  </div>
                  
                  <div class="col-sm-8">
                        <div class="small-box bg-info">
                                <div class="inner">
                                        <h3>เพิ่มข้อมูลโค</h3>

                                      </div>

                                      <div class="icon">
                                            <i class="ion ion-bag"></i>
                                          </div>
                                          
                        {!! Form::open(['action' => 'CowsController@store', 'method' => 'POST', 'file' => 'true']) !!}
                        
                            <div class="form-group">
                                {{Form::label('ear_tag', 'เบอร์หู')}}
                                {{Form::text('ear_tag ','',['class' => 'form-control','placeholder' => 'ear_tag'])}}
                            </div>
                            <HR>

                            <div class="form-group">
                                {{Form::label('farm_id', 'ฟาร์ม :')}} 
                                {!! Form::select('name', $collection->pluck('farm_name'), $collection->pluck('farm_id'), ['class' => 'form-control']) !!} 
                            </div>
                            <HR>
                            <div class="form-group">
                                {{Form::label('register_code', 'รหัสการลงทะเบียน')}}
                                {{Form::text('register_code','',['class' => 'form-control','placeholder' => 'รหัสการลงทะเบียน'])}}
                            </div>
                            <HR>
                            <div class="form-group">
                                {{Form::label('cow_name', 'ชื่อโค')}}
                                {{Form::text('cow_name','',['class' => 'form-control','placeholder' => 'ชื่อโค'])}}
                                <HR>
                                {{Form::label('sex', 'เพศ :')}} 
                                {{Form::label('sex', 'ผู้')}} {{Form::radio('sex', 'male')}}
                                {{Form::label('sex', 'เมีย')}} {{Form::radio('sex', 'female')}}

                            </div>  

                            <div>
                                {{Form::label('breed_id', 'สายพันธ์ :')}}                          
                                {!! Form::select('breed_id', $collectionBreeds->pluck('breed_name'), $collectionBreeds->pluck('breed_id'), ['class' => 'form-control']) !!} 
                            </div>
                            <HR>   
                           
                            
                            <div class="form-group">
                                {{Form::label('color ', 'สี')}}
                                {{Form::text('color','',['class' => 'form-control','placeholder' => 'color'])}}
                            </div>
                          
                            
                        
                            <div class="form-group">
                                    {{Form::label('birthdate', 'วันเกิด')}}
                                    {{Form::date('birthdate', \Carbon\Carbon::now())}}
                                </div>
                             
                             <div class="form-group">
                                    {{Form::label('birth_weight', 'น้ำหนัก')}}
                                    {{Form::number('birth_weight','',['class' => 'form-control','placeholder' => '100'])}}
                             </div>

                             <div class="form-group">
                                {{Form::label('sire ', 'พ่อพันธ์')}}
                                {{Form::text('sire','',['class' => 'form-control','placeholder' => 'พ่อพันธ์'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('dam ', 'แม่พันธ์')}}
                                {{Form::text('dam','',['class' => 'form-control','placeholder' => 'dam'])}}
                            </div>

                            <div class="form-group">
                                {{Form::label('breeder_id', 'ผู้บำรุงพันธ์ :')}} 
                                <select class="form-control" name="breeder_id">
                                    @foreach ($collectionFarmers as $item)
                                <option value="{{$item->farmer_id}}">{{$item->farmer_id}} {{$item->name}} {{$item->lastname}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                {{Form::label('owner_id', 'เจ้าของปัจจุบัน:')}} 
                                <select class="form-control" name="owner_id">
                                        @foreach ($collectionFarmers as $item)
                                    <option value="{{$item->farmer_id}}">{{$item->farmer_id}} {{$item->name}} {{$item->lastname}}</option>
                                        @endforeach
                                    </select>
                            </div>

                           

                  
                             <center>
                             {{Form::submit('ส่งข้อมูล',['class' =>'btn btn-default'])}}
                             </center>
                        
                        {!! Form::close() !!}
                  </div>
                  </div>
                  <div class="col-sm-2">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate('http://www.simplesoftware.io')) !!} ">
                  </div>
                </div>
              </div>
      
</div>

@endsection
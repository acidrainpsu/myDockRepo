@extends('layouts.admin')
@section('content')



<?php
$table = tableView($cows)
  ->column('ชื่อโค', 'cow_name')
  ->column('เบอร์ติดหู', 'ear_tag')
  ->column('ฟาร์ม', 'farm_name')
  ->column('เลขทะเบียนโค', 'register_code')
  ->column('เพศ', 'sex')
  
  ->column('Created At', function ($cows) {
                            $url=<<<EOD
<a href="/dashboard">แสดงข้อมูลเพิ่มเติม</a>
EOD;
                           return $url.$cows->cow_id;
            })
 
  
  ->setTableRowAttributes([
       'class' => 'test'
   ])
   ->paginate(2); // default 15

// view


// view?>


<div class="row">
  <div class="container-fluid">
    <div class="row centered">
        <div class="col-sm-2">
               
        </div>
            
        <div class="col-sm-8">

          <div class="small-box bg-info">

              <div class="inner">
                  <h3>แสดงข้อมูลโค</h3>
              </div>

              <div class="icon">
                  <i class="ion ion-bag"></i>
              </div>
                                    
            
              <div class="nav-item">{{ $table->render()}}</div>
        
   
          </div>

        </div>
            
      </div>
    </div>
</div>

@endsection
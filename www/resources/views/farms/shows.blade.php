<?php 
    use App\Http\Controllers\FarmsController;   
    use App\Farm;
?>
@extends('layouts.admin')
@section('content')



<?php 
    $collectionFarms=FarmsController::fetchData();
?>

<?php
$table = tableView($collectionFarms)
  ->column('ชื่อฟาร์ม', 'farm_name')
  ->column('ที่อยู่', 'address')
  ->column('เบอร์โทรศัพท์', 'phone')
  ->setTableRowAttributes([
       'class' => 'test'
   ])
   ->paginate(); // default 15

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
                  <h3>แสดงข้อมูลฟาร์ม</h3>
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
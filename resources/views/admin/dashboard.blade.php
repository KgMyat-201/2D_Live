@extends('admin.layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Live</h3>
            </div>
            <div class="card-body">
                <h3>

                    <?php 
            
        
                date_default_timezone_set('Asia/Rangoon');
                
                $_SESSION["Date"]=date("Y-m-d");
                $_SESSION["Time"]=date("h:i:s");
                $_SESSION["AmPm"]=date("a");
                
                echo "Today is &nbsp; " . $_SESSION["Date"]."&nbsp; &nbsp";
                echo "&nbsp; &nbsp;" . $_SESSION["Time"];
                echo "&nbsp; &nbsp;" . $_SESSION["AmPm"];				
                
                ?>		
                </h3>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Restricted No:</h3>
            </div>
            <div class="card-body">
                <marquee behavior="scroll" direction="left">
                    <h4 class="text-red">
                        12, 20, 34
                    </h4>
                </marquee>
            </div>
        </div>
    </div>
</div>

@endsection
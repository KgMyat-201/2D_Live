@extends('user.layouts.user')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Restricted No:</h3>
                </div>
                <div class="card-body">
                    <marquee behavior="scroll" direction="left">
                        <h3 class="text-red">
                            12, 20, 34
                        </h3>
                    </marquee>
                </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Live</h3>
                </div>
                <div class="card-body">
                <?php 
                

                    date_default_timezone_set('Asia/Rangoon');
                    
                    $_SESSION["Date"]=date("Y-m-d");
                    $_SESSION["Time"]=date("h:i:s");
                    $_SESSION["AmPm"]=date("a");
                    
                    echo "Today is &nbsp; " . $_SESSION["Date"]."&nbsp; &nbsp";
                    echo "&nbsp; &nbsp;" . $_SESSION["Time"];
                    echo "&nbsp; &nbsp;" . $_SESSION["AmPm"];				
                    
                ?>		
                </div>
            </div>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">User Info</h3>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-row" id="form_row">
                            
                                
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Number" id="number" onkeyup="getRestrictNumber()" name="number">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Amount" name="amount">
                            </div>
                            <button class="btn btn-outline-secondary">Enter</button>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>

        function getRestrictNumber() {
          var number = document.getElementById('number').value
          console.log(number);
        // alert('hi');
        if(number==12){
            document.getElementById('number').value = null
        }
        }
      </script>
@endsection
@section('script')
<script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: false
        });
      });
    })
  </script>
@endsection
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
                <div class="card-body table-responsive" style="height: 400px;">
						
                    <table id="dynamic_field" class="table text-center"> 
                    <!--<tr id="row'+iir+'" class="dynamic-added" style="height: 45px;"><td><input type="text" name="number[]" placeholder="Number" class="form-control name_list" required /></td><td colspan="2"><input type="text" name="amount[]" placeholder="Amount" class="form-control name_list1" required /></td><td><button type="button" name="remove" id="'+iir+'" class="btn btn-danger btn_remove">X</button></td></tr>-->
                    <!--<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>-->
                    <?php 
                        for ($xr = 1; $xr <51; $xr++) 
                        {
                            echo
                            '<tr id="row'.$xr.'">   
                                <td style="padding-top: 1rem;">
                                '.$xr.'
                                </td>
                                <td><input type="text" name="number[]" placeholder="Number" class="form-control name_list"/></td>  
                                <td colspan="2"><input type="text" name="amount[]" placeholder="Amount" class="form-control name_list1"/></td> 
                                <td><button type="button" name="remove" id=	"'.$xr.'" class="btn btn-danger btn_remove">X</button></td>	
                            </tr>';
                        }
                    ?>	
                    <!--50-->
                    </table>
                </div>
                <div class="card-footer text-center">
                    <div class="row">

                       
                        <div class="ml-auto float-right">

                            <input type="button" name="Cancel" id="Cancel" onclick="window.location.href='member.php'" class="btn btn-info" value="Cancel" /> 
                            <input type="button"name="submit" id="submit" class="btn btn-info" value="Save" />  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        
      </script>
@endsection
@section('script')
<script>
    function getRestrictNumber() {
          var number = document.getElementById('number').value
          console.log(number);
        // alert('hi');
        if(number==12){
            document.getElementById('number').value = null
        }
    };
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: false
        });
      });
    });
   
	
    
  </script>
@endsection
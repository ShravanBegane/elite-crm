<html>
 <head>
        <title>Employees Roster</title>
        <link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       
<?php  include("api/getallemployees.php"); ?>
        <style>
        .module-nav .modules-menu{
            position: relative !important;
                height: 500px !important;
        }
        .custombtn{
            width:50% !important;
   margin-left: 40px !important;
     margin-right: 40px !important;
            border-radius:20px !important;
        }
        

.btn-default
{
    background-color:white !important;<
    background-image: none !important;
    background:none !important;
}
       
    </style>

        
        <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/bootstrap.min.css'>
        <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/docs.min.css'>
        <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/todc-bootstrap.min.css'>
        <link type='text/css' rel='stylesheet' href='layouts/v7/lib/font-awesome/css/font-awesome.min.css'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
        
        <script type="text/javascript">var __pageCreationTime = (new Date()).getTime();</script>
        <script src="layouts/v7/lib/jquery/jquery.min.js?v=7.3.0"></script>
        <script src="layouts/v7/lib/jquery/jquery-migrate-1.0.0.js?v=7.3.0"></script>
       
    </head>

   
<body>
<?php
error_reporting(0); 
include("api/getallemployees.php"); ?>
  
       <div class="col-xs-12" style="margin-top:15px">
               <div class="">
<div class="main-container main-container-Employees">
            
            
             <div class="listViewPageDiv content-area " id="listViewContent" style="min-height: auto;">
                        <!--map--->
                          <?php //include_once('api/getallemployees.php') ?>
                          <?php include_once('config.inc.php') ?>
                              <div class="col-sm-12 col-md-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12" >
                                    <h3>Period: </h3>
                                    <button data-toggle="collapse" class="btn btn-primary" data-target="#demo" style="margin-bottom:10px;">Select Period</button>
                                        <div id="demo" class="collapse" >
                                            <form action="<?php echo $site_URL ?>list_roster_emp.php" method="post">
                                                <input type="hidden" name="in_time1" class="form-control" id="intime" required>
                                                <input type="hidden" name="out_time1" class="form-control" id="outtime" required> 
                                                <button type="submit" onclick="today()" class="btn btn-default custombtn"> Today</button>
                                                <button type="submit" onclick="yesterday()" class="btn btn-default custombtn"> Yesterday</button>
                                                <button type="submit" onclick="weeks()" class="btn btn-default custombtn"> Week</button>
                                                <button type="submit" onclick="month()" class="btn btn-default custombtn"> Month</button>
                                                <button type="button" onclick="show()" class="btn btn-default custombtn"> Custom Range</button>
                                            </form>
                                        </div>
                                        <div style="display:none" class="custom" >
                
                                        <form action="<?php echo $site_URL ?>list_roster_emp.php" method="post">
                                          <div class="row" style="margin-top:15px !important;">
                                            <div class="col-lg-5 md-5 col-sm-5" style="margin-left:10px !important;">
                                              <span style="padding-left:10px;"><label>From</label></span>
                                              <input type="date" name="in_time1" class="form-control" value="<?php if(isset($in_time4)){ echo  $in_time4;}else{  $date=strtotime(date('Y-m-d')); $newDate = date('Y-m-d',strtotime('-15 days',$date));echo $newDate;}?>"  required>
                                            </div>
                                            <div class="col-lg-5 md-5 col-sm-5">
                                              <span style="padding: auto; margin: auto;"><label> To</label></span>
                                              <input type="date" name="out_time1" value="<?php if(isset($out_time4)){ echo  $out_time4;}else{  echo date("Y-m-d");}?>" class="form-control" required>
                                            </div>
                                            <div class="col-lg-1 md-1 col-sm-1">
                                              <button type="submit"  style="margin-top:16px;     background: none; border: none;"><i class="fa fa-arrow-circle-right fa-2x" style="color:green"></i></button> 
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                    <h4> <b>Add Employee Info<b> <button type="button" data-toggle="modal" style="border:none;background: none;" data-target="#mynewModal"><i class="fa fa-plus " style="color: orange"></i></button>  </h4>
                                    <h3>Employee list :</h3>
                                    <div style="padding-left: 20px; ">
                                        <form action="<?php echo $site_URL ?>frontend_roster.php" method="post" id="mm">
                                          <input type="hidden" name="in_time" class="form-control"  value="<?php if(isset($data[0])){echo $data[0];
                                           }else{echo $in_time4;}?>"  required>
                                           <input type="hidden" name="out_time"  class="form-control" value="<?php if(isset($data[1])){echo $data[1];
                                           }else{ echo $out_time4; }?>" required> 
                                          <?php 
                                          if(isset($ok)){
                                            if(isset($value1))
                                              {
                                                $value=array();
                                                $value=$value1;
                                              }
                                              $count = sizeof($value); ?>
                                          <?php for ($i = 0; $i < $count; $i++)  
                                          { if($value[$i]!=null){?>
                                         
                                          <input type="submit" class="btn-sucess" name="names" value="<?php echo $value[$i] ?>" style="width:50%; display:block; margin-top:3px; border:none; font-size:14px">
                                          <?php } }} ?>
                                        </form>
                                    </div> 
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                  <h3>Employee Information </h3>
                                  <?php if(isset($movefrwd)){?>
                                    <h4>Employee Name :   <?php echo $data[2]?> </h4>
                                    <h4>Date : <?php echo $data[0]?>   TO   <?php echo $data[1]?> UTC</h4>
                                    <h4>Total Working Hours : <?php echo $data[3]?> </h4>
                                  <?php } ?> <h5 id="status" style="color:green;"></h5><hr>
                                  <div class="">
                                      <table class="table table-hover">
                                          <thead>
                                              <tr>
                                                  <th>Date</th>
                                                  <th>Check In</th>
                                                  <th>Check Out</th>
                                                  <th>Working Hour's</th>
                                                  <th>Break Hour's</th>
                                                  <th>Total</th>
                                                  <th>Task</th>
                                                  <th>Status</th>
                                                <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>

                                          <?php if(isset($movefrwd)){
                                              $temp="";

                                           $countss = sizeof($dates); for ($i = 0; $i < $countss; $i++) { 

                                           ?>
                                            <tr>
                                              <td><?php echo $dates[$i]?> <a href="#" type="button"  data-toggle="modal" data-target="#myModal1" onclick="insertdata(<?php echo $ids[$i]; ?>)" > <i class="fa fa-plus-circle pull-right"style="color:blue;"></i></a></td>
                                              <td><?php echo $employeeintime[$i]?></td>
                                              <td><?php echo $employeeouttime[$i]?></td>
                                              <td><?php echo $working[$i]?></td>
                                              <td><?php echo $break[$i]?></td>
                                              <td><?php echo $total[$i]?></td>
                                              <td><?php echo $tasks[$i]?></td>
                                              <td><?php echo $statuss[$i]?></td>
                                              <td>
                                                  <a  data-toggle="modal" data-target="#myModal2" onclick="breakview(<?php echo $ids[$i]; ?>)" href="#"><i class="fa fa-list " title="Break Time Details" style="color:black; margin-left:5px;"></i></a> 
                                                  <a href="#" type="button"  data-toggle="modal" data-target="#myModal" onclick="getdata(<?php echo $ids[$i]; ?>)" ><i class="fa fa-pencil "style="color:green; margin-left:5px;"></i></a> <a   onclick="deletedata(<?php echo $ids[$i]; ?>)" href="#"><i class="fa fa-trash" style="color:red; margin-left:5px;"></i></a></td>
                                            </tr>
                                          <?php    } } ?>
                                          </tbody>
                                      </table>
                                  </div>
                                 </div>
                                  </div>
                                </div>
                              </div>
                        </div>
        </div>
</div>
</div>
       <div class='arrow'></div>
        <div class='data'>
        </div>
    </div>
    <div id='helpPageOverlay'></div>
    <div class="modal myModal fade"></div>
 <div class="clearfix"></div>
 </div>
</body>
                
  
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    <div id="answer1"></div>
    </div>
</div>               

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <?php  //include("getallemployees.php"); ?>
    <?php //include('api/getallemployees.php'); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Update  <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
        </div>
        <div class="modal-body">
                    
                    <form action="<?php echo $site_URL ?>api/updatedata.php" method="POST" autocomplete="off" id="myForm">
                     <small for="">Id :</small>
                                <input  type="text" class="form-control"  name="ids" id="ids" required readonly>
                                  
                                <input  type="hidden" class="form-control"  name="tid" id="tid" required readonly>
                         <small for="">Name :</small>
                                <input  type="text" class="form-control"  name="names" id="names" required readonly>
                         <small for="">Employee id :</small>
                                <input  type="text" class="form-control"  name="employee_id" id="employee_id" required readonly>
                                         <small for="">Date :</small>
                                <input  type="date" class="form-control"  name="date" id="date"  required >
                         <small for="">Check In :</small>
                                <input  type="time" class="form-control "  name="in_time" step="any" id="in_time"  >
                     <small for="">Check Out  :</small>
                                <input  type="time" class="form-control"  name="out_time"  step="any" id="out_time" >
                        <small for="">Task :</small>
                                <input  type="text" class="form-control"  name="task"   id="task" required>
                        
                        <div class="formstatus"></div>
                    
                                <input type="submit" value="update" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>



        
        
        
        <div class="modal fade" id="mynewModal" role="dialog">
    <div class="modal-dialog">

    <?php  //include("api/getallemployees.php"); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add New Record  <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
        </div>
        <div class="modal-body">
                    
                    <form action="<?php echo $site_URL ?>api/insertrosterdata.php" method="POST" autocomplete="off" id="myForm3">
                
                         <small for="">Employee id :</small>
                            
                                  
            <select type="number" class="form-control"  name="newemployee_id"  required >                     
                                  <?php 

 $countss = sizeof($namelist); 
 for ($i = 0; $i < $countss; $i++) { 

 ?>

  <option value="<?php echo $empid_list[$i]?>"><?php echo $namelist[$i]?></option>

                            
                            
                            
                            
                            
                            <?php    } ?>
                                  
                             </select>     
                                  
                                         <small for="">Date :</small>
                                <input  type="date" class="form-control"  name="newdate"   value="<?php echo date('Y-m-d'); ?>" required >
                         <small for="" class="fields">Check In  :</small>
                                <input  type="time" class="form-control fields time_field"  name="newin_time"    value="<?php echo date('h:i:s'); ?>">
                     <small for="" class="fields">Check Out :</small>
                                <input  type="time" class="form-control fields time_field"  name="newout_time"   value="<?php echo date('h:i:s');?>">
                         <small for="" class="tast_text">Task :</small>
                                <input  type="text" class="form-control"  name="task"   required>
                          Leave Option  <input  type="checkbox" > 
                        <div class="formstatus"></div>
                    
                                <input type="submit" value="Insert" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        
        
                         

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    <?php  //include("api/getallemployees.php"); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add New Record  <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
        </div>
        <div class="modal-body">
                    
                    <form action="<?php echo $site_URL ?>api/insertrosterdata.php" method="POST" autocomplete="off" id="myForm2">
                
                         <small for="">Employee id :</small>
                                <input  type="text" class="form-control"  name="newemployee_id" id="employee_id1" required readonly>
                                         <small for="">Date :</small>
                                <input  type="date" class="form-control"  name="newdate" id="date1" required >
                         <small for="" class="fields">Check In :</small>
                                <input  type="time" class="form-control fields time_field"  name="newin_time" id="in_time1" value="<?php echo date('h:i:s'); ?>" >
                     <small for="" class="fields">Check Out :</small>
                                <input  type="time" class="form-control fields time_field"  name="newout_time" id="out_time1" value="<?php echo date('h:i:s'); ?>" >
                         <small for="" class="tast_text">Task :</small>
                                <input  type="text" class="form-control"  name="task"   required>
                         Leave Option  <input  type="checkbox" > 
                        <div class="formstatus"></div>
                    
                                <input type="submit" value="Insert" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        
        
               <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>  
                
     <script>
     
     $('input[type="checkbox"]').click(function() { 
    if ($(this).is(':checked')) {
          $(".time_field").val('');
            $(".time_field").val('');
           $(".tast_text").text('Comments');
            $(".fields").hide();
         
            
        //alert("is checked");
    } else {
         $(".fields").show();
             $(".tast_text").text('Task'); 
       $(".time_field").val("<?php echo date('h:i:s');?>");
       $(".time_field").val("<?php echo date('h:i:s');?>");
        //alert("not checked");
    }
});
     
  function fixit(selector) {
    selector.each(function () {
        var values = $(this).find("tr>td:first-of-type")
        var run = 1
  
       console.log(values);
        for (var i=values.length-1;i>-1;i--){
            
            if ( values.eq(i).text()=== values.eq(i-1).text() && i!=0){
                
                values.eq(i).remove()
                run++   ; 
            }else{
            
                values.eq(i).attr("rowspan",run)
               
                run = 1
            }
        
        
        }
    })
}
fixit($("table"));
   
     

     
     

     
     
     
     
    function getdata(cust_id){
        $.ajax({
            type: "POST",
            url:"api/getupdateinfo.php?id="+cust_id,
            dataType: 'json',
         dataType: 'json',
            xhrFields: {
            withCredentials: true
            },
             headers: {
            "Authorization": "Basic " + btoa("<?php echo _uName ?>:<?php echo _aKey ?>")
            },
            async: false,
            success: function(obj) {//data will have what ever you echo'ed in controller
    
           
                $("#ids").val(obj.id);
                $("#tid").val(obj.record_id);
                $("#names").val(obj.name);
                $("#employee_id").val(obj.employee_id);
                $("#in_time").val(obj.in_time);
                 $("#out_time").val(obj.out_time);
                $("#date").val(obj.date);
                $("#task").val(obj.emp_task);
        
            }
    
        });
    }
    
    function insertdata(emp_id){

         $.ajax({
            type: "POST",
            url:"api/getupdateinfo.php?id="+emp_id,
            dataType: 'json',
         dataType: 'json',
            xhrFields: {
            withCredentials: true
            },
             headers: {
            "Authorization": "Basic " + btoa("<?php echo _uName ?>:<?php echo _aKey ?>")
            },
            async: false,
            success: function(obj) {//data will have what ever you echo'ed in controller
      
                $("#employee_id1").val(obj.employee_id);
                $("#date1").val(obj.date);
                   
            }
    
        });
        
        
       
    }
    
        function deletedata(cust_id){
        $.ajax({
            type: "POST",
            url:"api/deletedata.php?id="+cust_id,
            dataType: 'json',
            xhrFields: {
            withCredentials: true
            },
             headers: {
            "Authorization": "Basic " + btoa("<?php echo _uName ?>:<?php echo _aKey ?>")
            },
            async: false,
            success: function(obj) {//data will have what ever you echo'ed in controller
                alert(obj.value);
                  location.reload();
            }
        });
    }
    
        
    
    
    
    $('#myForm,#myForm2,#myForm3').submit(function(e) {
            

    e.preventDefault();
    var url = $(this).attr('action');
    var formid = '#' + this.id;

    var inputcontrols = $(formid + ' :input');
    var data = {};
    inputcontrols.each(function() {
        var c_name = this.name;
        data[c_name] = $(this).val().trim();
    });
 
    // var posting = $.post(url, data);
    // posting.done(function(data) {
        
    //     var datavalues = data.split('-');
    //     var status = formid + " .formstatus";
    //     $(status).empty();
    //     $(status).append('<p>' + datavalues[0] + '</p>');
    //     $(status).children().css("color", datavalues[1]);
    //     $(status).show().delay(10000).fadeOut();
    //     if (datavalues[2] != "")
    //         window.location.href = datavalues[2];
    //  location.reload();
        
    // });
    function afterdone(data){
        //alert(data);
        var datavalues = data.split('-');
        var status = formid + " .formstatus";
        $(status).empty();
        $(status).append('<p>' + datavalues[0] + '</p>');
        $(status).children().css("color", datavalues[1]);
        $(status).show().delay(10000).fadeOut();
        if (datavalues[2] != "")
            window.location.href = datavalues[2];
        location.reload();
    } 
    
    $.ajax({
    url: url,
    type: 'post',
    data: data,
    xhrFields: {withCredentials: true},
    headers: {
    "Authorization": "Basic " + btoa("<?php echo _uName ?>:<?php echo _aKey ?>")
        },
    success: function (data){
        afterdone(data);
    },
    error: function (data){
        alert(data);        
    }
    });
});







        function show(){

$('.custom').show();



}



$(document).ready(function() {
    $(".datepicker").datepicker();
    });

 function weeks(){
    
      var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

var lweek =("0" + (now.getDate()-6)).slice(-2);



var lastmoth=now.getFullYear()+"-"+(month)+"-"+(lweek) ;


     $('#intime').val(lastmoth);
     $('#outtime').val(today);
 
}






 function yesterday(){
     
    
      var now = new Date();

var day = ("0" + (now.getDate()-1)).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var yesterday=now.getFullYear()+"-"+(month)+"-"+(day) ;

console.log(yesterday);
     $('#intime').val(yesterday);
     $('#outtime').val(yesterday);
     
 }



 function month(){
    
      var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

var lmonth = ("0" + (now.getMonth())).slice(-2);



var lastmoth=now.getFullYear()+"-"+(lmonth)+"-"+(day) ;


     $('#intime').val(lastmoth);
     $('#outtime').val(today);
 
}


 function  today(){
    var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
     $('#intime').val(today);
     $('#outtime').val(today);
     
     
 }
    </script>

<script>
    function breakview(str){
        $.ajax({
            type: "POST",
            url: "breakview.php",
            data: {id: str,  },
        
            success: function(data) {
            $("#answer1").html(''+data+'');
            //alert("updated Successfully");
            //window.location = "product_detail.php";
        }
        });
        return false;
    }
</script>


      

    <style> 
      .col-lg-5, .col-md-5{
           padding-right:0px;
           padding-left:3px;
       }        

       .table-hover tr td, th{
        white-space: nowrap;
    }
                    
                 
                 
    <?php include_once('loadjs.php') ?>
    <!----Map Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        #map {
            width: 100% !important;
            height: 600px;
        }

        #list {
            position: absolute;
            top: 54px;
            left: 25px;
        }

        #list .list-group .list-group-item {
            text-align: center;
            padding-right: 23px;
            padding-left: 23px;
        }
    </style>
    <script>
        $("#adv-search").attr("disabled", true);
    </script>


<div class="modal myModal fade"></div>

<script type="text/javascript" src="layouts/v7/lib/todc/js/bootstrap.min.js"></script>
<script type="text/javascript">var _REQSTARTTIME = "1609928039";jQuery(document).ready(function() { window._PAGEREADYAT = new Date(); });
        jQuery(window).load(function() {
            window._PAGELOADAT = new Date();
            window._PAGELOADREQSENT = false;
            // Transmit the information to server about page render time now.
            if (typeof _REQSTARTTIME != 'undefined') {
                // Work with time converting it to GMT (assuming _REQSTARTTIME set by server is also in GMT)
                var _PAGEREADYTIME = _PAGEREADYAT.getTime() / 1000.0; // seconds
                var _PAGELOADTIME = _PAGELOADAT.getTime() / 1000.0;    // seconds
                var data = { page_request: _REQSTARTTIME, page_ready: _PAGEREADYTIME, page_load: _PAGELOADTIME };
                data['page_xfer'] = (_PAGELOADTIME - _REQSTARTTIME).toFixed(3);
                data['client_tzoffset']= -1*_PAGELOADAT.getTimezoneOffset()*60;
                data['client_now'] = JSON.parse(JSON.stringify(new Date()));
                if (!window._PAGELOADREQSENT) {
                    // To overcome duplicate firing on Chrome
                    window._PAGELOADREQSENT = true;
                }
            }
        });</script>
<script type="text/javascript">CsrfMagic.end();</script></body>
</html>
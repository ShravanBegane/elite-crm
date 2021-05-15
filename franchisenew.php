<?php //include_once('layouts/vlayout/modules/YOUR_MODULE/resources/Edit.js');
 include_once('api/frachise_getall.php');
include_once('vtlib/Vtiger/Module.php');
?>




<!DOCTYPE html><html><head>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/bootstrap.min.css'>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/docs.min.css'>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/todc-bootstrap.min.css'>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/font-awesome/css/font-awesome.min.css'>
    <script type="text/javascript" src="layouts/v7/lib/jquery/purl.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/jquery/select2/select2.min.js"></script>
    <script type="text/javascript" src="layouts/v7/lib/todc/js/bootstrap.min.js"></script>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/select2/select2.css'>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/select2-bootstrap/select2-bootstrap.css'>
    <script src="layouts/v7/lib/jquery/jquery.min.js?v=7.3.0"></script>
    <script src="layouts/v7/lib/jquery/jquery-migrate-1.0.0.js?v=7.3.0"></script>
    
    </head>
    <body >
        
    <div id="messageBar" class="hide"></div>
       
	<div class="main-container clearfix">
	    <div class="col-xs-12" style="margin-top:-65px;margin-left:-15px">
            <div class="table-responsive">
                <div class="main-container main-container-Employees">
                    <div class="listViewPageDiv content-area " id="listViewContent" style="min-height: auto;">				
						<div class="col-lg-12 col-md-12 ">
							<div class="settingsPageDiv content-area clearfix">
								<div class="bodyContents">
									<h3>Franchise Settings </h3>
									<div class="row">
										<div class="col-lg-12 col-md-12 ">
											<button type="button" class="btn btn-info btn-lg " style="display:block; margin-bottom:10px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Franchise</button>
										</div>
									</div>
									<div class="table-responsive" width="100%" style="height: 380px;    overflow-y: scroll;" >
										<table class="table table-bordered table-responsive">
											<colgroup>
												<col class="col-lg-2">
												<col class="col-lg-6">
												<col class="col-lg-3">
												<col class="col-lg-1">
											</colgroup>
											<thead>
												<tr>
													<th width="17%">Rule Number</th>
													<th>Post code</th>
													<th width="25%">Can be accessed by</th>
													<th width="9%">Action</th>
												</tr>
											</thead>
											<tbody>
							                    <?php 

                                                 $countss = sizeof($ids);
                                                 for ($i = 0; $i < $countss; $i++) { 
                                                
                                                 ?>
													<tr>
														<td>
															<?php echo $i+1 ;?>
														</td>
														<td>
															<?php echo $zipcodes[$i]?>
														</td>
														<td>
															<?php echo $accessedpermissions[$i]?>
														</td>
														<td><a href="#" type="button" data-toggle="modal" data-target="#myModal1" onclick="getdata(<?php echo $ids[$i]; ?>)"><i class="fa fa-pencil "style="color:green; margin-left:5px;"></i></a> <a onclick="deletedata(<?php echo $ids[$i]; ?>)" href="#"><i class="fa fa-trash" style="color:red; margin-left:5px;"></i></a></td>
													</tr>
													<?php    }  ?>
											</tbody>
					                    </table>
				                    </div>
				                <div>
				            </div>
		        	    </div>
		            </div>
				</div>
			</div>
		</div>
	</div><!-- <div id='overlayPage'>
        <!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
        any one can use this by adding "show" class to it -->
					<div class='arrow'></div>
					<div class='data'> </div>
				</div>
				<div id='helpPageOverlay'></div>
			</div>
			<div id="appendModule">
			    
			</div>
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Add Franchise <button type="button" class="close" data-dismiss="modal">&times;</button></h4> </div>
						<div class="modal-body">
							<form action="<?php echo $site_URL ?>api/frachise_insert.php" method="POST" autocomplete="off" id="myForm"> <small for="">Post code:</small>
								<textarea class="form-control" name="zipcode" rows="4" cols="50" required></textarea> <small for="">Can be accessed by :</small>
								<select class="form-control" name="accessedpermission" required>
									<optgroup label="Groups">
										<?php 
                                    
                                     $countss = sizeof($groupnames);
                                     for ($i = 0; $i < $countss; $i++) { 
                                    
                                     ?>
											<option value="<?php echo 'Groups:'.$groupnames[$i]?>">
												<?php echo $groupnames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="Roles">
										<?php 
                                    
                                     $countss = sizeof($rolenames);
                                     for ($i = 0; $i < $countss; $i++) { 
                                    
                                     ?>
											<option value="<?php echo 'Roles:'.$rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="RoleAndSubordinates">
										<?php 

                                         $countss = sizeof($rolenames);
                                         for ($i = 0; $i < $countss; $i++) { 
                                        
                                         ?>
											<option value="'RoleAndSubordinates:'.<?php echo $rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
								</select>
								<div class="formstatus"></div>
								<input type="submit" value="ADD" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px"> </form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal1" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Update Information  <button type="button" class="close" data-dismiss="modal">&times;</button></h4> </div>
						<div class="modal-body">
							<form action="<?php echo $site_URL ?>api/frachise_update.php" method="POST" autocomplete="off" id="myForm1"> <small for="">Post code:</small>
								<textarea class="form-control" name="zipcodes" id="zipcode" required rows="4" cols="50"></textarea>
								<input type="hidden" class="form-control" name="ids" id="ids" required> <small for="">Can be accessed by :</small>
								<select class="form-control" name="accessedpermissions" id="accessedpermission" required>
									<optgroup label="Groups">
										<?php 
                                         $countss = sizeof($groupnames);
                                         for ($i = 0; $i < $countss; $i++) { 
                                        
                                         ?>
											<option value="<?php echo 'Groups:'.$groupnames[$i]?>">
												<?php echo $groupnames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="Roles">
										<?php 
                                    
                                     $countss = sizeof($rolenames);
                                     for ($i = 0; $i < $countss; $i++) { 
                                    
                                     ?>
											<option value="<?php echo 'Roles:'.$rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="RoleAndSubordinates">
										<?php 

                                         $countss = sizeof($rolenames);
                                         for ($i = 0; $i < $countss; $i++) { 
                                        
                                         ?>
											<option value="<?php echo 'RoleAndSubordinates:'.$rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
								</select>
								<div class="formstatus"></div>
								<input type="submit" value="Update" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px"> </form>
						</div>
					</div>
				</div>
			</div>

   
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div class="modal myModal fade"></div>
<script type="text/javascript" src="layouts/v7/lib/jquery/purl.js"></script>
<script type="text/javascript" src="layouts/v7/lib/jquery/select2/select2.min.js"></script>
<script type="text/javascript" src="layouts/v7/lib/todc/js/bootstrap.min.js"></script>



</body>

	<script>
			function getdata(cust_id) {
				$.ajax({
				  type: "POST",
					url: "api/frachise_getdatabyid.php?id=" + cust_id,
					 dataType: 'json',
                        xhrFields: {
                        withCredentials: true
                        },
                         headers: {
                        "Authorization": "Basic " + btoa("<?php echo _uName ?>:<?php echo _aKey ?>")
                        },
					async: false,
					success: function(obj) { //data will have what ever you echo'ed in controller
						$("#ids").val(obj.id);
						$("#zipcode").val(obj.zipcode);
						$("#accessedpermission").val(obj.accessedpermission);
					}
				});
			}

		
			
			       
        function deletedata(cust_id){
        $.ajax({
            type: "POST",
            url:"api/frachise_deletedata.php?id="+cust_id,
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
    
        
    
    
    
    $('#myForm,#myForm2,#myForm3,#myForm1').submit(function(e) {
            

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

			</script>
		
	
</html>
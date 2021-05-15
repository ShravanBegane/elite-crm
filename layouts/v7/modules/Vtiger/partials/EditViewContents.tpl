{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
********************************************************************************/
-->*}
<script>

var showValue = function(val){
//document.getElementById('Calendar_editView_fieldName_cf_854').value = val;
document.getElementById('Events_editView_fieldName_subject').value = val;

}
</script>
<!-- RightChoice - To generate a Access Register Key
Description - Below code is to generate a random number by clicking on Registration key field In https://demo.rightchoice.io/democrm/index.php?module=Accessuser&view=Edit&app=MARKETING page. 
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){

  
  $("#Accessuser_editView_fieldName_cf_938").keypress(function(e){
	$(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault(); 
            }

        var max_chars = 5;
	if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
 });
$("#Accessuser_editView_fieldName_cf_938").change(function(e){
	$.ajax({
			type: "POST",
			url: "register_key_check.php",
			dataType: 'json',
			data:$(this).serialize(),
			success: function(data){
				var result=data;
				if(result == 0){
					$("#Accessuser_editView_fieldName_cf_938").val(register_key);
				} else {
					alert("Register key already exist");
					register_key();
				}
			}
		}); 
 });
$("#Accessuser_editView_fieldName_cf_938").click(function(e){
register_key();
//var result;

 });
function register_key(){
	var register_key=Math.floor(100000 + Math.random() * 900000);
	var data = {
      "cf_938": register_key
    };
	var data=$.param(data);
		$.ajax({
			type: "POST",
			url: "register_key_check.php",
			dataType: 'json',
			data:data,
			success: function(data){
				var result=data;
				if(result == 0){
					$("#Accessuser_editView_fieldName_cf_938").val(register_key);
				} else {
					register_key();
				}
			}
		}); 
}
 });
</script>

{if $MODULE === 'Employees'}
<script>
$(function(){
    var textVal = $('#Employees_editView_fieldName_cf_1062').val();
    if (!textVal.match(/\S/)) 
    {
        var randomnumber = Math.floor(Math.random() * 900000) + 100000;  
    $('#Employees_editView_fieldName_cf_1062').val( randomnumber );     
    }   
        
 
})
</script>
{/if}

{strip}
	{if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
		<input type="hidden" name="picklistDependency" value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}' />
	{/if}

	<div name='editContent'>
		{if $DUPLICATE_RECORDS}
			<div class="fieldBlockContainer duplicationMessageContainer">
				<div class="duplicationMessageHeader"><b>{vtranslate('LBL_DUPLICATES_DETECTED', $MODULE)}</b></div>
				<div>{getDuplicatesPreventionMessage($MODULE, $DUPLICATE_RECORDS)}</div>
			</div>
		{/if}
                
                 <ul class="calender-list-quick-create">
			{if $MODULE === 'Events'}
					{php}
					
    include("config.inc.php");
     $conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 
     $query="SELECT * FROM `vtiger_activitytype` order by sortorderid ";
     $result =mysqli_query($conn,$query);
     if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
          $activitytype=$row['activitytype'];
          
	
	echo	'<li><button type="button" class="btn btn-default" onclick="showValue(\''.$activitytype.'\')"   >  '.$activitytype.' </button></li>';
			
 }  
}

 {/php}
	{/if}		
 	</ul>

		{foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE name=blockIterator}
			{if $BLOCK_FIELDS|@count gt 0}
				<div class='fieldBlockContainer' data-block="{$BLOCK_LABEL}">
					<h4 class='fieldBlockHeader'>{vtranslate($BLOCK_LABEL, $MODULE)}</h4>
					<hr>
					<table class="table table-borderless">
				
						<tr>
							{assign var=COUNTER value=0}
							{foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
								{assign var="isReferenceField" value=$FIELD_MODEL->getFieldDataType()}
								{assign var="refrenceList" value=$FIELD_MODEL->getReferenceList()}
								{assign var="refrenceListCount" value=count($refrenceList)}
								{if $FIELD_MODEL->isEditable() eq true}
									{if $FIELD_MODEL->get('uitype') eq "19"}
										{if $COUNTER eq '1'}
											<td></td><td></td></tr><tr>
											{assign var=COUNTER value=0}
										{/if}
									{/if}
									{if $COUNTER eq 2}
									</tr><tr>
										{assign var=COUNTER value=1}
									{else}
										{assign var=COUNTER value=$COUNTER+1}
									{/if}
									<td class="fieldLabel alignMiddle">
										{if $isReferenceField eq "reference"}
											{if $refrenceListCount > 1}
												{assign var="DISPLAYID" value=$FIELD_MODEL->get('fieldvalue')}
												{assign var="REFERENCED_MODULE_STRUCTURE" value=$FIELD_MODEL->getUITypeModel()->getReferenceModule($DISPLAYID)}
												{if !empty($REFERENCED_MODULE_STRUCTURE)}
													{assign var="REFERENCED_MODULE_NAME" value=$REFERENCED_MODULE_STRUCTURE->get('name')}
												{/if}
												<select style="width: 140px;" class="select2 referenceModulesList">
													{foreach key=index item=value from=$refrenceList}
														<option value="{$value}" {if $value eq $REFERENCED_MODULE_NAME} selected {/if}>{vtranslate($value, $value)}</option>
													{/foreach}
													  												</select>
											{else}
												{vtranslate($FIELD_MODEL->get('label'), $MODULE)}
											{/if}
										{else if $FIELD_MODEL->get('uitype') eq "83"}
											{include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE) COUNTER=$COUNTER MODULE=$MODULE}
											{if $TAXCLASS_DETAILS}
												{assign 'taxCount' count($TAXCLASS_DETAILS)%2}
												{if $taxCount eq 0}
													{if $COUNTER eq 2}
														{assign var=COUNTER value=1}
													{else}
														{assign var=COUNTER value=2}
													{/if}
												{/if}
											{/if}
										{else}
											{if $MODULE eq 'Documents' && $FIELD_MODEL->get('label') eq 'File Name'}
												{assign var=FILE_LOCATION_TYPE_FIELD value=$RECORD_STRUCTURE['LBL_FILE_INFORMATION']['filelocationtype']}
												{if $FILE_LOCATION_TYPE_FIELD}
													{if $FILE_LOCATION_TYPE_FIELD->get('fieldvalue') eq 'E'}
														{vtranslate("LBL_FILE_URL", $MODULE)}&nbsp;<span class="redColor">*</span>
													{else}
														{vtranslate($FIELD_MODEL->get('label'), $MODULE)}
													{/if}
												{else}
													{vtranslate($FIELD_MODEL->get('label'), $MODULE)}
												{/if}
											{else}
												{vtranslate($FIELD_MODEL->get('label'), $MODULE)}
											{/if}
										{/if}
										&nbsp;{if $FIELD_MODEL->isMandatory() eq true} <span class="redColor">*</span> {/if}
									</td>
									{if $FIELD_MODEL->get('uitype') neq '83'}
										<td class="fieldValue" {if $FIELD_MODEL->getFieldDataType() eq 'boolean'} style="width:25%" {/if} {if $FIELD_MODEL->get('uitype') eq '19'} colspan="3" {assign var=COUNTER value=$COUNTER+1} {/if}>
											{include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE)}
											 {if $FIELD_MODEL->get('uitype') eq '7'  }
                                            {if $MODULE == 'Teams'}
        
                                            <input type="button" value="Generate PIN" class="btn btn-primary" onclick="document.getElementById ('Teams_editView_fieldName_cf_1258').value=Random()"/>
                                            {/if}
                                        {/if}
										</td>
									{/if}
								{/if}
							{/foreach}
							{*If their are odd number of fields in edit then border top is missing so adding the check*}
							{if $COUNTER is odd}
								<td></td>
								<td></td>
							{/if}
						</tr>
					</table>
				</div>
			{/if}
		{/foreach}
		<script type="text/javascript">
function Random() {
  return Math.floor(Math.random() * 1000000);
} 
</script>
	</div>
{/strip}
<style>
    ul.calender-list-quick-create {
    margin-left: -40px;
}
</style>
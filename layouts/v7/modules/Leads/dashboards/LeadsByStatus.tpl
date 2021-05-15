{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is: vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
<script type="text/javascript">
	Vtiger_Barchat_Widget_Js('Vtiger_LeadsByStatus_Widget_Js',{},{});
</script>


<div class="dashboardWidgetHeader">
    <div class="col-8 pull-left">
        {include file="dashboards/WidgetHeader.tpl"|@vtemplate_path:$MODULE_NAME SETTING_EXIST=true}
    </div>
    <div class="col-4 pull-right" style="margin-top:-30px"> 
    {php} 
        include "config.inc.php";
        $conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }  
        date_default_timezone_set("Asia/Kolkata"); 
        $date = date('Y-m-d');                                   
        $query="select count(crmid) from vtiger_crmentity where setype='Leads' and `createdtime` like '$date%' and deleted!=1";
        $result = mysqli_query($conn,$query);
        while($result_1 = mysqli_fetch_array($result)){
            echo "Today's Total No of Leads :<b>$result_1[0]</b> ";
        }
         
    {/php}    
    </div>
</div>
<div class="dashboardWidgetContent" style = "overflow-y: auto;width:390px; height:250px">
      {php}
        include "config.inc.php";
        $conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }     
        date_default_timezone_set("Asia/Kolkata"); 
        $date = date('Y-m-d');                                   
        $query1="select * from vtiger_crmentity where setype='Leads' and `createdtime` like '$date%' and deleted!=1";
        $result1 = mysqli_query($conn,$query1);
        if($r = mysqli_num_rows($result1)>0){
            while($row_1 = mysqli_fetch_array($result1)){
                $sql_2 = mysqli_query($conn, "select * from vtiger_leaddetails where leadid = '$row_1[0]'");
                while($row_2 = mysqli_fetch_array($sql_2)){
                    $name = $row_2['firstname']. " " .$row_2['lastname'];
                    $sql_3 = mysqli_query($conn, "select * from vtiger_users where id='$row_1[1]'");
                    while($row_3 = mysqli_fetch_array($sql_3)){
                        $admin = $row_3['first_name']. " " .$row_3['last_name'] ;
                    }
                    echo "<div>
                        <i class='vicon-leads'></i> <b> $admin </b> assigned from $name
                    </div>";
                }
            }
        }
        else{
            //echo "{include file='dashboards/DashBoardWidgetContents.tpl'|@vtemplate_path:$MODULE_NAME}";
            echo "No Leads Match this Criteria";
        }
        
    {/php}
	
</div>

<div class="widgeticons dashBoardWidgetFooter">
    <div class="filterContainer">
        <div class="row">
            <div class="col-sm-12">
                <span class="col-lg-4">
                        <span>
                            <strong>{vtranslate('Created Time', $MODULE_NAME)} &nbsp; {vtranslate('LBL_BETWEEN', $MODULE_NAME)}</strong>
                        </span>
                </span>
                <div class="col-lg-7">
                    <div class="input-daterange input-group dateRange widgetFilter" id="datepicker" name="createdtime">
                       <input type="text" class="input-sm form-control" name="start" style="height:30px;"/>
                       <span class="input-group-addon">to</span>
                       <input type="text" class="input-sm form-control" name="end" style="height:30px;"/>
                   </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <span class="col-lg-4">
                        <span>
                            <strong>{vtranslate('Assigned To', $MODULE_NAME)}</strong>
                        </span>
                </span>
                <span class="col-lg-7">
                        {assign var=CURRENT_USER_ID value=$CURRENTUSER->getId()}
                        <select class="select2 col-sm-12 widgetFilter reloadOnChange" name="smownerid">
                            <option value="{$CURRENT_USER_ID}">{vtranslate('LBL_MINE')}</option>
                            <option value="">{vtranslate('LBL_ALL', $MODULE_NAME)}</option>
                            {assign var=ALL_ACTIVEUSER_LIST value=$CURRENTUSER->getAccessibleUsers()}
                            {if count($ALL_ACTIVEUSER_LIST) gt 1}
                                <optgroup label="{vtranslate('LBL_USERS')}">
                                    {foreach key=OWNER_ID item=OWNER_NAME from=$ALL_ACTIVEUSER_LIST}
                                        {if $OWNER_ID neq $CURRENT_USER_ID}
                                            <option value="{$OWNER_ID}">{$OWNER_NAME}</option>
                                        {/if}
                                    {/foreach}
                                </optgroup>
                            {/if}
                            {assign var=ALL_ACTIVEGROUP_LIST value=$CURRENTUSER->getAccessibleGroups()}
                            {if !empty($ALL_ACTIVEGROUP_LIST)}
                                <optgroup label="{vtranslate('LBL_GROUPS')}">
                                    {foreach key=OWNER_ID item=OWNER_NAME from=$ALL_ACTIVEGROUP_LIST}
                                        <option value="{$OWNER_ID}">{$OWNER_NAME}</option>
                                    {/foreach}
                                </optgroup>
                            {/if}
                        </select>
                </span>
            </div>
        </div>
    </div>
    <div class="footerIcons pull-right">
        {include file="dashboards/DashboardFooterIcons.tpl"|@vtemplate_path:$MODULE_NAME SETTING_EXIST=true}
    </div>
</div>
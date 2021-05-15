<?php 

require_once("ValidateAuth.php");


/* +**********************************************************************************

 * The contents of this file are subject to the vtiger CRM Public License Version 1.1

 * ("License"); You may not use this file except in compliance with the License

 * The Original Code is:  vtiger CRM Open Source

 * The Initial Developer of the Original Code is vtiger.

 * Portions created by vtiger are Copyright (C) vtiger.

 * All Rights Reserved.

 * ********************************************************************************** */

require_once 'includes/main/WebUI.php';

require_once 'include/utils/utils.php';

require_once 'include/utils/VtlibUtils.php';

require_once 'modules/Vtiger/helpers/ShortURL.php';

require_once 'vtlib/Vtiger/Mailer.php';

global $adb;

$adb = PearDatabase::getInstance();


		$userid = $_REQUEST['userid'];
		$username = $_SERVER['PHP_AUTH_USER'];
		
		if($userid != "")
		{
			$retrieveUserId = get_user_id($username);
			if($userid != $retrieveUserId)
			{
				echo "You are not authorized to access this data";
				die();
			}
		}
		$from_date = $_REQUEST['dateFrom'];
		if($from_date != ""){
			if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$from_date))
			{
				echo "Please provide a valid date format - YYYY-MM-SS";
				die();
			}
		}
		$to_date = $_REQUEST['dateTo'];
		if($to_date != ""){
			if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$to_date))
			{
				echo "Please provide a valid date format - YYYY-MM-SS";
				die();
			}
		}
		$timeFrom = $_REQUEST['timeFrom'];
		if($timeFrom != ""){
			if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9]$/", $timeFrom))
			{
				echo "Please provide a valid time format - HH:MM:SS";
				die();
			}
		}
		$timeTo = $_REQUEST['timeTo'];
		if($timeTo != ""){
			if(!preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]:[0-5][0-9]$/", $timeTo))
			{
				echo "Please provide a valid time format - HH:MM:SS";
				die();
			}
		}
		
		if(!empty($from_date) && !empty($to_date) && !empty($userid)){

			$sql = "SELECT  * FROM vtiger_activity INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_activity.activityid WHERE vtiger_crmentity.deleted=0 AND smownerid = '".$userid."' AND (date_start BETWEEN '" . $from_date . "' AND  '" . $to_date . "')";
			if(!empty($timeFrom) && !empty($timeTo))
			{
				$sql.= " AND (time_start BETWEEN '" . $timeFrom . "' AND  '" . $timeTo . "')";
			}
			
			$result = $adb->pquery($sql);
			$rows = $adb->num_rows($result);
			if($rows > 0) {
			 for($i=0; $i<$rows; $i++){
				
				 $data[$i]['activitytype'] = $adb->query_result($result,$i,'activitytype');
				 $data[$i]['date_start'] = $adb->query_result($result,$i,'date_start');
				 $data[$i]['due_date'] = $adb->query_result($result,$i,'due_date');
				 $data[$i]['time_start'] = $adb->query_result($result,$i,'time_start');
				 $data[$i]['time_end'] = $adb->query_result($result,$i,'time_end');
				 $data[$i]['sendnotification'] = $adb->query_result($result,$i,'sendnotification');
				 $data[$i]['duration_hours'] = $adb->query_result($result,$i,'duration_hours');
				 $data[$i]['duration_minutes'] = $adb->query_result($result,$i,'duration_minutes');
				 $data[$i]['status'] = $adb->query_result($result,$i,'status');
				 $data[$i]['eventstatus'] = $adb->query_result($result,$i,'eventstatus');
				 $data[$i]['priority'] = $adb->query_result($result,$i,'priority');
				 $data[$i]['location'] = $adb->query_result($result,$i,'location');
				 $data[$i]['notime'] = $adb->query_result($result,$i,'notime');
				 $data[$i]['visibility'] = $adb->query_result($result,$i,'visibility');
				
					
			}
		
			 echo json_encode($data); 
			} else { echo "No Record Found"; }
			
		 
		} elseif(!empty($from_date) && !empty($to_date)) {
			
			$sql = "SELECT  * FROM vtiger_activity INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_activity.activityid WHERE vtiger_crmentity.deleted=0 AND (date_start BETWEEN '" . $from_date . "' AND  '" . $to_date . "')";
			if(!empty($timeFrom) && !empty($timeTo))
			{
				$sql.= " AND (time_start BETWEEN '" . $timeFrom . "' AND  '" . $timeTo . "')";
			}

			$result = $adb->pquery($sql);
			$rows = $adb->num_rows($result);
			
			if($rows > 0) {
			 for($i=0; $i<$rows; $i++){
				
				 $data[$i]['activitytype'] = $adb->query_result($result,$i,'activitytype');
				 $data[$i]['date_start'] = $adb->query_result($result,$i,'date_start');
				 $data[$i]['due_date'] = $adb->query_result($result,$i,'due_date');
				 $data[$i]['time_start'] = $adb->query_result($result,$i,'time_start');
				 $data[$i]['time_end'] = $adb->query_result($result,$i,'time_end');
				 $data[$i]['sendnotification'] = $adb->query_result($result,$i,'sendnotification');
				 $data[$i]['duration_hours'] = $adb->query_result($result,$i,'duration_hours');
				 $data[$i]['duration_minutes'] = $adb->query_result($result,$i,'duration_minutes');
				 $data[$i]['status'] = $adb->query_result($result,$i,'status');
				 $data[$i]['eventstatus'] = $adb->query_result($result,$i,'eventstatus');
				 $data[$i]['priority'] = $adb->query_result($result,$i,'priority');
				 $data[$i]['location'] = $adb->query_result($result,$i,'location');
				 $data[$i]['notime'] = $adb->query_result($result,$i,'notime');
				 $data[$i]['visibility'] = $adb->query_result($result,$i,'visibility');
				
					
			}
		
			 echo json_encode($data); 
			} else { echo "No Record Found"; }
		
					
		} elseif(!empty($userid)) {
			
			$sql = "SELECT  * FROM vtiger_activity INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_activity.activityid WHERE vtiger_crmentity.deleted=0 AND smownerid = '".$userid."'";
			$result = $adb->pquery($sql);
			$rows = $adb->num_rows($result);
			
			if($rows > 0) {
			 for($i=0; $i<$rows; $i++){
				
				 $data[$i]['activitytype'] = $adb->query_result($result,$i,'activitytype');
				 $data[$i]['date_start'] = $adb->query_result($result,$i,'date_start');
				 $data[$i]['due_date'] = $adb->query_result($result,$i,'due_date');
				 $data[$i]['time_start'] = $adb->query_result($result,$i,'time_start');
				 $data[$i]['time_end'] = $adb->query_result($result,$i,'time_end');
				 $data[$i]['sendnotification'] = $adb->query_result($result,$i,'sendnotification');
				 $data[$i]['duration_hours'] = $adb->query_result($result,$i,'duration_hours');
				 $data[$i]['duration_minutes'] = $adb->query_result($result,$i,'duration_minutes');
				 $data[$i]['status'] = $adb->query_result($result,$i,'status');
				 $data[$i]['eventstatus'] = $adb->query_result($result,$i,'eventstatus');
				 $data[$i]['priority'] = $adb->query_result($result,$i,'priority');
				 $data[$i]['location'] = $adb->query_result($result,$i,'location');
				 $data[$i]['notime'] = $adb->query_result($result,$i,'notime');
				 $data[$i]['visibility'] = $adb->query_result($result,$i,'visibility');
				
					
			}
		
			 echo json_encode($data); 
			} else { echo "No Record Found"; }
		
		} else {
			
			$sql = "SELECT  * FROM vtiger_activity INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_activity.activityid WHERE vtiger_crmentity.deleted=0";
			$result = $adb->pquery($sql);
			$rows = $adb->num_rows($result);
			
			if($rows > 0) {
			 for($i=0; $i<$rows; $i++){
				
				 $data[$i]['activitytype'] = $adb->query_result($result,$i,'activitytype');
				 $data[$i]['date_start'] = $adb->query_result($result,$i,'date_start');
				 $data[$i]['due_date'] = $adb->query_result($result,$i,'due_date');
				 $data[$i]['time_start'] = $adb->query_result($result,$i,'time_start');
				 $data[$i]['time_end'] = $adb->query_result($result,$i,'time_end');
				 $data[$i]['sendnotification'] = $adb->query_result($result,$i,'sendnotification');
				 $data[$i]['duration_hours'] = $adb->query_result($result,$i,'duration_hours');
				 $data[$i]['duration_minutes'] = $adb->query_result($result,$i,'duration_minutes');
				 $data[$i]['status'] = $adb->query_result($result,$i,'status');
				 $data[$i]['eventstatus'] = $adb->query_result($result,$i,'eventstatus');
				 $data[$i]['priority'] = $adb->query_result($result,$i,'priority');
				 $data[$i]['location'] = $adb->query_result($result,$i,'location');
				 $data[$i]['notime'] = $adb->query_result($result,$i,'notime');
				 $data[$i]['visibility'] = $adb->query_result($result,$i,'visibility');
				
					
			}
		
			 echo json_encode($data); 
			} else { echo "No Record Found"; }
					
		}
	
	

?>
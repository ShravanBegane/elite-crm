<?php 

if (isset($_FILES['file']['tmp_name']))
{
	
	$path = "test/upload/" . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $path);
	
}

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$group_role = $_POST['postcode']; 
$commnts = $_POST['comm']; 
$filename = $_FILES['file']['name'];
$filedata = $_FILES['file']['tmp_name'];
$filesize = $_FILES['file']['size'];
$filetype = $_FILES['file']['type'];


/* +**********************************************************************************

 * The contents of this file are subject to the vtiger CRM Public License Version 1.1

 * ("License"); You may not use this file except in compliance with the License

 * The Original Code is:  vtiger CRM Open Source

 * The Initial Developer of the Original Code is vtiger.

 * Portions created by vtiger are Copyright (C) vtiger.

 * All Rights Reserved.

 * ********************************************************************************** */

include_once 'vtlib/Vtiger/Module.php';

require_once 'includes/main/WebUI.php';

require_once 'include/utils/utils.php';

require_once 'include/utils/VtlibUtils.php';

require_once 'modules/Vtiger/helpers/ShortURL.php';

require_once 'vtlib/Vtiger/Mailer.php';

require_once("modules/Users/Users.php");









$query = "SELECT * FROM vtiger_leaddetails WHERE email ='".$email."'" ;
   
 $result =  $adb->pquery($query);
if (!$result) {
    die('Invalid query:3 ' . mysqli_error());
   
}
$num_rows = $adb->num_rows($result);
if ($num_rows > 0) {

die("Person already exist no ");
    
}












$query = "SELECT accessedpermission FROM vtiger_franchise_detail WHERE zipcode LIKE '%".$group_role."%'" ;
   
 $result =  $adb->pquery($query);
if (!$result) {
    die('Invalid query: 1' );
   
}
$num_rows = $adb->num_rows($result);
 if ($num_rows  > 0) {

 $group_or_role=$adb->query_result($result,0,'accessedpermission'); 
 
$arr=array();
$arr =explode(":",$group_or_role);

$query = "SELECT groupid FROM vtiger_groups WHERE groupname ='".$arr[1]."'" ;
   
 $result =  $adb->pquery($query);
if (!$result) {
    die('Invalid query:3 ' . mysqli_error());
   
}
$num_rows = $adb->num_rows($result);
if ($num_rows > 0) {

 $ownerid = $adb->query_result($result,0,'groupid'); 
    
}




     
 }

if($ownerid==0)
{
   echo $ownerid=1;
}

global $adb;
$adb = PearDatabase::getInstance();

$trr = explode(".", $filename);
$notes_title = $trr[0];

$sql_s = "select * from vtiger_leaddetails INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_leaddetails.leadid WHERE vtiger_leaddetails.email='".$email."' AND vtiger_crmentity.deleted=0"; 
$result_s = $adb->pquery($sql_s);
$num_rows = $adb->num_rows($result_s);
if($num_rows == 0){
		
		$sql = "select cur_id,prefix from vtiger_modentity_num where semodule='Leads' and active = 1";
		$result = $adb->pquery($sql);
		$curid = $adb->query_result($result,0,'cur_id');
		$prefix = $adb->query_result($result,0,'prefix');
			$prev_inv_no=$prefix.($curid+1);
			$strip=strlen($curid)-strlen($curid+1);
			if($strip=0)$strip=0;
			$temp = str_repeat("0",$strip);
			$req_no = $temp.($curid+1);
			
		$sql = "UPDATE vtiger_modentity_num SET cur_id= '".$req_no."' where cur_id='".$curid."' and active='1' AND semodule='Leads'";
		$result = $adb->pquery($sql);
		
		$sql = "select id from vtiger_crmentity_seq"; 
		$result = $adb->pquery($sql);
		$id = $adb->query_result($result,0,'id');
		$crmid = $id+1;
		
		$sql = "INSERT INTO `vtiger_crmentity` (`crmid`, `smcreatorid`, `smownerid`, `modifiedby`, `setype`, `description`, `createdtime`, `modifiedtime`, `viewedtime`, `status`, `version`, `presence`, `deleted`, `smgroupid`, `source`, `label`) VALUES
		('".$crmid."', 1,'".$ownerid ."' , 1, 'Leads', '".$commnts."', '".date("Y-m-d h:i:s")."', '".date("Y-m-d h:i:s")."', NULL, NULL, 0, 1, 0, 0, 'CRM', NULL)";
		$result = $adb->pquery($sql);
		
		$sql = "INSERT INTO `vtiger_leaddetails` (`leadid`, `lead_no`, `email`, `firstname`, `lastname`) VALUES
		('".$crmid."', '".$prev_inv_no."', '".$email."', '".$firstname."', '".$lastname."')";
		$result = $adb->pquery($sql);
		
		$sql = "INSERT INTO `vtiger_leadscf` (`leadid`) VALUES
		('".$crmid."')";
		$result = $adb->pquery($sql);
		
		$sql = "INSERT INTO `vtiger_leadaddress` (`leadaddressid`,`code` ,`phone`) VALUES
		('".$crmid."','".$group_role."', '".$phone."')";
		$result = $adb->pquery($sql);
		
		$sql = "INSERT INTO `vtiger_leadsubdetails` (`leadsubscriptionid`) VALUES
		('".$crmid."')";
		$result = $adb->pquery($sql);
		
		$sql = "UPDATE vtiger_crmentity_seq SET id='".$crmid."'";
		$result = $adb->pquery($sql);
		
} else { $crmid = $adb->query_result($result_s,0,'leadid');   }

$sql = "select cur_id,prefix from vtiger_modentity_num where semodule='Documents' and active = 1";
$result = $adb->pquery($sql);
$curid = $adb->query_result($result,0,'cur_id');
$prefix = $adb->query_result($result,0,'prefix');
	$prev_inv_no=$prefix.($curid+1);
	$strip=strlen($curid)-strlen($curid+1);
	if($strip=0)$strip=0;
	$temp = str_repeat("0",$strip);
	$req_no = $temp.($curid+1);
	
$sql = "UPDATE vtiger_modentity_num SET cur_id= '".$req_no."' where cur_id='".$curid."' and active='1' AND semodule='Documents'";
$result = $adb->pquery($sql);

$sql = "select id from vtiger_crmentity_seq"; 
$result = $adb->pquery($sql);
$id = $adb->query_result($result,0,'id');
$crmidD = $id+1;

$sql = "INSERT INTO `vtiger_crmentity` (`crmid`, `smcreatorid`, `smownerid`, `modifiedby`, `setype`, `description`, `createdtime`, `modifiedtime`, `viewedtime`, `status`, `version`, `presence`, `deleted`, `smgroupid`, `source`, `label`) VALUES
('".$crmidD."', 1,'".$ownerid ."', 1, 'Documents', '".$commnts."', '".date("Y-m-d h:i:s")."', '".date("Y-m-d h:i:s")."', NULL, NULL, 0, 1, 0, 0, 'CRM', '".$notes_title."')";
$result = $adb->pquery($sql);

$sql = "INSERT INTO `vtiger_notes` (`notesid`, `note_no`, `title`, `filename`, `notecontent`, `folderid`, `filetype`, `filelocationtype`, `filestatus`, `filesize`) VALUES
('".$crmidD."', '".$prev_inv_no."', '".$notes_title."', '".$filename."', '', 1, '".$filetype."', 'I', 1, '".$filesize."')";
$result = $adb->pquery($sql);

$sql = "INSERT INTO `vtiger_notescf` (`notesid`) VALUES 
('".$crmidD."')";
$result = $adb->pquery($sql);

$dbQuery = "INSERT INTO `vtiger_senotesrel` ( `crmid`, `notesid` ) VALUES ( '".$crmid."', '".$crmidD."' )";
$dbresult = $adb->pquery($dbQuery);

$sql = "UPDATE vtiger_crmentity_seq SET id='".$crmidD."'";
$result = $adb->pquery($sql);

$id = 108;
$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'label', NULL, '".$notes_title."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'notes_title', NULL, '".$notes_title."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'createdtime', NULL, '".date("Y-m-d h:i:s")."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'filename', NULL, '".$filename."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'assigned_user_id', NULL, 1 )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'filetype', NULL, '".$filetype."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'filesize', NULL, '".$filesize."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'filelocationtype', NULL, 'I' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'filestatus', NULL, 1 )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'folderid', NULL, 1 )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'note_no', NULL, '".$prev_inv_no."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'modifiedby', NULL, 1 )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'source', NULL, 'CRM' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'record_id', NULL, '".$crmidD."' )";
$dbresult = $adb->pquery($dbQuery);

$dbQuery = "INSERT INTO `vtiger_modtracker_detail` ( `id`, `fieldname`, `prevalue`, `postvalue` ) VALUES ( '".$id."', 'record_module', NULL, 'Documents' )";
$dbresult = $adb->pquery($dbQuery);

insertIntoAttachment($crmidD,'Documents');

function insertIntoAttachment($id,$module)
	{
		global $log, $adb;
		$log->debug("Entering into insertIntoAttachment($id,$module) method.");

		$file_saved = false;
		
		 

		foreach($_FILES as $fileindex => $files)
		{
			if($files['name'] != '' && $files['size'] > 0)
			{
				$files['original_name'] = vtlib_purify($_REQUEST[$fileindex.'_hidden']);
				$userInstance = new Users();
				$file_saved = $userInstance->uploadAndSaveFile($id,$module,$files);
                                if(!$file_saved){
                                    $log->debug('file upload failed');
                                    return false;
                                }
			}
		}

		$log->debug("Exiting from insertIntoAttachment($id,$module) method.");
	}


"Done"; exit;
<?php
/***********************************************************************************************
** The contents of this file are subject to the Vtiger Module-Builder License Version 1.3
 * ( "License" ); You may not use this file except in compliance with the License
 * The Original Code is:  Technokrafts Labs Pvt Ltd
 * The Initial Developer of the Original Code is Technokrafts Labs Pvt Ltd.
 * Portions created by Technokrafts Labs Pvt Ltd are Copyright ( C ) Technokrafts Labs Pvt Ltd.
 * All Rights Reserved.
**
*************************************************************************************************/

include_once 'modules/Vtiger/CRMEntity.php';

class EmployeeTrack extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_employee_tracker';
	var $table_index= 'id';

	function save_coordinates($client_id , $employee_id,$coordinates )
	{echo "hi";
	    global $adb;
	$date =date("Y-m-d");
	$time=date("h:i:sa");   
	    
	    if (isset($client_id) && isset($employee_id) && isset($coordinates)) { 
	    
      $sql = "INSERT INTO vtiger_employee_tracker (id,client_id,employee_id,date,time,coordinates )
        VALUES (?,$client_id,$employee_id,$date,$time, $coordinates)";
        $result	=	$adb->pquery($sql,array());
         if($result!=0)
         {
          echo "New record created successfully";
        //$log->debug("New record created successfully");
         }
         else{
             //$log->debug("Error No record created ");
         }
	    } else {
          echo "Field is missing ";
        }
	    
	    
	    
	}
	


		

	
}
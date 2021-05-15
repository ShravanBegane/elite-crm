<?php
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $date_start = $_POST['date_start'];
            $time_start = $_POST['time_start'];
            $time_end = $_POST['time_end'];
            $appointment_id = $_POST['appointment_id'];
            $is_deleted = $_POST['is_deleted'];
            $address = $_POST['address'];
            $suburb = $_POST['suburb'];
            $services_required = $_POST['services_required'];
            
            $db_host = "localhost";
			/* set here your database USER. This can be the default MySQL username root, a username provided by your hosting provider, or one that you created in setting up your database server .*/
			$db_user = "eliterightchoice_db_user";
			/* set here your database PASSWORD. Using a password for the MySQL account is mandatory for site security. This is the same password used to access your database. This may be predefined by your hosting provider. */
			$db_pass = "uh{IL2H7}Ja$";
			/* set here your database NAME */
			$db_name = "eliterightchoice_newcrmri_testing";
			
			/*************************************************************
			**         		END OF DATABASE CONFIGURATIONS				**
			**************************************************************/
			try {
				/*connect as appropriate as above*/
				$adb = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user, $db_pass);
			} catch(PDOException $ex) {
				echo "Cannot connect to database";
				die();
			}
			
			$sql_vt = "select * from vtiger_contactdetails inner join vtiger_crmentity on vtiger_crmentity.crmid=vtiger_contactdetails.contactid where vtiger_contactdetails.email='".$email."' and vtiger_crmentity.deleted=0"; 
			$result_vt = $adb->prepare($sql_vt);
			$result_vt->execute();
			$fth_vt = $result_vt->fetchAll();
			if($result_vt->rowCount() > 0){
								
				$contactid = $fth_vt[0]['contactid'];
				
			} else {
				
				$sql_mn = "select cur_id,prefix from vtiger_modentity_num where semodule='Contacts' and active = 1";
				$result_mn = $adb->prepare($sql_mn);
				$result_mn->execute();
				$fth_mn = $result_mn->fetchAll();
				$curid = $fth_mn[0]['cur_id'];
				$prefix = $fth_mn[0]['prefix'];
					$prev_inv_no=$prefix.($curid+1);
					$strip=strlen($curid)-strlen($curid+1);
					if($strip=0)$strip=0;
					$temp = str_repeat("0",$strip);
					$req_no = $temp.($curid+1);
					
				$sql_umn = "UPDATE vtiger_modentity_num SET cur_id= '".$req_no."' where cur_id='".$curid."' and active='1' AND semodule='Contacts'";
				$result_umn = $adb->prepare($sql_umn);
				$result_umn->execute();
		
				$sql_cs = "select id from vtiger_crmentity_seq"; 
				$result_cs = $adb->prepare($sql_cs);
				$result_cs->execute();
				$fth_cs = $result_cs->fetchAll();
				$id = $fth_cs[0]['id'];
				//$id = $adb->query_result($result,0,'id');
				$contactid = $id+1;
		
				$sql_crmentity = "INSERT INTO `vtiger_crmentity` (`crmid`, `smcreatorid`, `smownerid`, `modifiedby`, `setype`, `description`, `createdtime`, `modifiedtime`, `viewedtime`, `status`, `version`, `presence`, `deleted`, `smgroupid`, `source`, `label`) VALUES
				('".$contactid."', 1, 1, 1, 'Contacts', '', '".date("Y-m-d h:i:s")."', '".date("Y-m-d h:i:s")."', NULL, NULL, 0, 1, '".$is_deleted."', 0, 'CRM', '".$last_name."')";
				$result_crmentity = $adb->prepare($sql_crmentity);
				$result_crmentity->execute();
				
				$sql_contactdetails = "INSERT INTO `vtiger_contactdetails` (`contactid`, `contact_no`, `firstname`, `lastname`, `email`, `phone`,`title`) VALUES ('".$contactid."', '".$prev_inv_no."', '".$first_name."', '".$last_name."', '".$email."', '".$phone."','".$services_required."')";
				$result_contactdetails = $adb->prepare($sql_contactdetails);
				$result_contactdetails->execute();
				
				$sql_contactaddress = "INSERT INTO `vtiger_contactaddress` (`contactaddressid`,`otherzip`,`otherstreet`) VALUES ('".$contactid."','".$suburb."','".$address."')";
				$result_contactaddress = $adb->prepare($sql_contactaddress);
				$result_contactaddress->execute();
				
				$sql_contactscf = "INSERT INTO `vtiger_contactscf` (`contactid`) VALUES ('".$contactid."')";
				$result_contactscf = $adb->prepare($sql_contactscf);
				$result_contactscf->execute();
				
				$sql_contactsubdetails = "INSERT INTO `vtiger_contactsubdetails` (`contactsubscriptionid`) VALUES ('".$contactid."')";
				$result_contactsubdetails = $adb->prepare($sql_contactsubdetails);
				$result_contactsubdetails->execute();
						
				$sql_crmentity_seq = "UPDATE vtiger_crmentity_seq SET id='".$contactid."'";
				$result_crmentity_seq = $adb->prepare($sql_crmentity_seq);
				$result_crmentity_seq->execute();
				
			}
			
			$sql = "select id from vtiger_crmentity_seq"; 
			$result = $adb->prepare($sql);
			$result->execute();
			$fth = $result->fetchAll();
			$id = $fth[0]['id'];
			//$id = $adb->query_result($result,0,'id');
			$crmid = $id+1;
	
			$sql = "INSERT INTO `vtiger_crmentity` (`crmid`, `smcreatorid`, `smownerid`, `modifiedby`, `setype`, `description`, `createdtime`, `modifiedtime`, `viewedtime`, `status`, `version`, `presence`, `deleted`, `smgroupid`, `source`, `label`) VALUES
			('".$crmid."', 1, 1, 1, 'Calendar', '".$subject."', '".date("Y-m-d h:i:s")."', '".date("Y-m-d h:i:s")."', NULL, NULL, 0, 1, '".$is_deleted."', 0, 'CRM', '".$subject."')";
			$result1 = $adb->prepare($sql);
			$result1->execute();
			
			$sql = "INSERT INTO `vtiger_activity` (`activityid`, `subject`, `activitytype`, `date_start`, `due_date`, `time_start`, `time_end`, `duration_hours`, `duration_minutes`, `eventstatus`) VALUES
			('".$crmid."', '".$subject."', 'Appointment', '".$date_start."', '".$date_start."', '".$time_start."', '".$time_end."', '', '' , 'Planned')";
			$result2 = $adb->prepare($sql);
			$result2->execute();
			
			$sql = "INSERT INTO `vtiger_activitycf` (`activityid`, `cf_852`) VALUES ('".$crmid."', '".$appointment_id."')";
			$result3 = $adb->prepare($sql);
			$result3->execute();
					
			$sql = "UPDATE vtiger_crmentity_seq SET id='".$crmid."'";
			$result4 = $adb->prepare($sql);
			$result4->execute();
						
			$sql = "INSERT INTO `vtiger_crmentityrel` (`crmid`,`module`, `relcrmid`, `relmodule` ) VALUES
			('".$contactid."', 'Contacts', '".$crmid."', 'Calendar')";
			$result5 = $adb->prepare($sql);
			$result5->execute();
			
			$sql = "INSERT INTO `vtiger_cntactivityrel` (`contactid`,`activityid` ) VALUES
			('".$contactid."', '".$crmid."')";
			$result6 = $adb->prepare($sql);
			$result6->execute();
			
?>
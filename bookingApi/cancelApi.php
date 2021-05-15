<?php
            $reservation_id = $_POST['reservation_id'];
           
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
			
			
				
			
		    /******************* this code i changed ***********************/	
			$sql = "select * from vtiger_activitycf inner join vtiger_crmentity on vtiger_crmentity.crmid=vtiger_activitycf.activityid	
			where vtiger_activitycf.cf_852='".$reservation_id."' and vtiger_crmentity.deleted=0"; 	
			/******************* this code i changed ***********************/	
			$result = $adb->prepare($sql);	
			$result->execute();	
			$fth = $result->fetchAll();	
			$activityid = $fth[0]['activityid'];	
				
			$sql = "UPDATE vtiger_activity SET eventstatus='Cancelled' WHERE activityid='".$activityid."'";	
			$result4 = $adb->prepare($sql);	
			$result4->execute(); 	
			

		
		 
			
?>
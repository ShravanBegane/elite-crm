<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H19';

$current_user_parent_role_seq='H1::H2::H19';

$current_user_profiles=array(11,);

$profileGlobalPermission=array('1'=>1,'2'=>1,);

$profileTabsPermission=array('1'=>0,'2'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0,'25'=>0,'26'=>0,'27'=>0,'30'=>0,'32'=>0,'34'=>0,'35'=>0,'38'=>0,'39'=>0,'41'=>0,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'46'=>0,'47'=>0,'48'=>0,'53'=>0,'54'=>0,'55'=>0,'28'=>0,'3'=>0,);

$profileActionPermission=array(2=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),4=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,8=>0,10=>0,),6=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,8=>0,10=>0,),7=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,8=>0,9=>0,10=>0,),8=>array(0=>1,1=>1,2=>1,4=>0,7=>1,6=>0,),9=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,),10=>array(0=>1,1=>1,2=>1,4=>0,7=>1,),13=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,8=>0,10=>0,),14=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),15=>array(0=>1,1=>1,2=>1,4=>0,7=>1,),16=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,),18=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),19=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),20=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,),21=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,),22=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,),23=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,),25=>array(0=>1,1=>0,2=>0,4=>0,7=>0,6=>0,13=>0,),26=>array(0=>1,1=>1,2=>1,4=>0,7=>1,),30=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),34=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,8=>0,11=>0,12=>0,),35=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),38=>array(0=>1,1=>1,2=>1,4=>0,7=>1,),42=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),44=>array(0=>1,1=>1,2=>1,4=>0,7=>1,),46=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),47=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),48=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,10=>0,),53=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,8=>0,10=>0,),54=>array(0=>1,1=>1,2=>1,4=>0,7=>1,5=>0,6=>0,8=>0,10=>0,),55=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),);

$current_user_groups=array(15,16,18,19,20,24,26,30,31,33,34,35,36,37,40,44,50,51,52,);

$subordinate_roles=array();

$parent_roles=array('H1','H2',);

$subordinate_roles_users=array();

$user_info=array('user_name'=>'CAMDEN','is_admin'=>'off','user_password'=>'$2y$10$ZSEnZPD8GWaaC0PQtwpJ4..Ih58BTWhxvGMeByK4tW3A51PVrhRm6','confirm_password'=>'$2y$10$ZSEnZPD8GWaaC0PQtwpJ4..Ih58BTWhxvGMeByK4tW3A51PVrhRm6','first_name'=>'Gary','last_name'=>'Pracy','roleid'=>'H19','email1'=>'camden@elite.com.au','status'=>'Inactive','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'12','end_hour'=>'','start_hour'=>'09:00','is_owner'=>'','title'=>'','phone_work'=>'','department'=>'','phone_mobile'=>'46559917','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'','secondaryemail'=>'','phone_home'=>'','date_format'=>'yyyy-mm-dd','signature'=>'','description'=>'','address_street'=>'','address_city'=>'','address_state'=>'','address_postalcode'=>'','address_country'=>'','accesskey'=>'KKROWnhOj8uU3N1w','time_zone'=>'UTC','currency_id'=>'1','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>',','currency_symbol_placement'=>'$1.0','imagename'=>'','internal_mailer'=>'0','theme'=>'softed','language'=>'en_us','reminder_interval'=>'','phone_crm_extension'=>'','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Sunday','callduration'=>'5','othereventduration'=>'5','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'','defaultactivitytype'=>'','hidecompletedevents'=>'0','defaultcalendarview'=>'','defaultlandingpage'=>'Home','currency_name'=>'India, Rupees','currency_code'=>'INR','currency_symbol'=>'???','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'60');
?>
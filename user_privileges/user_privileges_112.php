<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H2';

$current_user_parent_role_seq='H1::H2';

$current_user_profiles=array(5,);

$profileGlobalPermission=array('1'=>1,'2'=>1,);

$profileTabsPermission=array('1'=>0,'2'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0,'25'=>0,'26'=>0,'27'=>0,'30'=>0,'32'=>0,'34'=>0,'35'=>0,'38'=>0,'39'=>0,'41'=>0,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'46'=>0,'47'=>0,'48'=>0,'51'=>1,'53'=>0,'54'=>0,'55'=>0,'56'=>1,'57'=>1,'58'=>1,'28'=>0,'3'=>0,);

$profileActionPermission=array(2=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),4=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),6=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),7=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,9=>0,10=>0,),8=>array(0=>0,1=>0,2=>0,4=>0,7=>0,6=>0,),9=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),10=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),13=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),14=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),15=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),16=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),18=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),19=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),20=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),21=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),22=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),23=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),25=>array(0=>1,1=>0,2=>0,4=>0,7=>0,6=>0,13=>0,),26=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),30=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),34=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,11=>0,12=>0,),35=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),38=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),42=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),44=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),46=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),47=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),48=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),51=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),53=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),54=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),55=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,8=>1,10=>1,),56=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),57=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),58=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),);

$current_user_groups=array(113,17,21,22,23,26,28,29,30,31,33,34,35,38,39,41,43,48,49,52,53,);

$subordinate_roles=array('H16','H17','H18','H19','H20','H22','H23','H24','H25','H26','H27','H28','H29','H30','H31','H32','H33','H34','H35','H37','H38','H39','H40','H42','H43',);

$parent_roles=array('H1',);

$subordinate_roles_users=array('H16'=>array(),'H17'=>array(100,),'H18'=>array(102,),'H19'=>array(105,),'H20'=>array(108,),'H22'=>array(98,114,),'H23'=>array(115,),'H24'=>array(65,117,130,),'H25'=>array(119,),'H26'=>array(120,),'H27'=>array(121,),'H28'=>array(122,),'H29'=>array(123,),'H30'=>array(124,),'H31'=>array(125,),'H32'=>array(126,),'H33'=>array(127,),'H34'=>array(128,),'H35'=>array(129,),'H37'=>array(136,),'H38'=>array(138,),'H39'=>array(82,139,),'H40'=>array(140,),'H42'=>array(),'H43'=>array(),);

$user_info=array('user_name'=>'Nikki Brown','is_admin'=>'off','user_password'=>'$2y$10$hR092YRzxXt1FWuPCsXd5.QdLWosjWqeibBC5KFyi1p5QFHw3eHN2','confirm_password'=>'$2y$10$d4ncmvWPIWne1H3ti8PMruzcPsolYGxu.Yx6JUbjWmxoGLl3UzO4C','first_name'=>'Logan','last_name'=>'City','roleid'=>'H2','email1'=>'Airliebeach@elite.com.au','status'=>'Active','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'12','end_hour'=>'','start_hour'=>'09:00','is_owner'=>'','title'=>'','phone_work'=>'','department'=>'','phone_mobile'=>'','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'','secondaryemail'=>'','phone_home'=>'','date_format'=>'yyyy-mm-dd','signature'=>'','description'=>'','address_street'=>'','address_city'=>'','address_state'=>'','address_postalcode'=>'','address_country'=>'','accesskey'=>'TF4ElCtReJl64kOF','time_zone'=>'UTC','currency_id'=>'1','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>',','currency_symbol_placement'=>'$1.0','imagename'=>'','internal_mailer'=>'0','theme'=>'softed','language'=>'en_us','reminder_interval'=>'','phone_crm_extension'=>'','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Sunday','callduration'=>'5','othereventduration'=>'5','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'','defaultactivitytype'=>'','hidecompletedevents'=>'0','defaultcalendarview'=>'','defaultlandingpage'=>'Home','currency_name'=>'India, Rupees','currency_code'=>'INR','currency_symbol'=>'₹','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'112');
?>
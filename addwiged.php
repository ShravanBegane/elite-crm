
<?php 
// Turn on debugging level
$Vtiger_Utils_Log = true;


include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');
$module = Vtiger_Module::getInstance('Subservices');
$storemodule1 = Vtiger_Module::getInstance('Calendar');
$relationLabel = 'Activities';
$function_name = 'get_activities';
$module->setRelatedList( $storemodule1, $relationLabel, Array('ADD','SELECT'), $function_name );
?>
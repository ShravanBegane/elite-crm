<?php

include_once 'vtlib/Vtiger/Module.php';

$Vtiger_Utils_Log = true;

$module = Vtiger_Module::getInstance('Mainservicestype');//
if ($module) 
{$module->delete();
}
?>
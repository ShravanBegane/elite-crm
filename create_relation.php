<?php
/*
create_relation.php
Create this file into your root directory of vtiger i.e. vtigercrm/
and then run this file directly using your browser 
for example localhost/vtigercrm/create_relation.php
*/
include_once('vtlib/Vtiger/Module.php');
$moduleInstance = Vtiger_Module::getInstance('Transaction');
$accountsModule = Vtiger_Module::getInstance('Users');
$relationLabel = 'Users';
$moduleInstance->setRelatedList(
$accountsModule, $relationLabel, array('ADD','SELECT')
);
echo 'Relation Added SAuccessfully ';

?>
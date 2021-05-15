<?php
/*
create_relation.php
Create this file into your root directory of vtiger i.e. vtigercrm/
and then run this file directly using your browser 
for example localhost/vtigercrm/create_relation.php
*/
include_once('Vtiger/Module.php');
$moduleInstance = Vtiger_Module::getInstance('Mainservicestype');
$accountsModule = Vtiger_Module::getInstance('Subservices');
$relationLabel = 'Subservices';
$moduleInstance->setRelatedList(
$accountsModule, $relationLabel, Array("ADD","SELECT")
);
echo 'Relation Added SAuccessfully ';

?>
<?php 
// Turn on debugging level
$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');

$module = new Vtiger_Module();
$module->name = 'Store';//(No space in module name)
$module->save();

$module->initTables();
$module->initWebservice();

$menu = Vtiger_Menu::getInstance('Support');
$menu->addModule($module);

$block1 = new Vtiger_Block();
$block1->label = 'Organization Information';
$module->addBlock($block1); //to create a new block

$field0 = new Vtiger_Field();
$field0->name = 'organization_name';
$field0->label = 'Organization Name';
$field0->table = $module->basetable; 
$field0->column = 'organization_name';
$field0->columntype = 'VARCHAR(100)';
$field0->uitype = 2;
$field0->typeofdata = 'V~M';
$module->setEntityIdentifier($field0); //to insert values in entity folder
$block1->addField($field0); //to add field in block


$field1 = new Vtiger_Field();
$field1->name = 'store_id_auto';
$field1->label = 'Store ID';
$field1->table = $module->basetable; 
$field1->column = 'store_id_auto';
$field1->columntype = 'VARCHAR(100)';
$field1->uitype = 4;
$field1->typeofdata = 'V~O';
$block1->addField($field1);

//Do not change any value for filed2.
$field2 = new Vtiger_Field();
$field2->name = 'assigned_user_id';
$field2->label = 'Assigned To';
$field2->table = 'vtiger_crmentity'; 
$field2->column = 'smownerid';
$field2->columntype = 'int(19)';
$field2->uitype = 53;
$field2->typeofdata = 'V~M';
$block1->addField($field2);

$field3 = new Vtiger_Field();
$field3->name = 'CreatedTime';
$field3->label= 'Created Time';
$field3->table = 'vtiger_crmentity';
$field3->column = 'createdtime';
$field3->uitype = 70;
$field3->typeofdata = 'T~O';
$field3->displaytype= 2;
$block->addField($field3);

$field4 = new Vtiger_Field();
$field4->name = 'ModifiedTime';
$field4->label= 'Modified Time';
$field4->table = 'vtiger_crmentity';
$field4->column = 'modifiedtime';
$field4->uitype = 70;
$field4->typeofdata = 'T~O';
$field4->displaytype= 2;
$block->addField($field4);

$filter1 = new Vtiger_Filter();
$filter1->name = 'All';
$filter1->isdefault = true;
$module->addFilter($filter1);
// Add fields to the filter created
$filter1->addField($field0, 1);
$filter1->addField($field1, 2);
$filter1->addField($field2, 3);


/** Set sharing access of this module */
$module->setDefaultSharing('Private'); 
/** Enable and Disable available tools */
$module->enableTools(Array('Import', 'Export'));
$module->disableTools('Merge');

?>
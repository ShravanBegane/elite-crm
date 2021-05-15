<?php /* Smarty version Smarty-3.1.7, created on 2021-02-18 08:17:36
         compiled from "/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/ModuleRelatedTabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12932673315fdb36bd3fa588-73958202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd24d288f234fec7c1397e18f24e3125ced50a7c' => 
    array (
      0 => '/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/ModuleRelatedTabs.tpl',
      1 => 1613636239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12932673315fdb36bd3fa588-73958202',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fdb36bd4cb80',
  'variables' => 
  array (
    'DETAILVIEW_LINKS' => 0,
    'RELATED_LINK' => 0,
    'MODULE_NAME' => 0,
    'RELATEDLINK_LABEL' => 0,
    'RELATED_TAB_LABEL' => 0,
    'SELECTED_TAB_LABEL' => 0,
    'RELATEDLINK_URL' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'RELATEDTABS' => 0,
    'COUNT' => 0,
    'LIMIT' => 0,
    'COUNT1' => 0,
    'i' => 0,
    'RELATEDMODULENAME' => 0,
    'SELECTED_RELATION_ID' => 0,
    'DETAILVIEWRELATEDLINKLBL' => 0,
    'RELATEDFIELDNAME' => 0,
    'RELATED_MODULE_MODEL' => 0,
    'MORE_TAB_ACTIVE' => 0,
    'j' => 0,
    'RECORD' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdb36bd4cb80')) {function content_5fdb36bd4cb80($_smarty_tpl) {?>

<div class='related-tabs row'><div class="col-md-12 col-lg-12"><ul class="nav nav-tabs"><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(), null, 0);?><?php ob_start();?><?php echo vtranslate(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE_NAME']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL'] = new Smarty_variable((($_tmp1).(" ")).($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value), null, 0);?><li class="tab-item tab_<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
 <?php if ($_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value==$_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
" data-link-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
" ><a href="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis"><span class="tab-label"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value,$_tmp2);?>
</strong></span></a></li><?php } ?><?php $_smarty_tpl->tpl_vars['RELATEDTABS'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'], null, 0);?><?php $_smarty_tpl->tpl_vars['COUNT'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['RELATEDTABS']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['LIMIT'] = new Smarty_variable(10, null, 0);?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>10){?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIMIT']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNT']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT1']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT1']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="tab-item tab-item_<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
 <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span><?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
</span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp3=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp3)){?><?php $_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE'] = new Smarty_variable('true', null, 0);?><?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE']->value!='true'){?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp4=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp4)){?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab moreTabElement active"  data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span><a href="mailto:someone@example.com">Employee Location</a><?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
</span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php break 1?><?php }?><?php }} ?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>$_smarty_tpl->tpl_vars['LIMIT']->value){?><li class="dropdown related-tab-more-element"><a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><span class="tab-label"><strong><?php echo vtranslate("LBL_MORE",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong> &nbsp; <b class="fa fa-caret-down"></b></span></a><ul class="dropdown-menu pull-right" id="relatedmenuList"><?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int)ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - ($_smarty_tpl->tpl_vars['COUNT1']->value) : $_smarty_tpl->tpl_vars['COUNT1']->value-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0){
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['COUNT1']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++){
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['j']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" title="" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount=""><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span><?php }else{ ?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><span class="tab-icon textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
<span class="content"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span></span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php }} ?></ul></li><?php }?></ul></div><div class="col-md-12 col-lg-12 detailViewButtoncontainer"><div class="pull-right btn-toolbar"><div class="btn-group"><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('starred'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value!='Products'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Documents'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Assets'&&$_smarty_tpl->tpl_vars['MODULE']->value!='ServiceContracts'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Services'&&$_smarty_tpl->tpl_vars['MODULE']->value!='PriceBooks'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Vendors'&&$_smarty_tpl->tpl_vars['MODULE']->value!='ProjectTask'&&$_smarty_tpl->tpl_vars['MODULE']->value!='ProjectMilestone'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Teams'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Visitors'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
session_start();include("config.inc.php");$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}$query="SELECT id FROM `vtiger_users` WHERE `id` = ".$_SESSION["user_id"];$result = mysqli_query($conn,$query);$data=mysqli_fetch_assoc($result);if($data['id'] != 11){echo '<button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_more" class="btn btn-default addButton createActivity textOverflowEllipsis max-width-100" title="Add Activity" data-name="Activity" data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)" type="button"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Activity</button>';}<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></div></div><input type="hidden" name="record_id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"></div></div><style>#Leads_detailView_basicAction_LBL_SEND_EMAIL {display: block !important;}</style><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Leads'){?><style>.vicon-emails {display: block !important;}.vicon-calendar {display: block !important;}.vicon-documents {display: block !important;}</style><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Teams'){?><style>button#starToggle {display: none;}button#Teams_more {display: none;}</style><?php }?><?php }} ?>
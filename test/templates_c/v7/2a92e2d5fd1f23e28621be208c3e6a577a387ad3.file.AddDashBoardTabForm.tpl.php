<?php /* Smarty version Smarty-3.1.7, created on 2021-04-16 04:59:39
         compiled from "/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/AddDashBoardTabForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:534841285607919bba3b0c7-42583344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a92e2d5fd1f23e28621be208c3e6a577a387ad3' => 
    array (
      0 => '/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/AddDashBoardTabForm.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '534841285607919bba3b0c7-42583344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_607919bbe8dc1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_607919bbe8dc1')) {function content_607919bbe8dc1($_smarty_tpl) {?>
<div class="modal-dialog modelContainer"><?php ob_start();?><?php echo vtranslate('LBL_ADD_DASHBOARD');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_tmp1), 0);?>
<div class="modal-content"><form id="AddDashBoardTab" name="AddDashBoardTab" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="action" value="DashBoardTab"/><input type="hidden" name="mode" value="addTab"/><div class="modal-body clearfix"><div class="col-lg-5"><label class="control-label pull-right marginTop5px"><?php echo vtranslate('LBL_TAB_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-6"><input type="text" name="tabName" data-rule-required="true" size="25" class="inputElement" maxlength='30'/></div><div class="col-lg-12" style='margin-top: 10px; padding: 5px;'><div class="alert-info"><center><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_MAX_CHARACTERS_ALLOWED_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</center></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>
<?php }} ?>
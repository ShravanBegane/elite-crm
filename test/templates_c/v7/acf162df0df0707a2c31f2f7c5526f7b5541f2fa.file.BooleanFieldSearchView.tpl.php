<?php /* Smarty version Smarty-3.1.7, created on 2021-02-22 06:05:08
         compiled from "/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Users/uitypes/BooleanFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5986287176033499441a797-19844690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf162df0df0707a2c31f2f7c5526f7b5541f2fa' => 
    array (
      0 => '/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Users/uitypes/BooleanFieldSearchView.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5986287176033499441a797-19844690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
    'CHECKED_VALUE' => 0,
    'SEARCH_VALUES' => 0,
    'MODULE' => 0,
    'UNCHECKED_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60334994440a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60334994440a1')) {function content_60334994440a1($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars['SEARCH_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'], null, 0);?><?php $_smarty_tpl->tpl_vars['CHECKED_VALUE'] = new Smarty_variable("1", null, 0);?><?php $_smarty_tpl->tpl_vars['UNCHECKED_VALUE'] = new Smarty_variable("0", null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='is_admin'){?><?php $_smarty_tpl->tpl_vars['CHECKED_VALUE'] = new Smarty_variable("on", null, 0);?><?php $_smarty_tpl->tpl_vars['UNCHECKED_VALUE'] = new Smarty_variable("off", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='is_owner'){?><?php $_smarty_tpl->tpl_vars['UNCHECKED_VALUE'] = new Smarty_variable(' ', null, 0);?><?php }?><div class=""><select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" style="width:90px;" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><option value="<?php echo $_smarty_tpl->tpl_vars['CHECKED_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value==$_smarty_tpl->tpl_vars['CHECKED_VALUE']->value){?> selected<?php }?>><?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="<?php echo $_smarty_tpl->tpl_vars['UNCHECKED_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value==$_smarty_tpl->tpl_vars['UNCHECKED_VALUE']->value){?> selected<?php }?>><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div><?php }} ?>
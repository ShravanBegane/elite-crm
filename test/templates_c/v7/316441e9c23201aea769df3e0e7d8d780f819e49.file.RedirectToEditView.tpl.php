<?php /* Smarty version Smarty-3.1.7, created on 2021-05-12 08:41:41
         compiled from "/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/RedirectToEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172779296609b94c5b871f6-55185587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316441e9c23201aea769df3e0e7d8d780f819e49' => 
    array (
      0 => '/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/RedirectToEditView.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172779296609b94c5b871f6-55185587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REQUEST_URL' => 0,
    'REQUEST_DATA' => 0,
    'FIELD_NAME' => 0,
    'FIELD_VALUE' => 0,
    'VALUE' => 0,
    'KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_609b94c60c5c9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609b94c60c5c9')) {function content_609b94c60c5c9($_smarty_tpl) {?>

<form id="redirectForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['REQUEST_URL']->value;?>
" enctype="multipart/form-data"><?php  $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['REQUEST_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_VALUE']->key => $_smarty_tpl->tpl_vars['FIELD_VALUE']->value){
$_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_VALUE']->key;
?><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='returnrelatedModule'){?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable('returnrelatedModuleName', null, 0);?><?php }?><?php if (is_array($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)){?><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELD_VALUE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><?php if (is_array($_smarty_tpl->tpl_vars['VALUE']->value)){?><?php $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['VALUE']->value), null, 0);?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
]" value='<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
'><?php }else{ ?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
]" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['VALUE']->value);?>
"><?php }?><?php } ?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='notecontent'){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value='<?php echo decode_html($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
' ><?php }else{ ?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
"><?php }?><?php } ?></form>
		<script type="text/javascript" src="libraries/jquery/jquery.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#redirectForm').submit();
			});
		</script>
	<?php }} ?>
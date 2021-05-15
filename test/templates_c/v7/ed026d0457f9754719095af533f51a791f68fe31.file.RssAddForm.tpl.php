<?php /* Smarty version Smarty-3.1.7, created on 2020-12-18 11:05:25
         compiled from "/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Rss/RssAddForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18061276805fdc8cf5306174-52348110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed026d0457f9754719095af533f51a791f68fe31' => 
    array (
      0 => '/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Rss/RssAddForm.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18061276805fdc8cf5306174-52348110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fdc8cf531d3c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdc8cf531d3c')) {function content_5fdc8cf531d3c($_smarty_tpl) {?>



<div class='modal-dialog' id="rssAddFormUi"><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_ADD_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal" id="rssAddForm"  method="post" action="index.php" ><div class="modal-body"><div class="row"><div class="col-lg-12"><div class="col-lg-4 fieldLabel"><label><?php echo vtranslate('LBL_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-8 fieldValue"><input class="form-control" type="text" id="feedurl" name="feedurl" data-rule-required="true" data-rule-url="true" value="" placeholder="<?php echo vtranslate('LBL_ENTER_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>
<?php }} ?>
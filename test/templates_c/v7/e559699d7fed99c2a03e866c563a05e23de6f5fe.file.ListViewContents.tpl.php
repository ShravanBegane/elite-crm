<?php /* Smarty version Smarty-3.1.7, created on 2021-02-24 07:35:49
         compiled from "/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Rss/ListViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:649269856603601d5a17d97-71873610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e559699d7fed99c2a03e866c563a05e23de6f5fe' => 
    array (
      0 => '/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Rss/ListViewContents.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649269856603601d5a17d97-71873610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER_MODEL' => 0,
    'LEFTPANELHIDE' => 0,
    'SOURCE_MODULE' => 0,
    'MODULE' => 0,
    'RECORD' => 0,
    'QUICK_LINKS' => 0,
    'SINGLE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_603601d5a76b9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603601d5a76b9')) {function content_603601d5a76b9($_smarty_tpl) {?>



<div class="listViewContentDiv" id="listViewContents"><div class="col-sm-12 col-xs-12"><?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?><div class="essentials-toggle" title="<?php echo vtranslate('LBL_LEFT_PANEL_SHOW_HIDE','Vtiger');?>
"><span class="essentials-toggle-marker fa <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?>fa-chevron-right<?php }else{ ?>fa-chevron-left<?php }?> cursorPointer"></span></div><input type="hidden" id="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><div class="listViewEntriesDiv"><span class="listViewLoadingImageBlock hide modal" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo vimage_path('loading.gif');?>
" alt="no-image" title="<?php echo vtranslate('LBL_LOADING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><p class="listViewLoadingMsg"><?php echo vtranslate('LBL_LOADING_LISTVIEW_CONTENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
........</p></span><div class="feedContainer"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value){?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"><div class="row-fluid detailViewButtoncontainer"><span class="btn-toolbar pull-right"><span class="btn-group"><button id="deleteButton" class="btn btn-default">&nbsp;<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><button id="makeDefaultButton" class="btn btn-default">&nbsp;<?php echo vtranslate('LBL_SET_AS_DEFAULT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span></span><span class="row-fluid" id="rssFeedHeading"><h3> <?php echo vtranslate('LBL_FEEDS_LIST_FROM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
 </h3></span></div><div class="table-container feedListContainer" style="overflow: auto;"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('RssFeedContents.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }else{ ?><table class="table-container emptyRecordsDiv"><tbody><tr><td><?php $_smarty_tpl->tpl_vars['SINGLE_MODULE'] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND');?>
. <?php echo vtranslate('LBL_CREATE');?>
<a class="rssAddButton" href="#" data-href="<?php echo $_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'][0]->getUrl();?>
">&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></td></tr></tbody></table><?php }?></div></div><br><div class="feedFrame"></div></div><div id="scroller_wrapper" class="bottom-fixed-scroll"><div id="scroller" class="scroller-div"></div></div></div>
<?php }} ?>
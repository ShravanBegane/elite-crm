<?php /* Smarty version Smarty-3.1.7, created on 2021-03-22 12:01:36
         compiled from "/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Leads/dashboards/LeadsByStatus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1662976731602fcdf7db3b12-44781229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '295f69b942ee6e3ffb211490c3d7aa0aaf44cc1d' => 
    array (
      0 => '/home/eliterightchoice/public_html/includes/runtime/../../layouts/v7/modules/Leads/dashboards/LeadsByStatus.tpl',
      1 => 1616414428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1662976731602fcdf7db3b12-44781229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_602fcdf7de535',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'CURRENTUSER' => 0,
    'CURRENT_USER_ID' => 0,
    'ALL_ACTIVEUSER_LIST' => 0,
    'OWNER_ID' => 0,
    'OWNER_NAME' => 0,
    'ALL_ACTIVEGROUP_LIST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602fcdf7de535')) {function content_602fcdf7de535($_smarty_tpl) {?>
<script type="text/javascript">
	Vtiger_Barchat_Widget_Js('Vtiger_LeadsByStatus_Widget_Js',{},{});
</script>


<div class="dashboardWidgetHeader">
    <div class="col-8 pull-left">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SETTING_EXIST'=>true), 0);?>

    </div>
    <div class="col-4 pull-right" style="margin-top:-30px"> 
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
        include "config.inc.php";
        $conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }  
        date_default_timezone_set("Asia/Kolkata"); 
        $date = date('Y-m-d');                                   
        $query="select count(crmid) from vtiger_crmentity where setype='Leads' and `createdtime` like '$date%' and deleted!=1";
        $result = mysqli_query($conn,$query);
        while($result_1 = mysqli_fetch_array($result)){
            echo "Today's Total No of Leads :<b>$result_1[0]</b> ";
        }
         
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
    </div>
</div>
<div class="dashboardWidgetContent" style = "overflow-y: auto;width:390px; height:250px">
      <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        include "config.inc.php";
        $conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }     
        date_default_timezone_set("Asia/Kolkata"); 
        $date = date('Y-m-d');                                   
        $query1="select * from vtiger_crmentity where setype='Leads' and `createdtime` like '$date%' and deleted!=1";
        $result1 = mysqli_query($conn,$query1);
        if($r = mysqli_num_rows($result1)>0){
            while($row_1 = mysqli_fetch_array($result1)){
                $sql_2 = mysqli_query($conn, "select * from vtiger_leaddetails where leadid = '$row_1[0]'");
                while($row_2 = mysqli_fetch_array($sql_2)){
                    $name = $row_2['firstname']. " " .$row_2['lastname'];
                    $sql_3 = mysqli_query($conn, "select * from vtiger_users where id='$row_1[1]'");
                    while($row_3 = mysqli_fetch_array($sql_3)){
                        $admin = $row_3['first_name']. " " .$row_3['last_name'] ;
                    }
                    echo "<div>
                        <i class='vicon-leads'></i> <b> $admin </b> assigned from $name
                    </div>";
                }
            }
        }
        else{
            //echo "<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('dashboards/DashBoardWidgetContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
";
            echo "No Leads Match this Criteria";
        }
        
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
</div>

<div class="widgeticons dashBoardWidgetFooter">
    <div class="filterContainer">
        <div class="row">
            <div class="col-sm-12">
                <span class="col-lg-4">
                        <span>
                            <strong><?php echo vtranslate('Created Time',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 &nbsp; <?php echo vtranslate('LBL_BETWEEN',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong>
                        </span>
                </span>
                <div class="col-lg-7">
                    <div class="input-daterange input-group dateRange widgetFilter" id="datepicker" name="createdtime">
                       <input type="text" class="input-sm form-control" name="start" style="height:30px;"/>
                       <span class="input-group-addon">to</span>
                       <input type="text" class="input-sm form-control" name="end" style="height:30px;"/>
                   </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <span class="col-lg-4">
                        <span>
                            <strong><?php echo vtranslate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong>
                        </span>
                </span>
                <span class="col-lg-7">
                        <?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId(), null, 0);?>
                        <select class="select2 col-sm-12 widgetFilter reloadOnChange" name="smownerid">
                            <option value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo vtranslate('LBL_MINE');?>
</option>
                            <option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                            <?php $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getAccessibleUsers(), null, 0);?>
                            <?php if (count($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value)>1){?>
                                <optgroup label="<?php echo vtranslate('LBL_USERS');?>
">
                                    <?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['OWNER_ID']->value!=$_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value){?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option>
                                        <?php }?>
                                    <?php } ?>
                                </optgroup>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getAccessibleGroups(), null, 0);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value)){?>
                                <optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
">
                                    <?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option>
                                    <?php } ?>
                                </optgroup>
                            <?php }?>
                        </select>
                </span>
            </div>
        </div>
    </div>
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SETTING_EXIST'=>true), 0);?>

    </div>
</div><?php }} ?>
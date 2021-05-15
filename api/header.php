<?php require_once("../ValidateAuth.php"); ?>		
<?php include_once('loadcss.php') ?>
<?php include '../test.php'; ?>
    <?php include '../menu.php'; ?>
		<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?=$site_URL?>index.php" class="company-logo navbar-brand"><img src="<?=$site_URL?>test/logo/logo.png" alt="logo.png" /></a></div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="search-links-container global-search col-md-2 col-lg-2 hidden-sm">
                        <div class="search-link hidden-xs"><span class="fa fa-search" aria-hidden="true"></span><input class="keyword-input" type="text" placeholder="Type to search" value=""><span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span></div>
                    </div>
                    <ul class="nav navbar-nav">
                            <?php if(in_array("RightAccess", $_SESSION['names'])){ ?>
                                <li>
                                    <div class="dropdown">
                                    <a href="<?=$site_URL?>index.php?module=Accessuser&view=List&app=MARKETING" class="quickCreateModule " id="menubar_quickCreate_Leads"   data-name="RightAccess" ><i class="fa fa-external-link-square fa-2x"  title="RightAccess"></i> <span class="icon-menus">RightAccess </span></a>
                                    </div>
                                </li>
                            <?php  } ?>
                            <?php //if(in_array("RightCapture", $_SESSION['names'])){ ?>
                            <li>
                                <div class="dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <a id="menubar_quickCreate"  title="RightCapture" aria-hidden="true"><i class="fa fa-camera fa-2x"></i> <span class="icon-menus">RightCapture</span></a>
                                    </div>
                                    <ul class="dropdown-menu submenu" role="menu" aria-labelledby="dropdownMenu1" style="width:160px;">
                                        <li><a id="menubar_quickCreate_Contacts" class="quickCreateModule" title="Contacts"  href="<?=$site_URL?>index.php?module=Contacts&view=List&app=MARKETING"><i class="vicon-contacts" ></i> <span class="quick-create-module">Contacts</span></a></li>
                                        <li><a id="menubar_quickCreate_Accounts" class="quickCreateModule" title="Business"  href="<?=$site_URL?>index.php?module=Accounts&view=List&app=MARKETING"><i class="vicon-accounts" ></i> <span class="quick-create-module">Business</span></a></li>
                                        <li><a id="menubar_quickCreate_Leads" class="quickCreateModule" title="Leads"  href="<?=$site_URL?>index.php?module=Leads&view=List&app=MARKETING"><i class="vicon-leads" ></i> <span class="quick-create-module">Leads</span></a></li>
                                        <li><a id="menubar_quickCreate_Potentials" class="quickCreateModule" title="Opportunities"  href="<?=$site_URL?>index.php?module=Potentials&view=List&app=MARKETING"><i class="vicon-potentials" ></i> <span class="quick-create-module">Opportunities</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <?php// } ?>
                        <?php //if (in_array("RightClean", $_SESSION['names'])){ ?>
                        <li>
                            <div class="dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><a id="menubar_quickCreate" title="RightClean" aria-hidden="true"><i class="fa fa-hand-paper-o fa-2x"></i> <span class="icon-menus">RightClean</span></a></div>
                                <ul class="dropdown-menu submenu" role="menu" aria-labelledby="dropdownMenu1" style="width:230px;">
                                    <li><a href="<?=$site_URL?>index.php?module=Employees&view=List&app=MARKETING" class="quickCreateModule" class="quickCreateModule submenudisable " id="menubar_quickCreate_Potentials" title="Employees"><i class="fa fa-user fa-2x" title="Employees"></i><span class="quick-create-module"> Employees</span></a></li>
                                    <li><a href="<?=$site_URL?>index.php?module=Clients&view=List&app=MARKETING" class="quickCreateModule" class="quickCreateModule submenudisable " id="menubar_quickCreate_Potentials" title="Clients"><i class="fa fa-users fa-2x" title="Clients"></i><span class="quick-create-module"> Clients</span></a></li>
                                    <li style="padding-left: 10px;">
                                        <div class="dropdownmenu" style="float:left;"><i class="fa fa-wrench fa-2x" title="Clients"></i><span class="quick-create-module"> Services</span></button>
                                            <div class="dropdown-content" style="left:0;"><a href="<?=$site_URL?>index.php?module=Mainservicestype&view=List&app=MARKETING">Main Services</a><a href="<?=$site_URL?>index.php?module=Subservices&view=List&app=MARKETING">Sub Services</a></div>
                                        </div>
                                    </li>
                                    <li><a href="<?=$site_URL?>index.php?module=Transaction&view=List&app=MARKETING" class="quickCreateModule" class="quickCreateModule submenudisable " id="menubar_quickCreate_Potentials" title="Transcation Details"><i class="fa fa-exchange fa-2x" title="Transcation Details"></i><span class="quick-create-module"> Transcation Details</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <?php// } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="dropdown">
                                <!--    <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">--><a href="<?=$site_URL?>index.php?module=MailManager&view=List" id="menubar_quickCreate"><span class="faicons fa fa-envelope" title="Mail Manager"></span></a></div>
                        </li>
                        <li>
                            <div class="dropdown"><a href="<?=$site_URL?>index.php?module=Calendar&view=List" id="menubar_quickCreate"><span class="vicon-calendarlist" title="Activities"></span></a></div>
                        </li>
                        <li>
                            <div class="dropdown"><a href="<?=$site_URL?>index.php?module=Calendar&view=Calendar" id="menubar_quickCreate"><span class="fa fa-calendar fa-2x" title="Calendar"></span></a></div>
                        </li>
                        <li>
                            <div class="dropdown"><a href="<?=$site_URL?>index.php?module=HelpDesk&view=List&app=SUPPORT" id="menubar_quickCreate"><span class="vicon-helpdesk" title="Tickets"></span></a></div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><a href="#" id="menubar_quickCreate" class="qc-button" title="Create New" aria-hidden="true"><span class="faicons fa fa-plus-circle"></span></a></div>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
                                    <li class="title" style="padding: 5px 0 0 15px;"><strong>Create New</strong></li>
                                    <hr />
                                    <li id="quickCreateModules" style="padding: 0 5px;">
                                        <div class="col-lg-12" style="padding-bottom:15px;">
                                            <div class="row">
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Clients" class="quickCreateModule" data-name="Clients" data-url="index.php?module=Clients&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Clients'>Cl</span><span class="quick-create-module">Clients</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Employees" class="quickCreateModule" data-name="Employees" data-url="index.php?module=Employees&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Employees'>Em</span><span class="quick-create-module">Employees</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Transcationdetails" class="quickCreateModule" data-name="Transcationdetails" data-url="index.php?module=Transcationdetails&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='TranscationDetails'>Tr</span><span class="quick-create-module">TranscationDetails</span></a></div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-4" style="display:none"><a id="menubar_quickCreate_Visitors" class="quickCreateModule" data-name="Visitors" data-url="index.php?module=Visitors&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Visitors'>Vi</span><span class="quick-create-module">Visitors</span></a></div>
                                                <div class="col-lg-4" style="display:none"><a id="menubar_quickCreate_Teams" class="quickCreateModule" data-name="Teams" data-url="index.php?module=Teams&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Teams'>Te</span><span class="quick-create-module">Teams</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Subservices" class="quickCreateModule" data-name="Subservices" data-url="index.php?module=Subservices&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='SubServices'>Su</span><span class="quick-create-module">SubServices</span></a></div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Mainservicestype" class="quickCreateModule" data-name="Mainservicestype" data-url="index.php?module=Mainservicestype&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='MainServicestype'>Ma</span><span class="quick-create-module">MainServicestype</span></a></div>
                                                <div class="col-lg-4" style="display:none"><a id="menubar_quickCreate_Accessuser" class="quickCreateModule" data-name="Accessuser" data-url="index.php?module=Accessuser&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='AccessUser'>Ac</span><span class="quick-create-module">AccessUser</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events" data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-calendar' title='Activity'></i><span class="quick-create-module">Activity</span></a></div>
                                                <!--<div class="col-lg-4"><a id="menubar_quickCreate_Calendar" class="quickCreateModule" data-name="Calendar"data-url="index.php?module=Calendar&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-calendar' title='Activity'></i><span class="quick-create-module">Activity</span></a></div>-->
                                                <!-- changed !$hideDiv to $hideDiv below -->
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Contacts" class="quickCreateModule" data-name="Contacts" data-url="index.php?module=Contacts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-contacts' title='Right Contacts'></i><span class="quick-create-module">Contact</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Accounts" class="quickCreateModule" data-name="Accounts" data-url="index.php?module=Accounts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-accounts' title='Right Business'></i><span class="quick-create-module">Business</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Potentials" class="quickCreateModule" data-name="Potentials" data-url="index.php?module=Potentials&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-potentials' title='Right Opportunity'></i><span class="quick-create-module">Opportunity</span></a></div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Leads" class="quickCreateModule" data-name="Leads" data-url="index.php?module=Leads&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-leads' title='Right Leads'></i><span class="quick-create-module">Lead</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_HelpDesk" class="quickCreateModule" data-name="HelpDesk" data-url="index.php?module=HelpDesk&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-helpdesk' title='Tickets'></i><span class="quick-create-module">Ticket</span></a></div>
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Project" class="quickCreateModule" data-name="Project" data-url="index.php?module=Project&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-project' title='Projects'></i><span class="quick-create-module">Contracts</span></a></div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Products" class="quickCreateModule" data-name="Products" data-url="index.php?module=Products&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-products' title='Products'></i><span class="quick-create-module">Product</span></a></div>
                                                <div class="col-lg-4 dropdown"><a id="menubar_quickCreate_Documents" class="quickCreateModuleSubmenu dropdown-toggle" data-name="Documents" data-toggle="dropdown" data-url="index.php?module=Documents&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-documents' title='Documents'></i><span class="quick-create-module">Document<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i></span></a>
                                                    <ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_Documents">
                                                        <li class="dropdown-header"><i class="fa fa-upload"></i> File Upload</li>
                                                        <li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="<?=$site_URL?>layouts/v7/skins//images/Vtiger.png">To RightChoice</a></li>
                                                        <li class="dropdown-header"><i class="fa fa-link"></i> Link External Document</li>
                                                        <li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; From File Url</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> Create New Document</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </li>
                                    </ul-->
                            </div>
                        </li><!--   <li><div><a href="<?=$site_URL?>index.php?module=Calendar&view=Calendar" class="fa fa-calendar" title="Activity" aria-hidden="true"></a></div></li>-->
                        <!--    <li><div><a href="<?=$site_URL?>index.php?module=Reports&view=List" class="fa fa-bar-chart" title="Reports" aria-hidden="true"></a></div></li>-->
                        <!--<li><div><a href="#" class="taskManagement vicon vicon-task" title="Tasks" aria-hidden="true"></a></div></li> -->
                        <li class="dropdown">
                            <div><a href="#" class="userName dropdown-toggle" data-toggle="dropdown" role="button"><span class="faicons fa fa-user" aria-hidden="true" title="Demo CRM(democrm@gmail.com)"></span><span class="link-text-xs-only hidden-lg hidden-md hidden-sm">Demo CRM</span></a>
                                <div class="dropdown-menu logout-content" role="menu">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="profile-img-container"><i class='vicon-vtigeruser' style="font-size:90px"></i></div>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <div class="profile-container">
                                                <h4>Demo CRM</h4>
                                                <h5 class="textOverflowEllipsis" title='democrm@gmail.com'>democrm@gmail.com</h5>
                                                <p>CEO</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="logout-footer clearfix">
                                        <hr style="margin: 10px 0 !important">
                                        <div class="">
                                            <ul class="profile-settings">
                                                <!--<li id="quickCreateModules"><span class="fa fa-cogs"></span><a id="menubar_item_right_LBL_MY_PREFERENCES" href="<?=$site_URL?>index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1"> My Preferences</a></li>-->
                                                <li id="quickCreateModules"><span class="fa fa-life-ring"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?=$site_URL?>index.php?module=Support&view=List&app=Support"> Support</a></li><!--    <li id="quickCreateModules"><span class="fa fa-wrench"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="#"> Tools</a></li>-->
                                                <li id="quickCreateModules"><span class="fa fa-shopping-cart"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="https://my360crm.com/pricing/"> Upgrade</a></li>
                                                <li id="quickCreateModules"><span class="fa fa-cog"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?=$site_URL?>index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1"> Settings</a></li>
                                                <li id="quickCreateModules"><span class="fa fa-trash"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?=$site_URL?>index.php?module=RecycleBin&view=List&app=TOOLS"> Recycle Bin</a></li>
                                                <li id="quickCreateModules"><span class="fa fa-power-off"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?=$site_URL?>index.php?module=Users&action=Logout"> Sign Out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
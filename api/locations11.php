<?php //require_once("../ValidateAuth.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Employees</title>
    <link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php include_once('loadcss.php') ?>
    <?php include_once('getlocation.php') ?>
    <script type="text/javascript">
        var __pageCreationTime = (new Date()).getTime();
    </script>
    <script src="<?php echo $site_URL ?>layouts/v7/lib/jquery/jquery.min.js?v=7.1.0"></script>
    <script src="<?php echo $site_URL ?>layouts/v7/lib/jquery/jquery-migrate-1.0.0.js?v=7.1.0"></script>
    <script type="text/javascript">
        var _META = {
            'module': "Employees",
            view: "List",
            'parent': "",
            'notifier': "",
            'app': "MARKETING"
        };
        var _USERMETA;
        _USERMETA = {
            'id': "1",
            'menustatus': "0",
            'currency': "$",
            'currencySymbolPlacement': "$1.0",
            'currencyGroupingPattern': "123,456,789",
            'truncateTrailingZeros': "1"
        };
    </script>
    <script type="text/javascript">
        if (top != self) {
            top.location.href = self.location.href;
        }
    </script>
    <script type="text/javascript">
        var csrfMagicToken = "sid:2ab7c3c62d67865a7cd03e1483e7737dbdb2c2f7,1604670073";
        var csrfMagicName = "__vtrftk";
    </script>
    <script src="<?php echo $site_URL ?>libraries/csrf-magic/csrf-magic.js" type="text/javascript"></script>
</head>

<body data-skinpath="layouts/v7/skins" data-language="en_us" data-user-decimalseparator="." data-user-dateformat="mm-dd-yyyy" data-user-groupingseparator="," data-user-numberofdecimals="2" data-user-hourformat="24" data-user-calendar-reminder-interval="60"><input type="hidden" id="start_day" value="Sunday" />
    <div id="page">
        <div id="pjaxContainer" class="hide noprint"></div>
        <div id="messageBar" class="hide"></div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?php echo $site_URL ?>index.php" class="company-logo navbar-brand"><img src="<?php echo $site_URL ?>test/logo/logo.png" alt="logo.png" /></a></div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="search-links-container global-search col-md-2 col-lg-2 hidden-sm">
                        <div class="search-link hidden-xs"><span class="fa fa-search" aria-hidden="true"></span><input class="keyword-input" type="text" placeholder="Type to search" value=""><span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span></div>
                    </div>
                    <ul class="nav navbar-nav">
                        <li>
                            <div class="dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><a id="menubar_quickCreate" title="RightClean" aria-hidden="true"><i class="fa fa-hand-paper-o fa-2x"></i> <span class="icon-menus">RightClean</span></a></div>
                                <ul class="dropdown-menu submenu" role="menu" aria-labelledby="dropdownMenu1" style="width:230px;">
                                    <li><a href="<?php echo $site_URL ?>index.php?module=Employees&view=List&app=MARKETING" class="quickCreateModule" class="quickCreateModule submenudisable " id="menubar_quickCreate_Potentials" title="Employees"><i class="fa fa-user fa-2x" title="Employees"></i><span class="quick-create-module"> Employees</span></a></li>
                                    <li><a href="<?php echo $site_URL ?>/index.php?module=Clients&view=List&app=MARKETING" class="quickCreateModule" class="quickCreateModule submenudisable " id="menubar_quickCreate_Potentials" title="Clients"><i class="fa fa-users fa-2x" title="Clients"></i><span class="quick-create-module"> Clients</span></a></li>
                                    <li style="padding-left: 10px;">
                                        <div class="dropdownmenu" style="float:left;"><i class="fa fa-wrench fa-2x" title="Clients"></i><span class="quick-create-module"> Services</span></button>
                                            <div class="dropdown-content" style="left:0;"><a href="<?php echo $site_URL ?>index.php?module=Mainservicestype&view=List&app=MARKETING">Main Services</a><a href="<?php echo $site_URL ?>index.php?module=Subservices&view=List&app=MARKETING">Sub Services</a></div>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo $site_URL ?>index.php?module=Transaction&view=List&app=MARKETING" class="quickCreateModule" class="quickCreateModule submenudisable " id="menubar_quickCreate_Potentials" title="Transcation Details"><i class="fa fa-exchange fa-2x" title="Transcation Details"></i><span class="quick-create-module"> Transcation Details</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="dropdown">
                                <!--	<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">--><a href="<?php echo $site_URL ?>index.php?module=MailManager&view=List" id="menubar_quickCreate"><span class="faicons fa fa-envelope" title="Mail Manager"></span></a></div>
                        </li>
                        <li>
                            <div class="dropdown"><a href="<?php echo $site_URL ?>index.php?module=Calendar&view=List" id="menubar_quickCreate"><span class="vicon-calendarlist" title="Activities"></span></a></div>
                        </li>
                        <li>
                            <div class="dropdown"><a href="<?php echo $site_URL ?>index.php?module=Calendar&view=Calendar" id="menubar_quickCreate"><span class="fa fa-calendar fa-2x" title="Calendar"></span></a></div>
                        </li>
                        <li>
                            <div class="dropdown"><a href="<?php echo $site_URL ?>index.php?module=HelpDesk&view=List&app=SUPPORT" id="menubar_quickCreate"><span class="vicon-helpdesk" title="Tickets"></span></a></div>
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
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Project" class="quickCreateModule" data-name="Project" data-url="index.php?module=Project&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-project' title='Projects'></i><span class="quick-create-module">Project</span></a></div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-4"><a id="menubar_quickCreate_Products" class="quickCreateModule" data-name="Products" data-url="index.php?module=Products&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-products' title='Products'></i><span class="quick-create-module">Product</span></a></div>
                                                <div class="col-lg-4 dropdown"><a id="menubar_quickCreate_Documents" class="quickCreateModuleSubmenu dropdown-toggle" data-name="Documents" data-toggle="dropdown" data-url="index.php?module=Documents&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-documents' title='Documents'></i><span class="quick-create-module">Document<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i></span></a>
                                                    <ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_Documents">
                                                        <li class="dropdown-header"><i class="fa fa-upload"></i> File Upload</li>
                                                        <li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="<?php echo $site_URL ?>layouts/v7/skins//images/Vtiger.png">To RightChoice</a></li>
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
                        </li><!--	<li><div><a href="http://101.0.117.115/~rightcleancom/index.php?module=Calendar&view=Calendar" class="fa fa-calendar" title="Activity" aria-hidden="true"></a></div></li>-->
                        <!--	<li><div><a href="http://101.0.117.115/~rightcleancom/index.php?module=Reports&view=List" class="fa fa-bar-chart" title="Reports" aria-hidden="true"></a></div></li>-->
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
                                                <!--<li id="quickCreateModules"><span class="fa fa-cogs"></span><a id="menubar_item_right_LBL_MY_PREFERENCES" href="http://101.0.117.115/~rightcleancom/index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1"> My Preferences</a></li>-->
                                                <li id="quickCreateModules"><span class="fa fa-life-ring"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?php echo $site_URL ?>index.php?module=Support&view=List&app=Support"> Support</a></li><!--	<li id="quickCreateModules"><span class="fa fa-wrench"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="#"> Tools</a></li>-->
                                                <li id="quickCreateModules"><span class="fa fa-shopping-cart"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="https://my360crm.com/pricing/"> Upgrade</a></li>
                                                <li id="quickCreateModules"><span class="fa fa-cog"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?php echo $site_URL ?>index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1"> Settings</a></li>
                                                <li id="quickCreateModules"><span class="fa fa-trash"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?php echo $site_URL ?>index.php?module=RecycleBin&view=List&app=TOOLS"> Recycle Bin</a></li>
                                                <li id="quickCreateModules"><span class="fa fa-power-off"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="<?php echo $site_URL ?>index.php?module=Users&action=Logout"> Sign Out</a></li>
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
        <style>
            .submenudisable {
                color: #98999a !important;
            }

            .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdownmenu {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                right: 0;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #f1f1f1;
            }

            .dropdownmenu:hover .dropdown-content {
                display: block;
            }

            .dropdownmenu:hover .dropbtn {
                background-color: #3e8e41;
            }
        </style>



        <div class="container-fluid app-nav">
            <div class="row">


                <div class="col-sm-12 col-xs-12 app-indicator-icon-container app-MARKETING">
                    <div class="row" title=" MARKETING">
                        <span class="app-indicator-icon fa fa-users"></span>
                    </div>
                </div>


                <div class="app-menu hide" id="app-menu">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-2 col-xs-2 cursorPointer app-switcher-container">
                                <div class="row app-navigator">
                                    <span id="menu-toggle-action" class="app-icon fa fa-bars"></span>
                                </div>
                            </div>
                        </div>
                        <div class="app-list row">
                            <div class="menu-item app-item dropdown-toggle" data-default-url="index.php?module=Home&view=DashBoard">
                                <div class="menu-items-wrapper">
                                    <span class="app-icon-list fa fa-dashboard"></span>
                                    <span class="app-name textOverflowEllipsis"> Right Dashboard</span>
                                </div>
                            </div>
                            <div class="dropdown app-modules-dropdown-container">
                                <div class="menu-item app-item dropdown-toggle app-item-color-MARKETING" data-app-name="MARKETING" id="MARKETING_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="index.php?module=Contacts&view=List&app=MARKETING">
                                    <div class="menu-items-wrapper app-menu-items-wrapper">
                                        <span class="app-icon-list fa fa-users"></span>
                                        <span class="app-name textOverflowEllipsis"> RightCafe</span>
                                        <span class="fa fa-chevron-right pull-right"></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu app-modules-dropdown" aria-labelledby="MARKETING_modules_dropdownMenu">
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=MARKETING" title="Right Contacts">
                                            <span class="module-icon"><i class='vicon-contacts' title='Right Contacts'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Right Contacts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=MARKETING" title="Right Business">
                                            <span class="module-icon"><i class='vicon-accounts' title='Right Business'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Right Business</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Leads&view=List&app=MARKETING" title="Right Leads">
                                            <span class="module-icon"><i class='vicon-leads' title='Right Leads'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Right Leads</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown app-modules-dropdown-container">
                                <div class="menu-item app-item dropdown-toggle app-item-color-SALES" data-app-name="SALES" id="SALES_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="index.php?module=Products&view=List&app=SALES">
                                    <div class="menu-items-wrapper app-menu-items-wrapper">
                                        <span class="app-icon-list fa fa-dot-circle-o"></span>
                                        <span class="app-name textOverflowEllipsis"> RightCapture</span>
                                        <span class="fa fa-chevron-right pull-right"></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu app-modules-dropdown" aria-labelledby="SALES_modules_dropdownMenu">
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Products&view=List&app=SALES" title="Products">
                                            <span class="module-icon"><i class='vicon-products' title='Products'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Products</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown app-modules-dropdown-container">
                                <div class="menu-item app-item dropdown-toggle app-item-color-INVENTORY" data-app-name="INVENTORY" id="INVENTORY_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="index.php?module=Products&view=List&app=INVENTORY">
                                    <div class="menu-items-wrapper app-menu-items-wrapper">
                                        <span class="app-icon-list fa vicon-inventory"></span>
                                        <span class="app-name textOverflowEllipsis"> INVENTORY</span>
                                        <span class="fa fa-chevron-right pull-right"></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu app-modules-dropdown" aria-labelledby="INVENTORY_modules_dropdownMenu">
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Products&view=List&app=INVENTORY" title="Products">
                                            <span class="module-icon"><i class='vicon-products' title='Products'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=INVENTORY" title="Right Contacts">
                                            <span class="module-icon"><i class='vicon-contacts' title='Right Contacts'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Right Contacts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=INVENTORY" title="Right Business">
                                            <span class="module-icon"><i class='vicon-accounts' title='Right Business'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Right Business</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown app-modules-dropdown-container">
                                <div class="menu-item app-item dropdown-toggle app-item-color-SUPPORT" data-app-name="SUPPORT" id="SUPPORT_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="index.php?module=HelpDesk&view=List&app=SUPPORT">
                                    <div class="menu-items-wrapper app-menu-items-wrapper">
                                        <span class="app-icon-list fa fa-life-ring"></span>
                                        <span class="app-name textOverflowEllipsis"> SUPPORT</span>
                                        <span class="fa fa-chevron-right pull-right"></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu app-modules-dropdown" aria-labelledby="SUPPORT_modules_dropdownMenu">
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=HelpDesk&view=List&app=SUPPORT" title="Tickets">
                                            <span class="module-icon"><i class='vicon-helpdesk' title='Tickets'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Tickets</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown app-modules-dropdown-container">
                                <div class="menu-item app-item dropdown-toggle app-item-color-TOOLS" data-app-name="TOOLS" id="TOOLS_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="index.php?module=EmailTemplates&view=List&app=TOOLS">
                                    <div class="menu-items-wrapper app-menu-items-wrapper">
                                        <span class="app-icon-list fa fa-wrench"></span>
                                        <span class="app-name textOverflowEllipsis"> TOOLS</span>
                                        <span class="fa fa-chevron-right pull-right"></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu app-modules-dropdown" aria-labelledby="TOOLS_modules_dropdownMenu">
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=EmailTemplates&view=List&app=TOOLS" title="Email Templates">
                                            <span class="module-icon"><i class='vicon-emailtemplates' title='Email Templates'></i></span>
                                            <span class="module-name textOverflowEllipsis"> Email Templates</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-list-divider"></div>
                            <!--								<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=MailManager&view=List">
                        <div class="menu-items-wrapper">
                            <span class="app-icon-list fa"><i class='vicon-mailmanager' title='Right Mail'></i></span>
                            <span class="app-name textOverflowEllipsis"> Mail Manager</span>
                        </div>
                    </div>
                                                        <div class="menu-item app-item app-item-misc" data-default-url="index.php?module=Documents&view=List">
                        <div class="menu-items-wrapper">
                            <span class="app-icon-list fa"><i class='vicon-documents' title='Documents'></i></span>
                            <span class="app-name textOverflowEllipsis"> Documents</span>
                        </div>
                    </div>
                -->
                            <div class="menu-item app-item app-item-misc" data-default-url="<?php echo $site_URL ?>index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
                                <div class="menu-items-wrapper">
                                    <span class="app-icon-list fa fa-shopping-cart"></span>
                                    <span class="app-name textOverflowEllipsis"> Upgrade</span>
                                </div>
                            </div>
                            <div class="dropdown app-modules-dropdown-container dropdown-compact">
                                <div class="menu-item app-item dropdown-toggle app-item-misc" data-app-name="TOOLS" id="TOOLS_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&view=Index">
                                    <div class="menu-items-wrapper app-menu-items-wrapper">
                                        <span class="app-icon-list fa fa-cog"></span>
                                        <span class="app-name textOverflowEllipsis"> Settings</span>
                                        <span class="fa fa-chevron-right pull-right"></span>
                                    </div>
                                </div>
                                <ul class="dropdown-menu app-modules-dropdown dropdown-modules-compact" aria-labelledby="TOOLS_modules_dropdownMenu" data-height="0.27">
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&view=Index">
                                            <span class="fa fa-cog module-icon"></span>
                                            <span class="module-name textOverflowEllipsis"> CRM Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $site_URL ?>index.php?module=Users&parent=Settings&view=List">
                                            <span class="fa fa-user module-icon"></span>
                                            <span class="module-name textOverflowEllipsis"> Manage Users</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!---You can Add Map here-->
                <div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop">
					
					
						    
						    				<a title="{vtranslate($MODULE, $MODULE)}" href="<?php echo $site_URL ?>index.php?module=Employees&view=List&app=MARKETING"><h4 class="module-title pull-left " style="margin-left: 15px;"> Employee  > All</h4>&nbsp;&nbsp; </a>

						
							<span style="margin-left: 632px;">	<a href="<?php echo $site_URL ?>index.php?module=Employees&view=Edit&app=MARKETING" class="btn addButton btn-default module-buttons" style="padding: 6px 12px;margin: 4px 2px;border-radius: 2px;border: 1px solid #ddd;color: #666;background: #fff;"><div class="fa  fa-plus" aria-hidden="true"></div>&nbsp;&nbsp; Add Employee </a>
								<a href="<?php echo $site_URL ?>api/empRoster.php" class="btn addButton btn-default module-buttons" style="padding: 6px 12px;margin: 4px 2px;border-radius: 2px;border: 1px solid #ddd;color: #666;background: #fff;"><div class="fa  fa-user" aria-hidden="true"></div>&nbsp;&nbsp;  Employee Roster</a>
											<a href="<?php echo $site_URL ?>api/locations.php" class="btn addButton btn-default module-buttons" style="padding: 6px 12px;margin: 4px 2px;border-radius: 2px;border: 1px solid #ddd;color: #666;background: #fff;"><div class="fa fa-map-marker" aria-hidden="true"></div>&nbsp;&nbsp;  Employee Tracking</a>
											
											<a href="<?php echo $site_URL ?>index.php?module=Employees&view=List&app=MARKETING" class="btn addButton btn-default module-buttons" style="padding: 6px 12px;margin: 4px 2px;border-radius: 2px;border: 1px solid #ddd;color: #666;background: #fff;"><div class="fa fa-download" aria-hidden="true"></div>&nbsp;&nbsp;  Import</a>
                </span>
					
					
					
					
					
                </div>

            </div>
        </div>
        </nav>
        <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
            <div class="data">
            </div>
            <div class="modal-dialog">
            </div>
        </div>
        <div class="main-container main-container-Employees">
            <div id="modnavigator-Employees" class="module-nav">
                <div class="hidden-xs hidden-sm mod-switcher-container">


                    <div id="modules-menu" class="modules-menu">
                        <ul title="Right Contacts" class="module-qtip Right Contacts">
                            <li class="">
                                <a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=MARKETING">
                                    <i class='vicon-contacts' title='Right Contacts'></i>
                                    <span>Right Contacts</span>
                                </a>
                            </li>
                        </ul>
                        <ul title="Right Business" class="module-qtip Right Business">
                            <li class="">
                                <a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=MARKETING">
                                    <i class='vicon-accounts' title='Right Business'></i>
                                    <span>Right Business</span>
                                </a>
                            </li>
                        </ul>
                        <ul title="Right Leads" class="module-qtip Right Leads">
                            <li class="">
                                <a href="<?php echo $site_URL ?>index.php?module=Leads&view=List&app=MARKETING">
                                    <i class='vicon-leads' title='Right Leads'></i>
                                    <span>Right Leads</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="module-qtip" data-hasqtip="3" oldtitle="Opportunities" title="Right Opportunity" aria-describedby="qtip-3">
                            <li class="">
                                <a href="<?php echo $site_URL ?>index.php?module=Potentials&view=List&app=MARKETING">
                                    <i class="vicon-potentials"></i>
                                    <span>Opportunities</span>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
            <div id="sidebar-essentials" class="sidebar-essentials ">
                <div class="sidebar-menu">
                    <div class="module-filters" id="module-filters">
                        <div class="sidebar-container lists-menu-container">
                            <div class="sidebar-header clearfix">
                                <h5 class="pull-left">Lists</h5>
                                <button id="createFilter" data-url="index.php?module=CustomView&view=EditAjax&source_module=Employees" class="btn btn-sm btn-default pull-right sidebar-btn" title="Create a New List">
                                    <div class="fa fa-plus" aria-hidden="true"></div>
                                </button>
                            </div>
                            <hr>
                            <div>
                                <input class="search-list" type="text" placeholder="Search for List">
                            </div>
                            <div class="menu-scroller scrollContainer" style="position:relative; top:0; left:0;">
                                <div class="list-menu-content">
                                    <div class="list-group" id="myList">
                                        <h6 class="lists-header  hide ">
                                            My List
                                        </h6>
                                        <input type="hidden" name="allCvId" value="69" />
                                        <ul class="lists-menu">
                                        </ul>
                                        <div class='clearfix'>

                                            <a class="toggleFilterSize" data-more-text=" -10 more" data-less-text="Show less">

                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-group" id="sharedList">
                                        <h6 class="lists-header ">
                                            Shared List
                                        </h6>
                                        <input type="hidden" name="allCvId" value="69" />
                                        <ul class="lists-menu">
                                            <li style="font-size:12px;" class='listViewFilter  active   '>
                                                <a class="filterName listViewFilterElipsis" href="<?php echo $site_URL ?>index.php?module=Employees&view=List&viewname=69&app=MARKETING" oncontextmenu="return false;" data-filter-id="69" title="All">All</a>
                                                <div class="pull-right">
                                                    <span class="js-popover-container" style="cursor:pointer;">
                                                        <span class="fa fa-angle-down" rel="popover" data-toggle="popover" aria-expanded="true" toggleClass="fa fa-square-o" data-filter-id="69" data-is-default="" data-defaulttoggle="index.php?module=CustomView&action=SaveAjax&record=69" data-default="index.php?module=CustomView&view=EditAjax&source_module=Employees&source_viewname=69" data-isMine="true">
                                                        </span>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class='clearfix'>

                                            <a class="toggleFilterSize" data-more-text=" -9 more" data-less-text="Show less">

                                            </a>
                                        </div>
                                    </div>

                                    <input type="hidden" id='allFilterNames' value='null' />
                                    <div id="filterActionPopoverHtml">
                                        <ul class="listmenu hide" role="menu">
                                            <li role="presentation" class="editFilter">
                                                <a role="menuitem"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                            </li>
                                            <li role="presentation" class="deleteFilter">
                                                <a role="menuitem"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                            </li>
                                            <li role="presentation" class="duplicateFilter">
                                                <a role="menuitem"><i class="fa fa-files-o"></i>&nbsp;Duplicate</a>
                                            </li>
                                            <li role="presentation" class="toggleDefault">
                                                <a role="menuitem">
                                                    <i data-check-icon="fa-check-square-o" data-uncheck-icon="fa-square-o"></i>&nbsp;Default
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="list-group hide noLists">
                                        <h6 class="lists-header">
                                            <center> No Lists found ... </center>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-filters">
                        <div class="sidebar-container lists-menu-container">
                            <h5 class="lists-header">
                                Tags
                            </h5>
                            <hr>
                            <div class="menu-scroller scrollContainer" style="position:relative; top:0; left:0;">
                                <div class="list-menu-content">
                                    <div id="listViewTagContainer" class="multiLevelTagList" data-view-id="69" data-list-tag-count="5">
                                        <div>
                                            <a class="moreTags  hide ">
                                                <span class="moreTagCount">-5</span>
                                                &nbsp;more
                                            </a>
                                            <div class="moreListTags hide">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showAllTagContainer hide">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form class="detailShowAllModal">
                                                    <div class="modal-header">
                                                        <div class="clearfix">
                                                            <div class="pull-right "><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div>
                                                            <h4 class="pull-left">Add/Select Tag</h4>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6 selectTagContainer">
                                                                <div class="form-group"><label class="control-label">Current Tags</label>
                                                                    <div class="currentTagScroll">
                                                                        <div class="currentTag multiLevelTagList form-control"><span class="noTagsPlaceHolder" style="padding:3px;display:none;border:1px solid transparent;color:#999">No Tag Exists</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group"><label class="control-label">Select from available tags</label>
                                                                    <div class="dropdown"><input class="form-control currentTagSelector dropdown-toggle" data-toggle="dropdown" placeholder="Type here to select an existing tag" />
                                                                        <div class="dropdown-menu currentTagMenu">
                                                                            <div class="scrollable" style="max-height:300px">
                                                                                <ul style="padding-left:0px;">
                                                                                    <li class="tag-item list-group-item"><a style="margin-left:0px;">
                                                                                            <span class="tag " title="test" data-type="public" data-id="2">
                                                                                                <i class="activeToggleIcon fa  fa-circle "></i>
                                                                                                <span class="tagLabel display-inline-block textOverflowEllipsis" title="test">test</span>
                                                                                            </span>


                                                                                        </a></li>
                                                                                    <li class="tag-item list-group-item"><a style="margin-left:0px;">
                                                                                            <span class="tag " title="READ TEST 1" data-type="private" data-id="3">
                                                                                                <i class="activeToggleIcon fa  fa-circle "></i>
                                                                                                <span class="tagLabel display-inline-block textOverflowEllipsis" title="READ TEST 1">READ TEST 1</span>
                                                                                            </span>


                                                                                        </a></li>
                                                                                    <li class="tag-item list-group-item"><a style="margin-left:0px;">
                                                                                            <span class="tag " title="newtag" data-type="private" data-id="4">
                                                                                                <i class="activeToggleIcon fa  fa-circle "></i>
                                                                                                <span class="tagLabel display-inline-block textOverflowEllipsis" title="newtag">newtag</span>
                                                                                            </span>


                                                                                        </a></li>
                                                                                    <li class="tag-item list-group-item"><a style="margin-left:0px;">
                                                                                            <span class="tag " title="1s" data-type="private" data-id="5">
                                                                                                <i class="activeToggleIcon fa  fa-circle "></i>
                                                                                                <span class="tagLabel display-inline-block textOverflowEllipsis" title="1s">1s</span>
                                                                                            </span>


                                                                                        </a></li>
                                                                                    <li class="dummyExistingTagElement tag-item list-group-item hide"><a style="margin-left:0px;">
                                                                                            <span class="tag " title="" data-type="" data-id="">
                                                                                                <i class="activeToggleIcon fa  fa-circle "></i>
                                                                                                <span class="tagLabel display-inline-block textOverflowEllipsis" title=""></span>
                                                                                            </span>


                                                                                        </a></li>
                                                                                    <li class="tag-item list-group-item"><span class="noTagExistsPlaceHolder" style="padding:3px;color:#999">No Tag Exists</span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" col-lg-6 selectTagContainerborder">
                                                                <div class="form-group"><label class="control-label">Create new tag</label>
                                                                    <div><input name="createNewTag" value="" class="form-control" placeholder="Enter tag name" /></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div>
                                                                        <div class="checkbox"><label><input type="hidden" name="visibility" value="private" /><input type="checkbox" name="visibility" value="public" />&nbsp; Public Tags</label></div>
                                                                        <div class="pull-right"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class=" vt-default-callout vt-info-callout tagInfoblock">
                                                                        <h5 class="vt-callout-header"><span class="fa fa-info-circle"></span>&nbsp; Info </h5>
                                                                        <div>Use comma to separate multiple tags</div><br>
                                                                        <div>Shared tags are accessible by all users in RightChoice</div><br>
                                                                        <div>Go to Settings > My preferences > My Tags to Edit or Delete your private tags</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer ">
                                                        <center><button class="btn btn-success" type="submit" name="saveButton"><strong>Save</strong></button><a href="#" class="cancelLink" type="reset" data-dismiss="modal">Cancel</a></center>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dummyTagElement" class="hide">

                                    <span class="tag " title="" data-type="" data-id="">
                                        <i class="activeToggleIcon fa  fa-circle "></i>
                                        <span class="tagLabel display-inline-block textOverflowEllipsis" title=""></span>
                                        <i class="editTag fa fa-pencil"></i>
                                    </span>



                                </div>
                                <div>
                                    <div class="editTagContainer hide">
                                        <input type="hidden" name="id" value="" />
                                        <div class="editTagContents">
                                            <div>
                                                <input type="text" name="tagName" value="" style="width:100%" maxlength="25" />
                                            </div>
                                            <div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="hidden" name="visibility" value="private" />
                                                        <input type="checkbox" name="visibility" value="public" />
                                                        &nbsp; Shared Tag(s)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-mini btn-success saveTag" type="button" style="width:50%;float:left">
                                                <center> <i class="fa fa-check"></i> </center>
                                            </button>
                                            <button class="btn btn-mini btn-danger cancelSaveTag" type="button" style="width:50%">
                                                <center> <i class="fa fa-close"></i> </center>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="listViewPageDiv content-area " id="listViewContent" style="min-height: auto;">
                <!--map--->
                <div class="col-sm-12 col-md-12">
                    <div id="map"></div>
                    <div id="list">
                        <ul class="list-group">
                            <?php $count = sizeof($value); ?>
                            <?php for ($i = 0; $i < $count; $i++) { ?>
                                <li class="list-group-item" style="background-color:<?php echo $colors[$i] ?>"><a href="<?php echo $site_URL ?>api/employee.php?id=<?php echo $id_list[$i]; ?>"><?php echo $value[$i] ?></a></li>

                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <footer class="app-footer">
        <p>
            Powered by RightChoice - &nbsp;&nbsp;© 2020&nbsp;&nbsp;|
            <a href="https://rightchoice.io/" target="_blank">RightChoice</a>&nbsp;|&nbsp;
            <a href="#" target="_blank">Privacy Policy</a>
        </p>
    </footer>
    </div>
    <div id='overlayPage'>
        <!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
        any one can use this by adding "show" class to it -->
        <div class='arrow'></div>
        <div class='data'>
        </div>
    </div>
    <div id='helpPageOverlay'></div>
    <div class="modal myModal fade"></div>
    <?php include_once('loadjs.php') ?>
    <!----Map Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        var customLabel = {
            restaurant: {
                label: 'A'
            },
            bar: {
                label: 'B'
            }

        };

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(20.593683, 78.962883),
                zoom: 4
            });
            var infoWindow = new google.maps.InfoWindow;

            // Change this depending on the name of your PHP or XML fil


            downloadUrl('<?php echo $site_URL ?>api/locations.xml', function(data) {
                var xml = data.responseXML;
                var markers = xml.documentElement.getElementsByTagName('marker');
                Array.prototype.forEach.call(markers, function(markerElem) {
                    var id = markerElem.getAttribute('id');
                    var name = markerElem.getAttribute('name');
                    var address = markerElem.getAttribute('address');
                    var color = markerElem.getAttribute('color');
                    var type = markerElem.getAttribute('type');
                    var point = new google.maps.LatLng(
                        parseFloat(markerElem.getAttribute('lat')),
                        parseFloat(markerElem.getAttribute('lng')));

                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = name
                    infowincontent.appendChild(strong);
                    infowincontent.appendChild(document.createElement('br'));

                    var text = document.createElement('text');
                    text.textContent = address
                    infowincontent.appendChild(text);
                    var icon = customLabel[type] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        animation: google.maps.Animation.DROP,
                        icon: {
                            path: 'm 12,2.4000002 c -2.7802903,0 -5.9650002,1.5099999 -5.9650002,5.8299998 0,1.74375 1.1549213,3.264465 2.3551945,4.025812 1.2002732,0.761348 2.4458987,0.763328 2.6273057,2.474813 L 12,24 12.9825,14.68 c 0.179732,-1.704939 1.425357,-1.665423 2.626049,-2.424188 C 16.809241,11.497047 17.965,9.94 17.965,8.23 17.965,3.9100001 14.78029,2.4000002 12,2.4000002 Z',
                            fillColor: color,
                            fillOpacity: 1.0,
                            strokeColor: color,
                            strokeWeight: 1,
                            scale: 2,
                            anchor: new google.maps.Point(12, 24),
                        },
                    });
                    marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });
                });
            });
        }



        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function doNothing() {}
        // setTimeout(function() {
        //     window.location.reload()
        // }, 60000);
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1r_z6rHPBG2ja1mpYBROzUWln_LWBAHU&callback=initMap">
    </script>
    <style>
        #map {
            width: 100% !important;
            height: 600px;
        }

        #list {
            position: absolute;
            top: 54px;
            left: 25px;
        }

        #list .list-group .list-group-item {
            text-align: center;
            padding-right: 23px;
            padding-left: 23px;
        }
    </style>
    <script>
        $("#adv-search").attr("disabled", true);
    </script>

</body>

</html>
<?php //require_once("../ValidateAuth.php"); ?>
<?php include_once('loadcss.php') ?>
<?php include_once('loadjs.php') ?>

<!DOCTYPE html><html><head><title>Employees</title><link rel="SHORTCUT ICON" href="../layouts/v7/skins/images/favicon.ico"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/todc/css/bootstrap.min.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/todc/css/docs.min.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/todc/css/todc-bootstrap.min.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/font-awesome/css/font-awesome.min.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/jquery/select2/select2.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/select2-bootstrap/select2-bootstrap.css'><link type='text/css' rel='stylesheet' href='libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/vt-icons/style.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/animate/animate.min.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css'><link type='text/css' rel='stylesheet'href="../layouts/v7/lib/jquery/daterangepicker/daterangepicker.css'><input type="hidden" id="inventoryModules" value=["Invoice","Quotes","PurchaseOrder","SalesOrder"]><link type="text/css" rel="stylesheet" href="../layouts/v7/skins/marketing/style.css?v=7.3.0" media="screen" /><link type="text/css" rel="stylesheet" href="../layouts/v7/lib/jquery/timepicker/jquery.timepicker.css?v=7.3.0" media="screen" /><link type="text/css" rel="stylesheet" href="libraries/jquery/lazyYT/lazyYT.min.css?v=7.3.0" media="screen" /><link type="text/css" rel="stylesheet" href="../layouts/v7/lib/jquery/perfect-scrollbar/css/perfect-scrollbar.css?v=7.3.0" media="screen" /><style type="text/css">@media print {.noprint { display:none; }}</style><script type="text/javascript">var __pageCreationTime = (new Date()).getTime();</script><script src="layouts/v7/lib/jquery/jquery.min.js?v=7.3.0"></script><script src="layouts/v7/lib/jquery/jquery-migrate-1.0.0.js?v=7.3.0"></script><script type="text/javascript">var _META = { 'module': "Employees", view: "List", 'parent': "", 'notifier':"", 'app':"MARKETING" };var _USERMETA;_USERMETA =  { 'id' : "1", 'menustatus' : "0",'currency' : "₹", 'currencySymbolPlacement' : "$1.0",'currencyGroupingPattern' : "123,456,789", 'truncateTrailingZeros' : "1"};</script><script type="text/javascript">if (top != self) {top.location.href = self.location.href;}</script><script type="text/javascript">var csrfMagicToken = "sid:344e5ebc7befafa1f9cf3728d8072f93608782bd,1609928042";var csrfMagicName = "__vtrftk";</script><script src="libraries/csrf-magic/csrf-magic.js" type="text/javascript"></script></head><body data-skinpath="layouts/v7/skins" data-language="en_us" data-user-decimalseparator="." data-user-dateformat="dd-mm-yyyy"data-user-groupingseparator="," data-user-numberofdecimals="2" data-user-hourformat="12"data-user-calendar-reminder-interval="60"><input type="hidden" id="start_day" value="Sunday" /><div id="page"><div id="pjaxContainer" class="hide noprint"></div><div id="messageBar" class="hide"></div><nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar"><div class="container-fluid global-nav"><div class="row"><div class="col-lg-3 col-md-3 col-sm-4 col-xs-8 app-navigator-container"><div class="row"><div id="appnavigator" class="col-sm-2 col-xs-2 cursorPointer app-switcher-container" data-app-class="fa-users"><div class="row app-navigator"><span class="app-icon fa fa-bars"></span></div></div><div class="logo-container col-sm-3 col-xs-9"><div class="row"><a href="index.php" class="company-logo"><img src="test/logo/vtiger-crm-logo.png" alt="vtiger-crm-logo.png"/></a></div></div></div></div><div class="navbar-header paddingTop5"><button type="button" class="navbar-toggle collapsed border0" data-toggle="collapse" data-target="#navbar" aria-expanded="false"><i class="fa fa-th"></i></button><button type="button" class="navbar-toggle collapsed border0" data-toggle="collapse" data-target="#search-links-container" aria-expanded="false"><i class="fa fa-search"></i></button></div><div class="col-sm-3"><div id="search-links-container" class="search-links-container collapse navbar-collapse"><div class="search-link"><span class="fa fa-search" aria-hidden="true"></span><input class="keyword-input" type="text" placeholder="Type to search" value=""><span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span></div></div></div><div id="navbar" class="col-sm-6 col-xs-12 collapse navbar-collapse navbar-right global-actions"><ul class="nav navbar-nav"><li><div class="dropdown pull-left"><div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><a href="#" id="menubar_quickCreate" class="qc-button fa fa-plus-circle" title="Quick Create" aria-hidden="true"></a></div><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;"><li class="title" style="padding: 5px 0 0 15px;"><strong>Quick Create</strong></li><hr/><li id="quickCreateModules" style="padding: 0 5px;"><div class="col-lg-12" style="padding-bottom:15px;"><div class="row"><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Campaigns" class="quickCreateModule" data-name="Campaigns"data-url="index.php?module=Campaigns&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-campaigns' title='Campaigns'></i><span class="quick-create-module">Campaign</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Leads" class="quickCreateModule" data-name="Leads"data-url="index.php?module=Leads&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-leads' title='Leads'></i><span class="quick-create-module">Lead</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Contacts" class="quickCreateModule" data-name="Contacts"data-url="index.php?module=Contacts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-contacts' title='Contacts'></i><span class="quick-create-module">Contact</span></a></div></div><br><div class="row"><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Accounts" class="quickCreateModule" data-name="Accounts"data-url="index.php?module=Accounts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-accounts' title='Business'></i><span class="quick-create-module">Business</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Potentials" class="quickCreateModule" data-name="Potentials"data-url="index.php?module=Potentials&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-potentials' title='Opportunities'></i><span class="quick-create-module">Opportunity</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_HelpDesk" class="quickCreateModule" data-name="HelpDesk"data-url="index.php?module=HelpDesk&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-helpdesk' title='Tickets'></i><span class="quick-create-module">Ticket</span></a></div></div><br><div class="row"><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Project" class="quickCreateModule" data-name="Project"data-url="index.php?module=Project&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-project' title='Projects'></i><span class="quick-create-module">Project</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Assets" class="quickCreateModule" data-name="Assets"data-url="index.php?module=Assets&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-assets' title='Assets'></i><span class="quick-create-module">Asset</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_ServiceContracts" class="quickCreateModule" data-name="ServiceContracts"data-url="index.php?module=ServiceContracts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-servicecontracts' title='Service Contracts'></i><span class="quick-create-module">Service Contract</span></a></div></div><br><div class="row"><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Products" class="quickCreateModule" data-name="Products"data-url="index.php?module=Products&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-products' title='Products'></i><span class="quick-create-module">Product</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Services" class="quickCreateModule" data-name="Services"data-url="index.php?module=Services&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-services' title='Services'></i><span class="quick-create-module">Service</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_PriceBooks" class="quickCreateModule" data-name="PriceBooks"data-url="index.php?module=PriceBooks&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-pricebooks' title='Price Books'></i><span class="quick-create-module">Price Book</span></a></div></div><br><div class="row"><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Vendors" class="quickCreateModule" data-name="Vendors"data-url="index.php?module=Vendors&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-vendors' title='Vendors'></i><span class="quick-create-module">Vendor</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events"data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-calendar' title='Calendar'></i><span class="quick-create-module">Event</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Calendar" class="quickCreateModule" data-name="Calendar"data-url="index.php?module=Calendar&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-task' title='Calendar' ></i><span class="quick-create-module">Task</span></a></div></div><br><div class="row"><div class="col-lg-4 col-xs-4 dropdown"><a id="menubar_quickCreate_Documents" class="quickCreateModuleSubmenu dropdown-toggle" data-name="Documents" data-toggle="dropdown"data-url="index.php?module=Documents&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-documents' title='Documents'></i><span class="quick-create-module">Document<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i></span></a><ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_Documents"><li class="dropdown-header"><i class="fa fa-upload"></i> File Upload</li><li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png">To Vtiger</a></li><li class="dropdown-header"><i class="fa fa-link"></i> Link External Document</li><li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; From File Url</a></li><li role="separator" class="divider"></li><li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> Create New Document</a></li></ul></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_ProjectTask" class="quickCreateModule" data-name="ProjectTask"data-url="index.php?module=ProjectTask&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-projecttask' title='Project Tasks'></i><span class="quick-create-module">Project Task</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_ProjectMilestone" class="quickCreateModule" data-name="ProjectMilestone"data-url="index.php?module=ProjectMilestone&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-projectmilestone' title='Project Milestones'></i><span class="quick-create-module">Project Milestone</span></a></div></div><br><div class="row"><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Mainservicestype" class="quickCreateModule" data-name="Mainservicestype"data-url="index.php?module=Mainservicestype&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='MainServicestype'>Ma</span><span class="quick-create-module">MainServicestype</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Transaction" class="quickCreateModule" data-name="Transaction"data-url="index.php?module=Transaction&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Transaction'>Tr</span><span class="quick-create-module">Transaction</span></a></div><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Subservices" class="quickCreateModule" data-name="Subservices"data-url="index.php?module=Subservices&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='SubServices'>Su</span><span class="quick-create-module">SubServices</span></a></div></div><br><div class="row"><div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Employees" class="quickCreateModule" data-name="Employees"data-url="index.php?module=Employees&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Employees'>Em</span><span class="quick-create-module">SINGLE_Employees</span></a></div></div></li></ul></div></li><li><div><a href="index.php?module=Calendar&view=Calendar" class="fa fa-calendar" title="Calendar" aria-hidden="true"></a></div></li><li><div><a href="index.php?module=Reports&view=List" class="fa fa-bar-chart" title="Reports" aria-hidden="true"></a></div></li><li><div><a href="#" class="taskManagement vicon vicon-task" title="Tasks" aria-hidden="true"></a></div></li><li class="dropdown"><div><a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button"><span class="fa fa-user" aria-hidden="true" title="admin Administrator(admin)"></span><span class="link-text-xs-only hidden-lg hidden-md hidden-sm">admin Administrator</span></a><div class="dropdown-menu logout-content" role="menu"><div class="row"><div class="col-lg-4 col-sm-4"><div class="profile-img-container"><i class='vicon-vtigeruser' style="font-size:90px"></i></div></div><div class="col-lg-8 col-sm-8"><div class="profile-container"><h4>admin Administrator</h4><h5 class="textOverflowEllipsis" title='admin'>admin</h5><p>CEO</p></div></div></div><div id="logout-footer" class="logout-footer clearfix"><hr style="margin: 10px 0 !important"><div class=""><span class="pull-left"><span class="fa fa-cogs"></span><a id="menubar_item_right_LBL_MY_PREFERENCES" href="index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1">My Preferences</a></span><span class="pull-right"><span class="fa fa-power-off"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Users&action=Logout">Sign Out</a></span></div></div></div></div></li></ul></div></div></div>

<div class="container-fluid app-nav">
	<div class="row">
		

<div class="col-sm-1 col-xs-2 app-indicator-icon-container app-MARKETING">
	<div class="row" title="RIGHT CRM">
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
						<span class="app-name textOverflowEllipsis"> RIGHT VIEW </span>
					</div>
				</div>
						
			<?php if($_SESSION['cf_1092'] == "0"){  ?>
				<div class="dropdown app-modules-dropdown-container">
																									
					<div class="menu-item app-item dropdown-toggle app-item-color-RIGHT CLEAN" data-app-name="RIGHT CLEAN" id="RIGHT CLEAN_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
						<div class="menu-items-wrapper app-menu-items-wrapper">
							<span class="app-icon-list fa fa-hand-paper-o"></span>
							<span class="app-name textOverflowEllipsis"> RIGHT CLEAN</span>
							<span class="fa fa-chevron-right pull-right"></span>
						</div>
					</div>
					<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="RIGHT_CLEAN_modules_dropdownMenu">

						<li>
							<a href="index.php?module=Accounts&view=List&app=MARKETING" title="Clients">
								<span class="module-icon"><i class="fa fa-users fa-1x" title='Clients'></i></span>
								<span class="module-name textOverflowEllipsis"> Clients</span>
							</a>
						</li>
						<li>
							<a href="index.php?module=Mainservicestype&view=List&app=MARKETING" title="Main Service">
								<span class="module-icon"><i class='vicon-services' title='Main Service'></i></span>
								<span class="module-name textOverflowEllipsis"> Main Service</span>
							</a>
						</li>
						<li>
							<a href="index.php?module=Subservices&view=List&app=MARKETING" title="Sub Service">
								<span class="module-icon"><i class='fa  fa-wrench' title='Sub Service'></i></span>
								<span class="module-name textOverflowEllipsis"> Sub Service</span>
							</a>
						</li>
						<li>
							<a href="index.php?module=Transaction&view=List&app=MARKETING" title="Transcation Details">
								<span class="module-icon"><i class='fa fa-exchange' title='Transcation Details'></i></span>
								<span class="module-name textOverflowEllipsis"> Transcation Details</span>
							</a>
						</li>
						<li>
							<a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1" title="Employee Managment">
								<span class="module-icon"><i class="fa fa-user fa-1x" title='Employee Managment'></i></span>
								<span class="module-name textOverflowEllipsis"> Employee Managment</span>
							</a>
						</li>
						<li>
							<a href="api/locations.php" title="Employee Tracking">
								<span class="module-icon"><i class="fa  fa-map-marker fa-1x" title='Employee Tracking'></i></span>
								<span class="module-name textOverflowEllipsis">&nbspEmployee Tracking</span>
							</a>
						</li>
						<li>
							<a href="api/empRoster.php" title="Employee Roster">
								<span class="module-icon"><i class="fa fa-history fa-1x" title='Employee Roster'></i></span>
								<span class="module-name textOverflowEllipsis"> Employee Roster</span>
							</a>
						</li>
					</ul>
				</div>
			<?php } ?>

			<div class="dropdown app-modules-dropdown-container">
																								
				<div class="menu-item app-item dropdown-toggle app-item-color-RIGHT CLEAN" data-app-name="RIGHT CLEAN" id="RIGHT CLEAN_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
					<div class="menu-items-wrapper app-menu-items-wrapper">
						<span class="app-icon-list fa fa-desktop"></span>
						<span class="app-name textOverflowEllipsis"> RIGHT RECEPTION</span>
						<span class="fa fa-chevron-right pull-right"></span>
					</div>
				</div>
				<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="RIGHT_CLEAN_modules_dropdownMenu">

					<li>
						<a href="index.php?module=Teams&view=List&app=MARKETING" title="Team">
							<span class="module-icon"><i class="fa fa-users fa-1x" title='Team'></i></span>
							<span class="module-name textOverflowEllipsis"> Team</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Visitors&view=List&app=MARKETING" title="Visitor">
							<span class="module-icon"><i class='fa fa-user' title='Visitor'></i></span>
							<span class="module-name textOverflowEllipsis"> Visitor</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=EmailTemplates&view=Edit&app=TOOLS" title="Email Templates">
							<span class="module-icon"><i class='fa  fa-envelope' title='Email Templates'></i></span>
							<span class="module-name textOverflowEllipsis"> Email Templates</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Receptionsettings&view=List&app=MARKETING" title="Menu">
							<span class="module-icon"><i class='fa fa-bars' title='Menu'></i></span>
							<span class="module-name textOverflowEllipsis"> Menu</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Receptionsettings&view=List&app=MARKETING" title="Register">
							<span class="module-icon"><i class='fa  fa-user-plus' title='Register'></i></span>
							<span class="module-name textOverflowEllipsis"> Register</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Receptionsettings&view=List&app=MARKETING" title="Link Device">
							<span class="module-icon"><i class='fa  fa-plug' title='Link Device'></i></span>
							<span class="module-name textOverflowEllipsis"> Link Device</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Receptionsettings&view=List&app=MARKETING" title="Request for Assistance">
							<span class="module-icon"><i class='fa  fa-cog' title='Request for Assistance'></i></span>
							<span class="module-name textOverflowEllipsis"> Request for Assistance</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Receptionsettings&view=List&app=MARKETING" title="Subscription">
							<span class="module-icon"><i class='fa  fa-external-link-square' title='Subscription'></i></span>
							<span class="module-name textOverflowEllipsis"> Subscription</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Receptionsettings&view=List&app=MARKETING" title="GDPR Compliance">
							<span class="module-icon"><i class='fa  fa-cog' title='GDPR Compliance'></i></span>
							<span class="module-name textOverflowEllipsis"> GDPR Compliance</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Receptionsettings&view=List&app=MARKETING" title="Delete Data">
							<span class="module-icon"><i class='fa   fa-trash' title='Delete Data'></i></span>
							<span class="module-name textOverflowEllipsis"> Delete Data</span>
						</a>
					</li>
				</ul>
			</div>

			
			
			
																																	<div class="dropdown app-modules-dropdown-container">
																																		
						<div class="menu-item app-item dropdown-toggle app-item-color-MARKETING" data-app-name="MARKETING" id="MARKETING_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa fa-users"></span>
								<span class="app-name textOverflowEllipsis"> RIGHT CRM</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="MARKETING_modules_dropdownMenu">
																							<li>
									<a href="index.php?module=Campaigns&view=List&app=MARKETING" title="Campaigns">
										<span class="module-icon"><i class='vicon-campaigns' title='Campaigns'></i></span>
										<span class="module-name textOverflowEllipsis"> Campaigns</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Leads&view=List&app=MARKETING" title="Leads">
										<span class="module-icon"><i class='vicon-leads' title='Leads'></i></span>
										<span class="module-name textOverflowEllipsis"> Leads</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Contacts&view=List&app=MARKETING" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Accounts&view=List&app=MARKETING" title="Business">
										<span class="module-icon"><i class='vicon-accounts' title='Business'></i></span>
										<span class="module-name textOverflowEllipsis"> Business</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Potentials&view=List&app=MARKETING" title="Opportunities">
										<span class="module-icon"><i class='vicon-potentials' title='Opportunities'></i></span>
										<span class="module-name textOverflowEllipsis"> Opportunities</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Mainservicestype&view=List&app=MARKETING" title="MainServicestype">
										<span class="module-icon"><span class='custom-module' title='MainServicestype'>Ma</span></span>
										<span class="module-name textOverflowEllipsis"> MainServicestype</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Subservices&view=List&app=MARKETING" title="SubServices">
										<span class="module-icon"><span class='custom-module' title='SubServices'>Su</span></span>
										<span class="module-name textOverflowEllipsis"> SubServices</span>
									</a>
								</li>
													</ul>
					</div>
																				<div class="dropdown app-modules-dropdown-container">
																																		
						<div class="menu-item app-item dropdown-toggle app-item-color-SALES" data-app-name="SALES" id="SALES_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa fa-dot-circle-o"></span>
								<span class="app-name textOverflowEllipsis"> SALES</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="SALES_modules_dropdownMenu">
																							<li>
									<a href="index.php?module=Potentials&view=List&app=SALES" title="Opportunities">
										<span class="module-icon"><i class='vicon-potentials' title='Opportunities'></i></span>
										<span class="module-name textOverflowEllipsis"> Opportunities</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Quotes&view=List&app=SALES" title="Quotes">
										<span class="module-icon"><i class='vicon-quotes' title='Quotes'></i></span>
										<span class="module-name textOverflowEllipsis"> Quotes</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Products&view=List&app=SALES" title="Products">
										<span class="module-icon"><i class='vicon-products' title='Products'></i></span>
										<span class="module-name textOverflowEllipsis"> Products</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Services&view=List&app=SALES" title="Services">
										<span class="module-icon"><i class='vicon-services' title='Services'></i></span>
										<span class="module-name textOverflowEllipsis"> Services</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=SMSNotifier&view=List&app=SALES" title="SMS Notifier">
										<span class="module-icon"><i class='vicon-smsnotifier' title='SMS Notifier'></i></span>
										<span class="module-name textOverflowEllipsis"> SMS Notifier</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Contacts&view=List&app=SALES" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Accounts&view=List&app=SALES" title="Business">
										<span class="module-icon"><i class='vicon-accounts' title='Business'></i></span>
										<span class="module-name textOverflowEllipsis"> Business</span>
									</a>
								</li>
													</ul>
					</div>
																				<div class="dropdown app-modules-dropdown-container">
																																		
						<div class="menu-item app-item dropdown-toggle app-item-color-INVENTORY" data-app-name="INVENTORY" id="INVENTORY_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa vicon-inventory"></span>
								<span class="app-name textOverflowEllipsis"> INVENTORY</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="INVENTORY_modules_dropdownMenu">
																							<li>
									<a href="index.php?module=Products&view=List&app=INVENTORY" title="Products">
										<span class="module-icon"><i class='vicon-products' title='Products'></i></span>
										<span class="module-name textOverflowEllipsis"> Products</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Services&view=List&app=INVENTORY" title="Services">
										<span class="module-icon"><i class='vicon-services' title='Services'></i></span>
										<span class="module-name textOverflowEllipsis"> Services</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=PriceBooks&view=List&app=INVENTORY" title="Price Books">
										<span class="module-icon"><i class='vicon-pricebooks' title='Price Books'></i></span>
										<span class="module-name textOverflowEllipsis"> Price Books</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Invoice&view=List&app=INVENTORY" title="Invoices">
										<span class="module-icon"><i class='vicon-invoice' title='Invoices'></i></span>
										<span class="module-name textOverflowEllipsis"> Invoices</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=SalesOrder&view=List&app=INVENTORY" title="Sales Orders">
										<span class="module-icon"><i class='vicon-salesorder' title='Sales Orders'></i></span>
										<span class="module-name textOverflowEllipsis"> Sales Orders</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=PurchaseOrder&view=List&app=INVENTORY" title="Purchase Orders">
										<span class="module-icon"><i class='vicon-purchaseorder' title='Purchase Orders'></i></span>
										<span class="module-name textOverflowEllipsis"> Purchase Orders</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Vendors&view=List&app=INVENTORY" title="Vendors">
										<span class="module-icon"><i class='vicon-vendors' title='Vendors'></i></span>
										<span class="module-name textOverflowEllipsis"> Vendors</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Contacts&view=List&app=INVENTORY" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Accounts&view=List&app=INVENTORY" title="Business">
										<span class="module-icon"><i class='vicon-accounts' title='Business'></i></span>
										<span class="module-name textOverflowEllipsis"> Business</span>
									</a>
								</li>
													</ul>
					</div>
																				<div class="dropdown app-modules-dropdown-container">
																																		
						<div class="menu-item app-item dropdown-toggle app-item-color-SUPPORT" data-app-name="SUPPORT" id="SUPPORT_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa fa-life-ring"></span>
								<span class="app-name textOverflowEllipsis"> SUPPORT</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="SUPPORT_modules_dropdownMenu">
																							<li>
									<a href="index.php?module=HelpDesk&view=List&app=SUPPORT" title="Tickets">
										<span class="module-icon"><i class='vicon-helpdesk' title='Tickets'></i></span>
										<span class="module-name textOverflowEllipsis"> Tickets</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Faq&view=List&app=SUPPORT" title="FAQ">
										<span class="module-icon"><i class='vicon-faq' title='FAQ'></i></span>
										<span class="module-name textOverflowEllipsis"> FAQ</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=ServiceContracts&view=List&app=SUPPORT" title="Service Contracts">
										<span class="module-icon"><i class='vicon-servicecontracts' title='Service Contracts'></i></span>
										<span class="module-name textOverflowEllipsis"> Service Contracts</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Assets&view=List&app=SUPPORT" title="Assets">
										<span class="module-icon"><i class='vicon-assets' title='Assets'></i></span>
										<span class="module-name textOverflowEllipsis"> Assets</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=SMSNotifier&view=List&app=SUPPORT" title="SMS Notifier">
										<span class="module-icon"><i class='vicon-smsnotifier' title='SMS Notifier'></i></span>
										<span class="module-name textOverflowEllipsis"> SMS Notifier</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Contacts&view=List&app=SUPPORT" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Accounts&view=List&app=SUPPORT" title="Business">
										<span class="module-icon"><i class='vicon-accounts' title='Business'></i></span>
										<span class="module-name textOverflowEllipsis"> Business</span>
									</a>
								</li>
													</ul>
					</div>
																				<div class="dropdown app-modules-dropdown-container">
																																		
						<div class="menu-item app-item dropdown-toggle app-item-color-PROJECT" data-app-name="PROJECT" id="PROJECT_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa fa-briefcase"></span>
								<span class="app-name textOverflowEllipsis"> PROJECTS</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="PROJECT_modules_dropdownMenu">
																							<li>
									<a href="index.php?module=Project&view=List&app=PROJECT" title="Projects">
										<span class="module-icon"><i class='vicon-project' title='Projects'></i></span>
										<span class="module-name textOverflowEllipsis"> Projects</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=ProjectTask&view=List&app=PROJECT" title="Project Tasks">
										<span class="module-icon"><i class='vicon-projecttask' title='Project Tasks'></i></span>
										<span class="module-name textOverflowEllipsis"> Project Tasks</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=ProjectMilestone&view=List&app=PROJECT" title="Project Milestones">
										<span class="module-icon"><i class='vicon-projectmilestone' title='Project Milestones'></i></span>
										<span class="module-name textOverflowEllipsis"> Project Milestones</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Contacts&view=List&app=PROJECT" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Accounts&view=List&app=PROJECT" title="Business">
										<span class="module-icon"><i class='vicon-accounts' title='Business'></i></span>
										<span class="module-name textOverflowEllipsis"> Business</span>
									</a>
								</li>
													</ul>
					</div>
																				<div class="dropdown app-modules-dropdown-container">
																																		
						<div class="menu-item app-item dropdown-toggle app-item-color-TOOLS" data-app-name="TOOLS" id="TOOLS_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa fa-wrench"></span>
								<span class="app-name textOverflowEllipsis"> TOOLS</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="TOOLS_modules_dropdownMenu">
																							<li>
									<a href="index.php?module=EmailTemplates&view=List&app=TOOLS" title="Email Templates">
										<span class="module-icon"><i class='vicon-emailtemplates' title='Email Templates'></i></span>
										<span class="module-name textOverflowEllipsis"> Email Templates</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Rss&view=List&app=TOOLS" title="Rss">
										<span class="module-icon"><i class='vicon-rss' title='Rss'></i></span>
										<span class="module-name textOverflowEllipsis"> Rss</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Portal&view=List&app=TOOLS" title="Our Sites">
										<span class="module-icon"><i class='vicon-portal' title='Our Sites'></i></span>
										<span class="module-name textOverflowEllipsis"> Our Sites</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=RecycleBin&view=List&app=TOOLS" title="Recycle Bin">
										<span class="module-icon"><i class='vicon-recyclebin' title='Recycle Bin'></i></span>
										<span class="module-name textOverflowEllipsis"> Recycle Bin</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=PBXManager&view=List&app=TOOLS" title="PBX Manager">
										<span class="module-icon"><i class='vicon-pbxmanager' title='PBX Manager'></i></span>
										<span class="module-name textOverflowEllipsis"> PBX Manager</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Transaction&view=List&app=TOOLS" title="Transaction">
										<span class="module-icon"><span class='custom-module' title='Transaction'>Tr</span></span>
										<span class="module-name textOverflowEllipsis"> Transaction</span>
									</a>
								</li>
																							<li>
									<a href="index.php?module=Employees&view=List&app=TOOLS" title="Employees">
										<span class="module-icon"><span class='custom-module' title='Employees'>Em</span></span>
										<span class="module-name textOverflowEllipsis"> Employees</span>
									</a>
								</li>
													</ul>
					</div>
										<div class="app-list-divider"></div>
										<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=MailManager&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><i class='vicon-mailmanager' title='Mail Manager'></i></span>
						<span class="app-name textOverflowEllipsis"> Mail Manager</span>
					</div>
				</div>
													<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=Documents&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><i class='vicon-documents' title='Documents'></i></span>
						<span class="app-name textOverflowEllipsis"> Documents</span>
					</div>
				</div>
															<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
						<div class="menu-items-wrapper">
							<span class="app-icon-list fa fa-shopping-cart"></span>
							<span class="app-name textOverflowEllipsis"> Extension Store</span>
						</div>
					</div>
														<div class="dropdown app-modules-dropdown-container dropdown-compact">
					<div class="menu-item app-item dropdown-toggle app-item-misc" data-app-name="TOOLS" id="TOOLS_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
						<div class="menu-items-wrapper app-menu-items-wrapper">
							<span class="app-icon-list fa fa-cog"></span>
							<span class="app-name textOverflowEllipsis"> Settings</span>
															<span class="fa fa-chevron-right pull-right"></span>
													</div>
					</div>
					<ul class="dropdown-menu app-modules-dropdown dropdown-modules-compact" aria-labelledby="TOOLS_modules_dropdownMenu" data-height="0.27">
						<li>
							<a href="?module=Vtiger&parent=Settings&view=Index">
								<span class="fa fa-cog module-icon"></span>
								<span class="module-name textOverflowEllipsis"> CRM Settings</span>
							</a>
						</li>
						<li>
							<a href="?module=Users&parent=Settings&view=List">
								<span class="fa fa-user module-icon"></span>
								<span class="module-name textOverflowEllipsis"> Manage Users</span>
							</a>
						</li>
					</ul>
				</div>
					</div>
	</div>
</div>

		
<div class="col-sm-11 col-xs-10 padding0 module-action-bar clearfix coloredBorderTop"><div class="module-action-content clearfix Employees-module-action-content"><div class="col-lg-7 col-md-6 col-sm-5 col-xs-11 padding0 module-breadcrumb module-breadcrumb-List transitionsAllHalfSecond"><a title="Employees" href='index.php?module=Employees&view=List&viewname=61&app=MARKETING'><h4 class="module-title pull-left text-uppercase"> Employees </h4>&nbsp;&nbsp;</a><p class="current-filter-name filter-name pull-left cursorPointer" title="All"><span class="fa fa-angle-right pull-left" aria-hidden="true"></span><a href='index.php?module=Employees&view=List&viewname=61&app=MARKETING'>&nbsp;&nbsp;All&nbsp;&nbsp;</a> </p></div><div class="col-lg-5 col-md-6 col-sm-7 col-xs-1 padding0 pull-right"><div id="appnav" class="navbar-right"><nav class="navbar navbar-inverse border0 margin0"><div class="container-fluid"><div class="navbar-header bg-white marginTop5px"><button type="button" class="navbar-toggle collapsed margin0" data-toggle="collapse" data-target="#appnavcontent" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button></div><div class="navbar-collapse collapse" id="appnavcontent" aria-expanded="false" style="height: 1px;"><ul class="nav navbar-nav"><li><button id="Employees_listView_basicAction_LBL_ADD_RECORD" type="button" class="btn addButton btn-default module-buttons"onclick='window.location.href = "index.php?module=Employees&amp;view=Edit&app=MARKETING"'><div class="fa fa-plus" aria-hidden="true"></div>&nbsp;&nbsp;Add Record</button></li><li><button id="Employees_basicAction_LBL_IMPORT" type="button" class="btn addButton btn-default module-buttons"onclick="Vtiger_Import_Js.triggerImportAction('index.php?module=Employees&amp;view=Import')"><div class="fa fa-download" aria-hidden="true"></div>&nbsp;&nbsp;Import</button></li><li><div class="settingsIcon"><button type="button" class="btn btn-default module-buttons dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="Settings"><span class="fa fa-wrench" aria-hidden="true"></span>&nbsp;Customize&nbsp; <span class="caret"></span></button><ul class="detailViewSetting dropdown-menu"><li id="Employees_listview_advancedAction_LBL_EDIT_FIELDS"><a href=index.php?parent=Settings&amp;module=LayoutEditor&amp;sourceModule=Employees>Employees Fields & Layout</a></li><li id="Employees_listview_advancedAction_LBL_EDIT_WORKFLOWS"><a href=index.php?parent=Settings&amp;module=Workflows&amp;view=List&amp;sourceModule=Employees>Employees Workflows</a></li><li id="Employees_listview_advancedAction_LBL_EDIT_PICKLIST_VALUES"><a href=index.php?parent=Settings&amp;module=Picklist&amp;view=Index&amp;source_module=Employees>Picklists Values</a></li></ul></div></li></ul></div><!-- /.navbar-collapse --></div><!-- /.container-fluid --></nav></div></div></div></div>

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
				<div id="modnavigator" class="module-nav">
			<div class="hidden-xs hidden-sm mod-switcher-container">
				

<div id="modules-menu" class="modules-menu">
					<ul title="Campaigns" class="module-qtip">
			<li class="">
				<a href="index.php?module=Campaigns&view=List&app=MARKETING">
					<i class='vicon-campaigns' title='Campaigns'></i>
					<span>Campaigns</span>
				</a>
			</li>
		</ul>
					<ul title="Leads" class="module-qtip">
			<li class="">
				<a href="index.php?module=Leads&view=List&app=MARKETING">
					<i class='vicon-leads' title='Leads'></i>
					<span>Leads</span>
				</a>
			</li>
		</ul>
					<ul title="Contacts" class="module-qtip">
			<li class="">
				<a href="index.php?module=Contacts&view=List&app=MARKETING">
					<i class='vicon-contacts' title='Contacts'></i>
					<span>Contacts</span>
				</a>
			</li>
		</ul>
					<ul title="Business" class="module-qtip">
			<li class="">
				<a href="index.php?module=Accounts&view=List&app=MARKETING">
					<i class='vicon-accounts' title='Business'></i>
					<span>Business</span>
				</a>
			</li>
		</ul>
					<ul title="Opportunities" class="module-qtip">
			<li class="">
				<a href="index.php?module=Potentials&view=List&app=MARKETING">
					<i class='vicon-potentials' title='Opportunities'></i>
					<span>Opportunities</span>
				</a>
			</li>
		</ul>
					<ul title="MainServicestype" class="module-qtip">
			<li class="">
				<a href="index.php?module=Mainservicestype&view=List&app=MARKETING">
					<span class='custom-module' title='MainServicestype'>Ma</span>
					<span>MainServicestype</span>
				</a>
			</li>
		</ul>
					<ul title="SubServices" class="module-qtip">
			<li class="">
				<a href="index.php?module=Subservices&view=List&app=MARKETING">
					<span class='custom-module' title='SubServices'>Su</span>
					<span>SubServices</span>
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
                                <h6 class="lists-header  hide " >
                                                                            My List
                                                                    </h6>
                                <input type="hidden" name="allCvId" value="61" />
                                <ul class="lists-menu">
																                                                                    </ul>
								<div class='clearfix'> 
									 
										<a class="toggleFilterSize" data-more-text=" -10 more" data-less-text="Show less">
											 
										</a> 
									</div>
                             </div>
					                                                        <div class="list-group" id="sharedList">   
                                <h6 class="lists-header " >
                                                                            Shared List
                                                                    </h6>
                                <input type="hidden" name="allCvId" value="61" />
                                <ul class="lists-menu">																		<li style="font-size:12px;" class='listViewFilter  active   '> 
                                        			  <a class="filterName listViewFilterElipsis" href="index.php?module=Employees&view=List&viewname=61&app=MARKETING" oncontextmenu="return false;" data-filter-id="61" title="All">All</a> 
                                            <div class="pull-right">
                                                <span class="js-popover-container" style="cursor:pointer;">
                                                    <span  class="fa fa-angle-down" rel="popover" data-toggle="popover" aria-expanded="true" 
                                                                                                          toggleClass="fa fa-square-o" data-filter-id="61" 
                                                          data-is-default="" data-defaulttoggle="index.php?module=CustomView&source_module=Employees&action=SaveAjax&record=61" data-default="index.php?module=CustomView&view=EditAjax&source_module=Employees&source_viewname=61" data-isMine="true">
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
					                                                            								
							<input type="hidden" id='allFilterNames'  value='null'/>
                            <div id="filterActionPopoverHtml">
                                <ul class="listmenu hide" role="menu">
                                    <li role="presentation" class="editFilter">
                                            <a role="menuitem"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                        </li>
                                    <li role="presentation" class="deleteFilter">
                                            <a role="menuitem"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                    </li>
                                    <li role="presentation" class="duplicateFilter">
                                                <a role="menuitem" ><i class="fa fa-files-o"></i>&nbsp;Duplicate</a>
                                            </li>
                                    <li role="presentation" class="toggleDefault">
                                                <a role="menuitem" >
                                            <i data-check-icon="fa-check-square-o" data-uncheck-icon="fa-square-o"></i>&nbsp;Default
                                                </a>
                                            </li>
                                        </ul>
                            </div>

                                                <div class="list-group hide noLists">
                            <h6 class="lists-header"><center> No Lists found ... </center></h6>
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
                    <div id="listViewTagContainer" class="multiLevelTagList" 
                     data-view-id="61"                     data-list-tag-count="5">
                                                <div> 
                            <a class="moreTags  hide ">
                                <span class="moreTagCount">-5</span>
                                &nbsp;more
                            </a>
                            <div class="moreListTags hide">
                                                     </div>
                        </div>
                    </div>
                    <div class="showAllTagContainer hide"><div class="modal-dialog modal-lg"><div class="modal-content"><form class="detailShowAllModal"><div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><h4 class="pull-left">Add/Select Tag</h4></div></div>    <div class="modal-body"><div class="row"><div class="col-lg-6 selectTagContainer"><div class="form-group"><label class="control-label">Current Tags</label><div class="currentTagScroll"><div class="currentTag multiLevelTagList form-control"><span class="noTagsPlaceHolder" style="padding:3px;display:none;border:1px solid transparent;color:#999">No Tag Exists</span></div></div></div><div class="form-group"><label class="control-label">Select from available tags</label><div class="dropdown"><input class="form-control currentTagSelector dropdown-toggle" data-toggle="dropdown" placeholder="Type here to select an existing tag" /><div class="dropdown-menu currentTagMenu"><div class="scrollable" style="max-height:300px"><ul style="padding-left:0px;"><li class="dummyExistingTagElement tag-item list-group-item hide"><a style="margin-left:0px;"> 
 <span class="tag " title="" data-type="" data-id="">
    <i class="activeToggleIcon fa  fa-circle "></i>
    <span class="tagLabel display-inline-block textOverflowEllipsis" title=""></span>
        </span></a></li><li class="tag-item list-group-item"><span class="noTagExistsPlaceHolder" style="padding:3px;color:#999">No Tag Exists</span></li></ul></div></div></div></div></div><div class=" col-lg-6 selectTagContainerborder"><div class="form-group"><label class="control-label">Create new tag</label><div><input name="createNewTag" value="" class="form-control" placeholder="Enter tag name"/></div></div><div class="form-group"><div><div class="checkbox"><label><input type="hidden" name="visibility" value="private"/><input type="checkbox" name="visibility" value="public" />&nbsp; Public Tags</label></div><div class="pull-right"></div></div></div><div class="form-group"><div class=" vt-default-callout vt-info-callout tagInfoblock"><h5 class="vt-callout-header"><span class="fa fa-info-circle"></span>&nbsp; Info </h5><div>Use comma to separate multiple tags</div><br><div>Shared tags are accessible by all users in Vtiger</div><br><div>Go to Settings > My preferences > My Tags to Edit or Delete your private tags</div></div></div></div></div></div><div class="modal-footer "><center><button  class="btn btn-success" type="submit" name="saveButton"><strong>Save</strong></button><a href="#" class="cancelLink" type="reset" data-dismiss="modal">Cancel</a></center></div></form></div></div></div>
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
                                <input type="text" name="tagName" value="" style="width:100%" maxlength="25"/>
                            </div>
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" name="visibility" value="private"/>
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
		<div class="listViewPageDiv content-area " id="listViewContent">





<style type="text/css">
                                            </style>


<div class="col-sm-12 col-xs-12 ">
					<div class="essentials-toggle" title="Left Panel Show/Hide">
			<span class="essentials-toggle-marker fa fa-chevron-left cursorPointer"></span>
		</div>
		<input type="hidden" name="view" id="view" value="List" />
	<input type="hidden" name="cvid" value="61" />
	<input type="hidden" name="pageStartRange" id="pageStartRange" value="" />
	<input type="hidden" name="pageEndRange" id="pageEndRange" value="" />
	<input type="hidden" name="previousPageExist" id="previousPageExist" value="" />
	<input type="hidden" name="nextPageExist" id="nextPageExist" value="" />
	<input type="hidden" name="alphabetSearchKey" id="alphabetSearchKey" value= "employeesno" />
	<input type="hidden" name="Operator" id="Operator" value="" />
	<input type="hidden" name="totalCount" id="totalCount" value="" />
	<input type='hidden' name="pageNumber" value="1" id='pageNumber'>
	<input type='hidden' name="pageLimit" value="20" id='pageLimit'>
	<input type="hidden" name="noOfEntries" value="0" id="noOfEntries">
	<input type="hidden" name="currentSearchParams" value="[]" id="currentSearchParams" />
        <input type="hidden" name="currentTagParams" value="[]" id="currentTagParams" />
	<input type="hidden" name="noFilterCache" value="" id="noFilterCache" >
	<input type="hidden" name="orderBy" value="" id="orderBy">
	<input type="hidden" name="sortOrder" value="" id="sortOrder">
	<input type="hidden" name="list_headers" value='["employeesno","assigned_user_id","createdtime"]'/>
	<input type="hidden" name="tag" value="" />
	<input type="hidden" name="folder_id" value="" />
	<input type="hidden" name="folder_value" value="" />
	<input type="hidden" name="viewType" value="" />
	<input type="hidden" name="app" id="appName" value="MARKETING">
	<input type="hidden" id="isExcelEditSupported" value="yes" />
			<input type="hidden" name="picklistDependency" value='[]' />
				
<div id="listview-actions" class="listview-actions-container"><div class = "row"><div class=" col-md-3"><div class="btn-group listViewActionsContainer" role="group" aria-label="..."><button type="button" class="btn btn-default" id=Employees_listView_massAction_LBL_EDIT href="javascript:void(0);" onclick='Vtiger_List_Js.triggerMassEdit(&quot;index.php?module=Employees&amp;view=MassActionAjax&amp;mode=showMassEditForm&quot;);' title="Edit" disabled="disabled"><i class="fa fa-pencil"></i></button><button type="button" class="btn btn-default" id=Employees_listView_massAction_LBL_DELETE href="javascript:void(0);" onclick='Vtiger_List_Js.massDeleteRecords(&quot;index.php?module=Employees&amp;action=MassDelete&quot;);' title="Delete" disabled="disabled"><i class="fa fa-trash"></i></button><div class="btn-group listViewMassActions" role="group"><button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">More&nbsp;<span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li class="hide"><a id="Employees_listView_massAction_LBL_ADD_STAR" onclick="Vtiger_List_Js.triggerAddStar()">Follow</a></li><li class="hide"><a id="Employees_listView_massAction_LBL_REMOVE_STAR" onclick="Vtiger_List_Js.triggerRemoveStar()">Unfollow</a></li><li class="hide"><a id="Employees_listView_massAction_LBL_ADD_TAG" onclick="Vtiger_List_Js.triggerAddTag()">Add Tag</a></li><li class="divider hide" style="margin:9px 0px;"></li><li class="hide"><a id="Employees_listView_advancedAction_MERGE_RECORD"  href="javascript:void(0);" onclick='Vtiger_List_Js.triggerMergeRecord()'>Merge selected records</a></li><li class="selectFreeRecords"><a id="Employees_listView_advancedAction_LBL_FIND_DUPLICATES"  href="javascript:void(0);" onclick='Vtiger_List_Js.showDuplicateSearchForm(&quot;index.php?module=Employees&amp;view=MassActionAjax&amp;mode=showDuplicatesSearchForm&quot;);'>Find Duplicates</a></li><li class="selectFreeRecords"><a id="Employees_listView_advancedAction_LBL_EXPORT"  href="javascript:void(0);" onclick='Vtiger_List_Js.triggerExportAction(&quot;index.php?module=Employees&amp;view=Export&quot;);'>Export</a></li></ul></div></div></div><div class='col-md-6'><div class="hide messageContainer" style = "height:30px;"><center><a href="#" id="selectAllMsgDiv">Select all&nbsp;Employees&nbsp;(<span id="totalRecordsCount" value=""></span>)</a></center></div><div class="hide messageContainer" style = "height:30px;"><center><a href="#" id="deSelectAllMsgDiv">Deselect Records in all Pages</a></center></div></div><div class="col-md-3">                <div class = "listViewActions">
    <div class="btn-group pull-right">
        <button type="button" id="PreviousPageButton" class="btn btn-default"  disabled ><i class="fa fa-caret-left"></i></button>
                    <button type="button" id="PageJump" data-toggle="dropdown" class="btn btn-default">
                <i class="fa fa-ellipsis-h icon" title="Page Jump"></i>
            </button>
            <ul class="listViewBasicAction dropdown-menu" id="PageJumpDropDown">
                <li>
                    <div class="listview-pagenum">
                        <span >Page</span>&nbsp;
                        <strong><span>1</span></strong>&nbsp;
                        <span >of</span>&nbsp;
                        <strong><span id="totalPageCount"></span></strong>
                    </div>
                    <div class="listview-pagejump">
                        <input type="text" id="pageToJump" placeholder="Jump To" class="listViewPagingInput text-center"/>&nbsp;
                        <button type="button" id="pageToJumpSubmit" class="btn btn-success listViewPagingInputSubmit text-center">GO</button>
                    </div>    
                </li>
            </ul>
                <button type="button" id="NextPageButton" class="btn btn-default" disabled><i class="fa fa-caret-right"></i></button>
    </div>
    <span class="pageNumbers  pull-right" style="position:relative;top:7px;">
        <span class="pageNumbersText">
                                </span>
        &nbsp;<span class="totalNumberOfRecords cursorPointer hide" title="Click for this list size">of <i class="fa fa-question showTotalCountIcon"></i></span>&nbsp;&nbsp;
    </span>
</div></div></div></div>

	
	<div id="table-content" class="table-container">
		<form name='list' id='listedit' action='' onsubmit="return false;">
			<table id="listview-table" class="table listview-table-norecords  listview-table ">
				<thead>
					<tr class="listViewContentHeader">
						<th>
												<div class="table-actions">
						<div class="dropdown" style="float:left;">
							<span class="input dropdown-toggle" data-toggle="dropdown" title="Select all records in this page">
								<input class="listViewEntriesMainCheckBox" type="checkbox">
							</span>
						</div>
													<div id="listColumnFilterContainer">
								<div class="listColumnFilter "  
									 										 title="Click here to manage List columns"				 									 									 data-toggle="tooltip" data-placement="bottom" data-container="body">
									<i class="fa fa-th-large"></i>
								</div>
							</div>
											</div>
								</th>
																									<th >
						<a href="#" class="listViewContentHeaderValues" data-nextsortorderval="ASC" data-columnname="employeesno" data-field-id='904'>
																								<i class="fa fa-sort customsort"></i>
																						&nbsp;Employees No&nbsp;
						</a>
											</th>
																									<th >
						<a href="#" class="listViewContentHeaderValues" data-nextsortorderval="ASC" data-columnname="assigned_user_id" data-field-id='905'>
																								<i class="fa fa-sort customsort"></i>
																						&nbsp;Assigned To&nbsp;
						</a>
											</th>
																									<th >
						<a href="#" class="listViewContentHeaderValues" data-nextsortorderval="ASC" data-columnname="createdtime" data-field-id='906'>
																								<i class="fa fa-sort customsort"></i>
																						&nbsp;Created Time&nbsp;
						</a>
											</th>
								</tr>

				                                    <tr class="searchRow listViewSearchContainer">
                                        <th class="inline-search-btn">
                                            <div class="table-actions">
                                                <button class="btn btn-success btn-sm " data-trigger="listSearch">
                                                    <i class="fa fa-search"></i> &nbsp;
                                                    <span class="s2-btn-text">Search</span>
                                                </button>
                                                <button class="searchAndClearButton t-btn-sm btn btn-danger hide" data-trigger="clearListSearch"><i class="fa fa-close"></i>&nbsp;Clear</button>
                                            </div>
                                        </th>
                                    						<th>
														<div class=""><input type="text" name="employeesno" class="listSearchContributor inputElement" value="" data-field-type="string" data-fieldinfo='{&quot;mandatory&quot;:true,&quot;presence&quot;:true,&quot;quickcreate&quot;:true,&quot;masseditable&quot;:true,&quot;defaultvalue&quot;:false,&quot;column&quot;:&quot;employeesno&quot;,&quot;type&quot;:&quot;string&quot;,&quot;name&quot;:&quot;employeesno&quot;,&quot;label&quot;:&quot;Employees No&quot;,&quot;validator&quot;:[]}'/></div>
							<input type="hidden" class="operatorValue" value="">
						</th>
											<th>
														<div class="select2_search_div"><input type="text" class="listSearchContributor inputElement select2_input_element"/><select class="select2 listSearchContributor assigned_user_id" name="assigned_user_id" multiple data-fieldinfo='{&quot;mandatory&quot;:true,&quot;presence&quot;:true,&quot;quickcreate&quot;:true,&quot;masseditable&quot;:true,&quot;defaultvalue&quot;:false,&quot;column&quot;:&quot;smownerid&quot;,&quot;type&quot;:&quot;owner&quot;,&quot;name&quot;:&quot;assigned_user_id&quot;,&quot;label&quot;:&quot;Assigned To&quot;,&quot;picklistvalues&quot;:{&quot;Users&quot;:{&quot;1&quot;:&quot;admin Administrator&quot;},&quot;Groups&quot;:{&quot;3&quot;:&quot;Marketing Group&quot;,&quot;4&quot;:&quot;Support Group&quot;,&quot;2&quot;:&quot;Team Selling&quot;}},&quot;validator&quot;:[]}' style="display:none"><optgroup label="Users"><option value="admin Administrator" data-picklistvalue= 'admin Administrator'  data-recordaccess=true data-userId="">admin Administrator</option></optgroup><optgroup label="Groups"><option value="Marketing Group" data-picklistvalue= 'Marketing Group'  data-recordaccess=true  >Marketing Group</option><option value="Support Group" data-picklistvalue= 'Support Group'  data-recordaccess=true  >Support Group</option><option value="Team Selling" data-picklistvalue= 'Team Selling'  data-recordaccess=true  >Team Selling</option></optgroup></select></div>
							<input type="hidden" class="operatorValue" value="">
						</th>
											<th>
														<div class="row-fluid"><input type="text" name="createdtime" class="listSearchContributor inputElement dateField" data-date-format="dd-mm-yyyy" data-calendar-type="range" value="" data-fieldinfo='{&quot;mandatory&quot;:false,&quot;presence&quot;:true,&quot;quickcreate&quot;:false,&quot;masseditable&quot;:true,&quot;defaultvalue&quot;:false,&quot;column&quot;:&quot;createdtime&quot;,&quot;type&quot;:&quot;datetime&quot;,&quot;name&quot;:&quot;createdtime&quot;,&quot;label&quot;:&quot;Created Time&quot;,&quot;date-format&quot;:&quot;dd-mm-yyyy&quot;,&quot;validator&quot;:[]}'  data-field-type="datetime"/></div>
							<input type="hidden" class="operatorValue" value="">
						</th>
										</tr>
								</thead>
				<tbody class="overflow-y">
														<tr class="emptyRecordsDiv">
												<td colspan="4">
							<div class="emptyRecordsContent">
																No Employees found.
																	<a style="color:blue" href="index.php?module=Employees&view=Edit"> Create</a>
																			or
										<a style="color:blue" href="#" onclick="return Vtiger_Import_Js.triggerImportAction()">Import</a>
										Employees
																								</div>
						</td>
					</tr>
								</tbody>
			</table>
		</form>
	</div>
	<div id="scroller_wrapper" class="bottom-fixed-scroll">
		<div id="scroller" class="scroller-div"></div>
	</div>
</div>
	</div>
</div>




	</div>
</div>
</div>
<footer class="app-footer">
	<p>
		Powered by vtiger CRM - 7.3.0&nbsp;&nbsp;© 2004 - 2021&nbsp;&nbsp;
		<a href="//www.vtiger.com" target="_blank">Vtiger</a>&nbsp;|&nbsp;
		<a href="https://www.vtiger.com/privacy-policy" target="_blank">Privacy Policy</a>
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

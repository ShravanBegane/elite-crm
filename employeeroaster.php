<!DOCTYPE html>
<html>
	<head>
		<title>Employees Roster</title>
		<link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<style>
        .module-nav .modules-menu{
            position: relative !important;
                height: 500px !important;
        }
        .custombtn{
            width:50% !important;
   margin-left: 40px !important;
     margin-right: 40px !important;
            border-radius:20px !important;
        }
        

.btn-default
{
    background-color:white !important;
    background-image: none !important;
    background:none !important;
}
       
    </style>

		
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/bootstrap.min.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/docs.min.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/todc-bootstrap.min.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/font-awesome/css/font-awesome.min.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/select2/select2.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/select2-bootstrap/select2-bootstrap.css'>
		<link type='text/css' rel='stylesheet' href='libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/vt-icons/style.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/animate/animate.min.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css'>
		<link type='text/css' rel='stylesheet' href='layouts/v7/lib/jquery/daterangepicker/daterangepicker.css'>
		<input type="hidden" id="inventoryModules" value=["Invoice","Quotes","PurchaseOrder","SalesOrder"]>
		<link type="text/css" rel="stylesheet" href="layouts/v7/skins/marketing/style.css?v=7.3.0" media="screen" />
		<link type="text/css" rel="stylesheet" href="layouts/v7/lib/jquery/timepicker/jquery.timepicker.css?v=7.3.0" media="screen" />
		<link type="text/css" rel="stylesheet" href="libraries/jquery/lazyYT/lazyYT.min.css?v=7.3.0" media="screen" />
		<link type="text/css" rel="stylesheet" href="layouts/v7/lib/jquery/perfect-scrollbar/css/perfect-scrollbar.css?v=7.3.0" media="screen" />


 <?php  include("api/getallemployees.php"); ?>
		<style type="text/css">
			@media print {.noprint { display:none; }}
		</style>
		<script type="text/javascript">var __pageCreationTime = (new Date()).getTime();</script>
		<script src="layouts/v7/lib/jquery/jquery.min.js?v=7.3.0"></script>
		<script src="layouts/v7/lib/jquery/jquery-migrate-1.0.0.js?v=7.3.0"></script>
		<script type="text/javascript">
			var _META = { 'module': "Employees", view: "List", 'parent': "", 'notifier':"", 'app':"MARKETING" };
			var _USERMETA;_USERMETA =  { 'id' : "1", 'menustatus' : "0",'currency' : "₹", 'currencySymbolPlacement' : "$1.0",'currencyGroupingPattern' : "123,456,789", 'truncateTrailingZeros' : "1"};
		</script>
		<script type="text/javascript">
		if (top != self) {top.location.href = self.location.href;}</script>
		<script type="text/javascript">var csrfMagicToken = "sid:344e5ebc7befafa1f9cf3728d8072f93608782bd,1609928042";var csrfMagicName = "__vtrftk";</script>
		<script src="libraries/csrf-magic/csrf-magic.js" type="text/javascript"></script>
	</head>

	<body data-skinpath="layouts/v7/skins" data-language="en_us" data-user-decimalseparator="." data-user-dateformat="dd-mm-yyyy"data-user-groupingseparator="," data-user-numberofdecimals="2" data-user-hourformat="12"data-user-calendar-reminder-interval="60">
		<input type="hidden" id="start_day" value="Sunday" />
		<div id="page" style="margin-top: 0px">
			<div id="pjaxContainer" class="hide noprint"></div>
			<div id="messageBar" class="hide"></div>
			<nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar">
				<div class="container-fluid global-nav">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-8 app-navigator-container">
							<div class="row">
								<div id="appnavigator" class="col-sm-2 col-xs-2 cursorPointer app-switcher-container" data-app-class="fa-users">
									<div class="row app-navigator">
										<span class="app-icon fa fa-bars"></span>
									</div>
								</div>
								<div class="logo-container col-sm-3 col-xs-9">
									<div class="row">
										<a href="index.php" class="company-logo"><img src="test/logo/vtiger-crm-logo.png" alt="vtiger-crm-logo.png"/></a>
									</div>
								</div>
							</div>
						</div>
						<div class="navbar-header paddingTop5">
							<button type="button" class="navbar-toggle collapsed border0" data-toggle="collapse" data-target="#navbar" aria-expanded="false"><i class="fa fa-th"></i></button>
							<button type="button" class="navbar-toggle collapsed border0" data-toggle="collapse" data-target="#search-links-container" aria-expanded="false"><i class="fa fa-search"></i></button>
						</div>
						<div class="col-sm-3">
							<div id="search-links-container" class="search-links-container collapse navbar-collapse">
								<div class="search-link">
									<span class="fa fa-search" aria-hidden="true"></span>
									<input class="keyword-input" type="text" placeholder="Type to search" value="">
									<span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span>
								</div>
							</div>
						</div>
						<div id="navbar" class="col-sm-6 col-xs-12 collapse navbar-collapse navbar-right global-actions">	 <ul class="nav navbar-nav">
								<li>
									<div class="dropdown pull-left">
										<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											<a href="#" id="menubar_quickCreate" class="qc-button fa fa-plus-circle" title="Quick Create" aria-hidden="true"></a>
										</div>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
											<li class="title" style="padding: 5px 0 0 15px;"><strong>Quick Create</strong></li><hr/>
											<li id="quickCreateModules" style="padding: 0 5px;"><div class="col-lg-12" style="padding-bottom:15px;">
												<div class="row">
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Campaigns" class="quickCreateModule" data-name="Campaigns"data-url="index.php?module=Campaigns&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-campaigns' title='Campaigns'></i><span class="quick-create-module">Campaign</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Leads" class="quickCreateModule" data-name="Leads"data-url="index.php?module=Leads&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-leads' title='Leads'></i><span class="quick-create-module">Lead</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Contacts" class="quickCreateModule" data-name="Contacts"data-url="index.php?module=Contacts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-contacts' title='Contacts'></i><span class="quick-create-module">Contact</span></a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Accounts" class="quickCreateModule" data-name="Accounts"data-url="index.php?module=Accounts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-accounts' title='Business'></i><span class="quick-create-module">Business</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Potentials" class="quickCreateModule" data-name="Potentials"data-url="index.php?module=Potentials&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-potentials' title='Opportunities'></i><span class="quick-create-module">Opportunity</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_HelpDesk" class="quickCreateModule" data-name="HelpDesk"data-url="index.php?module=HelpDesk&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-helpdesk' title='Tickets'></i><span class="quick-create-module">Ticket</span></a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Project" class="quickCreateModule" data-name="Project"data-url="index.php?module=Project&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-project' title='Projects'></i><span class="quick-create-module">Project</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Assets" class="quickCreateModule" data-name="Assets"data-url="index.php?module=Assets&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-assets' title='Assets'></i><span class="quick-create-module">Asset</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_ServiceContracts" class="quickCreateModule" data-name="ServiceContracts"data-url="index.php?module=ServiceContracts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-servicecontracts' title='Service Contracts'></i><span class="quick-create-module">Service Contract</span></a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Products" class="quickCreateModule" data-name="Products"data-url="index.php?module=Products&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-products' title='Products'></i><span class="quick-create-module">Product</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Services" class="quickCreateModule" data-name="Services"data-url="index.php?module=Services&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-services' title='Services'></i><span class="quick-create-module">Service</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_PriceBooks" class="quickCreateModule" data-name="PriceBooks"data-url="index.php?module=PriceBooks&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-pricebooks' title='Price Books'></i><span class="quick-create-module">Price Book</span></a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Vendors" class="quickCreateModule" data-name="Vendors"data-url="index.php?module=Vendors&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-vendors' title='Vendors'></i><span class="quick-create-module">Vendor</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events"data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-calendar' title='Calendar'></i><span class="quick-create-module">Event</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Calendar" class="quickCreateModule" data-name="Calendar"data-url="index.php?module=Calendar&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-task' title='Calendar' ></i><span class="quick-create-module">Task</span></a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-lg-4 col-xs-4 dropdown">
														<a id="menubar_quickCreate_Documents" class="quickCreateModuleSubmenu dropdown-toggle" data-name="Documents" data-toggle="dropdown"data-url="index.php?module=Documents&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-documents' title='Documents'></i><span class="quick-create-module">Document<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i></span></a>
														<ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_Documents">
															<li class="dropdown-header"><i class="fa fa-upload"></i> File Upload</li>
															<li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png">To Vtiger</a></li>
															<li class="dropdown-header"><i class="fa fa-link"></i> Link External Document</li>
															<li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; From File Url</a></li>
															<li role="separator" class="divider"></li>
															<li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> Create New Document</a></li>
														</ul>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_ProjectTask" class="quickCreateModule" data-name="ProjectTask"data-url="index.php?module=ProjectTask&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-projecttask' title='Project Tasks'></i><span class="quick-create-module">Project Task</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_ProjectMilestone" class="quickCreateModule" data-name="ProjectMilestone"data-url="index.php?module=ProjectMilestone&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-projectmilestone' title='Project Milestones'></i><span class="quick-create-module">Project Milestone</span></a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Mainservicestype" class="quickCreateModule" data-name="Mainservicestype"data-url="index.php?module=Mainservicestype&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='MainServicestype'>Ma</span><span class="quick-create-module">MainServicestype</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Transaction" class="quickCreateModule" data-name="Transaction"data-url="index.php?module=Transaction&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Transaction'>Tr</span><span class="quick-create-module">Transaction</span></a>
													</div>
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Subservices" class="quickCreateModule" data-name="Subservices"data-url="index.php?module=Subservices&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='SubServices'>Su</span><span class="quick-create-module">SubServices</span></a>
													</div>
												</div><br>
												<div class="row">
													<div class="col-lg-4 col-xs-4">
														<a id="menubar_quickCreate_Employees" class="quickCreateModule" data-name="Employees"data-url="index.php?module=Employees&view=QuickCreateAjax" href="javascript:void(0)"><span class='custom-module' title='Employees'>Em</span><span class="quick-create-module">SINGLE_Employees</span></a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<div>
										<a href="index.php?module=Calendar&view=Calendar" class="fa fa-calendar" title="Calendar" aria-hidden="true"></a>
									</div>
								</li>
								<li>
									<div><a href="index.php?module=Reports&view=List" class="fa fa-bar-chart" title="Reports" aria-hidden="true"></a>
									</div>
								</li>
								<li>
									<div><a href="#" class="taskManagement vicon vicon-task" title="Tasks" aria-hidden="true"></a>
									</div>
								</li>
								<li class="dropdown">
									<div>
										<a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button"><span class="fa fa-user" aria-hidden="true" title="admin Administrator(admin)"></span><span class="link-text-xs-only hidden-lg hidden-md hidden-sm">admin Administrator</span></a>
										<div class="dropdown-menu logout-content" role="menu">
											<div class="row">
												<div class="col-lg-4 col-sm-4">
													<div class="profile-img-container">
														<i class='vicon-vtigeruser' style="font-size:90px"></i>
													</div>
												</div>
												<div class="col-lg-8 col-sm-8">
													<div class="profile-container">
														<h4>admin Administrator</h4>
														<h5 class="textOverflowEllipsis" title='admin'>admin</h5>
														<p>CEO</p>
													</div>
												</div>
											</div>
											<div id="logout-footer" class="logout-footer clearfix">
												<hr style="margin: 10px 0 !important">
												<div class="">
													<span class="pull-left"><span class="fa fa-cogs"></span>
													<a id="menubar_item_right_LBL_MY_PREFERENCES" href="index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1">My Preferences</a></span>
													<span class="pull-right"><span class="fa fa-power-off"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Users&action=Logout">Sign Out</a></span>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>		
				</div>
				<div class="container-fluid app-nav">
					<div class="row">
						<div class="col-sm-1 col-xs-2 app-indicator-icon-container app-MARKETING">
							<div class="row" title="RIGHT CLEAN">
								<span class="app-icon-list fa fa-hand-paper-o"></span>
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
										<span class="app-name textOverflowEllipsis"> Right View </span>
									</div>
								</div>
								<div class="dropdown app-modules-dropdown-container">
																													
									<div class="menu-item app-item dropdown-toggle app-item-color-RIGHT CLEAN" data-app-name="RIGHT CLEAN" id="RIGHT CLEAN_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
										<div class="menu-items-wrapper app-menu-items-wrapper">
											<span class="app-icon-list fa fa-hand-paper-o"></span>
											<span class="app-name textOverflowEllipsis"> Right Clean </span>
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
											<a href="index.php?module=Transcationdetails&view=List&app=MARKETING" title="Transcation Details">
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
											<a href="locationmap.php" title="Employee Tracking">
												<span class="module-icon"><i class="fa  fa-map-marker fa-1x" title='Employee Tracking'></i></span>
												<span class="module-name textOverflowEllipsis">&nbspEmployee Tracking</span>
											</a>
										</li>
										<li>
											<a href="employeeroaster.php" title="Employee Roster">
												<span class="module-icon"><i class="fa fa-history fa-1x" title='Employee Roster'></i></span>
												<span class="module-name textOverflowEllipsis"> Employee Roster</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="dropdown app-modules-dropdown-container">
																													
									<div class="menu-item app-item dropdown-toggle app-item-color-RIGHT CLEAN" data-app-name="RIGHT CLEAN" id="RIGHT CLEAN_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
										<div class="menu-items-wrapper app-menu-items-wrapper">
											<span class="app-icon-list fa fa-desktop"></span>
											<span class="app-name textOverflowEllipsis"> Right Reception</span>
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
											<span class="app-name textOverflowEllipsis"> Right CRM</span>
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
											
																</ul>
								</div>
								<div class="dropdown app-modules-dropdown-container">
																																					
									<div class="menu-item app-item dropdown-toggle app-item-color-SALES" data-app-name="SALES" id="SALES_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
										<div class="menu-items-wrapper app-menu-items-wrapper">
											<span class="app-icon-list fa fa-dot-circle-o"></span>
											<span class="app-name textOverflowEllipsis"> Sales</span>
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
											<span class="app-name textOverflowEllipsis"> Inventory</span>
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
											<span class="app-name textOverflowEllipsis"> Support</span>
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
											<span class="app-name textOverflowEllipsis"> Projects</span>
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
											<span class="app-name textOverflowEllipsis"> Tools</span>
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
					<div class="col-sm-11 col-xs-10 padding0 module-action-bar clearfix coloredBorderTop">
						<div class="module-action-content clearfix Employees-module-action-content">
							<div class="col-lg-7 col-md-6 col-sm-5 col-xs-11 padding0 module-breadcrumb module-breadcrumb-List transitionsAllHalfSecond">
								<a title="Employees" href='index.php?module=Employees&view=List&viewname=61&app=MARKETING'><h4 class="module-title pull-left text-uppercase"> Employees </h4>&nbsp;&nbsp;</a>
								<p class="current-filter-name filter-name pull-left cursorPointer" title="All"><span class="fa fa-angle-right pull-left" aria-hidden="true"></span><a href='index.php?module=Employees&view=List&viewname=61&app=MARKETING'>&nbsp;&nbsp;All&nbsp;&nbsp;</a> </p>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-7 col-xs-1 padding0 pull-right">
								<div id="appnav" class="navbar-right">
									<nav class="navbar navbar-inverse border0 margin0">
										<div class="container-fluid">
											<div class="navbar-header bg-white marginTop5px"><button type="button" class="navbar-toggle collapsed margin0" data-toggle="collapse" data-target="#appnavcontent" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button></div>
											<div class="navbar-collapse collapse" id="appnavcontent" aria-expanded="false" style="height: 1px;">
												<ul class="nav navbar-nav"></ul>
											</div><!-- /.navbar-collapse -->
										</div><!-- /.container-fluid -->
									</nav>
								</div>
							</div>
						</div>
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
				<div id="modnavigator" class="module-nav">
					<div class="hidden-xs hidden-sm mod-switcher-container">
				
						<div id="modules-menu" class="modules-menu">
							<ul title="Clients" class="module-qtip">
								<li class="">
									<a href="index.php?module=Accounts&view=List&app=MARKETING">
										<i class='fa fa-users fa-1x' title='Clients'></i>
										<span> Clients </span>
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
							<ul title="MainServicestype" class="module-qtip">
								<li class="">
									<a href="index.php?module=Mainservicestype&view=List&app=MARKETING">
										<i class='vicon-services' title='MainServicestype'></i>
										<span>MainServicestype</span>
									</a>
								</li>
							</ul>
							<ul title="SubServices" class="module-qtip">
								<li class="">
									<a href="index.php?module=Subservices&view=List&app=MARKETING">
										<i class='fa fa-wrench' title='SubServices'></i>
										<span>SubServices</span>
									</a>
								</li>
							</ul>
							<ul title="Transcation Details" class="module-qtip">
								<li class="">
									<a href="index.php?module=Transaction&view=List&app=MARKETING">
										<i class='fa fa-exchange' title='Transcation Details'></i>
										<span>Transcation Details</span>
									</a>
								</li>
							</ul>
							<ul title="Employee Managment" class="module-qtip">
								<li class="">
									<a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1">
										<i class='fa fa-user fa-1x' title='Employee Managment'></i>
										<span>Employee Managment</span>
									</a>
								</li>
							</ul>
							<ul title="Employee Tracking" class="module-qtip">
								<li class="">
									<a href="locationmap.php">
										<i class='fa fa-map-marker fa-1x' title='Employee Tracking'></i>
										<span>Employee Tracking</span>
									</a>
								</li>
							</ul>
							<ul title="Employee Roster" class="module-qtip">
								<li class="" style="background-color:black">
									<a href="employeeroaster.php">
										<i class='fa fa-history fa-1x' title='Employee Roster'></i>
										<span>Employee Roster</span>
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
                                			<h6 class="lists-header  hide " > My List </h6>
                                			<input type="hidden" name="allCvId" value="61" />
                            				<ul class="lists-menu"></ul>
											<div class='clearfix'> 
								 				<a class="toggleFilterSize" data-more-text=" -10 more" data-less-text="Show less"></a> 
											</div>
					                    </div>
					                    <div class="list-group" id="sharedList">   
                              				<h6 class="lists-header " >Shared List</h6>
			                                <input type="hidden" name="allCvId" value="61" />
			                                <ul class="lists-menu">		
			                                	<li style="font-size:12px;" class='listViewFilter  active' >           
			                                		<a class="filterName listViewFilterElipsis" href="index.php?module=Employees&view=List&viewname=61&app=MARKETING" oncontextmenu="return false;" data-filter-id="61" title="All">All</a> 
		                                            <div class="pull-right">
		                                                <span class="js-popover-container" style="cursor:pointer;">
		                                                    <span  class="fa fa-angle-down" rel="popover" data-toggle="popover" aria-expanded="true" toggleClass="fa fa-square-o" data-filter-id="61" 
		                                                          data-is-default="" data-defaulttoggle="index.php?module=CustomView&source_module=Employees&action=SaveAjax&record=61" data-default="index.php?module=CustomView&view=EditAjax&source_module=Employees&source_viewname=61" data-isMine="true">
		                                                    </span>
		                                                </span>
                                            		</div>
                                            	</li>
                                            </ul>
											<div class='clearfix'> 
												<a class="toggleFilterSize" data-more-text=" -9 more" data-less-text="Show less"></a> 
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
			                                        <a role="menuitem"><i data-check-icon="fa-check-square-o" data-uncheck-icon="fa-square-o"></i>&nbsp;Default</a>
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
					            <h5 class="lists-header"> Tags </h5> <hr>
					            <div class="menu-scroller scrollContainer" style="position:relative; top:0; left:0;">
					                <div class="list-menu-content">
					                    <div id="listViewTagContainer" class="multiLevelTagList" data-view-id="61" data-list-tag-count="5">
					                        <div> 
					                            <a class="moreTags  hide ">
					                                <span class="moreTagCount">-5</span>
					                                &nbsp;more
					                            </a>
					                            <div class="moreListTags hide"></div>
					                        </div>
					                    </div>
                    					<div class="showAllTagContainer hide">
                    						<div class="modal-dialog modal-lg">
                    							<div class="modal-content">
                    								<form class="detailShowAllModal">
                    									<div class="modal-header">
                    										<div class="clearfix">
                    											<div class="pull-right " >
                    												<button type="button" class="close" aria-label="Close" data-dismiss="modal">
                    													<span aria-hidden="true" class='fa fa-close'></span>
                    												</button>
                    											</div>
                    											<h4 class="pull-left">Add/Select Tag</h4>
                    										</div>
                    									</div>
                    									    <div class="modal-body">
                    									    	<div class="row">
                    									    		<div class="col-lg-6 selectTagContainer">
                    									    			<div class="form-group">
                    									    				<label class="control-label">Current Tags</label>
                    									    				<div class="currentTagScroll">
                    									    					<div class="currentTag multiLevelTagList form-control">
                    									    						<span class="noTagsPlaceHolder" style="padding:3px;display:none;border:1px solid transparent;color:#999">No Tag Exists</span>
                    									    					</div>
                    									    				</div>
                    									    			</div>
                    									    			<div class="form-group">
                    									    				<label class="control-label">Select from available tags</label>
                    									    				<div class="dropdown">
                    									    					<input class="form-control currentTagSelector dropdown-toggle" data-toggle="dropdown" placeholder="Type here to select an existing tag" />
                    									    					<div class="dropdown-menu currentTagMenu">
                    									    						<div class="scrollable" style="max-height:300px"><ul style="padding-left:0px;"><li class="dummyExistingTagElement tag-item list-group-item hide"><a style="margin-left:0px;"> 
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

		            <div class="listViewPageDiv content-area " id="listViewContent" style="min-height: auto;">
                <!--map--->
              <?php //include_once('api/getallemployees.php') ?>
              <?php include_once('config.inc.php') ?>
                <div class="col-sm-12 col-md-12">
            
            
         
            
                 
     
        
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12" >
                <h3>Period: </h3>
                 <button data-toggle="collapse" class="btn btn-primary" data-target="#demo" style="margin-bottom:10px;">Select Period</button>
           
          
             <div id="demo" class="collapse" >
               <form action="<?php echo $site_URL ?>list_roster_emp.php" method="post">
                <input type="hidden" name="in_time1" class="form-control" id="intime" required>
                     <input type="hidden" name="out_time1" class="form-control" id="outtime" required> 
                 <button type="submit" onclick="today()" class="btn btn-default custombtn"> Today</button>
                 
                 <button type="submit" onclick="yesterday()" class="btn btn-default custombtn"> Yesterday</button>
                 
                  <button type="submit" onclick="weeks()" class="btn btn-default custombtn"> Week</button>
                  
                  <button type="submit" onclick="month()" class="btn btn-default custombtn"> Month</button>
                  <button type="button" onclick="show()" class="btn btn-default custombtn"> Custom Range</button>
        
            </form>

            </div>
                  <div style="display:none" class="custom" >
                
                <form action="<?php echo $site_URL ?>list_roster_emp.php" method="post">
                     <div class="row" style="margin-top:15px !important;">
                   
                    <div class="col-lg-5 md-5 col-sm-5" style="margin-left:0px !important;">

                        <span style="padding-left:10px;"><label>From</label></span>

                        <input type="date" name="in_time1" class="form-control" value="<?php if(isset($in_time4)){ echo  $in_time4;}else{  $date=strtotime(date('Y-m-d')); $newDate = date('Y-m-d',strtotime('-15 days',$date));echo $newDate;}?>"  required>
                    </div>
                    <div class="col-lg-5 md-5 col-sm-5">
                        <span style="padding: auto; margin: auto;">
                       <label> To</label>
                        </span>
                        <input type="date" name="out_time1" value="<?php if(isset($out_time4)){ echo  $out_time4;}else{  echo date("Y-m-d");}?>" class="form-control" required>
                   </div> <div class="col-lg-1 md-1 col-sm-1">
                   <button type="submit"  style="margin-top:16px;     background: none; border: none;"><i class="fa fa-arrow-circle-right fa-2x" style="color:green"></i></button> 
                  </div>   </div>
</form></div>
  <h4> <b>Add Employee Info<b> <button type="button" data-toggle="modal" style="border:none;background: none;" data-target="#mynewModal"><i class="fa fa-plus " style="color: orange"></i></button>  </h4>
                <h3>Employee list :</h3>
                <div style="padding-left: 100px; ">




  <form action="<?php echo $site_URL ?>frontend_roster.php" method="post" id="mm">
      
 <input type="hidden" name="in_time" class="form-control"  value="<?php if(isset($data[0])){echo $data[0];
                     }else{echo $in_time4;}?>"  required>
                     <input type="hidden" name="out_time"  class="form-control" value="<?php if(isset($data[1])){echo $data[1];
                     }else{ echo $out_time4; }?>" required> 
    <?php 
     
    if(isset($ok)){
if(isset($value1))
{$value=array();
    $value=$value1;
}

  $count = sizeof($value); ?>
                            <?php for ($i = 0; $i < $count; $i++) { ?>
        <input type="submit" class="btn-sucess" name="names" value="<?php echo $value[$i] ?>" style="width:50%; display:block; margin-top:3px; border:none; font-size:14px">
           <?php }} ?>
 </form>
                </div> 
            </div>
            
            
            
            
            
         
            <div class="col-lg-7 col-md-7 col-sm-12">
                
                
                  <h3>Employee Information </h3>
                
           
                     
                     
                <?php if(isset($movefrwd)){?>
                <h4>Employee Name :   <?php echo $data[2]?> </h4>
                 <h4>Date : <?php echo $data[0]?>   TO   <?php echo $data[1]?> UTC</h4>
                  <h4>Total Working Hours : <?php echo $data[3]?> </h4>
                  
                <?php } ?> <h5 id="status" style="color:green;"></h5><hr>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>In</th>
                                <th>Out</th>
                                <th>Working Hours</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

<?php if(isset($movefrwd)){
    $temp="";

 $countss = sizeof($dates); for ($i = 0; $i < $countss; $i++) { 

 ?>
 <tr>
                                <td><?php echo $dates[$i]?> <a href="#" type="button"  data-toggle="modal" data-target="#myModal1" onclick="insertdata(<?php echo $ids[$i]; ?>)" > <i class="fa fa-plus-circle pull-right"style="color:blue;"></i></a></td>
                                <td><?php echo $employeeintime[$i]?></td>
                                <td><?php echo $employeeouttime[$i]?></td>
                                <td><?php echo $working[$i]?></td>
                                 <td><a href="#" type="button"  data-toggle="modal" data-target="#myModal" onclick="getdata(<?php echo $ids[$i]; ?>)" ><i class="fa fa-pencil "style="color:green; margin-left:5px;"></i></a> <a   onclick="deletedata(<?php echo $ids[$i]; ?>)" href="#"><i class="fa fa-trash" style="color:red; margin-left:5px;"></i></a></td>
                            </tr>
                            
                            
                            
                            <?php    } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
            
                 
                 
                
                 

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <?php  //include("getallemployees.php"); ?>
    <?php //include('api/getallemployees.php'); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Update  <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
        </div>
        <div class="modal-body">
				    
					<form action="<?php echo $site_URL ?>api/updatedata.php" method="POST" autocomplete="off" id="myForm">
					 <small for="">Id :</small>
						        <input  type="text" class="form-control"  name="ids" id="ids" required readonly>
						 <small for="">Name :</small>
						        <input  type="text" class="form-control"  name="names" id="names" required readonly>
						 <small for="">Employee id :</small>
						        <input  type="text" class="form-control"  name="employee_id" id="employee_id" required readonly>
						        		 <small for="">Date :</small>
						        <input  type="date" class="form-control"  name="date" id="date"  required >
						 <small for="">In time :</small>
						        <input  type="time" class="form-control"  name="in_time" step="any" id="in_time" required >
					 <small for="">Out time :</small>
						        <input  type="time" class="form-control"  name="out_time"  step="any" id="out_time" required>
							 <input  type="hidden"   name="vt_usr" required value="admin">
					  <input  type="hidden"  name="vt_usr_key"  required value="Comxtech@321">
						
						<div class="formstatus"></div>
					
								<input type="submit" value="update" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px">
						
					</form>
				</div>
			</div>
		</div>
	</div>



        
        
        
        <div class="modal fade" id="mynewModal" role="dialog">
    <div class="modal-dialog">

    <?php  //include("api/getallemployees.php"); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add New Record  <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
        </div>
        <div class="modal-body">
				    
					<form action="<?php echo $site_URL ?>api/insertrosterdata.php" method="POST" autocomplete="off" id="myForm3">
				
						 <small for="">Employee id :</small>
						    
						          
			<select type="number" class="form-control"  name="newemployee_id"  required >			          
						          <?php 

 $countss = sizeof($namelist); 
 for ($i = 0; $i < $countss; $i++) { 

 ?>

  <option value="<?php echo $empid_list[$i]?>"><?php echo $namelist[$i]?></option>

                            
                            
                            
                            
                            
                            <?php    } ?>
						          
						     </select>     
						          
						        		 <small for="">Date :</small>
						        <input  type="date" class="form-control"  name="newdate"   value="<?php echo date('Y-m-d'); ?>" required >
						 <small for="">In time :</small>
						        <input  type="time" class="form-control"  name="newin_time"  required  value="<?php echo date('h:i:s'); ?>">
					 <small for="">Out time :</small>
						        <input  type="time" class="form-control"  name="newout_time"  required value="<?php echo date('h:i:s');?>">
						
							 <input  type="hidden"   name="vt_usr" required value="admin">
					  <input  type="hidden"  name="vt_usr_key"  required value="Comxtech@321">
						<div class="formstatus"></div>
					
								<input type="submit" value="Insert" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px">
						
					</form>
				</div>
			</div>
		</div>
	</div>
        
        
        
                         

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    <?php  //include("api/getallemployees.php"); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add New Record  <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
        </div>
        <div class="modal-body">
				    
					<form action="<?php echo $site_URL ?>api/insertrosterdata.php" method="POST" autocomplete="off" id="myForm2">
				
						 <small for="">Employee id :</small>
						        <input  type="text" class="form-control"  name="newemployee_id" id="employee_id1" required readonly>
						        		 <small for="">Date :</small>
						        <input  type="date" class="form-control"  name="newdate" id="date1" required >
						 <small for="">In time :</small>
						        <input  type="time" class="form-control"  name="newin_time" id="in_time1" required  value="<?php echo date('h:i:s');?>">
					 <small for="">Out time :</small>
						        <input  type="time" class="form-control"  name="newout_time" id="out_time1" required value="<?php echo date('h:i:s');?>">
					 <input  type="hidden"   name="vt_usr" required value="admin">
					  <input  type="hidden"  name="vt_usr_key"  required value="Comxtech@321">
						<div class="formstatus"></div>
					
								<input type="submit" value="Insert" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px">
						
					</form>
				</div>
			</div>
		</div>
	</div>
        
        
        
                 
                
     <script>
     
     
     
  function fixit(selector) {
    selector.each(function () {
        var values = $(this).find("tr>td:first-of-type")
        var run = 1
  
       console.log(values);
        for (var i=values.length-1;i>-1;i--){
            
            if ( values.eq(i).text()=== values.eq(i-1).text() && i!=0){
                
                values.eq(i).remove()
                run++   ; 
            }else{
            
                values.eq(i).attr("rowspan",run)
               
                run = 1
            }
        
        
        }
    })
}
fixit($("table"));
   
     

     
     

     
     
     
     
    function getdata(cust_id){
        $.ajax({
            type: "GET",
            url:"api/getupdateinfo.php?id="+cust_id,
            dataType: 'json',
        
            async: false,
            success: function(obj) {//data will have what ever you echo'ed in controller
    
           
                $("#ids").val(obj.id);
                $("#names").val(obj.name);
                $("#employee_id").val(obj.employee_id);
                $("#in_time").val(obj.in_time);
                 $("#out_time").val(obj.out_time);
                $("#date").val(obj.date);
        
            }
    
        });
    }
    
    function insertdata(emp_id){

         $.ajax({
            type: "GET",
            url:"api/getupdateinfo.php?id="+emp_id,
            dataType: 'json',
        
            async: false,
            success: function(obj) {//data will have what ever you echo'ed in controller
      
                $("#employee_id1").val(obj.employee_id);
                $("#date1").val(obj.date);
                   
            }
    
        });
        
        
       
    }
    
        function deletedata(cust_id){
        	
        $.ajax({
            type: 'POST',
          
            url:"api/deletedata.php?id="+cust_id,
               contentType: 'application/json; charset=utf-8',
          data: { vt_usr:"admin",vt_usr_key:"Comxtech@321"},
            dataType: 'json',
        
            async: false,
            success: function(obj) {//data will have what ever you echo'ed in controller
       
           
                alert(obj.value);
                  location.reload();
        
            }
    
        });
    }
    
    
    
    $('#myForm,#myForm2,#myForm3').submit(function(e) {
            

    e.preventDefault();
    var url = $(this).attr('action');
    var formid = '#' + this.id;

    var inputcontrols = $(formid + ' :input');
    var data = {};
    inputcontrols.each(function() {
        var c_name = this.name;
        data[c_name] = $(this).val().trim();
    });
 
    var posting = $.post(url, data);  
    posting.done(function(data) {
        
        var datavalues = data.split('-');
        var status = formid + " .formstatus";
        $(status).empty();
        $(status).append('<p>' + datavalues[0] + '</p>');
        $(status).children().css("color", datavalues[1]);
        $(status).show().delay(10000).fadeOut();
        if (datavalues[2] != "")
            window.location.href = datavalues[2];
     location.reload();
        
    });
    
  
    
    
   
});







        function show(){

$('.custom').show();



}





 function weeks(){
    
      var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

var lweek =("0" + (now.getDate()-6)).slice(-2);



var lastmoth=now.getFullYear()+"-"+(month)+"-"+(lweek) ;


     $('#intime').val(lastmoth);
     $('#outtime').val(today);
 
}






 function yesterday(){
     
    
      var now = new Date();

var day = ("0" + (now.getDate()-1)).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var yesterday=now.getFullYear()+"-"+(month)+"-"+(day) ;

console.log(yesterday);
     $('#intime').val(yesterday);
     $('#outtime').val(yesterday);
     
 }



 function month(){
    
      var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

var lmonth = ("0" + (now.getMonth())).slice(-2);



var lastmoth=now.getFullYear()+"-"+(lmonth)+"-"+(day) ;


     $('#intime').val(lastmoth);
     $('#outtime').val(today);
 
}


 function  today(){
    var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
     $('#intime').val(today);
     $('#outtime').val(today);
     
     
 }
    </script>




      

    <style> 
                 
                 
                 
    <?php include_once('loadjs.php') ?>
    <!----Map Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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


<div class="modal myModal fade"></div>
<script type="text/javascript" src="layouts/v7/lib/jquery/purl.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/select2/select2.min.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/jquery.class.min.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/jquery-ui-1.11.3.custom/jquery-ui.js"></script><script type="text/javascript" src="layouts/v7/lib/todc/js/popper.min.js"></script><script type="text/javascript" src="layouts/v7/lib/todc/js/bootstrap.min.js"></script><script type="text/javascript" src="libraries/jquery/jstorage.min.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/jquery-validation/jquery.validate.min.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/jquery.slimscroll.min.js"></script><script type="text/javascript" src="libraries/jquery/jquery.ba-outside-events.min.js"></script><script type="text/javascript" src="libraries/jquery/defunkt-jquery-pjax/jquery.pjax.js"></script><script type="text/javascript" src="libraries/jquery/multiplefileupload/jquery_MultiFile.js"></script><script type="text/javascript" src="resources/jquery.additions.js"></script><script type="text/javascript" src="layouts/v7/lib/bootstrap-notify/bootstrap-notify.min.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/websockets/reconnecting-websocket.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/jquery-play-sound/jquery.playSound.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mousewheel.min.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/autoComplete/jquery.textcomplete.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.js"></script><script type="text/javascript" src="libraries/jquery/jquery-visibility.min.js"></script><script type="text/javascript" src="layouts/v7/lib/momentjs/moment.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/daterangepicker/moment.min.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/daterangepicker/jquery.daterangepicker.js"></script><script type="text/javascript" src="layouts/v7/lib/jquery/jquery.timeago.js"></script><script type="text/javascript" src="libraries/jquery/ckeditor/ckeditor.js"></script><script type="text/javascript" src="libraries/jquery/ckeditor/adapters/jquery.js"></script><script type='text/javascript' src='layouts/v7/lib/anchorme_js/anchorme.min.js'></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Class.js?v=7.3.0"></script><script type='text/javascript' src="layouts/v7/resources/helper.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/resources/application.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Utils.js?v=7.3.0"></script><script type='text/javascript' src="layouts/v7/modules/Vtiger/resources/validation.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/lib/bootbox/bootbox.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Base.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Vtiger.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Calendar/resources/TaskManagement.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Import/resources/Import.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Emails/resources/EmailPreview.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Base.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Google/resources/Settings.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/CkEditor.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Documents/resources/Documents.js?v=7.3.0"></script><script type="text/javascript" src="libraries/bootstrap/js/eternicode-bootstrap-datepicker/js/bootstrap-datepicker.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/lib/jquery/timepicker/jquery.timepicker.min.js?v=7.3.0"></script><script type="text/javascript" src="libraries/jquery/lazyYT/lazyYT.min.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Header.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Edit.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Popup.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Field.js?v=7.3.0"></script><script type="text/javascript" src="libraries/jquery/jquery_windowmsg.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/BasicSearch.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/AdvanceFilter.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/SearchAdvanceFilter.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/AdvanceSearch.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/BaseList.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/List.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/AdvanceSearchList.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/RecordSelectTracker.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Pagination.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Import/resources/Popup.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Emails/resources/MassEdit.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/EmailsRelatedPopup.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/lib/jquery/sadropdown.js?v=7.3.0"></script><script type="text/javascript" src="libraries/jquery/posabsolute-jQuery-Validation-Engine/js/languages/jquery.validationEngine-en.js?v=7.3.0"></script><script type="text/javascript" src="modules/PBXManager/resources/PBXManagerJS.js?v=7.3.0"></script><script type="text/javascript" src="modules/ExtensionStore/ExtensionStore.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Vtiger.js?v=7.3.0"></script><script type="text/javascript" src="libraries/jquery/jquery.stickytableheaders.min.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/ListSidebar.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/CustomView/resources/CustomView.js?v=7.3.0"></script><script type="text/javascript" src="libraries/jquery/ckeditor/ckeditor.js?v=7.3.0"></script><script type="text/javascript" src="libraries/jquery/ckeditor/adapters/jquery.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/CkEditor.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/MergeRecords.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/lib/jquery/Lightweight-jQuery-In-page-Filtering-Plugin-instaFilta/instafilta.min.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/modules/Vtiger/resources/Tag.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/lib/jquery/floatThead/jquery.floatThead.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/lib/jquery/perfect-scrollbar/js/perfect-scrollbar.jquery.js?v=7.3.0"></script><script type="text/javascript" src="layouts/v7/resources/v7_client_compat.js?v=7.3.0"></script><!-- Added in the end since it should be after less file loaded --><script type="text/javascript" src="libraries/bootstrap/js/less.min.js"></script><!-- Enable tracking pageload time --><script type="text/javascript">var _REQSTARTTIME = "1609928039";jQuery(document).ready(function() { window._PAGEREADYAT = new Date(); });
		jQuery(window).load(function() {
			window._PAGELOADAT = new Date();
			window._PAGELOADREQSENT = false;
			// Transmit the information to server about page render time now.
			if (typeof _REQSTARTTIME != 'undefined') {
				// Work with time converting it to GMT (assuming _REQSTARTTIME set by server is also in GMT)
				var _PAGEREADYTIME = _PAGEREADYAT.getTime() / 1000.0; // seconds
				var _PAGELOADTIME = _PAGELOADAT.getTime() / 1000.0;    // seconds
				var data = { page_request: _REQSTARTTIME, page_ready: _PAGEREADYTIME, page_load: _PAGELOADTIME };
				data['page_xfer'] = (_PAGELOADTIME - _REQSTARTTIME).toFixed(3);
				data['client_tzoffset']= -1*_PAGELOADAT.getTimezoneOffset()*60;
				data['client_now'] = JSON.parse(JSON.stringify(new Date()));
				if (!window._PAGELOADREQSENT) {
					// To overcome duplicate firing on Chrome
					window._PAGELOADREQSENT = true;
				}
			}
		});</script>
<script type="text/javascript">CsrfMagic.end();</script></body>

</html>		
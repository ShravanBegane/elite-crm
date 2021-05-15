<!DOCTYPE html>
<html>

<head>
	<title>Franchise</title>
	<link rel="SHORTCUT ICON" href="<?php echo $site_URL ?>layouts/v7/skins/images/favicon.ico">
	<link type="text/css" rel="stylesheet" href="../layouts/v7/skins/marketing/style.css?v=7.3.0" media="screen">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
	.module-nav .modules-menu {
		position: relative !important;
		height: 500px !important;
	}
	.main-container{
	    margin-top: 42px;
	}
	.custombtn {
		width: 50% !important;
		margin-left: 40px !important;
		margin-right: 40px !important;
		border-radius: 20px !important;
	}
	
	ul,
	ul li {
		list-style: none;
	}
	
	table {
		table-layout: fixed;
		word-wrap: break-word;
	}
	.bodyContents{
	    height:auto !important;
	}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<?php include_once('loadcss.php') ?>
		<?php include_once('frachise_getall.php') ?>
			<script type="text/javascript">
			var __pageCreationTime = (new Date()).getTime();
			</script>
	
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
			
			
			var _META = { 'module': "Users", view: "List", 'parent': "Settings", 'notifier':"", 'app':"MARKETING" };
			var _USERMETA;_USERMETA =  { 'id' : "1", 'menustatus' : "1",'currency' : "₹", 'currencySymbolPlacement' : "$1.0",'currencyGroupingPattern' : "123,456,789", 'truncateTrailingZeros' : "1"};
			if(top != self) {
				top.location.href = self.location.href;
			}
			</script>
			<script type="text/javascript">
		var csrfMagicToken = "sid:86f85d74ddc56a7b5ead62bb4cdd79149f9a3efb,1612995653";var csrfMagicName = "__vtrftk";
			</script>
			<script src="<?php echo $site_URL ?>libraries/csrf-magic/csrf-magic.js" type="text/javascript"></script>
</head>

<body data-skinpath="<?php echo $site_URL ?>layouts/v7/skins" data-language="en_us" data-user-decimalseparator="." data-user-dateformat="dd-mm-yyyy" data-user-groupingseparator="," data-user-numberofdecimals="2" data-user-hourformat="12" data-user-calendar-reminder-interval="60">
	<input type="hidden" id="start_day" value="Sunday" />
	<div id="page">
		<div id="pjaxContainer" class="hide noprint"></div>
		<div id="messageBar" class="hide"></div>
		<nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar">
			<div class="container-fluid global-nav">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-8 app-navigator-container">
						<div class="row">
							<div id="appnavigator" class="col-sm-2 col-xs-2 cursorPointer app-switcher-container" data-app-class="fa-users">
								<div class="row app-navigator"><span class="app-icon fa fa-bars"></span></div>
							</div>
							<div class="logo-container col-sm-3 col-xs-9">
								<div class="row">
									<a href="<?php echo $site_URL ?>index.php" class="company-logo"><img src="<?php echo $site_URL ?>test/logo/vtiger-crm-logo.png" alt="<?php echo $site_URL ?>vtiger-crm-logo.png" /></a>
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
							<div class="search-link"><span class="fa fa-search" aria-hidden="true"></span>
								<input class="keyword-input" type="text" placeholder="Type to search" value=""><span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span></div>
						</div>
					</div>
					<div id="navbar" class="col-sm-6 col-xs-12 collapse navbar-collapse navbar-right global-actions">
						<ul class="nav navbar-nav">
							<li>
								<div class="dropdown pull-left">
									<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<a href="#" id="menubar_quickCreate" class="qc-button fa fa-plus-circle" title="Quick Create" aria-hidden="true"></a>
									</div>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
										<li class="title" style="padding: 5px 0 0 15px;"><strong>Quick Create</strong></li>
										<hr/>
										<li id="quickCreateModules" style="padding: 0 5px;">
											<div class="col-lg-12" style="padding-bottom:15px;">
												<div class="row">
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Campaigns" class="quickCreateModule" data-name="Campaigns" data-url="<?php echo $site_URL ?>index.php?module=Campaigns&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-campaigns' title='Campaigns'></i><span class="quick-create-module">Campaign</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Leads" class="quickCreateModule" data-name="Leads" data-url="<?php echo $site_URL ?>index.php?module=Leads&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-leads' title='Leads'></i><span class="quick-create-module">Lead</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Contacts" class="quickCreateModule" data-name="Contacts" data-url="<?php echo $site_URL ?>index.php?module=Contacts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-contacts' title='Contacts'></i><span class="quick-create-module">Contact</span></a></div>
												</div>
												<br>
												<div class="row">
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Accounts" class="quickCreateModule" data-name="Accounts" data-url="<?php echo $site_URL ?>index.php?module=Accounts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-accounts' title='Organizations'></i><span class="quick-create-module">Organization</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Potentials" class="quickCreateModule" data-name="Potentials" data-url="<?php echo $site_URL ?>index.php?module=Potentials&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-potentials' title='Opportunities'></i><span class="quick-create-module">Opportunity</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_HelpDesk" class="quickCreateModule" data-name="HelpDesk" data-url="<?php echo $site_URL ?>index.php?module=HelpDesk&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-helpdesk' title='Tickets'></i><span class="quick-create-module">Ticket</span></a></div>
												</div>
												<br>
												<div class="row">
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Project" class="quickCreateModule" data-name="Project" data-url="<?php echo $site_URL ?>index.php?module=Project&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-project' title='Projects'></i><span class="quick-create-module">Project</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Assets" class="quickCreateModule" data-name="Assets" data-url="<?php echo $site_URL ?>index.php?module=Assets&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-assets' title='Assets'></i><span class="quick-create-module">Asset</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_ServiceContracts" class="quickCreateModule" data-name="ServiceContracts" data-url="<?php echo $site_URL ?>index.php?module=ServiceContracts&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-servicecontracts' title='Service Contracts'></i><span class="quick-create-module">Service Contract</span></a></div>
												</div>
												<br>
												<div class="row">
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Products" class="quickCreateModule" data-name="Products" data-url="<?php echo $site_URL ?>index.php?module=Products&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-products' title='Products'></i><span class="quick-create-module">Product</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Services" class="quickCreateModule" data-name="Services" data-url="<?php echo $site_URL ?>index.php?module=Services&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-services' title='Services'></i><span class="quick-create-module">Service</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_PriceBooks" class="quickCreateModule" data-name="PriceBooks" data-url="<?php echo $site_URL ?>index.php?module=PriceBooks&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-pricebooks' title='Price Books'></i><span class="quick-create-module">Price Book</span></a></div>
												</div>
												<br>
												<div class="row">
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Vendors" class="quickCreateModule" data-name="Vendors" data-url="<?php echo $site_URL ?>index.php?module=Vendors&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-vendors' title='Vendors'></i><span class="quick-create-module">Vendor</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events" data-url="<?php echo $site_URL ?>index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-calendar' title='Calendar'></i><span class="quick-create-module">Event</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_Calendar" class="quickCreateModule" data-name="Calendar" data-url="<?php echo $site_URL ?>index.php?module=Calendar&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-task' title='Calendar' ></i><span class="quick-create-module">Task</span></a></div>
												</div>
												<br>
												<div class="row">
													<div class="col-lg-4 col-xs-4 dropdown"><a id="menubar_quickCreate_Documents" class="quickCreateModuleSubmenu dropdown-toggle" data-name="Documents" data-toggle="dropdown" data-url="<?php echo $site_URL ?>index.php?module=Documents&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-documents' title='Documents'></i><span class="quick-create-module">Document<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i></span></a>
														<ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_Documents">
															<li class="dropdown-header"><i class="fa fa-upload"></i> File Upload</li>
															<li id="VtigerAction">
																<a href="javascript:Documents_Index_Js.uploadTo('Vtiger')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="<?php echo $site_URL ?>layouts/v7/skins//images/Vtiger.png">To Vtiger</a>
															</li>
															<li class="dropdown-header"><i class="fa fa-link"></i> Link External Document</li>
															<li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; From File Url</a></li>
															<li role="separator" class="divider"></li>
															<li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> Create New Document</a></li>
														</ul>
													</div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_ProjectTask" class="quickCreateModule" data-name="ProjectTask" data-url="<?php echo $site_URL ?>index.php?module=ProjectTask&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-projecttask' title='Project Tasks'></i><span class="quick-create-module">Project Task</span></a></div>
													<div class="col-lg-4 col-xs-4"><a id="menubar_quickCreate_ProjectMilestone" class="quickCreateModule" data-name="ProjectMilestone" data-url="<?php echo $site_URL ?>index.php?module=ProjectMilestone&view=QuickCreateAjax" href="javascript:void(0)"><i class='vicon-projectmilestone' title='Project Milestones'></i><span class="quick-create-module">Project Milestone</span></a></div>
												</div>
												<br>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<div>
									<a href="<?php echo $site_URL ?>index.php?module=Calendar&view=Calendar" class="fa fa-calendar" title="Calendar" aria-hidden="true"></a>
								</div>
							</li>
							<li>
								<div>
									<a href="<?php echo $site_URL ?>index.php?module=Reports&view=List" class="fa fa-bar-chart" title="Reports" aria-hidden="true"></a>
								</div>
							</li>
							<li>
								<div>
									<a href="#" class="taskManagement vicon vicon-task" title="Tasks" aria-hidden="true"></a>
								</div>
							</li>
							<li class="dropdown">
								<div><a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button"><span class="fa fa-user" aria-hidden="true" title="RightChoice Administrator(admin)"></span><span class="link-text-xs-only hidden-lg hidden-md hidden-sm">RightChoice Administrator</span></a>
									<div class="dropdown-menu logout-content" role="menu">
										<div class="row">
											<div class="col-lg-4 col-sm-4">
												<div class="profile-img-container"><i class='vicon-vtigeruser' style="font-size:90px"></i></div>
											</div>
											<div class="col-lg-8 col-sm-8">
												<div class="profile-container">
													<h4>RightChoice Administrator</h4>
													<h5 class="textOverflowEllipsis" title='admin'>admin</h5>
													<p>CEO</p>
												</div>
											</div>
										</div>
										<div id="logout-footer" class="logout-footer clearfix">
											<hr style="margin: 10px 0 !important">
											<div class=""><span class="pull-left"><span class="fa fa-cogs"></span><a id="menubar_item_right_LBL_MY_PREFERENCES" href="<?php echo $site_URL ?>index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1">My Preferences</a></span><span class="pull-right"><span class="fa fa-power-off"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Users&action=Logout">Sign Out</a></span>
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
					<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-MARKETING">
						<div class="row" title="Settings"> <span class="app-indicator-icon fa fa-cog"></span> </div>
						
					</div>
						<div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop">
						    <div class="module-action-content clearfix"><div class="col-lg-7 col-md-7">
						        <a title="Home" href='index.php?module=Vtiger&parent=Settings&view=Index'>
						            <h4 class="module-title pull-left text-uppercase">Home </h4>
						            </a>&nbsp;<span class="fa fa-angle-right pull-left " aria-hidden="true" style="padding-top: 12px;padding-left: 5px; padding-right: 5px;">
						                
						            </span><span class="current-filter-name filter-name pull-left">Franchise Settings&nbsp;<span class="fa fa-angle-right" aria-hidden="true">
						                
						            </span>&nbsp;</span><span class="current-filter-name settingModuleName filter-name pull-left"><a href="">RightChoice Administrator</a>
						            </span></div></div></div>
					<div class="app-menu" id="app-menu">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-2 col-xs-2 cursorPointer app-switcher-container">
									<div class="row app-navigator"> <span id="menu-toggle-action" class="app-icon fa fa-bars"></span> </div>
								</div>
							</div>
		
						<div class="app-list row">
							<div class="menu-item app-item dropdown-toggle" data-default-url="<?php echo $site_URL ?>index.php?module=Home&view=DashBoard">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa fa-dashboard"></span>
						<span class="app-name textOverflowEllipsis"> RIGHT VIEW </span>
					</div>
				</div>
						
			
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
						<a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=MARKETING" title="Clients">
							<span class="module-icon"><i class="fa fa-users fa-1x" title='Clients'></i></span>
							<span class="module-name textOverflowEllipsis"> Clients</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Mainservicestype&view=List&app=MARKETING" title="Main Service">
							<span class="module-icon"><i class='fa fa-cog fa-1x' title='Main Service'></i></span>
							<span class="module-name textOverflowEllipsis"> Main Service</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Subservices&view=List&app=TOOLS" title="Sub Service">
							<span class="module-icon"><i class='fa fa-cogs fa-1x' title='Sub Service'></i></span>
							<span class="module-name textOverflowEllipsis"> Sub Service</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Transaction&view=List&app=MARKETING" title="Transcation Details">
							<span class="module-icon"><i class='fa fa-exchange' title='Transcation Details'></i></span>
							<span class="module-name textOverflowEllipsis"> Transcation Details</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1" title="Employee Managment">
							<span class="module-icon"><i class="fa fa-user fa-1x" title='Employee Managment'></i></span>
							<span class="module-name textOverflowEllipsis"> Employee Managment</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>locationmap.php" title="Employee Tracking">
							<span class="module-icon"><i class="fa  fa-map-marker fa-1x" title='Employee Tracking'></i></span>
							<span class="module-name textOverflowEllipsis">&nbspEmployee Tracking</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>employeeroster.php" title="Employee Roster">
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
						<span class="app-name textOverflowEllipsis"> RIGHT RECEPTION</span>
						<span class="fa fa-chevron-right pull-right"></span>
					</div>
				</div>
				<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="RIGHT_CLEAN_modules_dropdownMenu">

					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Teams&view=List&app=MARKETING" title="Team">
							<span class="module-icon"><i class="fa fa-users fa-1x" title='Team'></i></span>
							<span class="module-name textOverflowEllipsis"> Team</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Visitors&view=List&app=MARKETING" title="Visitor">
							<span class="module-icon"><i class='fa fa-user' title='Visitor'></i></span>
							<span class="module-name textOverflowEllipsis"> Visitor</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=EmailTemplates&view=Edit&app=TOOLS" title="Email Templates">
							<span class="module-icon"><i class='fa  fa-envelope' title='Email Templates'></i></span>
							<span class="module-name textOverflowEllipsis"> Email Templates</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Receptionsettings&view=List&app=MARKETING" title="Menu">
							<span class="module-icon"><i class='fa fa-bars' title='Menu'></i></span>
							<span class="module-name textOverflowEllipsis"> Menu</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Receptionsettings&view=List&app=MARKETING" title="Register">
							<span class="module-icon"><i class='fa  fa-user-plus' title='Register'></i></span>
							<span class="module-name textOverflowEllipsis"> Register</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Receptionsettings&view=List&app=MARKETING" title="Link Device">
							<span class="module-icon"><i class='fa  fa-plug' title='Link Device'></i></span>
							<span class="module-name textOverflowEllipsis"> Link Device</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Receptionsettings&view=List&app=MARKETING" title="Request for Assistance">
							<span class="module-icon"><i class='fa  fa-cog' title='Request for Assistance'></i></span>
							<span class="module-name textOverflowEllipsis"> Request for Assistance</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Receptionsettings&view=List&app=MARKETING" title="Subscription">
							<span class="module-icon"><i class='fa  fa-external-link-square' title='Subscription'></i></span>
							<span class="module-name textOverflowEllipsis"> Subscription</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Receptionsettings&view=List&app=MARKETING" title="GDPR Compliance">
							<span class="module-icon"><i class='fa  fa-cog' title='GDPR Compliance'></i></span>
							<span class="module-name textOverflowEllipsis"> GDPR Compliance</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $site_URL ?>index.php?module=Receptionsettings&view=List&app=MARKETING" title="Delete Data">
							<span class="module-icon"><i class='fa   fa-trash' title='Delete Data'></i></span>
							<span class="module-name textOverflowEllipsis"> Delete Data</span>
						</a>
					</li>
				</ul>
			</div>
			
			
			
																						<div class="dropdown app-modules-dropdown-container">
																																		
						<div class="menu-item app-item dropdown-toggle app-item-color-MARKETING" data-app-name="MARKETING" id="MARKETING_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa fa-camera"></span>
								<span class="app-name textOverflowEllipsis"> Right CRM</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="MARKETING_modules_dropdownMenu">
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Campaigns&view=List&app=MARKETING" title="Campaigns">
										<span class="module-icon"><i class='vicon-campaigns' title='Campaigns'></i></span>
										<span class="module-name textOverflowEllipsis"> Campaigns</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Leads&view=List&app=MARKETING" title="Leads">
										<span class="module-icon"><i class='vicon-leads' title='Leads'></i></span>
										<span class="module-name textOverflowEllipsis"> Leads</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=MARKETING" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=MARKETING" title="Business">
										<span class="module-icon"><i class='vicon-accounts' title='Business'></i></span>
										<span class="module-name textOverflowEllipsis"> Business</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Potentials&view=List&app=MARKETING" title="Opportunities">
										<span class="module-icon"><i class='vicon-potentials' title='Opportunities'></i></span>
										<span class="module-name textOverflowEllipsis"> Opportunities</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Subservices&view=List&app=MARKETING" title="SubServices">
										<span class="module-icon"><i class='vicon-subservices' title='SubServices'></i></span>
										<span class="module-name textOverflowEllipsis"> SubServices</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Mainservicestype&view=List&app=MARKETING" title="MainServicestype">
										<span class="module-icon"><i class='vicon-mainservicestype' title='MainServicestype'></i></span>
										<span class="module-name textOverflowEllipsis"> MainServicestype</span>
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
									<a href="<?php echo $site_URL ?>index.php?module=Potentials&view=List&app=SALES" title="Opportunities">
										<span class="module-icon"><i class='vicon-potentials' title='Opportunities'></i></span>
										<span class="module-name textOverflowEllipsis"> Opportunities</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Quotes&view=List&app=SALES" title="Quotes">
										<span class="module-icon"><i class='vicon-quotes' title='Quotes'></i></span>
										<span class="module-name textOverflowEllipsis"> Quotes</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Services&view=List&app=SALES" title="Services">
										<span class="module-icon"><i class='vicon-services' title='Services'></i></span>
										<span class="module-name textOverflowEllipsis"> Services</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Products&view=List&app=SALES" title="Products">
										<span class="module-icon"><i class='vicon-products' title='Products'></i></span>
										<span class="module-name textOverflowEllipsis"> Products</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=SMSNotifier&view=List&app=SALES" title="SMS Notifier">
										<span class="module-icon"><i class='vicon-smsnotifier' title='SMS Notifier'></i></span>
										<span class="module-name textOverflowEllipsis"> SMS Notifier</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=SALES" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=SALES" title="Business">
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
									<a href="<?php echo $site_URL ?>index.php?module=Products&view=List&app=INVENTORY" title="Products">
										<span class="module-icon"><i class='vicon-products' title='Products'></i></span>
										<span class="module-name textOverflowEllipsis"> Products</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Services&view=List&app=INVENTORY" title="Services">
										<span class="module-icon"><i class='vicon-services' title='Services'></i></span>
										<span class="module-name textOverflowEllipsis"> Services</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=PriceBooks&view=List&app=INVENTORY" title="Price Books">
										<span class="module-icon"><i class='vicon-pricebooks' title='Price Books'></i></span>
										<span class="module-name textOverflowEllipsis"> Price Books</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Invoice&view=List&app=INVENTORY" title="Invoices">
										<span class="module-icon"><i class='vicon-invoice' title='Invoices'></i></span>
										<span class="module-name textOverflowEllipsis"> Invoices</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=SalesOrder&view=List&app=INVENTORY" title="Sales Orders">
										<span class="module-icon"><i class='vicon-salesorder' title='Sales Orders'></i></span>
										<span class="module-name textOverflowEllipsis"> Sales Orders</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=PurchaseOrder&view=List&app=INVENTORY" title="Purchase Orders">
										<span class="module-icon"><i class='vicon-purchaseorder' title='Purchase Orders'></i></span>
										<span class="module-name textOverflowEllipsis"> Purchase Orders</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Vendors&view=List&app=INVENTORY" title="Vendors">
										<span class="module-icon"><i class='vicon-vendors' title='Vendors'></i></span>
										<span class="module-name textOverflowEllipsis"> Vendors</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=INVENTORY" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=INVENTORY" title="Business">
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
									<a href="<?php echo $site_URL ?>index.php?module=HelpDesk&view=List&app=SUPPORT" title="Tickets">
										<span class="module-icon"><i class='vicon-helpdesk' title='Tickets'></i></span>
										<span class="module-name textOverflowEllipsis"> Tickets</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Faq&view=List&app=SUPPORT" title="FAQ">
										<span class="module-icon"><i class='vicon-faq' title='FAQ'></i></span>
										<span class="module-name textOverflowEllipsis"> FAQ</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=ServiceContracts&view=List&app=SUPPORT" title="Service Contracts">
										<span class="module-icon"><i class='vicon-servicecontracts' title='Service Contracts'></i></span>
										<span class="module-name textOverflowEllipsis"> Service Contracts</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Assets&view=List&app=SUPPORT" title="Assets">
										<span class="module-icon"><i class='vicon-assets' title='Assets'></i></span>
										<span class="module-name textOverflowEllipsis"> Assets</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=SMSNotifier&view=List&app=SUPPORT" title="SMS Notifier">
										<span class="module-icon"><i class='vicon-smsnotifier' title='SMS Notifier'></i></span>
										<span class="module-name textOverflowEllipsis"> SMS Notifier</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=SUPPORT" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=SUPPORT" title="Business">
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
									<a href="<?php echo $site_URL ?>index.php?module=Project&view=List&app=PROJECT" title="Projects">
										<span class="module-icon"><i class='vicon-project' title='Projects'></i></span>
										<span class="module-name textOverflowEllipsis"> Projects</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=ProjectTask&view=List&app=PROJECT" title="Project Tasks">
										<span class="module-icon"><i class='vicon-projecttask' title='Project Tasks'></i></span>
										<span class="module-name textOverflowEllipsis"> Project Tasks</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=ProjectMilestone&view=List&app=PROJECT" title="Project Milestones">
										<span class="module-icon"><i class='vicon-projectmilestone' title='Project Milestones'></i></span>
										<span class="module-name textOverflowEllipsis"> Project Milestones</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Contacts&view=List&app=PROJECT" title="Contacts">
										<span class="module-icon"><i class='vicon-contacts' title='Contacts'></i></span>
										<span class="module-name textOverflowEllipsis"> Contacts</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Accounts&view=List&app=PROJECT" title="Business">
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
									<a href="<?php echo $site_URL ?>index.php?module=EmailTemplates&view=List&app=TOOLS" title="Email Templates">
										<span class="module-icon"><i class='vicon-emailtemplates' title='Email Templates'></i></span>
										<span class="module-name textOverflowEllipsis"> Email Templates</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Rss&view=List&app=TOOLS" title="Rss">
										<span class="module-icon"><i class='vicon-rss' title='Rss'></i></span>
										<span class="module-name textOverflowEllipsis"> Rss</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=Portal&view=List&app=TOOLS" title="Our Sites">
										<span class="module-icon"><i class='vicon-portal' title='Our Sites'></i></span>
										<span class="module-name textOverflowEllipsis"> Our Sites</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=RecycleBin&view=List&app=TOOLS" title="Recycle Bin">
										<span class="module-icon"><i class='vicon-recyclebin' title='Recycle Bin'></i></span>
										<span class="module-name textOverflowEllipsis"> Recycle Bin</span>
									</a>
								</li>
																							<li>
									<a href="<?php echo $site_URL ?>index.php?module=PBXManager&view=List&app=TOOLS" title="PBX Manager">
										<span class="module-icon"><i class='vicon-pbxmanager' title='PBX Manager'></i></span>
										<span class="module-name textOverflowEllipsis"> PBX Manager</span>
									</a>
								</li>
													</ul>
					</div>
										<div class="app-list-divider"></div>
										<div class="menu-item app-item app-item-misc" data-default-url="<?php echo $site_URL ?>index.php?module=MailManager&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><i class='vicon-mailmanager' title='Mail Manager'></i></span>
						<span class="app-name textOverflowEllipsis"> Mail Manager</span>
					</div>
				</div>
													<div class="menu-item app-item app-item-misc" data-default-url="<?php echo $site_URL ?>index.php?module=Documents&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><i class='vicon-documents' title='Documents'></i></span>
						<span class="app-name textOverflowEllipsis"> Documents</span>
					</div>
				</div>
															<div class="menu-item app-item app-item-misc" data-default-url="<?php echo $site_URL ?>index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
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
							<a href="<?php echo $site_URL ?>?module=Vtiger&parent=Settings&view=Index">
								<span class="fa fa-cog module-icon"></span>
								<span class="module-name textOverflowEllipsis"> CRM Settings</span>
							</a>
						</li>
						<li>
							<a href="<?php echo $site_URL ?>?module=Users&parent=Settings&view=List">
								<span class="fa fa-user module-icon"></span>
								<span class="module-name textOverflowEllipsis"> Manage Users</span>
							</a>
						</li>
					</ul>
				</div>
					</div>
					</div>
					</div>
					<div class="main-container clearfix">
						<div class="module-nav clearfix settingsNav" id="modnavigator">
							<div class="hidden-xs hidden-sm height100Per">
								<div class="settingsgroup">
									<div>
										<input type="text" placeholder="Search settings" class="search-list col-lg-8" id='settingsMenuSearch'>
									</div>
									<br>
									<br>
									<style>
									.sidebar-icon:hover {
										color: #fff !important;
									}
									</style>
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<h5 class=" settingsgroup-menu-color " style="margin-left: 20px;color: #fff;text-transform: uppercase;"> 
                <a class="sidebar-icon" href="<?php echo $site_URL ?>api/franchise.php" >
                    <i class="indicator fa fa-chevron-right "></i><span style="margin-left: 8px;">Franchise Settings</span> </a></h5>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_USER_MANAGEMENT_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion">
														<a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_USER_MANAGEMENT"> <i class="indicator fa fa-chevron-right "></i>&nbsp;<span>User Management</span></a>
													</div>
												</div>
											</div>
											<div id="LBL_USER_MANAGEMENT" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li> <a data-name="LBL_USERS" href="<?php echo $site_URL ?>index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1" class="menuItemLabel ">Users<img id="1_menuItem" data-id="1" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=1"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="../layouts/v7/skins/images/pin.png"data-unpinimageurl="../layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_ROLES" href="<?php echo $site_URL ?>index.php?module=Roles&parent=Settings&view=Index&block=1&fieldid=2" class="menuItemLabel ">Roles<img id="2_menuItem" data-id="2" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=2"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="../layouts/v7/skins/images/pin.png"data-unpinimageurl="../layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_PROFILES" href="<?php echo $site_URL ?>index.php?module=Profiles&parent=Settings&view=List&block=1&fieldid=3" class="menuItemLabel ">Profiles<img id="3_menuItem" data-id="3" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=3"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="../layouts/v7/skins/images/pin.png"data-unpinimageurl="../layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_SHARING_ACCESS" href="<?php echo $site_URL ?>index.php?module=SharingAccess&parent=Settings&view=Index&block=1&fieldid=5" class="menuItemLabel ">Sharing Rules<img id="5_menuItem" data-id="5" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=5"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="../layouts/v7/skins/images/pin.png"data-unpinimageurl="../layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="USERGROUPLIST" href="<?php echo $site_URL ?>index.php?module=Groups&parent=Settings&view=List&block=1&fieldid=4" class="menuItemLabel ">Groups<img id="4_menuItem" data-id="4" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=4"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="../layouts/v7/skins/images/pin.png"data-unpinimageurl="../layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_LOGIN_HISTORY_DETAILS" href="<?php echo $site_URL ?>index.php?module=LoginHistory&parent=Settings&view=List&block=1&fieldid=7" class="menuItemLabel ">Login History<img id="7_menuItem" data-id="7" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=7"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="../layouts/v7/skins/images/pin.png"data-unpinimageurl="../layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_MODULE_MANAGER_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_MODULE_MANAGER"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>Module Management</span></a></div>
												</div>
											</div>
											<div id="LBL_MODULE_MANAGER" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="VTLIB_LBL_MODULE_MANAGER" href="<?php echo $site_URL ?>index.php?module=ModuleManager&parent=Settings&view=List&block=5&fieldid=8" class="menuItemLabel ">Modules<img id="8_menuItem" data-id="8" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=8"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
													<li><a data-name="LBL_EDIT_FIELDS" href="<?php echo $site_URL ?>index.php?module=LayoutEditor&parent=Settings&view=Index&block=5&fieldid=32" class="menuItemLabel ">Module Layouts & Fields<img id="32_menuItem" data-id="32" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=32"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_CUSTOMIZE_MODENT_NUMBER" href="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&view=CustomRecordNumbering&block=5&fieldid=22" class="menuItemLabel ">Module Numbering<img id="22_menuItem" data-id="22" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=22"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_AUTOMATION_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_AUTOMATION"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>Automation</span></a></div>
												</div>
											</div>
											<div id="LBL_AUTOMATION" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="Webforms" href="<?php echo $site_URL ?>index.php?module=Webforms&parent=Settings&view=List&block=7&fieldid=31" class="menuItemLabel ">Webforms<img id="31_menuItem" data-id="31" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=31"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="Scheduler" href="<?php echo $site_URL ?>index.php?module=CronTasks&parent=Settings&view=List&block=7&fieldid=26" class="menuItemLabel ">Scheduler<img id="26_menuItem" data-id="26" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=26"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_LIST_WORKFLOWS" href="<?php echo $site_URL ?>index.php?module=Workflows&parent=Settings&view=List&block=7&fieldid=24" class="menuItemLabel ">Workflows<img id="24_menuItem" data-id="24" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=24"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_CONFIGURATION_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_CONFIGURATION"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>Configuration</span></a></div>
												</div>
											</div>
											<div id="LBL_CONFIGURATION" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="LBL_COMPANY_DETAILS" href="<?php echo $site_URL ?>index.php?parent=Settings&module=Vtiger&view=CompanyDetails&block=8&fieldid=14" class="menuItemLabel ">Company Details<img id="14_menuItem" data-id="14" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=14"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_CUSTOMER_PORTAL" href="<?php echo $site_URL ?>index.php?module=CustomerPortal&parent=Settings&view=Index&block=8&fieldid=30" class="menuItemLabel ">Customer Portal<img id="30_menuItem" data-id="30" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=30"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_CURRENCY_SETTINGS" href="<?php echo $site_URL ?>index.php?parent=Settings&module=Currency&view=List&block=8&fieldid=16" class="menuItemLabel ">Currencies<img id="16_menuItem" data-id="16" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=16"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_MAIL_SERVER_SETTINGS" href="<?php echo $site_URL ?>index.php?parent=Settings&module=Vtiger&view=OutgoingServerDetail&block=8&fieldid=15" class="menuItemLabel ">Outgoing Server<img id="15_menuItem" data-id="15" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=15"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="Configuration Editor" href="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&view=ConfigEditorDetail&block=8&fieldid=25" class="menuItemLabel ">Configuration Editor<img id="25_menuItem" data-id="25" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=25"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_PICKLIST_EDITOR" href="<?php echo $site_URL ?>index.php?parent=Settings&module=Picklist&view=Index&block=8&fieldid=9" class="menuItemLabel ">Picklist Field Values<img id="9_menuItem" data-id="9" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=9"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
													<li><a data-name="LBL_PICKLIST_DEPENDENCY" href="<?php echo $site_URL ?>index.php?parent=Settings&module=PickListDependency&view=List&block=8&fieldid=10" class="menuItemLabel ">Picklist Dependency<img id="10_menuItem" data-id="10" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=10"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="LBL_MENU_EDITOR" href="<?php echo $site_URL ?>index.php?module=MenuEditor&parent=Settings&view=Index&block=8&fieldid=11" class="menuItemLabel ">Main Menu<img id="11_menuItem" data-id="11" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=11"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_MARKETING_SALES_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_MARKETING_SALES"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>Marketing & Sales</span></a></div>
												</div>
											</div>
											<div id="LBL_MARKETING_SALES" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="LBL_LEAD_MAPPING" href="<?php echo $site_URL ?>index.php?parent=Settings&module=Leads&view=MappingDetail&block=9&fieldid=33" class="menuItemLabel ">Lead Conversion Data Mapping<img id="33_menuItem" data-id="33" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=33"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
													<li><a data-name="LBL_OPPORTUNITY_MAPPING" href="<?php echo $site_URL ?>index.php?parent=Settings&module=Potentials&view=MappingDetail&block=9&fieldid=34" class="menuItemLabel ">Opportunity to Project Mapping<img id="34_menuItem" data-id="34" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=34"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_INVENTORY_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_INVENTORY"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>INVENTORY</span></a></div>
												</div>
											</div>
											<div id="LBL_INVENTORY" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="LBL_TAX_SETTINGS" href="<?php echo $site_URL ?>index.php?module=Vtiger&parent=Settings&view=TaxIndex&block=10&fieldid=17" class="menuItemLabel ">Tax Management<img id="17_menuItem" data-id="17" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=17"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
													<li><a data-name="INVENTORYTERMSANDCONDITIONS" href="<?php echo $site_URL ?>index.php?parent=Settings&module=Vtiger&view=TermsAndConditionsEdit&block=10&fieldid=21" class="menuItemLabel ">Terms and Conditions<img id="21_menuItem" data-id="21" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=21"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_MY_PREFERENCES_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_MY_PREFERENCES"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>My Preferences</span></a></div>
												</div>
											</div>
											<div id="LBL_MY_PREFERENCES" class="panel-collapse collapse ulBlock">
												<ul class="list-group widgetContainer">
													<li><a data-name="My Preferences" href="<?php echo $site_URL ?>index.php?module=Users&view=PreferenceDetail&parent=Settings&record=1" class="menuItemLabel ">My Preferences<img id="35_menuItem" data-id="35" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=35"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
													<li><a data-name="Calendar Settings" href="<?php echo $site_URL ?>index.php?module=Users&parent=Settings&view=Calendar&record=1" class="menuItemLabel ">Calendar Settings<img id="36_menuItem" data-id="36" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=36"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
													<li><a data-name="LBL_MY_TAGS" href="<?php echo $site_URL ?>index.php?module=Tags&parent=Settings&view=List&record=1&block=11&fieldid=37" class="menuItemLabel ">My Tags<img id="37_menuItem" data-id="37" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=37"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_INTEGRATION_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_INTEGRATION"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>Integration</span></a></div>
												</div>
											</div>
											<div id="LBL_INTEGRATION" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="LBL_PBXMANAGER" href="<?php echo $site_URL ?>index.php?module=PBXManager&parent=Settings&view=Index&block=6&fieldid=29" class="menuItemLabel ">PBXManager<img id="29_menuItem" data-id="29" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=29"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_EXTENSIONS_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_EXTENSIONS"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>Extensions</span></a></div>
												</div>
											</div>
											<div id="LBL_EXTENSIONS" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="LBL_EXTENSION_STORE" href="<?php echo $site_URL ?>index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore&block=12&fieldid=38" class="menuItemLabel ">Extension Store<img id="38_menuItem" data-id="38" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=38"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
													<li><a data-name="LBL_GOOGLE" href="<?php echo $site_URL ?>index.php?module=Contacts&parent=Settings&view=Extension&extensionModule=Google&extensionView=Index&mode=settings&block=12&fieldid=39" class="menuItemLabel ">Google<img id="39_menuItem" data-id="39" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=39"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="Unpin" src="<?php echo $site_URL ?>layouts/v7/skins/images/unpin.png" data-action="unpin" /></a></li>
												</ul>
											</div>
										</div>
										<div class="settingsgroup-panel panel panel-default instaSearch">
											<div id="LBL_OTHER_SETTINGS_accordion" class="app-nav" role="tab">
												<div class="app-settings-accordion">
													<div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#LBL_OTHER_SETTINGS"><i class="indicator fa fa-chevron-right "></i>&nbsp;<span>Other Settings</span></a></div>
												</div>
											</div>
											<div id="LBL_OTHER_SETTINGS" class="panel-collapse collapse ulBlock ">
												<ul class="list-group widgetContainer">
													<li><a data-name="LBL_MAIL_SCANNER" href="<?php echo $site_URL ?>index.php?parent=Settings&module=MailConverter&view=List&block=4&fieldid=23" class="menuItemLabel ">Mail Converter<img id="23_menuItem" data-id="23" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="index.php?module=Vtiger&parent=Settings&action=Basic&mode=updateFieldPinnedStatus&fieldid=23"data-pintitle="pin"data-unpintitle="Unpin"data-pinimageurl="layouts/v7/skins/images/pin.png"data-unpinimageurl="layouts/v7/skins/images/unpin.png"title="pin" src="<?php echo $site_URL ?>layouts/v7/skins/images/pin.png" data-action="pin" /></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-10 col-md-10 ">
							<div class="settingsPageDiv content-area clearfix">
								<div class="bodyContents">
									<h3>Franchise Settings </h3>
									<div class="row">
										<div class="col-lg-12 col-md-12 ">
											<button type="button" class="btn btn-info btn-lg pull-right" style="display:block; margin-bottom:10px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Custom Info</button>
										</div>
									</div>
									<div class="table-responsive" style="
    height: 400px;
    overflow-y: scroll;
" >
										<table class="table table-bordered ">
											<colgroup>
												<col class="col-lg-2">
													<col class="col-lg-6">
														<col class="col-lg-3">
															<col class="col-lg-1">
											</colgroup>
											<thead>
												<tr>
													<th>Rule Number</th>
													<th>Post code</th>
													<th>Can be accessed by</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php 

 $countss = sizeof($ids);
 for ($i = 0; $i < $countss; $i++) { 

 ?>
													<tr>
														<td>
															<?php echo $i+1 ;?>
														</td>
														<td>
															<?php echo $zipcodes[$i]?>
														</td>
														<td>
															<?php echo $accessedpermissions[$i]?>
														</td>
														<td><a href="#" type="button" data-toggle="modal" data-target="#myModal1" onclick="getdata(<?php echo $ids[$i]; ?>)"><i class="fa fa-pencil "style="color:green; margin-left:5px;"></i></a> <a onclick="deletedata(<?php echo $ids[$i]; ?>)" href="#"><i class="fa fa-trash" style="color:red; margin-left:5px;"></i></a></td>
													</tr>
													<?php    }  ?>
											</tbody>
										</table>
									</div>
									<div> </div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div id='overlayPage'>
        <!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
        any one can use this by adding "show" class to it -->
					<div class='arrow'></div>
					<div class='data'> </div>
				</div>
				<div id='helpPageOverlay'></div>
			</div> 
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Add Custom Information  <button type="button" class="close" data-dismiss="modal">&times;</button></h4> </div>
						<div class="modal-body">
							<form action="<?php echo $site_URL ?>api/frachise_insert.php" method="POST" autocomplete="off" id="myForm"> <small for="">Post code:</small>
								<textarea class="form-control" name="zipcode" required rows="4" cols="50"> </textarea> <small for="">Can be accessed by :</small>
								<select class="form-control" name="accessedpermission" required>
									<optgroup label="Groups">
										<?php 
                                    
                                     $countss = sizeof($groupnames);
                                     for ($i = 0; $i < $countss; $i++) { 
                                    
                                     ?>
											<option value="<?php echo 'Groups:'.$groupnames[$i]?>">
												<?php echo $groupnames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="Roles">
										<?php 
                                    
                                     $countss = sizeof($rolenames);
                                     for ($i = 0; $i < $countss; $i++) { 
                                    
                                     ?>
											<option value="<?php echo 'Roles:'.$rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="RoleAndSubordinates">
										<?php 

                                         $countss = sizeof($rolenames);
                                         for ($i = 0; $i < $countss; $i++) { 
                                        
                                         ?>
											<option value="'RoleAndSubordinates:'.<?php echo $rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
								</select>
								<div class="formstatus"></div>
								<input type="submit" value="Submit" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px"> </form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal1" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Update Information  <button type="button" class="close" data-dismiss="modal">&times;</button></h4> </div>
						<div class="modal-body">
							<form action="<?php echo $site_URL ?>api/frachise_update.php" method="POST" autocomplete="off" id="myForm1"> <small for="">Post code:</small>
								<textarea class="form-control" name="zipcodes" id="zipcode" required rows="4" cols="50"> </textarea>
								<input type="hidden" class="form-control" name="ids" id="ids" required> <small for="">Can be accessed by :</small>
								<select class="form-control" name="accessedpermissions" id="accessedpermission" required>
									<optgroup label="Groups">
										<?php 
                                         $countss = sizeof($groupnames);
                                         for ($i = 0; $i < $countss; $i++) { 
                                        
                                         ?>
											<option value="<?php echo 'Groups:'.$groupnames[$i]?>">
												<?php echo $groupnames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="Roles">
										<?php 
                                    
                                     $countss = sizeof($rolenames);
                                     for ($i = 0; $i < $countss; $i++) { 
                                    
                                     ?>
											<option value="<?php echo 'Roles:'.$rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
									<optgroup label="RoleAndSubordinates">
										<?php 

                                         $countss = sizeof($rolenames);
                                         for ($i = 0; $i < $countss; $i++) { 
                                        
                                         ?>
											<option value="<?php echo 'RoleAndSubordinates:'.$rolenames[$i]?>">
												<?php echo $rolenames[$i]?>
											</option>
											<?php }?>
									</optgroup>
								</select>
								<div class="formstatus"></div>
								<input type="submit" value="Submit" class="adminregbtn btn-success" style="margin-left:41%;margin-top:20px; padding:10px 30px;  border-radius: 40px"> </form>
						</div>
					</div>
				</div>
			</div>
								<script>
$(document).ready(function(){
  $("#menu-toggle-action").click(function(){
    $(".app-list").toggle();
  });
});
</script>
			<script>
			function getdata(cust_id) {
				$.ajax({
					type: "GET",
					url: "frachise_getdatabyid.php?id=" + cust_id,
					dataType: 'json',
					async: false,
					success: function(obj) { //data will have what ever you echo'ed in controller
						$("#ids").val(obj.id);
						$("#zipcode").val(obj.zipcode);
						$("#accessedpermission").val(obj.accessedpermission);
					}
				});
			}

			function deletedata(cust_id) {
				$.ajax({
					type: "GET",
					url: "frachise_deletedata.php?id=" + cust_id,
					dataType: 'json',
					async: false,
					success: function(obj) { //data will have what ever you echo'ed in controller
						alert(obj.value);
						location.reload();
					}
				});
			}
			$('#myForm,#myForm1').submit(function(e) {
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
					if(datavalues[2] != "") window.location.href = datavalues[2];
					location.reload();
				});
			});
			</script>
			<style>
			<?php include_once('loadjs.php') ?>
			<!----Map Script--> 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> #map {
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
			
			
			$(document).ready(function(){
  $("#appnavigator").click(function(){
    $("#app-menu").toggle();
  });
});
			
			
			
			</script>
			
</body>

</html> 
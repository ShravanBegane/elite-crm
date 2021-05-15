{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.{vtranslate('LBL_DASHBOARD',$MODULE)}
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

<div class="app-menu hide" id="app-menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-xs-2 cursorPointer app-switcher-container">
				<div class="row app-navigator">
					<span id="menu-toggle-action" class="app-icon fa fa-bars"></span>
				</div>
			</div>
		</div>
		{assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}
		{assign var=HOME_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Home')}
		{assign var=DASHBOARD_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Dashboard')}
		<div class="app-list row">
			{if $USER_PRIVILEGES_MODEL->hasModulePermission($DASHBOARD_MODULE_MODEL->getId())}
				<div class="menu-item app-item dropdown-toggle" data-default-url="{$HOME_MODULE_MODEL->getDefaultUrl()}">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa fa-dashboard"></span>
						<span class="app-name textOverflowEllipsis"> Dashboard </span>
					</div>
				</div>
				<div class="menu-item app-item dropdown-toggle" data-default-url="index.php?module=Leads&view=List&app=MARKETING">
					<!--a href="index.php?module=Leads&view=List&app=MARKETING" title="Leads"-->
    					<div class="menu-items-wrapper">
    						<span class="vicon-leads"></span>
    						<span class="app-name textOverflowEllipsis"> Lead Management </span>
    					</div>
    				<!--/a-->
				</div>
			{/if}
			
			
		{*	<div class="dropdown app-modules-dropdown-container">
																								
				<div class="menu-item app-item dropdown-toggle app-item-color-RIGHT CLEAN" data-app-name="RIGHT CLEAN" id="RIGHT CLEAN_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
					<div class="menu-items-wrapper app-menu-items-wrapper">
						<span class="app-icon-list fa fa-hand-paper-o"></span>
						<span class="app-name textOverflowEllipsis"> Right Clean</span>
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
							<span class="module-icon"><i class='fa fa-cog fa-1x' title='Main Service'></i></span>
							<span class="module-name textOverflowEllipsis"> Main Service</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=Subservices&view=List&app=TOOLS" title="Sub Service">
							<span class="module-icon"><i class='fa fa-cogs fa-1x' title='Sub Service'></i></span>
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
						<a href="index.php?module=Locationmap&view=List&app=MARKETING" title="Employee Tracking">
							<span class="module-icon"><i class="fa  fa-map-marker fa-1x" title='Employee Tracking'></i></span>
							<span class="module-name textOverflowEllipsis">&nbspEmployee Tracking</span>
						</a>
					</li>
					<li>
						<a href="index.php?module=EmployeeRoaster&view=List&app=MARKETING" title="Employee Roster">
							<span class="module-icon"><i class="fa fa-history fa-1x" title='Employee Roster'></i></span>
							<span class="module-name textOverflowEllipsis"> Employee Roster</span>
						</a>
					</li>
				</ul>
			</div> *}
			
		{*	<div class="dropdown app-modules-dropdown-container">
																								
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
			</div> *}
			
			
			
			{assign var=APP_GROUPED_MENU value=Settings_MenuEditor_Module_Model::getAllVisibleModules()}
			{assign var=APP_LIST value=Vtiger_MenuStructure_Model::getAppMenuList()}
			{foreach item=APP_NAME from=$APP_LIST}
				{if $APP_NAME eq 'ANALYTICS'} {continue}{/if}
				{if !empty($APP_GROUPED_MENU.$APP_NAME)}
					<div class="dropdown app-modules-dropdown-container">
						{foreach item=APP_MENU_MODEL from=$APP_GROUPED_MENU.$APP_NAME}
							{assign var=FIRST_MENU_MODEL value=$APP_MENU_MODEL}
							{if $APP_MENU_MODEL}
								{break}
							{/if}
						{/foreach}
						{* Fix for Responsive Layout Menu - Changed data-default-url to # *}
						<div class="menu-item app-item dropdown-toggle app-item-color-{$APP_NAME}" data-app-name="{$APP_NAME}" id="{$APP_NAME}_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa {$APP_IMAGE_MAP.$APP_NAME}"></span>
								<span class="app-name textOverflowEllipsis"> {vtranslate("LBL_$APP_NAME")}</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="{$APP_NAME}_modules_dropdownMenu">
							{foreach item=moduleModel key=moduleName from=$APP_GROUPED_MENU[$APP_NAME]}
								{assign var='translatedModuleLabel' value=vtranslate($moduleModel->get('label'),$moduleName )}
								<li>
									{if $moduleName == 'Accounts' && $APP_NAME == 'RIGHTCLEAN'}
								    	<a href="index.php?module=Accounts&view=List&app=MARKETING" title="Clients">
								    	<span class="module-icon"><i class="vicon-meeting"></i></span>
										<span class="module-name textOverflowEllipsis"> Clients</span>
								    {else if $moduleName == 'Users' && $APP_NAME == 'RIGHTCLEAN'}
								    	<a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1" title="Employee Management">
								    	<span class="module-icon">{$moduleModel->getModuleIcon()}</span>
										<span class="module-name textOverflowEllipsis"> Employee Management</span>
								    {else}
								        <a href="{$moduleModel->getDefaultUrl()}&app={$APP_NAME}" title="{$translatedModuleLabel}">
								        <span class="module-icon">{$moduleModel->getModuleIcon()}</span>
										<span class="module-name textOverflowEllipsis"> {$translatedModuleLabel}</span>
								    {/if}
									</a>
								</li>
							{/foreach}
						</ul>
					</div>
				{/if}
			{/foreach}
			<div class="app-list-divider"></div>
			{assign var=MAILMANAGER_MODULE_MODEL value=Vtiger_Module_Model::getInstance('MailManager')}
			{if $USER_PRIVILEGES_MODEL->hasModulePermission($MAILMANAGER_MODULE_MODEL->getId())}
				<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=MailManager&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa">{$MAILMANAGER_MODULE_MODEL->getModuleIcon()}</span>
						<span class="app-name textOverflowEllipsis"> {vtranslate('MailManager')}</span>
					</div>
				</div>
			{/if}
			{assign var=DOCUMENTS_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Documents')}
			{if $USER_PRIVILEGES_MODEL->hasModulePermission($DOCUMENTS_MODULE_MODEL->getId())}
				<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=Documents&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa">{$DOCUMENTS_MODULE_MODEL->getModuleIcon()}</span>
						<span class="app-name textOverflowEllipsis"> {vtranslate('Documents')}</span>
					</div>
				</div>
			{/if}
			{*{if $USER_MODEL->isAdminUser()}
				{if vtlib_isModuleActive('ExtensionStore')}
					<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
						<div class="menu-items-wrapper">
							<span class="app-icon-list fa fa-shopping-cart"></span>
							<span class="app-name textOverflowEllipsis"> {vtranslate('LBL_EXTENSION_STORE', 'Settings:Vtiger')}</span>
						</div>
					</div>
				{/if}
			{/if}*}
			{if $USER_MODEL->isAdminUser()}
				<div class="dropdown app-modules-dropdown-container">
					<div class="menu-item app-item dropdown-toggle app-item-misc" data-app-name="TOOLS" id="TOOLS_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
						<div class="menu-items-wrapper app-menu-items-wrapper">
							<span class="app-icon-list fa fa-cog"></span>
							<span class="app-name textOverflowEllipsis"> {vtranslate('LBL_SETTINGS', 'Settings:Vtiger')}</span>
							{if $USER_MODEL->isAdminUser()}
								<span class="fa fa-chevron-right pull-right"></span>
							{/if}
						</div>
					</div>
					<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="{$APP_NAME}_modules_dropdownMenu" data-height="0.27">
						<li>
							<a href="?module=Vtiger&parent=Settings&view=Index">
								<span class="fa fa-cog module-icon"></span>
								<span class="module-name textOverflowEllipsis"> {vtranslate('LBL_CRM_SETTINGS','Vtiger')}</span>
							</a>
						</li>
						<li>
							<a href="?module=Users&parent=Settings&view=List">
								<span class="fa fa-user module-icon"></span>
								<span class="module-name textOverflowEllipsis"> {vtranslate('LBL_MANAGE_USERS','Vtiger')}</span>
							</a>
						</li>
					</ul>
				</div>
			{/if}
		</div>
	</div>
</div>

{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}

{strip}
	<div class='related-tabs row'>
		<div class="col-md-12 col-lg-12">	
				<ul class="nav nav-tabs">
			{foreach item=RELATED_LINK from=$DETAILVIEW_LINKS['DETAILVIEWTAB']}
				{assign var=RELATEDLINK_URL value=$RELATED_LINK->getUrl()}
				{assign var=RELATEDLINK_LABEL value=$RELATED_LINK->getLabel()}
				{assign var=RELATED_TAB_LABEL value={vtranslate('SINGLE_'|cat:$MODULE_NAME, $MODULE_NAME)}|cat:" "|cat:$RELATEDLINK_LABEL}
				<li class="tab-item tab_{$RELATED_LINK->get('linkKey')} {if $RELATED_TAB_LABEL==$SELECTED_TAB_LABEL}active{/if}" data-url="{$RELATEDLINK_URL}&tab_label={$RELATED_TAB_LABEL}&app={$SELECTED_MENU_CATEGORY}" data-label-key="{$RELATEDLINK_LABEL}" data-link-key="{$RELATED_LINK->get('linkKey')}" >
					<a href="{$RELATEDLINK_URL}&tab_label={$RELATEDLINK_LABEL}&app={$SELECTED_MENU_CATEGORY}" class="textOverflowEllipsis">
						<span class="tab-label"><strong>{vtranslate($RELATEDLINK_LABEL,{$MODULE_NAME})}</strong></span>
					</a>
				</li>
			{/foreach}

			{assign var=RELATEDTABS value=$DETAILVIEW_LINKS['DETAILVIEWRELATED']}
			{assign var=COUNT value=$RELATEDTABS|@count}

			{assign var=LIMIT value = 10}
			{if $COUNT gt 10}
				{assign var=COUNT1 value = $LIMIT}
			{else}
				{assign var=COUNT1 value=$COUNT}
			{/if}

			{for $i = 0 to $COUNT1-1}
				{assign var=RELATED_LINK value=$RELATEDTABS[$i]}
				{assign var=RELATEDMODULENAME value=$RELATED_LINK->getRelatedModuleName()}
				{assign var=RELATEDFIELDNAME value=$RELATED_LINK->get('linkFieldName')}
				{assign var="DETAILVIEWRELATEDLINKLBL" value= vtranslate($RELATED_LINK->getLabel(),$RELATEDMODULENAME)}
				<li class="tab-item tab-item_{$RELATED_LINK->getLabel()} {if (trim($RELATED_LINK->getLabel())== trim($SELECTED_TAB_LABEL)) && ($RELATED_LINK->getId() == $SELECTED_RELATION_ID)}active{/if}" data-url="{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" data-label-key="{$RELATED_LINK->getLabel()}"
					data-module="{$RELATEDMODULENAME}" data-relation-id="{$RELATED_LINK->getId()}" {if $RELATEDMODULENAME eq "ModComments"} title {else} title="{$DETAILVIEWRELATEDLINKLBL}"{/if} {if $RELATEDFIELDNAME}data-relatedfield ="{$RELATEDFIELDNAME}"{/if}>
					<a href="index.php?{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" class="textOverflowEllipsis" displaylabel="{$DETAILVIEWRELATEDLINKLBL}" recordsCount="" >
						{if $RELATEDMODULENAME eq "ModComments"}
							<i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong>{$DETAILVIEWRELATEDLINKLBL}</strong></span>
						{else}
							<span class="tab-icon">
								{assign var=RELATED_MODULE_MODEL value=Vtiger_Module_Model::getInstance($RELATEDMODULENAME)}  
								{$RELATED_MODULE_MODEL->getModuleIcon()}
							</span>
						{/if}
						&nbsp;<span class="numberCircle hide">0</span>
					</a>
				</li>
				{if ($RELATED_LINK->getId() == {$smarty.request.relationId})}
					{assign var=MORE_TAB_ACTIVE value='true'}
				{/if}
			{/for}
			
			{if $MORE_TAB_ACTIVE neq 'true'}
				{for $i = 0 to $COUNT-1}
					{assign var=RELATED_LINK value=$RELATEDTABS[$i]}
					{if ($RELATED_LINK->getId() == {$smarty.request.relationId})}
						{assign var=RELATEDMODULENAME value=$RELATED_LINK->getRelatedModuleName()}
						{assign var=RELATEDFIELDNAME value=$RELATED_LINK->get('linkFieldName')}
						{assign var="DETAILVIEWRELATEDLINKLBL" value= vtranslate($RELATED_LINK->getLabel(),$RELATEDMODULENAME)}
						<li class="more-tab moreTabElement active"  data-url="{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" data-label-key="{$RELATED_LINK->getLabel()}"
							data-module="{$RELATEDMODULENAME}" data-relation-id="{$RELATED_LINK->getId()}" {if $RELATEDMODULENAME eq "ModComments"} title {else} title="{$DETAILVIEWRELATEDLINKLBL}"{/if} {if $RELATEDFIELDNAME}data-relatedfield ="{$RELATEDFIELDNAME}"{/if}>
							<a href="index.php?{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" class="textOverflowEllipsis" displaylabel="{$DETAILVIEWRELATEDLINKLBL}" recordsCount="" >
								{if $RELATEDMODULENAME eq "ModComments"}
									<i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong>{$DETAILVIEWRELATEDLINKLBL}</strong></span>
										<a href="mailto:someone@example.com">Employee Location</a>
								{else}  
									<span class="tab-icon">
										{assign var=RELATED_MODULE_MODEL value=Vtiger_Module_Model::getInstance($RELATEDMODULENAME)}  
										{$RELATED_MODULE_MODEL->getModuleIcon()}
									</span>
								{/if}
								&nbsp;<span class="numberCircle hide">0</span>
							</a>
						</li>
						{break}
					{/if}
				{/for}
			{/if}
			{if $COUNT gt $LIMIT}
				<li class="dropdown related-tab-more-element">
					<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
						<span class="tab-label"> 
							<strong>{vtranslate("LBL_MORE",$MODULE_NAME)}</strong> &nbsp; <b class="fa fa-caret-down"></b>
						</span>
					</a>
					<ul class="dropdown-menu" id="relatedmenuList">
						{for $j = $COUNT1 to $COUNT-1}
							{assign var=RELATED_LINK value=$RELATEDTABS[$j]}
							{assign var=RELATEDMODULENAME value=$RELATED_LINK->getRelatedModuleName()}
							{assign var=RELATEDFIELDNAME value=$RELATED_LINK->get('linkFieldName')}
							{assign var="DETAILVIEWRELATEDLINKLBL" value= vtranslate($RELATED_LINK->getLabel(),$RELATEDMODULENAME)}
							<li class="more-tab {if (trim($RELATED_LINK->getLabel())== trim($SELECTED_TAB_LABEL)) && ($RELATED_LINK->getId() == $SELECTED_RELATION_ID)}active{/if}" data-url="{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" data-label-key="{$RELATED_LINK->getLabel()}"
								data-module="{$RELATEDMODULENAME}" title="" data-relation-id="{$RELATED_LINK->getId()}" {if $RELATEDFIELDNAME}data-relatedfield ="{$RELATEDFIELDNAME}"{/if}>
								<a href="index.php?{$RELATED_LINK->getUrl()}&tab_label={$RELATED_LINK->getLabel()}&app={$SELECTED_MENU_CATEGORY}" displaylabel="{$DETAILVIEWRELATEDLINKLBL}" recordsCount="">
									{if $RELATEDMODULENAME eq "ModComments"}
										<i class="fa fa-comment"></i> &nbsp;<span class="tab-label">{$DETAILVIEWRELATEDLINKLBL}</span>
									{else}  
										{assign var=RELATED_MODULE_MODEL value=Vtiger_Module_Model::getInstance($RELATEDMODULENAME)}  
										<span class="tab-icon textOverflowEllipsis">
											{$RELATED_MODULE_MODEL->getModuleIcon()}
											<span class="content"> &nbsp;{$DETAILVIEWRELATEDLINKLBL}</span>
										</span>
									{/if}
									&nbsp;<span class="numberCircle hide">0</span>
								</a>
							</li>
						{/for}
					</ul>
				</li>
			{/if}
		</ul>
		</div>
		
    <div class="col-md-12 col-lg-12 detailViewButtoncontainer">
        <div class="pull-right btn-toolbar">
            <div class="btn-group">
            {assign var=STARRED value=$RECORD->get('starred')}
{if $MODULE!='Products' && $MODULE!='Documents' && $MODULE!='Assets' && $MODULE!='ServiceContracts' && $MODULE!='Services' && $MODULE!='PriceBooks' && $MODULE!='Vendors' && $MODULE!='ProjectTask' && $MODULE!='ProjectMilestone' && $MODULE!='Teams' && $MODULE!='Visitors'}
{php}
session_start();
                                       include("config.inc.php");
											 $conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);

											if ($conn->connect_error) {
											die("Connection failed: " . $conn->connect_error);
											 } 											 
											  $query="SELECT id FROM `vtiger_users` WHERE `id` = ".$_SESSION["user_id"];
											 $result = mysqli_query($conn,$query);
											 $data=mysqli_fetch_assoc($result);
											
	
                                       
if($data['id'] != 11){
echo '<button id="{$MODULE}_more" class="btn btn-default addButton createActivity textOverflowEllipsis max-width-100" style="margin-top: -44px !important;" title="Add Activity" data-name="Activity" data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)" type="button">
<i class="fa fa-plus"></i>&nbsp;&nbsp;Add Activity</button>';
}
 {/php}
{/if}

          
          
            </div>
                    
        </div>
        
        <input type="hidden" name="record_id" value="{$RECORD->getId()}">
    </div>
	</div>
<style>
#Leads_detailView_basicAction_LBL_SEND_EMAIL {
    display: block !important;
}
</style>
{if $MODULE == 'Leads'}
<style>
.vicon-emails {
     display: block !important;
}
.vicon-calendar {
     display: block !important;
}
.vicon-documents {
     display: block !important;
}
</style>
{/if}

{if $MODULE == 'Teams'}
<style>
button#starToggle {
    display: none;
}

button#Teams_more {
    display: none;
}
</style>
{/if}
	{strip}
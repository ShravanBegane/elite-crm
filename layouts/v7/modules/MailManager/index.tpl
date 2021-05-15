{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
 <style>
     @media (max-width: 780px)
     {
         .mobile{
             margin-left: -225px;
         }
         .mmDescription{
                height: 0px;
                width: 80%;
                border: 1.5px solid;
                border-radius: 2px;
                border-color: #DDDDDD;
                font-size: 11pt;
                margin-top: 0px;
                margin-left: 0%;
                background: #F9F9F9;
                padding: 0px;
         }
     }
 </style>
{strip}
    {assign var=IS_MAILBOX_EXISTS value=$MAILBOX->exists()}
    <input type="hidden" id="isMailBoxExists" value="{if $IS_MAILBOX_EXISTS}1{else}0{/if}">
    {if !$IS_MAILBOX_EXISTS}
        <div class="mmDescription">
            <center class="mobile">
                <br><br>
                <div>{vtranslate('LBL_MODULE_DESCRIPTION', $MODULE)}</div>
                <br><br><br>
                <button class="btn btn-success mailbox_setting"><strong>{vtranslate('LBL_CONFIGURE_MAILBOX', $MODULE)}</strong></button>
            </center>
        </div>
    {else}
        <div id="mailmanagerContainer" class="clearfix">
            <input type="hidden" id="refresh_timeout" value="{$MAILBOX->refreshTimeOut()}"/>
            <div id="mails_container" class='col-lg-5'></div>
            <div id="mailPreviewContainer" class="col-lg-7">
                <div class="mmListMainContainer">
                    <center><strong>{vtranslate('LBL_NO_MAIL_SELECTED_DESC', $MODULE)}</strong></center>
                </div>
            </div>
        </div>
    {/if}
{/strip}

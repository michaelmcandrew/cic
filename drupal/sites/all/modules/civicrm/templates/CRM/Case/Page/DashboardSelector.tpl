{*
 +--------------------------------------------------------------------+
 | CiviCRM version 3.1                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2010                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
{capture assign=expandIconURL}<img src="{$config->resourceBase}i/TreePlus.gif" alt="{ts}open section{/ts}"/>{/capture}
{strip}
<table class="caseSelector">
  <tr class="columnheader">
    <th></th>
    <th>{ts}Client{/ts}</th>
    <th>{ts}Status{/ts}</th>
    <th>{ts}Type{/ts}</th>
    <th>{ts}My Role{/ts}</th>
    <th>{ts}Case Manager{/ts}</th>      
    <th>{if $list EQ 'upcoming'}{ts}Next Sched.{/ts}{else}{ts}Most Recent{/ts}{/if}</th>

    <th></th>
  </tr>

  {counter start=0 skip=1 print=false}
  {foreach from=$rows item=row}
 
  <tr id='{$list}Rowid{$row.case_id}' class="crm-case crm-case_{$row.case_id}">
	<td>
        {* &nbsp;{$row.contact_type_icon}<br /> *}
        <span id="{$list}{$row.case_id}_show">
	    <a href="#" onclick="show('{$list}CaseDetails{$row.case_id}', 'table-row');
                             {$list}CaseDetails('{$row.case_id}','{$row.contact_id}'); 
                             hide('{$list}{$row.case_id}_show');
                             show('minus{$list}{$row.case_id}_hide');
                             show('{$list}{$row.case_id}_hide','table-row');
                             return false;"><img src="{$config->resourceBase}i/TreePlus.gif" class="action-icon" alt="{ts}open section{/ts}"/></a>
	</span>
	<span id="minus{$list}{$row.case_id}_hide">
	    <a href="#" onclick="hide('{$list}CaseDetails{$row.case_id}');
                             show('{$list}{$row.case_id}_show', 'table-row');
                             hide('{$list}{$row.case_id}_hide');
                             hide('minus{$list}{$row.case_id}_hide');
                             return false;"><img src="{$config->resourceBase}i/TreeMinus.gif" class="action-icon" alt="{ts}open section{/ts}"/></a>
	</td>

    <td class="crm-case-phone"><a href="{crmURL p='civicrm/contact/view' q="reset=1&cid=`$row.contact_id`"}">{$row.sort_name}</a>{if $row.phone}<br /><span class="description">{$row.phone}</span>{/if}<br /><span class="description">{ts}Case ID{/ts}: {$row.case_id}</span></td>
    <td class="{$row.class} crm-case-case_status">{$row.case_status}</td>
    <td class="crm-case-case_type">{$row.case_type}</td>
    <td class="crm-case-case_role">{if $row.case_role}{$row.case_role}{else}---{/if}</td>
    <td class="crm-case-casemanager">{if $row.casemanager_id}<a href="{crmURL p='civicrm/contact/view' q="reset=1&cid=`$row.casemanager_id`"}">{$row.casemanager}</a>{else}---{/if}</td>
    {if $list eq 'upcoming'}
    	 <td class="crm-case-case_scheduled_activity">
	   {if $row.case_upcoming_activity_viewable}
	      <a href="javascript:viewActivity({$row.case_scheduled_activity_id}, {$row.contact_id});" title="{ts}View this activity.{/ts}">{$row.case_scheduled_activity_type}</a>
	   {else}
	      {$row.case_scheduled_activity_type}	
	   {/if}    
	     &nbsp;&nbsp;
	   {if $row.case_upcoming_activity_editable}
	     <a href="{crmURL p="civicrm/case/activity" q="reset=1&cid=`$row.contact_id`&caseid=`$row.case_id`&action=update&id=`$row.case_scheduled_activity_id`"}" title="{ts}Edit this activity.{/ts}"><span class="icon edit-icon"></span></a>
	   {/if} 
	   <br />	  
	   {$row.case_scheduled_activity_date|crmDate}
         </td>
        
    {elseif $list eq 'recent'}
    	 <td class="crm-case-case_recent_activity">
	 {if $row.case_recent_activity_viewable}	
	     <a href="javascript:viewActivity({$row.case_recent_activity_id}, {$row.contact_id});" title="{ts}View this activity.{/ts}">{$row.case_recent_activity_type}</a>
	  {else}
	     {$row.case_recent_activity_type}
	  {/if}   
	  {if $row.case_recent_activity_editable and $row.case_recent_activity_type_name != 'Inbound Email' && $row.case_recent_activity_type_name != 'Email'}&nbsp;&nbsp;<a href="{crmURL p="civicrm/case/activity" q="reset=1&cid=`$row.contact_id`&caseid=`$row.case_id`&action=update&id=`$row.case_recent_activity_id`"}" title="{ts}Edit this activity.{/ts}"><span class="icon edit-icon"></span></a>
	  {/if}<br /> 
          {$row.case_recent_activity_date|crmDate}
	 </td>   
    {/if}

    <td>{$row.action}</td>
   </tr>
   <tr id="{$list}{$row.case_id}_hide" class="crm-case_{$row.case_id}">
     <td>
     </td>
     <td colspan="7" width="99%" class="enclosingNested crm-case_{$row.case_id}">
        <div id="{$list}CaseDetails{$row.case_id}"></div>
     </td>
   </tr>
 <script type="text/javascript">
     hide('{$list}{$row.case_id}_hide');
     hide('minus{$list}{$row.case_id}_hide');
 </script>
  {/foreach}

    {* Dashboard only lists 10 most recent casess. *}
    {if $context EQ 'dashboard' and $limit and $pager->_totalItems GT $limit }
      <tr class="even-row">
        <td colspan="10"><a href="{crmURL p='civicrm/case/search' q='reset=1'}">&raquo; {ts}Find more cases{/ts}... </a></td>
      </tr>
    {/if}

</table>
{/strip}

{* Build case details*}
{literal}
<script type="text/javascript">

function {/literal}{$list}{literal}CaseDetails( caseId, contactId )
{

  var dataUrl = {/literal}"{crmURL p='civicrm/case/details' h=0 q='snippet=4&caseId='}{literal}" + caseId +'&cid=' + contactId;
  cj.ajax({
            url     : dataUrl,
            dataType: "html",
            timeout : 5000, //Time in milliseconds
            success : function( data ){
                           cj( '#{/literal}{$list}{literal}CaseDetails' + caseId ).html( data );
                      },
            error   : function( XMLHttpRequest, textStatus, errorThrown ) {
                              console.error( 'Error: '+ textStatus );
                    }
         });
}
</script>
{/literal}

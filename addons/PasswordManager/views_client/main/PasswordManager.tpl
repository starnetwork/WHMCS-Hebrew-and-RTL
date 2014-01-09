{**********************************************************************
* Customization Services by ModulesGarden.com
* Copyright (coffee) ModulesGarden, INBS Group Brand, All Rights Reserved 
* (${date}, ${time})
*
*  CREATED BY MODULESGARDEN       ->        http://modulesgarden.com
*  CONTACT                        ->       contact@modulesgarden.com
*
*
*
*
* This software is furnished under a license and may be used and copied
* only  in  accordance  with  the  terms  of such  license and with the
* inclusion of the above copyright notice.  This software  or any other
* copies thereof may not be provided or otherwise made available to any
* other person.  No title to and  ownership of the  software is  hereby
* transferred.
*
*
**********************************************************************}

{**
* @author Maciej Husak <maciej@modulesgarden.com>
*}

<div class="whmcscontainer contentpadded">

{if in_array('profile',$contactpermissions) and in_array('contacts',$contactpermissions) and in_array('products',$contactpermissions) and in_array('manageproducts',$contactpermissions) and in_array('tickets',$contactpermissions) and in_array('invoices',$contactpermissions) and in_array('orders',$contactpermissions)}

    {if !$editrequest}	{* Hide on edit      *}
            {if !$allowtorequest}	{* Hide on edit      *}
                    <h2 style="margin-bottom:10px;">{$lang.password_manager}</h2>
                    <table class="table table-striped table-framed">
                        <thead>
                            <tr>
                                <th>{$lang.name}</th>
                                <th>{$lang.username}</th>
                                <th style="width:200px;">{$lang.password}</th>
                                <th style="width:40%">{$lang.notes}</th>
                                <th style="min-width:170px">{$lang.actions}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach item=login from=$logins name=fooo}
                                <tr class="{cycle values="clientareatableactive,clientareatablesuspended"}">
                                    <td>{if $login.website && $login.website!='http://'}<a href="{$login.website}" target="_blank">{$login.name}</a>{else}{$login.name}{/if}</td>
                                    <td>{$login.username}</td>
                                    <td><input class="btn btn-mini info showpass" style="height:24px;" type="submit" rel="{$login.id}" value="{$lang.copy_to_clipboard}"/></td>
                                    <td>{$login.notes}</td>
                                    <td><a href="{$login.login_url}" class="btn btn-mini btn-warning"  {if $login.login_url && $login.login_url =='http://'}onclick="alert('{$lang.url_is_empty}');return false;" {/if} target="_blank">{$lang.login_page}</a>
                                    {if $login.allowedit} <a href="index.php?m=PasswordManager&view=edit&lid={$login.id}"  class="btn btn-mini btn-info">{$lang.edit}</a>{/if}
                                {if $login.allowedit} <a href="index.php?m=PasswordManager&view=delete&lid={$login.id}"onclick="return confirm('{$lang.confirm_delete}');" class="btn btn-mini btn-danger">{$lang.remove}</a>{/if}
                            </td>
                        </tr>
                    {foreachelse}
                        <tr>
                            <td colspan="6" class="textcenter">{$LANG.norecordsfound}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            {if isset($allowtoadd) && ($allowtoadd eq '1')}
                <p><a href="index.php?m=PasswordManager&view=add" class="btn btn-primary btn-small">{$lang.add_password}</a></p>
            {/if}

            {if $services} 
                <h2 style="margin-bottom:10px;">{$lang.products_services}</h2>
                <table class="table table-striped table-framed">
                    <thead>
                        <tr>
                            <th>{$LANG.orderproduct}</th>
                            <th>{$lang.username}</th>
                            <th>{$lang.password}</th>
                            <th>{$lang.billingcycle}</th>
                            <th>{$lang.nextrenew}</th>
                            <th>{$lang.ips}</th>
                            <th>{$LANG.clientareastatus}</th>
                            <th>{$lang.details}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$services item=service}
                            <tr>
                                <td>{$service.name}{if $service.domain}<br /> <a
                                        href="http://{$service.domain}" target="_blank">{$service.domain}</a>{/if}
                                </td>
                                <td>{$service.username}</td>
                                <td><input class="btn btn-mini info showpassforservice" type="submit" rel="{$service.id}" style="height:24px;" value="{$lang.copy_to_clipboard}"/></td>
                                <td>{$service.billingcycle}</td>
                                <td>{$service.nextduedate}</td>
                                <td>{if !$service.assignedips}{$service.dedicatedip}{/if}{if $service.assignedips}{$service.assignedips}<br />{/if}</td>
                                <td><span class="label {$service.status}" style="padding: 1px 4px 2px;">{$service.domainstatus}</span>
                                </td>
                                <td class="textcenter">
                                    <form method="get" action="clientarea.php?" style="margin:0;">
                                        <input type="hidden" name="action" value="productdetails" /> 
                                        <input type="hidden" name="id" value="{$service.id}" /> 
                                        <input type="submit" value="{$LANG.clientareaviewdetails}" class="btn btn-info btn-mini" style="height:24px;" />
                                    </form>
                                </td>
                            </tr>
                        {foreachelse}
                            <tr>
                                <td colspan="6" class="textcenter">{$LANG.norecordsfound}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
        {/if} {* End !$services    *}
{/if} {* End !$editrequest *}
{/if} {* End !$allowtorequest *}



{if $editrequest}
    <h2 style="margin-bottom:10px;">{$lang.password_edit}</h2>
    <p><a href="index.php?m=PasswordManager" class="btn btn-small" ><i class="icon-arrow-left"></i> {$lang.back_to}</a></p>
    <form method="post" action="index.php?m=PasswordManager&amp;view=edit&amp;lid={$editrequest.id}">
        <table class="table table-bordered table-striped"><tbody>
                <tr>
                    <td width="15%" class="fieldlabel">{$lang.name}: </td>
                    <td class="fieldarea"> <input type="text" name="name" value="{$editrequest.name}" size="40"/> </td>
                    <td width="15%" class="fieldlabel">{$lang.username}: </td>
                    <td class="fieldarea"> <input type="text" name="username" value="{$editrequest.username}" size="40" /> </td>
                </tr> <tr>
                    <td width="15%" class="fieldlabel">{$lang.password}: </td>
                    <td class="fieldarea"> <input type="password" name="password" value="" size="60" placeholder="{$lang.edit_to_change}" /></td>
                    <td class="fieldlabel" width="15%">{$lang.website}: </td>
                    <td colspan="3" class="fieldarea"> <input type="text" name="website" value="{$editrequest.website}" size="100"/></td>
                </tr> <tr>
                    <td class="fieldlabel" width="15%">{$lang.loginurl}: </td>
                    <td colspan="3" class="fieldarea"> <input type="text" name="login_url" value="{$editrequest.login_url}" size="100" width="100%" /></td>
                </tr> <tr>
                    <td class="fieldlabel" width="15%">{$lang.notes}:</td>
                    <td colspan="3" class="fieldarea">
                        <textarea name="notes" style="min-width:99%;" rows="5" >{$editrequest.notes}</textarea>
                    </td>
                </tr>
               {if $superadmin}
                <tr>
                    <td class="fieldlabel" width="15%">{$lang.visibility}:</td>
                    <td class="fieldarea" colspan="3" style="text-align:left!important;">
                        <input type="checkbox" value="1" name="visibility[admins]" {if $editrequest.visibility==3}checked="checked"{/if} /> {*{$lang.checktoallow}*}
                        <input type="hidden" name="admin_roles_with_access[]" value="{$superadmin}" />
                    </td>
                </tr>
                {/if}
            </tbody></table>
            <input type="hidden" name="clients_with_access[]" value="{$clientsdetails.id}" />
            <input type="hidden" name="editable[clients]" value="2" />
            <input type="hidden" name="visibility[clients]" value="2" />
            <input type="hidden" name="login[id]" value="{$editrequest.id}" />
            <input type="hidden" name="action" value="edit" />
            <input type="submit" name='submit_btn' class="btn btn-success btn-small" style="height:24px;" value="{$lang.edit_password}" />            
    </form>

{/if} {* End editrequest *}
    {if !$editrequest}	{* Hide on edit *}
            {if $allowtoadd}
                {if $allowtorequest eq 'add'}
                    <h2 style="margin-bottom:10px;">{$lang.add_new_password}</h2>
                    <p><a href="index.php?m=PasswordManager" class="btn btn-small"><i class="icon-arrow-left"></i> {$lang.back_to}</a></p>
                    <form method="post" action="">
                        <table class="table table-bordered table-striped" ><tbody>
                                <tr>
                                    <td width="15%" class="fieldlabel">{$lang.name}: </td>
                                    <td class="fieldarea"> <input type="text" name="name" value="{$editrequest.name}" size="40"/> </td>
                                    <td width="15%" class="fieldlabel">{$lang.username}: </td>
                                    <td class="fieldarea"> <input type="text" name="username" value="{$editrequest.username}" size="40" /> </td>
                                </tr> <tr>
                                    <td width="15%" class="fieldlabel">{$lang.password}: </td>
                                    <td class="fieldarea"> <input type="password" name="password" value="" size="60" /> </td>
                                    <td class="fieldlabel" width="15%">{$lang.website}: </td>
                                    <td colspan="3" class="fieldarea"> <input type="text" name="website" value="{$editrequest.website}" size="100"/></td>
                                </tr> <tr>
                                    <td class="fieldlabel" width="15%">{$lang.loginurl}: </td>
                                    <td colspan="3" class="fieldarea"> <input type="text" name="login_url" value="{$editrequest.login_url}" size="100"/></td>
                                </tr> <tr>
                                    <td class="fieldlabel" width="15%">{$lang.notes}:</td>
                                    <td colspan="3" class="fieldarea">
                                        <textarea name="notes" style="min-width:99%;" rows="5" >{$editrequest.notes|nl2br}</textarea>
                                    </td>
                                </tr>
                                {if $superadmin}
                                <tr>
                                    <td class="fieldlabel" width="15%">{$lang.visibility}:</td>
                                    <td class="fieldarea" colspan="3" style="text-align:left!important;">
                                        <input type="checkbox" value="1" name="visibility[admins]" {if $editrequest.visibiltiy}checked{/if} /> {*{$lang.checktoallow}*}
                                        <input type="hidden" name="admin_roles_with_access[]" value="{$superadmin}" />
                                    </td>
                                </tr>
                                {/if}
                            </tbody></table>
                        <input type="hidden" name="clients_with_access[]" value="{$clientsdetails.id}" />
                        <input type="hidden" name="visibility[clients]" value="2" />
                        <input type="hidden" name="editable[clients]" value="2" />     
                        <input type="hidden" name="action" value="add" />
                        <input type="submit" name='submit_btn' class="btn btn-success btn-small" style="height:24px;" value="{$lang.add_password}" />
                    </form>
            {/if} {* End $allowtoadd   *}
    {/if} {* End $allowtorequest   *}
    {/if} {* End !$editrequest *}

            {else} {* Main Contacts Only *}
<h4>{$lang.no_permission}</h4>
{/if}
    
    
{literal}
</div>
<script type="text/javascript">
       jQuery(document).ready(function(){
            jQuery('table').delegate(".showpass","click",function(){
                var e  = jQuery(this);
                var id = jQuery(this).attr("rel");
                jQuery.post('index.php?m=PasswordManager',{'_ajax':1,'id':id},function(data){
                    var res = jQuery.parseJSON(data);
                    if(res.success==1){
                        jQuery(e).replaceWith('<input type="text" readonly style="width:150px;" onclick="this.select();" value="'+res.pass+'" /> <button class="btn btn-mini hide-btn" rel="'+id+'">{/literal}{$lang.hide}{literal}</button>');
                    } else {
                        alert(res.msg);
                    }
                });
                return false;
            });
            
            jQuery('table').delegate(".hide-btn","click",function(){
                var id = jQuery(this).attr("rel");
                jQuery(this).closest("td").html('<input class="btn btn-mini info showpass" style="height:24px;" type="submit" rel="'+id+'" value="{/literal}{$lang.copy_to_clipboard}{literal}"/>');
                return false;
            });
            
            jQuery('table').delegate(".showpassforservice","click",function(){
                var e  = jQuery(this);
                var id = jQuery(this).attr("rel");
                jQuery.post('index.php?m=PasswordManager',{'_ajax':1,'serviceid':id},function(data){
                    var res = jQuery.parseJSON(data);
                    if(res.success==1){
                        jQuery(e).replaceWith('<input type="text" readonly style="width:150px;" onclick="this.select();" value="'+res.pass+'" /> <button class="btn btn-mini hide-btn2" rel="'+id+'">{/literal}{$lang.hide}{literal}</button>');
                    } else {
                        alert(res.msg);
                    }
                });
                return false;
            });
            
            jQuery('table').delegate(".hide-btn2","click",function(){
                var id = jQuery(this).attr("rel");
                jQuery(this).closest("td").html('<input class="btn btn-mini info showpassforservice" style="height:24px;" type="submit" rel="'+id+'" value="{/literal}{$lang.copy_to_clipboard}{literal}"/>');
                return false;
            });
       });    
</script>
<style type="text/css">
    .table td,.table th {text-align: center!important;}
    table .btn {font-size:11px!important;font-weight: bold!important;}
    .label.active {background-color: #46A546!important;}

</style>
{/literal}
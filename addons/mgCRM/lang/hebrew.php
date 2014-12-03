<?php

/**
 * Default language file for module
 * @author Piotr Sarzyński <piotr.sa@modulesgarden.com>
 */


/****************************************************************************************
 *                          Endlish Language
 ****************************************************************************************/

# MAIN NAVIGATION
$_ADDONLANG['Tickets']                 = 'טיקטים';
$_ADDONLANG['Create Lead from Ticket'] = 'יצירת ליד מטיקט';


# DataTables Language
$_ADDONLANG['DataTable_lang'] = json_encode(array(
    "emptyTable"     => "אין נתונים להצגה בטבלה זו",
    "info"           => "הצגה מההתחלה ועד הסוף של כל הערכים",
    "infoEmpty"      => "0 עד 0 מתוך 0 ערכים",
    "infoFiltered"   => "(ממוין לפי סך כל הערכים)",
    "infoPostFix"    => "",
    "thousands"      => ",",
    "lengthMenu"     => "Records per page: _MENU_ ",
    "loadingRecords" => "טוען רשומות...",
    "processing"     => "חושב...",
    "search"         => "חפש: ",
    "zeroRecords"    => "לא נמצאו רשומות מתאימות",
    "paginate"       => array(
        "first"    => "לראשון",
        "last"     => "לאחרון",
        "next"     => "הבא",
        "previous" => "הקודם"
    ),
    "aria"          => array(
        "sortAscending"  => ": activate to sort column ascending",
        "sortDescending" => ": activate to sort column descending"
    )
));

$_ADDONLANG['validation_required']  = 'Field % is required';
$_ADDONLANG['validation_date']      = 'Incorrect date in %';
$_ADDONLANG['validation_datetime']  = 'Incorrect date in %';
$_ADDONLANG['validation_is_int']    = 'Field % must be integer value';
$_ADDONLANG['test']                 = 'Lang test!';

# Tickets subpage
$_ADDONLANG['tickets_header_descr']   = 'Here you can...'; // @todo
$_ADDONLANG['tickets_tbl_ticket']     = 'כרטיס';
$_ADDONLANG['tickets_tbl_title']      = 'כותרת כרטיס';
$_ADDONLANG['tickets_tbl_author']     = 'עורך';
$_ADDONLANG['tickets_tbl_created']    = 'תאריך יצירה';
$_ADDONLANG['tickets_tbl_lastreply']  = 'מענה אחרון';
$_ADDONLANG['tickets_tbl_status']     = 'סטטוס';
$_ADDONLANG['tickets_tbl_actions']    = 'פעולות';
$_ADDONLANG['tickets_tbl_s_open']     = 'פתח';
$_ADDONLANG['tickets_tbl_dept']       = 'כרטיס מחלקה';
$_ADDONLANG['tickets_tbl_showlead']   = 'הצג ליד';
$_ADDONLANG['tickets_tbl_createlead'] = 'ליצור ליד';

$_ADDONLANG['tickets_createlead_title']      = 'Create Lead from Ticket';
$_ADDONLANG['tickets_createlead_followups']  = 'מעקבים';
$_ADDONLANG['tickets_createlead_followupa']  = 'הוסף מעקב';
$_ADDONLANG['tickets_createlead_add']        = 'הוסף ליד';
$_ADDONLANG['tickets_createlead_create']     = 'הוסף ליד';
$_ADDONLANG['tickets_createlead_save']       = 'שמור שינויים';
$_ADDONLANG['tickets_createlead_cancel']     = 'Cancel';

$_ADDONLANG['tickets_followups_tbl_date']    = 'Date';
$_ADDONLANG['tickets_followups_tbl_descr']   = 'Description';
$_ADDONLANG['tickets_followups_tbl_stage']   = 'Stage';
$_ADDONLANG['tickets_followups_tbl_actions'] = 'Cancel';
$_ADDONLANG['tickets_followups_remove']      = 'Remove';
$_ADDONLANG['tickets_followups_save']        = 'Update Order';

# Leads subpage
$_ADDONLANG['leads_add_newfollowup']        = 'Add New Followup';

// SETTINGS
# cron
$_ADDONLANG['settings_general_descr']         = 'Overall Module Status';

$_ADDONLANG['cron_h3']         = 'CRM module Cron information';
$_ADDONLANG['cron_descr']      = 'Cron need to ne set manually by administrator. This will handle various of functionalities. All functions responsible for sending email in speciffic time. Recomended is to set cron run at least once per day to revieve configured notifications in system.';
$_ADDONLANG['cron_path']       = 'Cron Path';
$_ADDONLANG['cron_url']        = 'Cron URL';
$_ADDONLANG['cron_lastdate']   = 'Last Run Date';
$_ADDONLANG['cron_date_error'] = 'No records of execution.';

# cron
$_ADDONLANG['settinhs_email_h3']            = '';
$_ADDONLANG['settinhs_email_descr']         = 'Here you can configure And email templates that module wil use. You can configure what email templates will be visible as predefined';
$_ADDONLANG['settinhs_email_accordioninfo'] = 'All CRM Email Templates List';
$_ADDONLANG['settinhs_email_tbl_id']        = 'ID';
$_ADDONLANG['settinhs_email_tbl_name']      = 'Template Name';
$_ADDONLANG['settinhs_email_tbl_details']   = 'Template Details';
$_ADDONLANG['settinhs_email_btn_details']   = 'Details';
$_ADDONLANG['settinhs_email_tbl_empty']     = 'There are no templates. Please create some.';


# fields
$_ADDONLANG['settings_fields_title']     = 'Configure Fields For Leads/Potentials.';
$_ADDONLANG['settings_fields_descr']     = 'Here you can determinate additional fields that can be configured to single Lead or Potentials. Each field can be used as filter or tag to find decent client. Also it is usefull tool for organise hudge amout of data.';



$_ADDONLANG['settings_fieldsviews_title']     = 'Configure Templates For Leads/Potentials.';
$_ADDONLANG['settings_fieldsviews_descr']     = 'Here you can determinate default visible fields in Leads/Potentials page. In addition you can determinate additional views that can be used. ';

#leads
$_ADDONLANG['leads_createlead_title'] = 'Create Lead';
$_ADDONLANG['leads_createlead_descr'] = 'can be some text with info/description';
$_ADDONLANG['leads_editlead_title']   = 'Edit Lead';
$_ADDONLANG['leads_editlead_descr']   = 'can be some awesome info/description';
$_ADDONLANG['tickets_editlead_save']  = 'Update Lead';


$_ADDONLANG['leads_leaddetails_title']           = 'Main Details';
$_ADDONLANG['leads_leaddetailsf_title']          = 'Fields Details';
$_ADDONLANG['leads_leaddetails_back']            = 'Back';
$_ADDONLANG['leads_leaddetails_followups_title'] = 'Followup List';


# HOOK - Ticket View
$_ADDONLANG['ticketView_title_leaddetails']            = 'Lead Details';
$_ADDONLANG['ticketView_title_potentialdetails']       = 'Potentials Details';
$_ADDONLANG['ticketView_field_empty']                  = 'Not set';
$_ADDONLANG['ticketView_convert_topotential']          = 'Convert To Potential';
$_ADDONLANG['ticketView_show_potential']               = 'Show Potential';
$_ADDONLANG['ticketView_create_leadform']              = 'Create Lead Form';
$_ADDONLANG['ticketView_create_leadajax']              = 'Quick Create Lead';
$_ADDONLANG['ticketView_show_lead']                    = 'Show Lead';
$_ADDONLANG['ticketView_ajaxerror']                    = 'Error';
$_ADDONLANG['ticketView_error_leadexist']              = 'Lead Already Exist <a href=\'%s\'>Lead Details</a>';
$_ADDONLANG['ticketView_ajax_leadcreated']             = '<span class=\'label active\'>Lead Created</span> <a href=\'%s\'>Lead Details</a>';
$_ADDONLANG['ticketView_error_nolead']                 = 'Cannot convert to Potential. Lead do not exist.';
$_ADDONLANG['ticketView_ajax_leadconverted']           = '<span class=\'label active\'>Lead converted to Potential</span> <a href=\'%s\'>Potential Details</a>';
$_ADDONLANG['ticketView_button_actions']               = 'CRM Actions:';
$_ADDONLANG['ticketView_button_modalleaddetails']      = 'CRM: Lead Details';
$_ADDONLANG['ticketView_button_modalpotentialdetails'] = 'CRM: Potential Details';
$_ADDONLANG['ticketView_modal_details']                = 'Detailed Information';
$_ADDONLANG['ticketView_modal_close']                  = 'Close';



$_ADDONLANG['message_leadadded']     = 'Lead has been added successfully.';
$_ADDONLANG['message_leadedited']    = 'Lead has been successfully edited.';
$_ADDONLANG['message_leadconverted'] = 'Lead has been successfully converted to Potential.';
$_ADDONLANG['message_leaddeleted']   = 'Lead has been removed.';

$_ADDONLANG['message_followupadded']   = 'New Followup has been created.';
$_ADDONLANG['message_quotehasbeenadded']   = 'New Quota has been created.';


$_ADDONLANG['message_archiveedited']    = 'Archive has been successfully edited.';
$_ADDONLANG['message_archivedeleted']    = 'Archive has been removed.';


$_ADDONLANG['message_potentialedited']    = 'Potential has been successfully edited.';
$_ADDONLANG['message_potentialconverted'] = 'Potential has been successfully converted to Lead.';
$_ADDONLANG['message_potentialdeleted']   = 'Potential has been removed.';


$_ADDONLANG['message_settingsfieldedited']   = 'Custom Field has been edited.';
$_ADDONLANG['message_settingsfieldadded']    = 'Custom Field has been added.';
$_ADDONLANG['message_settingsfieldorder']    = 'Custom Fields has been reorderred.';
$_ADDONLANG['message_settingsfielddeleted']    = 'Custom Field has been removed.';
$_ADDONLANG['message_settingsfieldviews']    = 'Custom Field Default Views has been changed.';
// MGCRM_Core_Language::t('message_settingsfieldviews')


// WHMCS' Edit quotas form
$_ADDONLANG['whmcs_quotas_crm_title']                  = 'CRM:';
$_ADDONLANG['whmcs_quotas_button_lead_text']           = 'Show Lead';
$_ADDONLANG['whmcs_quotas_button_potential_text']      = 'Show Potential';
$_ADDONLANG['whmcs_quotas_button_archive_text']        = 'Show Potential';
$_ADDONLANG['whmcs_quotas_infobox_lead_text']          = 'This Quota have been is assigned to Lead';
$_ADDONLANG['whmcs_quotas_infobox_potential_text']     = 'This Quota have been is assigned to Potential';
$_ADDONLANG['whmcs_quotas_infobox_archive_text']       = 'This Quota have been is assigned to Potential';
$_ADDONLANG['whmcs_quotas_crm_showdetails']            = '<i class="ui-icon ui-icon-circle-plus" style="display: inline-block; float: left;"></i>&nbsp;Expand Details';
$_ADDONLANG['whmcs_quotas_crm_hidedetails']            = '<i class="ui-icon ui-icon-circle-minus" style="display: inline-block; float: left;"></i>&nbsp;Hide Details';
$_ADDONLANG['whmcs_quotas_infobox_client_assigned']    = 'Client';
$_ADDONLANG['whmcs_quotas_infobox_notassigned']        = 'Not Assigned';
$_ADDONLANG['whmcs_quotas_infobox_ticket_assigned']    = 'Ticket';
$_ADDONLANG['whmcs_quotas_infobox_ticket_admin']       = 'Assigned Admin';
$_ADDONLANG['whmcs_quotas_disableduserselect_exist'] = 'Disabled since quota is assigned to %s and it is already assigned to Clietn.';
$_ADDONLANG['whmcs_quotas_disableduserselect_notexist'] = 'Disabled since quota is assigned to %s. Create Client for %s first.';



# LOGS
# DO not you dare to delete this
$_ADDONLANG['logs_quoterel_assign']              = 'Quote #%s has been assigned';
$_ADDONLANG['logs_assignclient_reassign_quotes'] = 'Quotes: %s has been reassigned to client #%s';
$_ADDONLANG['logs_reassign_status']              = 'Status chaged from %s to %s by  %s';
$_ADDONLANG['logs_updatednotes_notes']              = 'Updated Lead Notes';
$_ADDONLANG['ajax_msg_notes_updated']              = 'Notes has been updated';
?>

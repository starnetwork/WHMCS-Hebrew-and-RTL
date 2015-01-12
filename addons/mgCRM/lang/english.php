<?php
/*
 * **********************************************************************
 * Customization Services by ModulesGarden.com
 * Copyright (c) ModulesGarden, INBS Group Brand, All Rights Reserved
 *
 *
 *  CREATED BY MODULESGARDEN       ->       http://modulesgarden.com
 *  CONTACT                        ->       contact@modulesgarden.com
 *  AUTHOR                         ->       Piotr Sarzyński
 *                                          <piotr.sa@modulesgarden.com>
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
 * **********************************************************************
 */

/**
 * Default language file for module
 * @author Piotr Sarzyński <piotr.sa@modulesgarden.com>
 */


/****************************************************************************************
 *                          Endlish Language
 ****************************************************************************************/

/**
 * Main navigation tabs in module header
 * you can easly add new using following syntax:
 *
 * Example:
 * $_ADDONLANG['Dashboard'] = 'Command Center';
 * $_ADDONLANG['API']       = 'awesome API';
 */
$_ADDONLANG['Leads']     = 'Leads';


/**
 * DataTables Language
 * This will be used globally in whole CRM module, and each datatables instance
 * Change this with head!
 */
$_ADDONLANG['DataTable_lang'] = json_encode(array(
    "emptyTable"     => "No data available in table",
    "info"           => "Showing _START_ to _END_ of _TOTAL_ entries",
    "infoEmpty"      => "Showing 0 to 0 of 0 entries",
    "infoFiltered"   => "(filtered from _MAX_ total entries)",
    "infoPostFix"    => "",
    "thousands"      => ",",
    "lengthMenu"     => "Records per page: _MENU_ ",
    "loadingRecords" => "Loading...",
    "processing"     => "Processing...",
    "search"         => "Search: ",
    "zeroRecords"    => "No matching records found",
    "paginate"       => array(
        "first"    => "First",
        "last"     => "Last",
        "next"     => "Next",
        "previous" => "Previous"
    ),
    "aria"          => array(
        "sortAscending"  => ": activate to sort column ascending",
        "sortDescending" => ": activate to sort column descending"
    )
));

/**
 * Forms default validations
 */
$_ADDONLANG['validation_required']  = 'Field % is required';
$_ADDONLANG['validation_date']      = 'Incorrect date in %';
$_ADDONLANG['validation_datetime']  = 'Incorrect date in %';
$_ADDONLANG['validation_is_int']    = 'Field % must have an integer value';
$_ADDONLANG['loading']              = 'Loading...';         // used ewerywhere where is loading screen/gif


// few global langs for buttons mostly
$_ADDONLANG['tickets_createlead_save'] = 'Save Changes';
$_ADDONLANG['cancel_btn']              = 'Cancel';
$_ADDONLANG['back_btn']                = 'Back';
$_ADDONLANG['not_assigned']            = 'Not assigned';


##################################
#     SETTINGS tab
##################################

/**
 *     GENERAL subpage
 *************************************************/
$_ADDONLANG['settings_general_descr']          = 'Module Status';
$_ADDONLANG['settings_general_asterisk']       = 'Asterisk VoIP Center Integration';
$_ADDONLANG['settings_general_asterisk_descr'] = 'Simple indicator that informs if integration with Asterisk Module For WHMCS (developed by MG) is successful. If no errors occur here, you will get the possibility to call clients by VoIP (depending on the proper configuration of VoIP).';
$_ADDONLANG['settings_general_asterisk_on']    = 'Ok';
$_ADDONLANG['settings_general_asterisk_off']   = 'Not Integrated';
$_ADDONLANG['settings_general_cron']           = 'Cron';
$_ADDONLANG['settings_general_cron_on']        = 'Ok';
$_ADDONLANG['settings_general_cron_on_descr']  = 'Last run';
$_ADDONLANG['settings_general_cron_off']       = 'Inactive';
$_ADDONLANG['settings_general_cron_off_descr'] = 'The cron job has not been executed yet. Please, check if you have configured it properly.';

$_ADDONLANG['settings_general_email_tpl']            = 'Email Templates';
$_ADDONLANG['settings_general_email_inuse']          = 'Email templates in use:';
$_ADDONLANG['settings_general_email_tpl_none']       = 'Error';
$_ADDONLANG['settings_general_email_tpl_none_desc']  = 'You have no email templates configured in the module. Email notifications and follow-ups will not work properly.';

$_ADDONLANG['settings_general_uploads']             = 'Uploads';
$_ADDONLANG['settings_general_uploads_ok']          = 'Ok';
$_ADDONLANG['settings_general_uploads_ok_descr']    = 'Directory is configured properly.';
$_ADDONLANG['settings_general_uploads_notok']       = 'error';
$_ADDONLANG['settings_general_uploads_notok_descr'] = 'Directory is NOT configured properly. The system is unable to create folder automatically. Please set directory permissions to <code>0777</code>.';

$_ADDONLANG['settings_general_general']                   = 'General Settings';
$_ADDONLANG['settings_general_general_quotes']            = 'Enable Quotations';
$_ADDONLANG['settings_general_general_quotes_descr']      = 'If enabled, gives the possibility to create quotations for Leads/Potentials.';
$_ADDONLANG['settings_general_general_potentials']        = 'Enable Potentials';
$_ADDONLANG['settings_general_general_potentials_descr']  = 'If enabled, gives the possibility to convert Leads into Potentials.';
$_ADDONLANG['settings_general_general_adminassign']       = 'Enable Assignment Of Leads To Specific Sales People';
$_ADDONLANG['settings_general_general_adminassign_descr'] = 'If enabled, each Lead can be assigned to a single admin who will be responsible for them.';

$_ADDONLANG['settings_general_followups']                = 'Follow-ups Settings';
$_ADDONLANG['settings_general_followups_upcoming']       = 'Upcoming Follow-up Notification Email';
$_ADDONLANG['settings_general_followups_upcoming_descr'] = 'Email template used to notify admins that a new follow-up will come soon.';
$_ADDONLANG['settings_general_followups_new']            = 'Follow-up Reminder Email';
$_ADDONLANG['settings_general_followups_new_descr']      = 'Email template used to remind admins on upcoming events.';
$_ADDONLANG['settings_general_followups_edit']           = 'Reschedule Follow-up Notification Email';
$_ADDONLANG['settings_general_followups_edit_descr']     = 'Email template used to notify admins that a follow-up has been rescheduled.';
$_ADDONLANG['settings_general_followups_types']          = 'Follow-up Types';
$_ADDONLANG['settings_general_followups_types_empty']    = 'Not Configured';
$_ADDONLANG['settings_general_followups_types_descr']    = 'You can define several types of follow-ups. Each follow-up can be described with one of these types. <em>Comma will separate single types.</em>';


/**
 *     CRON subpage
 *************************************************/
$_ADDONLANG['settings_cron_h3']          = 'CRM Module Cron Information';
$_ADDONLANG['settings_cron_descr']       = 'Cron needs to be set manually by administrator. It will handle various functionalities such as sending emails in specified time. It is recommended that cron run should be set at least once a day to review configured notifications in the system.';
$_ADDONLANG['settings_cron_alert_top']   = 'Important!';
$_ADDONLANG['settings_cron_alert_descr'] = 'No records if cron has not been executed yet. Check if cron is configured properly.';
$_ADDONLANG['cron_path']                 = 'Cron Path';
$_ADDONLANG['cron_url']                  = 'Cron URL';
$_ADDONLANG['cron_lastdate']             = 'Last Run Date';
$_ADDONLANG['cron_date_error']           = 'No records of execution';


$_ADDONLANG['settings_cron_interval']             = 'Cron Interval';
$_ADDONLANG['settings_cron_interval_descr']       = 'Adjust your cron job interval time to desired frequency. Email/follow-up sending is <strong>strongly</strong> related to cron run. Remember that if you set cron interval once per day, you will receive follow-ups once a day only!';
$_ADDONLANG['settings_cron_interval_between_on']  = 'Time between the last two cron runs:';
$_ADDONLANG['settings_cron_interval_between_off'] = 'It means, that follow-ups and reminders will be sent once per';
$_ADDONLANG['settings_cron_interval_fail']        = 'System cannot define interval';
$_ADDONLANG['settings_cron_interval_days']        = 'Days';
$_ADDONLANG['settings_cron_interval_hours']       = 'Hours';
$_ADDONLANG['settings_cron_interval_minutes']     = 'Minutes';
$_ADDONLANG['settings_cron_interval_seconds']     = 'Seconds';



/**
 *     EMAILS subpage
 *************************************************/
$_ADDONLANG['settinhs_email_h3']              = 'Email Templates Used In Module';
$_ADDONLANG['settinhs_email_descr']           = 'Here you can add and configure email templates that will be used. You can choose which email templates will be set as predefined.';
$_ADDONLANG['settinhs_email_accordioninfo']   = 'CRM Email Templates List';
$_ADDONLANG['settinhs_email_tbl_id']          = 'ID';
$_ADDONLANG['settinhs_email_tbl_name']        = 'Template Name';
$_ADDONLANG['settinhs_email_tbl_details']     = 'Template Details';
$_ADDONLANG['settinhs_email_btn_details']     = 'Edit';
$_ADDONLANG['settinhs_email_name_empty']      = 'Name is empty';
$_ADDONLANG['settinhs_email_tbl_empty']       = 'There are no email templates available. Please add a new template.';
$_ADDONLANG['settinhs_email_alert_title']     = 'Important!';
$_ADDONLANG['settinhs_email_alert_body']      = 'You have no email templates configured. Email notifications and follow-ups will not work properly.';
$_ADDONLANG['settinhs_email_new_title']       = 'Add New Email Template';
$_ADDONLANG['settinhs_email_new_label']       = 'Template Name';
$_ADDONLANG['settinhs_email_new_placeholder'] = 'Unique name';
$_ADDONLANG['settinhs_email_new_btn']         = 'Create Email Template';
$_ADDONLANG['settinhs_email_h3_existing']     = 'Existing Email Templates';


/**
 *     GENERAL subpage
 *************************************************/
$_ADDONLANG['settings_fields_title']        = 'Configure Fields For Leads/Potentials';
$_ADDONLANG['settings_fields_descr']        = 'Here you can determine additional fields that can be configured for a single Lead or a Potential. Each field can be used as a filter or a tag to search clients. It is also a useful tool to organise huge amounts of data.';
$_ADDONLANG['settings_fields_new_btn']      = 'Add New Field';
$_ADDONLANG['settings_fields_tbl_name']     = 'Name';
$_ADDONLANG['settings_fields_tbl_type']     = 'Type';
$_ADDONLANG['settings_fields_tbl_descr']    = 'Description';
$_ADDONLANG['settings_fields_tbl_req_lead'] = 'Required For Lead';
$_ADDONLANG['settings_fields_tbl_req_pot']  = 'Required For Potential';
$_ADDONLANG['settings_fields_tbl_act_lead'] = 'Active For Lead';
$_ADDONLANG['settings_fields_tbl_act_pot']  = 'Active For Potential';
$_ADDONLANG['settings_fields_tbl_actions']  = 'Actions';
$_ADDONLANG['settings_fields_yes']          = 'Yes';
$_ADDONLANG['settings_fields_no']           = 'No';
$_ADDONLANG['settings_fields_no_descr']     = 'No Description';
$_ADDONLANG['settings_fields_edit']         = 'Edit';
$_ADDONLANG['settings_fields_remove']       = 'Remove';

$_ADDONLANG['settings_fields_modal_title_edit']               = 'Field Edition';
$_ADDONLANG['settings_fields_modal_title_add']                = 'Create New Field';
$_ADDONLANG['settings_fields_modal_name']                     = 'Field Name';
$_ADDONLANG['settings_fields_modal_name_descr']               = 'This value will identify created custom field. It will be visible everywhere as a custom field name.';
$_ADDONLANG['settings_fields_modal_type']                     = 'Field Type';
$_ADDONLANG['settings_fields_modal_type_descr']               = 'Once the type is selected, additional options will be available.';
$_ADDONLANG['settings_fields_type_text']                      = 'text';
$_ADDONLANG['settings_fields_type_textarea']                  = 'textarea';
$_ADDONLANG['settings_fields_type_dropdown']                  = 'dropdown';
$_ADDONLANG['settings_fields_type_checkbox']                  = 'checkbox';
$_ADDONLANG['settings_fields_modal_options']                  = 'Field Options';
$_ADDONLANG['settings_fields_modal_options_descr']            = 'Comma separated values for dropdown fields.';
$_ADDONLANG['settings_fields_modal_description']              = 'Description';
$_ADDONLANG['settings_fields_modal_description_descr']        = 'Field description will be displayed in \'Create\' form.';
$_ADDONLANG['settings_fields_modal_required_lead']            = 'Required For Lead';
$_ADDONLANG['settings_fields_modal_required_lead_descr']      = 'Once checked, this field will be required in forms.';
$_ADDONLANG['settings_fields_modal_required_potential']       = 'Required For Potential';
$_ADDONLANG['settings_fields_modal_required_potential_descr'] = 'Once checked, this field will be required in forms.';
$_ADDONLANG['settings_fields_modal_active_lead']              = 'Active For Lead';
$_ADDONLANG['settings_fields_modal_active_lead_descr']        = 'Once checked, this field will be visible in Leads.';
$_ADDONLANG['settings_fields_modal_active_potential']         = 'Active For Potentials';
$_ADDONLANG['settings_fields_modal_active_potential_descr']   = 'Once checked, this field will be visible in Potentials.';
$_ADDONLANG['settings_fields_modal_regex']                    = 'Validation Regex';
$_ADDONLANG['settings_fields_modal_regex_descr']              = 'Field will be validated using this regex.';
$_ADDONLANG['settings_fields_modal_validation']               = 'Validation Error';
$_ADDONLANG['settings_fields_modal_validation_descr']         = 'When the field validation fails, this error message will be displayed.';
$_ADDONLANG['settings_fields_modal_save']                     = 'Save Field';
$_ADDONLANG['settings_fields_modal_close']                    = 'Close';
$_ADDONLANG['settings_fields_modal_add']                      = 'Create Field';


/**
 *     FIELDS Views subpage
 *************************************************/
$_ADDONLANG['settings_fieldsviews_title']         = 'Configure Templates For Leads/Potentials';
$_ADDONLANG['settings_fieldsviews_descr']         = 'Here you can determine default fields that will be visible on Leads/Potentials page. In addition, you can determine fields order that will be used.';
$_ADDONLANG['settings_fieldsviews_forleads']      = 'Default View For Leads';
$_ADDONLANG['settings_fieldsviews_forpotentials'] = 'Default View For Potentials';
$_ADDONLANG['settings_fieldsviews_save']          = 'Save';
$_ADDONLANG['settings_fieldsviews_columns']       = 'Available Columns:';
$_ADDONLANG['settings_fieldsviews_visible']       = 'Visible:';






##################################
#     HOOK - Ticket View
##################################
$_ADDONLANG['ticketView_title_leaddetails']            = 'Lead Details';
$_ADDONLANG['ticketView_title_potentialdetails']       = 'Potential Details';
$_ADDONLANG['ticketView_field_empty']                  = 'Not assigned';
$_ADDONLANG['ticketView_convert_topotential']          = 'Convert To Potential';
$_ADDONLANG['ticketView_convert_tolead']               = 'Convert To Lead';
$_ADDONLANG['ticketView_show_potential']               = 'Show Potential';
$_ADDONLANG['ticketView_create_leadform']              = 'Create Lead Form';
$_ADDONLANG['ticketView_create_leadajax']              = 'Quick Create Lead';
$_ADDONLANG['ticketView_show_lead']                    = 'Show Lead';
$_ADDONLANG['ticketView_ajaxerror']                    = 'Error';
$_ADDONLANG['ticketView_error_leadexist']              = 'Lead Already Exists <a href=\'%s\'>Lead Details</a>';
$_ADDONLANG['ticketView_ajax_leadcreated']             = '<span class=\'label active\'>Lead Created</span> <a href=\'%s\'>Lead Details</a>';
$_ADDONLANG['ticketView_error_nolead']                 = 'Cannot convert to Potential. Lead does not exist.';
$_ADDONLANG['ticketView_error_nopotential']            = 'Cannot convert to Lead. Potential does not exist.';
$_ADDONLANG['ticketView_ajax_leadconverted']           = '<span class=\'label active\'>Lead converted to Potential</span> <a href=\'%s\'>Show Details</a>';
$_ADDONLANG['ticketView_ajax_potentialconverted']      = '<span class=\'label active\'>Potential converted to Lead</span> <a href=\'%s\'>Show Details</a>';
$_ADDONLANG['ticketView_button_actions']               = 'CRM Actions:';
$_ADDONLANG['ticketView_button_modalleaddetails']      = 'Lead Details';
$_ADDONLANG['ticketView_button_modalpotentialdetails'] = 'Potential Details';
$_ADDONLANG['ticketView_modal_details']                = 'Detailed Information';
$_ADDONLANG['ticketView_modal_close']                  = 'Close';
$_ADDONLANG['ticketView_inline_name']                  = 'Name';
$_ADDONLANG['ticketView_inline_status']                = 'Status';
$_ADDONLANG['ticketView_inline_notassigned']           = 'This ticket is not assigned to any Lead or Potential.';



##################################
#     STATIC CUSTOM FIELDS
##################################

$_ADDONLANG['fields_actions']       = 'Actions';
$_ADDONLANG['fields_creation_date'] = 'Creation Date';
$_ADDONLANG['fields_update_date']   = 'Update Date';
$_ADDONLANG['fields_ticket_id']     = 'Ticket ID';
$_ADDONLANG['fields_tid']           = 'Ticket Number';
$_ADDONLANG['fields_title']         = 'Ticket Title';
$_ADDONLANG['fields_client_id']     = 'Client ID';
$_ADDONLANG['fields_client_name']   = 'Client Name';
$_ADDONLANG['fields_quotes']        = 'Quotes';
$_ADDONLANG['fields_admin_name']    = 'Admin';

$_ADDONLANG['fields_status_active'] = 'Active';
$_ADDONLANG['fields_status_new']    = 'New';
$_ADDONLANG['fields_status_closed'] = 'Closed';
$_ADDONLANG['fields_status_not']    = 'Not Set!';
$_ADDONLANG['fields_status_update'] = 'Update Status';

##################################
#     LEADS
##################################

/**
 *     Add new LEAD - form
 *************************************************/
$_ADDONLANG['leads_createlead_title']        = 'Create Lead';
$_ADDONLANG['leads_createlead_descr']        = 'Here you can configure new Lead details.';
$_ADDONLANG['leads_createnew_btn']           = 'Create Lead';
$_ADDONLANG['leads_createnew_admin_h3']      = 'Admin Assign';
$_ADDONLANG['leads_createnew_admin_label']   = 'Assign Lead To';
$_ADDONLANG['leads_createnew_required_h4']   = 'Required Fields';
$_ADDONLANG['leads_createnew_optional_h4']   = 'Optional Fields';
$_ADDONLANG['leads_createnew_optional_none'] = 'No Optional Fields';


/**
 *     LEADS main table
 *************************************************/


# lang in actions column
$_ADDONLANG['leads_table_details']      = 'Details';
$_ADDONLANG['leads_table_other']        = 'Other';
$_ADDONLANG['leads_table_convert']      = 'Convert To Potential';
$_ADDONLANG['leads_table_createuser']   = 'Create User Account';
$_ADDONLANG['leads_table_call']         = 'Call Out';
$_ADDONLANG['leads_table_remove']       = 'Remove';
$_ADDONLANG['leads_table_resetfilters'] = 'Reset Filters';
$_ADDONLANG['leads_table_filterdate']   = 'Date...';
$_ADDONLANG['leads_table_filtertext']   = 'Filter...';
$_ADDONLANG['move_to_archive']          = 'Move To Archive';



/**
 *     single LEAD Details
 *************************************************/
$_ADDONLANG['leads_details_title']            = 'Main Details';
$_ADDONLANG['leads_details_convert']          = 'Convert To Potential';
$_ADDONLANG['leads_details_name_empty']       = 'Name Has Not Been Set';
$_ADDONLANG['leads_details_name_placeholder'] = 'Type new name here...';
$_ADDONLANG['leads_details_name_update_btn']  = 'Update Name';
$_ADDONLANG['leads_details_admin']            = 'Assigned Admin';
$_ADDONLANG['leads_details_admin_none']       = 'Admin has not been assigned to this Lead.';
$_ADDONLANG['leads_details_creation']         = 'Creation Date';
$_ADDONLANG['leads_details_lastupdate']       = 'Last Update.';
$_ADDONLANG['leads_details_logs']             = 'Logs';

# fields
$_ADDONLANG['leads_details_savebtn']               = 'Save';
$_ADDONLANG['leads_details_fields_title']          = 'Edit';
$_ADDONLANG['leads_details_fields_edit']           = 'Edit';
$_ADDONLANG['leads_details_fields_client']         = 'Client';
$_ADDONLANG['leads_details_fields_client_reasign'] = 'Reassign';
$_ADDONLANG['leads_details_fields_client_aasign']  = 'Assign';
$_ADDONLANG['leads_details_fields_client_create']  = 'Create User';
$_ADDONLANG['leads_details_fields_client_not']     = 'Not assigned';
$_ADDONLANG['leads_details_fields_ticket']         = 'Ticket';
$_ADDONLANG['leads_details_fields_ticket_not']     = 'Not assigned';
$_ADDONLANG['leads_details_fields_yes']            = 'yes';
$_ADDONLANG['leads_details_fields_no']             = 'no';
$_ADDONLANG['leads_details_fields_empty']          = 'Not assigned';


$_ADDONLANG['leads_details_followup_add']          = 'Create Follow-up';
$_ADDONLANG['leads_details_followup_title']        = 'Follow-ups';


# notes
$_ADDONLANG['leads_details_notes_title']  = 'Notes';
$_ADDONLANG['notes_nonotes']              = 'Currently there are no notes.';
$_ADDONLANG['notes_add_btn']              = 'Add Note';
$_ADDONLANG['notes_add_form_placeholder'] = 'Enter content of a new note here...';
$_ADDONLANG['notes_edit_btn']             = 'Edit';
$_ADDONLANG['notes_show_more_btn']        = 'Show More';
$_ADDONLANG['notes_delete_btn']           = 'Delete';
$_ADDONLANG['notes_save_btn']             = 'Save';
$_ADDONLANG['notes_cancel_btn']           = 'Cancel';
$_ADDONLANG['notes_lastmodified']         = 'Modified by ';


# followups
$_ADDONLANG['followups_tbl_th_date']     = 'Date';
$_ADDONLANG['followups_tbl_th_type']     = 'Type';
$_ADDONLANG['followups_tbl_th_descr']    = 'Description';
$_ADDONLANG['followups_tbl_th_todo']     = 'To-Do';
$_ADDONLANG['followups_tbl_th_notif']    = 'Notifications';
$_ADDONLANG['followups_tbl_th_actions']  = 'Actions';
$_ADDONLANG['followups_todo_not']        = 'To-Do has not been assigned';
$_ADDONLANG['leads_followup_todo_1']     = 'Lead';
$_ADDONLANG['leads_followup_todo_2']     = 'Follow-Up';
$_ADDONLANG['followups_notif_th_date']   = 'Date';
$_ADDONLANG['followups_notif_th_method'] = 'Method';
$_ADDONLANG['followups_notif_th_status'] = 'Status';
$_ADDONLANG['followups_notif_th_tpl']    = 'Template';
$_ADDONLANG['followups_notif_th_type']   = 'Type';
$_ADDONLANG['followups_notif_th_sent']   = 'Sent Date';
$_ADDONLANG['followups_notif_pending']   = 'Pending';
$_ADDONLANG['followups_notif_sent']      = 'Sent';
$_ADDONLANG['followups_notif_sentdate']  = 'No sent yet.';
$_ADDONLANG['followups_notif_nonotify']  = 'No Notifications';
$_ADDONLANG['followups_rescheude']       = 'Reschedule';

$_ADDONLANG['followups_notif_type_invitation_email'] = 'Invitation Email';
$_ADDONLANG['followups_notif_type_main_email']       = 'Client Reminder';
$_ADDONLANG['followups_notif_type_reminder_email']   = 'Admin Reminder';

# create followup form
$_ADDONLANG['leads_createfollowup_title']                 = 'Add New Follow-up For Lead';
$_ADDONLANG['leads_createfollowup_descr']                 = 'Here you can add a new follow-up for a Lead. You can also configure notification types, such as sales admin reminders, creation notifications etc.';
$_ADDONLANG['leads_createfollowup_base']                  = 'Main Options';
$_ADDONLANG['leads_createfollowup_assignadmin']           = 'Assign To Staff Member';
$_ADDONLANG['leads_createfollowup_notifications']         = 'Configure Email Notifications';
$_ADDONLANG['leads_createfollowup_notifications_tooltip'] = 'Currently Supported ONLY Email Notifications';
$_ADDONLANG['leads_createfollowup_addnotification']       = 'Configure New Notification';
$_ADDONLANG['leads_createfollowup_advanced']              = 'Advanced Configuration';
$_ADDONLANG['leads_createfollowup_date']                  = 'Date';
$_ADDONLANG['leads_createfollowup_date_descr']            = 'Date of sending notification email';
$_ADDONLANG['leads_createfollowup_description']           = 'Description';
$_ADDONLANG['leads_createfollowup_description_descr']     = 'Follow-up Description';
$_ADDONLANG['leads_createfollowup_admin']                 = 'Sales Admin';
$_ADDONLANG['leads_createfollowup_admin_descr']           = 'You can assign Admin responsible for this follow-up.';
$_ADDONLANG['leads_createfollowup_admin_todo']            = 'Add to Admin <br/>To-Do List';
$_ADDONLANG['leads_createfollowup_admin_todo_descr']      = 'Add to WHMCS Staff Task (Add to To-Do list).';
$_ADDONLANG['leads_createfollowup_type']                  = 'Follow-up Type';
$_ADDONLANG['leads_createfollowup_type_descr']            = 'Choose type to maintain many follow-ups easily';

# options
$_ADDONLANG['leads_createfollowup_notif_emailtpl']          = 'Email Template';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_no']       = 'No Email Template Configured';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_add']      = 'Add Email Template';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_no_descr'] = 'You have no email templates configured for the module. Email notifications and follow-ups will not work properly.';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_descr']    = 'Selected template that will be used.';
$_ADDONLANG['leads_createfollowup_notif_bcc']         = 'CC:';
$_ADDONLANG['leads_createfollowup_notif_bcc_descr']   = 'Email will be sent as a copy to a selected staff member.';
$_ADDONLANG['leads_createfollowup_notif_reply']       = 'Reply To';
$_ADDONLANG['leads_createfollowup_notif_reply_descr'] = 'Email will be configured as a reply to a selected staff member.';


# invitation notification
$_ADDONLANG['leads_createfollowup_invitation']        = 'Invitation Email';
$_ADDONLANG['leads_createfollowup_invitation_descr']  = 'This notification will be sent once a follow-up has been created. You can use this notification to send information about upcoming events to a contact with a copy to admins.';


# invitation notification
$_ADDONLANG['leads_createfollowup_main']        = 'Contact Reminder';
$_ADDONLANG['leads_createfollowup_main_descr']  = 'This notification will be sent to a contact on a desired follow-up date. You can configure a CC to be sent to an admin.';


# reminder notification
$_ADDONLANG['leads_createfollowup_reminder']            = 'Admin Reminder';
$_ADDONLANG['leads_createfollowup_reminder_descr']      = 'This reminder will be sent to admins on selected time before a follow-up date.';
$_ADDONLANG['leads_createfollowup_reminder_time_descr'] = 'Configure the amount of time when a reminding notification should be sent.';
$_ADDONLANG['leads_createfollowup_reminder_when']       = 'Select Time';
$_ADDONLANG['leads_createfollowup_reminder_minutes']    = 'Minutes';
$_ADDONLANG['leads_createfollowup_reminder_hours']      = 'Hours';
$_ADDONLANG['leads_createfollowup_reminder_days']       = 'Days';



$_ADDONLANG['leads_createfollowup_notif_client']            = 'Notify Client';
$_ADDONLANG['leads_createfollowup_notif_client_descr']      = 'This notification is used to send a notifying email to Lead on the follow-up date.';


$_ADDONLANG['leads_createfollowup_notif_admin']       = 'Notify Sales Admin';
$_ADDONLANG['leads_createfollowup_notif_admin_descr'] = 'This notification is used to send emails to selected admins configured in the follow-up main options.';
$_ADDONLANG['leads_createfollowup_notif_admin_label'] = 'Admin To Notify';





$_ADDONLANG['leads_createfollowup_save'] = 'Save Follow-up';
$_ADDONLANG['leads_createfollowup_add']  = 'Create Follow-up';
$_ADDONLANG['leads_createfollowup_back'] = 'Back';


$_ADDONLANG['leads_details_quotes_tab']            = 'Quotes';
$_ADDONLANG['leads_details_quotes_add']            = 'Create Quote';
$_ADDONLANG['leads_details_files_tab']             = 'Files';
$_ADDONLANG['leads_details_logs_tab']              = 'Logs';
$_ADDONLANG['leads_details_logs_show']              = 'Show All Logs';


$_ADDONLANG['leads_leaddetailsf_title']          = 'Fields Details';
$_ADDONLANG['leads_leaddetails_back']            = 'Back';
$_ADDONLANG['leads_leaddetails_followups_title'] = 'Follow-ups List';
$_ADDONLANG['leads_leaddetails_files_title']     = 'Files';




##################################
#     POTENTIALS
##################################
$_ADDONLANG['potentials_createnew_btn']   = 'Create Potential';
$_ADDONLANG['potentials_details_convert'] = 'Convert To Lead';

$_ADDONLANG['potentials_createlead_title']        = 'Create Potential';
$_ADDONLANG['potentials_createlead_descr']        = 'Here you can configure details for new Potential.';
$_ADDONLANG['potentials_createnew_btn']           = 'Create Potential';





##################################
#          MESSAGES
# mostly as some action result
##################################

$_ADDONLANG['message_leadadded']                         = 'Lead has been added successfully.';
$_ADDONLANG['message_leadedited']                        = 'Lead has been successfully edited.';
$_ADDONLANG['message_leadconverted']                     = 'Lead has been successfully converted to Potential.';
$_ADDONLANG['message_leaddeleted']                       = 'Lead has been removed.';
$_ADDONLANG['message_senttoarchive']                     = 'Lead has been sent to archive.';

$_ADDONLANG['message_followupadded']                     = 'New Follow-up has been created.';
$_ADDONLANG['message_quotehasbeenadded']                 = 'New Quote has been created.';


$_ADDONLANG['message_archiveedited']                     = 'Archive has been successfully edited.';
$_ADDONLANG['message_archivedeleted']                    = 'Archive has been removed.';
$_ADDONLANG['message_archiveconvertlead']                = 'Archive has been successfully converted to Lead.';
$_ADDONLANG['message_archiveconvertpotential']           = 'Archive has been successfully converted to Potential.';


$_ADDONLANG['message_potentialadded']                    = 'Potential has been added successfully.';
$_ADDONLANG['message_potentialedited']                   = 'Potential has been successfully edited.';
$_ADDONLANG['message_potentialconverted']                = 'Potential has been successfully converted to Lead.';
$_ADDONLANG['message_potentialdeleted']                  = 'Potential has been removed.';
$_ADDONLANG['message_senttoarchive_potential']           = 'Potential has been sent to archive.';


$_ADDONLANG['message_settingsfieldedited']               = 'Custom Field has been edited.';
$_ADDONLANG['message_settingsfieldadded']                = 'Custom Field has been added.';
$_ADDONLANG['message_settingsfieldorder']                = 'Custom Fields have been reordered successfully.';
$_ADDONLANG['message_settingsfielddeleted']              = 'Custom Field has been removed.';
$_ADDONLANG['message_settingsfieldviews']                = 'Custom Field Default Views have been changed.';
$_ADDONLANG['message_clientreassigned']                  = 'Client has been reassigned.';
$_ADDONLANG['message_reassignedquotestransfered']        = '%s quotes have been transferred to client %s.';
$_ADDONLANG['message_reassignedquotesnottransfered']     = '%s quotes have been removed from this %s (they are assigned to an old client: %s)';

$_ADDONLANG['message_removefollowupconfirmation_text']   = 'Are you sure you want to remove this Follow-up? \n You cannot undo this action.';
$_ADDONLANG['message_removefollowupconfirmation_title']  = 'Are you sure?';
$_ADDONLANG['message_removefollowupconfirmation_yesbtn'] = 'Yes, delete it!';
$_ADDONLANG['message_followupremoved']                   = 'Follow-up has been removed!';
$_ADDONLANG['message_followup_rescheduled']              = 'Follow-up has been rescheduled!';
$_ADDONLANG['message_potential_notfound']                = 'Something went wrong. Cannot find Potential with id #%s !';
$_ADDONLANG['message_lead_notfound']                     = 'Something went wrong. Cannot find Lead with id #%s !';


// WHMCS' Edit quotas form
$_ADDONLANG['whmcs_quotas_crm_title']                  = 'CRM:';
$_ADDONLANG['whmcs_quotas_button_lead_text']           = 'Show Lead';
$_ADDONLANG['whmcs_quotas_button_potential_text']      = 'Show Potential';
$_ADDONLANG['whmcs_quotas_button_archive_text']        = 'Show Potential';
$_ADDONLANG['whmcs_quotas_infobox_lead_text']          = 'This Quote has been assigned to Lead';
$_ADDONLANG['whmcs_quotas_infobox_potential_text']     = 'This Quote has been assigned to Potential';
$_ADDONLANG['whmcs_quotas_infobox_archive_text']       = 'This Quote has been assigned to Potential';
$_ADDONLANG['whmcs_quotas_crm_showdetails']            = '<i class="ui-icon ui-icon-circle-plus" style="display: inline-block; float: left;"></i>&nbsp;Expand Details';
$_ADDONLANG['whmcs_quotas_crm_hidedetails']            = '<i class="ui-icon ui-icon-circle-minus" style="display: inline-block; float: left;"></i>&nbsp;Hide Details';
$_ADDONLANG['whmcs_quotas_infobox_client_assigned']    = 'Client';
$_ADDONLANG['whmcs_quotas_infobox_notassigned']        = 'Not Assigned';
$_ADDONLANG['whmcs_quotas_infobox_ticket_assigned']    = 'Ticket';
$_ADDONLANG['whmcs_quotas_infobox_ticket_admin']       = 'Assigned Admin';
$_ADDONLANG['whmcs_quotas_disableduserselect_exist'] = 'Disabled since this quote is assigned to %s and it is already assigned to client.';
$_ADDONLANG['whmcs_quotas_disableduserselect_notexist'] = 'Disabled since this quote is assigned to %s. Create client for %s first.';


# followups
$_ADDONLANG['followups_add_todo_lead_title']      = '#%s Lead Follow-Up';
$_ADDONLANG['followups_add_todo_potential_title'] = '#%s Potential Follow-Up';
$_ADDONLANG['followups_add_todo_archive_title']   = '#%s Archive Follow-Up';
$_ADDONLANG['followups_add_todo_lead_descr']      = 'Follow-Up for #%s Lead %s. Full Follow-up Description: %s';
$_ADDONLANG['followups_add_todo_potential_descr'] = 'Follow-Up for #%s Potential %s. Full Follow-up Description: %s';
$_ADDONLANG['followups_add_todo_archive_descr']   = 'Follow-Up for #%s Archive %s. Full Follow-up Description: %s';


# LOGS
# DO not you dare to delete this
$_ADDONLANG['logs_breadcrumbs_lead']             = 'Lead';
$_ADDONLANG['logs_breadcrumbs_potential']        = 'Potential';
$_ADDONLANG['logs_breadcrumbs_archive']          = 'Archive';
$_ADDONLANG['logs_breadcrumbs_emptyname']        = '<small>Empty Name</small>';
$_ADDONLANG['logs_breadcrumbs_logs']             = '<u>Logs</u>';

$_ADDONLANG['logs_quoterel_assign']                  = 'Quote #%s has been assigned';
$_ADDONLANG['logs_converted_to_potential']           = 'Has been converted to Potential';
$_ADDONLANG['logs_converted_to_archive']             = 'Has been sent to Archive';
$_ADDONLANG['logs_converted_to_lead']                = 'Has been converted to Lead';
$_ADDONLANG['logs_assignclient_reassign_quotes']     = 'Quotes: %s has been reassigned to client #%s';
$_ADDONLANG['logs_reassign_status']                  = 'Status changed from <b>%s</b> to <b>%s</b>';
$_ADDONLANG['logs_updatednotes_notes']               = 'Notes changed from <div class="well well-sm">%s</div> to <div class="well well-sm">%s</div>';
$_ADDONLANG['ajax_msg_notes_updated']                = 'Notes have been updated';
$_ADDONLANG['logs_quotereassigned_to_client']        = 'Quote <b>#%s</b> has been reassigned from client: <em>%s</em> to: <em>%s</em>';
$_ADDONLANG['logs_quotecrmunassign']                 = 'Quote <b>#%s</b> has been unassigned from client: <em>%s</em>';
$_ADDONLANG['logs_adminreassigned']                  = 'Assigned admin has been changed from <em>%s</em> to: <b>%s</b>';
$_ADDONLANG['logs_adminunassigned']                  = 'Admin <b>%s</b> has been unassigned';
$_ADDONLANG['logs_newfollowupemailerror']            = 'Cannot send notification follow-up, since there is no Email template configured for that.';
$_ADDONLANG['logs_newfollowupemailsenterror']        = 'Cannot send new follow-up notification to <em>%s</em>. Error: %s';
$_ADDONLANG['logs_upcomingfollowupaemailaded']       = 'Added new follow-up notification for admin <em>%s</em> to email: <em>%s</em>';
$_ADDONLANG['logs_upcomingfollowupaemailerror']      = 'Add new follow-up notification to <em>%s</em>. Error: %s';
$_ADDONLANG['logs_newfollowupemailsent']             = 'New follow-up notification has been sent to <em>%s</em>';
$_ADDONLANG['logs_newfollowuptodoerror']             = 'Cannot add new To-Do entry for admin <em>%s</em>. Error: %s';
$_ADDONLANG['logs_newfollowuptodoadded']             = 'New To-Do entry for admin <em>%s</em>';
$_ADDONLANG['logs_newfollowupaemailaded']            = 'New notification email for client has been registered from <em>%s</em> to <em>%s</em>';
$_ADDONLANG['logs_newfollowupemailerror']            = 'Cannot add new notification email from <em>%s</em> to <em>%s</em>. Error <em>%s</em>';
$_ADDONLANG['logs_newfollowupadded']                 = 'New Follow-up has been created to date: <em>%s</em> (<a href="todolist.php?action=edit&id=%s" target="_blank">To-Do #%s</a>). Assigned admin: <em>%s</em>';
$_ADDONLANG['logs_newfollowuperror']                 = 'Cannot create new follow-up record for admin <em>%s</em>. Error: <em>%s</em>';
$_ADDONLANG['logs_newfollowupthrow']                 = 'Cannot create new follow-up record. Error: %s';
$_ADDONLANG['logs_removefollowup_ok']                = 'Follow-up record #%s (<em>%s</em>) has been removed';
$_ADDONLANG['logs_removefollowup_error']             = 'Cannot remove follow-up record #%s. Error: %s';
$_ADDONLANG['logs_followup_email_rescheduled_ok']    = 'Rescheduled follow-up email notification from <em>%s</em> to <em>%s</em> in follow-up #%s';
$_ADDONLANG['logs_followup_email_rescheduled_error'] = 'Cannot reschedule follow-up email notification from <em>%s</em> to <em>%s</em> in follow-up #%s. Error: %s';
$_ADDONLANG['logs_followup_rescheduled_ok']          = 'Follow-up #%s has been rescheduled from <em>%s</em> to <em>%s</em>';
$_ADDONLANG['logs_followup_rescheduled_ok']          = 'Follow-up #%s has been rescheduled from <em>%s</em> to <em>%s</em> <br/>Reason: <code>%s</code>';
$_ADDONLANG['logs_followup_rescheduled_error']       = 'Cannot reschedule Follow-up #%s from <em>%s</em> to <em>%s</em>. Error: %s';
$_ADDONLANG['logs_followup_rescheduled_allerror']    = '%s Errors occurred during rescheduling follow-up';
$_ADDONLANG['logs_assignclient_assign']              = 'User #%s has been assigned to';
$_ADDONLANG['logs_custom_field_changed']             = '<em>%s</em>: has been changed to <b>%s</b>';
$_ADDONLANG['logs_custom_field_set']                 = '<em>%s</em> has been set to <code>%s</code>';

$_ADDONLANG['cron_job_start']                    = 'CRM Cron Job has been started (%s)';
$_ADDONLANG['cron_job_haserrors']                = 'CRM Cron Job has errors';
$_ADDONLANG['cron_job_error']                    = 'CRM Cron Job Error: <pre>&s</pre>';
$_ADDONLANG['cron_job_stop']                     = 'CRM Cron Job finished (%s)';
$_ADDONLANG['cron_emailfollowup_sent']           = 'Email follow-up scheduled to <em>%s</em> has been sent to <em>%s</em>';


# upload files
$_ADDONLANG['upload_file_notwritable']               = 'Upload Folder is not Writable.';
$_ADDONLANG['upload_file_cannotcreatefolder']        = 'Cannot create folder for uploads.';
$_ADDONLANG['upload_file_error1']                    = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$_ADDONLANG['upload_file_error2']                    = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$_ADDONLANG['upload_file_error3']                    = 'The uploaded file was only partially uploaded';
$_ADDONLANG['upload_file_error4']                    = 'No file was uploaded';
$_ADDONLANG['upload_file_error6']                    = 'Missing a temporary folder';
$_ADDONLANG['upload_file_error7']                    = 'Failed to write file to disk';
$_ADDONLANG['upload_file_error8']                    = 'A PHP extension stopped the file upload';
$_ADDONLANG['upload_file_error_post_max_size']       = 'The uploaded file exceeds the post_max_size directive in php.ini';
$_ADDONLANG['upload_file_error_max_file_size']       = 'File is too big';
$_ADDONLANG['upload_file_error_min_file_size']       = 'File is too small';
$_ADDONLANG['upload_file_error_accept_file_types']   = 'Filetype not allowed';
$_ADDONLANG['upload_file_error_max_number_of_files'] = 'Maximum number of files exceeded';
$_ADDONLANG['upload_file_error_max_width']           = 'Image exceeds maximum width';
$_ADDONLANG['upload_file_error_min_width']           = 'Image requires a minimum width';
$_ADDONLANG['upload_file_error_max_height']          = 'Image exceeds maximum height';
$_ADDONLANG['upload_file_error_min_height']          = 'Image requires a minimum height';
$_ADDONLANG['upload_file_error_abort']               = 'File upload aborted';
$_ADDONLANG['upload_file_error_image_resize']        = 'Failed to resize image';
$_ADDONLANG['upload_file_uploadedwho']               = 'File <em>%s</em> has been uploaded by %s';
$_ADDONLANG['upload_file_delete_ok']                 = 'File has been deleted';
$_ADDONLANG['upload_file_deleted']                   = 'File <em>%s</em> has been deleted';
$_ADDONLANG['upload_file_delete_fail']               = 'Cannot delete file';
$_ADDONLANG['upload_file_delete_notfound']           = 'File Not found';

# files list table
$_ADDONLANG['files_selectfile']          = 'Select File';
$_ADDONLANG['files_selecttoupload']      = 'Select file to upload';
$_ADDONLANG['files_tbl_th_name']         = 'File Name';
$_ADDONLANG['files_tbl_th_uploaded']     = 'Uploaded';
$_ADDONLANG['files_tbl_th_uploaded_who'] = 'Uploaded By';
$_ADDONLANG['files_tbl_th_actions']      = 'Actions';
$_ADDONLANG['files_tbl_delete']          = 'Delete';
$_ADDONLANG['files_uploaded']            = 'File has been uploaded.';

# logs tab
$_ADDONLANG['logstab_bl_th_date']  = 'Date';
$_ADDONLANG['logstab_bl_th_descr']  = 'Description';
$_ADDONLANG['logstab_bl_th_admin']  = 'Admin';


# import export
$_ADDONLANG['settings_import_h3']                  = 'Import / Export';
$_ADDONLANG['import_customfields_descr']           = '<em>Each of Custom Fields allowed values are optional.</em>';
$_ADDONLANG['import_customfields_text']            = '<kbd>Text</kbd> field accepts text values <code>"some text"</code> or empty value <code>""</code>';
$_ADDONLANG['import_customfields_textarea']        = '<kbd>Textarea</kbd> field accepts text values <code>"some longer text"</code> or empty value <code>""</code>';
$_ADDONLANG['import_customfields_checkbox']        = '<kbd>Checkbox</kbd> field accepts text values <code>"1"</code> (as checked/active/selected), <code>"0"</code> (as NOT checked/active/selected) or empty value <code>""</code>';
$_ADDONLANG['import_customfields_dropdown']        = '<kbd>Dropdown</kbd> field accepts text values <code>"some text"</code> or empty value <code>""</code>. Value must match configured option for dropdown field, otherwise it will be considered as empty/not set.';
$_ADDONLANG['import_field_descr']['Type']          = 'Define record type: <code>lead</code>, <code>potential</code>, <code>archive</code>';
$_ADDONLANG['import_field_descr']['Creation Date'] = 'Define Creation date. Allowed date in a formatted string.';
$_ADDONLANG['import_field_descr']['Update Date']   = 'Define Last Update date. Allowed date in a formatted string.';
$_ADDONLANG['import_field_descr']['Ticket ID']     = 'Define Ticket Assigned to. Allowed ticket ID, not ticket number.';
$_ADDONLANG['import_field_descr']['Client ID']     = 'Define Client assigned. Allowed Client ID';
$_ADDONLANG['import_field_descr']['Admin ID']      = 'Define Assigned Admin. Allowed Admin ID';

$_ADDONLANG['import_file_detected']              = 'File with import data detected';
$_ADDONLANG['import_file_notdetected']           = 'Import file not detected. Please upload CSV file first.';
$_ADDONLANG['import_file_download']              = 'Download';
$_ADDONLANG['import_file_readrows']              = 'Rows to import detected:';
$_ADDONLANG['import_file_selectfile']            = 'Select File to upload:';
$_ADDONLANG['import_file_selectfile_upload']     = 'Upload';
$_ADDONLANG['import_file_selectfile_descr']      = 'Uploaded file will be renamed and override existing <code>import.csv</code>.';
$_ADDONLANG['import_import_start']               = 'Start Importing from file.';
$_ADDONLANG['import_import_start_btn']           = 'Import';
$_ADDONLANG['import_file_download_export_btn']   = 'Download As CSV';
$_ADDONLANG['import_file_download_export_descr'] = 'There will be generated CSV file containing a complete list of Leads/Potentials/Archive items. Generated syntax is the same as described in <em>Available Fields</em> syntax.';

$_ADDONLANG['message_import_success']        = 'Import Successful. Imported records: <stron>%s</strong>';
$_ADDONLANG['message_import_fail']           = 'An error occurred during Import: %s';
$_ADDONLANG['message_notification_noemail']           = 'Email is not configured. Cannot sent notification';
$_ADDONLANG['message_notification_noadminemail']           = 'Cannot sent notification. Target Admin email is not configured.';


##################################
#     DASHBOARD tab
##################################
$_ADDONLANG['dashboard_select_sales']         = 'Select Staff Member';
$_ADDONLANG['dashboard_select_salesall']      = 'All';
$_ADDONLANG['dashboard_scheuded_followups']   = 'Scheduled Follow-ups';
$_ADDONLANG['dashboard_leadsperstatus']       = 'Leads Per Status';
$_ADDONLANG['dashboard_potentialsperstatus']  = 'Potentials Per Status';
$_ADDONLANG['dashboard_last10_leads']         = 'Last 10 Leads';
$_ADDONLANG['dashboard_last10_potentials']    = 'Last 10 Potentials';
$_ADDONLANG['dashboard_last10_leadname']      = 'Lead Name';
$_ADDONLANG['dashboard_last10_potentialname'] = 'Potential Name';
$_ADDONLANG['dashboard_last10_admin']         = 'Assigned Admin';
$_ADDONLANG['dashboard_last10_status']        = 'Status';
$_ADDONLANG['dashboard_last10_created']       = 'Created';
$_ADDONLANG['dashboard_last10_notfound']      = 'No records found';
$_ADDONLANG['dashboard_admins_overwiew']      = 'Leads and Potentials Per Staff Member';
$_ADDONLANG['dashboard_leads']                = 'Leads';
$_ADDONLANG['dashboard_potentials']           = 'Potentials';
$_ADDONLANG['dashboard_newpermonth']          = 'New Leads and Potentials Per Month';
$_ADDONLANG['dashboard_selectyear']           = 'Select Year';
$_ADDONLANG['dashboard_selectmonth']           = 'Select Month';
$_ADDONLANG['dashboard_month']                = 'Month';
$_ADDONLANG['dashboard_new_leads']            = 'New Leads';
$_ADDONLANG['dashboard_new_potentials']       = 'New Potentials';
$_ADDONLANG['dashboard_newperday']       = 'New Leads and Potentials Per Day';


# page titles
$_ADDONLANG['page_title_add_lead']               = 'New Lead Form';
$_ADDONLANG['page_title_lead_details']           = 'Lead #%s';
$_ADDONLANG['page_title_leads-table']            = 'Leads Table';
$_ADDONLANG['page_title_add_followup']           = 'Add Follow-up for Lead #%s';

$_ADDONLANG['page_title_add_potential']          = 'New Potential Form';
$_ADDONLANG['page_title_potential_details']      = 'Potential #%s';
$_ADDONLANG['page_title_potentials-table']       = 'Potentials Table';
$_ADDONLANG['page_title_add_followup_potential'] = 'Add Follow-up for Potential #%s';

#
$_ADDONLANG['logs_note_created'] = 'Note added: <code>%s</code>';
$_ADDONLANG['logs_note_updated'] = 'Note <code>%s</code> has been changed to: <code>%s</code>';
$_ADDONLANG['logs_note_deleted'] = 'Note has been removed.<br /> <code>%s</code>';

$_ADDONLANG['logs_reasignfollowuperror']      = 'Cannot sent Follow-up reschedule notification: <br /> <code>%s</code>';
$_ADDONLANG['logs_reasignfollowup']           = 'Sent Follow-up reschedule notification to <code>%s</code>';
$_ADDONLANG['logs_has_benn_ereased']          = 'Logs has been ereased.';
$_ADDONLANG['logs_has_benn_ereased_btn']      = 'Clear Logs';



// mgCRM_Core_Language::t('not_assigned')
?>

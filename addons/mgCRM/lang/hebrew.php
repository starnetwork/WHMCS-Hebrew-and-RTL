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
 *                          Hebrew Language
 ****************************************************************************************/

/**
 * Main navigation tabs in module header
 * you can easly add new using following syntax:
 *
 * Example:
 * $_ADDONLANG['Dashboard'] = 'Command Center';
 * $_ADDONLANG['API']       = 'awesome API';
 */

$_ADDONLANG['Dashboard'] = 'לוח הבקרה';
$_ADDONLANG['Leads']     = 'לידים';
$_ADDONLANG['Potentials']     = 'פוטנציאליים';
$_ADDONLANG['Archive'] = 'ארכיון';
$_ADDONLANG['Settings'] = 'הגדרות';



/**
 * DataTables Language
 * This will be used globally in whole CRM module, and each datatables instance
 * Change this with head!
 */
$_ADDONLANG['DataTable_lang'] = json_encode(array(
    "emptyTable"     => "אין נתונים להצגה בטבלה זו",
    "info"           => "הצגה מההתחלה ועד הסוף של כל הערכים",
    "infoEmpty"      => "0 עד 0 מתוך 0 ערכים",
    "infoFiltered"   => "(ממוין לפי סך כל הערכים)",
    "infoPostFix"    => "",
    "thousands"      => ",",
    "lengthMenu"     => "רשומות לעמוד: _MENU_ ",
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
        "sortAscending"  => ": הפעל כדי לסדר את הפרטים מהקטן לגדול",
        "sortDescending" => ": הפעל כדי לסדר את הפריטים מהגדול לקטן"
    )
));

/**
 * Forms default validations
 */
$_ADDONLANG['validation_required']  = 'השדה % הוא שדה חובה';
$_ADDONLANG['validation_date']      = 'תאריך שגוי ב %';
$_ADDONLANG['validation_datetime']  = 'תאריך שגוי ב %';
$_ADDONLANG['validation_is_int']    = 'הנתון בשדה  % חייב להכיל מספר שלם';
$_ADDONLANG['loading']              = 'טוען...';         // used ewerywhere where is loading screen/gif


// few global langs for buttons mostly
$_ADDONLANG['tickets_createlead_save'] = 'שמור שינויים';
$_ADDONLANG['cancel_btn']              = 'בטל';
$_ADDONLANG['back_btn']                = 'חזור';
$_ADDONLANG['not_assigned']            = 'לא משוייך';


##################################
#     SETTINGS tab
##################################

/**
 *     GENERAL subpage
 *************************************************/
$_ADDONLANG['settings_general_descr']          = 'סטאטוס המודול';
$_ADDONLANG['settings_general_asterisk']       = ' אינטגרציה ל - Asterisk VoIP Center';
$_ADDONLANG['settings_general_asterisk_descr'] = 'מזהה פשוט המתריע האם האינטגרציה ל-Asterisk Module For WHMCS (developed by MG) הצליחה. אם לא הופיעה הודעות שגיאה, תוכל להתקשר ללקוחות באמצעות VOIP (תלוי באמצעות הגדרה תקינה של ה-VOIP)';
$_ADDONLANG['settings_general_asterisk_on']    = 'אישור';
$_ADDONLANG['settings_general_asterisk_off']   = 'לא קיימת אינטגרציה';
$_ADDONLANG['settings_general_cron']           = 'Cron';
$_ADDONLANG['settings_general_cron_on']        = 'אישור';
$_ADDONLANG['settings_general_cron_on_descr']  = 'הרצה אחרונה';
$_ADDONLANG['settings_general_cron_off']       = 'אינו פעיל';
$_ADDONLANG['settings_general_cron_off_descr'] = 'עבודת ה-Cron, עדיין לא הופעלה. בדוק כי הגדרת זאת בצורה תקינה.';

$_ADDONLANG['settings_general_email_tpl']            = 'תבניות דואר אלקטרוני';
$_ADDONLANG['settings_general_email_inuse']          = 'תבניות דואר אלקטרוני בשימוש:';
$_ADDONLANG['settings_general_email_tpl_none']       = 'שגיאוה';
$_ADDONLANG['settings_general_email_tpl_none_desc']  = 'איך לך תבניות דואר אלקטרוני המוגדרות בתצוגה סלולרית. התראות דואר אלקטרוני ומעקבים לא יפעלו בצורה תקינה.';

$_ADDONLANG['settings_general_uploads']             = 'הלעאות';
$_ADDONLANG['settings_general_uploads_ok']          = 'אישור';
$_ADDONLANG['settings_general_uploads_ok_descr']    = 'הספריה אינה מוגדרת כראוי.';
$_ADDONLANG['settings_general_uploads_notok']       = 'שגיאה';
$_ADDONLANG['settings_general_uploads_notok_descr'] = 'הספריה אינה מוגדרת כראוי. המערכת אינה יכולה ליצור תיקיה באופן אוטומטי. בבקשה הגדר את ההרשאות ל<code>0777</code>.';

$_ADDONLANG['settings_general_general']                   = 'הגדרות כלליות';
$_ADDONLANG['settings_general_general_quotes']            = 'אפשר הזמנות עבודה';
$_ADDONLANG['settings_general_general_quotes_descr']      = 'ההפעלת אפשרות זו תאפשר לך ליצור הזמנות עבודה ללידים והזדמנויות.';
$_ADDONLANG['settings_general_general_potentials']        = 'אפשר הזדמנויות';
$_ADDONLANG['settings_general_general_potentials_descr']  = 'הפעלת אפשרות זו תאפשר לך להמיר לידים להזדמנויות.';
$_ADDONLANG['settings_general_general_adminassign']       = 'אפשר שיוך שלי לידים לאנשי מכירות ספציפיים';
$_ADDONLANG['settings_general_general_adminassign_descr'] = 'בעת הפעלת אפשרות זו כל ליד ישוייך למנהל ספציפי האחראי עליהם.';

$_ADDONLANG['settings_general_followups']                = 'הגדרות מעקב';
$_ADDONLANG['settings_general_followups_upcoming']       = 'הגדרות דואר אלקטרוני למעקבים קרבים';
$_ADDONLANG['settings_general_followups_upcoming_descr'] = 'תבניות דואר אלקטרוני להתראת המנהלים אודות מעקבים קרבים.';
$_ADDONLANG['settings_general_followups_new']            = 'דואר אלקטרוני לתזכורת מעקב ';
$_ADDONLANG['settings_general_followups_new_descr']      = 'תבנית דואר אלקטרוני המשמשת להתראת המנהלים אודות מעקב קרוב.';
$_ADDONLANG['settings_general_followups_edit']           = 'תזמן מחדש התראת דואר אלקטרוני למעקב. ';
$_ADDONLANG['settings_general_followups_edit_descr']     = 'תבנית דואר אלקטרוני המשמשת להתראת המנהלים כי מעקב תוזמן מחדש.';
$_ADDONLANG['settings_general_followups_types']          = 'סוגי מעקבים';
$_ADDONLANG['settings_general_followups_types_empty']    = 'לא מוגדר';
$_ADDONLANG['settings_general_followups_types_descr']    = 'אתה יכול להגדיר כמה סוגים של מעקבים. כל סוג מעקב יתואר על ידי אחד מהסוגים הבאים <em>פסיקים יפרידו בין הסוגים השונים</em>';


/**
 *     CRON subpage
 *************************************************/
$_ADDONLANG['cron_h3']         = 'מידע על Cron  של מודול CRM';
$_ADDONLANG['cron_descr']      = 'על מנהל המערכת להגדיר את ה-Cron באופן ידני. אפשרות זו תרחב את הפונקציונאליות, כמו שליחת דואר אלקטרוני בזמן מוגדר. ההמלצה היא להגדיר את הרצת ה-Cron לפחות פעם אחת ביום כדי לקבל את התראות המערכת. ';
$_ADDONLANG['settings_cron_alert_top']   = 'חשוב';
$_ADDONLANG['settings_cron_alert_descr'] = 'אין רשומות אם ה-Cron עדיין לא הורץ. אנא בדוק האם ה-Cron מוגדר כראוי. ';
$_ADDONLANG['cron_path']       = 'נתיב ה-Cron';
$_ADDONLANG['cron_url']        = 'כתובת ה-URL של Cron';
$_ADDONLANG['cron_lastdate']   = 'תאריך הרצה אחרון';
$_ADDONLANG['cron_date_error'] = 'אין רשומות לביצוע.';


$_ADDONLANG['settings_cron_interval']             = 'מרווחי זמן של ה-Cron';
$_ADDONLANG['settings_cron_interval_descr']       = 'התאם את מרווחי הזמן של פעילות ה-Cron לטווח הרצוי. שליחת הודעות דואר אלקטרוני ומעקבים קשורים להרצת ה-Cron. זכור כי אם תגדיר את הפעלת ה-Cron לפעם ביום תקבל התראות למעקבים - פעם אחת ביום. ';
$_ADDONLANG['settings_cron_interval_between_on']  = 'מרווח הזמן בין 2 הרצות ה-Cron האחרונות:';
$_ADDONLANG['settings_cron_interval_between_off'] = 'הכוונה היא כי מעקבים ותזכורות ישלחו פעם אחת ביום';
$_ADDONLANG['settings_cron_interval_fail']        = 'המערכת אינה יכולה להגדיר מרווחי זמן';
$_ADDONLANG['settings_cron_interval_days']        = 'ימים';
$_ADDONLANG['settings_cron_interval_hours']       = 'שעות';
$_ADDONLANG['settings_cron_interval_minutes']     = 'דקות';
$_ADDONLANG['settings_cron_interval_seconds']     = 'שניות';



/**
 *     EMAILS subpage
 *************************************************/
$_ADDONLANG['settinhs_email_h3']              = 'תבניות דואר אלקטרוני  בשימוש במודול';
$_ADDONLANG['settinhs_email_descr']         = 'כאן תוכל להגדיר את תבניות הדואר האלקטרוני בהם ישתמש המודול. תוכל להגדיל אילו תבניות דואר אלקטרוני יוצגו כברירת מחדל. ';
$_ADDONLANG['settinhs_email_accordioninfo'] = 'רשימת כל תבניות הדואר האלקטרוני ב-CRM';
$_ADDONLANG['settinhs_email_tbl_id']        = 'מזהה';
$_ADDONLANG['settinhs_email_tbl_name']      = 'שם תבנית';
$_ADDONLANG['settinhs_email_tbl_details']   = 'פרטי תבנית';
$_ADDONLANG['settinhs_email_btn_details']   = 'פרטים';
$_ADDONLANG['settinhs_email_name_empty']      = 'שם התבנית ריק';
$_ADDONLANG['settinhs_email_tbl_empty']     = 'אין תבניות זמינות. אנא צור כמה תבניות.';
$_ADDONLANG['settinhs_email_alert_title']     = 'חשוב!';
$_ADDONLANG['settinhs_email_alert_body']      = 'אין לך תבניות דואר אלקטרוני מוגדרות. התראות דואר אלקטרוני ומעקבים לא יפעלו כראוי. .';
$_ADDONLANG['settinhs_email_new_title']       = 'הוסף תבנית דואר אלקטרוני חדשה';
$_ADDONLANG['settinhs_email_new_label']       = 'שם תבנית';
$_ADDONLANG['settinhs_email_new_placeholder'] = 'שם ייחודי';
$_ADDONLANG['settinhs_email_new_btn']         = 'צור תבנית דואר אלקטרוני';
$_ADDONLANG['settinhs_email_h3_existing']     = 'תבנית דואר אלקטרוני קיימת';


/**
 *     GENERAL subpage
 *************************************************/
$_ADDONLANG['settings_fields_title']     = 'הגדרת שדות ללידים/הזדמנויות.';
$_ADDONLANG['settings_fields_descr']     = 'כאן תוכלו להוסיף ולהגדיר שדות נוספים בעבור ליד או הזדמנות. כל שדה יכול לשמם כפילטר או תגית על מנת למצוא לקוח ספציפי. בנוסף, אפשרות זו שמינה לניהול כמויות מידע גדולות. ';
$_ADDONLANG['settings_fields_new_btn']      = 'הוסף שדה חדש';
$_ADDONLANG['settings_fields_tbl_name']     = 'שם';
$_ADDONLANG['settings_fields_tbl_type']     = 'סוג';
$_ADDONLANG['settings_fields_tbl_descr']    = 'תיאור';
$_ADDONLANG['settings_fields_tbl_req_lead'] = 'דרוש בעבור ליד';
$_ADDONLANG['settings_fields_tbl_req_pot']  = 'דרוש בעבור הזדמנות';
$_ADDONLANG['settings_fields_tbl_act_lead'] = 'פעיל ';
$_ADDONLANG['settings_fields_tbl_act_pot']  = 'פעיל בעור הזדמנות';
$_ADDONLANG['settings_fields_tbl_actions']  = 'פעולות';
$_ADDONLANG['settings_fields_yes']          = 'כן';
$_ADDONLANG['settings_fields_no']           = 'לא';
$_ADDONLANG['settings_fields_no_descr']     = 'אין תיאור';
$_ADDONLANG['settings_fields_edit']         = 'ערוך';
$_ADDONLANG['settings_fields_remove']       = 'הסר';

$_ADDONLANG['settings_fields_modal_title_edit']               = 'גרסת השדה';
$_ADDONLANG['settings_fields_modal_title_add']                = 'צור שדה חדש';
$_ADDONLANG['settings_fields_modal_name']                     = 'שם השדה';
$_ADDONLANG['settings_fields_modal_name_descr']               = 'ערך זה ישמש לזיהוי שדות מותאמים אישית. הערך יוצג בכל מקום כשם השדה המותאם אישית.';
$_ADDONLANG['settings_fields_modal_type']                     = 'סוג השדה';
$_ADDONLANG['settings_fields_modal_type_descr']               = 'בעת בחירת סוג השדה, אפשרויות נוספות יהפכו לזמינות.';
$_ADDONLANG['settings_fields_type_text']                      = 'טקסט';
$_ADDONLANG['settings_fields_type_textarea']                  = 'textarea';
$_ADDONLANG['settings_fields_type_dropdown']                  = 'dropdown';
$_ADDONLANG['settings_fields_type_checkbox']                  = 'checkbox';
$_ADDONLANG['settings_fields_modal_options']                  = 'אפשרויות השדה';
$_ADDONLANG['settings_fields_modal_options_descr']            = 'ערכים מופרדים בפסיקים בעבור שדות Dropdown.';
$_ADDONLANG['settings_fields_modal_description']              = 'תיאור';
$_ADDONLANG['settings_fields_modal_description_descr']        = 'תיאור השדה אשר יוצג בטופס \'Create\'';
$_ADDONLANG['settings_fields_modal_required_lead']            = 'דרוש בעבור ליד';
$_ADDONLANG['settings_fields_modal_required_lead_descr']      = 'בעת הסימון, שדה זה יהפוך לשדה חובה בעבור טפסים.';
$_ADDONLANG['settings_fields_modal_required_potential']       = 'דרוש בעבור הזדמנות';
$_ADDONLANG['settings_fields_modal_required_potential_descr'] = 'בעת הסימון, שדה זה יהפוך לשדה חובה בעבור טפסים.';
$_ADDONLANG['settings_fields_modal_active_lead']              = 'פעיל בעבור ליד';
$_ADDONLANG['settings_fields_modal_active_lead_descr']        = 'בעת הסימון, שדה זה יהפוך לשדה חובה בעבור לידים.';
$_ADDONLANG['settings_fields_modal_active_potential']         = 'פעיל בעבור הזדמנות';
$_ADDONLANG['settings_fields_modal_active_potential_descr']   = 'בעת הסימון, שדה זה יהפוך לשדה חובה בעבור הזדמנויות.';
$_ADDONLANG['settings_fields_modal_regex']                    = 'אימות Regex ';
$_ADDONLANG['settings_fields_modal_regex_descr']              = 'השדה יאומת באמת Regex.';
$_ADDONLANG['settings_fields_modal_validation']               = 'שגיאת אימות';
$_ADDONLANG['settings_fields_modal_validation_descr']         = 'כאשר אימות השדה יכשל, הודעה זו תוצג.';
$_ADDONLANG['settings_fields_modal_save']                     = 'שמור שדה';
$_ADDONLANG['settings_fields_modal_close']                    = 'סגור';
$_ADDONLANG['settings_fields_modal_add']                      = 'צור שדה';


/**
 *     FIELDS Views subpage
 *************************************************/
$_ADDONLANG['settings_fields_title']     = 'הגדרת שדות ללידים/הזדמנויות.';
$_ADDONLANG['settings_fields_descr']     = 'כאן תוכלו להוסיף ולהגדיר שדות נוספים בעבור ליד או הזדמנות. כל שדה יכול לשמם כפילטר או תגית על מנת למצוא לקוח ספציפי. בנוסף, אפשרות זו שמינה לניהול כמויות מידע גדולות. ';
$_ADDONLANG['settings_fieldsviews_forleads']      = 'תצוגת ברירת מחדל ללידים';
$_ADDONLANG['settings_fieldsviews_forpotentials'] = 'תצוגת ברירת מחדל להזדמנויות';
$_ADDONLANG['settings_fieldsviews_save']          = 'שמור';
$_ADDONLANG['settings_fieldsviews_columns']       = 'טורים זמינים';
$_ADDONLANG['settings_fieldsviews_visible']       = 'מוצג:';






##################################
#     HOOK - Ticket View
##################################
$_ADDONLANG['ticketView_title_leaddetails']            = 'פרטי ליד';
$_ADDONLANG['ticketView_title_potentialdetails']       = 'פרטי הזדמנויות';
$_ADDONLANG['ticketView_field_empty']                  = 'לא הגודר';
$_ADDONLANG['ticketView_convert_topotential']          = 'הפוך להזדמנות';
$_ADDONLANG['ticketView_convert_tolead']               = 'הפוך לליד';
$_ADDONLANG['ticketView_show_potential']               = 'הצג הזדמנות';
$_ADDONLANG['ticketView_create_leadform']              = 'צור טופס ליד';
$_ADDONLANG['ticketView_create_leadajax']              = 'יצירת ליד מהירה';
$_ADDONLANG['ticketView_show_lead']                    = 'הצג ליד';
$_ADDONLANG['ticketView_ajaxerror']                    = 'שגיאה';
$_ADDONLANG['ticketView_error_leadexist']              = 'הליד כבר קיים <a href=\'%s\'>פרטי הליד</a>';
$_ADDONLANG['ticketView_ajax_leadcreated']             = '<span class=\'label active\'>הליד נוצר</span> <a href=\'%s\'>פרטי הליד</a>';
$_ADDONLANG['ticketView_error_nolead']                 = 'לא ניתן להמיר את הליד להזדמנות. הליד לא קיים.';
$_ADDONLANG['ticketView_error_nopotential']            = 'לא ניתן להמיר לליד. ההזדמנות אינה קיימת.';
$_ADDONLANG['ticketView_ajax_leadconverted']           = '<span class=\'label active\'>הליד הומר להזדמנות</span> <a href=\'%s\'>הצג פרטים</a>';
$_ADDONLANG['ticketView_ajax_potentialconverted']      = '<span class=\'label active\'>ההזדמנות הומרה לליד</span> <a href=\'%s\'>הצג פרטים</a>';
$_ADDONLANG['ticketView_button_actions']               = 'פעולות CRM:';
$_ADDONLANG['ticketView_button_modalleaddetails']      = 'פרטי הליד';
$_ADDONLANG['ticketView_button_modalpotentialdetails'] = 'אפרטי ההזדמנות';
$_ADDONLANG['ticketView_modal_details']                = 'מידע מפורט';
$_ADDONLANG['ticketView_modal_close']                  = 'סגור';
$_ADDONLANG['ticketView_inline_name']                  = 'שם';
$_ADDONLANG['ticketView_inline_status']                = 'סטאטוס';
$_ADDONLANG['ticketView_inline_notassigned']           = 'הטיקט אינו משוייך לאף ליד או הזדמנות.';



##################################
#     STATIC CUSTOM FIELDS
##################################

$_ADDONLANG['fields_actions']       = 'פעולות';
$_ADDONLANG['fields_creation_date'] = 'תאריך יצירה';
$_ADDONLANG['fields_update_date']   = 'תאריך עידכון';
$_ADDONLANG['fields_ticket_id']     = 'מזהה הטיקט';
$_ADDONLANG['fields_tid']           = 'מספר הטיקט';
$_ADDONLANG['fields_title']         = 'כותרת הטיקט';
$_ADDONLANG['fields_client_id']     = 'מזהה הלקוח';
$_ADDONLANG['fields_client_name']   = 'שם הלקוח';
$_ADDONLANG['fields_quotes']        = 'הזמנת עבודה';
$_ADDONLANG['fields_admin_name']    = 'מנהל';

$_ADDONLANG['fields_status_active'] = 'מנהל';
$_ADDONLANG['fields_status_new']    = 'חדש';
$_ADDONLANG['fields_status_closed'] = 'סגור';
$_ADDONLANG['fields_status_not']    = 'לא מוגדר';
$_ADDONLANG['fields_status_update'] = 'עדכן סטאטוס';

##################################
#     LEADS
##################################

/**
 *     Add new LEAD - form
 *************************************************/
$_ADDONLANG['leads_createlead_title']        = 'צור ליד';
$_ADDONLANG['leads_createlead_descr']        = 'כאן תוכל להגדיר את פרטי הליד החדש';
$_ADDONLANG['leads_createnew_btn']           = 'צור ליד';
$_ADDONLANG['leads_createnew_admin_h3']      = 'מנהל משוייך';
$_ADDONLANG['leads_createnew_admin_label']   = 'שייך ליד ל';
$_ADDONLANG['leads_createnew_required_h4']   = 'שדות דרושים';
$_ADDONLANG['leads_createnew_optional_h4']   = 'Oשדות אופציונלים';
$_ADDONLANG['leads_createnew_optional_none'] = 'אין שדות אופציונלים';


/**
 *     LEADS main table
 *************************************************/


# lang in actions column
$_ADDONLANG['leads_table_details']      = 'פרטים';
$_ADDONLANG['leads_table_other']        = 'אחר';
$_ADDONLANG['leads_table_convert']      = 'המר להזדמנות';
$_ADDONLANG['leads_table_createuser']   = 'צור חשבון משתמש';
$_ADDONLANG['leads_table_call']         = 'קריאה';
$_ADDONLANG['leads_table_remove']       = 'הסר';
$_ADDONLANG['leads_table_resetfilters'] = 'אתחל פילטרים';
$_ADDONLANG['leads_table_filterdate']   = 'תאריך...';
$_ADDONLANG['leads_table_filtertext']   = 'פילטר...';
$_ADDONLANG['move_to_archive']          = 'העבר לארכיון';



/**
 *     single LEAD Details
 *************************************************/
$_ADDONLANG['leads_details_title']            = 'פרטים ראשיים';
$_ADDONLANG['leads_details_convert']          = 'המר להזדמנות';
$_ADDONLANG['leads_details_name_empty']       = 'השם הוגדר';
$_ADDONLANG['leads_details_name_placeholder'] = 'הקלד שם חדש כאן...';
$_ADDONLANG['leads_details_name_update_btn']  = 'עדכן שם';
$_ADDONLANG['leads_details_admin']            = 'שייך מנהל';
$_ADDONLANG['leads_details_admin_none']       = 'לא שוייך מנהל לליד זה.';
$_ADDONLANG['leads_details_creation']         = 'תאריך יצירה';
$_ADDONLANG['leads_details_lastupdate']       = 'עידכון אחרון';
$_ADDONLANG['leads_details_logs']             = 'לוגים';

# fields
$_ADDONLANG['leads_details_savebtn']               = 'שמור';
$_ADDONLANG['leads_details_fields_title']          = 'ערוך';
$_ADDONLANG['leads_details_fields_edit']           = 'ערוך';
$_ADDONLANG['leads_details_fields_client']         = 'לקוח';
$_ADDONLANG['leads_details_fields_client_reasign'] = 'שייך מחדש';
$_ADDONLANG['leads_details_fields_client_aasign']  = 'שייך';
$_ADDONLANG['leads_details_fields_client_create']  = 'צור משתמש';
$_ADDONLANG['leads_details_fields_client_not']     = 'לא משוייך';
$_ADDONLANG['leads_details_fields_ticket']         = 'טיקט';
$_ADDONLANG['leads_details_fields_ticket_not']     = 'לא משוייך';
$_ADDONLANG['leads_details_fields_yes']            = 'כן';
$_ADDONLANG['leads_details_fields_no']             = 'לא';
$_ADDONLANG['leads_details_fields_empty']          = 'לא שוייך';


$_ADDONLANG['leads_details_followup_add']          = 'צור מעקב';
$_ADDONLANG['leads_details_followup_title']        = 'מעקבים';


# notes
$_ADDONLANG['leads_details_notes_title']  = 'הערות';
$_ADDONLANG['notes_nonotes']              = 'כרגע אין הערות';
$_ADDONLANG['notes_add_btn']              = 'הוסף הערה';
$_ADDONLANG['notes_add_form_placeholder'] = 'הוסףכאן תוכן להערה חדשה';
$_ADDONLANG['notes_edit_btn']             = 'ערוך';
$_ADDONLANG['notes_show_more_btn']        = 'הצג עוד';
$_ADDONLANG['notes_delete_btn']           = 'מחק';
$_ADDONLANG['notes_save_btn']             = 'שמור';
$_ADDONLANG['notes_cancel_btn']           = 'בטל';
$_ADDONLANG['notes_lastmodified']         = 'נערך על ידי ';


# followups
$_ADDONLANG['followups_tbl_th_date']     = 'שם';
$_ADDONLANG['followups_tbl_th_type']     = 'סוג';
$_ADDONLANG['followups_tbl_th_descr']    = 'תיאור';
$_ADDONLANG['followups_tbl_th_todo']     = 'רשימת מטלות';
$_ADDONLANG['followups_tbl_th_notif']    = 'התראות';
$_ADDONLANG['followups_tbl_th_actions']  = 'פעולות';
$_ADDONLANG['followups_todo_not']        = 'רשימת המטלות לא שוייכה';
$_ADDONLANG['leads_followup_todo_1']     = 'ליד';
$_ADDONLANG['leads_followup_todo_2']     = 'מעקב';
$_ADDONLANG['followups_notif_th_date']   = 'תאריך';
$_ADDONLANG['followups_notif_th_method'] = 'שיטה';
$_ADDONLANG['followups_notif_th_status'] = 'סטאטוס';
$_ADDONLANG['followups_notif_th_tpl']    = 'תבבית';
$_ADDONLANG['followups_notif_th_type']   = 'סוג';
$_ADDONLANG['followups_notif_th_sent']   = 'תאריך שליחה';
$_ADDONLANG['followups_notif_pending']   = 'ממתין';
$_ADDONLANG['followups_notif_sent']      = 'נשלח';
$_ADDONLANG['followups_notif_sentdate']  = 'עדיין לא נקבע.';
$_ADDONLANG['followups_notif_nonotify']  = 'אין התראות';
$_ADDONLANG['followups_rescheude']       = 'תוזמן מחדש';

$_ADDONLANG['followups_notif_type_invitation_email'] = 'דואר אלקטרוני להזמנה';
$_ADDONLANG['followups_notif_type_main_email']       = 'תזכורת ללקוח';
$_ADDONLANG['followups_notif_type_reminder_email']   = 'תזכורת למנהל';

# create followup form
$_ADDONLANG['leads_createfollowup_title']                 = 'הוסף מעקב חדש לליד';
$_ADDONLANG['leads_createfollowup_descr']                 = 'כאן תוכל להוסיף מעקב חדש לליד. תוכל גם להגדיר את סוגי ההתראות כמו תזכורות למנהל מכירות, התראות יצירה וכדומה';
$_ADDONLANG['leads_createfollowup_base']                  = 'אפשרויות ראשיות';
$_ADDONLANG['leads_createfollowup_assignadmin']           = 'שייך לחבר צוות';
$_ADDONLANG['leads_createfollowup_notifications']         = 'הגדר התראות דואר אלקטרוני';
$_ADDONLANG['leads_createfollowup_notifications_tooltip'] = 'בשלב זה רק התראות דואר אלקטרוני נתמכות';
$_ADDONLANG['leads_createfollowup_addnotification']       = 'הגדר התראות חדשות';
$_ADDONLANG['leads_createfollowup_advanced']              = 'הגדרות מתקדמות';
$_ADDONLANG['leads_createfollowup_date']                  = 'תאריך';
$_ADDONLANG['leads_createfollowup_date_descr']            = 'תאריך שליחת התראות דואר אלקטרוני';
$_ADDONLANG['leads_createfollowup_description']           = 'תיאור';
$_ADDONLANG['leads_createfollowup_description_descr']     = 'תיאור מעקב';
$_ADDONLANG['leads_createfollowup_admin']                 = 'מנהל מכירות';
$_ADDONLANG['leads_createfollowup_admin_descr']           = 'בחר מנהל האחראי על מעקב זה';
$_ADDONLANG['leads_createfollowup_admin_todo']            = 'הוסף לרשימת המטלות של המנהל ';
$_ADDONLANG['leads_createfollowup_admin_todo_descr']      = 'הוסף למשימת צוות ב-WHMCS (הוסף לרשימת המטלות).';
$_ADDONLANG['leads_createfollowup_type']                  = 'סוג מעקב';
$_ADDONLANG['leads_createfollowup_type_descr']            = 'בחר בסוג כדי לנהל מעקבים רבים בקלות';

# options
$_ADDONLANG['leads_createfollowup_notif_emailtpl']          = 'תבנית דואר אלקטרוני';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_no']       = 'תבנית דואר אלקטרוני לא הוגדרה';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_add']      = 'הוסף תבנית דואר אלקטרוני';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_no_descr'] = 'אין לך תבניות דואר אלקטרוני המוגדרות במודול. התראות דואר אלקטרוני ומעקבים לא יפעלו בצורה תקינה.';
$_ADDONLANG['leads_createfollowup_notif_emailtpl_descr']    = 'בחר תבנית שתהיה בשימוש';
$_ADDONLANG['leads_createfollowup_notif_bcc']               = 'עותק:';
$_ADDONLANG['leads_createfollowup_notif_bcc_descr']         = 'הודעת דואר אלקטרוני תשלח לחבר הצוות הנבחר:';
$_ADDONLANG['leads_createfollowup_notif_reply']             = 'השב ל';
$_ADDONLANG['leads_createfollowup_notif_reply_descr']       = 'דואר אלקטרוני יוגדר כמענה לחבר צוות הנבחר';


# invitation notification
$_ADDONLANG['leads_createfollowup_invitation']        = 'דואר אלקטרוני להזמנה';
$_ADDONLANG['leads_createfollowup_invitation_descr']  = 'התראה זו תשלח ברגע שבו נוצר מעקב. אתה יכול להשתמש בהתראה זו כדי לשלוח מידע על אירועים קרובים לאיש קשר עם עותק למנהלים. ';


# invitation notification
$_ADDONLANG['leads_createfollowup_main']        = 'תזכורת ליצירת קשר';
$_ADDONLANG['leads_createfollowup_main_descr']  = 'התראה זו תשלח לאיש קשר בתאריך שנקבע במעקב. תוכל גם להגדיר עותק שישלח למנהל. ';


# reminder notification
$_ADDONLANG['leads_createfollowup_reminder']            = 'תזכורת למנהל';
$_ADDONLANG['leads_createfollowup_reminder_descr']      = 'תזכורת זו תשלח למנהלים בזמן שנבחר לפני תאריך המעקב. ';
$_ADDONLANG['leads_createfollowup_reminder_time_descr'] = 'הגדר את מרווח הזמן בה צריכה להשלח התראת התראת התזכורת ';
$_ADDONLANG['leads_createfollowup_reminder_when']       = 'בחר זמן';
$_ADDONLANG['leads_createfollowup_reminder_minutes']    = 'דקות';
$_ADDONLANG['leads_createfollowup_reminder_hours']      = 'שעות';
$_ADDONLANG['leads_createfollowup_reminder_days']       = 'ימים';



$_ADDONLANG['leads_createfollowup_notif_client']            = 'התראה ללקוח';
$_ADDONLANG['leads_createfollowup_notif_client_descr']      = 'התראה זו משמשת לשליחת התראה בדואר אלקטרוני לליד בתאריך המעקב ';


$_ADDONLANG['leads_createfollowup_notif_admin']       = 'התראה למנהל המכירות';
$_ADDONLANG['leads_createfollowup_notif_admin_descr'] = 'התראה זו משמשת כדי לשלוח דואר אלקטרוני למנהלים שהוגדרו באפשרויות המעקב ';
$_ADDONLANG['leads_createfollowup_notif_admin_label'] = 'מנהל להתראה';





$_ADDONLANG['leads_createfollowup_save'] = 'שמור מעקב';
$_ADDONLANG['leads_createfollowup_add']  = 'צור מעקב';
$_ADDONLANG['leads_createfollowup_back'] = 'חזור';


$_ADDONLANG['leads_details_quotes_tab']            = 'הזמנת עבודה';
$_ADDONLANG['leads_details_quotes_add']            = 'צור הזמנת עבודה';
$_ADDONLANG['leads_details_files_tab']             = 'קבצים';
$_ADDONLANG['leads_details_logs_tab']              = 'לוגים';
$_ADDONLANG['leads_details_logs_show']              = 'הצג את  כל הלוגים';


$_ADDONLANG['leads_leaddetailsf_title']          = 'פרטי השדות';
$_ADDONLANG['leads_leaddetails_back']            = 'חזור';
$_ADDONLANG['leads_leaddetails_followups_title'] = 'רשימת מעקבים';
$_ADDONLANG['leads_leaddetails_files_title']     = 'קבצים';




##################################
#     POTENTIALS
##################################
$_ADDONLANG['potentials_createnew_btn']   = 'צור הזדמנות';
$_ADDONLANG['potentials_details_convert'] = 'הפוך לליד';

$_ADDONLANG['potentials_createlead_title']        = 'צור הזדמנות';
$_ADDONLANG['potentials_createlead_descr']        = 'כאן תוכל להגדיר את הפרטים ליצירת  הזדמנות חדשה';
$_ADDONLANG['potentials_createnew_btn']           = 'צור הזדמנות';





##################################
#          MESSAGES
# mostly as some action result
##################################

$_ADDONLANG['message_leadadded']                         = 'הליד הוסף בהצלחה.';
$_ADDONLANG['message_leadedited']                        = 'הליד נערך בהצלחה.';
$_ADDONLANG['message_leadconverted']                     = 'הליד הומר להזדמנות בהצלחה.';
$_ADDONLANG['message_leaddeleted']                       = 'הליד הוסר.';
$_ADDONLANG['message_senttoarchive']                     = 'הליד נשלח לארכיון.';

$_ADDONLANG['message_followupadded']                     = 'מעקב חדש נוצר.';
$_ADDONLANG['message_quotehasbeenadded']                 = 'הזמנת עבודה חדשה נוצרה.';


$_ADDONLANG['message_archiveedited']                     = 'הארכיון נערך בהצלחה.';
$_ADDONLANG['message_archivedeleted']                    = 'הארכיון הוסר';
$_ADDONLANG['message_archiveconvertlead']                = 'הארכיון הומר בהצלחה לליד';
$_ADDONLANG['message_archiveconvertpotential']           = 'הארכיון הומר בהצלחה להזדמנות';


$_ADDONLANG['message_potentialadded']                    = 'הזדמנות נוצרה בהצלחה';
$_ADDONLANG['message_potentialedited']                   = 'הזדמנות נערכה בהצלחה.';
$_ADDONLANG['message_potentialconverted']                = 'ההזדמנות הומרה בהצלחה לליד.';
$_ADDONLANG['message_potentialdeleted']                  = 'ההזדמנות הוסרה בהצלחה.';
$_ADDONLANG['message_senttoarchive_potential']           = 'ההזדמנות נשלחה לארכיון.';


$_ADDONLANG['message_settingsfieldedited']               = 'שדה מותאם אישית נערך';
$_ADDONLANG['message_settingsfieldadded']                = 'שדה מותאם אישית הוסף';
$_ADDONLANG['message_settingsfieldorder']                = 'שדות מותאמים אישית הוקלטו בהצלחה';
$_ADDONLANG['message_settingsfielddeleted']              = 'שדה מותאם אישית הוסר';
$_ADDONLANG['message_settingsfieldviews']                = 'תצוגת ברירת המחדל לשדות מותאמים אישית השתנתה..';
$_ADDONLANG['message_clientreassigned']                  = 'לקוח שוייך מחדש';
$_ADDONLANG['message_reassignedquotestransfered']        = '%s  הזמנות עבודה הועברו ללקוח %s.';
$_ADDONLANG['message_reassignedquotesnottransfered']     = '%s הזמנות עבודה הוסרו מ %s (הן שוייכו ללקוח הישן: %s)';

$_ADDONLANG['message_removefollowupconfirmation_text']   = 'האם אתה בטוח שאתה רוצה להסיר את המעקב? \n לא ניתן לבטל את הפעולה.';
$_ADDONLANG['message_removefollowupconfirmation_title']  = 'האם אתה בטוח';
$_ADDONLANG['message_removefollowupconfirmation_yesbtn'] = 'כן, תמחק את זה כבר!';
$_ADDONLANG['message_followupremoved']                   = 'המעקב הוסר!';
$_ADDONLANG['message_followup_rescheduled']              = 'המעקב תוזמן מחדש!';
$_ADDONLANG['message_potential_notfound']                = 'משהו אינו קכשורה. המערכת לא הצליחה למצוא את ההזדמנות עם המזהה #%s !';
$_ADDONLANG['message_lead_notfound']                     = 'משהו אינו קכשורה. המערכת לא הצליחה למצוא את הליד עם המזהה #%s !';


// WHMCS' Edit quotas form
$_ADDONLANG['whmcs_quotas_crm_title']                  = 'CRM:';
$_ADDONLANG['whmcs_quotas_button_lead_text']           = 'הצג ליד';
$_ADDONLANG['whmcs_quotas_button_potential_text']      = 'הצג הזדמנות';
$_ADDONLANG['whmcs_quotas_button_archive_text']        = 'הצג הזדמנות';
$_ADDONLANG['whmcs_quotas_infobox_lead_text']          = 'הצעת מחיר זו שוייכה לליד';
$_ADDONLANG['whmcs_quotas_infobox_potential_text']     = 'הצעת מחיר זו שוייכה להזדמנות';
$_ADDONLANG['whmcs_quotas_infobox_archive_text']       = 'הצעת מחיר זו שוייכה להזדמנות';
$_ADDONLANG['whmcs_quotas_crm_showdetails']            = '<i class="ui-icon ui-icon-circle-plus" style="display: inline-block; float: left;"></i>&nbsp;הרחב פרטים';
$_ADDONLANG['whmcs_quotas_crm_hidedetails']            = '<i class="ui-icon ui-icon-circle-minus" style="display: inline-block; float: left;"></i>&nbsp;הסתר פרטים';
$_ADDONLANG['whmcs_quotas_infobox_client_assigned']    = 'לקוח';
$_ADDONLANG['whmcs_quotas_infobox_notassigned']        = 'לא משוייכת';
$_ADDONLANG['whmcs_quotas_infobox_ticket_assigned']    = 'טיקט';
$_ADDONLANG['whmcs_quotas_infobox_ticket_admin']       = 'משוייך למנהל';
$_ADDONLANG['whmcs_quotas_disableduserselect_exist'] = 'לא זמין, משום שהצעת המחיר משוייכת ל %s והיא כבר משוייכת ללקוח.';
$_ADDONLANG['whmcs_quotas_disableduserselect_notexist'] = 'לא זמין, משום שהצעת המחיר משוייכת ל %s. תחילה, צור לקוח בעבור  %s.';


# followups
$_ADDONLANG['followups_add_todo_lead_title']      = '#%s מעקב ליד';
$_ADDONLANG['followups_add_todo_potential_title'] = '#%s מעקב הזדמנות';
$_ADDONLANG['followups_add_todo_archive_title']   = '#%s מעקב ארכיון';
$_ADDONLANG['followups_add_todo_lead_descr']      = 'המעקב בעבור  #%s  ליד %s.תיאור מעקב מלא: %s';
$_ADDONLANG['followups_add_todo_potential_descr'] = 'המעקב בעבור  #%s  הזדמנות %s.תיאור מעקב מלא: %s';
$_ADDONLANG['followups_add_todo_archive_descr']   = 'המעקב בעבור  #%s  ארכיון %s.תיאור מעקב מלא: %s';


# LOGS
# DO not you dare to delete this
$_ADDONLANG['logs_breadcrumbs_lead']                 = 'ליד ';
$_ADDONLANG['logs_breadcrumbs_potential']            = 'הזדמנות';
$_ADDONLANG['logs_breadcrumbs_archive']              = 'ארכיון';
$_ADDONLANG['logs_breadcrumbs_emptyname']            = '<small>שם ריק</small>';
$_ADDONLANG['logs_breadcrumbs_logs']                 = '<u>לוגים</u>';

$_ADDONLANG['logs_quoterel_assign']                  = 'הצעת המחיר #%s שוייכה';
$_ADDONLANG['logs_converted_to_potential']           = 'הומר להזדמנות';
$_ADDONLANG['logs_converted_to_archive']             = 'נשלח לארכיון';
$_ADDONLANG['logs_converted_to_lead']                = 'הומר לליד';
$_ADDONLANG['logs_assignclient_reassign_quotes']     = 'הצעת מחיר: %s שוייכה מחדש ללקוח #%s';
$_ADDONLANG['logs_reassign_status']                  = 'הסטאטוס השתנה מ %s ל %s ע"י  %s';
$_ADDONLANG['logs_updatednotes_notes']               = 'ההערות השתנו מ <div class="well well-sm">%s</div> ל <div class="well well-sm">%s</div>';
$_ADDONLANG['ajax_msg_notes_updated']                = 'ההערות עודכנו';
$_ADDONLANG['logs_quotereassigned_to_client']        = 'הזמנת העבודה <b>#%s</b> שוייכה מחדש ללקוח: <em>%s</em> to: <em>%s</em>';
$_ADDONLANG['logs_quotecrmunassign']                 = 'השיוך להזמנת העבודה  <b>#%s</b> הוסר מהלקוח: <em>%s</em>';
$_ADDONLANG['logs_adminreassigned']                  = 'המנהל המשוייך השתנה מ <em>%s</em> ל: <b>%s</b>';
$_ADDONLANG['logs_adminunassigned']                  = 'Admin <b>%s</b> has been unassigned';
$_ADDONLANG['logs_newfollowupemailerror']            = 'לא ניתן לשלוח את התראת המעקב, מכיוון שלא הוגדרה תבנית ייעודית לשם כך.';
$_ADDONLANG['logs_newfollowupemailsenterror']        = 'לא ניתן לשלוח התראת מעקב חדה ל <em>%s</em>. שגיאה: %s';
$_ADDONLANG['logs_upcomingfollowupaemailaded']       = 'נוספה התראת מעקב חדשה למנהל <em>%s</em> לכתובת הדואר האלקטרוני <em>%s</em>';
$_ADDONLANG['logs_upcomingfollowupaemailerror']      = 'הוסף התראת מעקב חדשה ל <em>%s</em>. שגיאה: %s';
$_ADDONLANG['logs_newfollowupemailsent']             = 'התראת מעקב חדשה נשלחה ל <em>%s</em>';
$_ADDONLANG['logs_newfollowuptodoerror']             = 'לא ניתן להוסיף מטלה חדשה ברשימת המטלות של המנהל<em>%s</em>. שגיאה: %s';
$_ADDONLANG['logs_newfollowuptodoadded']             = 'מטלה חדשה ברשימת המטלות של המנהל <em>%s</em>';
$_ADDONLANG['logs_newfollowupaemailaded']            = 'התראת דואר אלקטרוני חדשה ללקוח נרשמה מ <em>%s</em> ל <em>%s</em>';
$_ADDONLANG['logs_newfollowupemailerror']            = 'לא ניתן להוסיף התראת דואר אלקטרוני חדשה מ <em>%s</em> ל <em>%s</em>. שגיאה <em>%s</em>';
$_ADDONLANG['logs_newfollowupadded']                 = 'New Follow-up has been created to date: <em>%s</em> (<a href="todolist.php?action=edit&id=%s" target="_blank">To-Do #%s</a>). Assigned admin: <em>%s</em>';
$_ADDONLANG['logs_newfollowuperror']                 = 'לא ניתן ליצור רשומת מעקב חדשה למנהל <em>%s</em>. שגיאה: <em>%s</em>';
$_ADDONLANG['logs_newfollowupthrow']                 = 'לא ניתן ליצור רשומת מעקב חדשה. שגיאה: %s';
$_ADDONLANG['logs_removefollowup_ok']                = 'רשומת המעקב #%s (<em>%s</em>) הוסרה';
$_ADDONLANG['logs_removefollowup_error']             = 'לא ניתן להסיר את רשומת המעקב #%s. שגיאה: %s';
$_ADDONLANG['logs_followup_email_rescheduled_ok']    = 'התראת הדואר האלקטרוני למעקב תוזמנה מחדש <em>%s</em> ל <em>%s</em> במעקב #%s';
$_ADDONLANG['logs_followup_email_rescheduled_error'] = 'לא ניתן לתזמן מחדש התראת דואר אלקטרוני למעקב מ <em>%s</em> ל <em>%s</em> במעקב #%s. שגיאה: %s';
$_ADDONLANG['logs_followup_rescheduled_ok']          = 'המעקב #%s תוזמן מחדש מ <em>%s</em> ל <em>%s</em>';
$_ADDONLANG['logs_followup_rescheduled_ok']          = 'המעקב#%s תוזמן מחדש <em>%s</em> מ <em>%s</em> <br/>סיבה: <code>%s</code>';
$_ADDONLANG['logs_followup_rescheduled_error']       = 'לא ניתן לתזמן מחדש את המעקב #%s מ <em>%s</em> ל <em>%s</em>. שגיאה: %s';
$_ADDONLANG['logs_followup_rescheduled_allerror']    = '%s אירוע שגיאות בעת תזמון המעקב מחדש';
$_ADDONLANG['logs_assignclient_assign']              = 'המשתמש #%s שוייך ל';
$_ADDONLANG['logs_custom_field_changed']             = '<em>%s</em>: שונה ל<b>%s</b>';
$_ADDONLANG['logs_custom_field_set']                 = '<em>%s</em> הוגדר כ <code>%s</code>';

$_ADDONLANG['cron_job_start']                    = 'פעולת ה-CRM Cron התחילה (%s)';
$_ADDONLANG['cron_job_haserrors']                = 'פעולת ה-CRM Cron העלתה שגיאה';
$_ADDONLANG['cron_job_error']                    = 'פעולת ה-CRM Cron הציגה שגיאה: <pre>&s</pre>';
$_ADDONLANG['cron_job_stop']                     = 'פעולת ה-CRM Cron הסתיימה (%s)';
$_ADDONLANG['cron_emailfollowup_sent']           = 'מייל follow-up מתוזמן אל <em>%s</em> נשלח אל <em>%s</em>';


# upload files
$_ADDONLANG['upload_file_notwritable']               = 'אין הרשאות כתיבה לתיקיית ההעלאת הקבצים.';
$_ADDONLANG['upload_file_cannotcreatefolder']        = 'לא ניתן ליצור תקייה להעלאת קבצים';
$_ADDONLANG['upload_file_error1']                    = 'הקובץ שהועלה הגיע למגבלת הגודל להעלאת קובץ המוגדר ב-php.ini';
$_ADDONLANG['upload_file_error2']                    = 'הקובץ שהועלה הגיע למגבלת הגודל המקסימלי לקובץ שהוגדר בטופס ה-HTML';
$_ADDONLANG['upload_file_error3']                    = 'הקובץ שהועלה, הועלה רק בצורה חלקית';
$_ADDONLANG['upload_file_error4']                    = 'לא הועלו קבצים';
$_ADDONLANG['upload_file_error6']                    = 'ספריה זמנית נכשלה';
$_ADDONLANG['upload_file_error7']                    = 'כתיבת הקובץ לדיסק נכשלה';
$_ADDONLANG['upload_file_error8']                    = 'הרחבת PHP עצרה את העלאת הקובץ';
$_ADDONLANG['upload_file_error_post_max_size']       = 'הקובץ שהועלה הגיע למגבלת הגודל המקסימלי לפוסט המוגדרת בהוראת php.ini';
$_ADDONLANG['upload_file_error_max_file_size']       = 'הקובץ גדול מידי';
$_ADDONLANG['upload_file_error_min_file_size']       = 'הקובץ קטן מידי';
$_ADDONLANG['upload_file_error_accept_file_types']   = 'סוג קובץ לא נתמך';
$_ADDONLANG['upload_file_error_max_number_of_files'] = 'הגעת למגבלת כמות הקבצים';
$_ADDONLANG['upload_file_error_max_width']           = 'התמונה הגיעה לאורך המקסימלי';
$_ADDONLANG['upload_file_error_min_width']           = 'נדרש רוחב תמונה מינימלי';
$_ADDONLANG['upload_file_error_max_height']          = 'התמונה הגיעה לגובה המקסימלי';
$_ADDONLANG['upload_file_error_min_height']          = 'נדרש גודל מינימלי לתמונה';
$_ADDONLANG['upload_file_error_abort']               = 'העלאת הקובץ בוטלה';
$_ADDONLANG['upload_file_error_image_resize']        = 'שינוי גודל התמונה נכשל';
$_ADDONLANG['upload_file_uploadedwho']               = 'הקובץ <em>%s</em> הועלה על ידי %s';
$_ADDONLANG['upload_file_delete_ok']                 = 'הקובץ  נמחק';
$_ADDONLANG['upload_file_deleted']                   = 'הקובץ <em>%s</em> נמחק';
$_ADDONLANG['upload_file_delete_fail']               = 'לא ניתן למחוק את הקובץ';
$_ADDONLANG['upload_file_delete_notfound']           = 'הקובץ לא נמצא';

# files list table
$_ADDONLANG['files_selectfile']          = 'בחר קובץ';
$_ADDONLANG['files_selecttoupload']      = 'בחר קובץ להעלאה';
$_ADDONLANG['files_tbl_th_name']         = 'שם הקובץ';
$_ADDONLANG['files_tbl_th_uploaded']     = 'הועלה';
$_ADDONLANG['files_tbl_th_uploaded_who'] = 'הועלה על ידי';
$_ADDONLANG['files_tbl_th_actions']      = 'פעולות';
$_ADDONLANG['files_tbl_delete']          = 'מחק';
$_ADDONLANG['files_uploaded']            = 'הקובץ הועלה.';

# logs tab
$_ADDONLANG['logstab_bl_th_date']  = 'תאריך';
$_ADDONLANG['logstab_bl_th_descr']  = 'תיאור';
$_ADDONLANG['logstab_bl_th_admin']  = 'מנהל';


# import export
$_ADDONLANG['settings_import_h3']                  = 'ייבוא / ייצוא';
$_ADDONLANG['import_customfields_descr']           = '<em>ערכים בכל אחד מהשדות המותאמים אישית הם אופציונליים.</em>';
$_ADDONLANG['import_customfields_text']            = '<kbd>טקסט</kbd> השדה מקבל ערכי טקסט <code>"טקסט"</code> או ערכים ריקים <code>""</code>';
$_ADDONLANG['import_customfields_textarea']        = '<kbd>תיבת טקסט</kbd> שדה מקבל ערכים כמו <code>"טקסט ארוך"</code> או תא ריק כמו <code>""</code>';
$_ADDONLANG['import_customfields_checkbox']        = '<kbd>תיבת סימון</kbd> שדה מקבל ערכים  <code>"1"</code> (כמסומן,פעיל,נבחר),<code>"0"</code>  (כלא מסומן, פעיל,נבחר) או ערך ריק כ  <code>""</code>';
$_ADDONLANG['import_customfields_dropdown']        = '<kbd>תפריט בחירה</kbd> שדה מקבל ערכי טקסט<code>"טקסט"</code> או ערכים ריקים <code>""</code>. הערך חייב להיות תואם להגדרות שהוגדרו לתפריט Dropdown אחרת הוא יוגדר כתא ריק או not set';
$_ADDONLANG['import_field_descr']['Type']          = 'הגדר סוג רשימה  <code>ליד</code> <code>הזדמנות</code> <code> ארכיון</code>';
$_ADDONLANG['import_field_descr']['Creation Date'] = 'הגדר את תאריך היצירה , ניתן להשתמש בתאריך כמחרוזת.';
$_ADDONLANG['import_field_descr']['Update Date']   = 'הגדר את תאריך העידכון האחרון, ניתן להשתמש בתאריך כמחרוזת.';
$_ADDONLANG['import_field_descr']['Ticket ID']     = 'הגדר טיקט משוייך, ניתן להשתמש במזהה טיקט אבל לא במספר הטיקט';
$_ADDONLANG['import_field_descr']['Client ID']     = 'הגדר לקוח משוייך, ניתן להשתמש במזהה לקוח';
$_ADDONLANG['import_field_descr']['Admin ID']      = 'הגדר מנהל משוייך. ניתן להשתמש במזהה מנהל';

$_ADDONLANG['import_file_detected']              = 'זוהה קובץ עם מידע לייבוא';
$_ADDONLANG['import_file_notdetected']           = 'קובץ לייבוא לא זוהה. אנא השתמש בקובץ CSV.';
$_ADDONLANG['import_file_download']              = 'הורד';
$_ADDONLANG['import_file_readrows']              = 'שורות להעלאה';
$_ADDONLANG['import_file_selectfile']            = 'בחר קובץ להעלאה';
$_ADDONLANG['import_file_selectfile_upload']     = 'העלאה';
$_ADDONLANG['import_file_selectfile_descr']      = 'העלאת קובץ תחליף את הנתונים  הקיימים <code>יבא.CSV</code>.';
$_ADDONLANG['import_import_start']               = 'התחל ייבוא מקובץ.';
$_ADDONLANG['import_import_start_btn']           = 'ייבא';
$_ADDONLANG['import_file_download_export_btn']   = 'הורד כ-CSV';
$_ADDONLANG['import_file_download_export_descr'] = 'המערכת תייצר קובץ CSV הכולל את רשימת הלידים/הזדמנויות/ארכיונים. המבנה יהיה זהה להגדרות המופיעות בהגדרות ה- <em>שדות הזמינים</em>';

$_ADDONLANG['message_import_success']            = 'הייבוא הסתיים בהצלחה. הרשומות שייבואו: <stron>%s</strong>';
$_ADDONLANG['message_import_fail']               = 'אירעה שגיאה בעת הייבוא של: %s';
$_ADDONLANG['message_notification_noemail']      = 'כתובת דואר אלקטרוני לא הוגדרה. לא ניתן לשלוח התראה';
$_ADDONLANG['message_notification_noadminemail'] = 'לא ניתן לשלוח התראה. כתובת הדואר האאלקטרוני של המנהל לא הוגדרה.';


##################################
#     DASHBOARD tab
##################################
$_ADDONLANG['dashboard_select_sales']         = 'בחר חבר צוות';
$_ADDONLANG['dashboard_select_salesall']      = 'הכל';
$_ADDONLANG['dashboard_scheuded_followups']   = 'מעקבים מתוזמנים';
$_ADDONLANG['dashboard_leadsperstatus']       = 'לידים לסטאטוס';
$_ADDONLANG['dashboard_potentialsperstatus']  = 'הזדמנויות לסטאטוס';
$_ADDONLANG['dashboard_last10_leads']         = '10 הלידים האחרונים';
$_ADDONLANG['dashboard_last10_potentials']    = '10 ההזדמנויות האחרונות';
$_ADDONLANG['dashboard_last10_leadname']      = 'שם ליד';
$_ADDONLANG['dashboard_last10_potentialname'] = 'שם הזדמנות';
$_ADDONLANG['dashboard_last10_admin']         = 'מנהל משוייך';
$_ADDONLANG['dashboard_last10_status']        = 'סטאטוס';
$_ADDONLANG['dashboard_last10_created']       = 'נוצר';
$_ADDONLANG['dashboard_last10_notfound']      = 'לא נמצאו רשומות';
$_ADDONLANG['dashboard_admins_overwiew']      = 'לידים והזדמנויות לחברי צוות';
$_ADDONLANG['dashboard_leads']                = 'לידים';
$_ADDONLANG['dashboard_potentials']           = 'הזדמנויות';
$_ADDONLANG['dashboard_newpermonth']          = 'לידים והזדמנויות חדשים לחודש';
$_ADDONLANG['dashboard_selectyear']           = 'בחר שנה';
$_ADDONLANG['dashboard_selectmonth']           = 'בחר חודש';
$_ADDONLANG['dashboard_month']                = 'חודש';
$_ADDONLANG['dashboard_new_leads']            = 'לידים חדשים';
$_ADDONLANG['dashboard_new_potentials']       = 'הזדמנויות חדשות';
$_ADDONLANG['dashboard_newperday']            = 'לידים והזדמנויות חדשים ליום';


# page titles
$_ADDONLANG['page_title_add_lead']               = 'טופס ליד חדש ';
$_ADDONLANG['page_title_lead_details']           = 'ליד #%s';
$_ADDONLANG['page_title_leads-table']            = 'טבלת לידים';
$_ADDONLANG['page_title_add_followup']           = 'הוסף מעקב לליד #%s';

$_ADDONLANG['page_title_add_potential']          = 'טופס הזדמנות חדשה';
$_ADDONLANG['page_title_potential_details']      = 'הזדמנות #%s';
$_ADDONLANG['page_title_potentials-table']       = 'טבלת הזדמנויות';
$_ADDONLANG['page_title_add_followup_potential'] = 'הוסף מעקב להזדמנות #%s';

#
$_ADDONLANG['logs_note_created'] = 'הערה הוספה: <code>%s</code>';
$_ADDONLANG['logs_note_updated'] = 'ההערה <code>%s</code> שונתה ל: <code>%s</code>';
$_ADDONLANG['logs_note_deleted'] = 'ההערה הוסרה.<br /> <code>%s</code>';

$_ADDONLANG['logs_reasignfollowuperror']      = 'לא ניתן לשלוח התראת תזמון מחדש של מעקב: <br /> <code>%s</code>';
$_ADDONLANG['logs_reasignfollowup']           = 'שלח התראת תזמון מחדש של מעקב ל <code>%s</code>';
$_ADDONLANG['logs_has_benn_ereased']          = 'הלוגים נמחקו.';
$_ADDONLANG['logs_has_benn_ereased_btn']      = 'נקה לוגים';



// mgCRM_Core_Language::t('not_assigned')
?>

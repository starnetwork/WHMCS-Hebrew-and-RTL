<?php


/**


  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved


  CHANGELOG ************


**/


defined('WHMCS_ADMIN') or die('Invalid Access');


/************************************** Errors */
$_ADMINLANG['wbteampro']['error']['default_label'] = 'הודעת שגיאה';
$_ADMINLANG['wbteampro']['error']['license_error'] = 'שגיאת wbTeamPro: אישור רישיון נכשל';
$_ADMINLANG['wbteampro']['error']['license_invalid'] = 'שגיאת wbTeamPro: מפתח רישיון לא חוקי';
$_ADMINLANG['wbteampro']['error']['license_expired'] = 'שגיאת wbTeamPro: מפתח הרישיון פג תוקף';
$_ADMINLANG['wbteampro']['error']['license_suspended'] = 'שגיאת wbTeamPro: מפתח רישיון מושעה';
$_ADMINLANG['wbteampro']['error']['change_error'] = '<b>שגיאה בשמירת שינויים!</b><br/>השינויים שלך לא נשמרו.';
$_ADMINLANG['wbteampro']['error']['permissiondenied'] = 'הרשאה נדחתה';
$_ADMINLANG['wbteampro']['error']['invalidroleid'] = 'תפקיד מנהל המערכת שלך אינו רשאי לגשת wbTeamPro';
$_ADMINLANG['wbteampro']['error']['invalidrequest'] = 'בקשה לא חוקית / פורמט לא חוקי';
$_ADMINLANG['wbteampro']['error']['project_file_path_invalid'] = '<b>מיקום הקובץ אינו חוקי!</b><br>נתיב קובץ הפרויקט מוגדר הוא לא ספריה תקפה.';
$_ADMINLANG['wbteampro']['error']['project_file_path_locked'] = '<b>מיקום הקובץ אינו ניתן לכתיבה!</b><br>מיקום קובץ הפורייקט הוגדר כלא ניתן לכתיבה.';
$_ADMINLANG['wbteampro']['error']['plugin_loaderror'] = '<b>שגיאת Plugin</b><br>שגיאה בטעינת ה Plugin.';
$_ADMINLANG['wbteampro']['error']['keeping_project_type'] = 'סוג הפרויקט "%s" הינו בשימוש ואינו ניתן למחיקה';
$_ADMINLANG['wbteampro']['error']['keeping_project_status'] = 'סטאטוס הפרויקט "%s" הינו בשימוש ואינו ניתן למחיקה';
$_ADMINLANG['wbteampro']['error']['keeping_action_type'] = 'סוג הפעולה "%s" הינו בשימוש ואינו ניתן למחיקה';
$_ADMINLANG['wbteampro']['error']['keeping_action_status'] = 'סטאטוס הפעולה "%s" הינו בשימוש ואינו ניתן למחיקה';
$_ADMINLANG['wbteampro']['error']['record_notfound'] = 'רשומה לא נמצאה';
$_ADMINLANG['wbteampro']['error']['record_undefined'] = 'רשומה לא הוגדרה';
$_ADMINLANG['wbteampro']['error']['record_updatefailed'] = 'שגיאה בעדכון הרשומה (רשומות)';
$_ADMINLANG['wbteampro']['error']['record_incomplete'] = 'המידע הדרוש לא סופק';


/************************************** Alerts */
$_ADMINLANG['wbteampro']['alert']['default_label'] = 'הודעת אזהרה';
$_ADMINLANG['wbteampro']['alert']['project_created'] = '<b>פרויקט חדש נוצר</b><br>הפרויקט נוצר בהצלחה. כעת ניתן ליצור את עץ הפעולות.';
$_ADMINLANG['wbteampro']['alert']['change_success'] = '<b>שינויים נשמרו</b><br>השינויים אשר בוצעו על הרשומה נשמרו בהצלחה.';
$_ADMINLANG['wbteampro']['alert']['delete_success'] = '<b>רשומה נמחקה</b><br>הרשומה נמחקה בהצלחה.';
$_ADMINLANG['wbteampro']['alert']['close_success'] = '<b>רשומה נסגרה</b><br>הרשומה האחרונה נסגרה בהצלחה.';
$_ADMINLANG['wbteampro']['alert']['copy_success'] = '<b>העתקה בוצעה בהצלחה</b><br>הפרויקט הועתק בהצלחה.';


/************************************** Notices */
$_ADMINLANG['wbteampro']['notice']['default_label'] = 'הודעת התראה';
$_ADMINLANG['wbteampro']['notice']['superadmin'] = 'סופר מנהל';
$_ADMINLANG['wbteampro']['notice']['editing_templateproject'] = '<b>התראת תבנית</b><br>הינך כעת עורך את תבנית הפרויקט.';
$_ADMINLANG['wbteampro']['notice']['editing_archiveproject'] = '<b>התראת ארכיון</b><br>הינך כעת <u>צופה</u> בארכיון הפרויקט ואינך יכול לבצע שינויים.';
$_ADMINLANG['wbteampro']['notice']['server_timezone_na'] = '<b>זמן השרת לא הוגדר!</b><br>זמן השרת לא הוגדר כהלכה.';
$_ADMINLANG['wbteampro']['notice']['action_cancelled'] = '<b>פעולה בוטלה</b><br>ביטלת בהצלחה את הפעולה האחרונה.';
$_ADMINLANG['wbteampro']['notice']['plugin_installed'] = '<b>תוצאות הPlugin</b><br>%1$s Pluginים נמצאו, %2$s הותקנו, %3$s נכשלו.';
$_ADMINLANG['wbteampro']['notice']['file_closed'] = '<b>קובץ נסגר</b><br>אנא פתח קובץ זה על מנת לבצע שינויים.';
$_ADMINLANG['wbteampro']['notice']['topic_closed'] = '<b>נושא נסגר</b><br>אנא פתח נושא זה על מנת לבצע שינויים.';


/************************************** Graph */
$_ADMINLANG['wbteampro']['graph']['label_projectsummary'] = 'השוואה בין פעילויות הקובץ';
$_ADMINLANG['wbteampro']['graph']['label_timelogtwoyearsummary'] = 'מספר שעות ההתחברות';


/************************************** Menu */
$_ADMINLANG['wbteampro']['menu']['projectmanager'] = 'מנהל הפרויקט';
$_ADMINLANG['wbteampro']['menu']['tablabel'] = 'פרויקט';
$_ADMINLANG['wbteampro']['menu']['dashboard'] = 'לוח מכוונים';
$_ADMINLANG['wbteampro']['menu']['projects'] = 'פרויקטים';
$_ADMINLANG['wbteampro']['menu']['assignedprojects'] = 'פרויקטים שהוקצו';
$_ADMINLANG['wbteampro']['menu']['myprojects'] = 'הפרויקטים שלי';
$_ADMINLANG['wbteampro']['menu']['newproject'] = 'פרויקט חדש';
$_ADMINLANG['wbteampro']['menu']['actions'] = 'פעולות';
$_ADMINLANG['wbteampro']['menu']['incompletetasks'] = 'משימות שלא הושלמו';
$_ADMINLANG['wbteampro']['menu']['assignedtasks'] = 'משימות שהוקצו';
$_ADMINLANG['wbteampro']['menu']['myactions'] = 'הפעולות שלי';
$_ADMINLANG['wbteampro']['menu']['files'] = 'קבצים';
$_ADMINLANG['wbteampro']['menu']['myfiles'] = 'הקבצים שלי';
$_ADMINLANG['wbteampro']['menu']['discussions'] = 'דיונים';
$_ADMINLANG['wbteampro']['menu']['mydiscussions'] = 'הדיונים שלי';
$_ADMINLANG['wbteampro']['menu']['tickets'] = 'פניות';
$_ADMINLANG['wbteampro']['menu']['mytickets'] = 'פניות שלי';
$_ADMINLANG['wbteampro']['menu']['timelog'] = 'תיעוד זמנים';
$_ADMINLANG['wbteampro']['menu']['mytimelog'] = 'תיעוד זמנים שלי';
$_ADMINLANG['wbteampro']['menu']['setupmanager'] = 'מנהל מערכת';
$_ADMINLANG['wbteampro']['menu']['archivedprojects'] = 'ארכיון פרויקטים';
$_ADMINLANG['wbteampro']['menu']['templateprojects'] = 'תבניות פרויקט';
$_ADMINLANG['wbteampro']['menu']['setup_config'] = 'קונפיגורציה';
$_ADMINLANG['wbteampro']['menu']['setup_plugins'] = 'נהל תוספים';
$_ADMINLANG['wbteampro']['menu']['support'] = 'עזרה ותמיכה';


/************************************** JS */
$_ADMINLANG['wbteampro']['js']['tabProject'] = 'פרויקט';
$_ADMINLANG['wbteampro']['js']['tabProjects'] = 'פרויקטים';
$_ADMINLANG['wbteampro']['js']['tabTickets'] = 'כרטיסים';
$_ADMINLANG['wbteampro']['js']['loadMsg'] = 'טוען.. אנא המתן...';
$_ADMINLANG['wbteampro']['js']['noActiveLogs'] = 'אין נתונים עדכניים';
$_ADMINLANG['wbteampro']['js']['reqComplete'] = 'בקשה הושלמה';
$_ADMINLANG['wbteampro']['js']['uiTimelogStart'] = 'התחל';
$_ADMINLANG['wbteampro']['js']['uiTimelogSave'] = 'שמור';
$_ADMINLANG['wbteampro']['js']['uiTimelogCancel'] = 'בטל';
$_ADMINLANG['wbteampro']['js']['uiTicketCreate'] = 'צור';
$_ADMINLANG['wbteampro']['js']['uiTicketCreateOpen'] = 'צור ופתח';
$_ADMINLANG['wbteampro']['js']['uiTicketCancel'] = 'בטל';
$_ADMINLANG['wbteampro']['js']['btnStartTimer'] = 'פתח תוך';
$_ADMINLANG['wbteampro']['js']['btnStopTimer'] = 'עצור תוך';
$_ADMINLANG['wbteampro']['js']['msgTimelogSaved'] = 'זמן נשמר [time]';
$_ADMINLANG['wbteampro']['js']['msgTimelogStopped'] = 'זמן נשמר לאחר [time]';
$_ADMINLANG['wbteampro']['js']['deleteConfirm'] = 'בחר OK על מנת לאמת את השינויים';
$_ADMINLANG['wbteampro']['js']['deletePrompt'] = 'הקלד מחיקה על מנת לאמת את פעולתך';
$_ADMINLANG['wbteampro']['js']['deleteAnswer'] = 'מחיקה';
$_ADMINLANG['wbteampro']['js']['deleteCancelled'] = 'מחיקה בוטלה';
$_ADMINLANG['wbteampro']['js']['textLimitRemain'] = '[remain] מ [limit] תווים נותרו';
$_ADMINLANG['wbteampro']['js']['textLimitReached'] = 'מגבלת [limit] תווים כוסתה';
$_ADMINLANG['wbteampro']['js']['copyPrompt'] = 'הקלד העתקה על מנת לאמת את פעולתך';
$_ADMINLANG['wbteampro']['js']['copyAnswer'] = 'העתקה';
$_ADMINLANG['wbteampro']['js']['copyCancelled'] = 'העתקה בוטלה';
$_ADMINLANG['wbteampro']['js']['ajaxSearchInput'] = 'הקלד לחיפוש..';
$_ADMINLANG['wbteampro']['js']['rowSelectEmpty'] = 'אנא בחר שורה (שורות) לניהול';
$_ADMINLANG['wbteampro']['js']['rowSelectConfirm'] = 'בחר OK על מנת לאמת את השינויים';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCreate'] = 'צור / עדכן קבלה';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCancel'] = 'בטל';
$_ADMINLANG['wbteampro']['js']['uiInvoiceNoItems'] = 'אין פריטים עבור קבלה';
$_ADMINLANG['wbteampro']['js']['uiInvoiceSuccess'] = 'קובץ הזמנים עבור הקבלה (קבלות) נוצר בהצלחה';
$_ADMINLANG['wbteampro']['js']['uiModifyAccept'] = 'שמור שינויים';
$_ADMINLANG['wbteampro']['js']['uiModifyCancel'] = 'ביטול';


/************************************** Page Headers */
$_ADMINLANG['wbteampro']['taskheader']['prefix'] = 'wbTeamPro: ';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_archive'] = ' [ARCHIVE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_template'] = ' [TEMPLATE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_new'] = 'פרויקט חדש';
$_ADMINLANG['wbteampro']['taskheader']['project_action_list'] = 'פעולות הפרויקט';
$_ADMINLANG['wbteampro']['taskheader']['project_ticket_list'] = 'כרטיסי הפרויקט';
$_ADMINLANG['wbteampro']['taskheader']['project_file_list'] = 'קבצי הפרויקט';
$_ADMINLANG['wbteampro']['taskheader']['project_topic_list'] = 'נושאי הפרויקט';
$_ADMINLANG['wbteampro']['taskheader']['project_list'] = 'כל הפרויקטים';
$_ADMINLANG['wbteampro']['taskheader']['action_list'] = 'כל פעולות הפרויקטים';
$_ADMINLANG['wbteampro']['taskheader']['file_list'] = 'כל קבצי הפרויקטים';
$_ADMINLANG['wbteampro']['taskheader']['topic_list'] = 'כל נושאי הפרויקטים';
$_ADMINLANG['wbteampro']['taskheader']['ticket_list'] = 'כל כרטיסי הפרויקטים';
$_ADMINLANG['wbteampro']['taskheader']['timelog_list'] = 'כל קבצי הזמנים של הפרויקטים';
$_ADMINLANG['wbteampro']['taskheader']['template_list'] = 'כל התבניות';
$_ADMINLANG['wbteampro']['taskheader']['archive_list'] = 'כל הארכיונים';


/************************************** Client Profile Tabs */
$_ADMINLANG['wbteampro']['profiletab']['projects'] = 'פרויקטים';
$_ADMINLANG['wbteampro']['profiletab']['actions'] = 'פעולות';
$_ADMINLANG['wbteampro']['profiletab']['files'] = 'קבצים';
$_ADMINLANG['wbteampro']['profiletab']['topics'] = 'נושאים';
$_ADMINLANG['wbteampro']['profiletab']['timelog'] = 'קבצי זמן';
$_ADMINLANG['wbteampro']['profiletab']['tickets'] = 'כרטיסים';


/************************************** Project Tabs */
$_ADMINLANG['wbteampro']['projecttab']['details'] = 'פרטים';
$_ADMINLANG['wbteampro']['projecttab']['actions'] = 'פעולות';
$_ADMINLANG['wbteampro']['projecttab']['tickets'] = 'כרטיסים';
$_ADMINLANG['wbteampro']['projecttab']['files'] = 'קבצים';
$_ADMINLANG['wbteampro']['projecttab']['filesview'] = 'צפייה בקובץ';
$_ADMINLANG['wbteampro']['projecttab']['topics'] = 'נושאים';
$_ADMINLANG['wbteampro']['projecttab']['topicsview'] = 'צפייה בנושאים';
$_ADMINLANG['wbteampro']['projecttab']['timelog'] = 'קבצי זמן';


/************************************** Admin Visibility */
$_ADMINLANG['wbteampro']['adminvisible']['all'] = 'הכל';
$_ADMINLANG['wbteampro']['adminvisible']['manager'] = 'מנהל בלבד';
$_ADMINLANG['wbteampro']['adminvisible']['related'] = 'מנהל ומשתמש מורשה';


/************************************** Client Visibility */
$_ADMINLANG['wbteampro']['clientvisible']['hidden'] = 'חבוי';
$_ADMINLANG['wbteampro']['clientvisible']['visible'] = 'גלוי';
$_ADMINLANG['wbteampro']['clientvisible']['view'] = 'צפה';
$_ADMINLANG['wbteampro']['clientvisible']['modify'] = 'ערוך';
$_ADMINLANG['wbteampro']['clientvisible']['inherit'] = 'הורש';


/************************************** Project Functions */
$_ADMINLANG['wbteampro']['projectfunction']['default'] = 'ברירת מחדל';
$_ADMINLANG['wbteampro']['projectfunction']['template'] = 'תבנית';
$_ADMINLANG['wbteampro']['projectfunction']['archive'] = 'ארכיון';


/************************************** Project Fields */
$_ADMINLANG['wbteampro']['projectsave']['newActionLabel'] = 'הגדר את הפרויקט';
$_ADMINLANG['wbteampro']['projectlist']['newproject'] = 'פרויקט חדש';
$_ADMINLANG['wbteampro']['projectlist']['newtemplate'] = 'תבנית חדשה';
$_ADMINLANG['wbteampro']['projectfield']['name'] = 'שם הפרויקט';
$_ADMINLANG['wbteampro']['projectfield']['client'] = 'לקוח';
$_ADMINLANG['wbteampro']['projectfield']['type'] = 'סוג';
$_ADMINLANG['wbteampro']['projectfield']['contact'] = 'פרטי קשר של לקוח';
$_ADMINLANG['wbteampro']['projectfield']['status'] = 'סטאטוס';
$_ADMINLANG['wbteampro']['projectfield']['managedby'] = 'נוהל על ידי';
$_ADMINLANG['wbteampro']['projectfield']['visiblestatus'] = 'גישת מנהל';
$_ADMINLANG['wbteampro']['projectfield']['assignedto'] = 'מוקצה ל';
$_ADMINLANG['wbteampro']['projectfield']['datestart'] = 'תאריך התחלה';
$_ADMINLANG['wbteampro']['projectfield']['datefinish'] = 'תאריך סיום';
$_ADMINLANG['wbteampro']['projectfield']['details'] = 'הערות / פרטים';
$_ADMINLANG['wbteampro']['projectfield']['created'] = 'נוצר';
$_ADMINLANG['wbteampro']['projectfield']['activity'] = 'פעילות';
$_ADMINLANG['wbteampro']['projectfield']['modified'] = 'נערך';
$_ADMINLANG['wbteampro']['projectfield']['completed'] = 'הסתיים';
$_ADMINLANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s מ %2$s פעולות, %3$s ציון דרך, %4$s קבוצה, %5$s משימה, זמן חלף: %6$s';
$_ADMINLANG['wbteampro']['projectfield']['namecopysprint'] = '*העתק* %s';
$_ADMINLANG['wbteampro']['projectfield']['notes'] = 'הערות אישיות';
$_ADMINLANG['wbteampro']['projectfield']['clientvisible'] = 'גישת לקוח';
$_ADMINLANG['wbteampro']['projectfield']['function'] = 'פעולה';


/************************************** Copy Fields */
$_ADMINLANG['wbteampro']['copyform']['option_setup'] = 'אפשרויות העתקת פרויקט';
$_ADMINLANG['wbteampro']['copyform']['project_setup'] = 'הגדרות פרויקט חדש';
$_ADMINLANG['wbteampro']['copyfield']['newname'] = 'שם הפרויקט החדש';
$_ADMINLANG['wbteampro']['copyfield']['copy_template'] = 'שמור כתבנית';
$_ADMINLANG['wbteampro']['copyfield']['copy_actions'] = 'העתק פעולות';
$_ADMINLANG['wbteampro']['copyfield']['copy_files'] = 'העתק קבצים';
$_ADMINLANG['wbteampro']['copyfield']['copy_topics'] = 'העתק נושאים';
$_ADMINLANG['wbteampro']['copyfield']['copy_tickets'] = 'העתק יחסים עבור כרטיס';
$_ADMINLANG['wbteampro']['copyfield']['copy_timelogs'] = 'העתק קובץ זמן';


/************************************** File Fields */
$_ADMINLANG['wbteampro']['filelist']['newthread'] = 'נושא חדש';
$_ADMINLANG['wbteampro']['filelist']['deletethread'] = 'מחק נושא';
$_ADMINLANG['wbteampro']['filelist']['clientaccess'] = 'גישת לקוח';
$_ADMINLANG['wbteampro']['filelist']['toggleaccess'] = 'גישת אפשור';
$_ADMINLANG['wbteampro']['filelist']['by'] = 'על ידי';
$_ADMINLANG['wbteampro']['filelist']['on'] = 'ב';
$_ADMINLANG['wbteampro']['filefield']['label'] = 'תווית';
$_ADMINLANG['wbteampro']['filefield']['version'] = 'גרסה';
$_ADMINLANG['wbteampro']['filefield']['file'] = 'קובץ';
$_ADMINLANG['wbteampro']['filefield']['mime'] = 'חיקוי';
$_ADMINLANG['wbteampro']['filefield']['size'] = 'גודל';
$_ADMINLANG['wbteampro']['filefield']['detail'] = 'פרטים';
$_ADMINLANG['wbteampro']['filefield']['upload'] = 'העלה';
$_ADMINLANG['wbteampro']['filelist']['status'] = 'סטאטוס';
$_ADMINLANG['wbteampro']['filelist']['status_open'] = 'פתוח';
$_ADMINLANG['wbteampro']['filelist']['status_closed'] = 'סגור';
$_ADMINLANG['wbteampro']['filelist']['expanddetail'] = 'הרחב';
$_ADMINLANG['wbteampro']['filelist']['count'] = '%s קבצים';


/************************************** Ticket Fields */
$_ADMINLANG['wbteampro']['ticketlist']['linkticket'] = 'קישור';
$_ADMINLANG['wbteampro']['ticketlist']['newticket'] = 'כרטיס חדש';
$_ADMINLANG['wbteampro']['ticketfield']['project'] = 'פרויקט';
$_ADMINLANG['wbteampro']['ticketfield']['action'] = 'פעולה';


/************************************** Topic Fields */
$_ADMINLANG['wbteampro']['topiclist']['newthread'] = 'נושא חדש';
$_ADMINLANG['wbteampro']['topiclist']['deletethread'] = 'מחק נושא';
$_ADMINLANG['wbteampro']['topiclist']['clientaccess'] = 'גישת לקוח';
$_ADMINLANG['wbteampro']['topiclist']['toggleaccess'] = 'גישת אפשור';
$_ADMINLANG['wbteampro']['topiclist']['by'] = 'על ידי';
$_ADMINLANG['wbteampro']['topiclist']['on'] = 'ב';
$_ADMINLANG['wbteampro']['topicfield']['title'] = 'כותרת';
$_ADMINLANG['wbteampro']['topicfield']['detail'] = 'פרטים';
$_ADMINLANG['wbteampro']['topiclist']['status'] = 'סטאטוס';
$_ADMINLANG['wbteampro']['topiclist']['status_open'] = 'פתוח';
$_ADMINLANG['wbteampro']['topiclist']['status_closed'] = 'סגור';
$_ADMINLANG['wbteampro']['topiclist']['expanddetail'] = 'הרחב';
$_ADMINLANG['wbteampro']['topiclist']['count'] = '%s נושאים';
$_ADMINLANG['wbteampro']['topiclist']['created'] = 'נוצר ב %s';


/************************************** Action Fields */
$_ADMINLANG['wbteampro']['actionlist']['dispmode'] = 'מצב תצוגה:';
$_ADMINLANG['wbteampro']['actionlist']['listview'] = 'הצג כרשימה';
$_ADMINLANG['wbteampro']['actionlist']['treeview'] = 'הצג כעץ';
$_ADMINLANG['wbteampro']['actionlist']['ganttview'] = 'הצג כגרף';
$_ADMINLANG['wbteampro']['actionlist']['listcollapse'] = 'צמצם פריטים';
$_ADMINLANG['wbteampro']['actionlist']['listexpand'] = 'הרחב פריטים';
$_ADMINLANG['wbteampro']['actionlist']['newaction'] = 'פעולה חדשה';
$_ADMINLANG['wbteampro']['actionlist']['addchild'] = 'הוסף ילד';
$_ADMINLANG['wbteampro']['actionlist']['stoptimer'] = 'עצור טיימר';
$_ADMINLANG['wbteampro']['actionlist']['starttimer'] = 'התחל טיימר';
$_ADMINLANG['wbteampro']['actionlist']['viewlog'] = 'הראה רשומות';
$_ADMINLANG['wbteampro']['actionlist']['delete'] = 'מחק';
$_ADMINLANG['wbteampro']['actionlist']['totalcomplete'] = 'פרויקט הסתיים';
$_ADMINLANG['wbteampro']['actionlist']['totalelapsed'] = 'סך הכל נשאר';
$_ADMINLANG['wbteampro']['actionlist']['client_access'] = 'גישת לקוח';
$_ADMINLANG['wbteampro']['actionfield']['name'] = 'שם';
$_ADMINLANG['wbteampro']['actionfield']['complete'] = '% הושלם';
$_ADMINLANG['wbteampro']['actionfield']['type'] = 'סוג';
$_ADMINLANG['wbteampro']['actionfield']['datestart'] = 'תאריך התחלה';
$_ADMINLANG['wbteampro']['actionfield']['status'] = 'סטאטוס';
$_ADMINLANG['wbteampro']['actionfield']['datefinish'] = 'תאריך סיום';
$_ADMINLANG['wbteampro']['actionfield']['client'] = 'לקוח';
$_ADMINLANG['wbteampro']['actionfield']['managedby'] = 'מנוהל על ידי';
$_ADMINLANG['wbteampro']['actionfield']['maincontact'] = 'איש קשר ראשי';
$_ADMINLANG['wbteampro']['actionfield']['assignedto'] = 'משוייך ל';
$_ADMINLANG['wbteampro']['actionfield']['detail'] = 'הערות / פרטים';
$_ADMINLANG['wbteampro']['actionfield']['created'] = 'נוצר';
$_ADMINLANG['wbteampro']['actionfield']['activity'] = 'פעילות';
$_ADMINLANG['wbteampro']['actionfield']['modified'] = 'נערך';
$_ADMINLANG['wbteampro']['actionfield']['parentaction'] = 'פעולת אב';
$_ADMINLANG['wbteampro']['actionfield']['clientvisible'] = 'פעולת לקוח';
$_ADMINLANG['wbteampro']['actionfield']['notes'] = 'פתקים אישיים';
$_ADMINLANG['wbteampro']['actionfield']['priority'] = 'עדיפות';
$_ADMINLANG['wbteampro']['actionfield']['billable'] = 'זמן לחשבון';


/************************************** Timelog Fields */
$_ADMINLANG['wbteampro']['timeloglist']['totalelapsed'] = 'סך הכל נשאר';
$_ADMINLANG['wbteampro']['timeloglist']['by'] = 'על ידי';
$_ADMINLANG['wbteampro']['timelogfield']['note'] = 'הערה';
$_ADMINLANG['wbteampro']['timelogfield']['datestart'] = 'זמן התחלה';
$_ADMINLANG['wbteampro']['timelogfield']['datestop'] = 'זמן סיום';
$_ADMINLANG['wbteampro']['timelogfield']['owner'] = 'בעלים';
$_ADMINLANG['wbteampro']['timelogfield']['elapsed'] = 'זמן שנשאר';
$_ADMINLANG['wbteampro']['timelogfield']['billable'] = 'זמן לחשבון';
$_ADMINLANG['wbteampro']['timelogfield']['invoice'] = 'קבלה #';


/************************************** Timelog */
$_ADMINLANG['wbteampro']['timelog']['emptynote'] = '~';
$_ADMINLANG['wbteampro']['timelog']['status']['active'] = 'פעיל';
$_ADMINLANG['wbteampro']['timelog']['status']['complete'] = 'הושלם';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['all'] = 'כל הזמן נשמר';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['my'] = 'הזמן שלי נשמר';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['milestone'] = 'ציון דרך';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['group'] = 'קבוצה';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['task'] = 'מטלה';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['ticket'] = 'כרטיס תמיכה';


/************************************** Timelog Modal */
$_ADMINLANG['wbteampro']['timelog']['modal']['title'] = 'התחל קובץ זמן חדש';
$_ADMINLANG['wbteampro']['timelog']['modal']['event'] = 'הקלד תקציר האירוע';
$_ADMINLANG['wbteampro']['timelog']['modal']['manual'] = 'ציין משך זמן ושמור';
$_ADMINLANG['wbteampro']['timelog']['modal']['start'] = 'התחל';
$_ADMINLANG['wbteampro']['timelog']['modal']['duration'] = 'משך זמן';
$_ADMINLANG['wbteampro']['timelog']['modal']['durexample'] = 'לדוגמא: 2 שעות, 5 דקות, 10 שניות';
$_ADMINLANG['wbteampro']['timelog']['modal']['owner'] = 'בעלים';
$_ADMINLANG['wbteampro']['timelog']['modal']['billable'] = 'האם ינתן זמן לחשבון?';


/************************************** Invoice Modal */
$_ADMINLANG['wbteampro']['invoice']['modal']['title'] = 'צור קבלה חדשה';
$_ADMINLANG['wbteampro']['invoice']['modal']['date'] = 'תאריך קבלה';
$_ADMINLANG['wbteampro']['invoice']['modal']['duedate'] = 'תאריך יעד';
$_ADMINLANG['wbteampro']['invoice']['modal']['taxrate'] = 'שעור מס';
$_ADMINLANG['wbteampro']['invoice']['modal']['applytax'] = 'שמור מס';
$_ADMINLANG['wbteampro']['invoice']['modal']['paymentmethod'] = 'אופן תשלום';
$_ADMINLANG['wbteampro']['invoice']['modal']['sendinvoice'] = 'שלח קבלה';
$_ADMINLANG['wbteampro']['invoice']['modal']['autoapplycredit'] = 'שמור קרדיט';
$_ADMINLANG['wbteampro']['invoice']['modal']['rate'] = 'תעריף לשעה';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoiceid'] = 'הוסף למספר הקבלה';


/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifyactions']['modal']['title'] = 'ערוך מספר פעולות';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-apply'] = 'שמור';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-option'] = 'אפשרות';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-value'] = 'ערך';


/************************************** Confirm Modal */
$_ADMINLANG['wbteampro']['confirm']['modal']['title'] = 'אשר פעולה';
$_ADMINLANG['wbteampro']['confirm']['modal']['delete'] = 'הקלד מחיקה על מנת לאשר פעולה';


/************************************** Ticket Modal */
$_ADMINLANG['wbteampro']['ticket']['modal']['title'] = 'פתח כרטיס תמיכה חדש';
$_ADMINLANG['wbteampro']['ticket']['modal']['client'] = 'לקוח';
$_ADMINLANG['wbteampro']['ticket']['modal']['project'] = 'פרויקט';
$_ADMINLANG['wbteampro']['ticket']['modal']['deptid'] = 'מחלקה';
$_ADMINLANG['wbteampro']['ticket']['modal']['priority'] = 'עדיפות';
$_ADMINLANG['wbteampro']['ticket']['modal']['subject'] = 'נושא';
$_ADMINLANG['wbteampro']['ticket']['modal']['message'] = 'הודעה';
$_ADMINLANG['wbteampro']['ticket']['modal']['nodept'] = 'לא נמצאו הרשאות מחלקה';
$_ADMINLANG['wbteampro']['ticket']['modal']['sendemail'] = 'שלח אימייל';


/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['filter']['tablabel'] = $_ADMINLANG['global']['searchfilter'];
$_ADMINLANG['wbteampro']['filter']['any'] = $_ADMINLANG['global']['any'];
$_ADMINLANG['wbteampro']['filter']['none'] = $_ADMINLANG['global']['none'];
$_ADMINLANG['wbteampro']['filter']['checkall'] = 'סמן';
$_ADMINLANG['wbteampro']['filter']['uncheckall'] = 'בטל סימון';
$_ADMINLANG['wbteampro']['filter']['selectedtext'] = '# נבחרו';
$_ADMINLANG['wbteampro']['filter']['search'] = 'חיפוש';
$_ADMINLANG['wbteampro']['filter']['owner'] = 'בעלים';
$_ADMINLANG['wbteampro']['filter']['admin'] = 'מנהל';
$_ADMINLANG['wbteampro']['filter']['project'] = 'פרויקט';
$_ADMINLANG['wbteampro']['filter']['action'] = 'פעולה';
$_ADMINLANG['wbteampro']['filter']['status'] = 'סטאטוס';
$_ADMINLANG['wbteampro']['filter']['client'] = 'לקוח';
$_ADMINLANG['wbteampro']['filter']['department'] = 'מחלקה';
$_ADMINLANG['wbteampro']['filter']['manager'] = 'מנהל';
$_ADMINLANG['wbteampro']['filter']['assigned'] = 'משוייך';
$_ADMINLANG['wbteampro']['filter']['type'] = 'סוג';
$_ADMINLANG['wbteampro']['filter']['level'] = 'רמה';
$_ADMINLANG['wbteampro']['filter']['flagged'] = 'מסומן';
$_ADMINLANG['wbteampro']['filter']['rangestart'] = 'התחיל אחרי';
$_ADMINLANG['wbteampro']['filter']['rangestop'] = 'התחיל לפני';
$_ADMINLANG['wbteampro']['filter']['percentage'] = '% הושלם';
$_ADMINLANG['wbteampro']['filter']['root'] = 'רמת השורש';
$_ADMINLANG['wbteampro']['filter']['zone'] = 'איזור';
$_ADMINLANG['wbteampro']['filter']['priority'] = 'עדיפות';


/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['pagenav']['report'] = '%s '.$_ADMINLANG['global']['recordsfound'].', '.$_ADMINLANG['global']['page'].' %s '.$_ADMINLANG['global']['of'].'%s';
$_ADMINLANG['wbteampro']['pagenav']['prev'] = $_ADMINLANG['global']['previouspage'];
$_ADMINLANG['wbteampro']['pagenav']['next'] = $_ADMINLANG['global']['nextpage'];
$_ADMINLANG['wbteampro']['pagenav']['empty'] = $_ADMINLANG['global']['norecordsfound'];
$_ADMINLANG['wbteampro']['pagenav']['jumpto'] = $_ADMINLANG['global']['jumppage'];
$_ADMINLANG['wbteampro']['pagenav']['limit'] = 'הגבלה';
$_ADMINLANG['wbteampro']['pagenav']['go'] = $_ADMINLANG['global']['go'];
$_ADMINLANG['wbteampro']['pagenav']['export'] = 'יצוא';
$_ADMINLANG['wbteampro']['pagenav']['print'] = 'הדפסה';


/************************************** Form Button Labels */
$_ADMINLANG['wbteampro']['formnav']['edit'] = 'עריכה';
$_ADMINLANG['wbteampro']['formnav']['copy'] = 'העתקה';
$_ADMINLANG['wbteampro']['formnav']['copy_template'] = 'צור פרויקט';
$_ADMINLANG['wbteampro']['formnav']['archive'] = 'ארכיון';
$_ADMINLANG['wbteampro']['formnav']['unarchive'] = 'הוצא מארכיון';
$_ADMINLANG['wbteampro']['formnav']['save'] = 'שמור';
$_ADMINLANG['wbteampro']['formnav']['apply'] = 'החל';
$_ADMINLANG['wbteampro']['formnav']['close'] = 'סגור';
$_ADMINLANG['wbteampro']['formnav']['cancel'] = 'בטל';
$_ADMINLANG['wbteampro']['formnav']['delete'] = 'מחק';
$_ADMINLANG['wbteampro']['formnav']['download'] = 'הורד';
$_ADMINLANG['wbteampro']['formnav']['timestart'] = 'טיימר התחלה';
$_ADMINLANG['wbteampro']['formnav']['timestop'] = 'טיימר סיום';
$_ADMINLANG['wbteampro']['formnav']['submit'] = 'שלח';
$_ADMINLANG['wbteampro']['formnav']['invoice'] = 'קבלה';
$_ADMINLANG['wbteampro']['formnav']['reload'] = 'טען מחדש';
$_ADMINLANG['wbteampro']['formnav']['link'] = 'קישור';
$_ADMINLANG['wbteampro']['formnav']['unlink'] = 'בטל קישור';


/************************************** Dashboard Blocks */
$_ADMINLANG['wbteampro']['dashhead']['topProjects'] = 'פרויקטים עם פעילות אחרונה';
$_ADMINLANG['wbteampro']['dashhead']['topActions'] = 'פעולות מדורגות';
$_ADMINLANG['wbteampro']['dashhead']['myActions'] = 'משימות המשוייכות אליך';
$_ADMINLANG['wbteampro']['dashhead']['topTimelog'] = 'פעילות זמנים אחרונה';
$_ADMINLANG['wbteampro']['dashhead']['topTickets'] = 'פעילות כרטיסים אחרונה';
$_ADMINLANG['wbteampro']['dashhead']['topTopics'] = 'פעילות נושאים אחרונה';
$_ADMINLANG['wbteampro']['dashhead']['topFiles'] = 'פעילות קבצים אחרונה';
$_ADMINLANG['wbteampro']['dashhead']['viewall'] = 'צפה בכולם';


/************************************** List Table Headers */
$_ADMINLANG['wbteampro']['listhead']['ordering'] = 'סידור';
$_ADMINLANG['wbteampro']['listhead']['enabled'] = 'מאופשר';


$_ADMINLANG['wbteampro']['listhead']['date_created'] = 'נוצר';
$_ADMINLANG['wbteampro']['listhead']['date_modified'] = 'נערך';
$_ADMINLANG['wbteampro']['listhead']['date_activity'] = 'פעילות';
$_ADMINLANG['wbteampro']['listhead']['date_start'] = 'תאריך התחלה';
$_ADMINLANG['wbteampro']['listhead']['date_finish'] = 'תאריך סיום';


$_ADMINLANG['wbteampro']['listhead']['client_userid'] = 'לקוח';
$_ADMINLANG['wbteampro']['listhead']['owner_adminid'] = 'בעלים';
$_ADMINLANG['wbteampro']['listhead']['manager_adminid'] = 'מנהל';
$_ADMINLANG['wbteampro']['listhead']['assigned_adminid'] = 'משוייך';


$_ADMINLANG['wbteampro']['listhead']['invoice_id'] = 'קבלה';


/************************************** Project List */
$_ADMINLANG['wbteampro']['listhead']['project_name'] = 'שם הפרויקט';
$_ADMINLANG['wbteampro']['listhead']['project_type'] = 'סוג';
$_ADMINLANG['wbteampro']['listhead']['project_status'] = 'סטאטוס';
$_ADMINLANG['wbteampro']['listhead']['project_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['project_tasks'] = '#';


/************************************** Action List */
$_ADMINLANG['wbteampro']['listhead']['action_name'] = 'שם פעולה';
$_ADMINLANG['wbteampro']['listhead']['action_type'] = 'סוג';
$_ADMINLANG['wbteampro']['listhead']['action_status'] = 'סטאטוס';
$_ADMINLANG['wbteampro']['listhead']['action_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['action_elapsed'] = 'נשאר';
$_ADMINLANG['wbteampro']['listhead']['action_priority'] = 'עדיפות';


/************************************** Timelog List */
$_ADMINLANG['wbteampro']['listhead']['timelog_note'] = 'הערת זמנים';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed'] = 'נשאר';
$_ADMINLANG['wbteampro']['listhead']['timelog_start'] = 'החל';
$_ADMINLANG['wbteampro']['listhead']['timelog_status'] = 'סטאטוס';


/************************************** Topic List */
$_ADMINLANG['wbteampro']['listhead']['topic_name'] = 'שם נושא';
$_ADMINLANG['wbteampro']['listhead']['topic_activity'] = 'פעילות';
$_ADMINLANG['wbteampro']['listhead']['topic_posts'] = 'פוסטים';
$_ADMINLANG['wbteampro']['listhead']['topic_status'] = 'סטאטוס';


/************************************** Ticket List */
$_ADMINLANG['wbteampro']['listhead']['ticket_title'] = 'שם כרטיס';
$_ADMINLANG['wbteampro']['listhead']['ticket_lastreply'] = 'פעילות';
$_ADMINLANG['wbteampro']['listhead']['ticket_date'] = 'נשלח';
$_ADMINLANG['wbteampro']['listhead']['ticket_urgency'] = 'דחיפות';
$_ADMINLANG['wbteampro']['listhead']['ticket_submitter'] = 'שולח';
$_ADMINLANG['wbteampro']['listhead']['ticket_department'] = 'מחלקה';
$_ADMINLANG['wbteampro']['listhead']['ticket_status'] = 'סטאטוס';


/************************************** File List */
$_ADMINLANG['wbteampro']['listhead']['file_label'] = 'נושא קובץ';
$_ADMINLANG['wbteampro']['listhead']['file_latest'] = 'קובץ אחרון';
$_ADMINLANG['wbteampro']['listhead']['file_total'] = 'קבצים';
$_ADMINLANG['wbteampro']['listhead']['file_status'] = 'סטאטוס';


/************************************** Plugin List */
$_ADMINLANG['wbteampro']['listhead']['plugin_name'] = 'שם Plugin';
$_ADMINLANG['wbteampro']['listhead']['plugin_zone'] = 'אזור';
$_ADMINLANG['wbteampro']['listhead']['plugin_element'] = 'איבר';


/************************************** Module List
$_ADMINLANG['wbteampro']['listhead']['module_name'] = 'שם מודול';
$_ADMINLANG['wbteampro']['listhead']['module_element'] = 'איבר';
$_ADMINLANG['wbteampro']['listhead']['module_position'] = 'מיקום';
 */


/************************************** Select List Options */
$_ADMINLANG['wbteampro']['listoption']['yes'] = 'כן';
$_ADMINLANG['wbteampro']['listoption']['no'] = 'לא';
$_ADMINLANG['wbteampro']['listoption']['blank'] = 'חלון חדש';
$_ADMINLANG['wbteampro']['listoption']['self'] = 'אותו חלון';
$_ADMINLANG['wbteampro']['listoption']['top'] = 'חלון עליון';
$_ADMINLANG['wbteampro']['listoption']['parent'] = 'חלון אב';
$_ADMINLANG['wbteampro']['listoption']['none'] = 'ללא אישור';
$_ADMINLANG['wbteampro']['listoption']['prompt'] = 'הקלד לאישור';
$_ADMINLANG['wbteampro']['listoption']['confirm'] = 'לחץ OK לאישור';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['1'] = 'נמוך';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['2'] = 'רגיל';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['3'] = 'גבוה';
$_ADMINLANG['wbteampro']['listoption']['level_class']['milestone'] = 'ציון דרך';
$_ADMINLANG['wbteampro']['listoption']['level_class']['group'] = 'קבוצה';
$_ADMINLANG['wbteampro']['listoption']['level_class']['task'] = 'משימה';


/************************************** Setup Tabs */
$_ADMINLANG['wbteampro']['setuptab']['general'] = 'כללי';
$_ADMINLANG['wbteampro']['setuptab']['project'] = 'פרויקט';
$_ADMINLANG['wbteampro']['setuptab']['action'] = 'פעולה';
$_ADMINLANG['wbteampro']['setuptab']['display'] = 'הצגה';
$_ADMINLANG['wbteampro']['setuptab']['extensions'] = 'סיומות';


/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configfield']['version'] = 'גרסה';


$_ADMINLANG['wbteampro']['configfield']['license_key'] = 'מפתח רישיון';
$_ADMINLANG['wbteampro']['configfield']['license_key-help'] = 'מפתח הרישיון הינו דרוש לאימות.';
$_ADMINLANG['wbteampro']['configfield']['license_key-rekey'] = 'הקלד מחדש את המפתח';
$_ADMINLANG['wbteampro']['configfield']['license_key-confirm'] = 'פעולה זו תמחק את מפתח הרישיון הנוחכי.\nבחר OK על מנת להמשיך';
$_ADMINLANG['wbteampro']['configfield']['project_file_path'] = 'מיקום הפרוייקט';
$_ADMINLANG['wbteampro']['configfield']['project_file_path-help'] = 'מיקום ישיר או כללי למקום הימצאותו של הפרויקט';


$_ADMINLANG['wbteampro']['configfield']['admin_super_roles'] = 'תפקידי סופר אדמין';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles-help'] = 'יכול לצפות ולערוך הכל';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles'] = 'תפקידים תקינים';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles-help'] = 'יכול לצפות ולערוך במידה והינו בעלים / משוייך';


$_ADMINLANG['wbteampro']['configfield']['project_link_target'] = 'מיקום קישור הפרויקט';
$_ADMINLANG['wbteampro']['configfield']['project_link_target-help'] = 'ברירת מחדש: חלון חדש';
$_ADMINLANG['wbteampro']['configfield']['project_link_task'] = 'תצוגת ברירת המחדל';
$_ADMINLANG['wbteampro']['configfield']['project_link_task-help'] = 'הכרטיסיה הראשונה עם פתיחת החלון';
$_ADMINLANG['wbteampro']['configfield']['client_link_target'] = 'מיקום קישור הלקוח';
$_ADMINLANG['wbteampro']['configfield']['client_link_target-help'] = 'ברירת מחדל: חלון חדש';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target'] = 'מיקום קישור הכרטיס';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target-help'] = 'ברירת מחדש: חלון חדש';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit'] = 'הגבלת מספר עמודים';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit-help'] = 'מספר רשומות להראות בכל עמוד';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit'] = 'הגבלת מספר נושאים';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit-help'] = 'מספר פוסטים להראות בכל עמוד';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension'] = 'אשכול בגודל מוקטן';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension-help'] = 'גודל התמונה המוקטנת אשר נראת באשכולות';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse'] = 'קיבוץ תוכן הנושא';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse-help'] = 'תוכן ארוך מקווץ עם כפתור הרחבה';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout'] = 'משך זמן להשארת התקשורת';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout-help'] = 'מספר שניות בין פינג לפינג אשר מייצר השרת';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm'] = 'אישור מחיקה';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm-help'] = 'הצגת הודעות אישור בפעולות מחיקה';
$_ADMINLANG['wbteampro']['configfield']['server_timezone'] = 'איזור זמן השרת';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-time'] = 'זמן השרת';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-help'] = 'התעלמות מאיזור זמן השרת';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-default'] = 'ברירת מחדל של השרת';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid'] = 'מ';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid-help'] = 'שימוש באדמין בביצוע שיחות WHMCS ו API';
$_ADMINLANG['wbteampro']['configfield']['cron_password'] = 'סיסמת Cron';
$_ADMINLANG['wbteampro']['configfield']['cron_password-help'] = 'סיסמה אופציונלית לשיחות http cron.php';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails'] = 'שמור אימיילים אשר נשלחו';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails-help'] = 'שמור היסטוריית אימיילים ב WHMCS Email';
$_ADMINLANG['wbteampro']['configfield']['api_active'] = 'API פועל';
$_ADMINLANG['wbteampro']['configfield']['api_active-help'] = 'אפשר שיחות דרך API';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format'] = 'פורמט זמן';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format-help'] = 'ברירת מחדל: אוטומטי';


$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop'] = 'עצירה אוטומטית של כרטיסים';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop-help'] = 'עצור זמנים באופן אוטומטי כאשר הינך מגיב לכרטיסים';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus'] = 'סנן סטאטוסים של כרטיסים אוטומטית';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus-help'] = 'הקלד את הסטאטוסים אשר יפעילו את האפשרות לעצור את הזמנים באופן אוטומטי (ריק עבור כולם)';


$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date'] = 'עדכן תאריכים בצורה אוטומטית';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date-help'] = 'עדכן את תאריכי הפרויקט על מנת להתאימם לגבולות העץ';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type'] = 'סוגי פרויקט';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type-help'] = 'סוגי פרויקט אפשריים (אחד לכל שורה)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status'] = 'סטאטוסי פרויקט';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status-help'] = 'סטאטוסי פרויקט אפשריים (אחד לכל שורה)';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any-help'] = 'כל הפרויקטים משוייכים לכל המנהלים';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any'] = 'אפשר שיוך אוטומטי של פרויקטים';


$_ADMINLANG['wbteampro']['configfield']['action']['max_depth'] = 'עומק פעולה מקסימאלי (#)';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth-help'] = 'העומק המקסימלי עבור פעולות פרויקט';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date'] = 'עדכן תאריכים בצורה אוטומטית';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date-help'] = 'עדכן את תאריכי הפרויקט על מנת להתאימם לגבולות העץ';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset'] = 'תזוזה בסיום';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset-help'] = 'תזוזה עבור תאריך סיום עבור פעולות חדשות (שניות)';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict'] = 'קונפליקט סיום';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict-help'] = 'תזוזה עבור תאריך סיום עבור קונפליקט (שניות)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type'] = 'סוגי פעולות';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type-help'] = 'סוגי פעולהט אפשריים (אחד לכל שורה)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status'] = 'סטאטוסי פעולה';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status-help'] = 'סטאטוסי פעולה אפשריים (אחד לכל שורה)';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete'] = 'צמצם פעולות נשמלו';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete-help'] = 'הראה בצמצום פעולות אשר הושלמו';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any'] = 'אפשר שיוך לכל מנהל';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any-help'] = 'אפשר שיוך פעולות לכל מנהל';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete'] = 'סטאטוס פעולה הושלם';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete-help'] = 'שנה סטאטוס להושלם באופן אוטומטי כאשר 100%';


$_ADMINLANG['wbteampro']['configfield']['format']['projectDate'] = 'תאריך פרויקט';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate-help'] = 'תאריך יצירת, עריכת, התחלת וסיום פרויקט';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate'] = 'תאריך בקובץ הזמן';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate-help'] = 'תאריך התחלה וסיום בקובץ הזמן';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate'] = 'תאריך פעולה';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate-help'] = 'תאריך יצירת, התחלת וסיום פעולה';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate'] = 'תאריך כרטיס';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate-help'] = 'תאריך יצירת ותגובת הכרטיס';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate'] = 'תאריך נושא';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate-help'] = 'תאריך יצירת ותגובת הנושא';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate'] = 'תאריך פוסט';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate-help'] = 'תאריך יצירת ותגובת הפוסט';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate'] = 'תאריך  נושא הקובץ';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate-help'] = 'תאריך יצירת ותגובת נושא הקובץ';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate'] = 'תאריך פוסט הקובץ';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate-help'] = 'תאריך יצירת פוסט הקובץ';


$_ADMINLANG['wbteampro']['configfield']['format']['adminName'] = 'שם מנהל';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName-help'] = 'תצוגה וחיפוש רשימת מנהלים / משוייכים';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName'] = 'שם לקוח';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName-help'] = 'תצוגה וחיפוש רשימת לקוחות';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName'] = 'שם איש קשר';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName-help'] = 'תצוגה וחיפוש רשימת אנשי קשר';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList'] = 'חיפוש Ajax עבור לקוח';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList-help'] = 'חיפוש דינאמי עבור לקוחות';


$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate'] = 'תעריף לשעה';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate-help'] = 'שיעור חיוב ברירת המחדל';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice'] = 'שלח קבלה';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice-help'] = 'ברירת מחדל עבור שליחת קבלה ללקוחות באופן אוטומטי';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate'] = 'שעור מס';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate-help'] = 'סכום ברירת מחדל לשימוש עבור שיעור מס כאשר הלקוח אינו מגדיר אותו בעצמו';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax'] = 'שמור מס';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax-help'] = 'ברירת מחדל עבור אפשרויות לסמן ערכים למס';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits'] = 'שמור קרדיט';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits-help'] = 'Default for option to apply client credits to invoice';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed'] = 'עגל זמן נותר';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed-help'] = 'עגל על ערך הזמן מעלה או מטה';
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format'] = 'פורמט קבלה';
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format-help'] = 'פורמט עבור שורת פריט בקבלה';


/************************************** Extension System */
$_ADMINLANG['wbteampro']['extensionlist']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionlist']['type_module'] = 'מודול';
$_ADMINLANG['wbteampro']['extensionlist']['zone_all'] = 'הכל';
$_ADMINLANG['wbteampro']['extensionlist']['zone_client'] = 'לקוח';
$_ADMINLANG['wbteampro']['extensionlist']['zone_admin'] = 'מנהל';
$_ADMINLANG['wbteampro']['extensionlist']['new_module'] = 'מודול חדש';
$_ADMINLANG['wbteampro']['extensionlist']['install_plugin'] = 'התקן Pluginים';


$_ADMINLANG['wbteampro']['extensionfield']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionfield']['extension_name'] = 'שם העתק';
$_ADMINLANG['wbteampro']['extensionfield']['extension_enabled'] = 'מאופשר';
$_ADMINLANG['wbteampro']['extensionfield']['extension_zone'] = 'איזור מערכת';
$_ADMINLANG['wbteampro']['extensionfield']['date_created'] = 'מותקן';


$_ADMINLANG['wbteampro']['extensionxml']['name'] = 'שם';
$_ADMINLANG['wbteampro']['extensionxml']['version'] = 'גרסה';
$_ADMINLANG['wbteampro']['extensionxml']['author'] = 'יוצר';
$_ADMINLANG['wbteampro']['extensionxml']['created'] = 'נוצר';
$_ADMINLANG['wbteampro']['extensionxml']['description'] = 'תיאור';


/************************************** License First Run */
$_ADMINLANG['wbteampro']['licenseform']['description'] = '<b>מפתח הרישיון שלך אינו חוקי.</b><br/>אנא עדכן את ההגדרות הללו על מנת לאמת את שימושך.';
$_ADMINLANG['wbteampro']['licenseform']['success'] = '<b>רישיון מותקן</b><br/>מפתח הרישיון שלך נשמר.';


/************************************** Widgets */
$_ADMINLANG['wbteampro']['widget']['projectactivity'] = 'wbTeamPro פעילות פרויקט';
$_ADMINLANG['wbteampro']['widget']['topactions'] = 'wbTeamPro פעולות מדורגות';
$_ADMINLANG['wbteampro']['widget']['myactions'] = 'wbTeamPro הפעולות שלי';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview'] = 'wbTeamPro סיכום פעולות';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium'] = 'wbTeamPro רישום זמנים עבור Biennium';
$_ADMINLANG['wbteampro']['widget']['timelogactivity'] = 'wbTeamPro פעילות רישום הזמנים';
$_ADMINLANG['wbteampro']['widget']['fileactivity'] = 'wbTeamPro פעילות קבצים';
$_ADMINLANG['wbteampro']['widget']['topicactivity'] = 'wbTeamPro פעילות נושאים';
$_ADMINLANG['wbteampro']['widget']['ticketactivity'] = 'wbTeamPro פעילות כרטיסים';


/************************************** QuickMenu */
$_ADMINLANG['wbteampro']['quickmenu']['delete_rows'] = 'מחק השורות';
$_ADMINLANG['wbteampro']['quickmenu']['invoice_rows'] = 'שורות חשבונית';
$_ADMINLANG['wbteampro']['quickmenu']['modify_rows'] = 'לשנות שורות';


/************************************** Support Tickets Tab */
$_ADMINLANG['wbteampro']['supporttickets']['ticket_list'] = 'כרטיסי הפרויקט';
$_ADMINLANG['wbteampro']['supporttickets']['ticket_elapsed'] = 'זמן הנשאר עבור כרטיס';
$_ADMINLANG['wbteampro']['supporttickets']['timelog_list'] = 'שמירת זמן עבור כרטיס';
$_ADMINLANG['wbteampro']['supporttickets']['file_list'] = 'קבצים השייכים לפרויקט';


/** END LANGUAGE **/

?>
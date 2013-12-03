<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_CLIENT') or die('Invalid Access');

$_LANG['wbteampro_tab'] = 'הפרוייקטים שלי';

$_LANG['wbteampro']['error']['default_label'] = 'שגיעת מערכת';
$_LANG['wbteampro']['error']['license_error'] = 'שגיעה: אישור הרשיון נכשל';
$_LANG['wbteampro']['error']['license_invalid'] = 'שגיעה: רשיון לא חוקי';
$_LANG['wbteampro']['error']['license_expired'] = 'שגיעה: פגה תקופת הרשיון';
$_LANG['wbteampro']['error']['license_suspended'] = 'שגיעה: רשיון מושהה';
$_LANG['wbteampro']['error']['permissiondenied'] = 'גישה נדחתה';

$_LANG['wbteampro']['alert']['default_label'] = 'הודעת אזהרה';

$_LANG['wbteampro']['notice']['default_label'] = 'הודעת התראה';
$_LANG['wbteampro']['notice']['noprojects'] = '<b>אין פרוייקטים פעילים!</b><br>אין פרוייקטים פעילים לצפייה';
$_LANG['wbteampro']['notice']['file_closed'] = '<b>קובץ הנושא סגור</b><br>נושא זה סגור ולא ניתן לשנותו.';
$_LANG['wbteampro']['notice']['topic_closed'] = '<b>דיון סגור</b><br>נושא זה סגור ולא ניתן לשנותו.';
$_LANG['wbteampro']['notice']['ticket_created'] = '<b>כרטיס #%s נוצר</b><br>הכרטיס שלך נוצר בהצלחה.';

$_LANG['wbteampro']['js']['tabProject'] = 'פרויקט';
$_LANG['wbteampro']['js']['tabProjects'] = 'פרויקטים';
$_LANG['wbteampro']['js']['tabTickets'] = 'כרטיסי תמיכה';
$_LANG['wbteampro']['js']['loadMsg'] = 'טוען... אנא המתן...';
$_LANG['wbteampro']['js']['noActiveLogs'] = 'No Active Timelogs';
$_LANG['wbteampro']['js']['uiTimelogStart'] = 'התחל';
$_LANG['wbteampro']['js']['uiTimelogSave'] = 'שמור';
$_LANG['wbteampro']['js']['uiTimelogCancel'] = 'ביטול';
$_LANG['wbteampro']['js']['btnStopTimer'] = 'עצור טיימר';
$_LANG['wbteampro']['js']['btnStartTimer'] = 'התחל טיימר';
$_LANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog Saved for [time]';
$_LANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog Stopped after [time]';
$_LANG['wbteampro']['js']['deleteConfirm'] = 'לחץ על OK כדי לאשר את פעולתך';
$_LANG['wbteampro']['js']['deletePrompt'] = 'הקלד DELETE כדי לאשר את פעולתך';
$_LANG['wbteampro']['js']['deleteAnswer'] = 'DELETE';
$_LANG['wbteampro']['js']['deleteCancelled'] = 'המחיקה בוטלה';
$_LANG['wbteampro']['js']['textLimitRemain'] = '[remain] of [limit] characters remain';
$_LANG['wbteampro']['js']['textLimitReached'] = 'maximum [limit] characters reached';

$_LANG['wbteampro']['taskheader']['prefix'] = 'הפרויקטים שלי: ';
$_LANG['wbteampro']['taskheader']['project_action_list'] = 'פעולות בפרויקט';
$_LANG['wbteampro']['taskheader']['project_ticket_list'] = 'כרטיסי תמיכה בפרויקט';
$_LANG['wbteampro']['taskheader']['project_file_list'] = 'קבצי הפרויקט';
$_LANG['wbteampro']['taskheader']['project_topic_list'] = 'דיוני הפרויקט';
$_LANG['wbteampro']['taskheader']['project_list'] = 'כל הפרויקטים';
$_LANG['wbteampro']['taskheader']['action_list'] = 'כל הפעולות בפרויקט';
$_LANG['wbteampro']['taskheader']['file_list'] = 'כל קבצי הפרויקט';
$_LANG['wbteampro']['taskheader']['topic_list'] = 'כל כותרות הפרויקט';
$_LANG['wbteampro']['taskheader']['ticket_list'] = 'כל כרטיסי התמיכה בפרויקט';
$_LANG['wbteampro']['taskheader']['dashboard'] = 'לוח בקרה של הפרויקט';
$_LANG['wbteampro']['taskheader']['ticket_create'] = 'צור כרטיס תמיכה חדש';

$_LANG['wbteampro']['profiletab']['projects'] = 'פרויקטים';
$_LANG['wbteampro']['profiletab']['actions'] = 'פעולות';
$_LANG['wbteampro']['profiletab']['timelog'] = 'Time Log';
$_LANG['wbteampro']['profiletab']['tickets'] = 'כרטיסי תמיכה';

$_LANG['wbteampro']['projecttab']['details'] = 'פרטים';
$_LANG['wbteampro']['projecttab']['actions'] = 'פעולות';
$_LANG['wbteampro']['projecttab']['tickets'] = 'כרטיסי תמיכה';
$_LANG['wbteampro']['projecttab']['files'] = 'קבצים';
$_LANG['wbteampro']['projecttab']['filesview'] = 'צפיה בקובץ';
$_LANG['wbteampro']['projecttab']['topics'] = 'דיונים';
$_LANG['wbteampro']['projecttab']['topicsview'] = 'צפיה בדיון';

$_LANG['wbteampro']['projectfield']['name'] = 'שם הפרויקט';
$_LANG['wbteampro']['projectfield']['client'] = 'לקוח';
$_LANG['wbteampro']['projectfield']['type'] = 'סוג';
$_LANG['wbteampro']['projectfield']['contact'] = 'פרטי הלקוח';
$_LANG['wbteampro']['projectfield']['status'] = 'סטטוס';
$_LANG['wbteampro']['projectfield']['status'] = 'סטטוס';
$_LANG['wbteampro']['projectfield']['managedby'] = 'מנוהל על ידי';
$_LANG['wbteampro']['projectfield']['visiblestatus'] = 'מצב גלוי';
$_LANG['wbteampro']['projectfield']['assignedto'] = 'משויך ל';
$_LANG['wbteampro']['projectfield']['datestart'] = 'תאריך התחלה';
$_LANG['wbteampro']['projectfield']['datefinish'] = 'תאריך סיום';
$_LANG['wbteampro']['projectfield']['details'] = 'הערות / פרטים';
$_LANG['wbteampro']['projectfield']['created'] = 'נוצר';
$_LANG['wbteampro']['projectfield']['reviewed'] = 'נבדק';
$_LANG['wbteampro']['projectfield']['modified'] = 'שונה';
$_LANG['wbteampro']['projectfield']['completed'] = 'הסתיים';
$_LANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s מ %2$s פעולות, %3$s ציון דרך, %4$s קבוצה, %5$s משימה, זמן שחלף: %6$s';

$_LANG['wbteampro']['filelist']['newthread'] = 'נושא חדש';
$_LANG['wbteampro']['filelist']['deletethread'] = 'מחיקת נושא';
$_LANG['wbteampro']['filelist']['by'] = 'על ידי';
$_LANG['wbteampro']['filelist']['on'] = 'ב';
$_LANG['wbteampro']['filelist']['expanddetail'] = 'Toggle View';
$_LANG['wbteampro']['filefield']['label'] = 'Label';
$_LANG['wbteampro']['filefield']['version'] = 'Ver';
$_LANG['wbteampro']['filefield']['file'] = 'קובץ';
$_LANG['wbteampro']['filefield']['mime'] = 'Mime';
$_LANG['wbteampro']['filefield']['size'] = 'גודל';
$_LANG['wbteampro']['filefield']['detail'] = 'פרטים';
$_LANG['wbteampro']['filefield']['upload'] = 'העלאה';

$_LANG['wbteampro']['ticketlist']['newticket'] = 'כרטיס חדש';
$_LANG['wbteampro']['ticketfield']['project'] = 'פרויקט';
$_LANG['wbteampro']['ticketfield']['deptid'] = 'מחלקה';
$_LANG['wbteampro']['ticketfield']['priority'] = 'חשיבות';
$_LANG['wbteampro']['ticketfield']['subject'] = 'נושא';
$_LANG['wbteampro']['ticketfield']['message'] = 'הודעה';
$_LANG['wbteampro']['ticketfield']['attachments'] = 'קבצים מצורפים';
$_LANG['wbteampro']['ticketfield']['allowedfiletypes'] = 'סיומות קבצים אפשריות';

$_LANG['wbteampro']['ticket']['priority']['low'] = 'נמוך';
$_LANG['wbteampro']['ticket']['priority']['medium'] = 'בינוני';
$_LANG['wbteampro']['ticket']['priority']['high'] = 'גבוה';

$_LANG['wbteampro']['topiclist']['newthread'] = 'נושא חדש';
$_LANG['wbteampro']['topiclist']['deletethread'] = 'מחיקת נושא';
$_LANG['wbteampro']['topiclist']['by'] = 'על ידי';
$_LANG['wbteampro']['topiclist']['on'] = 'ב';
$_LANG['wbteampro']['topicfield']['title'] = 'כותרת';
$_LANG['wbteampro']['topicfield']['detail'] = 'פרטים';
$_LANG['wbteampro']['topiclist']['expanddetail'] = 'Toggle View';

$_LANG['wbteampro']['actionlist']['dispmode'] = 'מצב תצוגה:';
$_LANG['wbteampro']['actionlist']['listview'] = 'תצוגת רשימה';
$_LANG['wbteampro']['actionlist']['treeview'] = 'תצוגת עץ';
$_LANG['wbteampro']['actionlist']['ganttview'] = 'Gantt View';
$_LANG['wbteampro']['actionlist']['listcollapse'] = 'כווץ את כל הצמתים';
$_LANG['wbteampro']['actionlist']['listexpand'] = 'פתח את כל הצמתים';
$_LANG['wbteampro']['actionlist']['addchild'] = 'הוסף ילד';
$_LANG['wbteampro']['actionlist']['stoptimer'] = 'עצור טיימר';
$_LANG['wbteampro']['actionlist']['starttimer'] = 'התחל טיימר';
$_LANG['wbteampro']['actionlist']['viewlog'] = 'הצג יומן';
$_LANG['wbteampro']['actionlist']['delete'] = 'מחיקה';
$_LANG['wbteampro']['actionlist']['totalcomplete'] = 'הפרויקט הושלם';
$_LANG['wbteampro']['actionlist']['totalelapsed'] = 'סך הכל הזמן שחלף';
$_LANG['wbteampro']['actionfield']['name'] = 'שם';
$_LANG['wbteampro']['actionfield']['complete'] = '% הושלם';
$_LANG['wbteampro']['actionfield']['type'] = 'סוג';
$_LANG['wbteampro']['actionfield']['datestart'] = 'תאריך התחלה';
$_LANG['wbteampro']['actionfield']['status'] = 'סטטוס';
$_LANG['wbteampro']['actionfield']['datefinish'] = 'תאריך סיום';
$_LANG['wbteampro']['actionfield']['client'] = 'לקוח';
$_LANG['wbteampro']['actionfield']['managedby'] = 'מנוהל על ידי';
$_LANG['wbteampro']['actionfield']['maincontact'] = 'איש קשר ראשי';
$_LANG['wbteampro']['actionfield']['assignedto'] = 'משויך ל';
$_LANG['wbteampro']['actionfield']['detail'] = 'פרטים';
$_LANG['wbteampro']['actionfield']['created'] = 'נוצר';
$_LANG['wbteampro']['actionfield']['activity'] = 'פעילות';
$_LANG['wbteampro']['actionfield']['modified'] = 'שונה על ידי';
$_LANG['wbteampro']['actionfield']['parentaction'] = 'Parent Action';

$_LANG['wbteampro']['timeloglist']['totalelapsed'] = 'סך הכל הזמן שחלף';
$_LANG['wbteampro']['timelogfield']['note'] = 'מסמך';
$_LANG['wbteampro']['timelogfield']['datestart'] = 'תאריך התחלה';
$_LANG['wbteampro']['timelogfield']['datestop'] = 'תאריך סיום';
$_LANG['wbteampro']['timelogfield']['owner'] = 'יוצר';
$_LANG['wbteampro']['timelogfield']['elapsed'] = 'זמן שחלף';

$_LANG['wbteampro']['timelog']['emptynote'] = '~';
$_LANG['wbteampro']['timelog']['status']['active'] = 'פעיל';
$_LANG['wbteampro']['timelog']['status']['complete'] = 'הושלם';
$_LANG['wbteampro']['timelog']['elapsed']['all'] = 'רישום זמן כולל';
$_LANG['wbteampro']['timelog']['elapsed']['my'] = 'רישום הזמן שלי';

$_LANG['wbteampro']['filter']['tablabel'] = $_LANG['searchfilter'];
$_LANG['wbteampro']['filter']['any'] = '- Any -';
$_LANG['wbteampro']['filter']['none'] = $_LANG['none'];
$_LANG['wbteampro']['filter']['search'] = 'חפש';
$_LANG['wbteampro']['filter']['owner'] = 'יוצר';
$_LANG['wbteampro']['filter']['project'] = 'פרויקט';
$_LANG['wbteampro']['filter']['status'] = 'סטטוס';
$_LANG['wbteampro']['filter']['client'] = 'לקוח';
$_LANG['wbteampro']['filter']['department'] = 'מחלקה';
$_LANG['wbteampro']['filter']['manager'] = 'מנהל';
$_LANG['wbteampro']['filter']['assigned'] = 'משויך ל';
$_LANG['wbteampro']['filter']['type'] = 'סוג';
$_LANG['wbteampro']['filter']['level'] = 'שלב';
$_LANG['wbteampro']['filter']['flagged'] = 'Flagged';
$_LANG['wbteampro']['filter']['rangestart'] = 'התחיל אחרי';
$_LANG['wbteampro']['filter']['rangestop'] = 'התחיל לפני';
$_LANG['wbteampro']['filter']['root'] = 'רמת השורש';
$_LANG['wbteampro']['filter']['reset'] = 'אפס הכל';

$_LANG['wbteampro']['pagenav']['report'] = '%s '.$_LANG['recordsfound'].', '.$_LANG['page'].' %s '.$_LANG['pageof'].' %s';
$_LANG['wbteampro']['pagenav']['prev'] = '&laquo; '.$_LANG['previouspage'];
$_LANG['wbteampro']['pagenav']['next'] = $_LANG['nextpage'].' &raquo;';
$_LANG['wbteampro']['pagenav']['empty'] = $_LANG['norecordsfound'];
$_LANG['wbteampro']['pagenav']['jumpto'] = 'עבור לעמוד';
$_LANG['wbteampro']['pagenav']['go'] = $_LANG['go'];
$_LANG['wbteampro']['pagenav']['export'] = 'ייצוא';

$_LANG['wbteampro']['formnav']['edit'] = 'ערוך';
$_LANG['wbteampro']['formnav']['save'] = 'שמור';
$_LANG['wbteampro']['formnav']['apply'] = 'התחל';
$_LANG['wbteampro']['formnav']['close'] = 'סגור';
$_LANG['wbteampro']['formnav']['cancel'] = 'ביטול';
$_LANG['wbteampro']['formnav']['delete'] = 'מחיקה';
$_LANG['wbteampro']['formnav']['download'] = 'הורדה';
$_LANG['wbteampro']['formnav']['timestart'] = 'התחל טיימר';
$_LANG['wbteampro']['formnav']['timestop'] = 'עצור טיימר';

$_LANG['wbteampro']['dashhead']['viewall'] = 'צפה בהכל';
$_LANG['wbteampro']['dashhead']['topProjects'] = 'פרויקטים פעילים';
$_LANG['wbteampro']['dashhead']['topActions'] = 'פעולות אחרונות בפרויקטים';
$_LANG['wbteampro']['dashhead']['topTimelog'] = 'רישום זמנים אחרונים';
$_LANG['wbteampro']['dashhead']['topTickets'] = 'כרטיסי תמיכה פעילים בפרויקט';
$_LANG['wbteampro']['dashhead']['topTopics'] = 'נושאים פעילים בפרויקט';
$_LANG['wbteampro']['dashhead']['topFiles'] = 'פעילות קבצים בפרויקט';

$_LANG['wbteampro']['listhead']['project_name'] = 'שם הפריקט';
$_LANG['wbteampro']['listhead']['project_type'] = 'סוג';
$_LANG['wbteampro']['listhead']['project_status'] = 'סטטוס';
$_LANG['wbteampro']['listhead']['project_complete'] = '%';
$_LANG['wbteampro']['listhead']['project_tasks'] = '#';

$_LANG['wbteampro']['listhead']['date_created'] = 'נוצר';
$_LANG['wbteampro']['listhead']['date_modified'] = 'עודכן';
$_LANG['wbteampro']['listhead']['date_activity'] = 'פעילות';
$_LANG['wbteampro']['listhead']['date_start'] = 'התחלה';
$_LANG['wbteampro']['listhead']['date_finish'] = 'סיום';

$_LANG['wbteampro']['listhead']['client_userid'] = 'לקוח';
$_LANG['wbteampro']['listhead']['owner_adminid'] = 'יוצר';
$_LANG['wbteampro']['listhead']['manager_adminid'] = 'מנהל';
$_LANG['wbteampro']['listhead']['assigned_adminid'] = 'בעל גישה';

$_LANG['wbteampro']['listhead']['action_name'] = 'משימה';
$_LANG['wbteampro']['listhead']['action_type'] = 'סוג';
$_LANG['wbteampro']['listhead']['action_status'] = 'סטטוס';
$_LANG['wbteampro']['listhead']['action_complete'] = '%';
$_LANG['wbteampro']['listhead']['action_elapsed'] = 'זמן שחלף';
$_LANG['wbteampro']['listhead']['annual_activity'] = 'פעילות שנתית';

$_LANG['wbteampro']['listhead']['timelog_note'] = 'הערת רישום זמן';
$_LANG['wbteampro']['listhead']['timelog_elapsed'] = 'חלף';
$_LANG['wbteampro']['listhead']['timelog_start'] = 'התחיל';
$_LANG['wbteampro']['listhead']['timelog_status'] = 'סטטוס';

$_LANG['wbteampro']['listhead']['topic_name'] = 'נושא הדיון';
$_LANG['wbteampro']['listhead']['topic_activity'] = 'פעילות';
$_LANG['wbteampro']['listhead']['topic_posts'] = 'פוסטים';

$_LANG['wbteampro']['listhead']['ticket_title'] = 'כותרת כרטיס תמיכה';
$_LANG['wbteampro']['listhead']['ticket_lastreply'] = 'פעילות';
$_LANG['wbteampro']['listhead']['ticket_date'] = 'פרוסם';
$_LANG['wbteampro']['listhead']['ticket_submitter'] = 'מפרסם';
$_LANG['wbteampro']['listhead']['ticket_department'] = 'מחלקה';
$_LANG['wbteampro']['listhead']['ticket_status'] = 'סטטוס';
$_LANG['wbteampro']['listhead']['ticket_urgency'] = 'דחיפות';

$_LANG['wbteampro']['listhead']['file_label'] = 'File Thread';
$_LANG['wbteampro']['listhead']['file_latest'] = 'קובץ אחרון';
$_LANG['wbteampro']['listhead']['file_total'] = 'קבצים';

$_LANG['wbteampro']['breadcrumb']['wbteampro'] = 'הפרויקטים שלי';
$_LANG['wbteampro']['breadcrumb']['project_list'] = 'רשימת פרויקטים';
$_LANG['wbteampro']['breadcrumb']['action_list'] = 'רשימת פעילויות';
$_LANG['wbteampro']['breadcrumb']['file_list'] = 'רשימת קבצים';
$_LANG['wbteampro']['breadcrumb']['topic_list'] = 'רשימת כותרות';

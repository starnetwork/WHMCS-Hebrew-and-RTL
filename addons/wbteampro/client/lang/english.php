<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_CLIENT') or die('Invalid Access');

$_LANG['wbteampro_tab'] = 'My Projects';

$_LANG['wbteampro']['error']['default_label'] = 'Error Message';
$_LANG['wbteampro']['error']['license_error'] = 'wbTeamPro Error: License Authorization Failed';
$_LANG['wbteampro']['error']['license_invalid'] = 'wbTeamPro Error: Invalid License Key';
$_LANG['wbteampro']['error']['license_expired'] = 'wbTeamPro Error: License Key Expired';
$_LANG['wbteampro']['error']['license_suspended'] = 'wbTeamPro Error: License Key Suspended';
$_LANG['wbteampro']['error']['permissiondenied'] = 'Permission Denied';

$_LANG['wbteampro']['alert']['default_label'] = 'Alert Message';

$_LANG['wbteampro']['notice']['default_label'] = 'Notice Message';
$_LANG['wbteampro']['notice']['noprojects'] = '<b>No Active Projects!</b><br>There are no active projects to view';
$_LANG['wbteampro']['notice']['file_closed'] = '<b>File Thread Closed</b><br>This thread is closed and cannot be modified.';
$_LANG['wbteampro']['notice']['topic_closed'] = '<b>Discussion Thread Closed</b><br>This thread is closed and cannot be modified.';
$_LANG['wbteampro']['notice']['ticket_created'] = '<b>Ticket #%s Created</b><br>Your ticket has been created sucessfully.';

$_LANG['wbteampro']['js']['tabProject'] = 'Project';
$_LANG['wbteampro']['js']['tabProjects'] = 'Projects';
$_LANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_LANG['wbteampro']['js']['loadMsg'] = 'Loading... Please Wait...';
$_LANG['wbteampro']['js']['noActiveLogs'] = 'No Active Timelogs';
$_LANG['wbteampro']['js']['uiTimelogStart'] = 'Start';
$_LANG['wbteampro']['js']['uiTimelogSave'] = 'Save';
$_LANG['wbteampro']['js']['uiTimelogCancel'] = 'Cancel';
$_LANG['wbteampro']['js']['btnStopTimer'] = 'Stop Timer';
$_LANG['wbteampro']['js']['btnStartTimer'] = 'Start Timer';
$_LANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog Saved for [time]';
$_LANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog Stopped after [time]';
$_LANG['wbteampro']['js']['deleteConfirm'] = 'Click OK confirm your action';
$_LANG['wbteampro']['js']['deletePrompt'] = 'Type DELETE to confirm your action';
$_LANG['wbteampro']['js']['deleteAnswer'] = 'DELETE';
$_LANG['wbteampro']['js']['deleteCancelled'] = 'Delete Cancelled';
$_LANG['wbteampro']['js']['textLimitRemain'] = '[remain] of [limit] characters remain';
$_LANG['wbteampro']['js']['textLimitReached'] = 'maximum [limit] characters reached';

$_LANG['wbteampro']['taskheader']['prefix'] = 'My Projects: ';
$_LANG['wbteampro']['taskheader']['project_action_list'] = 'Project Actions';
$_LANG['wbteampro']['taskheader']['project_ticket_list'] = 'Project Tickets';
$_LANG['wbteampro']['taskheader']['project_file_list'] = 'Project Files';
$_LANG['wbteampro']['taskheader']['project_topic_list'] = 'Project Discussions';
$_LANG['wbteampro']['taskheader']['project_list'] = 'All Projects';
$_LANG['wbteampro']['taskheader']['action_list'] = 'All Project Actions';
$_LANG['wbteampro']['taskheader']['file_list'] = 'All Project Files';
$_LANG['wbteampro']['taskheader']['topic_list'] = 'All Project Topics';
$_LANG['wbteampro']['taskheader']['ticket_list'] = 'All Project Tickets';
$_LANG['wbteampro']['taskheader']['dashboard'] = 'Project Dashboard';
$_LANG['wbteampro']['taskheader']['ticket_create'] = 'Create a New Ticket';

$_LANG['wbteampro']['profiletab']['projects'] = 'Projects';
$_LANG['wbteampro']['profiletab']['actions'] = 'Actions';
$_LANG['wbteampro']['profiletab']['timelog'] = 'Time Log';
$_LANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

$_LANG['wbteampro']['projecttab']['details'] = 'Details';
$_LANG['wbteampro']['projecttab']['actions'] = 'Actions';
$_LANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_LANG['wbteampro']['projecttab']['files'] = 'Files';
$_LANG['wbteampro']['projecttab']['filesview'] = 'File View';
$_LANG['wbteampro']['projecttab']['topics'] = 'Discussions';
$_LANG['wbteampro']['projecttab']['topicsview'] = 'Discussion View';

$_LANG['wbteampro']['projectfield']['name'] = 'Project Name';
$_LANG['wbteampro']['projectfield']['client'] = 'Client';
$_LANG['wbteampro']['projectfield']['type'] = 'Type';
$_LANG['wbteampro']['projectfield']['contact'] = 'Client Contact';
$_LANG['wbteampro']['projectfield']['status'] = 'Status';
$_LANG['wbteampro']['projectfield']['status'] = 'Status';
$_LANG['wbteampro']['projectfield']['managedby'] = 'Managed by';
$_LANG['wbteampro']['projectfield']['visiblestatus'] = 'Visible Status';
$_LANG['wbteampro']['projectfield']['assignedto'] = 'Assigned to';
$_LANG['wbteampro']['projectfield']['datestart'] = 'Date Start';
$_LANG['wbteampro']['projectfield']['datefinish'] = 'Date Finish';
$_LANG['wbteampro']['projectfield']['details'] = 'Notes / Details';
$_LANG['wbteampro']['projectfield']['created'] = 'Created';
$_LANG['wbteampro']['projectfield']['reviewed'] = 'Reviewed';
$_LANG['wbteampro']['projectfield']['modified'] = 'Modified';
$_LANG['wbteampro']['projectfield']['completed'] = 'Completed';
$_LANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s from %2$s Actions, %3$s Milestone, %4$s Group, %5$s Task, Time Elapsed: %6$s';

$_LANG['wbteampro']['filelist']['newthread'] = 'New Thread';
$_LANG['wbteampro']['filelist']['deletethread'] = 'Delete Thread';
$_LANG['wbteampro']['filelist']['by'] = 'by';
$_LANG['wbteampro']['filelist']['on'] = 'on';
$_LANG['wbteampro']['filelist']['expanddetail'] = 'Toggle View';
$_LANG['wbteampro']['filefield']['label'] = 'Label';
$_LANG['wbteampro']['filefield']['version'] = 'Ver';
$_LANG['wbteampro']['filefield']['file'] = 'File';
$_LANG['wbteampro']['filefield']['mime'] = 'Mime';
$_LANG['wbteampro']['filefield']['size'] = 'Size';
$_LANG['wbteampro']['filefield']['detail'] = 'Detail';
$_LANG['wbteampro']['filefield']['upload'] = 'Upload';

$_LANG['wbteampro']['ticketlist']['newticket'] = 'New Ticket';
$_LANG['wbteampro']['ticketfield']['project'] = 'Project';
$_LANG['wbteampro']['ticketfield']['deptid'] = 'Department';
$_LANG['wbteampro']['ticketfield']['priority'] = 'Priority';
$_LANG['wbteampro']['ticketfield']['subject'] = 'Subject';
$_LANG['wbteampro']['ticketfield']['message'] = 'Message';
$_LANG['wbteampro']['ticketfield']['attachments'] = 'Attachments';
$_LANG['wbteampro']['ticketfield']['allowedfiletypes'] = 'Allowed File Extensions';

$_LANG['wbteampro']['ticket']['priority']['low'] = 'Low';
$_LANG['wbteampro']['ticket']['priority']['medium'] = 'Medium';
$_LANG['wbteampro']['ticket']['priority']['high'] = 'High';

$_LANG['wbteampro']['topiclist']['newthread'] = 'New Thread';
$_LANG['wbteampro']['topiclist']['deletethread'] = 'Delete Thread';
$_LANG['wbteampro']['topiclist']['by'] = 'by';
$_LANG['wbteampro']['topiclist']['on'] = 'on';
$_LANG['wbteampro']['topicfield']['title'] = 'Title';
$_LANG['wbteampro']['topicfield']['detail'] = 'Detail';
$_LANG['wbteampro']['topiclist']['expanddetail'] = 'Toggle View';

$_LANG['wbteampro']['actionlist']['dispmode'] = 'Display Mode:';
$_LANG['wbteampro']['actionlist']['listview'] = 'List View';
$_LANG['wbteampro']['actionlist']['treeview'] = 'Tree View';
$_LANG['wbteampro']['actionlist']['ganttview'] = 'Gantt View';
$_LANG['wbteampro']['actionlist']['listcollapse'] = 'Collapse All Nodes';
$_LANG['wbteampro']['actionlist']['listexpand'] = 'Expand All Nodes';
$_LANG['wbteampro']['actionlist']['addchild'] = 'Add Child';
$_LANG['wbteampro']['actionlist']['stoptimer'] = 'Stop Timer';
$_LANG['wbteampro']['actionlist']['starttimer'] = 'Start Timer';
$_LANG['wbteampro']['actionlist']['viewlog'] = 'View Log';
$_LANG['wbteampro']['actionlist']['delete'] = 'Delete';
$_LANG['wbteampro']['actionlist']['totalcomplete'] = 'Project Complete';
$_LANG['wbteampro']['actionlist']['totalelapsed'] = 'Total Elapsed';
$_LANG['wbteampro']['actionfield']['name'] = 'Name';
$_LANG['wbteampro']['actionfield']['complete'] = '% Complete';
$_LANG['wbteampro']['actionfield']['type'] = 'Type';
$_LANG['wbteampro']['actionfield']['datestart'] = 'Date Start';
$_LANG['wbteampro']['actionfield']['status'] = 'Status';
$_LANG['wbteampro']['actionfield']['datefinish'] = 'Date Finish';
$_LANG['wbteampro']['actionfield']['client'] = 'Client';
$_LANG['wbteampro']['actionfield']['managedby'] = 'Managed by';
$_LANG['wbteampro']['actionfield']['maincontact'] = 'Main Contact';
$_LANG['wbteampro']['actionfield']['assignedto'] = 'Assigned to';
$_LANG['wbteampro']['actionfield']['detail'] = 'Detail';
$_LANG['wbteampro']['actionfield']['created'] = 'Created';
$_LANG['wbteampro']['actionfield']['activity'] = 'Activity';
$_LANG['wbteampro']['actionfield']['modified'] = 'Modified';
$_LANG['wbteampro']['actionfield']['parentaction'] = 'Parent Action';

$_LANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total Elapsed';
$_LANG['wbteampro']['timelogfield']['note'] = 'Note';
$_LANG['wbteampro']['timelogfield']['datestart'] = 'Start Date';
$_LANG['wbteampro']['timelogfield']['datestop'] = 'Stop Date';
$_LANG['wbteampro']['timelogfield']['owner'] = 'Owner';
$_LANG['wbteampro']['timelogfield']['elapsed'] = 'Time Elapsed';

$_LANG['wbteampro']['timelog']['emptynote'] = '~';
$_LANG['wbteampro']['timelog']['status']['active'] = 'Active';
$_LANG['wbteampro']['timelog']['status']['complete'] = 'Complete';
$_LANG['wbteampro']['timelog']['elapsed']['all'] = 'All Time Logged';
$_LANG['wbteampro']['timelog']['elapsed']['my'] = 'My Time Logged';

$_LANG['wbteampro']['filter']['tablabel'] = $_LANG['searchfilter'];
$_LANG['wbteampro']['filter']['any'] = '- Any -';
$_LANG['wbteampro']['filter']['none'] = $_LANG['none'];
$_LANG['wbteampro']['filter']['search'] = 'Search';
$_LANG['wbteampro']['filter']['owner'] = 'Owner';
$_LANG['wbteampro']['filter']['project'] = 'Project';
$_LANG['wbteampro']['filter']['status'] = 'Status';
$_LANG['wbteampro']['filter']['client'] = 'Client';
$_LANG['wbteampro']['filter']['department'] = 'Department';
$_LANG['wbteampro']['filter']['manager'] = 'Manager';
$_LANG['wbteampro']['filter']['assigned'] = 'Assigned';
$_LANG['wbteampro']['filter']['type'] = 'Type';
$_LANG['wbteampro']['filter']['level'] = 'Level';
$_LANG['wbteampro']['filter']['flagged'] = 'Flagged';
$_LANG['wbteampro']['filter']['rangestart'] = 'Started After';
$_LANG['wbteampro']['filter']['rangestop'] = 'Started Before';
$_LANG['wbteampro']['filter']['root'] = 'Root Level';
$_LANG['wbteampro']['filter']['reset'] = 'Reset';

$_LANG['wbteampro']['pagenav']['report'] = '%s '.$_LANG['recordsfound'].', '.$_LANG['page'].' %s '.$_LANG['pageof'].' %s';
$_LANG['wbteampro']['pagenav']['prev'] = '&laquo; '.$_LANG['previouspage'];
$_LANG['wbteampro']['pagenav']['next'] = $_LANG['nextpage'].' &raquo;';
$_LANG['wbteampro']['pagenav']['empty'] = $_LANG['norecordsfound'];
$_LANG['wbteampro']['pagenav']['jumpto'] = 'Jump to Page';
$_LANG['wbteampro']['pagenav']['go'] = $_LANG['go'];
$_LANG['wbteampro']['pagenav']['export'] = 'Export';

$_LANG['wbteampro']['formnav']['edit'] = 'Edit';
$_LANG['wbteampro']['formnav']['save'] = 'Save';
$_LANG['wbteampro']['formnav']['apply'] = 'Apply';
$_LANG['wbteampro']['formnav']['close'] = 'Close';
$_LANG['wbteampro']['formnav']['cancel'] = 'Cancel';
$_LANG['wbteampro']['formnav']['delete'] = 'Delete';
$_LANG['wbteampro']['formnav']['download'] = 'Download';
$_LANG['wbteampro']['formnav']['timestart'] = 'Start Timer';
$_LANG['wbteampro']['formnav']['timestop'] = 'Stop Timer';

$_LANG['wbteampro']['dashhead']['viewall'] = 'View All';
$_LANG['wbteampro']['dashhead']['topProjects'] = 'Projects with Recent Activity';
$_LANG['wbteampro']['dashhead']['topActions'] = 'Most Urgent Actions';
$_LANG['wbteampro']['dashhead']['topTimelog'] = 'Recent Timelog Activity';
$_LANG['wbteampro']['dashhead']['topTickets'] = 'Project Ticket Activity';
$_LANG['wbteampro']['dashhead']['topTopics'] = 'Project Topic Activity';
$_LANG['wbteampro']['dashhead']['topFiles'] = 'Project File Activity';

$_LANG['wbteampro']['listhead']['project_name'] = 'Project Name';
$_LANG['wbteampro']['listhead']['project_type'] = 'Type';
$_LANG['wbteampro']['listhead']['project_status'] = 'Status';
$_LANG['wbteampro']['listhead']['project_complete'] = '%';
$_LANG['wbteampro']['listhead']['project_tasks'] = '#';

$_LANG['wbteampro']['listhead']['date_created'] = 'Created';
$_LANG['wbteampro']['listhead']['date_modified'] = 'Modified';
$_LANG['wbteampro']['listhead']['date_activity'] = 'Activity';
$_LANG['wbteampro']['listhead']['date_start'] = 'Start';
$_LANG['wbteampro']['listhead']['date_finish'] = 'Due';

$_LANG['wbteampro']['listhead']['client_userid'] = 'Client';
$_LANG['wbteampro']['listhead']['owner_adminid'] = 'Owner';
$_LANG['wbteampro']['listhead']['manager_adminid'] = 'Manager';
$_LANG['wbteampro']['listhead']['assigned_adminid'] = 'Assigned';

$_LANG['wbteampro']['listhead']['action_name'] = 'Action Name';
$_LANG['wbteampro']['listhead']['action_type'] = 'Type';
$_LANG['wbteampro']['listhead']['action_status'] = 'Status';
$_LANG['wbteampro']['listhead']['action_complete'] = '%';
$_LANG['wbteampro']['listhead']['action_elapsed'] = 'Elapsed';
$_LANG['wbteampro']['listhead']['annual_activity'] = 'Annual Activity';

$_LANG['wbteampro']['listhead']['timelog_note'] = 'Timelog Note';
$_LANG['wbteampro']['listhead']['timelog_elapsed'] = 'Elapsed';
$_LANG['wbteampro']['listhead']['timelog_start'] = 'Started';
$_LANG['wbteampro']['listhead']['timelog_status'] = 'Status';

$_LANG['wbteampro']['listhead']['topic_name'] = 'Discussion Thread';
$_LANG['wbteampro']['listhead']['topic_activity'] = 'Activity';
$_LANG['wbteampro']['listhead']['topic_posts'] = 'Posts';

$_LANG['wbteampro']['listhead']['ticket_title'] = 'Ticket Title';
$_LANG['wbteampro']['listhead']['ticket_lastreply'] = 'Activity';
$_LANG['wbteampro']['listhead']['ticket_date'] = 'Submitted';
$_LANG['wbteampro']['listhead']['ticket_submitter'] = 'Submitter';
$_LANG['wbteampro']['listhead']['ticket_department'] = 'Department';
$_LANG['wbteampro']['listhead']['ticket_status'] = 'Status';
$_LANG['wbteampro']['listhead']['ticket_urgency'] = 'Urgency';

$_LANG['wbteampro']['listhead']['file_label'] = 'File Thread';
$_LANG['wbteampro']['listhead']['file_latest'] = 'Latest File';
$_LANG['wbteampro']['listhead']['file_total'] = 'Files';

$_LANG['wbteampro']['breadcrumb']['wbteampro'] = 'My Projects';
$_LANG['wbteampro']['breadcrumb']['project_list'] = 'List Projects';
$_LANG['wbteampro']['breadcrumb']['action_list'] = 'List Actions';
$_LANG['wbteampro']['breadcrumb']['file_list'] = 'List Files';
$_LANG['wbteampro']['breadcrumb']['topic_list'] = 'List Topics';

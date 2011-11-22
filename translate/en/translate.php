<?php

#Disable direct access.
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename( __FILE__ ))) die ('kwaheri rafiki!');

$LANG = array ();

# Language identification in iso-639
$LANG['LANGUAGE'] = 'us';
//Word Name (english name)
$LANG['LANGUAGE_NAME'] = 'English';
//Native name of language (in the original language)
$LANG['LANGUAGE_NATIVE_NAME'] = 'English';
$LANG['DIRECTION'] = 'ltr';
$LANG['CODEPAGE'] = 'UTF-8';

########
##Alert Messages, normally used with JavaScript dialog box.
##
$LANG['ALERT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Excessive login attempts by a client'."\n".
                'Email: {0}'."\n".
				'Ticket#: {1}'."\n".
                'IP: {2}'."\n".
				'Time: {3}'."\n\n".
                'Attempts #{4}';

#######
## Error Mensages
##
$LANG['ERROR_ACCESS_DENIED_INVALID_TICKET'] = 'Access Denied. Possibly invalid ticket ID';
$LANG['ERROR_EMAIL_PARSE_FAILED'] = 'Email parse failed';
$LANG['ERROR_FILE_REJECTED'] = 'File {0} rejected!';
$LANG['ERROR_INVALID_FROM_ADDRESS'] = 'Invalid FROM address';
$LANG['ERROR_INVALID_FILE_TYPE'] = 'Invalid File Type';
$LANG['ERROR_MESSAGE_REQUIRED'] = 'Message required';
$LANG['ERROR_NAME_REQUIRED'] = 'Name required';
$LANG['ERROR_OCCURED'] = 'Error(s) occured. Please try again';
$LANG['ERROR_OCCURED_TRY_AGAIN'] = 'Error(s) occured. Please try again';
$LANG['ERROR_POSSIBLY_INVALID_TICKET'] = 'Access Denied. Possibly invalid ticket ID';
$LANG['ERROR_SERVICES_NOT_AVAILABLE'] = 'Services not available!';
$LANG['ERROR_SECURITY_REPEAT_RESULT_LOCK'] = 'Security violation. Repeated violations will result in your account being locked.';
$LANG['ERROR_SECURITY_VIOLATION_YOUR_ACCOUNT_WILL_LOCKED'] = 'Security violation. Repeated violations will result in your account being locked';
$LANG['ERROR_UNABLE_SEND_MESSAGE_TRY_AGAIN'] = 'Unable to post the message. Try again';
$LANG['ERROR_UNABLE_TO_POST_THE_RESPONSE']='Unable to post the response';
$LANG['ERROR_UNKNOW_ACTION'] = 'Uknown action';
$LANG['ERROR_UNABLE_TO_POST_MESSAGE'] = 'Unable to post the message. Try again';
$LANG['ERROR_UKNOW_ACTION'] = 'Unknown action';
$LANG['ERROR_YOU_HAVE_REACHED_MAXIMUM_FAILED_LOGIN']='You\'ve reached maximum failed login attempts allowed. Try again after 5 minutes or <a href="open.php">open a new ticket</a>';
$LANG['ERROR_YOU_MUST_CHANGE_PASSWORD'] = 'You must change your password to continue.';
$LANG['ERROR_SEARCH_TERM_MORE_3']='Search term must be more than 3 chars';

#######
## Images for Staff and Clients Ends
##
## relative path of imagens in "translate/".$LANG['LANGUAGE']."/"
##
$LANG['IMAGE_CLIENT_VIEW_OPEN'] = 'client/view_open.gif';
$LANG['IMAGE_CLIENT_VIEW_CLOSED'] = 'client/view_closed.gif';
$LANG['IMAGE_CLIENT_REFRESH'] = 'client/refresh.gif';
$LANG['IMAGE_STAFF_VIEW_OPEN'] = 'staff/view_open.gif';
$LANG['IMAGE_STAFF_VIEW_CLOSED'] = 'staff/view_closed.gif';
$LANG['IMAGE_STAFF_REFRESH'] = 'staff/refresh.gif';

#######
## Labels for Bottons, Headers on Tables, Selections, Link Texts and others
##
// Label A
$LANG['LABEL_ACTIVE_IN_PARENTESIS'] = '(Active)';
$LANG['LABEL_ADD_NEW_DEPT'] = 'Add New Dept.';
$LANG['LABEL_ADMIN_DASHBOARD'] = 'Admin Dashboard';
$LANG['LABEL_ADMIN_PANEL'] = 'Admin Panel';
$LANG['LABEL_ADVANCED'] = 'Advanced';
$LANG['LABEL_APPEND'] = 'Append';
$LANG['LABEL_APPEND_SIGNATURE'] = 'Append Signature';
$LANG['LABEL_ALL'] = 'All';
$LANG['LABEL_ALL_DEPARTMENTS'] = 'All Departments';
$LANG['LABEL_API'] = 'API';
$LANG['LABEL_ASSIGN'] = 'Assign';
$LANG['LABEL_ASSIGN_TO_STAFF'] = 'Assign to Staff';
$LANG['LABEl_ASSIGNED_TICKETS'] = 'Assigned Tickets';
$LANG['LABEL_ASC'] = 'ASC';
$LANG['LABEL_ASCENDING'] = 'Ascending';
$LANG['LABEL_ATTACHMENT'] = 'Attachment';
$LANG['LABEL_ATTACHMENTS'] = 'Attachmets';
$LANG['LABEL_AUTO_RESPONSE_EMAIL'] = 'Auto Response Email';
$LANG['LABEL_AUTORESPONDERS'] = 'Autoresponders';
$LANG['LABEL_AUTORESP'] = 'AutoResp.';
// Label B
$LANG['LABEL_BASIC'] = 'Basic';
// Label C
$LANG['LABEL_CLOSE'] = 'Close';
$LANG['LABEL_CLOSED'] = 'Closed';
$LANG['LABEL_CLOSE_TICKET'] = 'Close Ticket';
$LANG['LABEL_CLOSED_TICKETS'] = 'Closed Tickets';
$LANG['LABEL_CANCEL'] = 'Cancel';
$LANG['LABEL_CANNED_RESPONSE'] = 'Canned Response';
$LANG['LABEL_CATEGORY'] = 'category';
$LANG['LABEL_CATEGORY_DEPT'] = 'Category/Dept';
$LANG['LABEL_CHANGE_PASSWORD'] = 'Change Password';
$LANG['LABEL_CHECK_STATUS'] = 'Check Status';
$LANG['LABEL_Closed'] = 'Closed';
$LANG['LABEL_CREATE_DATE'] = 'Create Date';
// Label D
$LANG['LABEL_DASHBOARD'] = 'Dashboard';
$LANG['LABEL_DATE'] = 'Date';
$LANG['LABEL_DATE_SPAN'] = 'Date Span';
$LANG['LABEL_DEFAULT'] = 'Default';
$LANG['LABEL_DELETE'] = 'Delete';
$LANG['LABEL_DELETE_DEPT_S'] = 'Delete Dept(s)';
$LANG['LABEL_DEPARTMENT'] = 'Department';
$LANG['LABEL_DEPARTMENTS'] = 'Departments';
$LANG['LABEL_DEPT_MANAGER'] = 'Dep Manager';
$LANG['LABEL_DEPT_MANAGER_NONE'] = 'None';
$LANG['LABEL_DEPT'] = 'Dept.';
$LANG['LABEL_DEPT_ACCESS'] = 'Dept Access';
$LANG['LABEL_DEPT_NAME'] = 'Dept. Name';
$LANG['LABEL_DEPT_EMAIL'] = 'Dept. Email';
$LANG['LABEL_DEPT_EMAIL_ABOVE'] = 'Dept. Email (above)';
$LANG['LABEL_DEPT_SIGNATURE'] = 'Dept. Signature';
$LANG['LABEL_DEPT_TYPE'] = 'Dept. Type';
$LANG['LABEL_DESC'] = 'DESC';
$LANG['LABEL_DESCENDING'] = 'Descending';
$LANG['LABEL_DISABLED_IN_PARENTESIS'] = '(Disabled)';
$LANG['LABEL_DIRECTORY'] = 'Directory';
$LANG['LABEL_DIRECTORY_STAFF'] = 'Staff Directory';
// Label E
$LANG['LABEL_EMAIL'] = 'E-Mail';
$LANG['LABEL_EMAILS'] = 'E-Mails';
$LANG['LABEL_EMAILS_SETTINGS'] = 'E-Mails Settings';
$LANG['LABEL_EMAIL_ADDRESS'] = 'Email Address';
$LANG['LABEL_EMAIL_TEMPLATES'] = 'Email Templates';
$LANG['LABEL_ENABLE_SYSTEM_OFF_LINE'] = 'Enable';
$LANG['LABEL_ENTER_NOTE_CONTENT'] = 'Enter note content.';
// Label F
$LANG['LABEL_FROM'] = 'From.';
$LANG['LABEL_FULL_NAME'] = 'Full Name';
// Label G
$LANG['LABEL_GENERAL_SETTINGS'] = 'General Settings';
$LANG['LABEL_GO'] = 'GO';
// Label H
$LANG['LABEL_HELP_TOPIC'] = 'Help Topic';
$LANG['LABEL_HELP_TOPICS'] = 'Help Topics';
$LANG['LABEL_HELPDESK_ATTEMPT_ALLOWED_BEFORE_A'] = 'attempt(s) allowed&nbsp;before a';
$LANG['LABEL_HELPDESK_BIND_STAFF_SESSION_TO_IP'] = 'Bind Staff Session to IP';
$LANG['LABEL_HELPDESK_CLIENT_EXCESSIVE_LOGINS'] = 'Client Excessive Logins';
$LANG['LABEL_HELPDESK_CLIENT_SESSION_TIMEOUT'] = 'Client Session Timeout';
$LANG['LABEL_HELPDESK_CLICKABLE_URLS'] = 'Clickable URLs';
$LANG['LABEL_HELPDESK_DEFAULT_DEPARTMENT'] = 'Default Department';
$LANG['LABEL_HELPDESK_DEFAULT_EMAIL_TEMPLATES'] = 'Default Email Templates';
$LANG['LABEL_HELPDESK_ENABLE_AUTO_CRON'] = 'Enable Auto Cron';
$LANG['LABEL_HELPDESK_MAKE_URLS_CLICKABLE'] = 'Make URLs clickable';
$LANG['LABEL_HELPDESK_NAME_TITLE'] = 'Helpdesk Name/Title';
$LANG['LABEL_HELPDESK_NONE_DISABLE_LOGGER'] = 'None (Disable Logger)';
$LANG['LABEL_HELPDESK_PENALTY_IN_MINUTES'] = 'min. timeout (penalty in minutes)';
$LANG['LABEL_HELPDESK_PURGE_NONE_DISABLE'] = 'None (Disable)';
$LANG['LABEL_HELPDESK_PURGE_LOGS_AFTER'] = 'Purge logs after';
$LANG['LABEL_HELPDESK_DEFAULT_PAGE_SIZE'] = 'Default Page Size';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_DEPARTMENT'] = 'Select Default Dept';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_TEMPLATE'] = 'Select Default Template';
$LANG['LABEL_HELPDESK_STAFF_EXCESSIVE_LOGINS'] = 'Staff Excessive Logins';
$LANG['LABEL_HELPDESK_STAFF_SESSION_TIMEOUT'] = 'Staff Session Timeout';
$LANG['LABEL_HELPDESK_STATUS'] = 'Helpdesk Status';
$LANG['LABEL_HELPDESK_SYSTEM_LOG_LEVEL'] = 'System Log Level';
$LANG['LABEL_HELPDESK_URL'] = 'Helpdesk URL';
// Label I
$LANG['LABEL_ISSUE_SUMMARY'] = 'Issue Summary';
$LANG['LABEL_INTERNAL_NOTE'] = 'Interne Notitie'; //newticket.inc
$LANG['LABEL_INTERNAL_NOTES'] = 'Interne Notities';
$LANG['LABEL_IP_ADDRESS'] = 'Ip Adres';

// Label J

// Label K
$LANG['LABEL_KNOWLEDGE_BASE'] = 'Knowledge Base';
$LANG['LABEL_KNOWLEDGE_BASE_PREMATE'] = 'Knowledge Base: Premade';
// Label L
$LANG['LABEL_LOG_OUT'] = 'Log Out';
$LANG['LABEL_LAST_UPDATED'] = 'Last Updated';
// Label M
$LANG['LABEL_MAKE_PUBLIC'] = 'Make Public';
$LANG['LABEL_MAKE_PRIVATE'] = 'Make Private';
$LANG['LABEL_MANAGER'] = 'Manager';
$LANG['LABEL_MESSAGE'] = 'Message';
$LANG['LABEL_MONTHS'] = 'Months';
$LANG['LABEL_MONTH'] = 'Month';
$LANG['LABEL_MY_ACCOUNT'] = 'My Account';
$LANG['LABEL_MY_PREFERENCE'] = 'My Preference';
$LANG['LABEL_MY_PROFILE'] = 'My Profile';
$LANG['LABEL_MY_SIGNATURE'] = 'My signature';
// Label N
$LANG['LABEL_NAME'] = 'Name';
$LANG['LABEL_NEW_DEPARTMENT'] = 'New Department';
$LANG['LABEL_NEW_MESSAGE'] = 'New Message';
$LANG['LABEL_NEW_PREMADE_REPLY'] = 'New Premade Reply';
$LANG['LABEL_NEW_TICKET'] = 'New Ticket';
$LANG['LABEL_NEW_TICKET_PRIORITY'] = 'New Ticket Priority';
$LANG['LABEL_NO_MANAGER_ADD_USERS'] = 'No Users (Add Users)';
$LANG['LABEL_NONE'] = 'None';
$LANG['LABEL_NOTE_TITLE'] = 'Note Title';
// Label O
$LANG['LABEL_OPEN'] = 'open';
$LANG['LABEL_OPEN_TICKET'] = 'Open Ticket';
$LANG['LABEL_OPEN_NEW_TICKET'] = 'Open New Ticket';
$LANG['LABEL_OTHER'] = 'Outro';
$LANG['LABEL_OUTGOING_EMAIL'] = 'outgoing email';
$LANG['LABEL_OVERDUE'] = 'Overdue';
// Label P
$LANG['LABEL_PREFERENCES'] = 'Preferences';
$LANG['LABEL_PUBLIC'] = 'Public';
$LANG['LABEL_PRIVATE'] = 'Private';
$LANG['LABEL_PRIVATE_HIDDEN'] = 'Private (Hidden)';
$LANG['LABEL_PAGE'] = 'page';
$LANG['LABEL_PASSWORD'] = 'Password';
$LANG['LABEL_PASSWORD_AGAIN'] = 'Password (again)';
$LANG['LABEL_PHONE'] = 'Phone';
$LANG['LABEL_POST_INTERNAL_NOTE'] = 'Post Internal Note';
$LANG['LABEL_POST_REPLY']='Post Reply';
$LANG['LABEL_PREFERENCES'] = 'Preferences';
$LANG['LABEL_PRIORITY'] = 'Priority';
$LANG['LABEL_PRIMARY_OUTGOING_EMAIL'] = 'Primary Outgoing Email';
$LANG['LABEL_PREMADE_REPLIES'] = 'Premade Replies';
// Label Q
$LANG['LABEL_QUERY'] = 'Query';
$LANG['LABEL_QUERY_RETURNED_ZERO_RESULT'] = 'Query returned 0 results';
// Label R
$LANG['LABEL_RE_ASSIGN_TICKET'] = 'Re Assign to Staff';
$LANG['LABEL_REOPEN'] = 'Reopen';
$LANG['LABEL_REOPEN_TICKET'] = 'Reopen Ticket';
$LANG['LABEL_RESET'] = 'Reset';
$LANG['LABEL_RESULTS_PER_PAGE'] = 'Results Per Page';
$LANG['LABEL_REPLY_TITLE'] = 'Reply Title';
// Label S
$LANG['LABEL_SEARCH'] = 'Search';
$LANG['LABEL_SEARCH_FOR'] = 'Search for';
$LANG['LABEL_SELECT'] = 'Select';
$LANG['LABEL_SELECT_DEPARTMENT'] = 'Select Department';
$LANG['LABEL_SELECT_MANAGER_OPTIONAL'] = 'Select Manager (optional)';
$LANG['LABEL_SELECT_ONE_TOPIC'] = 'Select One';
$LANG['LABEL_SELECT_ONE_EMAIL'] = 'Select One';
$LANG['LABEL_SELECT_PRIORITY'] = 'Select Priority';
$LANG['LABEL_SELECT_SOURCE'] = 'Select Source';
$LANG['LABEL_SELECT_TEMPLATE'] = 'Select Template';
$LANG['LABEL_SETTINGS'] = 'Settings';
$LANG['LABEL_SORT_BY'] = 'Sort by';
$LANG['LABEL_SORT_BY_TITLE'] = 'Sort By Title';
$LANG['LABEL_SORT_BY_UPDATE_DATE'] = 'Sort By Update Date';
$LANG['LABEL_STAFF'] = 'Staff';
$LANG['LABEL_STAFF_MEMBER'] = 'Staff Member';
$LANG['LABEL_STAFF_MEMBERS'] = 'Staff Members';
$LANG['LABEL_STAFF_PANEL'] = 'Staff Panel';
$LANG['LABEL_STAFF_VIEWTICKET_SELECT_ACTION']='Select Action';
$LANG['LABEL_STAFF_VIEWTICKET_CHANGE_PRIORITY']='Change Priority';
$LANG['LABEL_STAFF_VIEWTICKET_MARK_OVERDUE']='Mark Overdue';
$LANG['LABEL_STAFF_VIEWTICKET_RELEASE_UNASSIGN']='Release (unassign)';
$LANG['LABEL_STAFF_VIEWTICKET_CLOSE_TICKET']='Close Ticket';
$LANG['LABEL_STAFF_VIEWTICKET_REOPEN_TICKET']='Reopen Ticket';
$LANG['LABEL_STATUS'] = 'Status';
$LANG['LABEL_STATUS_IS'] = 'Status is';
$LANG['LABEL_SUBJECT'] = 'Subject';
$LANG['LABEL_SUBMIT'] = 'Submit';
$LANG['LABEL_SUBMIT_TICKET'] = 'Submit Ticket';
$LANG['LABEL_SYSTEM_DEFAULT_TEMPLATE'] = 'System Default';
$LANG['LABEL_SYSTEM_LOGS'] = 'System Logs';
$LANG['LABEL_SYSTEM_LOGS_ALL'] = 'All';
$LANG['LABEL_SYSTEM_LOGS_DATESPAN'] = 'Date span';
$LANG['LABEL_SYSTEM_LOGS_DEBUG'] = 'Debug';
$LANG['LABEL_SYSTEM_LOGS_ERRORS'] = 'Errors';
$LANG['LABEL_SYSTEM_LOGS_FROM'] = 'From';
$LANG['LABEL_SYSTEM_LOGS_GO'] = 'Go';
$LANG['LABEL_SYSTEM_LOGS_NO_RESULTS'] = 'Query returned 0 results.';
$LANG['LABEL_SYSTEM_LOGS_TO'] = 'to';
$LANG['LABEL_SYSTEM_LOGS_TYPE'] = 'Type';
$LANG['LABEL_SYSTEM_LOGS_WARNINGS'] = 'Warnings';
$LANG['LABEL_SYSTEM_PREFERENCES_AND_SETTINGS'] = 'System Preferences and Settings';
$LANG["LABEL_SYSTEM_SETTINGS"] = 'System Settings';
// Label T
$LANG['LABEL_TELEPHONE'] = 'Telephone';
$LANG['LABEL_TICKET'] = 'Ticket';
$LANG['LABEL_TICKET_ID'] = 'Ticket ID';
$LANG['LABEL_TICKET_NUMBER'] = 'Ticket#';
$LANG['LABEL_TICKET_STATUS'] = 'Ticket Status';
$LANG['LABEL_TO'] = 'To.';
$LANG['LABEL_TOGGLE'] = 'Toggle';
$LANG['LABEL_TRANSFER'] = 'Transfer';
$LANG['LABEL_TYPE'] = 'Type';
// Label U
$LANG['LABEL_UPDATE_DATE'] = 'Last Updated';
$LANG['LABEL_UPDATE_DEPARTMENT'] = 'Update Department';
$LANG['LABEL_USERNAME'] = 'Username';
$LANG['LABEL_USERS'] = 'Users';
// Label V
$LANG['LABEL_VIEW_STATUS'] = 'View Status';

#######
## Generic text for all site, if have to text repeted in
## Client or Staff ends, is prefixed with correct name.
##
// TEXT A
$LANG['TEXT_ACCESS_DENIED']='Access Denied';
$LANG['TEXT_ALL_DEPARTMENTS'] = 'All Departments';
$LANG['TEXT_ANSWERED_STATS'] = 'Tickets Respondidos ({0})';
$LANG['TEXT_ANSWERED_TICKETS'] = 'Answered Tickets';
$LANG['TEXT_AND_STATUS_SET_TO'] = ' and status set to {0}';
$LANG['TEXT_AND_TICKET_STATUS_SET_TO_CLOSED'] = ' & ticket status set to closed';
$LANG['TEXT_ASSIGNED_TICKETS'] = 'Assigned Tickets';
$LANG['TEXT_AUTHENTICATION_REQUIRED']='Authentication Required';
$LANG['TEXT_AUTHENTICATION_REQUIRED_QUESTION']='Authentication Required?';
$LANG['TEXT_ANY_STATUS'] = 'Any status';
$LANG['TEXT_ATTACH_FILE']='Attach File';
// TEXT B
$LANG['TEXT_BOX_NEW_TICKET'] = 'Submit a new support request. Please provide as much detail as possible so we can best assist you. To update a previously submitted ticket, please use the form to the right. A valid email address is required.';
// TEXT C
$LANG['TEXT_CAM_BE_APPENDED_TO_RESPONSES'] = 'can be appended to responses.&nbsp;(available as a choice for public departments)';
$LANG['TEXT_CLOSED_TICKETS'] = 'Closed Tickets';
$LANG['TEXT_CLOSED'] = 'Closed';
$LANG['TEXT_COMMENTS_REASONS_TRANSFER'] = 'Comments/Reasons for the transfer. &nbsp;(<i>Internal note</i>)';
$LANG['TEXT_CREATE_FAILED'] = 'Create Failed ';
// TEXT D
$LANG['TEXT_DEPT_DEPENDS_ON_EMAIL'] = 'Dept depends on email &amp; help topics settings for incoming tickets.';
$LANG['TEXT_DEPT_TRANSFER'] = 'Dept. Transfer';
$LANG['TEXT_DEPT_UPDATED_SUCCESSFULLY'] = 'Dept updated successfully';
// TEXT E
$LANG['TEXT_EMAIL_ADDED_TO_BANLIST'] = 'Email ({0}) added to banlist';
$LANG['TEXT_EMAIL_ADDRESS_USED_SEND_AUTO_RESPONSES'] = 'Email address used to send auto-responses, if enabled.';
$LANG['TEXT_EMAIL_REMOVED_FROM_BANLIST'] = 'Email removed from banlist';
$LANG['TEXT_ENTER_MESSAGE']='Enter Message';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS']='Excessive login attempts';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Excessive login attempts (client)';
// TEXT F
$LANG['TEXT_FILE_REJECTED'] = 'File [ {0} ] rejected';
$LANG['TEXT_FILE_IS_TOO_BIG'] = 'File is too big. Max {0} bytes allowed';
$LANG['TEXT_FORGOT_YOUR_LOGIN_INFO']='Forgot your login info? Please <a href="open.php">open a new ticket</a>.';
// TEXT G
$LANG['TEXT_GENERAL_INQUIRY'] = 'General Inquiry';
$LANG['TEXT_GLOBAL_AUTO_RESPONSE_SETTINGS'] = 'Global auto-response settings in preference section must be enabled for Dept \'Enable\' setting to take effect.';
// TEXT H
$LANG['TEXT_HOME'] = 'Home';
$LANG['TEXT_HEADER_TITLE']='osTicket :: Support Ticket System';
$LANG['TEXT_HELPDESK_STAFF_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Staff\'s max Idle time in minutes. Enter 0 to disable timeout</i>)';
$LANG['TEXT_HELPDESK_CLIENT_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Client\'s max Idle time in minutes. Enter 0 to disable timeout</i>)';
$LANG['TEXT_HELPDESK_ENABLE_CRON_CALL_ON_STAFF_ACTIVITY'] = 'Enable cron call on staff\'s activity';
// TEXT I
$LANG['TEXT_INTERNAL_NOTE_POSTED'] = 'Internal note posted';
$LANG['TEXT_INVALID_LOGIN'] = 'Invalid login';
$LANG['TEXT_INVALID_FILE_TYPE'] = 'Invalid file type [ {0} ]';
// TEXT J
// TEXT K
// TEXT L
$LANG['TEXT_LOGIN_VIEW_STATUS_OF_TICKET']='To view the status of a ticket, provide us with your login details below.<br/>'.
        'If this is your first time contacting us or you\'ve lost the ticket ID, please <a href="open.php">click here</a> to open a new ticket.';
$LANG['TEXT_LOG_OUT'] = 'Log Out';
// TEXT M
$LANG['TEXT_MY_TICKETS'] = 'My Tickets';
$LANG['TEXT_MY_TICKETS_STATS'] = 'My Tickets ({0})';
$LANG['TEXT_MY_ACCOUNT'] = 'My Account';
// TEXT N
$LANG['TEXT_NEW_TICKET'] = 'New Ticket';
$LANG['TEXT_NOT_THIS_USER'] = 'I am not this user';
$LANG['TEXT_NEW_TICKET_AUTO_RESPONSE'] = 'An email with the ticket number has been sent to <b>{0}</b>.You\'ll need the ticket number along with your email to view status and progress online.<br><br>If you wish to send additional comments or information regarding same issue, please follow the instructions on the email.';
$LANG['TEXT_NO_TICKETS_FOUND']='NO tickets found.';
// TEXT O
$LANG['TEXT_OPEN_NEW_TICKET'] = 'Open new Ticket';
$LANG['TEXT_OPEN_PREVIOUS_TICKET'] = 'Check status of previously opened ticket. we provide archives and history of all your support requests complete with responses.';
$LANG['TEXT_OPEN_TICKETS'] = 'Open Tickets';
$LANG['TEXT_OPEN'] = 'Open';
$LANG['TEXT_OVERDUE_STATS'] = 'Overdue ({0})';
$LANG['TEXT_OVERDUE_TICKETS'] = 'Overdue Tickets';
$LANG['TEXT_OVERDUE'] = 'Overdue';
$LANG['TEXT_OFFLINE']='Thank you for your interest in contacting us.<br>'.
         'Our helpdesk is offline at the moment, please check back at a later time.';
$LANG['TEXT_OFFLINE_MODE_WILL_DISABLE_CLIENT'] = 'Offline mode will disable client interface and <b>only</b>'.
         ' allow <b>super admins</b> to login to Staff Control Panel';
$LANG['TEXT_OF_SELECTED_TICKETS_REOPENED'] = "{0} of {1} selected tickets reopened";
$LANG['TEXT_OF_SELECTED_TICKETS_CLOSED'] = "{0} of {1} selected tickets closed";
$LANG['TEXT_OF_SELECTED_TICKETS_MARKED_OVERDUE'] = "{0} of {1} selected tickets marked overdue";
$LANG['TEXT_OF_SELECTED_TICKETS_DELETED'] = "{0} of {1} selected tickets deleted";
// TEXT P
$LANG['TEXT_POST_REPLY']='Post Reply';
$LANG['TEXT_PLEASE_FILL_STAFF_FORM_BELOW_OPEN_NEW_TICKET'] = 'Please fill in the form below to open a new ticket.';
$LANG['TEXT_PLEASE_FILL_FORM_NEW_TICKET'] = 'Please fill in the form below to open a new ticket.';
$LANG['TEXT_PLEASE_TAKE_A_MINUTE_TO_DELETE_INSTALL'] = 'Please take a minute to delete <strong>setup/install</strong> directory for security reasons.';
$LANG['TEXT_PRIORITY_CHANGED_SUCCESSFULLY'] = 'Priority Changed Successfully';
// TEXT Q
// TEXT R
$LANG['TEXT_REFRESH']='Refresh';
$LANG['TEXT_REQUIRED_WHEN_DEPT_IS_PUBLIC'] = 'Required when Dept is public';
$LANG['TEXT_RESPONSE_POSTED_SUCCESSFULLY'] = 'Response Posted Successfully';
// TEXT S
$LANG['TEXT_SELECT_DEPARTMENTS_GROUP_MEMBERS'] = 'Select departments group members are allowed to access in addition to thier own department.';
$LANG['TEXT_SELECT_PREMADE_REPLY'] = 'Select a premade reply';
$LANG['TEXT_SELECT_STAFF_MEMBER'] = '-Select Staff Member.-';
$LANG['TEXT_SELECT_TARGET_DEPT'] = '-Select Target Dept-';
$LANG['TEXT_SESSION_TIMED_OUT_DUE_TO_INACTIVITY']='Session timed out due to inactivity';
$LANG['TEXT_SORT_BY_CATEGORY'] = 'Sort By Category';
$LANG['TEXT_SORT_BY_DATE']='Sort By Date';
$LANG['TEXT_SORT_BY_DEPARTMENT']='Sort By Department';
$LANG['TEXT_SORT_BY_TICKET_ID']='Sort By Ticket ID';
$LANG['TEXT_SORT_BY_PRIORITY'] = 'Ordenar pela Prioridade';
$LANG['TEXT_SHOW_FROM_TO_OF_ALL'] = 'Showing {0} - {1} of {2}';
$LANG['TEXT_SHOW_ZERO'] = 'Showing 0 (zero)';
$LANG['TEXT_SEARCH_RESULTS'] = 'Search Results';
$LANG['TEXT_SYSTEM_IS_OFF_LINE'] = '<strong>System is set to offline mode</strong> - Client interface is disabled and ONLY admins can access staff control panel.';
$LANG['TEXT_SUPPORT_TEAM'] = 'Support Tean';
$LANG['TEXT_SUPPORT_TICKET_SISTEM'] = '<span>SUPPORT TICKET</span> SYSTEM';
$LANG['TEXT_SUPPORT_CENTER'] = 'Support Center';
// TEXT T
$LANG['TEXT_TOTAL_OPEN_TICKETS'] = "Open ({0})";
$LANG['TEXT_TOTAL_ANSWERED_TICKETS'] = "Answered ({0})";
$LANG['TEXT_TOTAL_MY_TICKETS'] = 'My Tickets ({0})';
$LANG['TEXT_TICKET_ASSIGNED_TO_STAFF'] = 'Ticket Assigned to {0}';
$LANG['TEXT_TICKET_CREATED'] = 'Support ticket request created';
$LANG['TEXT_TICKET_CREATED_SUCCESSFULLY'] = 'Ticket created successfully';
$LANG['TEXT_TICKET_DELETED_FOREVER'] = 'Ticket Deleted Forever';
$LANG['TEXT_TICKET_FLAGGED_AS_OVERDUE'] = 'Ticket flagged as overdue';
$LANG['TEXT_TICKET_NUM_STATUS_SET_CLOSED'] = 'Ticket #{0} status set to CLOSED';
$LANG['TEXT_TICKET_NUMBER'] = 'Ticket #';
$LANG['TEXT_TICKET_STATUS'] = 'Ticket Status';
$LANG['TEXT_TICKET_STATUS_CHANGED_TO'] = 'Ticket status changed to {0}';
$LANG['TEXT_TICKET_STATUS_SET_TO_OPEN'] = 'Ticket status set to OPEN';
$LANG['TEXT_TICKET_THREAD'] = 'Ticket Thread';
$LANG['TEXT_TICKET_TRANSFERED_SUCESSFULLY_TO_DEPT'] = 'Ticket transfered sucessfully to {0} Dept.';
$LANG['TEXT_TICKET_UPDATED_SUCCESSFULLY'] = 'Ticket updated successfully';
$LANG['TEXT_TICKET_WILL_REOPEN_NEW_POST']='Ticket will be reopened on message post';
$LANG['TEXT_TICKETS_STATUS'] = 'Tickets Status';
$LANG['TEXT_THANKS_NEW_TICKET'] = 'Thank you for contacting us.<br>A support ticket request has been created and a representative will be getting back to you shortly if necessary.';
// TEXT U
$LANG['TEXT_UNABLE_CREATE_TICKET'] = 'Unable to create a ticket. Please correct errors below and try again!';
$LANG['TEXT_UPDATE_TICKET'] = 'Update Ticket #{0}';
$LANG['TEXT_USED_FOR_OUTGOING_EMAILS'] = 'Used for outgoing emails,alerts and notices to user and staff.';
// TEXT V
$LANG['TEXT_VIEW_OPEN']='View Open';
$LANG['TEXT_VIEW_CLOSED']='View Closed';
$LANG['TEXT_VIEW_TICKET'] = 'View Ticket';
$LANG['TEXT_VISIBLE_TO_CLIENT'] = 'Visible to client/customer.';
// TEXT X
// TEXT Y
$LANG['TEXT_YOUVE_REACHED_MAXIMUM_FAILED_LOGIN_ATTEMPTS_ALLOWED']='You\'ve reached maximum failed login attempts allowed.';
// TEXT W
$LANG['TEXT_WELCOME_BACK_VACATION']= 'Welcome back! You are listed as \'on vacation\' Please let admin or your manager know that you are back.';
$LANG['TEXT_WELCOME_BACK_CLIENT'] = 'Welcome back, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_STAFF'] = 'Welcome back, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_TITLE'] = 'Welcome to the support center.';
$LANG['TEXT_WELCOME_MSG'] = 'In order to streamline support requests and better serve you, we utilize a support ticket system. Every support request is assigned a unique ticket number which you can use to track the progress and responses online. For your reference we provide complete archives and history of all your support requests.';
$LANG['TEXT_WELCOME_BACK'] = 'Welcome back';

########
## Titles on pages and web pages
##
$LANG['TITLE'] = 'Tickets FullService';
$LANG['TITLE_BOX_NEW_TICKET'] = 'New Ticket';
$LANG['TITLE_BAR_OFFLINE'] = 'Support Ticket System';
$LANG['TITLE_MY_PREFERENCES'] = 'My Preferences';
$LANG['TITLE_OFFLINE'] = 'Support Ticket System Offline';
$LANG['TITLE_OPEN_PREVIOUS_TICKET'] = 'Open Previous Ticket';
$LANG['TITLE_CLOSED_TICKETS'] = 'Closed Tickets';
?>

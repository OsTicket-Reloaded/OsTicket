<?php

#Disable direct access.
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename( __FILE__ ))) die ('kwaheri rafiki!');

$LANG = array ();

# Language identification in iso-639
$LANG['LANGUAGE'] = 'sv';
//Word Name (english name)
$LANG['LANGUAGE_NAME'] = 'Swedish';
//Native name of language (in the original language)
$LANG['LANGUAGE_NATIVE_NAME'] = 'Svenska';
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
## Error Messages
##
$LANG['ERROR_ACCESS_DENIED_INVALID_TICKET'] = 'Åtkomst nekas. Kontrollera så ärende-ID stämmer';
$LANG['ERROR_EMAIL_PARSE_FAILED'] = 'Kunde inte läsa epostadressen';
$LANG['ERROR_FILE_REJECTED'] = 'Filen {0} godkändes inte!';
$LANG['ERROR_INVALID_FROM_ADDRESS'] = 'Fel i avsändaradressen';
$LANG['ERROR_INVALID_FILE_TYPE'] = 'Otillåten filtyp';
$LANG['ERROR_MESSAGE_REQUIRED'] = 'Ett meddelande måste vara ifyllt';
$LANG['ERROR_NAME_REQUIRED'] = 'Namn måste vara ifyllt';
$LANG['ERROR_OCCURED'] = 'Fel inträffade. Försök igen';
$LANG['ERROR_OCCURED_TRY_AGAIN'] = 'Fel inträffade. försök igen';
$LANG['ERROR_POSSIBLY_INVALID_TICKET'] = 'Åtkomst nekas. Kontrollera så ärende-ID stämmer';
$LANG['ERROR_SERVICES_NOT_AVAILABLE'] = 'Tjänsten är inte tillgänglig!';
$LANG['ERROR_SECURITY_REPEAT_RESULT_LOCK'] = 'Säkerhetsöverträdelse. Upprepade överträdelser kommer resultera i att kontot stängs av.';
$LANG['ERROR_SECURITY_VIOLATION_YOUR_ACCOUNT_WILL_LOCKED'] = 'Säkerhetsöverträdelse. Upprepade överträdelser kommer resultera i att kontot stängs av';
$LANG['ERROR_UNABLE_SEND_MESSAGE_TRY_AGAIN'] = 'Kunde inte skicka meddelande, försök igen.';
$LANG['ERROR_UNABLE_TO_POST_THE_RESPONSE']='Kunde inte skicka svaret';
$LANG['ERROR_UNKNOW_ACTION'] = 'Okänd aktion';
$LANG['ERROR_UNABLE_TO_POST_MESSAGE'] = 'Kunde inte skicka meddelande, försök igen.';
$LANG['ERROR_UKNOW_ACTION'] = 'Unknown action';
$LANG['ERROR_YOU_HAVE_REACHED_MAXIMUM_FAILED_LOGIN']='Du har nått maximala antalet tillåtna inloggningsförsök. Vänta 5 minuter och försök igen';
$LANG['ERROR_YOU_MUST_CHANGE_PASSWORD'] = 'Du måste ändra ditt lösenord för att gå vidare';
$LANG['ERROR_SEARCH_TERM_MORE_3']='Söktermen måste vara länge än 3 tecken';

#######
## Images for Staff and Clients Ends
##
## relative path of images in "translate/".$LANG['LANGUAGE']."/"
##
$LANG['IMAGE_CLIENT_VIEW_OPEN'] = 'client/view_open.gif';
$LANG['IMAGE_CLIENT_VIEW_CLOSED'] = 'client/view_closed.gif';
$LANG['IMAGE_CLIENT_REFRESH'] = 'client/refresh.gif';
$LANG['IMAGE_STAFF_VIEW_OPEN'] = 'staff/view_open.gif';
$LANG['IMAGE_STAFF_VIEW_CLOSED'] = 'staff/view_closed.gif';
$LANG['IMAGE_STAFF_REFRESH'] = 'staff/refresh.gif';

#######
## Labels for Buttons, Headers on Tables, Selections, Link Texts and others
##
// Label A
$LANG['LABEL_ACTIVE_IN_PARENTESIS'] = '(Aktiv)'; 
$LANG['LABEL_ADD_NEW_DEPT'] = 'Lägg till ny avdelning.';
$LANG['LABEL_ADMIN_DASHBOARD'] = 'Adminpanel';
$LANG['LABEL_ADMIN_PANEL'] = 'Adminpanel';
$LANG['LABEL_ADVANCED'] = 'Avancerat';
$LANG['LABEL_APPEND'] = 'Lägg till';
$LANG['LABEL_APPEND_SIGNATURE'] = 'Lägg till signatur';
$LANG['LABEL_ALL'] = 'Alla';
$LANG['LABEL_ALL_DEPARTMENTS'] = 'Alla avdelningar';
$LANG['LABEL_API'] = 'API';
$LANG['LABEL_ASSIGN'] = 'Tilldela';
$LANG['LABEL_ASSIGN_TO_STAFF'] = 'Tilldela till personal';
$LANG['LABEl_ASSIGNED_TICKETS'] = 'Tilldelade ärenden';
$LANG['LABEL_ASC'] = 'ASC';
$LANG['LABEL_ASCENDING'] = 'Stigande';
$LANG['LABEL_ATTACHMENT'] = 'Bifogad fil';
$LANG['LABEL_ATTACHMENTS'] = 'Bifogade filer';
$LANG['LABEL_AUTO_RESPONSE_EMAIL'] = 'Autosvar';
$LANG['LABEL_AUTORESPONDERS'] = 'Autoresponders';
$LANG['LABEL_AUTORESP'] = 'Autosvar';
// Label B
$LANG['LABEL_BASIC'] = 'Grund';
// Label C
$LANG['LABEL_CLOSE'] = 'Stäng';
$LANG['LABEL_CLOSED'] = 'Stängd';
$LANG['LABEL_CLOSE_TICKET'] = 'Stängt ärende';
$LANG['LABEL_CLOSED_TICKETS'] = 'Stängda ärenden';
$LANG['LABEL_CANCEL'] = 'Avbryt';
$LANG['LABEL_CANNED_RESPONSE'] = 'Canned Response';
$LANG['LABEL_CATEGORY'] = 'Kategori';
$LANG['LABEL_CATEGORY_DEPT'] = 'Kategori/Avdelning';
$LANG['LABEL_CHANGE_PASSWORD'] = 'Ändra lösenord';
$LANG['LABEL_CHECK_STATUS'] = 'Kontrollera status';
$LANG['LABEL_Closed'] = 'Stängd';
$LANG['LABEL_CREATE_DATE'] = 'Skapardatum';
// Label D
$LANG['LABEL_DASHBOARD'] = 'Kontrollpanel';
$LANG['LABEL_DATE'] = 'Datum';
$LANG['LABEL_DATE_AND_TIME_FORMAT'] = 'Datum och tidsformat';
$LANG['LABEL_DATE_FORMAT'] = 'Datumformat';
$LANG['LABEL_DATE_SPAN'] = 'Datumspann';
$LANG['LABEL_DAY_DATE_AND_TIME_FORMAT'] = 'Dag, Datum och Tidsformat';
$LANG['LABEL_DAYLIGHT_SAVING'] = 'Sommartid';
$LANG['LABEL_DEFAULT'] = 'Standard';
$LANG['LABEL_DEFAULT_TIME_ZONE'] = 'Tidszon';
$LANG['LABEL_DELETE'] = 'Ta bort';
$LANG['LABEL_DELETE_DEPT_S'] = 'Ta bort avdelning(ar)';
$LANG['LABEL_DEPARTMENT'] = 'Avdelning';
$LANG['LABEL_DEPARTMENTS'] = 'Avdelningar';
$LANG['LABEL_DEPT_MANAGER'] = 'Avdelningsföreståndare';
$LANG['LABEL_DEPT_MANAGER_NONE'] = 'Ingen';
$LANG['LABEL_DEPT'] = 'Avd.';
$LANG['LABEL_DEPT_ACCESS'] = 'Tillträde, avdelning';
$LANG['LABEL_DEPT_NAME'] = 'Namn på avdelning';
$LANG['LABEL_DEPT_EMAIL'] = 'Epost till avdelning';
$LANG['LABEL_DEPT_EMAIL_ABOVE'] = 'Epost till avdelning (ovan)';
$LANG['LABEL_DEPT_SIGNATURE'] = 'Avdelningens signatur';
$LANG['LABEL_DEPT_TYPE'] = 'Typ av avdelning';
$LANG['LABEL_DESC'] = 'DESC';
$LANG['LABEL_DESCENDING'] = 'Fallande';
$LANG['LABEL_DISABLED_IN_PARENTESIS'] = '(avaktiverad)';
$LANG['LABEL_DIRECTORY'] = 'Katalog';
$LANG['LABEL_DIRECTORY_STAFF'] = 'Personalkatalog';
// Label E
$LANG['LABEL_EMAIL'] = 'E-post';
$LANG['LABEL_EMAILS'] = 'E-post';
$LANG['LABEL_EMAILS_SETTINGS'] = 'Inställningar epost';
$LANG['LABEL_EMAIL_ADDRESS'] = 'Epostadress';
$LANG['LABEL_EMAIL_TEMPLATES'] = 'Epostmallar';
$LANG['LABEL_ENABLE_SYSTEM_OFF_LINE'] = 'Aktivera';
$LANG['LABEL_ENTER_NOTE_CONTENT'] = 'Skriv in meddelandets innehåll.';
// Label F
$LANG['LABEL_FROM'] = 'Från.';
$LANG['LABEL_FULL_NAME'] = 'För och efternamn';
// Label G
$LANG['LABEL_GENERAL_SETTINGS'] = 'Generella inställningar';
$LANG['LABEL_GO'] = 'Gå';
// Label H
$LANG['LABEL_HELP_TOPIC'] = 'Gällande';
$LANG['LABEL_HELP_TOPICS'] = 'Gällande';
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
$LANG['LABEL_ISSUE_SUMMARY'] = 'Problemsammanfattning';
// Label J

// Label K
$LANG['LABEL_KNOWLEDGE_BASE'] = 'Hjälpsidor';
$LANG['LABEL_KNOWLEDGE_BASE_PREMATE'] = 'Knowledge Base: Premade';
// Label L
$LANG['LABEL_LOG_OUT'] = 'Logga ut';
$LANG['LABEL_LAST_UPDATED'] = 'Senast uppdaterad';
// Label M
$LANG['LABEL_MAKE_PUBLIC'] = 'Gör till publik';
$LANG['LABEL_MAKE_PRIVATE'] = 'Gör till privat';
$LANG['LABEL_MANAGER'] = 'Manager';
$LANG['LABEL_MESSAGE'] = 'Meddelande';
$LANG['LABEL_MONTHS'] = 'Månader';
$LANG['LABEL_MONTH'] = 'Månad';
$LANG['LABEL_MY_ACCOUNT'] = 'Mitt konto';
$LANG['LABEL_MY_PREFERENCE'] = 'Mina inställningar';
$LANG['LABEL_MY_PROFILE'] = 'Min Profil';
$LANG['LABEL_MY_SIGNATURE'] = 'Min signatur';
// Label N
$LANG['LABEL_NAME'] = 'Namn';
$LANG['LABEL_NEW_DEPARTMENT'] = 'Ny avdelning';
$LANG['LABEL_NEW_MESSAGE'] = 'Nytt meddelande';
$LANG['LABEL_NEW_PREMADE_REPLY'] = 'Nytt förskrivet svar';
$LANG['LABEL_NEW_TICKET'] = 'Nytt ärende';
$LANG['LABEL_NEW_TICKET_PRIORITY'] = 'Prioritet på nytt ärende';
$LANG['LABEL_NO_MANAGER_ADD_USERS'] = 'Inga användare (Lägg till användare)';
$LANG['LABEL_NONE'] = 'None';
$LANG['LABEL_NOTE_TITLE'] = 'Rubrik på meddelande';
// Label O
$LANG['LABEL_OPEN'] = 'Öppna';
$LANG['LABEL_OPEN_TICKET'] = 'Öppna ärende';
$LANG['LABEL_OPEN_NEW_TICKET'] = 'Öppna nytt ärende';
$LANG['LABEL_OTHER'] = 'Annan';
$LANG['LABEL_OUTGOING_EMAIL'] = 'utgående epost';
$LANG['LABEL_OVERDUE'] = 'Försenat';
// Label P
$LANG['LABEL_PREFERENCES'] = 'Inställningar';
$LANG['LABEL_PUBLIC'] = 'Publik';
$LANG['LABEL_PRIVATE'] = 'Privat';
$LANG['LABEL_PRIVATE_HIDDEN'] = 'Privat (gömd)';
$LANG['LABEL_PAGE'] = 'sida';
$LANG['LABEL_PASSWORD'] = 'Password';
$LANG['LABEL_PASSWORD_AGAIN'] = 'Lösenord (igen)';
$LANG['LABEL_PHONE'] = 'Telefon';
$LANG['LABEL_POST_INTERNAL_NOTE'] = 'Skicka internt meddelande';
$LANG['LABEL_POST_REPLY']='Skicka svar';
$LANG['LABEL_PREFERENCES'] = 'Inställningar';
$LANG['LABEL_PRIORITY'] = 'Prioritet';
$LANG['LABEL_PRIMARY_OUTGOING_EMAIL'] = 'Primär utgående epost';
$LANG['LABEL_PREMADE_REPLIES'] = 'Förskrivna svar';
// Label Q
$LANG['LABEL_QUERY'] = 'Sökning';
$LANG['LABEL_QUERY_RETURNED_ZERO_RESULT'] = 'Sökningen gav 0 resultat';
// Label R
$LANG['LABEL_RE_ASSIGN_TICKET'] = 'Tilldela till personalen igen';
$LANG['LABEL_REOPEN'] = 'Återöppna';
$LANG['LABEL_REOPEN_TICKET'] = 'Återöppna ärende';
$LANG['LABEL_RESET'] = 'Återställ';
$LANG['LABEL_RESULTS_PER_PAGE'] = 'Resultat per sida';
$LANG['LABEL_REPLY_TITLE'] = 'Rubrik på svar';
// Label S
$LANG['LABEL_SEARCH'] = 'Sök';
$LANG['LABEL_SEARCH_FOR'] = 'Sök efter';
$LANG['LABEL_SELECT'] = 'Välj';
$LANG['LABEL_SELECT_DEPARTMENT'] = 'Välj avdelning';
$LANG['LABEL_SELECT_MANAGER_OPTIONAL'] = 'Välj manager (optional)';
$LANG['LABEL_SELECT_ONE_TOPIC'] = 'Vält ett';
$LANG['LABEL_SELECT_ONE_EMAIL'] = 'Välj en';
$LANG['LABEL_SELECT_PRIORITY'] = 'Välj prioritet';
$LANG['LABEL_SELECT_SOURCE'] = 'Välj källa';
$LANG['LABEL_SELECT_TEMPLATE'] = 'Välj mall';
$LANG['LABEL_SETTINGS'] = 'Inställningar';
$LANG['LABEL_SORT_BY'] = 'Sortera efter';
$LANG['LABEL_SORT_BY_TITLE'] = 'Sortera efter titel';
$LANG['LABEL_SORT_BY_UPDATE_DATE'] = 'Sortera efter uppdateringsdatum';
$LANG['LABEL_STAFF'] = 'Personal';
$LANG['LABEL_STAFF_MEMBER'] = 'Medlem';
$LANG['LABEL_STAFF_MEMBERS'] = 'Medlemmar i personalen';
$LANG['LABEL_STAFF_PANEL'] = 'Personalpanel';
$LANG['LABEL_STATUS'] = 'Status';
$LANG['LABEL_STATUS_IS'] = 'Status är';
$LANG['LABEL_SUBJECT'] = 'Ämne';
$LANG['LABEL_SUBMIT'] = 'Skicka';
$LANG['LABEL_SUBMIT_TICKET'] = 'Skicka ärende';
$LANG['LABEL_SYSTEM_DEFAULT_TEMPLATE'] = 'System Default';
$LANG['LABEL_SYSTEM_LOGS'] = 'Systemloggar';
$LANG['LABEL_SYSTEM_LOGS_DATESPAN'] = 'Datumspann';
$LANG['LABEL_SYSTEM_LOGS_FROM'] = 'Från';
$LANG['LABEL_SYSTEM_LOGS_TO'] = 'Till';
$LANG['LABEL_SYSTEM_LOGS_TYPE'] = 'Typ';
$LANG['LABEL_SYSTEM_LOGS_ALL'] = 'Alla loggar';
$LANG['LABEL_SYSTEM_LOGS_ERRORS'] = 'Fel loggar';
$LANG['LABEL_SYSTEM_LOGS_WARNINGS'] = 'Varnings loggar';
$LANG['LABEL_SYSTEM_LOGS_DEBUG'] = 'Debug loggar';
$LANG['LABEL_SYSTEM_LOGS_GO'] = 'Visa';
$LANG['LABEL_SYSTEM_PREFERENCES_AND_SETTINGS'] = 'Systeminställningar och system';
$LANG["LABEL_SYSTEM_SETTINGS"] = 'Systeminstäällningar';
// Label T
$LANG['LABEL_TELEPHONE'] = 'Telefon';
$LANG['LABEL_TICKET'] = 'Ärende';
$LANG['LABEL_TICKET_ID'] = 'Ärende-ID';
$LANG['LABEL_TICKET_NUMBER'] = 'Ärende#';
$LANG['LABEL_TICKET_STATUS'] = 'Ärendestatus';
$LANG['LABEL_TICKET_SOURCE'] = 'Kontaktsätt';
$LANG['LABEL_TIME_FORMAT'] = 'Tidsformat';
$LANG['LABEL_TO'] = 'Till.';
$LANG['LABEL_TOGGLE'] = 'Växla';
$LANG['LABEL_TRANSFER'] = 'Överföring';
$LANG['LABEL_TYPE'] = 'Typ';
// Label U
$LANG['LABEL_UPDATE_DATE'] = 'Senast uppdaterad';
$LANG['LABEL_UPDATE_DEPARTMENT'] = 'Uppdatera avdelning';
$LANG['LABEL_USERNAME'] = 'Användarnamn';
$LANG['LABEL_USERS'] = 'Användare';
// Label V
$LANG['LABEL_VIEW_STATUS'] = 'Visa status';

#######
## Generic text for all site, if have to text repeted in
## Client or Staff ends, is prefixed with correct name.
##
// TEXT A
$LANG['TEXT_ACCESS_DENIED']='Tillträde nekas';
$LANG['TEXT_ALL_DEPARTMENTS'] = 'Alla avdelningar';
$LANG['TEXT_ANSWERED_STATS'] = 'Besvarad ärenden ({0})';
$LANG['TEXT_ANSWERED_TICKETS'] = 'Besvarad ärenden';
$LANG['TEXT_AND_STATUS_SET_TO'] = ' och status markerad {0}';
$LANG['TEXT_AND_TICKET_STATUS_SET_TO_CLOSED'] = ' & ärendets status satt till stängd';
$LANG['TEXT_ASSIGNED_TICKETS'] = 'Tilldelade ärenden';
$LANG['TEXT_AUTHENTICATION_REQUIRED']='Inloggning krävs';
$LANG['TEXT_AUTHENTICATION_REQUIRED_QUESTION']='Inloggning krävs?';
$LANG['TEXT_ANY_STATUS'] = 'Alla statusar';
$LANG['TEXT_ATTACH_FILE']='bifoga fil';
// TEXT B
$LANG['TEXT_BOX_NEW_TICKET'] = 'Fyll i text angående ditt ärende. Var så detaljerad som möjligt så blir det lättare för den som skall hjälpa dig. För att uppdadera ett redan påbörjat ärende, använd formuläret till höger. Din e-postadress krävs. ';
// TEXT C
$LANG['TEXT_CAM_BE_APPENDED_TO_RESPONSES'] = 'can be appended to responses.&nbsp;(available as a choice for public departments)';
$LANG['TEXT_CLOSED_TICKETS'] = 'Stängt ärende';
$LANG['TEXT_CLOSED'] = 'Stängd';
$LANG['TEXT_COMMENTS_REASONS_TRANSFER'] = 'Anledning för överföring. &nbsp;(<i>Internal note</i>)';
$LANG['TEXT_CREATE_FAILED'] = 'Kunde inte skapa ';
// TEXT D
$LANG['TEXT_DEPT_DEPENDS_ON_EMAIL'] = 'Dept depends on email &amp; help topics settings for incoming tickets.';
$LANG['TEXT_DEPT_TRANSFER'] = 'Överför avdelning';
$LANG['TEXT_DEPT_UPDATED_SUCCESSFULLY'] = 'Avdelningen uppdaterades';
// TEXT E
$LANG['TEXT_EMAIL_ADDED_TO_BANLIST'] = 'E-postadress ({0}) lades till svartlistan';
$LANG['TEXT_EMAIL_ADDRESS_USED_SEND_AUTO_RESPONSES'] = 'E-posten används för att skicka autosvar, om det är aktiverat';
$LANG['TEXT_EMAIL_REMOVED_FROM_BANLIST'] = 'e-posten togs bort från svartlistan';
$LANG['TEXT_ENTER_MESSAGE']='Skriv meddelande';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS']='För många inloggningsförsök';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='För många inloggningsförsök (client)';
// TEXT F
$LANG['TEXT_FILE_REJECTED'] = 'Filen [ {0} ] kunde inte laddas upp';
$LANG['TEXT_FILE_IS_TOO_BIG'] = 'Filen är för stor. Max {0} bytes är tillåtet';
$LANG['TEXT_FOR_SUPPORTED_PARAMETERS'] = 'för rätta parameter';
$LANG['TEXT_FORGOT_YOUR_LOGIN_INFO']='Forgot your login info? Please <a href="open.php">open a new ticket</a>.';
// TEXT G
$LANG['TEXT_GENERAL_INQUIRY'] = 'General Inquiry';
$LANG['TEXT_GLOBAL_AUTO_RESPONSE_SETTINGS'] = 'Global auto-response settings in preference section must be enabled for Dept \'Enable\' setting to take effect.';
// TEXT H
$LANG['TEXT_HOME'] = 'Startsida';
$LANG['TEXT_HEADER_TITLE']='osTicket :: Support Ticket System';
$LANG['TEXT_HELPDESK_STAFF_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Staff\'s max Idle time in minutes. Enter 0 to disable timeout</i>)';
$LANG['TEXT_HELPDESK_CLIENT_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Client\'s max Idle time in minutes. Enter 0 to disable timeout</i>)';
$LANG['TEXT_HELPDESK_ENABLE_CRON_CALL_ON_STAFF_ACTIVITY'] = 'Enable cron call on staff\'s activity';
// TEXT I
$LANG['TEXT_INTERNAL_NOTE_POSTED'] = 'Intern kommentar postad';
$LANG['TEXT_INVALID_LOGIN'] = 'Inkorrekt login';
$LANG['TEXT_INVALID_FILE_TYPE'] = 'Fel filtyp [ {0} ]';
// TEXT J
// TEXT K
// TEXT L
$LANG['TEXT_LOGIN_VIEW_STATUS_OF_TICKET']='För att visa status på ett ärende, mata in uppgifterna nedan.<br/>'.
        'Om detta är första gången du är här eller om du tappat ditt ärende-ID, <a href="open.php">klicka här</a> för att öppna ett nytt ärende';	
$LANG['TEXT_LOG_OUT'] = 'Log Out';
// TEXT M
$LANG['TEXT_MY_TICKETS'] = 'Mina ärenden';
$LANG['TEXT_MY_TICKETS_STATS'] = 'Mina ärenden ({0})';
$LANG['TEXT_MY_ACCOUNT'] = 'Mitt konto';
// TEXT N
$LANG['TEXT_NEW_TICKET'] = 'Nytt ärende';
$LANG['TEXT_NOT_THIS_USER'] = 'Jag är inte denna användaren';
$LANG['TEXT_NEW_TICKET_AUTO_RESPONSE'] = 'Ett e-postmeddelande med ärendets nummer har skickats till <b>{0}</b>.Du behöver ärendets nummer och din e-postadress för att följa ärendet online..<br><br>Om du vill skicka ytterligare information eller kommentarer angående samma ärende följ instruktionerna i meddelandet.';
$LANG['TEXT_NO_TICKETS_FOUND']='Inga ärenden hittades.';
// TEXT O
$LANG['TEXT_OBSERVE_DAYLIGHT_SAVINGS'] = 'Systemet skall ha överseende med sommartidsskiftningar';
$LANG['TEXT_OPEN_NEW_TICKET'] = 'Öppna nytt ärende';
$LANG['TEXT_OPEN_PREVIOUS_TICKET'] = 'Kontrollera status på ett tidigare öppet ärende. Vi behåller arkiv och historik över alla dina ärenden.';
$LANG['TEXT_OPEN_TICKETS'] = 'Öppna ärenden';
$LANG['TEXT_OPEN'] = 'Öppna';
$LANG['TEXT_OVERDUE_STATS'] = 'Försenade ({0})';
$LANG['TEXT_OVERDUE_TICKETS'] = 'Försenade ärenden';
$LANG['TEXT_OVERDUE'] = 'Försenad';
$LANG['TEXT_OFFLINE']='Tack för att du kontaktar oss.<br>'.
         'Ärendehanteringsystemet är för tillfället avstängt, var vänlig återkom senare.';
$LANG['TEXT_OFFLINE_MODE_WILL_DISABLE_CLIENT'] = 'Offline-läget stänger av klientinterfacet och låter <b>bara</b>'.
         '<b>administratörer</b> logga in till kontrollpanelen';
$LANG['TEXT_OF_SELECTED_TICKETS_REOPENED'] = "{0} av {1} valda ärenden återöppnades";
$LANG['TEXT_OF_SELECTED_TICKETS_CLOSED'] = "{0} av {1} valid ärenden stängdes";
$LANG['TEXT_OF_SELECTED_TICKETS_MARKED_OVERDUE'] = "{0} av {1} valda ärenden markerades som försenade";
$LANG['TEXT_OF_SELECTED_TICKETS_DELETED'] = "{0} av {1} valda ärenden togs bort";
// TEXT P
$LANG['TEXT_POST_REPLY']='Skicka svar';
$LANG['TEXT_PLEASE_FILL_STAFF_FORM_BELOW_OPEN_NEW_TICKET'] = 'Fyll i formuläret nedan för att rapportera ett nytt ärende.';
$LANG['TEXT_PLEASE_FILL_FORM_NEW_TICKET'] = 'Fyll i formuläret nedan för att rapportera ett nytt ärende.';
$LANG['TEXT_PLEASE_TAKE_A_MINUTE_TO_DELETE_INSTALL'] = 'Please take a minute to delete <strong>setup/install</strong> directory for security reasons.';
$LANG['TEXT_PLEASE_REFER_TO'] = 'Besök';
$LANG['TEXT_PHP_MANUAL'] = 'PHP Manualen';
$LANG['TEXT_PRIORITY_CHANGED_SUCCESSFULLY'] = 'Prioriteten ändrades';
// TEXT Q
// TEXT R
$LANG['TEXT_REFRESH']='Uppdatera';
$LANG['TEXT_REQUIRED_WHEN_DEPT_IS_PUBLIC'] = 'Krävs när avdelningen är publik';
$LANG['TEXT_RESPONSE_POSTED_SUCCESSFULLY'] = 'Svar skickades';
// TEXT S
$LANG['TEXT_SELECT_DEPARTMENTS_GROUP_MEMBERS'] = 'Välj avdelningar som gruppmedlemmarna får tillgång till förutom sin egen avdelning.';
$LANG['TEXT_SELECT_PREMADE_REPLY'] = 'Välj förskrivet svar';
$LANG['TEXT_SELECT_STAFF_MEMBER'] = '-Välj medlem i personalen.-';
$LANG['TEXT_SELECT_TARGET_DEPT'] = '-Välj mottagande avdelning-';
$LANG['TEXT_SESSION_TIMED_OUT_DUE_TO_INACTIVITY']='Sessionen fick time-out pga. inaktivitet.';
$LANG['TEXT_SORT_BY_CATEGORY'] = 'Sortera efter kategori';
$LANG['TEXT_SORT_BY_DATE']='Sortera efter datum';
$LANG['TEXT_SORT_BY_DEPARTMENT']='Sortera efter avdelning';
$LANG['TEXT_SORT_BY_TICKET_ID']='Sortera efter ärende-ID ';
$LANG['TEXT_SORT_BY_PRIORITY'] = 'Sortera efter prioritet';
$LANG['TEXT_SHOW_FROM_TO_OF_ALL'] = 'Visar {0} - {1} av {2}';
$LANG['TEXT_SHOW_ZERO'] = 'Visar 0 (noll)';
$LANG['TEXT_SEARCH_RESULTS'] = 'Sökresultat';
$LANG['TEXT_SYSTEM_IS_OFF_LINE'] = '<strong>Ärendehanteringsystemet är offline</strong> - klientinterfacet är avstängt och bara administratörer kan logga in.';
$LANG['TEXT_SUPPORT_TEAM'] = 'Support Team';
$LANG['TEXT_SUPPORT_TICKET_SISTEM'] = '<span>Ärendehanterings</span>system';
$LANG['TEXT_SUPPORT_CENTER'] = 'Hjälpcenter';
// TEXT T
$LANG['TEXT_TOTAL_OPEN_TICKETS'] = "Öppna ({0})";
$LANG['TEXT_TOTAL_ANSWERED_TICKETS'] = "Besvarade ({0})";
$LANG['TEXT_TOTAL_MY_TICKETS'] = 'Mina ärenden ({0})';
$LANG['TEXT_TICKET_ASSIGNED_TO_STAFF'] = 'Ärendet tilldelat {0}';
$LANG['TEXT_TICKET_CREATED'] = 'Ärendet skapades';
$LANG['TEXT_TICKET_CREATED_SUCCESSFULLY'] = 'Ärendet skapades utan problem';
$LANG['TEXT_TICKET_DELETED_FOREVER'] = 'Ärendet är permanent borttaget';
$LANG['TEXT_TICKET_FLAGGED_AS_OVERDUE'] = 'Ärendet har markerats som försenat';
$LANG['TEXT_TICKET_NUM_STATUS_SET_CLOSED'] = 'Ärende nr #{0}s status har ändrats till STÄNGT';
$LANG['TEXT_TICKET_NUMBER'] = 'Ärende nr #';
$LANG['TEXT_TICKET_STATUS'] = 'Ärendets status';
$LANG['TEXT_TICKET_STATUS_CHANGED_TO'] = 'Ärendets status har ändrats till {0}';
$LANG['TEXT_TICKET_STATUS_SET_TO_OPEN'] = 'Ärendets status är ÖPPEN';
$LANG['TEXT_TICKET_THREAD'] = 'Ärendets historik';
$LANG['TEXT_TICKET_TRANSFERED_SUCESSFULLY_TO_DEPT'] = 'Ärendet överfördes till {0}-avdelningen.';
$LANG['TEXT_TICKET_UPDATED_SUCCESSFULLY'] = 'Ärendet uppdaterades';
$LANG['TEXT_TICKET_WILL_REOPEN_NEW_POST']='Ärendet kommer återöppnas vid nytt meddelande';
$LANG['TEXT_TICKETS_STATUS'] = 'Ärendestatus';
$LANG['TEXT_THANKS_NEW_TICKET'] = 'Tack for att du kontaktat oss.<br>Ett ärende har skapats och du kommer bli kontaktad om det är nödvändigt.';
// TEXT U
$LANG['TEXT_UNABLE_CREATE_TICKET'] = 'Kunde into skapa ärendet. Rätta till felen nedan och försök igen!';
$LANG['TEXT_UPDATE_TICKET'] = 'Update Ticket #{0}';
$LANG['TEXT_USED_FOR_OUTGOING_EMAILS'] = 'Används for utgående e-post,varningar och notiser till användare och staff.';
// TEXT V
$LANG['TEXT_VIEW_OPEN']='Visa öppen';
$LANG['TEXT_VIEW_CLOSED']='Visa stängd';
$LANG['TEXT_VIEW_TICKET'] = 'Visa ärende';
$LANG['TEXT_VISIBLE_TO_CLIENT'] = 'Synlig för användarna.';
// TEXT X
// TEXT Y
$LANG['TEXT_YOUVE_REACHED_MAXIMUM_FAILED_LOGIN_ATTEMPTS_ALLOWED']='Du har nått den maximala gränsen för misslyckade inloggningar.';
// TEXT W
$LANG['TEXT_WELCOME_BACK_VACATION']= 'Välkommen tillbaka! Du har autosvaret aktiverat. Var vänlig meddela administratören när du återkommer.';
$LANG['TEXT_WELCOME_BACK_CLIENT'] = 'Välkommen tillbaka, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_STAFF'] = 'Välkommen tillbaka, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_TITLE'] = 'Välkommen till supporten.';
$LANG['TEXT_WELCOME_MSG'] = 'För att ärenden skall hanteras så smidigt som möjligt och servicen bli bättre använder vi ett arendehanterigsystem. Varje ärende får ett unikt id och du kan använda detta för att följa ärendet. Ärendernas historik finns lagrade så att du i efterhand kan söka bland dem. ';
$LANG['TEXT_WELCOME_BACK'] = 'Välkommen tillbaka';

########
## Titles on pages and web pages
##
$LANG['TITLE'] = 'Ärendehanteringsystemet';
$LANG['TITLE_BOX_NEW_TICKET'] = 'Nytt ärende';
$LANG['TITLE_BAR_OFFLINE'] = 'Ärendehanteringssystem';
$LANG['TITLE_MY_PREFERENCES'] = 'Mina inställningar';
$LANG['TITLE_OFFLINE'] = 'Ärendehanteringssystemet är offline';
$LANG['TITLE_OPEN_PREVIOUS_TICKET'] = 'Öppna föregående ärende';
$LANG['TITLE_CLOSED_TICKETS'] = 'Stängda ärenden';
?>

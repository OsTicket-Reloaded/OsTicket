<?php

#Disable direct access.
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename( __FILE__ ))) die ('kwaheri rafiki!');

$LANG = array ();
// name in iso-639
$LANG['LANGUAGE'] = 'fr';
//Word Name (english name)
$LANG['LANGUAGE_NAME'] = 'Français';
//Native name of language (in the original language)
$LANG['LANGUAGE_NATIVE_NAME'] = 'Français';
$LANG['DIRECTION'] = 'ltr';
$LANG['CODEPAGE'] = 'UTF-8';

########
##Alert Messages, normally used with JavaScript dialog box.
##
$LANG['ALERT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT'] = 'Trop d\'essai de connexion par un client'."\n".
                'Email: {0}'."\n".
				'Ticket#: {1}'."\n".
                'IP: {2}'."\n".
				'Time: {3}'."\n\n".
                'Attempts #{4}';

#######
## Error Mensages
##
$LANG['ERROR_ACCESS_DENIED_INVALID_TICKET'] = 'Accès refusé. Mauvais ID de ticket';
$LANG['ERROR_EMAIL_PARSE_FAILED'] = 'Erreur de Trairment de l\'Email';
$LANG['ERROR_FILE_REJECTED'] = 'Fichier {0} rejeté !';
$LANG['ERROR_INVALID_FROM_ADDRESS'] = 'Adresse d\'expédition invalide';
$LANG['ERROR_INVALID_FILE_TYPE'] = 'Type de fichier Ivalide';
$LANG['ERROR_MESSAGE_REQUIRED'] = 'Message requis';
//$LANG['ERROR_INVALID_FROM_ADDRESS']
$LANG['ERROR_NAME_REQUIRED'] = 'Nom requis';
//$LANG['ERROR_MESSAGE_REQUIRED']
$LANG['ERROR_OCCURED'] = 'Des Erreurs sont survenues, veuillez rééssayer';
$LANG['ERROR_OCCURED_TRY_AGAIN'] = 'Des erreurs sont survenues, veuillez rééssayer';
$LANG['ERROR_POSSIBLY_INVALID_TICKET'] = 'Accès refusé. Id de ticket invalide';
//$LANG['ERROR_SEARCH_TERM_MORE_3']
$LANG['ERROR_SECURITY_REPEAT_RESULT_LOCK'] = 'Violation de sécurité. La répétition de violation bloquera votre compte.';
$LANG['ERROR_SECURITY_VIOLATION_YOUR_ACCOUNT_WILL_LOCKED'] = 'Violation de sécurité. La répétition de violation bloquera votre compte.';
$LANG['ERROR_SERVICES_NOT_AVAILABLE'] = 'Service non disponible !';
$LANG['ERROR_UNABLE_SEND_MESSAGE_TRY_AGAIN'] = 'Impossible d\'envoyer le message. Veuillez rééssayer.';
$LANG['ERROR_UNABLE_TO_POST_THE_RESPONSE'] = 'Impossible d\'envoyer la réponse';
$LANG['ERROR_UNABLE_TO_POST_MESSAGE'] = 'Impossible d\'envoyer le message. Veuillez rééssayer';
$LANG['ERROR_UNKNOW_ACTION'] = 'Action inconnue';
$LANG['ERROR_YOU_HAVE_REACHED_MAXIMUM_FAILED_LOGIN'] = 'Vous avez atteind le maximum d\'essai de connexion autorisé. Veuillez rééssayer apres 5 minutes ou <a href="open.php">ouvrez un nouveau ticket</a>';
$LANG['ERROR_YOU_MUST_CHANGE_PASSWORD'] = 'Vous devez changer votre mot de passe pour continuer.';
$LANG['ERROR_SEARCH_TERM_MORE_3'] = 'Le terme de recherche doit contenir au moins 3 charactères';

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
$LANG['LABEL_ACTIVE_IN_PARENTESIS'] = '(Actif)';
$LANG['LABEL_ADD_NEW_DEPT'] = 'Ajouter un Département';
$LANG['LABEL_ADMIN_DASHBOARD'] = 'Dashboard';
$LANG['LABEL_ADMIN_PANEL'] = 'Panneau d\'administration';
$LANG['LABEL_ADVANCED'] = 'Avancé';
$LANG['LABEL_ALL'] = 'Tout';
$LANG['LABEL_ALL_DEPARTMENTS'] = 'Tous les Departments';
$LANG['LABEL_API'] = 'API';
$LANG['LABEL_APPEND'] = 'Ajouter';
$LANG['LABEL_APPEND_SIGNATURE'] = 'Ajouter la Signature'; 
$LANG['LABEL_ASC'] = 'Crois';
$LANG['LABEL_ASCENDING'] = 'Croissant';
$LANG['LABEL_ASSIGN'] = 'Assigner';
$LANG['LABEL_ASSIGN_TO_STAFF'] = 'Assigner à l\'équipe';
$LANG['LABEL_ASSIGNED_TICKETS'] = 'Assiger les tickets';
$LANG['LABEL_ATTACHMENT'] = 'Fichier lié';
$LANG['LABEL_ATTACHMENTS'] = 'Fichiers liés';
$LANG['LABEL_AUTO_RESPONSE_EMAIL'] = 'Email réponse automatique';
$LANG['LABEL_AUTORESPONDERS'] = 'Autorépondeurs';
$LANG['LABEL_AUTORESP'] = 'AutoRép.';
// Label B
$LANG['LABEL_BASIC'] = 'Base';
// Label C
$LANG['LABEL_CLOSE'] = 'Fermer';
$LANG['LABEL_CLOSED'] = 'Fermé';
$LANG['LABEL_CLOSE_TICKET'] = 'Fermer le Ticket';
$LANG['LABEL_CLOSED_TICKETS'] = 'Tickets fermés';
$LANG['LABEL_CANCEL'] = 'Anuler';
$LANG['LABEL_CANNED_RESPONSE'] = 'Réponse';
$LANG['LABEL_CATEGORY'] = 'catégorie';
$LANG['LABEL_CATEGORY_DEPT'] = 'Catégorie/Département';
$LANG['LABEL_CHANGE_PASSWORD'] = 'Changer le mot de passe';
$LANG['LABEL_CHECK_STATUS'] = 'Verifier le status';
$LANG['LABEL_CLOSED'] = 'Fermé';
$LANG['LABEL_CREATE_DATE'] = 'Créer une date';
// Label D
$LANG['LABEL_DASHBOARD'] = 'Panneau des tâches';
$LANG['LABEL_DATE'] = 'Date';
$LANG['LABEL_DATE_SPAN'] = 'Période';
$LANG['LABEL_DEFAULT'] = 'Defaut';
$LANG['LABEL_DELETE'] = 'Supprimer';
$LANG['LABEL_DELETE_DEPT_S'] = 'Supprimer les départements';
$LANG['LABEL_DEPARTMENT'] = 'Département';
$LANG['LABEL_DEPARTMENTS'] = 'Départments';
$LANG['LABEL_DEPT_MANAGER'] = 'Responsable département';
$LANG['LABEL_DEPT_MANAGER_NONE'] = 'Aucun';
$LANG['LABEL_DEPT'] = 'Dép.';
$LANG['LABEL_DEPT_ACCESS'] = 'Accès département';
//$LANG['LABEL_DEPT_TYPE']
$LANG['LABEL_DEPT_NAME'] = 'Nom Département';
$LANG['LABEL_DEPT_EMAIL'] = 'Email Département';
$LANG['LABEL_DEPT_EMAIL_ABOVE'] = 'Email Département (ci dessus)';
$LANG['LABEL_DEPT_SIGNATURE'] = 'Signature département';
$LANG['LABEL_DEPT_TYPE'] = 'Type département';
$LANG['LABEL_DESC'] = 'Déc.';
$LANG['LABEL_DESCENDING'] = 'Décroissant';
$LANG['LABEL_DISABLED_IN_PARENTESIS'] = '(Désactivé)';
$LANG['LABEL_DIRECTORY'] = 'Répertoire';
$LANG['LABEL_DIRECTORY_STAFF'] = 'Répertoire de l\'équipe';
// Label E
$LANG['LABEL_EMAIL'] = 'E-Mail';
$LANG['LABEL_EMAILS'] = 'E-Mails';
$LANG['LABEL_EMAILS_SETTINGS'] = 'Paramètres d\'E-Mails';
$LANG['LABEL_EMAIL_ADDRESS'] = 'Adresse Email';
$LANG['LABEL_EMAIL_TEMPLATES'] = 'Modèles d\'Email';
$LANG['LABEL_ENABLE_SYSTEM_OFF_LINE'] = 'Activé';
$LANG['LABEL_ENTER_NOTE_CONTENT'] = 'Entrer le contenu de la note.';
// Label F
$LANG['LABEL_FROM'] = 'De.';
$LANG['LABEL_FULL_NAME'] = 'Nom complet';
// Label G
$LANG['LABEL_GENERAL_SETTINGS'] = 'Paramètres Generaux';
$LANG['LABEL_GO'] = 'GO';
// Label H
$LANG['LABEL_HELP_TOPIC'] = 'Sujet d\'aide';
$LANG['LABEL_HELP_TOPICS'] = 'Sujets d\'aide';
$LANG['LABEL_HELPDESK_ATTEMPT_ALLOWED_BEFORE_A'] = 'Essai(s) autorisés avant de';
$LANG['LABEL_HELPDESK_BIND_STAFF_SESSION_TO_IP'] = 'Lier la session équipe à l\'IP';
$LANG['LABEL_HELPDESK_CLIENT_EXCESSIVE_LOGINS'] = 'Exces d\'essai de connexion';
$LANG['LABEL_HELPDESK_CLIENT_SESSION_TIMEOUT'] = 'Session cliente dépassée';
$LANG['LABEL_HELPDESK_CLICKABLE_URLS'] = 'URLs cliquables';
$LANG['LABEL_HELPDESK_DEFAULT_DEPARTMENT'] = 'Département par défaut';
$LANG['LABEL_HELPDESK_DEFAULT_EMAIL_TEMPLATES'] = 'Modèle d\'Email par défaut';
$LANG['LABEL_HELPDESK_ENABLE_AUTO_CRON'] = 'Activer l\'Auto Cron';
$LANG['LABEL_HELPDESK_MAKE_URLS_CLICKABLE'] = 'Rendre les URLs cliquables';
$LANG['LABEL_HELPDESK_NAME_TITLE'] = 'Helpdesk Titre';
$LANG['LABEL_HELPDESK_NONE_DISABLE_LOGGER'] = 'Aucun (Logger désactivé)';
$LANG['LABEL_HELPDESK_PENALTY_IN_MINUTES'] = 'mintes de délais (pénalités en minutes)';
$LANG['LABEL_HELPDESK_PURGE_NONE_DISABLE'] = 'Aucun (désactivé)';
$LANG['LABEL_HELPDESK_PURGE_LOGS_AFTER'] = 'Purger les logs après';
$LANG['LABEL_HELPDESK_DEFAULT_PAGE_SIZE'] = 'Taille de la page par défaut';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_DEPARTMENT'] = 'Sélectionnez le département par défaut';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_TEMPLATE'] = 'Sélectionnez le modèle par défaut';
$LANG['LABEL_HELPDESK_STAFF_EXCESSIVE_LOGINS'] = 'Excès de connexion Equipe';
$LANG['LABEL_HELPDESK_STAFF_SESSION_TIMEOUT'] = 'Session équipe dépassée';
$LANG['LABEL_HELPDESK_STATUS'] = 'Helpdesk Status';
$LANG['LABEL_HELPDESK_SYSTEM_LOG_LEVEL'] = 'Niveau de log système';
$LANG['LABEL_HELPDESK_URL'] = 'Helpdesk URL';
// Label I
$LANG['LABEL_ISSUE_SUMMARY'] = 'Description du problème';
// Label J
// Label K
$LANG['LABEL_KNOWLEDGE_BASE'] = 'Mess. prédef';
$LANG['LABEL_KNOWLEDGE_BASE_PREMATE'] = 'Base de connasissance prédéfinie';
// Label L
$LANG['LABEL_LAST_UPDATED'] = 'Dernière mise a jour';
$LANG['LABEL_LOG_OUT'] = 'Déconnexion';
// Label M
$LANG['LABEL_MAKE_PUBLIC'] = 'Rendre public';
$LANG['LABEL_MAKE_PRIVATE'] = 'Rendre privé';
$LANG['LABEL_MANAGER'] = 'Responsable';
$LANG['LABEL_MESSAGE'] = 'Message';
$LANG['LABEL_MONTH'] = 'Mois';
$LANG['LABEL_MONTHS'] = 'Mois';
$LANG['LABEL_MY_ACCOUNT'] = 'Mon compte';
$LANG['LABEL_MY_PREFERENCE'] = 'Mes préférences';
$LANG['LABEL_MY_PROFILE'] = 'Mon profile';
$LANG['LABEL_MY_SIGNATURE'] = 'Ma signature';
// Label N
$LANG['LABEL_NAME'] = 'Nom';
$LANG['LABEL_NEW_DEPARTMENT'] = 'Nouveau département';
$LANG['LABEL_NEW_MESSAGE'] = 'Nouveau Message';
$LANG['LABEL_NEW_PREMADE_REPLY'] = 'Nouvelle réponse prédéfinie';
$LANG['LABEL_NEW_TICKET'] = 'Nouveau Ticket';
$LANG['LABEL_NEW_TICKET_PRIORITY'] = 'Nouvelle priorité de Ticket';
$LANG['LABEL_NO_MANAGER_ADD_USERS'] = 'Pas d\'utilisateur (Ajouter des utilisateurs)';
$LANG['LABEL_NONE'] = 'Aucun';
$LANG['LABEL_NOTE_TITLE'] = 'Titre de la note';
// Label O
$LANG['LABEL_OPEN'] = 'ouvert';
$LANG['LABEL_OPEN_NEW_TICKET'] = 'Ouvrir un nouveau Ticket';
$LANG['LABEL_OPEN_TICKET'] = 'Ticket ouvert';
$LANG['LABEL_OTHER'] = 'Autre';
$LANG['LABEL_OUTGOING_EMAIL'] = 'Email sortant';
$LANG['LABEL_OVERDUE'] = 'Dépassé';
// Label P
$LANG['LABEL_PAGE'] = 'page';
$LANG['LABEL_PASSWORD'] = 'Mot de passe';
$LANG['LABEL_PASSWORD_AGAIN'] = 'Mot de passe (verification)';
$LANG['LABEL_PHONE'] = 'Téléphone';
$LANG['LABEL_POST_INTERNAL_NOTE'] = 'Envoyer une note interne';
$LANG['LABEL_POST_REPLY']='Envoyer une réponse';
$LANG['LABEL_PREFERENCES'] = 'Préférences'; 
$LANG['LABEL_PREMADE_REPLIES'] = 'Réponses prédéfinies';
$LANG['LABEL_PRIMARY_OUTGOING_EMAIL'] = 'Email sortant primaire';
$LANG['LABEL_PRIORITY'] = 'Priorité';
$LANG['LABEL_PRIVATE'] = 'Privé';
$LANG['LABEL_PRIVATE_HIDDEN'] = 'Privé (Masquer)';
$LANG['LABEL_PUBLIC'] = 'Public';
// Label Q
$LANG['LABEL_QUERY'] = 'Requète';
$LANG['LABEL_QUERY_RETURNED_ZERO_RESULT'] = 'La Requète n\'a pas retourné de résultat';
// Label R
$LANG['LABEL_RE_ASSIGN_TICKET'] = 'Réassigner l\'équipe';
$LANG['LABEL_REOPEN'] = 'Réouvrir';
$LANG['LABEL_REOPEN_TICKET'] = 'Réouvrir le Ticket';
$LANG['LABEL_RESET'] = 'Réinitialiser';
$LANG['LABEL_RESULTS_PER_PAGE'] = 'Résultats par page';
$LANG['LABEL_REPLY_TITLE'] = 'Titre de la réponse';
// Label S
$LANG['LABEL_SEARCH'] = 'Recherche';
$LANG['LABEL_SEARCH_FOR'] = 'Recherche pour';
$LANG['LABEL_SELECT'] = 'Selectionner';
$LANG['LABEL_SELECT_DEPARTMENT'] = 'Selectionner Départment';
$LANG['LABEL_SELECT_MANAGER_OPTIONAL'] = 'Selectionner Responsable (optionnel)';
$LANG['LABEL_SELECT_ONE_TOPIC'] = 'Selectionner un';
$LANG['LABEL_SELECT_ONE_EMAIL'] = 'Selectionner un';
$LANG['LABEL_SELECT_PRIORITY'] = 'Selectionner Priorité';
$LANG['LABEL_SELECT_SOURCE'] = 'Selectionner Source';
$LANG['LABEL_SELECT_TEMPLATE'] = 'Selectionner Modèle';
$LANG['LABEL_SETTINGS'] = 'Paramètres';
$LANG['LABEL_SORT_BY'] = 'Trier par';
$LANG['LABEL_SORT_BY_TITLE'] = 'Trier par titre';
$LANG['LABEL_SORT_BY_UPDATE_DATE'] = 'Trier par date de mise à jour';
$LANG['LABEL_STAFF'] = 'Equipe';
$LANG['LABEL_STAFF_MEMBER'] = 'Membre de l\'équipe';
$LANG['LABEL_STAFF_MEMBERS'] = 'Membres de l\'équipe';
$LANG['LABEL_STAFF_PANEL'] = 'Panneau d\'équipe';
$LANG['LABEL_STAFF_VIEWTICKET_SELECT_ACTION']='Selectionner Action';
$LANG['LABEL_STAFF_VIEWTICKET_CHANGE_PRIORITY']='Changer Priorité';
$LANG['LABEL_STAFF_VIEWTICKET_MARK_OVERDUE']='Marquer comme dépassé';
$LANG['LABEL_STAFF_VIEWTICKET_RELEASE_UNASSIGN']='Libérer (désassigner)';
$LANG['LABEL_STAFF_VIEWTICKET_CLOSE_TICKET']='Fermer le Ticket';
$LANG['LABEL_STAFF_VIEWTICKET_REOPEN_TICKET']='Réouvrir le Ticket';
$LANG['LABEL_STATUS'] = 'Status';
$LANG['LABEL_STATUS_IS'] = 'Status est';
$LANG['LABEL_SUBMIT'] = 'Envoyer';
$LANG['LABEL_SUBMIT_TICKET'] = 'Envoyer Ticket';
$LANG['LABEL_SUBJECT'] = 'Sujet';
$LANG['LABEL_SYSTEM_DEFAULT_TEMPLATE'] = 'Système Defaut';
$LANG['LABEL_SYSTEM_LOGS'] = 'Logs Système';
$LANG['LABEL_SYSTEM_LOGS_ALL'] = 'Tout';
$LANG['LABEL_SYSTEM_LOGS_DATESPAN'] = 'Période';
$LANG['LABEL_SYSTEM_LOGS_DEBUG'] = 'Debug';
$LANG['LABEL_SYSTEM_LOGS_ERRORS'] = 'Erreurs';
$LANG['LABEL_SYSTEM_LOGS_FROM'] = 'De';
$LANG['LABEL_SYSTEM_LOGS_GO'] = 'Go';
$LANG['LABEL_SYSTEM_LOGS_NO_RESULTS'] = 'La requète n\'a pas retourné de résultat.';
$LANG['LABEL_SYSTEM_LOGS_TO'] = 'à';
$LANG['LABEL_SYSTEM_LOGS_TYPE'] = 'Type';
$LANG['LABEL_SYSTEM_LOGS_WARNINGS'] = 'Warnings';
$LANG['LABEL_SYSTEM_PREFERENCES_AND_SETTINGS'] = 'Préférences système et paramètres';
$LANG["LABEL_SYSTEM_SETTINGS"] = 'Paramètres système';
// Label T
$LANG['LABEL_TELEPHONE'] = 'Téléphone';
$LANG['LABEL_TICKET'] = 'Ticket';
$LANG['LABEL_TICKET_ID'] = 'ID Ticket';
$LANG['LABEL_TICKET_NUMBER'] = 'Ticket#';
//$LANG['LABEL_TICKET_SOURCE']
$LANG['LABEL_TICKET_STATUS'] = 'Ticket Status';
$LANG['LABEL_TO'] = 'à.';
$LANG['LABEL_TOGGLE'] = 'Inverser';
$LANG['LABEL_TRANSFER'] = 'Transférer';
$LANG['LABEL_TYPE'] = 'Type';
// Label U
$LANG['LABEL_UPDATE_DATE'] = 'Dernière mise à jour';
$LANG['LABEL_UPDATE_DEPARTMENT'] = 'Mettre à jour le département';
$LANG['LABEL_USERNAME'] = 'Identifiant';
$LANG['LABEL_USERS'] = 'Utilisateurs';
// Label V
$LANG['LABEL_VIEW_STATUS'] = 'Voir Status';

#######
## Generic text for all site, if have to text repeted in
## Client or Staff ends, is prefixed with correct name.
##
// TEXT A
$LANG['TEXT_ACCESS_DENIED'] = 'Accès refusé';
$LANG['TEXT_ALL_DEPARTMENTS'] = 'Tous les départements';
$LANG['TEXT_AND_STATUS_SET_TO'] = ' et status défini sur {0}';
$LANG['TEXT_AND_TICKET_STATUS_SET_TO_CLOSED'] = ' &  status ticket fermé';
$LANG['TEXT_ANSWERED_STATS'] = 'Tickets Respondidos ({0})';
$LANG['TEXT_ANSWERED_TICKETS'] = 'Tickets répondus';
$LANG['TEXT_ANY_STATUS'] = 'Any status';
$LANG['TEXT_ASSIGNED_TICKETS'] = 'Tickets assignés';
$LANG['TEXT_ATTACH_FILE'] = 'Fichier attaché';
$LANG['TEXT_AUTHENTICATION_REQUIRED'] = 'Authentication Requise';
$LANG['TEXT_AUTHENTICATION_REQUIRED_QUESTION'] = 'Authentication requise?';
// TEXT B
$LANG['TEXT_BOX_NEW_TICKET'] = 'Envoyer une nouvelle requète. Donnez le plus de détail possible sur votre problème pour que nous puissions vous aider. Pour mêttre à jour un ticket précédemment envoyé, Utilisez le formulaire sur la droite. Une adresse email valide est requise.';
// TEXT C
$LANG['TEXT_CAM_BE_APPENDED_TO_RESPONSES'] = 'peut être ajouté aux réponses.&nbsp;(disponible comme choix pour les départements public)';
$LANG['TEXT_CLOSED_TICKETS'] = 'Tickets Fermés';
$LANG['TEXT_CLOSED'] = 'Fermé';
$LANG['TEXT_COMMENTS_REASONS_TRANSFER'] = 'Commentaire/Raisons du transfert. &nbsp;(<i>Notification interne</i>)';
$LANG['TEXT_CREATE_FAILED'] = 'Erreur lors de la création';
// TEXT D
$LANG['TEXT_DEPT_DEPENDS_ON_EMAIL'] = 'Département dépend email & rubriques d\'aide des paramètres pour les billets entrants.';
$LANG['TEXT_DEPT_TRANSFER'] = 'Transfert de département';
$LANG['TEXT_DEPT_UPDATED_SUCCESSFULLY'] = 'Département mis à jour avec succès';
// TEXT E
$LANG['TEXT_EMAIL_ADDED_TO_BANLIST'] = 'Email ({0}) ajouté à la liste noire';
$LANG['TEXT_EMAIL_ADDRESS_USED_SEND_AUTO_RESPONSES'] = 'Adresse Email utilisée pour envoyer des réponses automatique, si activé.';
$LANG['TEXT_EMAIL_REMOVED_FROM_BANLIST'] = 'Email retirée de la liste noire';
$LANG['TEXT_ENTER_MESSAGE'] = 'Entrer un message';
//$LANG['TEXT_EXCESSIVE_FAILED_LOGIN_ATTEMPTS']
//$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']
// TEXT F  
$LANG['TEXT_FORGOT_YOUR_LOGIN_INFO']='Vous avez oublié vos information de connexion? Veuillez <a href="open.php">ouvrir un nouveau ticket</a>.';
// TEXT G
$LANG['TEXT_GENERAL_INQUIRY'] = 'Renseignements généraux';
$LANG['TEXT_GLOBAL_AUTO_RESPONSE_SETTINGS'] = 'Le paramètre global d\'auto-réponse de la section la préférence doit être activé pour Dept.';
// TEXT H
$LANG['TEXT_HOME'] = 'Accueil'; 
$LANG['TEXT_HELPDESK_STAFF_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Temps maximum d\'inactivité pour l\'équipe en minutes. Entrer 0 pour désactiver le délai</i>)';
$LANG['TEXT_HELPDESK_CLIENT_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Temps maximum d\'inactivité pour  le client en minutes. Entrer 0 pour désactiver le délai</i>)';
$LANG['TEXT_HELPDESK_ENABLE_CRON_CALL_ON_STAFF_ACTIVITY'] = 'Activé les appels programmés avec l\'activité de l\'équipe';
// TEXT I
$LANG['TEXT_INTERNAL_NOTE_POSTED'] = 'Note interne envoyée';
$LANG['TEXT_INVALID_LOGIN'] = 'Identification invalide'; 
// TEXT J
// TEXT K
// TEXT L
$LANG['TEXT_LOGIN_VIEW_STATUS_OF_TICKET']='Pour afficher le status du ticket, veuillez saisir vos informations de connexion ci-dessous.<br/>'.
        'Si c\'est la première fois qui vous nous contactez ou que vous avez perdu l\'ID de votre ticket, veuillez <a href="open.php">cliquer ici</a> pour ouvrir un nouveau ticket.';
$LANG['TEXT_LOG_OUT'] = 'Déconnexion';
// TEXT M
//$LANG['TEXT_MESSAGE_POSTED_SUCCESSFULLY']
$LANG['TEXT_MY_ACCOUNT'] = 'Mon compte';
$LANG['TEXT_MY_TICKETS'] = 'Mes tickets';
$LANG['TEXT_MY_TICKETS_STATS'] = 'Mes tickets ({0})';
// TEXT N
$LANG['TEXT_NEW_TICKET'] = 'Nouveau ticket';
$LANG['TEXT_NEW_TICKET_AUTO_RESPONSE'] = 'Une email avec le ticket vous a été envoyé à <b>{0}</b>. Concervez le numéro de ticket pour voir la progression de la résolution de ce dernier en ligne.<br><br>Si vous désirez envoyer des informations additionnelles par rapport au même problème, veuillez suivre les instructions du mail.';
$LANG['TEXT_NOT_THIS_USER'] = 'Je ne suis pas cet utilisateur';
$LANG['TEXT_NO_TICKETS_FOUND'] = 'Pas de ticket trouvé.';
// TEXT O
$LANG['TEXT_OPEN'] = 'Ouvrir';
$LANG['TEXT_OPEN_NEW_TICKET'] = 'Ouvrir un nouveau ticket';
$LANG['TEXT_OPEN_PREVIOUS_TICKET'] = 'Vérifier l\'état d\'un ticket précédemment ouvert. Nous donnons un historique de toutes vos requètes résolues.';
//$LANG['TEXT_OPEN_STATS']
$LANG['TEXT_OPEN_TICKETS'] = 'des tickets ouverts';
$LANG['TEXT_OF_SELECTED_TICKETS_REOPENED'] = "{0} sur {1} tickets sélectionnés réouverts";
$LANG['TEXT_OF_SELECTED_TICKETS_CLOSED'] = "{0} sur {1} tickets sélectionnés fermés";
$LANG['TEXT_OF_SELECTED_TICKETS_MARKED_OVERDUE'] = "{0} sur {1} tickets sélectionnées marqués comme dépassés";
$LANG['TEXT_OF_SELECTED_TICKETS_DELETED'] = "{0} sur {1} tickets sélectionnés supprimés";
$LANG['TEXT_OFFLINE']='Merci pour l\'intéret que vous nous portez en nous contactant.<br>'.
         'Notre support d\'aide est fermé pour le moment, veuillez réessayer plus tard.';
$LANG['TEXT_OFFLINE_MODE_WILL_DISABLE_CLIENT'] = 'Le mode hors-ligne désactive l\'interface cliente et autorise <b>uniquement</b>'.
         ' les <b>supers admins</b> à se connecter pour vous connecter au panneau Equipe';
$LANG['TEXT_OVERDUE'] = 'Dépassé';
$LANG['TEXT_OVERDUE_STATS'] = 'Dépassé ({0})';
$LANG['TEXT_OVERDUE_TICKETS'] = 'Tickets dépassés';
// TEXT P
$LANG['TEXT_PLEASE_FILL_STAFF_FORM_BELOW_OPEN_NEW_TICKET'] = 'Veuillez remplir le formulaire suivant pour ouvrir un nouveau ticket.';
$LANG['TEXT_PLEASE_FILL_FORM_NEW_TICKET'] = 'Veuillez remplir le formulaire suivant pour ouvrir un nouveau ticket.';
$LANG['TEXT_PLEASE_TAKE_A_MINUTE_TO_DELETE_INSTALL'] = 'Veuillez prendre une minute pour supprimer les répertoires <strong>setup/install</strong> pour des raisons de sécurité.';
$LANG['TEXT_POST_REPLY'] = 'Répondre';
$LANG['TEXT_PRIORITY_CHANGED_SUCCESSFULLY'] = 'Changement de priorité avec succès';
// TEXT Q
// TEXT R
$LANG['TEXT_REFRESH'] = 'Refresh';
$LANG['TEXT_REQUIRED_WHEN_DEPT_IS_PUBLIC'] = 'Requis quand le département est public';
$LANG['TEXT_RESPONSE_POSTED_SUCCESSFULLY'] = 'Réponse envoyée avec succès';
// TEXT S
$LANG['TEXT_SEARCH_RESULTS'] = 'Résultats de recherche';
$LANG['TEXT_SELECT_DEPARTMENTS_GROUP_MEMBERS'] = 'Sélectionnez les membres du département qui sont autorisés à accéder en plus plus de leur département.';
$LANG['TEXT_SELECT_PREMADE_REPLY'] = 'Selectionner une réponse prédéfinie';
$LANG['TEXT_SELECT_STAFF_MEMBER'] = '-Selectionner un membre de l\'équipe.-';
$LANG['TEXT_SELECT_TARGET_DEPT'] = '-Selectionner un département de destination-';
$LANG['TEXT_SESSION_TIMED_OUT_DUE_TO_INACTIVITY']='Session fermé due à une trop longue innactivité';
$LANG['TEXT_SHOW_FROM_TO_OF_ALL'] = 'Afficher {0} - {1} sur {2}';
$LANG['TEXT_SHOW_ZERO'] = 'Afficher 0 (zero)';
$LANG['TEXT_SORT_BY_CATEGORY'] = 'Trier par catégorie';
$LANG['TEXT_SORT_BY_DATE'] = 'Trier par date';
$LANG['TEXT_SORT_BY_DEPARTMENT'] = 'Trier par département';
$LANG['TEXT_SORT_BY_TICKET_ID'] = 'Trier par ID de Ticket';
$LANG['TEXT_SORT_BY_PRIORITY'] = 'Trier par priorité';
$LANG['TEXT_SUPPORT_TEAM'] = 'Equipe d\'aide';
$LANG['TEXT_SUPPORT_CENTER'] = 'Centre d\'aide';
$LANG['TEXT_SUPPORT_TICKET_SISTEM'] = '<span>SUPPORT TICKET</span> SYSTEM';
$LANG['TEXT_SYSTEM_IS_OFF_LINE'] = '<strong>Le système est défini comme hors-ligne</strong> - l\'interface client est désactivée seuls les administrateurs peuvent accéder au panneau de contrôle.';
// TEXT T
$LANG['TEXT_THANKS_NEW_TICKET'] = 'Merci de nous avoir contacté.<br>Un ticket à été créé et nous reviendrons vers vous très prochainement si nécessaire.';
$LANG['TEXT_TICKET_ASSIGNED_TO_STAFF'] = 'Tickets assigné à {0}';
$LANG['TEXT_TICKET_CREATED'] = 'Un Ticket a été créé';
$LANG['TEXT_TICKET_CREATED_SUCCESSFULLY'] = 'Ticket créé avec succès';
$LANG['TEXT_TICKET_DELETED_FOREVER'] = 'Ticket supprimé pour toujours';
$LANG['TEXT_TICKET_FLAGGED_AS_OVERDUE'] = 'Ticket marqué comme dépassé';
$LANG['TEXT_TICKET_NUM_STATUS_SET_CLOSED'] = 'Status du Ticket #{0} marqué comme fermé';
$LANG['TEXT_TICKET_NUMBER'] = 'Ticket #';
$LANG['TEXT_TICKET_STATUS'] = 'Status du Ticket';
$LANG['TEXT_TICKET_STATUS_CHANGED_TO'] = 'Status du ticket changé comme {0}';
$LANG['TEXT_TICKET_STATUS_SET_TO_OPEN'] = 'Status du ticket Ticket marqué comme ouvert';
$LANG['TEXT_TICKET_THREAD'] = 'Suivi du Ticket';
$LANG['TEXT_TICKET_TRANSFERED_SUCESSFULLY_TO_DEPT'] = 'Ticket transféré au département {0} avec succès.';
$LANG['TEXT_TICKET_UPDATED_SUCCESSFULLY'] = 'Ticket mis à jour avec succès';
$LANG['TEXT_TICKET_WILL_REOPEN_NEW_POST']='Le ticket sera réouvert lors de l\'envoi d\'une réponse';
$LANG['TEXT_TICKETS_STATUS'] = 'Status des Tickets';
$LANG['TEXT_TOTAL_OPEN_TICKETS'] = "Ouvert ({0})";
$LANG['TEXT_TOTAL_ANSWERED_TICKETS'] = "Répondu ({0})";
$LANG['TEXT_TOTAL_MY_TICKETS'] = 'Mes Tickets ({0})';
// TEXT U
$LANG['TEXT_UNABLE_CREATE_TICKET'] = 'Impossible de créer un ticket. Veuillez corriger les erreurs suivantes et recommencez!';
$LANG['TEXT_UPDATE_TICKET'] = 'Ticket mis à jour #{0}';
$LANG['TEXT_USED_FOR_OUTGOING_EMAILS'] = 'Utilisé pour les emails sortant, alertes et notifications pour les utilisteurs et les équipes.';
// TEXT V
$LANG['TEXT_VIEW_OPEN']='Voir les tickets ouverts';
$LANG['TEXT_VIEW_CLOSED']='Voir les tickets fermés';
$LANG['TEXT_VIEW_TICKET'] = 'Voir les Tickets';
$LANG['TEXT_VISIBLE_TO_CLIENT'] = 'Visible pour le client.';
// TEXT X
// TEXT Y
$LANG['TEXT_YOUVE_REACHED_MAXIMUM_FAILED_LOGIN_ATTEMPTS_ALLOWED']='Vous avez atteind le maximum d\'essai autorisé.';
// TEXT W
$LANG['TEXT_WELCOME_BACK'] = 'Bienvenue';
$LANG['TEXT_WELCOME_BACK_CLIENT'] = 'Bienvenue, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_STAFF'] = 'Bienvenue, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_VACATION']= 'Bienvenue! Vous êtes défini comme \'en vacances\'. Veuillez avertir l\'administreateur que vous êtes de retour.';
$LANG['TEXT_WELCOME_MSG'] = 'Afin de rationaliser les demandes de soutien et de mieux vous servir, nous utilisons un système de ticket de support. Chaque demande de support est attribué un numéro de ticket unique que vous pouvez utiliser pour suivre les progrès et les réponses en ligne. Pour votre commodité, nous fournissons des archives et un historique complet de toutes vos demandes de soutien.';
$LANG['TEXT_WELCOME_TITLE'] = 'Bienvenue sur notre support d\'aide.';

########
## Titles on pages and web pages
##
$LANG['TITLE'] = 'Service complet de tickets';
$LANG['TITLE_BOX_NEW_TICKET'] = 'Nouveau ticket';
$LANG['TITLE_BAR_OFFLINE'] = 'Système de ticket';
$LANG['TITLE_MY_PREFERENCES'] = 'Mes Préferences';
$LANG['TITLE_OFFLINE'] = 'Système de ticket hors-ligne';
$LANG['TITLE_OPEN_PREVIOUS_TICKET'] = 'Ouvrir un ticket précédent';
$LANG['TITLE_CLOSED_TICKETS'] = 'Tickets fermés';
?>
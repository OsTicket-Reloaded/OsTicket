<?php

#Disable direct access.
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename( __FILE__ ))) die ('kwaheri rafiki!');

$LANG = array ();

# Language identification
$LANG['LANGUAGE'] = 'es';
//Word Name
$LANG['LANGUAGE_NAME'] = 'Spanish';
//Native name of language (in the original language)
$LANG['LANGUAGE_NATIVE_NAME'] = 'Español';
$LANG['DIRECTION'] = 'ltr';
$LANG['CODEPAGE'] = 'UTF-8';

########
##Mensajes de alerta, normalmente usados con un dialogo javascript
##
$LANG['ALERT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Excesivos intentos de acceso por cliente'."\n".
	'Email: {0}'."\n".
	'Ticket#: {1}'."\n".
	'IP: {2}'."\n".
	'Hora: {3}'."\n\n".
    'Intentos #{4}';

#######
## Error Mensages
##
$LANG['ERROR_ACCESS_DENIED_INVALID_TICKET'] = 'Acceso denegado. Puede que el ID del ticket sea incorrecto.';
$LANG['ERROR_EMAIL_PARSE_FAILED'] = 'Análisis de Email fallido';
$LANG['ERROR_FILE_REJECTED'] = 'Archivo {0} rechazado';
$LANG['ERROR_INVALID_FILE_TYPE'] = 'Tipo de archivo inválido';
$LANG['ERROR_INVALID_FROM_ADDRESS'] = 'Dirección de Envío Inválida';
$LANG['ERROR_MESSAGE_REQUIRED'] = 'Mensaje es obligatorio';
$LANG['ERROR_NAME_REQUIRED'] = 'Nombre es obligatorio';
$LANG['ERROR_OCCURED'] = 'Ocurrió un error . Por favor, inténtelo de nuevo';
$LANG['ERROR_OCCURED_TRY_AGAIN'] = 'Ocurrió un error. Por facvor, inténtelo de nuevo';
$LANG['ERROR_POSSIBLY_INVALID_TICKET'] = 'Acceso denegado. Posiblemente el ID es inválido';
$LANG['ERROR_SEARCH_TERM_MORE_3'] = 'El término de búsqueda debe tener al menos 3 carácteres';
$LANG['ERROR_SECURITY_REPEAT_RESULT_LOCK'] = 'Violación de Seguridad. Repetidas violaciones terminarán bloqueando su cuenta.';
$LANG['ERROR_SECURITY_VIOLATION_YOUR_ACCOUNT_WILL_LOCKED'] = 'Violación de Seguridad. Repetidas violaciones terminarán bloqueando su cuenta.';
$LANG['ERROR_SERVICES_NOT_AVAILABLE'] = 'Servicios no disponibles';
$LANG['ERROR_UNABLE_SEND_MESSAGE_TRY_AGAIN'] = 'No se pudo enviar el mensaje. Inténtelo de nuevo';
$LANG['ERROR_UNABLE_TO_POST_MESSAGE'] = 'No se pudo enviar el mensaje. Inténtelo de nuevo';
$LANG['ERROR_UNABLE_TO_POST_THE_RESPONSE'] = 'No se pudo enviar el mensaje';
$LANG['ERROR_UNKNOW_ACTION'] = 'Acción desconocida';
$LANG['ERROR_YOU_HAVE_REACHED_MAXIMUM_FAILED_LOGIN']='Ha alcanzado el máximo de intentos fallidos permitido. Inténtelo de nuevo después de 5 minutos o <a href="open.php">abra un nuevo ticket</a>';
$LANG['ERROR_YOU_MUST_CHANGE_PASSWORD'] = 'Debe cambiar su clave para continuar.';


#######
## Images for Empleados and Clients Ends
##
## relative path of imagens in "translate/".$LANG['LANGUAGE']."/"
##
$LANG['IMAGE_CLIENT_REFRESH'] = 'client/refresh.gif';
$LANG['IMAGE_CLIENT_VIEW_CLOSED'] = 'client/view_closed.gif';
$LANG['IMAGE_CLIENT_VIEW_OPEN'] = 'client/view_open.gif';
$LANG['IMAGE_STAFF_REFRESH'] = 'emplados/refresh.gif';
$LANG['IMAGE_STAFF_VIEW_CLOSED'] = 'emplados/view_closed.gif';
$LANG['IMAGE_STAFF_VIEW_OPEN'] = 'emplados/view_open.gif';


#######
## Labels for Bottons, Headers on Tables, Selections, Link Texts and others
##
// Label A
$LANG['LABEL_ACTIVE_IN_PARENTESIS'] = '(Activo)';
$LANG['LABEL_ADD_NEW_DEPT'] = 'Añadir nuevo Depto.';
$LANG['LABEL_ADMIN_DASHBOARD'] = 'Admin Dashboard';
$LANG['LABEL_ADMIN_PANEL'] = 'Panel de Administración';
$LANG['LABEL_ADVANCED'] = 'Advanzado';
$LANG['LABEL_ALL'] = 'Todo';
$LANG['LABEL_ALL_DEPARTMENTS'] = 'Todos los Departamanetos';
$LANG['LABEL_API'] = 'API';
$LANG['LABEL_APPEND'] = 'Agregar';
$LANG['LABEL_APPEND_SIGNATURE'] = 'Agregar firma';
$LANG['LABEL_ASC'] = 'ASC';
$LANG['LABEL_ASCENDING'] = 'Ascendente';
$LANG['LABEL_ASSIGN'] = 'Asignar';
$LANG['LABEL_ASSIGN_TO_STAFF'] = 'Asignar a Empleados';
$LANG['LABEL_ASSIGNED_TICKETS'] = 'Tickets Asignados';
$LANG['LABEL_ATTACHMENT'] = 'Adjunto';
$LANG['LABEL_ATTACHMENTS'] = 'Adjuntos';
$LANG['LABEL_AUTO_RESPONSE_EMAIL'] = 'Email de Autorespuesta';
$LANG['LABEL_AUTORESPONDERS'] = 'Autoresponders';
$LANG['LABEL_AUTORESP'] = 'AutoResp.';
// Label B
$LANG['LABEL_BASIC'] = 'Básico';
// Label C
$LANG['LABEL_CANCEL'] = 'Cancelar';
$LANG['LABEL_CANNED_RESPONSE'] = 'Canned Response';
$LANG['LABEL_CATEGORY'] = 'categoría';
$LANG['LABEL_CATEGORY_DEPT'] = 'Categoría/Depto.';
$LANG['LABEL_CHANGE_PASSWORD'] = 'Cambiar Contraseña';
$LANG['LABEL_CHECK_STATUS'] = 'Comprobar Estado';
$LANG['LABEL_CLOSE'] = 'Cerrar';
$LANG['LABEL_CLOSED'] = 'Cerrado';
$LANG['LABEL_CLOSED'] = 'Cerrado';
$LANG['LABEL_CLOSED_TICKETS'] = 'Tickets Cerrados';
$LANG['LABEL_CLOSE_TICKET'] = 'Cerrar Ticket';
$LANG['LABEL_CREATE_DATE'] = 'Fecha Creación';
// Label D
$LANG['LABEL_DASHBOARD'] = 'Dashboard';
$LANG['LABEL_DATE'] = 'Fecha';
$LANG['LABEL_DATE_AND_TIME'] = 'Fecha y hora';
$LANG['LABEL_DATE_AND_TIME_FORMAT'] = 'Formaro fecha y hora';
$LANG['LABEL_DATE_FORMAT'] = 'Formato de fecha';
$LANG['LABEL_DATE_SPAN'] = 'Fecha Span';
$LANG['LABEL_DAY_DATE_AND_TIME_FORMAT'] = 'Formato fecha y hora extendida';
$LANG['LABEL_DAYLIGHT_SAVING'] = 'Horario de verano';
$LANG['LABEL_DEFAULT'] = 'Por Defecto';
$LANG['LABEL_DEFAULT_TIME_ZONE'] = 'Zona horaria';
$LANG['LABEL_DELETE'] = 'Borrar';
$LANG['LABEL_DELETE_DEPT_S'] = 'Borrar Depto(s).';
$LANG['LABEL_DEPARTMENT'] = 'Departamento';
$LANG['LABEL_DEPARTMENTS'] = 'Departmentos';
$LANG['LABEL_DEPT'] = 'Depto.';
$LANG['LABEL_DEPT_ACCESS'] = 'Acceso depto.';
$LANG['LABEL_DEPT_EMAIL'] = 'Email depto.';
$LANG['LABEL_DEPT_EMAIL_ABOVE'] = 'Email depto. (arriba)';
$LANG['LABEL_DEPT_MANAGER'] = 'Dpto. Manager';
$LANG['LABEL_DEPT_MANAGER_NONE'] = 'Ninguno';
$LANG['LABEL_DEPT_NAME'] = 'Nombre depto.';
$LANG['LABEL_DEPT_SIGNATURE'] = 'Firma depto.';
$LANG['LABEL_DEPT_TYPE'] = 'Tipo depto.';
$LANG['LABEL_DESC'] = 'DESC';
$LANG['LABEL_DESCENDING'] = 'Descendente';
$LANG['LABEL_DIRECTORY'] = 'Directorio';
$LANG['LABEL_DIRECTORY_STAFF'] = 'Directorio Empleados';
$LANG['LABEL_DISABLED_IN_PARENTESIS'] = '(Desactivado)';
// Label E
$LANG['LABEL_EMAIL'] = 'E-Mail';
$LANG['LABEL_EMAILS'] = 'E-Mails';
$LANG['LABEL_EMAILS_SETTINGS'] = 'Ajustes E-Mails';
$LANG['LABEL_EMAIL_ADDRESS'] = 'E-Mail';
$LANG['LABEL_EMAIL_TEMPLATES'] = 'Plantillas E-Mail';
$LANG['LABEL_ENABLE_SYSTEM_OFF_LINE'] = 'Activar';
$LANG['LABEL_ENTER_NOTE_CONTENT'] = 'Enter note content.';
// Label F
$LANG['LABEL_FROM'] = 'Desde';
$LANG['LABEL_FULL_NAME'] = 'Nombre Completo';
// Label G
$LANG['LABEL_GENERAL_SETTINGS'] = 'Ajustes generales';
$LANG['LABEL_GO'] = 'Ir';
// Label H
$LANG['LABEL_HELP_TOPIC'] = 'Tema de ayuda';
$LANG['LABEL_HELP_TOPICS'] = 'Temas de ayuda';
$LANG['LABEL_HELPDESK_ATTEMPT_ALLOWED_BEFORE_A'] = 'intento(s) permitidos &nbsp;antes de';
$LANG['LABEL_HELPDESK_BIND_STAFF_SESSION_TO_IP'] = 'Vincular Sesión de Empleados a IP';
$LANG['LABEL_HELPDESK_CLICKABLE_URLS'] = 'URLs Clickables';
$LANG['LABEL_HELPDESK_CLIENT_EXCESSIVE_LOGINS'] = 'Excesivos logins del cliente';
$LANG['LABEL_HELPDESK_CLIENT_SESSION_TIMEOUT'] = 'Sesión del cliente caducada';
$LANG['LABEL_HELPDESK_DEFAULT_DEPARTMENT'] = 'Departmento por defecto';
$LANG['LABEL_HELPDESK_DEFAULT_EMAIL_TEMPLATES'] = 'Plantilla de email por defecto';
$LANG['LABEL_HELPDESK_DEFAULT_PAGE_SIZE'] = 'Tamaño de página por defecto';
$LANG['LABEL_HELPDESK_ENABLE_AUTO_CRON'] = 'Activar Auto Cron';
$LANG['LABEL_HELPDESK_MAKE_URLS_CLICKABLE'] = 'Hacer URLs clickables';
$LANG['LABEL_HELPDESK_NAME_TITLE'] = 'Nombre/Título servicio de asistencia';
$LANG['LABEL_HELPDESK_NONE_DISABLE_LOGGER'] = 'Ninguno (Desactivar Logger)';
$LANG['LABEL_HELPDESK_PENALTY_IN_MINUTES'] = 'min. timeout (en minutos)';
$LANG['LABEL_HELPDESK_PURGE_LOGS_AFTER'] = 'Purgar logs después';
$LANG['LABEL_HELPDESK_PURGE_NONE_DISABLE'] = 'Ninguno (Desactivar)';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_DEPARTMENT'] = 'Seleccionar depto. por defecto';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_TEMPLATE'] = 'Seleccionar Plantilla por defecto';
$LANG['LABEL_HELPDESK_STAFF_EXCESSIVE_LOGINS'] = 'Excesivos logins del emplados';
$LANG['LABEL_HELPDESK_STAFF_SESSION_TIMEOUT'] = 'Sesión de emplado caducada';
$LANG['LABEL_HELPDESK_STATUS'] = 'Estado servicio de asistencia';
$LANG['LABEL_HELPDESK_SYSTEM_LOG_LEVEL'] = 'Nivel log de sistema';
$LANG['LABEL_HELPDESK_URL'] = 'URL servicio de asistencia';
// Label I
$LANG['LABEL_ISSUE_SUMMARY'] = 'Resumen de problemas';
// Label J
// Label K
$LANG['LABEL_KNOWLEDGE_BASE'] = 'Knowledge Base';
$LANG['LABEL_KNOWLEDGE_BASE_PREMATE'] = 'Knowledge Base: Premade';
// Label L
$LANG['LABEL_LAST_UPDATED'] = 'Última actualización';
$LANG['LABEL_LOG_OUT'] = 'Salir';
// Label M
$LANG['LABEL_MAKE_PRIVATE'] = 'Hacer privado';
$LANG['LABEL_MAKE_PUBLIC'] = 'Hacer público';
$LANG['LABEL_MANAGER'] = 'Manager';
$LANG['LABEL_MESSAGE'] = 'Mensaje';
$LANG['LABEL_MONTH'] = 'Mes';
$LANG['LABEL_MONTHS'] = 'Meses';
$LANG['LABEL_MY_ACCOUNT'] = 'Mi cuenta';
$LANG['LABEL_MY_PREFERENCE'] = 'Mis preferencias';
$LANG['LABEL_MY_PROFILE'] = 'Mi perfil';
$LANG['LABEL_MY_SIGNATURE'] = 'Mi firma';
// Label N
$LANG['LABEL_NAME'] = 'Nombre';
$LANG['LABEL_NEW_DEPARTMENT'] = 'Nuevo Departamento';
$LANG['LABEL_NEW_MESSAGE'] = 'Nuevo mensaje';
$LANG['LABEL_NEW_PREMADE_REPLY'] = 'Crear respuesta preparada';
$LANG['LABEL_NEW_TICKET'] = 'Nuevo Ticket';
$LANG['LABEL_NEW_TICKET_PRIORITY'] = 'Nuevo Prioridad de Ticket';
$LANG['LABEL_NO_MANAGER_ADD_USERS'] = 'Sin Usuarios (Añadir Usuarios)';
$LANG['LABEL_NONE'] = 'Ninguno';
$LANG['LABEL_NOTE_TITLE'] = 'Título de Nota';
// Label O
$LANG['LABEL_OPEN'] = 'abrir';
$LANG['LABEL_OPEN_NEW_TICKET'] = 'Abrir Nuevo Ticket';
$LANG['LABEL_OPEN_TICKET'] = 'Crear Ticket';
$LANG['LABEL_OTHER'] = 'Otro';
$LANG['LABEL_OUTGOING_EMAIL'] = 'E-Mail saliente';
$LANG['LABEL_OVERDUE'] = 'Atrasando';
// Label P
$LANG['LABEL_PAGE'] = 'página';
$LANG['LABEL_PASSWORD'] = 'Contraseña';
$LANG['LABEL_PASSWORD_AGAIN'] = 'Contraseña (repetir)';
$LANG['LABEL_PHONE'] = 'Teléfono';
$LANG['LABEL_POST_INTERNAL_NOTE'] = 'Post Internal Note';
$LANG['LABEL_POST_REPLY']='Publicar respuesta';
$LANG['LABEL_PREFERENCES'] = 'Preferences';
$LANG['LABEL_PREMADE_REPLIES'] = 'Respuestas preparadas';
$LANG['LABEL_PRIMARY_OUTGOING_EMAIL'] = 'Email saliente principal';
$LANG['LABEL_PRIORITY'] = 'Prioridad';
$LANG['LABEL_PRIVATE'] = 'Privado';
$LANG['LABEL_PRIVATE_HIDDEN'] = 'Privado (Oculto)';
$LANG['LABEL_PUBLIC'] = 'Público';
// Label Q
$LANG['LABEL_QUERY'] = 'Consultar';
$LANG['LABEL_QUERY_RETURNED_ZERO_RESULT'] = 'La consulta no devolvió resultados';
// Label R
$LANG['LABEL_RE_ASSIGN_TICKET'] = 'Reasignar a empleado';
$LANG['LABEL_REOPEN'] = 'reabrir';
$LANG['LABEL_REOPEN_TICKET'] = 'reabrir Ticket';
$LANG['LABEL_REPLY_TITLE'] = 'Título de respuesta';
$LANG['LABEL_RESET'] = 'Reiniciar';
$LANG['LABEL_RESULTS_PER_PAGE'] = 'Resultados por página';
// Label S
$LANG["LABEL_SYSTEM_SETTINGS"] = 'Ajustes de sistema';
$LANG['LABEL_SEARCH'] = 'Búsqueda';
$LANG['LABEL_SEARCH_FOR'] = 'Buscar';
$LANG['LABEL_SELECT'] = 'Seleccionar';
$LANG['LABEL_SELECT_DEPARTMENT'] = 'Seleccionar departamento';
$LANG['LABEL_SELECT_MANAGER_OPTIONAL'] = 'Seleccionar manager (opcional)';
$LANG['LABEL_SELECT_ONE_EMAIL'] = 'Seleccionar uno';
$LANG['LABEL_SELECT_ONE_TOPIC'] = 'Seleccionar uno';
$LANG['LABEL_SELECT_PRIORITY'] = 'Seleccionar prioridad';
$LANG['LABEL_SELECT_SOURCE'] = 'Seleccionar origen';
$LANG['LABEL_SELECT_TEMPLATE'] = 'Seleccionar plantilla';
$LANG['LABEL_SETTINGS'] = 'ajustes';
$LANG['LABEL_SORT_BY'] = 'Ordenar por';
$LANG['LABEL_SORT_BY_TITLE'] = 'Ordenar por título';
$LANG['LABEL_SORT_BY_UPDATE_DATE'] = 'Ordenar por fecha de actualización';
$LANG['LABEL_STAFF'] = 'Empleados';
$LANG['LABEL_STAFF_MEMBER'] = 'Empleado';
$LANG['LABEL_STAFF_MEMBERS'] = 'Empleados';
$LANG['LABEL_STAFF_PANEL'] = 'Panel empleados';
$LANG['LABEL_STAFF_VIEWTICKET_CHANGE_PRIORITY']='Cambiar prioridad';
$LANG['LABEL_STAFF_VIEWTICKET_CLOSE_TICKET']='Cerrar Ticket';
$LANG['LABEL_STAFF_VIEWTICKET_MARK_OVERDUE']='Marcar retraso';
$LANG['LABEL_STAFF_VIEWTICKET_RELEASE_UNASSIGN']='Liberar (desasignar)';
$LANG['LABEL_STAFF_VIEWTICKET_REOPEN_TICKET']='Reabrir Ticket';
$LANG['LABEL_STAFF_VIEWTICKET_SELECT_ACTION']='Seleccionar acción';
$LANG['LABEL_STATUS'] = 'Estado';
$LANG['LABEL_STATUS_IS'] = 'El estado es';
$LANG['LABEL_SUBJECT'] = 'Tema';
$LANG['LABEL_SUBMIT'] = 'Enviar';
$LANG['LABEL_SUBMIT_TICKET'] = 'Enviar Ticket';
$LANG['LABEL_SYSTEM_DEFAULT_TEMPLATE'] = 'Por defecto del sistema';
$LANG['LABEL_SYSTEM_LOGS'] = 'Logs del sistema';
$LANG['LABEL_SYSTEM_LOGS_ALL'] = 'Todo';
$LANG['LABEL_SYSTEM_LOGS_DATESPAN'] = 'Date span';
$LANG['LABEL_SYSTEM_LOGS_DEBUG'] = 'Depurar';
$LANG['LABEL_SYSTEM_LOGS_ERRORS'] = 'Errores';
$LANG['LABEL_SYSTEM_LOGS_FROM'] = 'Desde';
$LANG['LABEL_SYSTEM_LOGS_GO'] = 'Ir';
$LANG['LABEL_SYSTEM_LOGS_NO_RESULTS'] = 'La consulta no devolvió resultados';
$LANG['LABEL_SYSTEM_LOGS_TO'] = 'a';
$LANG['LABEL_SYSTEM_LOGS_TYPE'] = 'Tipo';
$LANG['LABEL_SYSTEM_LOGS_WARNINGS'] = 'Alertas';
$LANG['LABEL_SYSTEM_PREFERENCES_AND_SETTINGS'] = 'Preferencias del sistema y ajustes';
// Label T
$LANG['LABEL_TELEPHONE'] = 'Teléfono';
$LANG['LABEL_TICKET'] = 'Ticket';
$LANG['LABEL_TICKET_ID'] = 'Ticket ID';
$LANG['LABEL_TICKET_NUMBER'] = 'Ticket#';
$LANG['LABEL_TICKET_SOURCE'] = 'Ticket origen';
$LANG['LABEL_TICKET_STATUS'] = 'Estado de Ticket';
$LANG['LABEL_TIME_FORMAT'] = 'Formato de hora';
$LANG['LABEL_TO'] = 'A.';
$LANG['LABEL_TOGGLE'] = 'Cambiar';
$LANG['LABEL_TRANSFER'] = 'Transferir';
$LANG['LABEL_TYPE'] = 'Tipo';
// Label U
$LANG['LABEL_UPDATE_DATE'] = 'Última actualización';
$LANG['LABEL_UPDATE_DEPARTMENT'] = 'Actualizar departamento';
$LANG['LABEL_USERNAME'] = 'Nombre de usuario';
$LANG['LABEL_USERS'] = 'Usuarios';
// Label V
$LANG['LABEL_VIEW_STATUS'] = 'Ver estado';

#######
## Generic text for all site, if have to text repeted in
## Client or Staff ends, is prefixed with correct name.
##


// TEXT A
$LANG['TEXT_ACCESS_DENIED'] = 'Acceso denegado';
$LANG['TEXT_ALL_DEPARTMENTS'] = 'Todos los departamentos';
$LANG['TEXT_AND_STATUS_SET_TO'] = ' y el estado puesto a {0}';
$LANG['TEXT_AND_TICKET_STATUS_SET_TO_CLOSED'] = ' y estado de ticket puesto a cerrado';
$LANG['TEXT_ANSWERED_STATS'] = 'Tickets Respondidos ({0})';
$LANG['TEXT_ANSWERED_TICKETS'] = 'Tickets Respondidos (Respondidos)';
$LANG['TEXT_ANY_STATUS'] = 'Cualquier Estado';
$LANG['TEXT_ASSIGNED_TICKETS'] = 'Tickets Asignados';
$LANG['TEXT_ATTACH_FILE']='Adjuntar archivo';
$LANG['TEXT_AUTHENTICATION_REQUIRED']='Autenticación obligatoria';
$LANG['TEXT_AUTHENTICATION_REQUIRED_QUESTION'] = 'Autenticación obligatoria';
// TEXT B
$LANG['TEXT_BOX_NEW_TICKET'] = 'Nueva solicitud de soporte. Por favor, proporcione tantos detalles como le sea posible, así nosotros podremos ayudarle mejor. Para actualizar un ticket creado anteriormente, por favor use el formulario de la derecha. Es necesaria una dirección de correo electrónico válida.';
// TEXT C
$LANG['TEXT_CAM_BE_APPENDED_TO_RESPONSES'] = 'puede añadirse a las respuestas.&nbsp;(disponible para departamentos públicos)';
$LANG['TEXT_CLOSED'] = 'Cerrados';
$LANG['TEXT_CLOSED_TICKETS'] = 'Tickets cerrados';
$LANG['TEXT_COMMENTS_REASONS_TRANSFER'] = 'Comentarios/Razones para la transferencia. &nbsp;(<i>Nota interna</i>)'; 
$LANG['TEXT_CREATE_FAILED'] = 'No se pudo crear ';
// TEXT D
$LANG['TEXT_DEPT_DEPENDS_ON_EMAIL'] = 'Dpto. depende del e-mail y ayuda a ajustar los temas de los tickets de entrada.'; 
$LANG['TEXT_DEPT_TRANSFER'] = 'Transferir depto.';
$LANG['TEXT_DEPT_UPDATED_SUCCESSFULLY'] = 'Dpto. actualizado satisfactoriamente.';
// TEXT E
$LANG['TEXT_EMAIL_ADDED_TO_BANLIST'] = 'E-mail ({0}) añadido a la lista de bans';
$LANG['TEXT_EMAIL_ADDRESS_USED_SEND_AUTO_RESPONSES'] = 'E-mail usado para enviar autorespuestas. Si está activo.'; 
$LANG['TEXT_EMAIL_REMOVED_FROM_BANLIST'] = 'Email eliminado de la lista de bans'; 
$LANG['TEXT_ENTER_MESSAGE']='Introducir Mensaje';
$LANG['TEXT_EXCESSIVE_FAILED_LOGIN_ATTEMPTS'] = 'Ecesivos itentos de acceso fallidos';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Excesivos intentos de acceso (cliente)';
// TEXT F
$LANG['TEXT_FOR_SUPPORTED_PARAMETERS'] = 'para consultar los parámetros soportados';
$LANG['TEXT_FORGOT_YOUR_LOGIN_INFO']='¿Olvidaste tus datos de acceso? Por favor <a href="open.php">abra un nuevo ticket</a>.';
// TEXT G
$LANG['TEXT_GENERAL_INQUIRY'] = 'Consulta General';
$LANG['TEXT_GLOBAL_AUTO_RESPONSE_SETTINGS'] = 'Los ajustes de autorespuesta global en la sección de preferencias deben estar activos para que los ajustes del depto. \'activo\' haga efecto.'; 
// TEXT H
$LANG['TEXT_HELPDESK_CLIENT_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Tiempo ocioso máximo de los clientes en minutos. Introducir 0 para desactivar la timeout</i>)';
$LANG['TEXT_HELPDESK_ENABLE_CRON_CALL_ON_STAFF_ACTIVITY'] = 'Activar llamada cron en la actividad de los empleados';
$LANG['TEXT_HELPDESK_STAFF_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Tiempo ocioso máximo de los empleados en minutos. Introducir 0 para desactivar el timeout</i>)'; 
$LANG['TEXT_HOME'] = 'Inicio';
// TEXT I
$LANG['TEXT_INTERNAL_NOTE_POSTED'] = 'Nota interna publicada';
$LANG['TEXT_INVALID_LOGIN']='Inicio de sesión inválido';
// TEXT J
// TEXT K
// TEXT L
$LANG['TEXT_LOG_OUT'] = 'Salir';
$LANG['TEXT_LOGIN_VIEW_STATUS_OF_TICKET']='Para ver el estado de un ticket, proporcionenos sus datos de acceso.<br/>'.
// TEXT M
$LANG['TEXT_MESSAGE_POSTED_SUCCESS'] = 'Mensaje Publicado con éxito';
$LANG['TEXT_MY_ACCOUNT'] = 'Mi Cuenta';
$LANG['TEXT_MY_PREFERENCES'] = 'Mis Preferenciass';
$LANG['TEXT_MY_TICKETS'] = 'Mis Tickets';
$LANG['TEXT_MY_TICKETS_STATS'] = 'Mis Tickets ({0})';
// TEXT N
$LANG['TEXT_NEW_TICKET'] = 'Crear Ticket';
$LANG['TEXT_NEW_TICKET_AUTO_RESPONSE'] = 'Un e-mail con el número de ticket ha sido enviado a <b>{0}</b>.Necesitará el número de ticket, junto con su e-mail para ver el estado y el progreso en línea.<br><br>Si desea enviar comentarios o información adicional sobre la misma cuestión, por favor, siga las instrucciones del correo electrónico.';
$LANG['TEXT_NO_TICKETS_FOUND']='No se encontraron tickets';
$LANG['TEXT_NOT_THIS_USER'] = 'No soy este usuario';
// TEXT O
$LANG['TEXT_OBSERVE_DAYLIGHT_SAVINGS'] = 'Comprobar horario de verano';
$LANG['TEXT_OF_SELECTED_TICKETS_REOPENED'] = "{0} de {1} tickets seleccionados reabiertos";
$LANG['TEXT_OF_SELECTED_TICKETS_CLOSED'] = "{0} de {1} tickets seleccionados cerrados";
$LANG['TEXT_OF_SELECTED_TICKETS_MARKED_OVERDUE'] = "{0} de {1} tickets seleccionados marcados como retrasados";
$LANG['TEXT_OF_SELECTED_TICKETS_DELETED'] = "{0} de {1} tickets seleccionados borrados";
$LANG['TEXT_OFFLINE']= 'Gracias por su interés en contactar con nosotros.<br>'.
		'Nuestro sistema de asistencia está fuera de linea en este momento, por favor vuelva más tarde.';
$LANG['TEXT_OFFLINE_MODE_WILL_DISABLE_CLIENT'] = 'El modo fuera de linea desactivará la interfaz de cliente y <b>solo</b>'.
		' se permitirá a <b>super admins</b> entrar al panel de control de los empleados'; 
$LANG['TEXT_OPEN'] = 'Abiertos';
$LANG['TEXT_OPEN_STATS'] = 'Abierto';
$LANG['TEXT_OPEN_NEW_TICKET'] = 'Abrir nuevo Ticket';
$LANG['TEXT_OPEN_PREVIOUS_TICKET'] = 'Comprobar el estado del ticket abierto anteriormente. Proporcionamos los archivos y la historia completa de todas sus solicitudes de soporte con las respuestas correspondientes.';
$LANG['TEXT_OPEN_TICKETS'] = 'Tickets Abiertos';
$LANG['TEXT_OVERDUE'] = 'Atrasados';
$LANG['TEXT_OVERDUE_TICKETS'] = 'Tickets Vencidos (Vencidos)';
// TEXT P
$LANG['TEXT_PHP_MANUAL'] = 'la documentación PHP ';
$LANG['TEXT_PLEASE_FILL_FORM_NEW_TICKET'] = 'Por favor, rellene el siguiente formulario para abrir un nuevo ticket.';
$LANG['TEXT_PLEASE_FILL_STAFF_FORM_BELOW_OPEN_NEW_TICKET'] = 'Por favor, rellene el siguiente formulario para abrir un nuevo ticket.';
$LANG['TEXT_PLEASE_REFER_TO'] = 'Por favor, diríjase a ';
$LANG['TEXT_PLEASE_TAKE_A_MINUTE_TO_DELETE_INSTALL'] = 'Por favor, tómese un minuto para eliminar la instalación en el directorio <strong>/setup</strong> de la guía por razones de seguridad.';      
$LANG['TEXT_POST_REPLY']='Publicar respuesta';
$LANG['TEXT_PRIORITY_CHANGED_SUCCESSFULLY'] = 'Prioridad cambiada satisfactoriamente';
// TEXT Q
// TEXT R
$LANG['TEXT_REFRESH']='Actualizar';
$LANG['TEXT_REQUIRED_WHEN_DEPT_IS_PUBLIC'] = 'Obligatorio cuando el depto. es público';
$LANG['TEXT_RESPONSE_POSTED_SUCCESSFULLY'] = 'Respuesta publicada con éxito';
// TEXT S
$LANG['TEXT_SEARCH_RESULTS'] = 'Buscar Resultados';
$LANG['TEXT_SELECT_DEPARTMENTS_GROUP_MEMBERS'] = 'Seleccione los miembros de grupo de departamentos a los que se permite acceso además de a su propio departamento.'; 
$LANG['TEXT_SELECT_PREMADE_REPLY'] = 'Seleccione una respuesta preparada';
$LANG['TEXT_SELECT_STAFF_MEMBER'] = '-Seleccionar Empleado-';
$LANG['TEXT_SELECT_TARGET_DEPT'] = '-Seleccionar depto. objetivo-';
$LANG['TEXT_SESSION_TIMED_OUT_DUE_TO_INACTIVITY']='Tiempo de espera de Sesión agotado debido a la inactividad';
$LANG['TEXT_SHOW_FROM_TO_OF_ALL'] = 'Listado {0} - {1} of {2}';
$LANG['TEXT_SHOW_ZERO'] = 'Listado 0 (zero)';
$LANG['TEXT_SORT_BY_CATEGORY'] = 'Ordenar por categoría';
$LANG['TEXT_SORT_BY_DATE']='Ordenar por Fecha';
$LANG['TEXT_SORT_BY_DEPARTMENT']='Ordenar por departamento';
$LANG['TEXT_SORT_BY_PRIORITY'] = 'Ordenar por prioridad';
$LANG['TEXT_SORT_BY_TICKET_ID']='Ordenar por ticket ID';
$LANG['TEXT_SUPPORT_CENTER'] = 'Centro de soporte';
$LANG['TEXT_SUPPORT_TEAM'] = 'Equipo de soporte';
$LANG['TEXT_SUPPORT_TICKET_SISTEM'] = 'SISTEMA <span>TICKET SOPORTE</span>';
$LANG['TEXT_SYSTEM_IS_OFF_LINE'] = '<strong>El sistema está en modo fuera de servicio</strong> - La interfaz de cliente está desactivada y SOLO admins pueden acceder al panel de control de los empleados.'; 
// TEXT T
$LANG['TEXT_THANKS_NEW_TICKET'] = 'Gracias por contactar con nosotros.<br>Un ticket de soporte ha sido creado y un representante lo atenderá en breve.';
$LANG['TEXT_TICKET_ASSIGNED_TO_STAFF'] = 'Ticket asignado a {0}';
$LANG['TEXT_TICKET_CREATED'] = 'Solicitud de ticket de soporte creado';
$LANG['TEXT_TICKET_CREATED_SUCCESSFULLY'] = 'Ticket creado con éxito';
$LANG['TEXT_TICKET_DELETED_FOREVER'] = 'Ticket borrado para siempre';
$LANG['TEXT_TICKET_FLAGGED_AS_OVERDUE'] = 'Ticket etiquetado como vencido';
$LANG['TEXT_TICKET_NUM_STATUS_SET_CLOSED'] = 'Ticket #{0} pasa a estado CERRADO';
$LANG['TEXT_TICKET_NUMBER'] = 'Ticket #';
$LANG['TEXT_TICKET_STATUS'] = 'Ticket Status';
$LANG['TEXT_TICKET_STATUS_CHANGED_TO'] = 'Estado de ticket cambiado a {0}';
$LANG['TEXT_TICKET_STATUS_SET_TO_OPEN'] = 'Estado de ticket pasa a ser ABIERTO';
$LANG['TEXT_TICKET_THREAD'] = 'Hilo de Ticket';
$LANG['TEXT_TICKET_TRANSFERED_SUCESSFULLY_TO_DEPT'] = 'Ticket transferido correctamente al depto. {0}';
$LANG['TEXT_TICKET_UPDATED_SUCCESSFULLY'] = 'Ticket actualizado con éxito';
$LANG['TEXT_TICKET_WILL_REOPEN_NEW_POST']='el Ticket será reabierto con la publicación del mensaje';
$LANG['TEXT_TICKETS_STATUS'] = 'Estado del Ticket';
$LANG['TEXT_TOTAL_ANSWERED_TICKETS'] = "Respondido ({0})";
$LANG['TEXT_TOTAL_MY_TICKETS'] = 'Mis tickets ({0})';  	
$LANG['TEXT_TOTAL_OPEN_TICKETS'] = "Abiertos ({0})";	
// TEXT U
$LANG['TEXT_UNABLE_CREATE_TICKET'] = 'No se pudo crear el ticket. Por favor, corrija los errores a continuación y vuelva a intentarlo.';
$LANG['TEXT_UPDATE_TICKET'] = 'Actualizar ticket #{0}';
$LANG['TEXT_USED_FOR_OUTGOING_EMAILS'] = 'Usado para e-mails salientes, alertas y noticias al usuario y empleados'; 
// TEXT V
$LANG['TEXT_VIEW_OPEN']='Ver abiertos';
$LANG['TEXT_VIEW_CLOSED']='Ver cerrados';
$LANG['TEXT_VIEW_TICKET'] = 'Ver ticket';
$LANG['TEXT_VISIBLE_TO_CLIENT'] = 'Visible al cliente.';
// TEXT X
// TEXT Y
$LANG['TEXT_YOUVE_REACHED_MAXIMUM_FAILED_LOGIN_ATTEMPTS_ALLOWED']='Ha alcanzado el máximo número de fallos de inicio de sesión permitidos';
// TEXT W
$LANG['TEXT_WELCOME_BACK'] = 'Bienvenido ';
$LANG['TEXT_WELCOME_BACK_CLIENT'] = 'Bienvenido, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_STAFF'] = 'Bienvenido, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_VACATION']= 'Bienvenido! Esta catalogado como \'de vacaciones\' Cambie su estado o comuníqueselo al administrador.';
$LANG['TEXT_WELCOME_MSG'] = 'Para poder ofrecerle un mejor servicio gestionamos todas las peticiones de soporte utilizando un servicio de tickets . A todas las solicitudes se les asigna un número de ticket que puede utlizar para realizar un seguimiento a su consulta.';
$LANG['TEXT_WELCOME_TITLE'] = 'Bienvenido al centro de soporte.';

########
## Titles on pages and web pages
##
$LANG['TITLE'] = 'Servicio completo de tickets';
$LANG['TITLE_BAR_OFFLINE'] = 'Sistema de ticket para soporte';
$LANG['TITLE_BOX_NEW_TICKET'] = 'Nuevo ticket';
$LANG['TITLE_CLOSED_TICKETS'] = 'Tickets cerrados';
$LANG['TITLE_MY_PREFERENCES'] = 'Mis preferencias';
$LANG['TITLE_OFFLINE'] = 'El sistema de tickets para soporte está offline';
$LANG['TITLE_OPEN_PREVIOUS_TICKET'] = 'Abrir ticket previo';
$LANG['TITLE_OPEN_PREVIUS_TICKET'] = 'Abrir ticket existente';

?>







<?php

#Disable direct access.
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename( __FILE__ ))) die ('kwaheri rafiki!');

$LANG = array ();

# Language identification in iso-639
$LANG['LANGUAGE'] = 'ru';
//Word Name (english name)
$LANG['LANGUAGE_NAME'] = 'Russian';
//Native name of language (in the original language)
$LANG['LANGUAGE_NATIVE_NAME'] = 'Russian';
$LANG['DIRECTION'] = 'ltr';
$LANG['CODEPAGE'] = 'UTF-8';

########
##Alert Messages, normally used with JavaScript dialog box.
##
$LANG['ALERT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Превышено количество ошибочных попыток входа'."\n".
                'Почта: {0}'."\n".
				'Заявка#: {1}'."\n".
                'IP: {2}'."\n".
				'Время: {3}'."\n\n".
                'Попытки #{4}';

#######
## Error Mensages
##
$LANG['ERROR_ACCESS_DENIED_INVALID_TICKET'] = 'Доступ запрещён. Возможно неправильный номер Заявки';
$LANG['ERROR_EMAIL_PARSE_FAILED'] = 'Ошибка проверки почты';
$LANG['ERROR_FILE_REJECTED'] = 'Файл {0} отклонен!';
$LANG['ERROR_INVALID_FROM_ADDRESS'] = 'Ошибочный адрес отправителя';
$LANG['ERROR_INVALID_FILE_TYPE'] = 'Ошибочный тип файла';
$LANG['ERROR_MESSAGE_REQUIRED'] = 'Сообщение обязательно';
$LANG['ERROR_NAME_REQUIRED'] = 'Имя обязательно';
$LANG['ERROR_OCCURED'] = 'Возникли ошибки. Пожалуйста, попробуйте ещё раз';
$LANG['ERROR_OCCURED_TRY_AGAIN'] = 'Возникли ошибки. Пожалуйста, попробуйте ещё раз';
$LANG['ERROR_POSSIBLY_INVALID_TICKET'] = 'Доступ запрещён. Возможно неправильный номер Заявки';
$LANG['ERROR_SERVICES_NOT_AVAILABLE'] = 'Службы недоступны!';
$LANG['ERROR_SECURITY_REPEAT_RESULT_LOCK'] = 'Нарушение безопасности. Повторные нарушения приведут к блокировке Вашей учётной записи';
$LANG['ERROR_SECURITY_VIOLATION_YOUR_ACCOUNT_WILL_LOCKED'] = 'Нарушение безопасности. Повторные нарушения приведут к блокировке Вашей учётной записи';
$LANG['ERROR_UNABLE_SEND_MESSAGE_TRY_AGAIN'] = 'Невозможно отправить сообщение. Попробуйте ещё раз';
$LANG['ERROR_UNABLE_TO_POST_THE_RESPONSE']='Невозможно отправить ответ';
$LANG['ERROR_UNKNOW_ACTION'] = 'Неизвестное действие';
$LANG['ERROR_UNABLE_TO_POST_MESSAGE'] = 'Невозможно отправить сообщение. Попробуйте ещё раз';
$LANG['ERROR_UKNOW_ACTION'] = 'Неизвестное действие';
$LANG['ERROR_YOU_HAVE_REACHED_MAXIMUM_FAILED_LOGIN']='Вы достигли максимального количества попыток входа. Попробуйте ещё раз после 5 минут или <a href="open.php">откройте новую Заявку</a>';
$LANG['ERROR_YOU_MUST_CHANGE_PASSWORD'] = 'Вы должны изменить Ваш пароль чтобы продолжить';
$LANG['ERROR_SEARCH_TERM_MORE_3']='Поисковая фраза должна содержать более 3-х символов';

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
$LANG['LABEL_ACTIVE_IN_PARENTESIS'] = '(Активно)';
$LANG['LABEL_ADD_NEW_DEPT'] = 'Добавить новый отдел';
$LANG['LABEL_ADMIN_DASHBOARD'] = 'Админ. Доска';
$LANG['LABEL_ADMIN_PANEL'] = 'Админ. Панель';
$LANG['LABEL_ADVANCED'] = 'Дополнительно';
$LANG['LABEL_APPEND'] = 'Добавить';
$LANG['LABEL_APPEND_SIGNATURE'] = 'Добавить подпись';
$LANG['LABEL_ALL'] = 'Все';
$LANG['LABEL_ALL_DEPARTMENTS'] = 'Все отделы';
$LANG['LABEL_ANSWER'] = 'Ответ';
$LANG['LABEL_API'] = 'API';
$LANG['LABEL_ASSIGN'] = 'Назначить';
$LANG['LABEL_ASSIGN_TO_STAFF'] = 'Назначить персоналу';
$LANG['LABEl_ASSIGNED_TICKETS'] = 'Назначенные Заявки';
$LANG['LABEL_ASC'] = 'ASC';
$LANG['LABEL_ASCENDING'] = 'Возрастание';
$LANG['LABEL_ATTACHMENT'] = 'Вложение';
$LANG['LABEL_ATTACHMENTS'] = 'Вложения';
$LANG['LABEL_AUTO_RESPONSE_EMAIL'] = 'Почта автоответчика';
$LANG['LABEL_AUTORESPONDERS'] = 'Автоответчик';
$LANG['LABEL_AUTORESP'] = 'Автоотв.';
// Label B
$LANG['LABEL_BASIC'] = 'Основное';
// Label C
$LANG['LABEL_CLOSE'] = 'Закрыть';
$LANG['LABEL_CLOSED'] = 'Закрыто';
$LANG['LABEL_CLOSE_TICKET'] = 'Закрыть Заявку';
$LANG['LABEL_CLOSED_TICKETS'] = 'Закрытые Заявки';
$LANG['LABEL_CANCEL'] = 'Отмена';
$LANG['LABEL_CANNED_RESPONSE'] = 'Ожидает отклика';
$LANG['LABEL_CATEGORY'] = 'категория';
$LANG['LABEL_CATEGORY_DEPT'] = 'Категория/Отдел';
$LANG['LABEL_CHANGE_PASSWORD'] = 'Изменить Пароль';
$LANG['LABEL_CHECK_STATUS'] = 'Проверить Статус';
$LANG['LABEL_Closed'] = 'Закрыто';
$LANG['LABEL_CREATE_DATE'] = 'Дата создания';
// Label D
$LANG['LABEL_DASHBOARD'] = 'Доска';
$LANG['LABEL_DATE'] = 'Дата';
$LANG['LABEL_DATE_SPAN'] = 'Диапазон Даты';
$LANG['LABEL_DEFAULT'] = 'По умолчанию';
$LANG['LABEL_DELETE'] = 'Удалить';
$LANG['LABEL_DELETE_DEPT_S'] = 'Удалить Отдел(ы)';
$LANG['LABEL_DEPARTMENT'] = 'Отдел';
$LANG['LABEL_DEPARTMENTS'] = 'Отделы';
$LANG['LABEL_DEPT_MANAGER'] = 'Руководитель Отдела';
$LANG['LABEL_DEPT_MANAGER_NONE'] = 'Нет';
$LANG['LABEL_DEPT'] = 'Отдел';
$LANG['LABEL_DEPT_ACCESS'] = 'Доступ Отдела';
$LANG['LABEL_DEPT_NAME'] = 'Имя Отдела';
$LANG['LABEL_DEPT_EMAIL'] = 'Почта Отдела';
$LANG['LABEL_DEPT_EMAIL_ABOVE'] = 'Почта Отдела (выше)';
$LANG['LABEL_DEPT_SIGNATURE'] = 'Подпись Отдела';
$LANG['LABEL_DEPT_TYPE'] = 'Тип Отдела';
$LANG['LABEL_DESC'] = 'Опис.';
$LANG['LABEL_DESCENDING'] = 'Убывание';
$LANG['LABEL_DISABLED_IN_PARENTESIS'] = '(Отключено)';
$LANG['LABEL_DIRECTORY'] = 'Каталог';
$LANG['LABEL_DIRECTORY_STAFF'] = 'Каталог персонала';
// Label E
$LANG['LABEL_EMAIL'] = 'Почта';
$LANG['LABEL_EMAILS'] = 'Почты';
$LANG['LABEL_EMAILS_SETTINGS'] = 'Настройки почты';
$LANG['LABEL_EMAIL_ADDRESS'] = 'Электронная почта';
$LANG['LABEL_EMAIL_TEMPLATES'] = 'Шаблоны почты';
$LANG['LABEL_ENABLE_SYSTEM_OFF_LINE'] = 'Включить';
$LANG['LABEL_ENTER_NOTE_CONTENT'] = 'Введите содержимое заметки.';
// Label F
$LANG['LABEL_FROM'] = 'От.';
$LANG['LABEL_FULL_NAME'] = 'Полное имя';
// Label G
$LANG['LABEL_GENERAL_SETTINGS'] = 'Основные Настройки';
$LANG['LABEL_GO'] = 'Перейти';
// Label H
$LANG['LABEL_HELP_TOPIC'] = 'Раздел';
$LANG['LABEL_HELP_TOPICS'] = 'Разделы';
$LANG['LABEL_HELPDESK_ATTEMPT_ALLOWED_BEFORE_A'] = 'попыток разрешено&nbsp;прежде чем';
$LANG['LABEL_HELPDESK_BIND_STAFF_SESSION_TO_IP'] = 'Привязать сессию персонала к IP';
$LANG['LABEL_HELPDESK_CLIENT_EXCESSIVE_LOGINS'] = 'Превышение попыток входа клиентом';
$LANG['LABEL_HELPDESK_CLIENT_SESSION_TIMEOUT'] = 'Таймаут сессии клиента';
$LANG['LABEL_HELPDESK_CLICKABLE_URLS'] = 'Нажимаемые ссылки адресов';
$LANG['LABEL_HELPDESK_DEFAULT_DEPARTMENT'] = 'Стандартный отдел';
$LANG['LABEL_HELPDESK_DEFAULT_EMAIL_TEMPLATES'] = 'Стандартные шаблоны почты';
$LANG['LABEL_HELPDESK_ENABLE_AUTO_CRON'] = 'Включить планировщик';
$LANG['LABEL_HELPDESK_MAKE_URLS_CLICKABLE'] = 'Сделать ссылки нажимаемыми';
$LANG['LABEL_HELPDESK_NAME_TITLE'] = 'Имя/Заголовок поддержки';
$LANG['LABEL_HELPDESK_NONE_DISABLE_LOGGER'] = 'Нет (отключить протокол)';
$LANG['LABEL_HELPDESK_PENALTY_IN_MINUTES'] = 'мин. тайм-аут (штрафное время в минутах)';
$LANG['LABEL_HELPDESK_PURGE_NONE_DISABLE'] = 'Нет (отключить)';
$LANG['LABEL_HELPDESK_PURGE_LOGS_AFTER'] = 'Удалить логи после';
$LANG['LABEL_HELPDESK_DEFAULT_PAGE_SIZE'] = 'Стандартный размер страницы';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_DEPARTMENT'] = 'Выберите стандартный отдел';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_TEMPLATE'] = 'Выберите стандартный шаблон';
$LANG['LABEL_HELPDESK_STAFF_EXCESSIVE_LOGINS'] = 'Превышение попыток входа персоналом';
$LANG['LABEL_HELPDESK_STAFF_SESSION_TIMEOUT'] = 'Таймаут сессии персонала';
$LANG['LABEL_HELPDESK_STATUS'] = 'Статус поддержки';
$LANG['LABEL_HELPDESK_SYSTEM_LOG_LEVEL'] = 'Уровень логгирования системы';
$LANG['LABEL_HELPDESK_URL'] = 'Адрес поддержки';
// Label I
$LANG['LABEL_ISSUE_SUMMARY'] = 'Основная информация по Заявкам';
$LANG['LABEL_INTERNAL_NOTE'] = 'Внутренняя Заметка'; //newticket.inc
$LANG['LABEL_INTERNAL_NOTES'] = 'Внутренние Заметки';
$LANG['LABEL_IP_ADDRESS'] = 'IP Адрес';

// Label J

// Label K
$LANG['LABEL_KNOWLEDGE_BASE'] = 'База знаний';
$LANG['LABEL_KNOWLEDGE_BASE_PREMATE'] = 'База знаний: Готовые';
// Label L
$LANG['LABEL_LOG_OUT'] = 'Выйти';
$LANG['LABEL_LAST_UPDATED'] = 'Обновлено';
// Label M
$LANG['LABEL_MAKE_PUBLIC'] = 'Сделать публичным';
$LANG['LABEL_MAKE_PRIVATE'] = 'Сделать скрытым';
$LANG['LABEL_MANAGER'] = 'Менеджер';
$LANG['LABEL_MESSAGE'] = 'Сообщение';
$LANG['LABEL_MONTHS'] = 'Месяца';
$LANG['LABEL_MONTH'] = 'Месяц';
$LANG['LABEL_MY_ACCOUNT'] = 'Учётная запись';
$LANG['LABEL_MY_PREFERENCE'] = 'Настройки';
$LANG['LABEL_MY_PROFILE'] = 'Профиль';
$LANG['LABEL_MY_SIGNATURE'] = 'Подпись';
// Label N
$LANG['LABEL_NAME'] = 'Имя';
$LANG['LABEL_NEW_DEPARTMENT'] = 'Новый Отдел';
$LANG['LABEL_NEW_MESSAGE'] = 'Новое Сообщение';
$LANG['LABEL_NEW_PREMADE_REPLY'] = 'Новый Готовый ответ';
$LANG['LABEL_NEW_TICKET'] = 'Новая Заявка';
$LANG['LABEL_NEW_TICKET_PRIORITY'] = 'Приоритет новой Заявки';
$LANG['LABEL_NO_MANAGER_ADD_USERS'] = 'Нет Пользователей (Добавить Пользователей)';
$LANG['LABEL_NONE'] = 'Нет';
$LANG['LABEL_NOTE_TITLE'] = 'Заголовок заметки';
// Label O
$LANG['LABEL_OPEN'] = 'открыто';
$LANG['LABEL_OPEN_TICKET'] = 'Открыть Заявку';
$LANG['LABEL_OPEN_NEW_TICKET'] = 'Открыть Новую Заявку';
$LANG['LABEL_OTHER'] = 'Другое';
$LANG['LABEL_OUTGOING_EMAIL'] = 'исходящая почта';
$LANG['LABEL_OVERDUE'] = 'Просрочено';
// Label P
$LANG['LABEL_PREFERENCES'] = 'Настройки';
$LANG['LABEL_PUBLIC'] = 'Публично';
$LANG['LABEL_PRIVATE'] = 'Скрыто';
$LANG['LABEL_PRIVATE_HIDDEN'] = 'Скрыто (спрятано)';
$LANG['LABEL_PAGE'] = 'страница';
$LANG['LABEL_PASSWORD'] = 'Пароль';
$LANG['LABEL_PASSWORD_AGAIN'] = 'Пароль (ещё раз)';
$LANG['LABEL_PHONE'] = 'Телефон';
$LANG['LABEL_POST_INTERNAL_NOTE'] = 'Отправить Внутреннюю Заметку';
$LANG['LABEL_POST_REPLY']='Отправить Ответ';
$LANG['LABEL_PREFERENCES'] = 'Настройки';
$LANG['LABEL_PRIORITY'] = 'Приоритет';
$LANG['LABEL_PRIMARY_OUTGOING_EMAIL'] = 'Первичная Исходящая Почта';
$LANG['LABEL_PREMADE_REPLIES'] = 'Готовые Ответы';
// Label Q
$LANG['LABEL_QUERY'] = 'Запрос';
$LANG['LABEL_QUERY_RETURNED_ZERO_RESULT'] = 'Запрос вернул 0 результатов';
// Label R
$LANG['LABEL_RE_ASSIGN_TICKET'] = 'Переназначить Персоналу';
$LANG['LABEL_REOPEN'] = 'Открыть повторно';
$LANG['LABEL_REOPEN_TICKET'] = 'Открыть Заявку повторно';
$LANG['LABEL_RESET'] = 'Сброс';
$LANG['LABEL_RESULTS_PER_PAGE'] = 'Результатов на странице';
$LANG['LABEL_REPLY_TITLE'] = 'Заголовок ответа';
// Label S
$LANG['LABEL_SEARCH'] = 'Поиск';
$LANG['LABEL_SEARCH_FOR'] = 'Найти';
$LANG['LABEL_SELECT'] = 'Выбор';
$LANG['LABEL_SELECT_DEPARTMENT'] = 'Выбрать Отдел';
$LANG['LABEL_SELECT_MANAGER_OPTIONAL'] = 'Выбрать менеджера (необязательно)';
$LANG['LABEL_SELECT_ONE_TOPIC'] = 'Выберите тему';
$LANG['LABEL_SELECT_ONE_EMAIL'] = 'Выберите почту';
$LANG['LABEL_SELECT_PRIORITY'] = 'Выбрать приоритет';
$LANG['LABEL_SELECT_SOURCE'] = 'Выбрать источник';
$LANG['LABEL_SELECT_TEMPLATE'] = 'Выбрать шаблон';
$LANG['LABEL_SETTINGS'] = 'Настройки';
$LANG['LABEL_SORT_BY'] = 'Сортировать по';
$LANG['LABEL_SORT_BY_TITLE'] = 'Сортировать по заголовку';
$LANG['LABEL_SORT_BY_UPDATE_DATE'] = 'Сортировать по дате обновления';
$LANG['LABEL_STAFF'] = 'Персонал';
$LANG['LABEL_STAFF_MEMBER'] = 'Член Персонала';
$LANG['LABEL_STAFF_MEMBERS'] = 'Члены Персонала';
$LANG['LABEL_STAFF_PANEL'] = 'Панель Персонала';
$LANG['LABEL_STAFF_VIEWTICKET_SELECT_ACTION']='Выберите действие';
$LANG['LABEL_STAFF_VIEWTICKET_CHANGE_PRIORITY']='Изменить приоритет';
$LANG['LABEL_STAFF_VIEWTICKET_MARK_OVERDUE']='Пометить просроченным';
$LANG['LABEL_STAFF_VIEWTICKET_RELEASE_UNASSIGN']='Освободить (отменить назначение)';
$LANG['LABEL_STAFF_VIEWTICKET_CLOSE_TICKET']='Закрыть Заявку';
$LANG['LABEL_STAFF_VIEWTICKET_REOPEN_TICKET']='Открыть Заявку повторно';
$LANG['LABEL_STATUS'] = 'Статус';
$LANG['LABEL_STATUS_IS'] = 'Статус';
$LANG['LABEL_SUBJECT'] = 'Тема';
$LANG['LABEL_SUBMIT'] = 'Отправить';
$LANG['LABEL_SUBMIT_TICKET'] = 'Отправить Заявку';
$LANG['LABEL_SYSTEM_DEFAULT_TEMPLATE'] = 'Шаблон по умолчанию';
$LANG['LABEL_SYSTEM_LOGS'] = 'Журнал системы';
$LANG['LABEL_SYSTEM_LOGS_ALL'] = 'Все';
$LANG['LABEL_SYSTEM_LOGS_DATESPAN'] = 'Дата';
$LANG['LABEL_SYSTEM_LOGS_DEBUG'] = 'Отлаживать';
$LANG['LABEL_SYSTEM_LOGS_ERRORS'] = 'Ошибки';
$LANG['LABEL_SYSTEM_LOGS_FROM'] = 'От';
$LANG['LABEL_SYSTEM_LOGS_GO'] = 'Перейти';
$LANG['LABEL_SYSTEM_LOGS_NO_RESULTS'] = 'Запрос вернул 0 результатов.';
$LANG['LABEL_SYSTEM_LOGS_TO'] = 'кому';
$LANG['LABEL_SYSTEM_LOGS_TYPE'] = 'Тип';
$LANG['LABEL_SYSTEM_LOGS_WARNINGS'] = 'Предупреждения';
$LANG['LABEL_SYSTEM_PREFERENCES_AND_SETTINGS'] = 'Системные настройки и предпочтения';
$LANG["LABEL_SYSTEM_SETTINGS"] = 'Настройки системы';
// Label T
$LANG['LABEL_TELEPHONE'] = 'Телефон';
$LANG['LABEL_TICKET'] = 'Заявка';
$LANG['LABEL_TICKET_ID'] = 'Номер Заявки';
$LANG['LABEL_TICKET_NUMBER'] = 'Заявка#';
$LANG['LABEL_TICKET_STATUS'] = 'Статус Заявки';
$LANG['LABEL_TO'] = 'Кому.';
$LANG['LABEL_TITLE'] = 'Заголовок';
$LANG['LABEL_TOGGLE'] = 'Переключить';
$LANG['LABEL_TRANSFER'] = 'Перенести';
$LANG['LABEL_TYPE'] = 'Тип';
// Label U
$LANG['LABEL_UPDATE_DATE'] = 'Последнее обновление';
$LANG['LABEL_UPDATE_DEPARTMENT'] = 'Обновление отдела';
$LANG['LABEL_USERNAME'] = 'Пользователь';
$LANG['LABEL_USERS'] = 'Пользователи';
// Label V
$LANG['LABEL_VIEW_STATUS'] = 'Просмотреть статус';

#######
## Generic text for all site, if have to text repeted in
## Client or Staff ends, is prefixed with correct name.
##
// TEXT A
$LANG['TEXT_ACCESS_DENIED']='Доступ запрещён';
$LANG['TEXT_ALL_DEPARTMENTS'] = 'Все Отделы';
$LANG['TEXT_ANSWERED_STATS'] = 'Ответы по Заявкам ({0})';
$LANG['TEXT_ANSWERED_TICKETS'] = 'Отвеченные Заявки';
$LANG['TEXT_AND_STATUS_SET_TO'] = ' и статус установлен в {0}';
$LANG['TEXT_AND_TICKET_STATUS_SET_TO_CLOSED'] = ' и статус Заявки изменён на ЗАКРЫТО';
$LANG['TEXT_ASSIGNED_TICKETS'] = 'Назначенные Заявки';
$LANG['TEXT_AUTHENTICATION_REQUIRED']='Требуется авторизация';
$LANG['TEXT_AUTHENTICATION_REQUIRED_QUESTION']='Требуется авторизация?';
$LANG['TEXT_ANY_STATUS'] = 'Любой Статус';
$LANG['TEXT_ATTACH_FILE']='Прикрепить Файл';
// TEXT B
$LANG['TEXT_BOX_NEW_TICKET'] = 'Отправка новой Заявки. Пожалуйста, предоставьте как можно больше информации для того, чтобы мы смогли Вам помочь. Для того, чтобы обновить уже имеющуюся Заявку, пожалуйста, используйте форму справа. Действительный почтовый адрес обязателен.';
// TEXT C
$LANG['TEXT_CAM_BE_APPENDED_TO_RESPONSES'] = 'может быть добавлены к ответам.&nbsp;(доступно как выбор для Отделов)';
$LANG['TEXT_CLOSED_TICKETS'] = 'Закрытые Заявки';
$LANG['TEXT_CLOSED'] = 'Закрыто';
$LANG['TEXT_COMMENTS_REASONS_TRANSFER'] = 'Комментарии/Причины для переноса. &nbsp;(<i>Внутренняя заметка</i>)';
$LANG['TEXT_CREATE_FAILED'] = 'Ошибка Создания ';
// TEXT D
$LANG['TEXT_DEPT_DEPENDS_ON_EMAIL'] = 'Отдел зависит от настроек почты &amp; для входящих заявок.';
$LANG['TEXT_DEPT_TRANSFER'] = 'Перенос Отдела';
$LANG['TEXT_DEPT_UPDATED_SUCCESSFULLY'] = 'Отдел успешно обновлен';
// TEXT E
$LANG['TEXT_EMAIL_ADDED_TO_BANLIST'] = 'Почта ({0}) добавлена в список исключений';
$LANG['TEXT_EMAIL_ADDRESS_USED_SEND_AUTO_RESPONSES'] = 'Почта, используемая для пересылки авто-ответа если включено.';
$LANG['TEXT_EMAIL_REMOVED_FROM_BANLIST'] = 'Почта удалена из списка исключений';
$LANG['TEXT_ENTER_MESSAGE']='Введите Сообщение';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS']='Превышено попыток входа';
$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']='Превышено попыток входа Клиентом';
// TEXT F
$LANG['TEXT_FILE_REJECTED'] = 'Файл [ {0} ] отклонён';
$LANG['TEXT_FILE_IS_TOO_BIG'] = 'Файл слишком большой. Максимально доступно {0} байт';
$LANG['TEXT_FORGOT_YOUR_LOGIN_INFO']='Забыли Ваши учётные данные? Пожалуйста, <a href="open.php">откройте новую Заявку</a>.';
// TEXT G
$LANG['TEXT_GENERAL_INQUIRY'] = 'Генеральный Запрос';
$LANG['TEXT_GLOBAL_AUTO_RESPONSE_SETTINGS'] = 'Глобальные настройки автоответчика должны быть включены в Настройках для Отдела.';
// TEXT H
$LANG['TEXT_HOME'] = 'Главная';
$LANG['TEXT_HEADER_TITLE']='osTicket :: Система Поддержки';
$LANG['TEXT_HELPDESK_STAFF_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Максимальное время неактивности для Персонала в минутах. Введите 0 для отключения тайм-аута</i>)';
$LANG['TEXT_HELPDESK_CLIENT_MAX_IDLE_TIME_IN_MINUTES'] = '(<i>Максимальное время неактивности для Клиента в минутах. Введите 0 для отключения тайм-аута</i>)';
$LANG['TEXT_HELPDESK_ENABLE_CRON_CALL_ON_STAFF_ACTIVITY'] = 'Включить звонок планировщика в случае деятельности Персонала';
// TEXT I
$LANG['TEXT_INTERNAL_NOTE_POSTED'] = 'Внутренняя заметка отправлена';
$LANG['TEXT_INVALID_LOGIN'] = 'Неправильное имя пользователя';
$LANG['TEXT_INVALID_FILE_TYPE'] = 'Ошибочный тип поля [ {0} ]';
// TEXT J
// TEXT K
// TEXT L
$LANG['TEXT_LOGIN_VIEW_STATUS_OF_TICKET']='Для просмотра статуса Заявки, введите Ваши учётные данные.<br/>'.
        'Если это Ваше первое обращение или Вы потеряли номер Заявки, пожалуйста, <a href="open.php">нажмите здесь</a> чтобы открыть новую Заявку';
$LANG['TEXT_LOG_OUT'] = 'Выход';
// TEXT M
$LANG['TEXT_MY_TICKETS'] = 'Заявки';
$LANG['TEXT_MY_TICKETS_STATS'] = 'Заявки ({0})';
$LANG['TEXT_MY_ACCOUNT'] = 'Учетная запись';
// TEXT N
$LANG['TEXT_NEW_TICKET'] = 'Новая Заявка';
$LANG['TEXT_NOT_THIS_USER'] = 'Я не этот пользователь';
$LANG['TEXT_NEW_TICKET_AUTO_RESPONSE'] = 'Письмо с номером Заявки было отправлено <b>{0}</b>. Вам потребуется номер Заявки вместе с адресом электронной почты для того, чтобы следить он-лайн.<br><br>Если Вы хотите отправить дополнительную информацию касательно Заявки, пожалуйста, следуйте инструкциям, высланным по электронной почте.';
$LANG['TEXT_NO_TICKETS_FOUND']='Заявок не найдено.';
// TEXT O
$LANG['TEXT_OPEN_NEW_TICKET'] = 'Открыть новую Заявку';
$LANG['TEXT_OPEN_PREVIOUS_TICKET'] = 'Проверить статус предварительно открытой Заявки. Мы ведём полную историю Ваших обращений и ответов на них.';
$LANG['TEXT_OPEN_TICKETS'] = 'Открытые Заявки';
$LANG['TEXT_OPEN'] = 'Открыто';
$LANG['TEXT_OVERDUE_STATS'] = 'Просрочено ({0})';
$LANG['TEXT_OVERDUE_TICKETS'] = 'Просроченые Заявки';
$LANG['TEXT_OVERDUE'] = 'Просрочено';
$LANG['TEXT_OFFLINE']='Спасибо за Ваше обращение.<br>'.
         'Служба Поддержки недоступна в данное время. Пожалуйста, повторите Ваше обращение позднее.';
$LANG['TEXT_OFFLINE_MODE_WILL_DISABLE_CLIENT'] = 'Режим оффлайн отключит клиентский интерфейс и <b>только</b>'.
         ' позволит <b>супер-администраторам</b> входить в Панель Персонала';
$LANG['TEXT_OF_SELECTED_TICKETS_REOPENED'] = "{0} из {1} выбранных заявок открыто повторно";
$LANG['TEXT_OF_SELECTED_TICKETS_CLOSED'] = "{0} из {1} выбранных заявок закрыто";
$LANG['TEXT_OF_SELECTED_TICKETS_MARKED_OVERDUE'] = "{0} из {1} выбранных заявок отмечено просроченными";
$LANG['TEXT_OF_SELECTED_TICKETS_DELETED'] = "{0} из {1} выбранных заявок удалено";
// TEXT P
$LANG['TEXT_POST_REPLY']='Отправить Ответ';
$LANG['TEXT_PLEASE_FILL_STAFF_FORM_BELOW_OPEN_NEW_TICKET'] = 'Пожалуйста, заполните форму для того, чтобы открыть новую Заявку.';
$LANG['TEXT_PLEASE_FILL_FORM_NEW_TICKET'] = 'Пожалуйста, заполните форму для того, чтобы открыть новую Заявку.';
$LANG['TEXT_PLEASE_TAKE_A_MINUTE_TO_DELETE_INSTALL'] = 'Пожалуйста, уделите время чтобы удалить <strong>setup/install</strong> в целях безопасности.';
$LANG['TEXT_PRIORITY_CHANGED_SUCCESSFULLY'] = 'Приоритет успешно изменён';
// TEXT Q
// TEXT R
$LANG['TEXT_REFRESH']='Обновить';
$LANG['TEXT_REQUIRED_WHEN_DEPT_IS_PUBLIC'] = 'Обязательно если Отдел публичный';
$LANG['TEXT_RESPONSE_POSTED_SUCCESSFULLY'] = 'Ответ успешно отправлен';
// TEXT S
$LANG['TEXT_SELECT_DEPARTMENTS_GROUP_MEMBERS'] = 'Выберите членов Отдела, которым позволено получать доступ вдобавок к их собственному Отделу.';
$LANG['TEXT_SELECT_PREMADE_REPLY'] = 'Выберите шаблон ответа';
$LANG['TEXT_SELECT_STAFF_MEMBER'] = '-Выберите члена Персонала.-';
$LANG['TEXT_SELECT_TARGET_DEPT'] = '-Выберите конечный Отдел-';
$LANG['TEXT_SELECT_ONE_EMAIL'] = '-Выберите один из адресов почты-';
$LANG['TEXT_SELECT_ONE_TOPIC'] = '-Выберите один из пунктов-';
$LANG['TEXT_SESSION_TIMED_OUT_DUE_TO_INACTIVITY']='Тайм-аут сессии по неактивности';
$LANG['TEXT_SORT_BY_CATEGORY'] = 'Сортировать по Категории';
$LANG['TEXT_SORT_BY_DATE']='Сортировать по Дате';
$LANG['TEXT_SORT_BY_DEPARTMENT']='Сортировать по Отделу';
$LANG['TEXT_SORT_BY_TICKET_ID']='Сортировать по номеру Заявки';
$LANG['TEXT_SORT_BY_PRIORITY'] = 'Сортировать по Приоритету';
$LANG['TEXT_SHOW_FROM_TO_OF_ALL'] = 'Показ {0} - {1} из {2}';
$LANG['TEXT_SHOW_ZERO'] = 'Показ 0 (ноль)';
$LANG['TEXT_SEARCH_RESULTS'] = 'Результаты Поиска';
$LANG['TEXT_SYSTEM_IS_OFF_LINE'] = '<strong>Система переведена в оффлайн режим</strong> - Интерфейс клиента отключен и ТОЛЬКО Администраторы имеют доступ.';
$LANG['TEXT_SUPPORT_TEAM'] = 'Служба Поддержки';
$LANG['TEXT_SUPPORT_TICKET_SISTEM'] = '<span>Система поддержки</span> по Заявкам';
$LANG['TEXT_SUPPORT_CENTER'] = 'Центр Поддержки';
// TEXT T
$LANG['TEXT_TOTAL_OPEN_TICKETS'] = "Открыто ({0})";
$LANG['TEXT_TOTAL_ANSWERED_TICKETS'] = "Отвечено ({0})";
$LANG['TEXT_TOTAL_MY_TICKETS'] = 'Заявки ({0})';
$LANG['TEXT_TICKET_ASSIGNED_TO_STAFF'] = 'Заявок назначено {0}';
$LANG['TEXT_TICKET_CREATED'] = 'Заявка на запрос поддержки создана';
$LANG['TEXT_TICKET_CREATED_SUCCESSFULLY'] = 'Заявка создана успешно';
$LANG['TEXT_TICKET_DELETED_FOREVER'] = 'Заявка удалена безвозвратно';
$LANG['TEXT_TICKET_FLAGGED_AS_OVERDUE'] = 'Заявка помечена как ПРОСРОЧЕННАЯ';
$LANG['TEXT_TICKET_NUM_STATUS_SET_CLOSED'] = 'Заявка #{0} помечена как ЗАКРЫТАЯ';
$LANG['TEXT_TICKET_NUMBER'] = 'Завка #';
$LANG['TEXT_TICKET_STATUS'] = 'Статус Заявки';
$LANG['TEXT_TICKET_STATUS_CHANGED_TO'] = 'Статус Заявки изменился на {0}';
$LANG['TEXT_TICKET_STATUS_SET_TO_OPEN'] = 'Статус Заявки изменился на ОТКРЫТАЯ';
$LANG['TEXT_TICKET_THREAD'] = 'История Заявки';
$LANG['TEXT_TICKET_TRANSFERED_SUCESSFULLY_TO_DEPT'] = 'Заявка успешно переведена в {0} отдел';
$LANG['TEXT_TICKET_UPDATED_SUCCESSFULLY'] = 'Заявка обновлена успешно';
$LANG['TEXT_TICKET_WILL_REOPEN_NEW_POST']='Заявка будет повторно открыта после появления сообщения';
$LANG['TEXT_TICKETS_STATUS'] = 'Статус Заявки';
$LANG['TEXT_THANKS_NEW_TICKET'] = 'Спасибо что связались с нами.<br>Заявка была успешно создана. В случае необходимости наш персонал обязательно свяжется с Вами.';
// TEXT U
$LANG['TEXT_UNABLE_CREATE_TICKET'] = 'Невозможно оформить Заявку!';
$LANG['TEXT_UPDATE_TICKET'] = 'Обновить Заявку #{0}';
$LANG['TEXT_USED_FOR_OUTGOING_EMAILS'] = 'Используется для отправки электронной почты, уведомлений и другой информации.';
// TEXT V
$LANG['TEXT_VIEW_OPEN']='Просмотр Открытых';
$LANG['TEXT_VIEW_CLOSED']='Просмотр Закрытых';
$LANG['TEXT_VIEW_TICKET'] = 'Прсмотр Заявки';
$LANG['TEXT_VISIBLE_TO_CLIENT'] = 'Видимо для Клиента.';
// TEXT X
// TEXT Y
$LANG['TEXT_YOUVE_REACHED_MAXIMUM_FAILED_LOGIN_ATTEMPTS_ALLOWED']='Вы превысили количество ошибочных попыток входа.';
// TEXT W
$LANG['TEXT_WELCOME_BACK_VACATION']= 'Добро Пожаловать! Вы числитесь как \'в отпуске\' Пожалуйста, свяжитесь с менеджером и дайте знать что Вы вернулись.';
$LANG['TEXT_WELCOME_BACK_CLIENT'] = 'Добро Пожаловать, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_STAFF'] = 'Добро Пожаловать, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_TITLE'] = 'Добро пожаловать в Центр Поддержки Клиентов!';
$LANG['TEXT_WELCOME_MSG'] = 'В целях оптимизации запросов на оказание поддержки и лучшего обслуживания, мы используем систему поддержки по Заявкам. Каждому запросу в службу поддержки присваивается уникальный номер, который можно использовать для отслеживания прогресса и ответа онлайн. Для справки мы предоставляем полный архив и историю всех Ваших запросов поддержки.';
$LANG['TEXT_WELCOME_BACK'] = 'Добро Пожаловать';

########
## Titles on pages and web pages
##
$LANG['TITLE'] = 'Служба обработки Заявок';
$LANG['TITLE_BOX_NEW_TICKET'] = 'Новая Заявка';
$LANG['TITLE_BAR_OFFLINE'] = 'Служба Поддержки';
$LANG['TITLE_MY_PREFERENCES'] = 'Настройки';
$LANG['TITLE_OFFLINE'] = 'Служба Поддержки не работает';
$LANG['TITLE_OPEN_PREVIOUS_TICKET'] = 'Открыть предидущую Заявку';
$LANG['TITLE_CLOSED_TICKETS'] = 'Закрытые Заявки';
?>

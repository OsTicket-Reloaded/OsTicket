<?php

#Disable direct access.
if (!strcasecmp(basename($_SERVER['SCRIPT_NAME']), basename( __FILE__ ))) die ('kwaheri rafiki!');

$LANG = array ();

# Language identification in iso-639
$LANG['LANGUAGE'] = 'zh_cn';
//Word Name (english name)
$LANG['LANGUAGE_NAME'] = 'Simple Chinese';
//Native name of language (in the original language)
$LANG['LANGUAGE_NATIVE_NAME'] = 'Simple Chinese';
$LANG['DIRECTION'] = 'ltr';
$LANG['CODEPAGE'] = 'UTF-8';

########
##Alert Messages, normally used with JavaScript dialog box.
##
$LANG['ALERT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT'] = '过多的登入尝试'."\n".
                'Email: {0}'."\n".
				'Ticket#: {1}'."\n".
                'IP: {2}'."\n".
				'时间: {3}'."\n\n".
                '尝试次数 #{4}';

#######
## Error Mensages
##
$LANG['ERROR_ACCESS_DENIED_INVALID_TICKET'] = '访问被拒绝，Ticket ID可能不正确';
$LANG['ERROR_EMAIL_PARSE_FAILED'] = 'Email错误';
$LANG['ERROR_FILE_REJECTED'] = '文件{0} 被拒绝!';
$LANG['ERROR_INVALID_FROM_ADDRESS'] = '错误的FROM地址';
$LANG['ERROR_INVALID_FILE_TYPE'] = '错误的文件类型';
$LANG['ERROR_MESSAGE_REQUIRED'] = '说明为必填项';
//$LANG['ERROR_INVALID_FROM_ADDRESS']
$LANG['ERROR_NAME_REQUIRED'] = '名字为必填项';
//$LANG['ERROR_MESSAGE_REQUIRED']
$LANG['ERROR_OCCURED'] = '系统繁忙，请重试';
$LANG['ERROR_OCCURED_TRY_AGAIN'] = '系统繁忙，请重试';
$LANG['ERROR_POSSIBLY_INVALID_TICKET'] = '访问被拒绝，Ticket ID可能不正确';
//$LANG['ERROR_SEARCH_TERM_MORE_3']
$LANG['ERROR_SECURITY_REPEAT_RESULT_LOCK'] = '您的行为不安全，重复尝试将导致您的账号被锁定。';
$LANG['ERROR_SECURITY_VIOLATION_YOUR_ACCOUNT_WILL_LOCKED'] = '您的行为不安全，重复尝试将导致您的账号被锁定。';
$LANG['ERROR_SERVICES_NOT_AVAILABLE'] = '服务不可用';
$LANG['ERROR_UNABLE_SEND_MESSAGE_TRY_AGAIN'] = '发布失败，请重试。';
$LANG['ERROR_UNABLE_TO_POST_THE_RESPONSE'] = '发布失败，请重试。';
$LANG['ERROR_UNABLE_TO_POST_MESSAGE'] = '发布失败，请重试。';
$LANG['ERROR_UNKNOW_ACTION'] = '错误的Action';
$LANG['ERROR_YOU_HAVE_REACHED_MAXIMUM_FAILED_LOGIN'] = '您已经达到可尝试的最大登入次数，请5分钟后再试，或者 <a href="open.php">创建一个新的Ticket</a>';
$LANG['ERROR_YOU_MUST_CHANGE_PASSWORD'] = '请修改密码后继续';
$LANG['ERROR_SEARCH_TERM_MORE_3'] = '搜索关键字必须大于3个字符';

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
$LANG['LABEL_ACTIVE_IN_PARENTESIS'] = '(启用)';
$LANG['LABEL_ADD_NEW_DEPT'] = '添加新部门';
$LANG['LABEL_ADMIN_DASHBOARD'] = '管理工作台';
$LANG['LABEL_ADMIN_PANEL'] = '管理面板';
$LANG['LABEL_ADVANCED'] = '高级';
$LANG['LABEL_ALL'] = '全部';
$LANG['LABEL_ALL_DEPARTMENTS'] = '全部部门';
$LANG['LABEL_API'] = 'API';
$LANG['LABEL_APPEND'] = '追加';
$LANG['LABEL_APPEND_SIGNATURE'] = '追加签名'; 
$LANG['LABEL_ASC'] = '升序';
$LANG['LABEL_ASCENDING'] = '升序';
$LANG['LABEL_ASSIGN'] = '分配';
$LANG['LABEL_ASSIGN_TO_STAFF'] = '分配给同事';
$LANG['LABEL_ASSIGNED_TICKETS'] = '分配Ticket';
$LANG['LABEL_ATTACHMENT'] = '附件';
$LANG['LABEL_ATTACHMENTS'] = '附件';
$LANG['LABEL_AUTO_RESPONSE_EMAIL'] = '自动回复Email';
$LANG['LABEL_AUTORESPONDERS'] = '自动回复人';
$LANG['LABEL_AUTORESP'] = '自动回复.';
// Label B
$LANG['LABEL_BASIC'] = '基本';
// Label C
$LANG['LABEL_CLOSE'] = '关闭';
$LANG['LABEL_CLOSED'] = '已关闭';
$LANG['LABEL_CLOSE_TICKET'] = '关闭Ticket';
$LANG['LABEL_CLOSED_TICKETS'] = '已关闭的Ticket';
$LANG['LABEL_CANCEL'] = '取消';
$LANG['LABEL_CANNED_RESPONSE'] = '预录回复';
$LANG['LABEL_CATEGORY'] = '分类';
$LANG['LABEL_CATEGORY_DEPT'] = '分类/部门';
$LANG['LABEL_CHANGE_PASSWORD'] = '修改密码';
$LANG['LABEL_CHECK_STATUS'] = '检查状态';
$LANG['LABEL_CLOSED'] = '已关闭';
$LANG['LABEL_CREATE_DATE'] = '创建日期';
// Label D
$LANG['LABEL_DASHBOARD'] = '工作台';
$LANG['LABEL_DATE'] = '日期';
$LANG['LABEL_DATE_SPAN'] = '日期区间';
$LANG['LABEL_DEFAULT'] = '默认';
$LANG['LABEL_DELETE'] = '删除';
$LANG['LABEL_DELETE_DEPT_S'] = '删除部门';
$LANG['LABEL_DEPARTMENT'] = '部门';
$LANG['LABEL_DEPARTMENTS'] = '部门';
$LANG['LABEL_DEPT_MANAGER'] = '部门经理';
$LANG['LABEL_DEPT_MANAGER_NONE'] = '无';
$LANG['LABEL_DEPT'] = '部门';
$LANG['LABEL_DEPT_ACCESS'] = '部门访问权限';
//$LANG['LABEL_DEPT_TYPE']
$LANG['LABEL_DEPT_NAME'] = '部门名称';
$LANG['LABEL_DEPT_EMAIL'] = '部门Email';
$LANG['LABEL_DEPT_EMAIL_ABOVE'] = '部门Email (同上)';
$LANG['LABEL_DEPT_SIGNATURE'] = '部门签名';
$LANG['LABEL_DEPT_TYPE'] = '部门类型';
$LANG['LABEL_DESC'] = '描述';
$LANG['LABEL_DESCENDING'] = '降序';
$LANG['LABEL_DISABLED_IN_PARENTESIS'] = '(未启用)';
$LANG['LABEL_DIRECTORY'] = '目录';
$LANG['LABEL_DIRECTORY_STAFF'] = '员工目录';
// Label E
$LANG['LABEL_EMAIL'] = 'E-Mail';
$LANG['LABEL_EMAILS'] = 'E-Mail';
$LANG['LABEL_EMAILS_SETTINGS'] = 'E-Mail 设置';
$LANG['LABEL_EMAIL_ADDRESS'] = 'Email地址';
$LANG['LABEL_EMAIL_TEMPLATES'] = 'Email模板';
$LANG['LABEL_ENABLE_SYSTEM_OFF_LINE'] = '激活';
$LANG['LABEL_ENTER_NOTE_CONTENT'] = '输入笔记内容';
// Label F
$LANG['LABEL_FROM'] = '来自';
$LANG['LABEL_FULL_NAME'] = '姓名';
// Label G
$LANG['LABEL_GENERAL_SETTINGS'] = '通用设置';
$LANG['LABEL_GO'] = 'GO';
// Label H
$LANG['LABEL_HELP_TOPIC'] = '帮助主题';
$LANG['LABEL_HELP_TOPICS'] = '帮助主题';
$LANG['LABEL_HELPDESK_ATTEMPT_ALLOWED_BEFORE_A'] = '次尝试 允许&nbsp;before a';
$LANG['LABEL_HELPDESK_BIND_STAFF_SESSION_TO_IP'] = '绑定员工Session的IP地址';
$LANG['LABEL_HELPDESK_CLIENT_EXCESSIVE_LOGINS'] = '客户登录尝试次数';
$LANG['LABEL_HELPDESK_CLIENT_SESSION_TIMEOUT'] = '客户Session过期时间';
$LANG['LABEL_HELPDESK_CLICKABLE_URLS'] = '可点击URL';
$LANG['LABEL_HELPDESK_DEFAULT_DEPARTMENT'] = '默认部门';
$LANG['LABEL_HELPDESK_DEFAULT_EMAIL_TEMPLATES'] = '默认Email模板';
$LANG['LABEL_HELPDESK_ENABLE_AUTO_CRON'] = '启用自动定时任务';
$LANG['LABEL_HELPDESK_MAKE_URLS_CLICKABLE'] = 'URL自动添加链接';
$LANG['LABEL_HELPDESK_NAME_TITLE'] = 'Helpdesk的名称';
$LANG['LABEL_HELPDESK_NONE_DISABLE_LOGGER'] = '无 (Disable Logger)';
$LANG['LABEL_HELPDESK_PENALTY_IN_MINUTES'] = '超时时间 (分钟)';
$LANG['LABEL_HELPDESK_PURGE_NONE_DISABLE'] = '无 (不生效)';
$LANG['LABEL_HELPDESK_PURGE_LOGS_AFTER'] = 'Purge logs after';
$LANG['LABEL_HELPDESK_DEFAULT_PAGE_SIZE'] = '默认页面行数';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_DEPARTMENT'] = '选择默认部门';
$LANG['LABEL_HELPDESK_SELECT_DEFAULT_TEMPLATE'] = '选择默认模板';
$LANG['LABEL_HELPDESK_STAFF_EXCESSIVE_LOGINS'] = '员工最多登录尝试次数';
$LANG['LABEL_HELPDESK_STAFF_SESSION_TIMEOUT'] = '员工Session过期时间';
$LANG['LABEL_HELPDESK_STATUS'] = 'Helpdesk状态';
$LANG['LABEL_HELPDESK_SYSTEM_LOG_LEVEL'] = '系统日志级别';
$LANG['LABEL_HELPDESK_URL'] = 'Helpdesk URL';
// Label I
$LANG['LABEL_ISSUE_SUMMARY'] = 'Issue汇总';
// Label J
// Label K
$LANG['LABEL_KNOWLEDGE_BASE'] = '知识库';
$LANG['LABEL_KNOWLEDGE_BASE_PREMATE'] = '知识库: 预设';
// Label L
$LANG['LABEL_LAST_UPDATED'] = '最近更新';
$LANG['LABEL_LOG_OUT'] = '登出';
// Label M
$LANG['LABEL_MAKE_PUBLIC'] = '公众可见';
$LANG['LABEL_MAKE_PRIVATE'] = '内部可见';
$LANG['LABEL_MANAGER'] = '经理';
$LANG['LABEL_MESSAGE'] = '说明';
$LANG['LABEL_MONTH'] = '月';
$LANG['LABEL_MONTHS'] = '月';
$LANG['LABEL_MY_ACCOUNT'] = '我的账户';
$LANG['LABEL_MY_PREFERENCE'] = '我的偏好';
$LANG['LABEL_MY_PROFILE'] = '个人信息';
$LANG['LABEL_MY_SIGNATURE'] = '签名';
// Label N
$LANG['LABEL_NAME'] = '名称';
$LANG['LABEL_NEW_DEPARTMENT'] = '新部门';
$LANG['LABEL_NEW_MESSAGE'] = '新消息';
$LANG['LABEL_NEW_PREMADE_REPLY'] = '新预设回复';
$LANG['LABEL_NEW_TICKET'] = '新Ticket';
$LANG['LABEL_NEW_TICKET_PRIORITY'] = '新Ticket优先级';
$LANG['LABEL_NO_MANAGER_ADD_USERS'] = '暂无用户 (添加)';
$LANG['LABEL_NONE'] = '无';
$LANG['LABEL_NOTE_TITLE'] = '无标题';
// Label O
$LANG['LABEL_OPEN'] = '新建';
$LANG['LABEL_OPEN_NEW_TICKET'] = '新建Ticket';
$LANG['LABEL_OPEN_TICKET'] = '新建Ticket';
$LANG['LABEL_OTHER'] = '其他';
$LANG['LABEL_OUTGOING_EMAIL'] = '外发Email';
$LANG['LABEL_OVERDUE'] = '过期';
// Label P
$LANG['LABEL_PAGE'] = 'page';
$LANG['LABEL_PASSWORD'] = '密码';
$LANG['LABEL_PASSWORD_AGAIN'] = '密码(重复)';
$LANG['LABEL_PHONE'] = '手机';
$LANG['LABEL_POST_INTERNAL_NOTE'] = '发布内部笔记';
$LANG['LABEL_POST_REPLY']='发布回复';
$LANG['LABEL_PREFERENCES'] = '偏好'; 
$LANG['LABEL_PREMADE_REPLIES'] = '预设回复';
$LANG['LABEL_PRIMARY_OUTGOING_EMAIL'] = '主要对外Email';
$LANG['LABEL_PRIORITY'] = '优先级';
$LANG['LABEL_PRIVATE'] = '私有';
$LANG['LABEL_PRIVATE_HIDDEN'] = '私有(禁止)';
$LANG['LABEL_PUBLIC'] = '公开';
// Label Q
$LANG['LABEL_QUERY'] = '查询';
$LANG['LABEL_QUERY_RETURNED_ZERO_RESULT'] = '没有匹配的结果';
// Label R
$LANG['LABEL_RE_ASSIGN_TICKET'] = '重新分配';
$LANG['LABEL_REOPEN'] = '重开';
$LANG['LABEL_REOPEN_TICKET'] = '重开Ticket';
$LANG['LABEL_RESET'] = '重置';
$LANG['LABEL_RESULTS_PER_PAGE'] = '每页结果数';
$LANG['LABEL_REPLY_TITLE'] = '回复标题';
// Label S
$LANG['LABEL_SEARCH'] = '搜索';
$LANG['LABEL_SEARCH_FOR'] = '搜寻';
$LANG['LABEL_SELECT'] = '选择';
$LANG['LABEL_SELECT_DEPARTMENT'] = '选择部门';
$LANG['LABEL_SELECT_MANAGER_OPTIONAL'] = '选择经理(可选)';
$LANG['LABEL_SELECT_ONE_TOPIC'] = '请选择';
$LANG['LABEL_SELECT_ONE_EMAIL'] = '请选择';
$LANG['LABEL_SELECT_PRIORITY'] = '选择优先级';
$LANG['LABEL_SELECT_SOURCE'] = '选择来源';
$LANG['LABEL_SELECT_TEMPLATE'] = '选择模板';
$LANG['LABEL_SETTINGS'] = '设置';
$LANG['LABEL_SORT_BY'] = '排序';
$LANG['LABEL_SORT_BY_TITLE'] = '按标题排序';
$LANG['LABEL_SORT_BY_UPDATE_DATE'] = '按更新时间排序';
$LANG['LABEL_STAFF'] = '员工';
$LANG['LABEL_STAFF_MEMBER'] = '员工名单';
$LANG['LABEL_STAFF_MEMBERS'] = '员工名单';
$LANG['LABEL_STAFF_PANEL'] = '员工面板';
$LANG['LABEL_STAFF_VIEWTICKET_SELECT_ACTION']='选择动作';
$LANG['LABEL_STAFF_VIEWTICKET_CHANGE_PRIORITY']='调整优先级';
$LANG['LABEL_STAFF_VIEWTICKET_MARK_OVERDUE']='标记为过期';
$LANG['LABEL_STAFF_VIEWTICKET_RELEASE_UNASSIGN']='发布 (未分配)';
$LANG['LABEL_STAFF_VIEWTICKET_CLOSE_TICKET']='关闭Ticket';
$LANG['LABEL_STAFF_VIEWTICKET_REOPEN_TICKET']='重开Ticket';
$LANG['LABEL_STATUS'] = '状态';
$LANG['LABEL_STATUS_IS'] = '状态为';
$LANG['LABEL_SUBMIT'] = '提交';
$LANG['LABEL_SUBMIT_TICKET'] = '提交Ticket';
$LANG['LABEL_SUBJECT'] = '主题';
$LANG['LABEL_SYSTEM_DEFAULT_TEMPLATE'] = '系统默认';
$LANG['LABEL_SYSTEM_LOGS'] = '系统Log';
$LANG['LABEL_SYSTEM_LOGS_ALL'] = '全部';
$LANG['LABEL_SYSTEM_LOGS_DATESPAN'] = '日期区间';
$LANG['LABEL_SYSTEM_LOGS_DEBUG'] = 'Debug';
$LANG['LABEL_SYSTEM_LOGS_ERRORS'] = '错误';
$LANG['LABEL_SYSTEM_LOGS_FROM'] = '从';
$LANG['LABEL_SYSTEM_LOGS_GO'] = 'Go';
$LANG['LABEL_SYSTEM_LOGS_NO_RESULTS'] = '没有匹配的查询结果';
$LANG['LABEL_SYSTEM_LOGS_TO'] = '到';
$LANG['LABEL_SYSTEM_LOGS_TYPE'] = '类型';
$LANG['LABEL_SYSTEM_LOGS_WARNINGS'] = '警告';
$LANG['LABEL_SYSTEM_PREFERENCES_AND_SETTINGS'] = '系统设置和偏好';
$LANG["LABEL_SYSTEM_SETTINGS"] = '系统设置';
// Label T
$LANG['LABEL_TELEPHONE'] = '电话';
$LANG['LABEL_TICKET'] = 'Ticket';
$LANG['LABEL_TICKET_ID'] = 'Ticket ID';
$LANG['LABEL_TICKET_NUMBER'] = 'Ticket#';
//$LANG['LABEL_TICKET_SOURCE']
$LANG['LABEL_TICKET_STATUS'] = '状态';
$LANG['LABEL_TO'] = '发给';
$LANG['LABEL_TOGGLE'] = '切换';
$LANG['LABEL_TRANSFER'] = '传输';
$LANG['LABEL_TYPE'] = '类型';
// Label U
$LANG['LABEL_UPDATE_DATE'] = '最近更新';
$LANG['LABEL_UPDATE_DEPARTMENT'] = '更新部门';
$LANG['LABEL_USERNAME'] = '用户名';
$LANG['LABEL_USERS'] = '用户';
// Label V
$LANG['LABEL_VIEW_STATUS'] = '查看状态';

#######
## Generic text for all site, if have to text repeted in
## Client or Staff ends, is prefixed with correct name.
##
// TEXT A
$LANG['TEXT_ACCESS_DENIED'] = '拒绝访问';
$LANG['TEXT_ALL_DEPARTMENTS'] = '全部部门';
$LANG['TEXT_AND_STATUS_SET_TO'] = '& 状态为 {0}';
$LANG['TEXT_AND_TICKET_STATUS_SET_TO_CLOSED'] = ' & 已关闭';
$LANG['TEXT_ANSWERED_STATS'] = 'Ticket答复状态 ({0})';
$LANG['TEXT_ANSWERED_TICKETS'] = '已答复的Ticket';
$LANG['TEXT_ANY_STATUS'] = '全部状态';
$LANG['TEXT_ASSIGNED_TICKETS'] = '已分配的Ticket';
$LANG['TEXT_ATTACH_FILE'] = '附件';
$LANG['TEXT_AUTHENTICATION_REQUIRED'] = '请登入后继续';
$LANG['TEXT_AUTHENTICATION_REQUIRED_QUESTION'] = '需要授权?';
// TEXT B
$LANG['TEXT_BOX_NEW_TICKET'] = '创建一个新Ticket。请尽可能详细的描述问题，这样我们能更好的为您服务。您的Email将被验证。<p>请使用右侧的表单来修改和跟进提交过的Ticket。</p>';
// TEXT C
$LANG['TEXT_CAM_BE_APPENDED_TO_RESPONSES'] = '将被追加到回复最后.&nbsp;(公开部门可选用)';
$LANG['TEXT_CLOSED_TICKETS'] = '已关闭Ticket';
$LANG['TEXT_CLOSED'] = '已关闭';
$LANG['TEXT_COMMENTS_REASONS_TRANSFER'] = '转换的原因或备注. &nbsp;(内部笔记)';
$LANG['TEXT_CREATE_FAILED'] = '创建失败 ';
// TEXT D
$LANG['TEXT_DEPT_DEPENDS_ON_EMAIL'] = 'Dept depends on email &amp; help topics settings for incoming tickets.';
$LANG['TEXT_DEPT_TRANSFER'] = '转至其他部门';
$LANG['TEXT_DEPT_UPDATED_SUCCESSFULLY'] = '部门成功更新';
// TEXT E
$LANG['TEXT_EMAIL_ADDED_TO_BANLIST'] = 'Email ({0}) 已将添加到黑名单';
$LANG['TEXT_EMAIL_ADDRESS_USED_SEND_AUTO_RESPONSES'] = '用于发送自动回复的Email地址(如启用)';
$LANG['TEXT_EMAIL_REMOVED_FROM_BANLIST'] = 'Email已从黑名单中移除';
$LANG['TEXT_ENTER_MESSAGE'] = '输入消息';
//$LANG['TEXT_EXCESSIVE_FAILED_LOGIN_ATTEMPTS']
//$LANG['TEXT_EXCESSIVE_LOGIN_ATTEMPTS_BY_CLIENT']
// TEXT F  
$LANG['TEXT_FORGOT_YOUR_LOGIN_INFO']='忘记密码? 请 <a href="open.php">创建一个新的Ticket</a>.';
// TEXT G
$LANG['TEXT_GENERAL_INQUIRY'] = '通用调查';
$LANG['TEXT_GLOBAL_AUTO_RESPONSE_SETTINGS'] = '偏好中的全局自动回复设置必须启用才能生效';
// TEXT H
$LANG['TEXT_HOME'] = '主页'; 
$LANG['TEXT_HELPDESK_STAFF_MAX_IDLE_TIME_IN_MINUTES'] = '(员工的最大超时时间（分钟），输入0取消超时)';
$LANG['TEXT_HELPDESK_CLIENT_MAX_IDLE_TIME_IN_MINUTES'] = '(客户的最大超时时间（分钟），输入0取消超时)';
$LANG['TEXT_HELPDESK_ENABLE_CRON_CALL_ON_STAFF_ACTIVITY'] = '为员工活动启用自动Cron';
// TEXT I
$LANG['TEXT_INTERNAL_NOTE_POSTED'] = '内部笔记已发布';
$LANG['TEXT_INVALID_LOGIN'] = '错误的登入'; 
// TEXT J
// TEXT K
// TEXT L
$LANG['TEXT_LOGIN_VIEW_STATUS_OF_TICKET']='请输入以下信息查看Ticket状态<br/>'.
        '如果这是您第一次和我们联系，或者您丢失了Ticket ID 请<a href="open.php">点击这里</a> 创建一个新的Ticket';
$LANG['TEXT_LOG_OUT'] = '退出';
// TEXT M
//$LANG['TEXT_MESSAGE_POSTED_SUCCESSFULLY']
$LANG['TEXT_MY_ACCOUNT'] = '我的账户';
$LANG['TEXT_MY_TICKETS'] = '我的Ticket';
$LANG['TEXT_MY_TICKETS_STATS'] = '我的Ticket ({0})';
// TEXT N
$LANG['TEXT_NEW_TICKET'] = '新Ticket';
$LANG['TEXT_NEW_TICKET_AUTO_RESPONSE'] = '一封带有Ticket ID的电子邮件已经发送至<b>{0}</b>。您需要该ID以查看Ticket 状态和在线处理。<br><br>如果您希望发送更多的信息，请按邮件中的提示操作。';
$LANG['TEXT_NOT_THIS_USER'] = '我不是这个用户';
$LANG['TEXT_NO_TICKETS_FOUND'] = '未找到Ticket';
// TEXT O
$LANG['TEXT_OPEN'] = '创建';
$LANG['TEXT_OPEN_NEW_TICKET'] = '创建新Ticket';
$LANG['TEXT_OPEN_PREVIOUS_TICKET'] = '<p>检查已提交Ticket的状态和进展。我们会保留您所有的回复和评论</p>';
//$LANG['TEXT_OPEN_STATS']
$LANG['TEXT_OPEN_TICKETS'] = '新创建的Ticket';
$LANG['TEXT_OF_SELECTED_TICKETS_REOPENED'] = "{0}/{1}的选中Ticket被重开";
$LANG['TEXT_OF_SELECTED_TICKETS_CLOSED'] = "{0}/{1}的选中Ticket已关闭";
$LANG['TEXT_OF_SELECTED_TICKETS_MARKED_OVERDUE'] = "{0}/{1}的选中Ticket被标记为过期";
$LANG['TEXT_OF_SELECTED_TICKETS_DELETED'] = "{0}/{1}的选中Ticket已删除";
$LANG['TEXT_OFFLINE']='感谢您对我们的关注<br>'.
         '我们的Helpdesk暂时关闭，请稍后再试';
$LANG['TEXT_OFFLINE_MODE_WILL_DISABLE_CLIENT'] = '离线模式将关闭客户入口，<b>只</b>'.
         ' 允许 <b>超级用户</b> 登入员工控制面板';
$LANG['TEXT_OVERDUE'] = '过期';
$LANG['TEXT_OVERDUE_STATS'] = '过期 ({0})';
$LANG['TEXT_OVERDUE_TICKETS'] = '过期的Ticket';
// TEXT P
$LANG['TEXT_PLEASE_FILL_STAFF_FORM_BELOW_OPEN_NEW_TICKET'] = '请填写下表以创建新的Ticket。';
$LANG['TEXT_PLEASE_FILL_FORM_NEW_TICKET'] = '请填写下表以创建新的Ticket。';
$LANG['TEXT_PLEASE_TAKE_A_MINUTE_TO_DELETE_INSTALL'] = '请删除 <strong>setup/install</strong> 目录以保证安全';
$LANG['TEXT_POST_REPLY'] = '发布回复';
$LANG['TEXT_PRIORITY_CHANGED_SUCCESSFULLY'] = '优先级调整成功';
// TEXT Q
// TEXT R
$LANG['TEXT_REFRESH'] = '刷新';
$LANG['TEXT_REQUIRED_WHEN_DEPT_IS_PUBLIC'] = '部门设置为公共时必填';
$LANG['TEXT_RESPONSE_POSTED_SUCCESSFULLY'] = '回复发布成功';
// TEXT S
$LANG['TEXT_SEARCH_RESULTS'] = '搜索结果';
$LANG['TEXT_SELECT_DEPARTMENTS_GROUP_MEMBERS'] = 'Select departments group members are allowed to access in addition to thier own department.';
$LANG['TEXT_SELECT_PREMADE_REPLY'] = '选择预设回复';
$LANG['TEXT_SELECT_STAFF_MEMBER'] = '-选择员工-';
$LANG['TEXT_SELECT_TARGET_DEPT'] = '-选择目标部门-';
$LANG['TEXT_SESSION_TIMED_OUT_DUE_TO_INACTIVITY']='因较长时间未活动，Session已过期';
$LANG['TEXT_SHOW_FROM_TO_OF_ALL'] = '显示 {0} 项 - {1}/{2}';
$LANG['TEXT_SHOW_ZERO'] = '显示 0 项 (zero)';
$LANG['TEXT_SORT_BY_CATEGORY'] = '按分类排序';
$LANG['TEXT_SORT_BY_DATE'] = '按日期排序';
$LANG['TEXT_SORT_BY_DEPARTMENT'] = '按部门排序';
$LANG['TEXT_SORT_BY_TICKET_ID'] = '按Ticket ID排序';
$LANG['TEXT_SORT_BY_PRIORITY'] = '按优先级排序';
$LANG['TEXT_SUPPORT_TEAM'] = '支持团队';
$LANG['TEXT_SUPPORT_CENTER'] = '支持中心';
$LANG['TEXT_SUPPORT_TICKET_SISTEM'] = '<span>TICKET</span> 支持系统';
$LANG['TEXT_SYSTEM_IS_OFF_LINE'] = '<strong>系统已经被设置为离线模式</strong> - 客户入口已经被关闭，只有管理员可以访问控制面板';
// TEXT T
$LANG['TEXT_THANKS_NEW_TICKET'] = '感谢联系我们。<br>您的Tickect已经创建，我们会及时处理您的问题，请留意您的邮箱以便及时了解Tickect的进度和状态。';
$LANG['TEXT_TICKET_ASSIGNED_TO_STAFF'] = '分配给{0}的Ticket ';
$LANG['TEXT_TICKET_CREATED'] = 'Ticket已创建';
$LANG['TEXT_TICKET_CREATED_SUCCESSFULLY'] = 'Ticket 创建成功';
$LANG['TEXT_TICKET_DELETED_FOREVER'] = '被永久删除的Ticket';
$LANG['TEXT_TICKET_FLAGGED_AS_OVERDUE'] = '标记为过期的Ticket';
$LANG['TEXT_TICKET_NUM_STATUS_SET_CLOSED'] = 'Ticket #{0} 被关闭';
$LANG['TEXT_TICKET_NUMBER'] = 'Ticket #';
$LANG['TEXT_TICKET_STATUS'] = 'Ticket状态';
$LANG['TEXT_TICKET_STATUS_CHANGED_TO'] = 'Ticket状态改为{0}';
$LANG['TEXT_TICKET_STATUS_SET_TO_OPEN'] = 'Ticket被创建';
$LANG['TEXT_TICKET_THREAD'] = 'Ticket主题';
$LANG['TEXT_TICKET_TRANSFERED_SUCESSFULLY_TO_DEPT'] = 'Ticket成功转给{0}部门';
$LANG['TEXT_TICKET_UPDATED_SUCCESSFULLY'] = 'Ticket成功更新';
$LANG['TEXT_TICKET_WILL_REOPEN_NEW_POST']='Ticket将被重开';
$LANG['TEXT_TICKETS_STATUS'] = 'Ticket状态';
$LANG['TEXT_TOTAL_OPEN_TICKETS'] = "开放的({0})";
$LANG['TEXT_TOTAL_ANSWERED_TICKETS'] = "已回答的 ({0})";
$LANG['TEXT_TOTAL_MY_TICKETS'] = '我的Ticket ({0})';


// TEXT U
$LANG['TEXT_UNABLE_CREATE_TICKET'] = '创建ticket失败，请稍后重试';
$LANG['TEXT_UPDATE_TICKET'] = '更新 Ticket #{0}';
$LANG['TEXT_USED_FOR_OUTGOING_EMAILS'] = '用于向用户发送提醒、通知的邮件。';
// TEXT V
$LANG['TEXT_VIEW_OPEN']='开放查阅';
$LANG['TEXT_VIEW_CLOSED']='查阅已关闭';
$LANG['TEXT_VIEW_TICKET'] = '查阅Ticket';
$LANG['TEXT_VISIBLE_TO_CLIENT'] = '用户和客户可见。';
// TEXT X
// TEXT Y
$LANG['TEXT_YOUVE_REACHED_MAXIMUM_FAILED_LOGIN_ATTEMPTS_ALLOWED']='你已经用尽了最大尝试登陆次数。';
// TEXT W
$LANG['TEXT_WELCOME_BACK'] = '欢迎回来';
$LANG['TEXT_WELCOME_BACK_CLIENT'] = '欢迎回来, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_STAFF'] = '欢迎回来, <strong>{0}</strong>';
$LANG['TEXT_WELCOME_BACK_VACATION']= '欢迎回来! 你被置为 \'休假\'，请通知你的主管或者管理员你的到来。 ';
$LANG['TEXT_WELCOME_MSG'] = '为了更好地为您服务，我们启用Ticket系统来追踪您的问题。每个Ticket发起后，会被分配一个唯一的Ticket ID，您可以用它来跟踪进度和在线互动。我们将保留您发起过的Ticket的完整历史记录以便查阅。';
$LANG['TEXT_WELCOME_TITLE'] = '客户中心欢迎您';

########
## Titles on pages and web pages
##
$LANG['TITLE'] = '全功能Ticket';
$LANG['TITLE_BOX_NEW_TICKET'] = '新Ticket';
$LANG['TITLE_BAR_OFFLINE'] = 'Ticket 支持系统';
$LANG['TITLE_MY_PREFERENCES'] = '我的偏好';
$LANG['TITLE_OFFLINE'] = 'Ticket 支持系统不在线';
$LANG['TITLE_OPEN_PREVIOUS_TICKET'] = '查看已创建的Ticket';
$LANG['TITLE_CLOSED_TICKETS'] = '已关闭的 Ticket';
?>

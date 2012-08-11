<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin() || !is_object($template)) die($trl->translate("TEXT_ACCESS_DENIED"));
$tpl=($errors && $_POST)?Format::input($_POST):Format::htmlchars($template->getInfo());
?>
<div class="msg">Email Templates</div>
<table width="100%" border="0" cellspacing=0 cellpadding=0>
  <form action="admin.php?t=templates" method="post">
    <input type="hidden" name="t" value="templates">
    <input type="hidden" name="do" value="update">
    <input type="hidden" name="id" value="<?php echo $template->getId()?>">
    <tr><td>

        <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform tpl">
            <tr class="header"><td colspan=2 >Template Info</td></tr>
            <tr class="subheader"><td colspan=2><b>Last updated on <?php echo Format::db_daydatetime($template->getUpdateDate())?></b></td></tr>
            <tr>
                <th>Name</th>
                <td>
                    <input type="text" size="45" name="name" value="<?php echo $tpl['name']?>">
                            &nbsp;<font class="error">*&nbsp;<?php echo $errors['name']?></font></td>
            </tr>
            <tr>
                <th>Internal notes:</th>
                <td><i>Administrative notes</i>&nbsp;<font class="error">&nbsp;<?php echo $errors['notes']?></font>
                    <textarea rows="5" cols="75" name="notes"><?php echo $tpl['notes']?></textarea>
                        &nbsp;<font class="error">&nbsp;<?php echo $errors['notes']?></font></td>
            </tr>
        </table>
        <div class="msg">User</div>
        <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform tpl">
            <tr class="header"><td colspan=2 >New Ticket Autoresponse</td></tr>
            <tr class="subheader"><td colspan=2 >
                Autoresponse sent to user on new ticket if enabled. 
                Meant to give the user the ticket ID which can be used to check the status online.</td>
                </tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="ticket_autoresp_subj" value="<?php echo $tpl['ticket_autoresp_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_autoresp_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="ticket_autoresp_body"><?php echo $tpl['ticket_autoresp_body']?></textarea>
                        &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_autoresp_body']?></font></td>
            </tr>
            <tr class="header"><td colspan=2 >New Message Autoresponse</td></tr>
            <tr class="subheader"><td colspan=2 > 
                Confirmation sent to user when a new message is appended to an existing ticket. (email and web replies)</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="message_autoresp_subj" value="<?php echo $tpl['message_autoresp_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['message_autoresp_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="message_autoresp_body"><?php echo $tpl['message_autoresp_body']?></textarea>
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['message_autoresp_body']?></font></td>
            </tr>
            <tr class="header"><td colspan=2 >New Ticket Notice</td></tr>
            <tr class="subheader"><td colspan=2 >
                Notice sent to user, if enabled, on new ticket <b>created by staff</b> on their behalf.</td>
                </tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="ticket_notice_subj" value="<?php echo $tpl['ticket_notice_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_notice_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="ticket_notice_body"><?php echo $tpl['ticket_notice_body']?></textarea>
                        &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_notice_body']?></font></td>
            </tr>
            <tr class="header"><td  colspan=2 >Over Ticket limit Notice</td></tr>
            <tr class="subheader"><td colspan=2 >
                A one time notice sent when user has reached the max allowed open tickets defined in preferences.
                <br/>Admin email gets alert each time a support ticket request is denied.
            </td></tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="ticket_overlimit_subj" value="<?php echo $tpl['ticket_overlimit_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_overlimit_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="ticket_overlimit_body"><?php echo $tpl['ticket_overlimit_body']?></textarea>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_overlimit_body']?></font></td>
            </tr>
            <tr class="header"><td colspan=2 >&nbsp;Ticket Response/Reply</td></tr>
            <tr class="subheader"><td colspan=2 >
                Message template used when responding to a ticket or simply alerting the user about a response/answer availability.
            </td></tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="ticket_reply_subj" value="<?php echo $tpl['ticket_reply_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_reply_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</td>
                <td><textarea rows="7" cols="75" name="ticket_reply_body"><?php echo $tpl['ticket_reply_body']?></textarea>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_reply_body']?></font></td>
            </tr>
        </table>
        <span class="msg">Staff</span>
        <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform tpl">
            <tr class="header"><td colspan=2 >New Ticket Alert</td></tr>
            <tr class="subheader"><td colspan=2 >Alert sent to staff ( if enabled) on new ticket.</td></tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="ticket_alert_subj" value="<?php echo $tpl['ticket_alert_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_alert_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="ticket_alert_body"><?php echo $tpl['ticket_alert_body']?></textarea>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_alert_body']?></font></td>
            </tr>
            <tr class="header"><td colspan=2 >New Message Alert</td></tr>
            <tr class="subheader"><td colspan=2 >Alert sent to staff ( if enabled) when user replies to an existing ticket.</td></tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="message_alert_subj" value="<?php echo $tpl['message_alert_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['message_alert_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="message_alert_body"><?php echo $tpl['message_alert_body']?></textarea>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['message_alert_body']?></font></td>
            </tr>


            <tr class="header"><td colspan=2 >New Internal Note Alert</td></tr>
            <tr class="subheader"><td colspan=2 >Alert sent to selected staff ( if enabled) when an internal note is appended to a ticket.</td></tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="note_alert_subj" value="<?php echo $tpl['note_alert_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['note_alert_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="note_alert_body"><?php echo $tpl['note_alert_body']?></textarea>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['note_alert_body']?></font></td>
            </tr>

            <tr class="header"><td colspan=2 >Ticket Assigned Alert/Notice</td></tr>
            <tr class="subheader"><td colspan=2 >Alert sent to staff on ticket assignment.</td></tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="assigned_alert_subj" value="<?php echo $tpl['assigned_alert_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['assigned_alert_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="assigned_alert_body"><?php echo $tpl['assigned_alert_body']?></textarea>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['assigned_alert_body']?></font></td>
            </tr>
            <tr class="header"><td colspan=2 >Overdue/Stale Ticket Alert/Notice</td></tr>
            <tr class="subheader"><td colspan=2 >Alert sent to staff on stale or overdue tickets.</td></tr>
            <tr>
                <th>Subject</th>
                <td>
                    <input type="text" size="65" name="ticket_overdue_subj" value="<?php echo $tpl['ticket_overdue_subj']?>">
                            &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_overdue_subj']?></font></td>
            </tr>
            <tr>
                <th>Message Body:</th>
                <td><textarea rows="7" cols="75" name="ticket_overdue_body"><?php echo $tpl['ticket_overdue_body']?></textarea>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['ticket_overdue_body']?></font></td>
            </tr>
        </table>
    </td></tr>
    <tr><td style="padding-left:175px">
        <input class="button" type="submit" name="submit" value="Save Changes">
        <input class="button" type="reset" name="reset" value="Reset Changes">
        <input class="button" type="button" name="cancel" value="Cancel Edit" onClick='window.location.href="admin.php?t=email"'></td>
    </tr>
  </form>
</table>

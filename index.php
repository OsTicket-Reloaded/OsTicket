<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id: $
**********************************************************************/
require('client.inc.php');
//We are only showing landing page to users who are not logged in.
if($thisclient && is_object($thisclient) && $thisclient->isValid()) {
    require('tickets.php');
    exit;
}


require(CLIENTINC_DIR.'header.inc.php');
?>
<div id="index">
<h1 dir="<?php echo $trl->dir() ?>"><?= $trl->translate('TEXT_WELCOME_TITLE'); ?></h1>
<p class="big" dir="<?php echo $trl->dir() ?>"><?= $trl->translate('TEXT_WELCOME_MSG'); ?></p>
<hr />
<br />
<div class="lcol">
  <img src="./images/new_ticket_icon.jpg" width="48" height="48" align="left" style="padding-bottom:150px;">
  <h3 dir="<?php echo $trl->dir() ?>"><?= $trl->translate('TITLE_BOX_NEW_TICKET'); ?></h3>
  <p  dir="<?php echo $trl->dir() ?>"><?= $trl->translate('TEXT_BOX_NEW_TICKET'); ?></p>
  <form method="link" action="open.php">
  <br /><br />
  <input type="submit" class="button2" value="<?= $trl->translate('LABEL_OPEN_NEW_TICKET') ?>">
  </form>
</div>
<div class="rcol">
  <img src="./images/ticket_status_icon.jpg" width="48" height="48" align="left" style="padding-bottom:150px;">
  <h3><?= $trl->translate('TITLE_OPEN_PREVIOUS_TICKET'); ?></h3>
  <?= $trl->translate('TEXT_OPEN_PREVIOUS_TICKET'); ?>
  <br /><br />
  <form class="status_form" action="login.php" method="post">
    <fieldset>
      <label><?= $trl->translate('LABEL_EMAIL'); ?></label>
      <input type="text" name="lemail">
    </fieldset>
    <fieldset>
     <label><?= $trl->translate('LABEL_TICKET_NUMBER'); ?></label>
     <input type="text" name="lticket">
    </fieldset>
    <fieldset>
        <label>&nbsp;</label>
         <input type="submit" class="button2" value="<?= $trl->translate('LABEL_CHECK_STATUS'); ?>">
    </fieldset>
  </form>
</div>
<div class="clear"></div>
<br />
</div>
<br />
<?require(CLIENTINC_DIR.'footer.inc.php'); ?>

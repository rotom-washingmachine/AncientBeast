<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2012  Valentin Anastase (a.k.a. Dread Knight)
 *
 * This file is part of Ancient Beast.
 *
 * Ancient Beast is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Ancient Beast is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * http://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */

$page_title = "Ancient Beast - Donate";
$style = "
.title {
	font-size: 24px;
	font-family: Charlemagnestd;
}";
require_once("../header.php");

// Post-donation feedback
if (isset($_GET['cancel'])) { ?>
<div class="warning center"><b>It's a sad day. You have canceled...</b></div>
<?php
}

if (isset($_GET['success'])) { ?>
<div class="confirmation center"><b>You are AWESOME! :)</b></div>
<?php
}?>

<!-- Golden div -->
<a id="now"></a>
<div style="padding:20px 0; margin-bottom:10px; background:rgba(0,0,0,0.5); border-radius:15px; border:4px ridge gold;">
<table width=100%><tr><td align=center width=25%>
<!-- $ one time (coin) -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="XXXPC6NDXBNTW">
<input type="image" src="dollar.png" border=0 name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=1 height=1>
</form>
<!-- $ one time (button) -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="XXXPC6NDXBNTW">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border=0 name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border=0 src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=1 height=1>
</form>
</td>

<!-- $ recursive -->
<td style="text-align:center;" width=25%>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YDCXZ5QA5XH62">
<table align=center>
<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
	<option value="LVL1">LVL1 : $2 USD - monthly</option>
	<option value="LVL2">LVL2 : $5 USD - monthly</option>
	<option value="LVL3">LVL3 : $10 USD - monthly</option>
	<option value="LVL4">LVL4 : $25 USD - monthly</option>
	<option value="LVL5">LVL5 : $50 USD - monthly</option>
	<option value="LVL6">LVL6 : $100 USD - monthly</option>
	<option value="LVL7">LVL7 : $250 USD - monthly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Want to be credited?">Want to be credited?</td></tr><tr><td><select name="os1">
	<option value="Yes, please!">Yes, please! </option>
	<option value="Anonymous!">Anonymous! </option>
</select> </td></tr>
<tr><td><input type="hidden" name="on2" value="What's your website?">What's your website?</td></tr><tr><td><input type="text" name="os2" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border=0 name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border=0 src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=1 height=1>
</form>
</td>

<!-- € one time (coin) -->
<td style="text-align:center;" width=25%>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="N3D2HD7HUGX38">
<input type="image" src="euro.png" border=0 name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border=0 src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=1 height=1>
</form>
<!-- € one time (button) -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="N3D2HD7HUGX38">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border=0 name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border=0 src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=1 height=1>
</form>
</td>
<!-- € recursive -->
<td style="text-align:center;" width=25%>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="9X7URD3Y7DTLC">
<table align=center>
<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
	<option value="LVL1">LVL1 : €2 EUR - monthly</option>
	<option value="LVL2">LVL2 : €5 EUR - monthly</option>
	<option value="LVL3">LVL3 : €10 EUR - monthly</option>
	<option value="LVL4">LVL4 : €25 EUR - monthly</option>
	<option value="LVL5">LVL5 : €50 EUR - monthly</option>
	<option value="LVL6">LVL6 : €100 EUR - monthly</option>
	<option value="LVL7">LVL7 : €250 EUR - monthly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Want to be credited?">Want to be credited?</td></tr><tr><td><select name="os1">
	<option value="Yes, please!">Yes, please! </option>
	<option value="Anonymous!">Anonymous! </option>
</select> </td></tr>
<tr><td><input type="hidden" name="on2" value="What's your website?">What's your website?</td></tr><tr><td><input type="text" name="os2" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border=0 name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border=0 src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=1 height=1>
</form>

</td></tr></table>
</div>

<!-- Total amounts -->
<div class="div center">
<?php
$dollars_month = db_query('SELECT COALESCE(SUM(amount),0) AS amount FROM ab_donors WHERE type="$" AND MONTH(date) = MONTH(NOW()) AND YEAR(date) = YEAR(NOW())');
$dollars_total = db_query('SELECT COALESCE(SUM(amount),0) AS amount FROM ab_donors WHERE type="$"');
$euros_month = db_query('SELECT COALESCE(SUM(amount),0) AS amount FROM ab_donors WHERE type="€" AND MONTH(date) = MONTH(NOW()) AND YEAR(date) = YEAR(NOW())');
$euros_total = db_query('SELECT COALESCE(SUM(amount),0) AS amount FROM ab_donors WHERE type="€"'); ?>
<table width=100%><tr>
<?php echo '
<td align=center width=25%><u>' . date('F') . '</u><br><b>$' . $dollars_month[0]['amount'] . ' USD</b></td>
<td align=center width=25%><u>Total</u><br><b>$' . $dollars_total[0]['amount'] . ' USD</b></td>
<td align=center width=25%><u>' . date('F') . '</u><br><b>€' . $euros_month[0]['amount'] . ' EUR</b></td>
<td align=center width=25%><u>Total</u><br><b>€' . $euros_total[0]['amount'] . ' EUR</b></td></tr></table></div>'; ?>

<!-- Information -->
<div class="div center">Donations are done through <a href="http://Paypal.com" target="_blank"><b>Paypal</b></a> and subscriptions can be canceled anytime, see <a href="http://www.wikihow.com/Cancel-a-Recurring-Payment-in-PayPal" target="_blank"><b>this article</b></a> for more info. Any amount you wish to donate is greatly appreciated and helps further the development of Ancient Beast. Donations are non refundable and are being used for project's upkeep, hardware necessities, rewarding existing contributors, commissioning artists and coders, marketing and so on. Donors are rewarded with exciting prizes!</div>

<!-- List of donors -->
<div class="div center">
<?php
$donors = 'SELECT * FROM ab_donors WHERE anonymous IS NULL ORDER BY amount DESC';
$rows = db_query($donors);
foreach ($rows as $r) echo '<a href="' . $r['website'] . '" target="_blank">' . $r['name'] . ' (' . $r['type'] . $r['amount'] . ')</a>, '; ?>
<a href="#now">Your name here!</a></div>

<!-- Bitcoin donations -->
<div class="div center">
<p align=center>Feel free to send your <a href="http://www.bitcoin.org" style="font-weight: bold;" target="_blank"><img src="bitcoin.ico"> bitcoin</a> donation over at:</p>
<p align=center style="width:380px; margin:0 auto; padding:20px 0; background:rgba(0,0,0,0.5); border-radius:15px; border:4px ridge gold;">
<a href="bitcoin:1Gpa3NKn8nR9ipXPZbwkjYxqZX3cmz7q97?label=Ancient%20Beast"><img src="QR.png"><br><br>
1Gpa3NKn8nR9ipXPZbwkjYxqZX3cmz7q97</a></p>
<p align=center><a href="http://blockexplorer.com/address/1Gpa3NKn8nR9ipXPZbwkjYxqZX3cmz7q97" target="_blank">We like being transparent, so click <b>here</b> if you wish to see a list with all bitcoin donations.</a></p>
<p align=center><iframe width=560 height=315 src="http://www.youtube.com/embed/Um63OQz3bjo" frameborder=0 allowfullscreen></iframe></p></div>

<!-- Various donation widgets -->
<!-- Flattr -->
<div class="div center">
<script type="application/javascript" src="https://api.flattr.com/js/0.6/load.js?mode=auto"></script>
<div style="display:inline-block;"><a class="FlattrButton" style="display:none;" href="http://AncientBeast.com"></a></div>
<!-- CentUp -->
<div style="display:inline-block;" class="centup-top" data-url="http://AncientBeast.com" data-title="Strategy Game"></div>
<script src="https://www.centup.org/button.js"></script>
<!-- Gittip -->
<script data-gittip-username="DreadKnight"
        src="//gttp.co/v1.js"></script>
</div>
<?php include('../footer.php'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<link rel="stylesheet" type="text/css" href="./assets/paymentstyle.css" />
<head>
<?php require_once("metatag.php"); ?>
<title>API Example Code</title>
<meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1">
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>
<h1>PHP Example - NVP</h1>
<h3>Simple Authorize Operation</h3>
<p><a href="index.html">Return to the Home Page</a></p>
<form action="process.php" method="post">
  <table width="60%" align="center" cellpadding="5" border="0">
    <!-- Credit Card Fields -->
    <tr class="title">
      <td colspan="2" height="25"><P><strong>Transaction Fields</strong></P></td>
    </tr>
    <tr class="shade">
      <td colspan="2" height="25"><P class="desc">Order and Transaction IDs are required. In your integration, you would calculate these fields within your code (process.php based on this example) and not expose these to the card holder on this page, or pass them as hidden fields.</P></td>
    </tr>
    <tr>
      <td align="right" width="50%"><strong>version </strong></td>
      <td width="50%"><input type="text" readonly="readonly" name="version" value="34" size="8" maxlength="80" /></td>
    </tr>
    <tr class="shade">
      <td align="right" width="50%"><strong>order.id </strong></td>
      <td><input type="text" name="order.id" value="" size="20" maxlength="60"/></td>
    </tr>
    <tr>
      <td align="right" width="50%"><strong>transaction.id </strong></td>
      <td><input type="text" name="transaction.id" value="" size="20" maxlength="60"/></td>
    </tr>
    <tr class="shade">
      <td align="right" width="50%"><strong>apiOperation </strong></td>
      <td width="50%"><input type="text" readonly="readonly" name="apiOperation" value="AUTHORIZE" size="20" maxlength="80"/></td>
    </tr>
    <tr>
      <td align="right"><strong>sourceOfFunds.type </strong></td>
      <td><input type="text" name="sourceOfFunds.type" value="CARD" size="19" maxlength="80"/></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong>sourceOfFunds.provided.card.number </strong></td>
      <td><input type="text" name="sourceOfFunds.provided.card.number" value="" size="19" maxlength="80"/></td>
    </tr>
    <tr>
      <td align="right"><strong>sourceOfFunds.provided.card.expiry.month </strong></td>
      <td><input type="text" name="sourceOfFunds.provided.card.expiry.month" value="" size="1" maxlength="2"/></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong>sourceOfFunds.provided.card.expiry.year </strong></td>
      <td><input type="text" name="sourceOfFunds.provided.card.expiry.year" value="" size="1" maxlength="2"/></td>
    </tr>
    <tr>
      <td align="right"><strong>sourceOfFunds.provided.card.securityCode </strong></td>
      <td><input type="text" name="sourceOfFunds.provided.card.securityCode" value="" size="8" maxlength="4"/></td>
    </tr>
    <tr class="shade">
      <td align="right"><strong>order.amount </strong></td>
      <td><input type="text" name="order.amount" value="" size="8" maxlength="13"/></td>
    </tr>
    <tr>
      <td align="right"><strong>order.currency </strong></td>
      <td><input type="text" name="order.currency" value="" size="8" maxlength="3"/></td>
    </tr>
    <tr>
      <td colspan="2"><center>
          <input type="submit" name="submit" value="Process Authorization"/>
        </center></td>
    </tr>
  </table>
</form>
<br/>
<br/>
</body>
</html>

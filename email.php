<?

include_once("../../../include/admin.inc.php");

?>
<html>
<head>
<title>Qmail Toaster Admin</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="/scripts/styles.css" type="text/css" />
<script language="JavaScript" src="/scripts/javascripts.js"></script>
<script language="JavaScript">
<!--

function CheckFormSendEmail(form) {
	
	var numErrors = '' ;
	var errors = '' ;
		
	if (!isValidLength(form.emailText.value, 2, 1000)) {
		errors += 'Please type your email body.\n';
		numErrors++;
	}

	if (!isValidLength(form.subject.value, 2, 100)) {
		errors += 'Please type the subject.\n';
		numErrors++;
	}

	if (( !isValidEmail(form.from.value)) || ( form.from.value == 'your@email') ) {
		errors += 'Please type your VALID email address.\n';
		numErrors++;
	}
	
	if (numErrors) {
		errors = 'Attention! ' + ((numErrors > 1) ? 'Theese' : 'This') + ' error' + ((numErrors > 1) ? 's' : '') + ' ' + ((numErrors > 1) ? 'were' : 'was') + ' detected :\n\n' + errors + '\n';
       		alert(errors);
         	return false;
  	}
  
  	return true;
	
}

-->
</script>
</head>
<body text="#000000" vlink="#004400" alink="#ff0000" link="#007700" bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" background="/images-toaster/background.gif">
<center>
  <form action="<? print $PHP_SELF; ?>" method="POST" onSubmit="return CheckFormSendEmail(this)">
  <table width="750" border="0" cellpadding="0" cellspacing="0">
    <tbody> 
    <tr> 
      <td width="203"><a href="http://www.qmail.org/"><img height="163" alt="logo" src="/images-toaster/kl-qmail-w.gif" width="200" border="0"></a> </td>
      <td align="center" valign="middle"> 
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr align="center" valign="middle"> 
            <td> 
              <h1><font color="#006600"><b>Qmail Toaster Admin</b></font></h1>
            </td>
          </tr>
        </tbody></table>
      </td>
    </tr>
    <tr align="right"> 
          <td colspan="2"><b><a href="/admin-toaster/email/">SEND EMAIL</a> | <a href="/admin-toaster/">TOASTER 
	          ADMIN</a></b></td>
   </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#007700"><b><font color="#ffffff">Send an Email to All Users:</font></b> </td>
    </tr>
    <tr> 
      <td colspan="2"><br>
      <? print_notify_users( $from , $emailText, $subject ); ?>
      <br></td>
    </tr>
    <tr> 
    </tbody> 
  </table>
  <br><i><a href="http://www.qmailtoaster.com" target="_blank">Qmail Toaster &copy 2004</a></i><br>
</form>
</center>
</body></html>

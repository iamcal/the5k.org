<?
	$title = 'contact';
	include('head.txt');
?>

<tr><td valign="top" class="titleCell"><div id="breadcrumbs"><a href="">5k home</a> / Contact</div></td></tr><tr><td valign="top" class="singleCell"><div class="editable" 
id="contact2002"><h1 class="pageTitle">Contact</h1> </div><script type="text/javascript">
	function validateForm(theForm) {
		alert('sorry, this goes nowhere');
		return false;
		var errs = '';
		if (theForm.action.value=='cancel') {return true}
		if (theForm.subject) {
			if (theForm.subject.value=='') {errs+='Please enter a subject.\r'}
			if (theForm.bodyText.value=='') {errs+='Don\'t you have something to say?\r'}
			}
		if (theForm.email) {
			if (theForm.email.value=='') {
				errs+='Please enter your email address\r';
				} else if (!checkEmail(theForm.email.value)) {errs+='Your email address should be in the form \'x@x.x\'';}
			}
		
				if (theForm.fromAddress.value=='') {errs+='Please enter your email address.\r'}
			
		if (errs!='') errs=''+errs;
		if (errs!='') {alert(errs); return false} else return true;
		}
	</script><p></p><form action="contact.php" method="post" onsubmit="return validateForm(this)"><table><tr><td></td><td class="maintext">Contact the 5k authorities:<br /><br 
/></td></tr><tr><td class="smallertext" align="right">subject: </td><td><input name="subject" /></td></tr><tr><td class="smallertext" align="right">message: </td><td><textarea cols="50" 
rows="10" name="bodyText"></textarea></td></tr><tr><td class="smallertext" align="right">your name: </td><td><input name="fromName" /></td></tr><tr><td class="smallertext" align="right">your 
email: </td><td><input name="fromAddress" /></td></tr><input type="hidden" name="action" value="send" /><input type="hidden" name="which" value="general" /><tr><td></td><td><input 
class="buttstyle" type="submit" value=" send " /></td></tr></table></form></td></tr>

<?
	include('foot.txt');
?>

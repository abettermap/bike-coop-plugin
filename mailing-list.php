<?php
$show_form = true;
if (isset($_POST['email'])) {//if "email" is filled out, proceed
	if (!is_valid_email($_POST['email'])) {
		echo "Invalid input";
		$note = "Invalid Email Address";
	} else {//send email
		$email = $_POST['email'] ;
		wp_mail("news-join@fcbikecoop.org", "Subject: Subscribe", 'Subscribe', "From: $email" );
		echo "Thank you!  A confirmation email will be sent.  Please follow the instructions to get signed up.";
		$show_form = false;
	}
}
if ($show_form):
?>
<form action="/mailing-list/" method="post">
<div class="row">
	<div class="small-3 columns">
		<label for="email-label" class="right inline">Your Email</label>
	</div>
	<div class="small-9 columns">
		<input name="email" type="email" id="email-label">
	</div>
</div>
<div class="row">
    <input class="button" value="Submit" type="submit">
</div>
</form>
<?php 
endif;
?>
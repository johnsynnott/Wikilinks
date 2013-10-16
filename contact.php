<?php
	$form_errors = array("name-errors" => NULL, "email-errors" => NULL, "message-errors" => NULL);
	if(isset($_POST['submit'])) {
		// Validate the name
		if(!empty($_POST['name'])) {
			// do something with validated name
		} else {
			$form_errors["name-errors"] = "No name provided.";
		}

		// Validate the email
		if(!empty($_POST['email'])) {
			$sanitized_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			if(filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
				// do something with validated email
			} else {
				$form_errors["email-errors"] = "Invalid email provided.";
			}
		} else  {
			$form_errors["email-errors"] = "No email provided.";
		}

		// Validate the message
		if(!empty($_POST['message'])) {
			// do something with validated message
		} else {
			$form_errors["message-errors"] = "No message provided.";
		}
	}

	// Send an email with the contact form submission
	// $to = "wikilinks@gmail.com";
	// $subject = "Wikilinks Contact - ".$validated_name;
	// $message = $validated_message;
	// $from = $validated_email;
	// $headers = "From:".$from;
	// mail($to, $subject, $message, $headers)

?>
<!DOCTYPE html>
<html>
<head>
	<title>Wikilinks | Contact Us</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->


    <link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="jumbotron">
  <div class="container">
    <h1>Contact Us</h1>
    <h3>We'd love to hear from you!</h3>
  </div>
</div>

<div class="container">
	<form method="POST">
		<div class="alert alert-info">All fields are required.</div>
		<div id="name-group" <?php if(!empty($form_errors["name-errors"])) { echo 'class="form-group has-error"'; } else { echo 'class="form-group"'; }?>>
			<label class="control-label" for="inputError"><?php print_r($form_errors["name-errors"]);?></label>
			<input type="text" class="form-control input-lg page-input" id="name" name="name" placeholder="Name" <?php echo 'value="'.$_POST['name'].'"';?> />
		</div>
		<div id="email-group" <?php if(!empty($form_errors["email-errors"])) { echo 'class="form-group has-error"'; } else { echo 'class="form-group"'; }?>>
			<label class="control-label" for="inputError"><?php print_r($form_errors["email-errors"]);?></label>
			<input type="text" class="form-control input-lg page-input" id="email" name="email" placeholder="Email" <?php echo 'value="'.$_POST['email'].'"';?> />
		</div>
		<div id="email-group" <?php if(!empty($form_errors["message-errors"])) { echo 'class="form-group has-error"'; } else { echo 'class="form-group"'; }?>>
			<label class="control-label" for="inputError"><?php print_r($form_errors["message-errors"]);?></label>
			<textarea class="form-control input-lg page-input" rows="6" id="message" name="message" placeholder="Message"><?php echo $_POST['message'];?></textarea>
		</div>
		<button type="submit" class="btn btn-primary btn-lg btn-block" id="contact_form_submit" name="submit"><span class="glyphicon glyphicon-send"></span> Send</button>
	</form>
</div>

<div class="footer">
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <ul class="nav navbar-nav">
        	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Terms of Service</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
        </ul>
        <ul>
            <li><p class="navbar-text navbar-right">Wikilinks &copy; 2013</p></li>
        </ul>
    </nav>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- jQueryUI (for cool effects and such) -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</body>
</html>
<?php

$name = $email = $affiliation = $feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$affiliation = $_POST["affiliation"];
	$feedback = $_POST["feedback"];

	// Send an email to the protege-feedback-form mailing list with feedback data.
	$to = 'protege-feedback-form@lists.stanford.edu';
	$subject = "Feedback from $name ($affiliation)";
	$headers = array();
	$headers[] = 'Content-type: text/plain; charset=iso-8859-1';
	$headers[] = 'From: protege-feedback-form@lists.stanford.edu';
	$headers[] = 'Reply-To: no-reply@lists.stanford.edu';
	$message = "Name: $name
Email: $email
Affiliation: $affiliation
Feedback: $feedback
	";
	if(strlen($name) > 0 && strlen(trim($name)) > 0 && strlen($feedback) > 0 && strlen(trim($feedback)) > 0)
		mail($to, $subject, $message, implode("\r\n", $headers));
	}
	
	// Send an email to the submitter, acknowledging receipt of the feedback and welcoming them to the Protege community.
	unset($to, $subject, $headers, $message);
	$to = $email;
	$subject = 'Welcome to Protege!';
	$headers = array();
	$headers[] = 'Content-type: text/plain; charset=iso-8859-1';
	$headers[] = 'From: protege-feedback-form-request@lists.stanford.edu';
	$headers[] = 'Reply-To: no-reply@lists.stanford.edu';
	$message = 'Thank you for submitting your feedback to the Protege developers. We highly appreciate this and will look into the feedback as soon as we can.

Need help installing or using Protege? Post your questions on our free user support mailing list.  Use the following link to subscribe:

https://mailman.stanford.edu/mailman/listinfo/protege-user

Are you a developer interested in Protege source code, building plug-ins, or programmatic access to ontologies?  Sign up for our developer support list:

https://mailman.stanford.edu/mailman/listinfo/protege-dev

Looking for Protege documentation?  Check out the Protege Wiki - the official home for all of our product documentation:

http://protegewiki.stanford.edu/wiki/Main_Page

Stay in touch with the Protege team and community via Twitter, Facebook, and our low-traffic announcements mailing list:

https://twitter.com/protegeproject
https://www.facebook.com/pages/Protege-Project/136205016405270
https://mailman.stanford.edu/mailman/listinfo/protege-announce

Last, but certainly not least, why not try out WebProtege?  WebProtege is our collaborative ontology development environment for the Web:

http://webprotege.stanford.edu/

We look forward to interacting with you as part of the Protege community!

Best Regards,
The Protege Team
	';
	if(strlen($email) > 0 && strlen(trim($email)) > 0) {
		mail($to, $subject, $message, implode("\r\n", $headers));
	}
}

?>
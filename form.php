<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'conniestandish.com' // Put you mail domain here
	,
	'S.F.H Reviews' // Put your site name / form name here
	,
	'cstandish@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@conniestandish.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->

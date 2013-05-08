<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('tutorial_includes.html'); ?>
		<title>TechWizard - Writing a new email</title>

	</head>
	<body>
	<?PHP
		$id = 1;	
    ?>	
		
		<div class="container">
			<?php include_once('../header.html'); ?>
			<div class = "boxydiv bordered">
			<div class="row">
				<div class="span8">
					<div class="tutorial-title"><h2>Writing a New Email</h2></div>
				</div>
			</div>
			<div class="row">
				<div class="span2">
					<button class="btn"><i class="icon-chevron-left"></i>Previous</button>
				</div>
				<div class="span2 offset4">
					<button class="btn">Next <i class="icon-chevron-right"></i></button>
				</div>
			</div>
			<hr style="width:67%;" />
			<div class = "row">
				<div class = "span8">
					<div id = "tutorial-content">
						So you've got email all set up and you want to send an email to your friend. 
						Now what?<br/>
						<p>
						1. Find the button that creates a new message in your email client.  Typically,
						 this button says "Compose" or "New email."  Here it is in gmail, outlook, and apple mail.</p><p>
						2. Type the email address of the person you are sending it to in the "To:" field.  More in-depth 
						instructions about using contacts to do it here.  For now, ignore the cc and bcc field.</p><p>
						3. In the "Subject:" field, write a short (less than 1 sentence) topic sentence for your email. 
						Something like "Thought of you today", "Information for tomorrow's meeting", or "Check out this cool 
						article I read today" will do.</p><p>
						4. Write your email, make it shiny, shiny pictures go here.
						</p><p>
						5. Press send! Your email will be delivered instantly.  But, don't be surprised if you don't get a reply. 
						Some people don't check their email very often, and not every email is seen as needing acknowledgement.
						</p>
					</div>
					<?php include_once('footer.php'); ?>
				</div>
				<?php include_once('sidebar.php'); ?>
			</div>
			</div>		
		</div>
	</body>
</html>

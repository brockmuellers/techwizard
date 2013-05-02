<!DOCTYPE html>
<html lang="en">
	<head>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
		<title>TechWizard Homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.min.css" rel = "stylesheet" media="screen">
		<link href="stylesheet.css" rel = "stylesheet" media="screen">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	    <script src="bootstrap/js/bootstrap.min.js"></script>
	    <script src="js/index.js"></script>
	    <script src="js/jquery.watermark.js"></script>
	    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	    <script type="text/javascript">
			function toggleThings(tog) {
				$(tog).toggle('fast')
			}
		</script>
		
		<?php
			$conn = mysql_connect('sql.mit.edu','jsharps','techwizardr0x') or die('Failed to connect db connection');
			mysql_select_db('jsharps+techwizard', $conn);			
		?>
			
	</head>
	<body>
		
		<div class="container">
			<div class="navbar">
			<div class="navbar-inner">
			<!--icon from iconfinder.com, by IconEden-->
			<a class="brand" href="index.html"><img src="img/wizard.png" id="header-icon"/>TechWizard</a>
			</div>
			</div>
			<div class = "boxydiv bordered">
			<div><h3>What do you want to learn about?</h3></div>
			<div class = "row">
				<div class = "span7">
					<?php
						$query = "SELECT * FROM subcategories WHERE parent=1";
						$results = mysql_query($query, $conn);
						while($res = mysql_fetch_assoc($results)) {
					?>
							<div class="row"><div class="offset1 span6">
							<button id = <?="category".$res['id'];?> class = "btn btn-primary tutorial-category" onclick = <?='toggleThings("#category'.$res['id'].'-tutorials")';?>>
								<?php echo $res['name']; ?>
							</button>
							</div></div>
							<div id=<?="category".$res['id']."-tutorials"?> class = "togglable" hidden="true">
						<?
								$tutorials = unserialize($res['tutorials']);
								$ids = join(',',$tutorials);
								$query = "SELECT * FROM tutorials WHERE tutorial_id in ($ids)";
								$tutorials = mysql_query($query, $conn);
								while($tut = mysql_fetch_assoc($tutorials)) {
							?>
								<div class="row"><div class="offset1 span5">
									<a href=<?="tutorials/".$tut['url'].".html";?>>
									<button class = "btn btn-info tutorial-category"><?=$tut['name'];?></button>
									</a>
								</div></div>
						
					<?php
					    }
					   echo "</div>";
					}
					?>
					<br/>
					<div class="span4">
					<a href="index.html">
					<button class="btn btn-success donebtn">Back to <img src="img/wizard.png" class="btn-icon"/> 
											<span style="font-family:'Share Tech';font-size:22px;font-weight:bold">TechWizard</span> Home</button>
					</a>
					</div>
				</div>
				<div class="span4">
					<div class="row">
						<div class="span3 offset1">
						<div class="sidebar bordered">
							<h4>Did you know?</h4>
							Email was invented by Atilla the Hun.<br/>
							Gmail is the most popular webmail client.<br/>
							Hotmail.com used to be hotmale.com, but a pornographic
							company sued them over the name.<br/>
							2 out of 4 of these facts are true!
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>

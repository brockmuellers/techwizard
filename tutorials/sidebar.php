<?php

$query = "SELECT * FROM tutorials WHERE tutorial_id=$id";
$tutorial = mysql_query($query, $conn);
$tutorial = mysql_fetch_assoc($tutorial);

$related = $tutorial['related'];
$prereqs = $tutorial['prereqs'];

$related = unserialize($related);
$prereqs = unserialize($prereqs);

$related = join(',',$related);
$query = "SELECT * FROM tutorials WHERE tutorial_id in ($related)";
$related = mysql_query($query);

$prereqs = join(',',$prereqs);
$query = "SELECT * FROM tutorials WHERE tutorial_id in ($prereqs)";
$prereqs = mysql_query($query);


?>
<div class = "span3">

	
					<div class = "related-tutorials bordered">
						<center><h4>Prereqs</h4></center>
						<?php
						while($prereq = mysql_fetch_assoc($prereqs)) {
						?>
						<a href=<?="'".$prereq['url']."php'";?>>
							<button class = "btn btn-warning tutorial-category"><?=$prereq['name'];?></button>
						</a>
						<?php
					    }
					    ?>
						
						<center><h4>Related</h4></center>
						<?php
						while($relatedTut = mysql_fetch_assoc($related)) {
						?>
						<a href=<?="'".$relatedTut['url']."php'";?>>
							<button class = "btn btn-success tutorial-category"><?=$relatedTut['name'];?></button>
						</a>
						<?php } ?>
					</div>
				</div>

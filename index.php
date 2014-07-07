<?php
	// Loads all the settings for this project.
	require_once 'config.php';

	/*
	  Author :		Luke Brown
	  License:  	MIT
	  Created: 		July 2014
	  URL    :		https://github.com/LukeXF/SimpleLinkShortener/
	  Contact:		me@luke.sx
	*/
 ?>

<!doctype html>
<html>
<body>

<div id="outside">
	<div id="inside">

			<?php
				//  Displays the welcome message, edit config.php to disable.
				if ($welcome == true) { echo $welcomeTop;};
			?>

			<h1>Custom Link Shortener </h1>
			<h2>Now Supports random shortened links for security</h2>
			<form id="form1" name="form1" method="post" action="shorten.php">
				<div class="link-input">

					<div class="bar">
						<input class="address" placeholder="Http://" type="text" name="url" id="url">
						<input type="submit" name="Submit" id="Submit" value="enter" class="button button-grey">
					</div>

				</div>
				<h2 class="i"><i>Enter you <b>long</b> boring link above</i></h2>
			</form>

			<?php
				//  Displays the welcome message, edit config.php to disable.
				if ($welcome == true) { echo $welcomeBottom;};
			?>



			<?php footer($showfooter); ?>

	</div> <!-- close inside -->
</div> <!-- close outside -->

</body>
</html>
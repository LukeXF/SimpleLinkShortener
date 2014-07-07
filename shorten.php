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
		//	Checks the connection to the database.
		if (!$con) {
			//	If it falses it issues an error... after a while.
			die('Could not connect: ' . mysql_error());
		}

		//	Selects the database from config.php
		mysql_select_db($selectDB, $con);

		//	Starts the post request to the table from config.php
		$urlinput = mysql_real_escape_string($_POST[$selectDBtable]);

		//	Allows to create an id from the first amount to the second.
		$id = rand(10000,99999);

		//	Makes the random link for the final shortened url.
		$shorturl = base_convert($id,20,36);

		//	Tells SQL to inset the processed information
		$sql = "insert into url values('$id','$urlinput','$shorturl')";

		// Issues the query
		mysql_query($sql,$con);

		//	Displays the final data.
		echo "<h2>" . $urlinput . "</h2>";
		echo "<h2>Is now is shortened to...<h2>";
		echo "<h1>" . $shorturl . "</h1>";
		$finalurl = $shorturl;

		// Closes the connection the database.
		mysql_close($con);
		?>

		<?php /*The form set-up to allow users to input the pre made links */ ?>
		<form id="form1" name="form1" method="post" target="_blank" action="<?php echo $shorturl ?>">
			<div class="link-input">

				<div class="bar">
					<input class="address" value="<?php echo $_SERVER['HTTP_REFERER'] . $shorturl ?>">
					<input type="submit" name="Submit" id="Submit" value="OPEN" class="button button-grey">
				</div>

			</div>
			<h2 class="i"><i>Your link has now been <b>shortened.</b></i></h2>
		</form>

		<br/><br/>
		<h2 class="i"><i>Or <a href="index.php"><b>click here</b></a> to shortern another</i></h2>

		<?php footer($showfooter); ?>

	</div> <!-- close inside -->
</div> <!-- close outside -->

</body>
</html>

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
	$decode = $_GET["decode"];
	//	Checks to see if the connection exists.
	if (!$con) {
		die('Could not connect: ' . mysqli_error());
	}

	//	Selects the database that you selected in config.php
	mysqli_select_db($con, $selectDB);

	//	Gets the shortened address
	@$de= mysqli_real_escape_string($con, $decode);

	//	Selects all in the selected table from config.php and searches for a match
	$sql = 'select * from $selectDBtable where shortened="$de"';

	//	Issues the sexy request
	$result=mysqli_query($con, "select * from $selectDBtable where shortened='$de'");

	//	Now this is where the magic happens.
	//	If you setup .htaccess then this will work quite nicely.
	while($row = mysqli_fetch_array($result)) {
		$res=$row[url];
		print_r($res);
		header("location:".$res);
	}

	/*
		That's it. Simple to the core. Obviously I could of included more complex
		and reliable code with better security protocols to protect the database
		from injections and all other nasties, but this project was designed to be
		simple and easy to use, develop and understand.

		Thanks for using my code,
		Luke
	*/

?>
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

	//	Checks to see if the connection exists.
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	//	Selects the database that you selected in config.php
	mysql_select_db($selectDB, $con);

	//	Gets the shortened address
	$de= mysql_real_escape_string($_GET["decode"]);

	//	Selects all in the selected table from config.php and searches for a match
	$sql = 'select * from $selectDBtable where shortened="$de"';

	//	Issues the sexy request
	$result=mysql_query("select * from $selectDBtable where shortened='$de'");

	//	Now this is where the magic happens.
	//	If you setup .htaccess then this will work quite nicely.
	while($row = mysql_fetch_array($result)) {
		$res=$row[$selectDBtable];
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
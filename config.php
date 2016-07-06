<?php
	/*
	  Author :		Luke Brown
	  License:  	MIT
	  Created: 		July 2014
	  URL    :		https://github.com/LukeXF/SimpleLinkShortener/
	  Contact:		me@luke.sx
	*/

	//	Turns off the blue welcome text
	$welcome = true;

/*==============================================*/
/*				DATABASE SETTINGS				*/
/*==============================================*/


	// The connection settings to your database.
	$con = mysqli_connect(
		"localhost", 	// Host name
		"user",	// Username Name
		"password" 	// Password
	);

	// The Database name and table you wish to use
	$selectDB = "DB";	// Database Name
	// The table will auto generate if not found.
	$selectDBtable = "Table";	// Table Name




/*==============================================*/
/*				DATABASE CREATIONS				*/
/*==============================================*/

	//	Creation will only happen if welcome settings are on.
	if ($welcome == true) {
		// Alternatively, you can run this in your SQL query if you have issues.
		$sql = "CREATE TABLE $selectDBtable (
				`id` varchar(5) NOT NULL UNIQUE,
				`url` varchar(255) NOT NULL,
				`shortened` varchar(4) NOT NULL
				)";

		// Creates the database if successful and welcome is set to true
		if (mysqli_query($con,$sql)) {
			echo "Link Shortener table created successfully";
		} else {
			//echo "Error creating table: " . mysqli_error($con);
		}
	}




/*==============================================*/
/*				APPERANCE SETTINGS				*/
/*==============================================*/

	//	This loads the styling for the page, feel free to download your own.
	//	If you are looking for a bootstrap version please visit the GitHub repo.
	echo "<link rel='stylesheet' href='style.css' type='text/css'>";
	// Sets the title of the project.
	echo "<title>Link Shortener</title>";





	// Turn the global footer on and off.
	$showfooter = true;

	// The code for the GitHub icon and link.
	function footer($showfooter) {
		if (isset($showfooter)) {
			if ($showfooter == true) {
				//	Feel free to change this to display your own global footer :)
				echo "<a href='https://github.com/LukeXF/SimpleLinkShortener' target='_blank'>";
				echo "	<img width='50px' src='http://puu.sh/9ZZXg/b9b5ace180.png'/>";
				echo "</a>";
			}
		}
	}







/*==============================================*/
/*				WELCOME MESSAGES				*/
/*==============================================*/

	// The html code for the welcome messages.
	$welcomeTop =
		  "<p id='small'>Edit <b>config.php</b> and set <b>&dollar;welcome = true;</b> to <b>false</b> to remove the blue welcome guide.</p>"
		. "<br/>"
		. "<p>Thanks for downloading my Link Shortener repository.<br/>"
		. "If you found this useful please give it a star on <a href='https://github.com/LukeXF/SimpleLinkShortener'>Github</a>.<br/>"
		. "Report <a href='https://github.com/LukeXF/SimpleLinkShortener/issues'>Here</a>, if you find any issues.<br/></p><br/>"
	;

	$welcomeBottom =
		  "<p id='small'>Edit <b>" . $_SERVER['DOCUMENT_ROOT'] . "/config.php</b> to setup the database</p>"
		. "<p>View more downloads of my link shortener over"
		. "<a href='https://github.com/LukeXF/SimpleLinkShortener'> Here</a>.</p><br/>"
		. "<br/>"
		. "<a href='https://twitter.com/DiamondXF'>Twitter</a> - "
		. "<a href='https://twitter.com/LukeXF'>GiHub</a> - "
		. "<a href='mailto:me@luke.sx'>Email</a><br/>"
	;

?>
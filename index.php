<?php
	$welcome = false;
	// Decided whether or not to display help guide.
	// Set false to disable welcome message.
?>

<!doctype html>
<html>
<body>
	<div id="outside">
		<div id="inside">

			<?php
				// Loads the links file.
				$links = parse_ini_file('links.ini');

				echo "<link rel='stylesheet' href='style.css' type='text/css'>";


				//  Displays the welcome message, to disable set line 2 to false not here.
				if ($welcome == true) {

					echo "<p id='small'>Edit this page and set <b>&dollar;welcome = true;</b> to <b>false</b> to remove the blue welcome guide.</p>";
					echo "<br/>";
					echo "<p>Thanks for downloading my Link Shortener repository.<br/>";
					echo "If you found this useful please give it a star on <a href='https://github.com/LukeXF/SimpleLinkShortener'>Github</a>.<br/>";
					echo "Report <a href='https://github.com/LukeXF/SimpleLinkShortener/issues'>Here</a>, if you find any issues.<br/></p><br/>";

				};


				// If the request is valid loads the page.
				if(isset($_GET['l']) && array_key_exists($_GET['l'], $links))
					{
						header('Location: ' . $links[$_GET['l']]);
					}


				// If the ?l= is entered, but the request is invalid or missing.
				elseif(isset($_GET['l']))
					{
						header('Location: ' . $links[$_GET['l']]);
						echo "<title>" . $_GET['l'] . "Link does not exist :/</title>";
						echo '<h1>Link Does Not exist </h1>';
						echo " Give <a href='yt'>http://" . $_SERVER['SERVER_NAME'] . "/yt</a> a go.";
					}


				// If you loaded the raw page but couldn't be bothered to do anything else.
				else
					{
						header('Link Not Found');
						echo "<title>No Input</title>";
						echo '<h1>No Inputted Link </h1>';
						echo "<h2>Try using <b>/?l=yt</b></h2>";
						echo "Maybe <a href='yt'>http://" . $_SERVER['SERVER_NAME'] . "/yt</a> a go.";
					}

			?>

		<?php /*The form set-up to allow users to input the pre made links */ ?>
		<form method='get' action='/?l=' target="_blank">
			<div class="link-input">

				<div class="bar">
					<input class="address" value="" placeholder="example: yt" target="_blank" name="l" id="ign">
					<input type="submit" value="enter" class="button button-grey">
				</div>

			</div>
			<h2 class="i"><i>Enter you <b>pre made</b> link above</i></h2>
		</form>

		<?php
			//  Displays the welcome message, to disable set line 2 to false not here.
			if ($welcome == true) {
				echo "<p id='small'>Edit <b>links.ini</b> to add more links to your site</p>";
				echo "<p>If you are wanting a database versions where you have the <b>option</b><br/>";
				echo "for end users to make their own links via the site and even support<br/>";
				echo "custom links and custom sub domains then click";
				echo "<a href='https://github.com/LukeXF/SimpleLinkShortener'> Here</a>.<br/>";
				echo "<br/>";
				echo "<a href='https://twitter.com/DiamondXF'>Twitter</a> - ";
				echo "<a href='https://twitter.com/LukeXF'>GiHub</a> - ";
				echo "<a href='mailto:me@luke.sx'>Email</a>";
			};
		?>

		</div> <!-- close #content -->
	</div> <!-- close #container -->
</body>
</html>

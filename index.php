<?php
$links = parse_ini_file('links.ini');

if(isset($_GET['l']) && array_key_exists($_GET['l'], $links))
{
    header('Location: ' . $links[$_GET['l']]);
} else {
    header('Link Not Found');
    echo '<h1>Unknown link.</h1>';
}
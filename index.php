<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang)
{
    case "fr":
		header("location: /fr");
        break;
	default:
    case "en":
        header("location: /en");
        break;
}
?>
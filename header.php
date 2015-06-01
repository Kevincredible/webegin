<?php
$siteTitle = 'Site Title';

function isCurrent($target) {
	(strpos($_SERVER['PHP_SELF'], $target)) ?  $current = true :  $current = false;
	return $current;
}
?>
<!doctype html>
<html>
<head>
<meta name="robots" content="noindex, nofollow">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $pageTitle ? $siteTitle . ' | ' . $pageTitle : $siteTitle ?></title>
<link rel="stylesheet" type="text/css" href="css/main.min.css">
<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
<![endif]-->
</head>
<body>
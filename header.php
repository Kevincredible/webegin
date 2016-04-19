<?php
$siteTitle = 'Site Title';
$isDev = true;

function isCurrent($target) {
    (strpos($_SERVER['PHP_SELF'], $target)) ?  $current = true :  $current = false;
    return $current;
}
?>
<!doctype html>
<html>
    <head>
        <?php if (isDev) { ?>
        <meta name="robots" content="noindex, nofollow">
        <?php } ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $pageTitle ? $siteTitle . ' | ' . $pageTitle : $siteTitle ?></title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/main<?= ($isDev) ? '' : '.min' ?>.css">
    </head>
    <body>
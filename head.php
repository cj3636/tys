<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
}
?>
<head>
    <title>The Yellow Sub Servers</title>
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description"
          content="The Yellow Sub Ltd. Server Hosting and Much More!"/>
    <meta name="keywords" content="video, game, server, yellowsub, minecraft"/>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script src="semantic/dist/clipboard.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

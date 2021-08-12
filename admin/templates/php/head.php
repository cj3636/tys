<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', '/admin' . DIRECTORY_SEPARATOR);
}
?>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/admin/templates/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/admin/templates/semantic/dist/semantic.min.css">
    <script src="/admin/templates/js/jquery.js"></script>
    <script src="/admin/templates/semantic/dist/semantic.min.js"></script>
    <script src="/admin/templates/semantic/dist/clipboard.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/admin/templates/css/style.css">
</head>

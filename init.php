<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
}
//if (!defined('ROOT_DIR')) {
//    define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
//}
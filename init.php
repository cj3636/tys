<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
const ROOT_PATH = __DIR__ . DIRECTORY_SEPARATOR;
const HEAD = ROOT_PATH . 'head.php';
const TITLE = ROOT_PATH . 'title.php';
const HOME = ROOT_PATH . 'home.php';


const CARD_HTML = ROOT_PATH . 'html/card.html';
const LOGIN_HTML = ROOT_PATH . 'html/login.html';
const SIGNUP_HTML = ROOT_PATH . 'html/signup.html';
const RENDER_HTML1 = ROOT_PATH . 'render/render1.html';
const RENDER_HTML2 = ROOT_PATH . 'render/render2.html';

const TXT_SERVERS = ROOT_PATH . 'servers/txt_servers.php';
const JSON_SERVERS = ROOT_PATH . 'servers/json_servers.php';

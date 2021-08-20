<?php
/*
 * Copyright (c) 2021.
 */

class secret {

}
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
////connection variables
//$config = parse_ini_file('database.ini');
//
////create mysql connection
//$mysqli = new mysqli($config['host'], $config['username'], $config['passwd']);
//if ($mysqli->connect_errno) {
//    printf("Connection failed: %s\n", $mysqli->connect_error);
//    die();
//}
//
////create the database
////if (!$mysqli->query('CREATE DATABASE webserver')) {
////    printf("Errormessage: %s\n", $mysqli->error);
////}
//
////create users table with all the fields
//$mysqli->query('
//CREATE TABLE `webserver`.`users`
//(
//    `id` INT NOT NULL AUTO_INCREMENT,
//    `username` VARCHAR(50) NOT NULL,
//    `email` VARCHAR(100) NOT NULL,
//    `password` VARCHAR(100) NOT NULL,
//    `hash` VARCHAR(32) NOT NULL,
//    `active` BOOL NOT NULL DEFAULT 0,
//    `token` varchar(16) NOT NULL,
//    `admin` BOOL NOT NULL DEFAULT 0,
//PRIMARY KEY (`id`)
//);') or die($mysqli->error);

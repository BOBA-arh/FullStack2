<?php
session_start();
$user = 'root';
$pdo = new PDO('mysql:dbname=New_new;host=127.0.0.1;port=3306', $user, '');
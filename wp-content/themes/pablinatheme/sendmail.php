<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'includes/PHPMailer/class.phpmailer.php'; // path to the PHPMailer class
require 'includes/PHPMailer/class.smtp.php';

$mail = new PHPMailer();
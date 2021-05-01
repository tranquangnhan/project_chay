<?php
error_reporting(1);
define('HOST_DB','localhost');
define('NAME_DB','project_chay');
define('USER_DB','root');
define('PASS_DB','');
define('ROOT_URL','/project_chay');
define('ADMIN_URL',ROOT_URL.'/admin');
define('SITE_URL',ROOT_URL.'/site/');
define('SYSTEM_PATH',ROOT_URL.'/system');
define('PATH_IMG_ADMIN','../uploads/');
define('PAGE_SIZE',10);
define('PAGE_SIZE_PRO',16);
define('PATH_IMG_SITE','../uploads/');
session_start();

if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "ge")
			$_SESSION['lang'] = "ge";
	}


?>
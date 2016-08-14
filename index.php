<?php
	ini_set('display_errors', 1);
	session_start();
	//ambil halaman index di controllers
	require_once "c/index.php";

	switch ($_GET['page']) {
		case "":
			header("location:home");
			break;
		
		case "login":
			if (isset($_SESSION['usrID'])) {
				header("location:home");
			} else {
				$content = new authControl();
				
				if (isset($_COOKIE['siro']['usrID'])) {
					$content->lock();
				} else {
					$content->login();
				}
			}	
			break;

		case "auth":
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				$usrEmail 	= mysql_real_escape_string($_POST['usrEmail']);
				$usrPass 	= mysql_real_escape_string(md5($_POST['usrPass']));

				$content = new authControl();
				$content->auth($usrEmail, $usrPass);
			} else  {
				header("HTTP/1.1 405"); echo "method salah"; header("location:home");
			}
			break;
			
		case "logout":
			setcookie("siro[usrID]", "", time()-60*60*24*365, "/"); 
			session_destroy();
			header("location:./");
			break;
		
		/*
		case "sironetReg":
			$content = new pageControl();
			$content->sironetReg();
			break;
		*/
		
		default:
			if (!isset($_SESSION['usrID'])) {// Kalau session tidak ada
				header("location:login");
			} else { // Kalau session ada
				$content = new contentControl();
				$content->$_GET['page']();
			}
			break;
	}
?>
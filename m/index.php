<?php
	//tolak akses langsung ke file
	if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {
		die ("Akses Ditolak");
	} else {
		require_once "./lib/conf.php";

		class authModel {
			public function auth($usrEmail, $usrPass){		
			
				$query = mysql_query("SELECT
					*
					FROM sirosys.usr
					WHERE sirosys.usr.usrEmail = '$usrEmail'
					AND sirosys.usr.usrPass = '$usrPass'
					AND usrStatus = 1
				");
				$array = mysql_fetch_assoc($query);
				
				if (mysql_num_rows($query)) {
					
					$_SESSION['usrID']			= $array['usrID'];
					$_SESSION['usrRoleID']		= $array['usrRoleID'];
					$_SESSION['usrEmail']		= $array['usrEmail'];
					$_SESSION['usrFname']		= $array['usrFname'];
					$_SESSION['usrLname']		= $array['usrLname'];	
					
					setcookie("siro[usrID]", $array['usrID'], time()+60*60*24*30, "/");

					echo "OK";
				} else {
					header("HTTP/1.1 401"); echo "nggak ada";
				}
			}

			public function lock($usrID){
				$query = mysql_query("SELECT
					*
					FROM sirosys.usr
					WHERE sirosys.usr.usrID = $usrID
				");

				$array = mysql_fetch_assoc($query);
				if (mysql_num_rows($query)) {
					return $array;
				} else {
					header("HTTP/1.1 401"); echo "nggak ada";
				}
			}
		}

		class netRegModel {
			public function product(){
				
				$query = mysql_query("SELECT * FROM sirosys.usr");

				while ($array = mysql_fetch_assoc($query)) {
					$hasil[] = $array;
				}

				return $hasil;
				
			}
		}
	}
?>
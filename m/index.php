<?php
	//tolak akses langsung ke file
	if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {
		die ("Akses Ditolak");
	} else {

		// Panggil configuration file untuk Database
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

		class searchModel {
			public function search($search){

				$query = mysql_query("SELECT
					sirosys.usr.usrID, sirosys.usr.usrEmail, sirosys.usr.usrFname, sirosys.usr.usrLname, sirosys.usr.usrCell
					FROM sirosys.usr
					WHERE sirosys.usr.usrID = '$search'
					OR sirosys.usr.usrEmail LIKE '$search' 
					OR sirosys.usr.usrFname LIKE '%$search%'
					OR sirosys.usr.usrLname LIKE '%$search%'
				");

			//	$array = mysql_fetch_assoc($query);
				while ($array = mysql_fetch_assoc($query)) {$rows[] = $array;}
				

			//	if (mysql_num_rows($query)) {
			//		header("HTTP/1.1 200");
					return $rows;
			//	} else {
			//		return header("HTTP/1.1 401"); echo "Tidak Ada Data";
			//	}

			}
		}		

		class netRegModel {
			public function product(){
				
				$query = mysql_query("SELECT * FROM sirosys.usr");

				while ($array = mysql_fetch_assoc($query)) {$hasil[] = $array;}

				return $hasil;
				
			}
		}

	}
?>
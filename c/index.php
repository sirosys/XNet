<?php
	//tolak akses langsung ke file
	if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {		
		die ("Akses Ditolak");
	} else {
		
		// halaman ini digunakan untuk mengontrol yang akan ditampilkan di views
		require_once "m/index.php";

		class authControl {
			public function login() {require_once "v/login.php";}

			public function lock() {
				$query = new authModel();
				

				require_once "v/lock.php";
			}

			public function auth($usrEmail, $usrPass) {
				$query = new authModel();
				$query->auth($usrEmail, $usrPass);
			}


		}

		class contentControl {
			
			public function search(){

			//	$search = $_GET['search'];
				$query = new searchModel();

				require_once "v/search.php";
			}
			

			public function home() {
				require_once "v/home.php";
			}

			public function netReg() {
				$netRegModel = new netRegModel();

				require_once "v/netReg.php";
			}
		}

	}	
?>
<?php 
	include_once('models/Login.php');
	class LoginController{
		private $login;

		public function showLoginForm(){
			include_once('views/login/login.php');
		}

		public function loginSubmit(){
			$login = new Login();
			$login ->login();
		}

		public function logout()
		{
			unset($_SESSION['user']);
			header('Location: http://duydu.zent:8080/unit08_MVC_Ajax/views/admin/homeadmin.php');
		}
	}
 ?>
<?php 
	include_once('models/Connection.php');
	class Login{
		private $connLogin;
		//tao ket noi
		public function __construct(){
			$connection = new Connection();
			$this->connLogin = $connection->conn;
		}

		public function Login(){
			
			if (isset($_POST['submit'])) {
				
				$user=$_POST['user'];
				$pass =$_POST['password'];
				
				if ($user=="") {
					setcookie('error2','<b>Bạn chưa nhập email!</b>',time()+2);
					header('Location: ?mod=login&act=index');	
				}else if($pass==""){
					setcookie('error3','<b>Bạn chưa nhập mật khẩu</b>',time()+2);
					header('Location: ?mod=login&act=index');	
				}else{
					$query= "SELECT * FROM admin WHERE user = '".$user."' AND password ='".$pass."' AND permission = 1 ";
					$result = $this->connLogin->query($query);
					if (mysqli_num_rows($result) == 0) {
						setcookie('error1','<b>Bạn nhập sai email hoặc mật khẩu!</b>',time()+2);
						header('Location: ?mod=login&act=index');
					}else{
							
						$_SESSION['user'] = $result->fetch_assoc();

						header('Location: views/admin/homeadmin.php');
					}	
				}
			} 
		}
	}
?>
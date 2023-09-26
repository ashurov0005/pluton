<?php
	session_start();
	ini_set('display_errors','on');
    error_reporting(E_ALL);

    class signing{
        public $servername = "localhost";
        public $username = "root";
        public $password = "root";
        public $dbname = "psixobd";

		public function OpenConnection()
	    {
	        $connenct_to_db = new PDO("mysql:host=$this->servername;port=3306;dbname=$this->dbname", $this->username, $this->password);;
	        if (isset($connenct_to_db)) {
	        	return $connenct_to_db;
	        }else{
	        	return "ERROR";
	        }
	    }

	    public function checkExistNumber($login, $password)
	    {
			try
			{
	    	$conn = $this->OpenConnection();
	    	if (isset($conn)) {
	    		$query="select * FROM user where password='$password' and login = '$login'";
	    		// echo $query;
	    		// exit;
	    		$res=$conn->query($query);
	    		if (isset($res)) {
                    // var_dump($res);
                    // exit;
	    			$row = $res->fetch(PDO::FETCH_ASSOC);
	    			// var_dump($row);
	    			// exit;
	    			if (!empty($row)) {
						$_SESSION['fname']=$row['fname'];

	    				header("LOCATION: ../konslut.php");
	    			}else{
						// throw new Exeption("123456");
	    				//$_SESSION['error']='Пользователь с такими данными не зарегистрирован';
                        //$_SESSION['login']=$login;
                        //$_SESSION['password']=$password;
	    				//$conn=null;
			        	header("LOCATION:../log.php");
	    				// return "1";	    				
	    			}
	    		}
	    	}else{
	    		$_SESSION['error']='Временная ошибка';
			    header("LOCATION:".$_SERVER['HTTP_REFERER']);
	    		// усрз "Временная ошибка";
	    	}
		}
		catch(Exeption $ex){
			echo $ex->getMessage();
		}
	    }
    }

    $login = $_POST['login'];
    $password = $_POST['password'];
    // echo $phone_number." ".$contragent_name;
    // exit;
    $auth = new signing();
    $check = $auth->checkExistNumber($login, $password);

    // echo $check;

?>
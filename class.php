<?php
session_start();
	require 'config.php';
	
	class db_class{
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
		
		public function __construct(){
			$this->connect();
		}
		
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
		Public function real_escape_string($values)
		{
		return $this->conn->real_escape_string($values)	;
			
		}
		
		
			public function view_completion()
			{
			
			$sql="select * from completion order by id asc ";
									$result=mysqli_query($this->conn, $sql);
									
									return $result;

			}
			
			public function updatedetails($uid,$mobile,$email,$service,$website,$startupname,$address_city_state)
			{
			$sql="UPDATE users join usersfull on users.id=usersfull.userid SET users.mobile='".$mobile."',users.email='".$email."',usersfull.service='".$service."',usersfull.website='".$website."',usersfull.startupname='".$startupname."',usersfull.address_city_state='".$address_city_state."' where usersfull.userid='".$uid."'";
			
												$result=mysqli_query($this->conn, $sql);
												return $result; 

			}
			
			
			public function edit_user_details($uid)
			{
			$sql="select users.mobile,users.email,usersfull.service,usersfull.website,usersfull.startupname,usersfull.address_city_state from usersfull join users on usersfull.userid=users.id where usersfull.userid='".$uid."'";
			
												$result=mysqli_query($this->conn, $sql);
									
									return $result;

			
			}


		
		
		public function view_userprofile($uid)
		{
					$sql ="select users.name,users.mobile,users.email,users.password,users.focus_sector from users where users.id='".$uid."'   ";
		$result=mysqli_query($this->conn, $sql);

		          $user_data=mysqli_fetch_array($result);
				  
				  return $user_data;

		
		}
		


						public function view_testimonials()
			{
			
			$sql="select * from testimonials order by id asc  ";
									$result=mysqli_query($this->conn, $sql);
									
									return $result;

			}
			
				public function view_testimonials_count()
			{
			
			$sql="select * from testimonials order by id asc  ";
									$result=mysqli_query($this->conn, $sql);
									
									return mysqli_num_rows($result);

			}
			
			                   public function view_contact()
				   {
				   
				   			$sql="select * from contact order by id asc  ";
									$result=mysqli_query($this->conn, $sql);
									return $result;

				   }

			
			

                   public function view_pricing()
				   {
				   
				   			$sql="select * from pricing order by id asc  ";
									$result=mysqli_query($this->conn, $sql);
									return $result;

				   }

}
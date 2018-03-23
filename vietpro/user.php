<?php 
	
	include_once('database.php');
	class user extends database{
		protected $user_id = Null;
		protected $user_name = Null;
		protected $user_pass = Null;
		protected $user_lv = Null;
		//Ham construct se tu dong thuc thi khi mot sinh vien duoc khoi tao
		public function __construct(){
			$this->connect();
		}
		//Ham set gia tri
		public function set_user_id($user_id){
			$this->user_id = $user_id;
		}
		//Ham lay gia tri
		public function get_user_id(){
			$user_id = $this->user_id;
			return $user_id;
		}

		//Ham set gia tri
		public function set_user_name($user_name){
			$this->user_name = $user_name;
		}
		//Ham lay gia tri
		public function get_user_name(){
			$user_name = $this->user_name;
			return $user_name;
		}

		//Ham set gia tri
		public function set_user_pass($user_pass){
			$this->user_pass = $user_pass;
		}
		//Ham lay gia tri
		public function get_user_pass(){
			$user_pass = $this->user_pass;
			return $user_pass;
		}


		//Ham set gia tri
		public function set_user_level($user_level){
			$this->user_lv = $user_level;
		}
		//Ham lay gia tri
		public function get_user_level(){
			$user_lv = $this->user_level;
			return $user_level;
		}


		// Phuong thuc login
		public function login(){
			$sql = "Select * from user where user_name = '$this->user_name' AND user_pass = '$this->user_pass' AND user_level = 2";
			 $this->query($sql);
			 if($this->num_row() > 0 ){
			 	$_SESSION['user_name'] = $this->user_name;
			 	$_SESSION['user_level'] = 2;
			 	return 'user_valid';
			 }
		}

		//Phuong thuc add_user()
		public function add_user(){
			$sql = "Select * from user where user_name = '$this->user_name'";
			$this->query($sql);
			if($this->num_row() > 0){
				return "User exist";
			}
			else{
				$sql = "Insert into user(user_name,user_pass,user_level) values ('$this->user_name','$this->user_pass','$this->user_lv') ";
				$this->query($sql);
			}
		}
		//Phuong thuc edit user
		public function edit_user(){
			$sql = "Select * from user where user_name = '$this->user_name' AND user_id != '$this->user_id'";
			$this->query($sql);
			if($this->num_row() > 0){
				return "user exist";
			}
			else{
				$sql = "Update user Set user_name ='$this->username', user_pass = '$this->user_pass', user_lv = '$this->user_lv' where user_id = '$this->user_id' ";
				$this->query($sql);
			}
		}
		//Phuong thuc del user
		public function del_user(){
			$sql = "delete from user where user_id = '$this->user_id'";
			$this->query($sql);
			
		}

	}

 ?>
<?php
	class User{

		private $con;
        private $username;
		public function __construct($con,$username) {
            $this->con = $con;
            $this->username=$username;
		}
		public function getUsername(){
			return $this->username;
		}
		public function getName(){
			$query=mysqli_query($this->con,"SELECT concat(firstname,' ',lastname) as 'name' from users where username='$this->username'");
			$row=mysqli_fetch_array($query);
			return $row['name'];
		}
	}
?>
<?php

class User {
	protected $username;
	protected $password;
	
        public function __construct($username, $password) {		
		$this->username = $username;
                $this->password = $password;
	}
        public function __toString(){
            return 'First Name: ' . $this->firstName . ' Last Name: ' . $this->lastName . ' Username: ' . $this->username ."\n";
        }
}
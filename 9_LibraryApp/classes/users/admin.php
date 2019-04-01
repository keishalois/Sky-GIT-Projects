<?php

namespace classes\users;

class Admin extends User {
         public function __toString(){
            return 'First Name: ' . $this->firstName . ' Last Name: ' . $this->lastName . ' Username: ' . $this->username ."\n";
        }   
}


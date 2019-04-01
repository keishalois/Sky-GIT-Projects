<?php

namespace classes\users;

class Customer extends User {
            public function __toString(){
            return 'First Name: ' . $this->firstName . ' Last Name: ' . $this->lastName . ' Username: ' . $this->username ."\n";
        }
        
            }



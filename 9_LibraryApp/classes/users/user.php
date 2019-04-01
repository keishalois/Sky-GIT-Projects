<?php

include "/Applications/XAMPP/xamppfiles/htdocs/songlibrary2/classes/connector.php";
class User {
        use Connector;
	protected $username;
	protected $password;
	
        public function __construct($username, $password) {		
		$this->username = $username;
                $this->password = $password;
	}
        
        public function loginUser() {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT Username, Password FROM users WHERE Username= :user AND Password= :psw";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user'=> $this->username, 'psw'=> $this->password]);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION["username"]=$row["Username"];
                    header("Location:userpage.php");}
            
        } catch (PDOException $e) {
            $error = $e->errorInfo();
            die("Login failed sorry ..." . $error . $e->getMessage());
        }
        unset($stmt);
    }
    
        public function createUser() {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (Username, Password) VALUES (:user, :psw)";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user'=> $this->username, 'psw'=> $this->password]);
                }

        catch (PDOException $e) {
            $error = $e->errorInfo();
            die("Sign up failed sorry ..." . $error . $e->getMessage());
        }
        unset($stmt);
    }
       
        }
      
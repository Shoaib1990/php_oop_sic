<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

require_once 'config.php';
$table_name = "tbllogin";

$username = $password = "";
$username_err = $password_err = "";


class User {

    private $username;
    private $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    public function validation() {
        return "$this->username is available";
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}

$user1 = new User('shoaib', 'shoaib@mail.com');
echo $user1->validation();


?>
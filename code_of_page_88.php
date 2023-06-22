<?php

class User {
    private $login_id = "";
    private $active_status = "";

    public function __construct($id, $status) {
        $this->login_id = $id;
        $this->active_status = $status;
    }

    public function setLoginId($id) {
        $this->login_id = $id;
    }

    public function setStatus($status) {
        $this->active_status = $status;
    }

    public function getLoginId() {
        return $this->login_id;
    }

    public function getActiveStatus() {
        return $this->active_status;
    }

    public function showUserInfo() {
        echo "Login ID: " . $this->login_id . "<br>";
        echo "Active Status: " . $this->active_status . "<br>";
    }

    public function __clone() {
        $this->login_id = '';
        $this->active_status = '';
    }
}

class Employee {
    private $name = "";
    private $user = null;

    public function __construct($name, User $user) {
        $this->name = $name;
        $this->user = $user;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getUser() {
        return $this->user;
    }

    public function showEmployeeInfo() {
        echo "<br>Employee Name: " . $this->name . "<br>";
        echo "<br>Login Status: <br>";
        $this->user->showUserInfo();
    }

    public function __clone() {
        $this->user = clone $this->user;
    }
}

$user = new User("Storm29", "1");
$e1 = new Employee("Jarir", $user);

$e2 = clone $e1;
$e2->setName("Riasat");
$e2User = $e2->getUser();
$e2User->setLoginId("Riasat@user");
$e2User->setStatus("1"); // Set the active status for Riasat

$e1->showEmployeeInfo();
$e2->showEmployeeInfo();
?>
<?php
include "../classes/User.php";

// create an object of User class
$user = new User;

// call login method
$user->login($_POST);

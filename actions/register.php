<?php
include "../classes/User.php";

// Create an object of User class
$user = new User;

// Call store method of User class
$user->store($_POST);

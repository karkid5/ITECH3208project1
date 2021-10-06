<?php
require_once "config.php";
/**
 * Log in a particular user
 */
function login($username) {
	$_SESSION['username'] = $username;
}

/**
 * Log out the current user
 */
function logout() {
	unset($_SESSION['username']);
	session_destroy();
}

/**
 * Return whether there a user is logged in
 */
function is_logged_in() {
	return isset($_SESSION['username']);
}

/**
 * Get the current logged-in username
 */
function logged_in_user() {
	return $_SESSION['username'];
}

/**
 * Redirect if not logged in
 */
function require_login() {
	if(!is_logged_in()) {
		header('Location: ../signup.html');
	}
}

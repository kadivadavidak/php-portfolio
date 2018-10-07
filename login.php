<?php
require 'db_config.php';

if (array_key_exists('name', $_SESSION)) {
    header("Location: /practice/Portfolio/portal.php");
}

$errorHtml = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    list($errors, $input) = validate_form();

    if ($errors) {
        $errorHtml = $errors;
    } else {
        $_SESSION['name'] = $input['name'];

        header("Location: /practice/Portfolio/portal.php");
    }
}

function validate_form() {
    global $db_connection;
    $input = array();
    $errors = array();

    // This gets set to true only if the submitted password matches
    $password_ok = false;

    $input['username'] = $_POST['username'] ?? '';
    $submitted_password = $_POST['password'] ?? '';

    $query = "SELECT password, first_name FROM `user` WHERE username = '{$input['username']}'";
    if ($result = $db_connection->query($query)->fetch()) {
        $password_ok = password_verify($submitted_password, $result['password']);
        if (! $password_ok) {
            $errors[] = 'Please enter a valid username and password.';
        }
        $input['name'] = $result['first_name'];
    } else {
        $errors[] = 'There was an error connecting to the DB.';
    }

    $db_connection = NULL;

    return array($errors, $input);
}
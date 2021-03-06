<?php
require_once '../util/utilities.php';
session_start();

// Validate required field presence
$required_fields = ['email', 'password'];
$validation_errors = [];
$validations = [
    function() use ($required_fields) { return Validation::keys_missing($required_fields); },
    function() { return Validation::email_login_error($_POST['email']); },
    function() { return Validation::password_error($_POST['password']); },
];

foreach ($validations as $validation) {
    if ($msg = $validation()) {
        array_push($validation_errors, $msg);
    }
}
if (count($validation_errors) === 0 && $msg = Validation::login_error($_POST['email'], $_POST['password'])) {
    array_push($validation_errors, $msg);
}

if (count($validation_errors) > 0) {
    $_SESSION["messages"] = $validation_errors;
    header('Location: ../page/login');
    exit;
}

$stmt = "SELECT id FROM user WHERE email = ?";
$user_id = Database::run_statement(Database::get_connection(), $stmt, [$_POST['email']]);
$id = $user_id->fetch_assoc()['id'];

$_SESSION["id"] = $id;

header('Location: ../page/restaurants');
?>
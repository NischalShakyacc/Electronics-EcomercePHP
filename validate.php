<?php
function showErrors($errors)
{
    echo "<ul class='errorMsg'>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}

function validateSignup()
{
    $errors = array();
    if(!isset($_POST['fullname'])){
        $errors = "Please Enter a Name";
    }
    if (strlen($_POST['fullname']) <= 2) {
        $errors[] = "Name Should have atleast 2 characters.";
    }

    if ($_POST['age'] != strval(intval($_POST['age']))) {
        $errors[] = "Please Enter Valid Age.";
    }

    if (!in_array($_POST['country'], $GLOBALS['countries'])) {
        $errors[] = "Sorry Ineligible Country.";
    }

    if (strlen($_POST['username'] <= 5)) {
        $errors[] = "Username Length Should Be More Than 5 Characters.";
    }

    if (strlen($_POST['password'] <= 8)) {
        $errors[] = "Password Length Should Be More Than 8 Characters.";
    }
    if ($_POST['confirm'] != $_POST['password']) {
        $errors[] = "Password Doesn't Match.";
    }
    return $errors;
}
?>
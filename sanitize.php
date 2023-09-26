<?php
function sanitizeSignUp()
{
    $_POST['fullname'] = htmlentities($_POST['fullname']);
    $_POST['age'] = htmlentities($_POST['age']);
    
    $_POST['gender'] = htmlentities($_POST['gender']);
    $_POST['country'] = htmlentities($_POST['country']);
    $_POST['username'] = htmlentities($_POST['username']);
    $_POST['password'] = htmlentities($_POST['password']);
    $_POST['confrim'] = htmlentities($_POST['confirm']);
}

function saveFormInfo()
{
    $connection = mysqli_connect("localhost", "root", "", "electronics");
    if (!$connection) {
        die("Could not connect to database server" . mysqli_connect_error());
    }

    $query = "INSERT INTO customer (id, Name, Age, Gender, Country, Username, Password) values (' ', '$_POST[fullname]', $_POST[age], '$_POST[gender]', '$_POST[country]', '$_POST[username]', '$_POST[password]');";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query unsucsessful" . mysqli_error($connection));
    }
    mysqli_close($connection);
    echo "<h3 id='message'>Insert Successful</h3>";
    showForm();
}
?>
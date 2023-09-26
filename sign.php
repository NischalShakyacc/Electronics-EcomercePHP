<?php
session_start();
?>
<!-- Variables -->
<?php
include("./sanitize.php");
include("./validate.php");
$defaults = array(
    "fullname" => "John Doe",
    "age" => "50",
    "gender" => "Male",
    "country" => "Nepal",
    "username" => "Username",
    "password" => "123456789",
    "confirm" => "123456789"
);
$genders = array("Male", "Female", "Others");
$countries = array("India", "Pakistan", "Nepal", "Bangladesh", "Srilanka", "Bhutan", "Maldives");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Electronics</title>

    <!-- icons css -->
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">

    <!-- web css -->
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <?php
    include("./navbar.php");
    echo "
    <div id=\"bannerLogin\">
        <h1>Electronics</h1>
        <h2>Sign Up</h2>
    </div>";
    ?>

    <?php
    if (isset($_POST['__CHECK__'])) {
        sanitizeSignUp();
        $defaults = $_POST;
        if ($errors = validateSignup()) {
            echo "<div id=\"message\">";
            showErrors($errors);
            echo "</div>";
            showForm();
        } else {
            saveFormInfo();
        }
    } else {
        showForm();
    }
    ?>
    <?php
    include("./footer.php");
    ?>
</body>
</html>

<?php
function showform()
{
    global $defaults;
    global $genders;
    echo <<<__HTML1__
    <div class="box2" class="form">
        <form action="$_SERVER[PHP_SELF]" method="POST">
        <table width="600px">
            <tr class="form-control" >
                <td><label for="name">Full Name: </label></td>
                <td><input type="text" name="fullname"  value="$defaults[fullname]" class="form-login"></td>
            </tr>
            <tr class="form-control">
                <td><label for="age">Age: </label></td>
                <td><input type="text" name="age" id="age" value="$defaults[age]" class="form-login"></td>
            </tr>
            
            <tr class="form-control">
                <td><label for="gender">Gender: </label></td>
                <td>
__HTML1__;
    foreach ($genders as $gender) {
        echo "<input type='radio' name='gender' value='$gender' ";
        if ($gender == $defaults['gender']) {
            echo "checked";
        }
        echo " > $gender";
    }

    echo <<<__HTML2__
        </td>
        </tr>
        <tr class="form-control">
            <td>Country: </td>
            <td>
            <select name='country' class="form-login">
__HTML2__;
    foreach ($GLOBALS['countries'] as $country) {
        echo "<option value='$country'";
        if ($country == $defaults['country']) {
            echo "selected";
        }
        echo ">$country</option>";
    }
    echo <<<__HTML3__
            <tr class="form-control">
                <td>Username: </td>
                <td><input type='text' name='username' value="$defaults[username]" class="form-login"/>
            </tr>
            <tr class="form-control">
                <td>Password: </td>
                <td><input type='password' value="$defaults[password]" name='password' class="form-login"/>
            </tr>
            <tr class="form-control">
                <td>Confirm: </td>
                <td><input type='password' value="$defaults[confirm]" name='confirm' class="form-login"/>
            </tr>
            <input type="hidden" name="__CHECK__"/>
            
            <tr class="form-control buttons">
                <td>
                <button type="submit" name="submit" class="login-button">Submit</button>
                </td>
                <td>
                <button type="reset" name="reset" class="login-button">Reset</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
__HTML3__;
}
?>
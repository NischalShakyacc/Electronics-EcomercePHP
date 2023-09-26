<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Electronics</title>

    <!-- icons css -->
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">

    <!-- web css -->
    <link rel="stylesheet" href="./style1.css">
</head>

<body>
    <?php
    include("./navbar.php");
    ?>
    <main>
        <?php
        $message = "Enter Details";

        //for logout
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'logout') {
                unset($_SESSION['user']);
                setcookie('user', $username, time() - 1);
                setcookie('pass', $password, time() - 1);
                $message="Logout Successful";
                header("Location: login.php");
            }
        }

        //for login
        if (isset($_POST['__CHECK__'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $connect = mysqli_connect("localhost", "root", "", "electronics");
            if (!$connect) {
                echo "Connection Error" . mysqli_connect_error();
            }
            $query = "select * from customer where Username='$username' and Password='$password'";
            $result = mysqli_query($connect, $query);
            if (!$result) {
                die(mysqli_error($connect));
            }
            if (!mysqli_num_rows($result)) {
                $message = "Invalid Login Information";
                showLoginForm();
                echo "<div id=\"message\">$message</div>";
            } else 
            {
                if (isset($_POST['remember'])) {
                    setcookie('user', $username, time() + (60 * 60 * 1));
                    setcookie('pass', $password, time() + (60 * 60 * 1));
                }
                $_SESSION['user'] = mysqli_fetch_assoc($result);
                echo "<meta http-equiv='refresh' content=\"0\">";
                header("Location: profile.php");
            }
        } else {
            showLoginForm();
            echo "<div id=\"message\">$message</div>";
        }
        ?>
    </main>
    <?php
    include("./footer.php");
    ?>
</body>
</html>


<?php
function showLoginForm()
{
    echo <<<__HTML__
    <div id="bannerLogin">
        <h1>Electronics</h1>
        <h2>Log In</h2>
    </div>
    <div class="box">
        <form action="$_SERVER[PHP_SELF]" method="post">
        <table>
            <tr class="form-control">
                <td><label for="username">Username: </label></td>
                <td ><input type="text" name="username" id="username" class="form-login"
__HTML__;
    if (isset($_COOKIE['user'])) {
        echo "value =" . $_COOKIE['user'];
    }
    echo<<<__HTML1__
                ></td>
            </tr>
            <tr class="form-control">
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" class="form-login"
__HTML1__;
    if (isset($_COOKIE['pass'])) {
        echo "value =" . $_COOKIE['pass'];
    }
    echo <<<__HTML2__
></td>
            </tr>
            <tr class="form-control">
                <td colspan="2">
                <input type='checkbox' name='remember'/>Remember Me
                </td>
            </tr>
            <tr class="form-control">
                <td><button type="submit" class="login-button">Log In</button></td>
                <td><button class="login-button"><a href="sign.php">Sign Up</a></button></td>
            </tr>
            <tr>
                <td><input type="hidden" name="__CHECK__"></td>
            </tr>
        </table>
        </form>
    </div>
__HTML2__;
}
?>
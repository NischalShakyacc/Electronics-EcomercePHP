<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Electronics</title>

    <!-- icons css -->
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">

    <!-- styling -->
    <link rel="stylesheet" href="./style1.css">
</head>

<body>
    <?php
    include("./navbar.php");
    echo "
    <div id=\"bannerLogin\">
        <h1>Electronics</h1>
        <h2>User Profile</h2>
    </div>
    ";
    ?>

    <?php
    if (!isset($_SESSION['user'])) {
        echo ("<h2 id=\"message\">Please <button class='login-button'><a href='login.php'> Login </a></button>to continue.</h2>");
    } else {
        showProfile();
        echo "<div id='logout-button'><button class='login-button' ><a href='login.php?action=logout'>Logout</a> </button></div>";
    }
    ?>
    <?php
    include("./footer.php");
    ?>
    <!-- javascript -->
    <script src="./app.js"></script>
</body>
</html>

<?php
function showProfile()
{
    echo <<<__HTML__
    <div class="box2">
    <table>
        <tr>
            <td>Name:</td>
            <td>
__HTML__;
    echo $_SESSION['user']['Name'];
    echo "  </td>
        </tr>
    <tr>";
    echo "
        <tr>
            <td>Age:</td>
            <td>";
    echo $_SESSION['user']['Age'];
    echo "</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>";
    echo $_SESSION['user']['Gender'];
    echo "</td>
        </tr>
        <tr>
            <td>Country:</td>
            <td>";
    echo $_SESSION['user']['Country'];
    echo "</td>
        </tr>
        <tr>
            <td>Username:</td>
            <td>";
    echo $_SESSION['user']['Username'];
    echo "</td>
        </tr><tr><td colspan='2'>";
    if($_SESSION['user']['Apply']){
        echo "Your request has been sent for ".$_SESSION['user']['Apply']." Service.";
    }else{
        echo "Apply for a Service.";
    }
    echo "</td></tr><tr>";

    echo "<td>Purchase list</td><td>";

    $open = fopen('.\Shop\list' . $_SESSION['user']['id'] . '.txt', "a+") or die("error opening file");

    $list = fgets($open);
    $items = explode(",",$list);

    echo "<ul>";
    for($i=0;$i<count($items)-1;$i++){
        echo "<li>$items[$i]</li>";
    }
    echo "</ul></td>";
    echo "</tr>";

    echo"</table> </div>";
}
?>
<?php
//for appliying&
if (isset($_GET['action'])) {
    if(isset($_SESSION['user'])){
        if($_GET['action']=='apply'){
            $connect = mysqli_connect("localhost","root","","electronics");

            if(!$connect){
                die("Connection error").mysqli_connect_error();
            }
            //for office apply
            if($_GET['subject']==1){
                $query = "UPDATE customer SET Apply = 'Office' 
                where id = ".(intval($_SESSION['user']['id'])).";";
            }

            //for home apply
            if($_GET['subject']==2){
                $query = "UPDATE customer SET Apply = 'Home' 
                where id = ".(intval($_SESSION['user']['id'])).";";
            }

            //for gaming apply
            if($_GET['subject']==3){
                $query = "UPDATE customer SET Apply = 'Gaming' 
                where id = ".(intval($_SESSION['user']['id'])).";";
            }

            $result = mysqli_query($connect, $query);
            if(!$result){
                die("Query Error").mysqli_error($connect);
            }
            mysqli_close($connect);
        }
    }
}
?>
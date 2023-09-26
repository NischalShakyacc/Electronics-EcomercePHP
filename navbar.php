<!-- navbar -->
<span class="nav-btn" id="nav-btn">
    <i class="fas fa-bars"></i>
</span>
<nav class="navbar" id="navbar">
    <div class="navbar-header">
        <span class="nav-close" id="nav-close">
            <i class="fas fa-times"></i>
        </span>
    </div>

    <ul class="nav-items">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="profile.php" class="nav-link">Profile</a></li>
        <li><a href="products.php" class="nav-link">products</a></li>
        <?php
        if(isset($_SESSION['user'])){
            echo "<li><a href='login.php?action=logout' class='nav-link'>LogOut</a></li>";
            //header("Location: login.php");
        }else{
            echo "<li><a href='login.php' class='nav-link'>Login</a></li>";
        }
        ?>
        <li><a href="sign.php" class="nav-link">Sign Up</a></li>
    </ul>
</nav>
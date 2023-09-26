<?php
session_start();
$list_items = array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Electronics</title>

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
        <h2>Our Products</h2>
    </div>
    ";
    if (!isset($_SESSION['user'])) {
        echo ("<h2 id=\"message\">Please <button class='login-button'><a href='login.php'> Login </a></button>to purchase.</h2>");
    } else {
        echo "<div id='logout-button'><button class='purchase-button'><a href='products.php?action=buy'>Purchase</a> </button></div>";
    }
    ?>
    <!-- Product 1 laptops -->
    <section id="products" class="section-center">
        <!-- Details Section -->
        <article class="clearfix" id="product-info">
            <div class="section-title">
                <h3>Computer</h3>
                <h2>Laptops</h2>

                <p class="section-text">These portable and robust devices from us packs unrivaled performance, excellent security, and powerful experience. Our gadgets offer better thermal performance, making them exceedingly swifter than other gadgets in the market. The top-notch performance, clean-cut, and present-day chassis supplements the outstanding tastes of business professionals.</p>
            </div>
        </article>

        <!-- inventory section -->
        <article id="products" class="product-inventory section-center clearfix">
            <!-- first product -->
            <div class="product ">
                <img src="./Images/laptop1.webp" alt="laptop image" class="product-img " />
                <h4 class="product-title">MacBook</h4>
                <p class="section-text">
                    Our most popular laptop, MacBook Air is supercharged by M1 and M2 chips. Featuring FaceTime HD camera, Touch ID, and vibrant Retina display.
                </p>
                <h4 class="product-price"> Rs 250,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=1" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- second product -->
            <div class="product">
                <img src="./Images/laptop2.jpeg" alt="laptop image" class="product-img" />

                <h4 class="product-title">Dell </h4>
                <p class="section-text">
                    Smoothly and quickly watch videos, surf the web, or get some work done with the 11th Gen Intel Core i7 processor and dedicated Nvidia MX350 Graphics and 8gb RAM.
                </p>
                <h4 class="product-price"> Rs 150,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=2" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- third product -->
            <div class="product ">
                <img src="./Images/laptop3.jpeg" alt="laptop image" class="product-img" />
                <h4 class="product-title">Gaming Laptop</h4>
                <p class="section-text">
                    Whether you're gaming at your leisure or in the thick of battle, never miss any critical details thanks to smoother gameplay.
                </p>
                <h4 class="product-price"> Rs 300,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=3" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
        </article>
    </section>

    <!-- Product 2 Camera -->
    <section id="products" class="section-center">
        <!-- Details Section -->
        <article class="clearfix" id="product-info">
            <div class="section-title">
                <h3>Cinematography</h3>
                <h2>Camera</h2>
                <p class="section-text">Take photos and record videos with your camera. An easy-to-use Camera app for taking photos and recording videos. Our website is the best for photographers. Our range of cameras includes the most advanced DSLR cameras, reliable point-and shoot cameras, instant cameras that are loved by millennials, and action cameras for adventure-seekers.</p>
            </div>
        </article>

        <!-- inventory section -->
        <article id="products" class="product-inventory section-center clearfix">
            <!-- first product -->
            <div class="product ">
                <img src="./Images/camera1.jpeg" alt="camera image" class="product-img " />
                <h4 class="product-title">Camera</h4>
                <p class="section-text">
                    We provide the best camera along with a varrying range of lens for the best captures. Captured images may be reproduced later as part of the process of photography, digital imaging, or photographic printing.
                </p>
                <h4 class="product-price">Starting Rs 50,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=4" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- second product -->
            <div class="product">
                <img src="./Images/camera2.jpeg" alt="camera image" class="product-img" />

                <h4 class="product-title">Lens </h4>
                <p class="section-text">
                    A camera lens is an optical lens or assembly of lenses used in conjunction with a camera body and mechanism to make images of objects either on photographic film or on other media capable of storing an image chemically or electronically.
                </p>
                <h4 class="product-price">Starting Rs 40,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=5" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- third product -->
            <div class="product ">
                <img src="./Images/camera3.webp" alt="camera image" class="product-img" />
                <h4 class="product-title">Other Equipments</h4>
                <p class="section-text">
                    We also provide equipments such as Camera Bags, Memory Card, Charger, Batteries, Flash, Filters and Tripod.
                </p>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=6" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
        </article>
    </section>

    <!-- Product 3 Keyboard-->
    <section id="products" class="section-center">
        <!-- Details Section -->
        <article class="clearfix" id="product-info">
            <div class="section-title">
                <h3>Equipments</h3>
                <h2>Keyboard</h2>
                <p class="section-text">If you are looking for the ultimate typing experience or if you are looking to maximize your performance, you have come to the right place. Buy wireless keyboard, branded gaming keyboard, mechanical keyboard & wireless gaming mouse and many more from the best computer store in Nepal, online.</p>
            </div>
        </article>

        <!-- inventory section -->
        <article id="products" class="product-inventory section-center clearfix">
            <!-- first product -->
            <div class="product ">
                <img src="./Images/keyboard1.jpeg" alt="Keyboard image" class="product-img " />
                <h4 class="product-title">Wired</h4>
                <p class="section-text">
                    Wired keyboards are better if you don't want to deal with input lag, the risk of interference, or battery life.
                </p>
                <h4 class="product-price">Rs 3,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=7" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- second product -->
            <div class="product">
                <img src="./Images/keyboard.webp" alt="keyboard image" class="product-img" />

                <h4 class="product-title">Wireless </h4>
                <p class="section-text">
                    wireless keyboards are the ideal choice if you want to get rid of wires or want to use your keyboard from long range.
                </p>
                <h4 class="product-price">Rs 4,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=8" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- third product -->
            <div class="product ">
                <img src="./Images/keyboard3.webp" alt=" image" class="product-img" />
                <h4 class="product-title">Gaming </h4>
                <p class="section-text">
                    We start with a solid block of cast aluminum, carved on a CNC machine.Now you can get an ultra-premium keyboard without the ultra-premium price.
                </p>
                <h4 class="product-price">Rs 8,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=9" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
        </article>
    </section>

    <!-- Product 4 printer -->
    <section id="products" class="section-center">
        <!-- Details Section -->
        <article class="clearfix" id="product-info">
            <div class="section-title">
                <h3>Appliances</h3>
                <h2>Large Machines</h2>
                <p class="section-text">You can find everything you need to manage a home, including sleek TVs, energy-saving refrigerators and rapid-cooling ACs. The Dependable TV and Appliance Shop guarantees zero transit damage. We also offer a replacement guarantee in the event of any problems.Delivery and installation are done according to your schedule and an additional Warranty. You can rest assured that you will get value for your money. You can shop from the market leaders such as Samsung, LG, Whirlpool, Mi, Panasonic, Godrej, Sony, and Whirlpool.</p>
            </div>
        </article>

        <!-- inventory section -->
        <article id="products" class="product-inventory section-center clearfix">
            <!-- first product -->
            <div class="product">
                <img src="./Images/printer1.webp" alt="printer image" class="product-img " />
                <h4 class="product-title">Printer</h4>
                <p class="section-text">
                    Find a great selection of office printers designed to meet the needs of your business.
                </p>
                <h4 class="product-price">Rs 25,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=10" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- second product -->
            <div class="product">
                <img src="./Images/printer2.webp" alt="Photocopy image" class="product-img" />

                <h4 class="product-title">Photocopy </h4>
                <p class="section-text">
                    Shop Xerox Machine for Photocopy Needs at Home and Office.
                </p>
                <h4 class="product-price">Rs 60,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=11" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
            <!-- third product -->
            <div class="product ">
                <img src="./Images/printer3.jpeg" alt="typeWriter image" class="product-img" />
                <h4 class="product-title">Type Writer</h4>
                <p class="section-text">
                    Buy Various Ranging Best And High Quality Typewriter Product At Affordable Cost
                </p>
                <h4 class="product-price">Rs 45,000</h4>
                <button type="submit" name="submit" class="login-button"><a href="products.php?action=purchase&item=12" id="purchase"><i class="fas fa-cart-shopping"></i>List</a></button>
            </div>
        </article>
    </section>
    <!-- javascript -->
    <script src="./app.js"></script>
</body>

</html>

<?php
if (isset($_GET['action'])) {
    if (isset($_SESSION['user'])) {
        if ($_GET['action'] == 'purchase') {
            $open = fopen('.\Shop\list' . $_SESSION['user']['id'] . '.txt', "a+") or die("error opening file");

            if ($_GET['item'] == '1') {
                fputs($open, "Macbook,");
            }
            if ($_GET['item'] == '2') {
                fputs($open, "Dell,");
            }
            if ($_GET['item'] == '3') {
                fputs($open, "Gaming Laptop,");
            }
            if ($_GET['item'] == '4') {
                fputs($open, "Camera,");
            }
            if ($_GET['item'] == '5') {
                fputs($open, "Lens,");
            }
            if ($_GET['item'] == '6') {
                fputs($open, "Other,");
            }
            if ($_GET['item'] == '7') {
                fputs($open, "Wired Keyboard,");
            }
            if ($_GET['item'] == '8') {
                fputs($open, "Wireless Keyboard,");
            }
            if ($_GET['item'] == '9') {
                fputs($open, "Gaming Keyboard,");
            }
            if ($_GET['item'] == '10') {
                fputs($open, "Printer,");
            }
            if ($_GET['item'] == '11') {
                fputs($open, "Photocopy,");
            }
            if ($_GET['item'] == '12') {
                fputs($open, "Type Writer,");
            }
            fclose($open);
        }
    }
}
?>

<?php
//to purchase add in database

if (isset($_GET['action'])) {
    if (isset($_SESSION['user'])) {
        if ($_GET['action'] == 'buy') {
            $connect = mysqli_connect("localhost", "root", "", "electronics");
            if (!$connect) {
                die("Connection error") . mysqli_connect_error();
            }
            $open = fopen('.\Shop\list' . $_SESSION['user']['id'] . '.txt', "r") or die("error opening file");

            $items = fgets($open);

            $query = "UPDATE customer SET list = \"$items\"
                where id = " . (intval($_SESSION['user']['id'])) . ";";
            $result = mysqli_query($connect, $query);
            if (!$result) {
                die("Query Error") . mysqli_error($connect);
            }
            mysqli_close($connect);
        }
    }
}
?>
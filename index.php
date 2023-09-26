<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Electronics</title>

    <!-- icons css -->
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">

    <!-- web css -->
    <link rel="stylesheet" href="./style1.css">
</head>

<body>
    <?php
    include("./navbar.php");
    ?>
    <!-- header -->
    <header class="header">
        <div id="banner">
            <h2>Electronics</h2>
            <h1>Gear Up!!</h1>
            <a href="#explore" class="button" id="header_btn">Explore</a>
        </div>
    </header>
    <div class="content-divider"></div>

    <!-- skills Section -->
    <section class="skills clearfix" id="explore">
        <!-- First Section -->
        <article class="skill">
            <span class="skill-icon">
                <i class="fas fa-flag"></i>
            </span>
            <h2 class="skill-title">Made in Nepal</h2>
            <p class="skill-detail">
                We offer you warranted product that is made in Nepal. Choosing our products guarantees you that the services are timely whenever required.
            </p>
        </article>

        <!-- Second Section -->
        <article class="skill">
            <span class="skill-icon">
                <i class="fas fa-check"></i>
            </span>
            <h4 class="skill-title">Quality</h4>
            <p class="skill-detail">
                We offer premium products that will surpass your expectations.Starting from the date of purchase, we provide a 2-year warranty on all the products.
            </p>
        </article>

        <!-- Third Section -->
        <article class="skill">
            <span class="skill-icon">
                <i class="fas fa-dollar-sign"></i>
            </span>
            <h4 class="skill-title">Pricing</h4>
            <p class="skill-detail">
                Resolving the concern of the general public with the exorbitant price of electronic devices, we offer worthier gadgets at a much cheaper price.
            </p>
        </article>

        <!-- Fourth Section -->
        <article class="skill">
            <span class="skill-icon">
                <i class="fas fa-circle"></i>
            </span>
            <h4 class="skill-title">Versatile</h4>
            <p class="skill-detail">
                We provide products for all purposes as per your requirement. We have categorized our services to home, work and gaming.
            </p>
        </article>
    </section>

    <!-- About Us -->
    <section class="about" id="aboutus">
        <!-- image section -->
        <div class="section-center clearfix">
            <div id="picture-container">
                <article class="about-img">
                    <img src="./Images/about.webp" alt="Image" id="about-picture">
                </article>
            </div>

            <!-- details section -->
            <article class="section-detail">
                <div class="section-title">
                    <h3>About Us</h3>
                    <h2>Profile</h2>
                </div>

                <p class="section-text">Electronics is a new startup industry that is moving forward with a objective of fulfilling the wants of Nepalese people for premium electronic gadgets. We all know the tech scene is rapidly growing in Nepal. But the inflated cost and price protectionism policies have made electronic gadgets beyond the reach of the general public. Therefore, our primary focus is to build the first premium, and cost-efficient laptops in Nepal.
                </p>
                <a href="#products" class="button">Learn More</a>
            </article>
        </div>
    </section>
    <!-- end of about -->

    <!-- Products -->
    <section id="products" class="section-center">
        <!-- Details Section -->
        <article class="clearfix" id="product-info">
            <div class="section-title">
                <h3>Products</h3>
                <h2>Work Station</h2>

                <p class="section-text">These portable and robust devices from us packs unrivaled performance, excellent security, and powerful experience. Our gadgets offer better thermal performance, making them exceedingly swifter than other gadgets in the market. The top-notch performance, clean-cut, and present-day chassis supplements the outstanding tastes of business professionals.</p>
                <a href="products.php" class="button">See Inventory</a>
            </div>
        </article>

        <!-- inventory section -->
        <article id="products" class="product-inventory section-center clearfix">
            <!-- first product -->
            <div class="product ">
                <img src="./Images/product1.jpeg" alt=" image" class="product-img " />

                <h4 class="product-title">Computers</h4>
                <h4 class="product-price">
                    <ul>
                        <li>Notebook</li>
                        <li>Gaming Pc</li>
                        <li>Chromebook</li>
                        <li>MacBook</li>
                        <li>Ultrabook</li>
                    </ul>
                </h4>
            </div>
            <!-- second product -->
            <div class="product">
                <img src="./Images/product2.jpeg" alt=" image" class="product-img" />

                <h4 class="product-title">Camera</h4>
                <h4 class="product-price">
                    <ul>
                        <li>DSLR </li>
                        <li>Compact </li>
                        <li>360 </li>
                        <li>Smartphone </li>
                        <li>Camera Bags</li>
                    </ul>
                </h4>
            </div>
            <!-- third product -->
            <div class="product ">
                <img src="./Images/product3.webp" alt=" image" class="product-img" />
                <h4 class="product-title">Other Equipments</h4>
                <h4 class="product-price">
                    <ul>
                        <li>HeadPhones </li>
                        <li>Keyboard </li>
                        <li>Mouse </li>
                        <li>Smart watch</li>
                        <li>Monitors</li>
                    </ul>
                </h4>
            </div>
        </article>
    </section>
    <!-- Services -->
    <section id="services" class="clearfix">
        <!-- title section -->
        <div class="section-title" id="services-title">
            <h3>Explore</h3>
            <h2>Our Services</h2>
        </div>
        <!-- boxes for services -->
        <div class="section-center clearfix">
            <!-- card 1st -->
            <article class="service-card">
                <!-- img container -->
                <div class="service-img-container">
                    <!-- image -->
                    <img src="./Images/office.jpeg" alt="services image" class="service-img">
                    <!-- services icon -->
                    <span class="service-icon">
                        <i class="fas fa-building fa-fw"></i>
                    </span>
                </div>
                <!-- services info -->
                <div class="service-info">
                    <h4>Work</h4>
                    <p>We provide all kinds of office electronic supplies from microphones, headphones to laptops, printers and photocopy machines. Latest tech for the best of companies.</p>
                    <a href="profile.php?action=apply&subject=1" class="button">Apply</a>
                </div>
            </article>

            <!-- card 2nd -->
            <article class="service-card">
                <!-- img container -->
                <div class="service-img-container">
                    <!-- image -->
                    <img src="./Images/home.webp" alt="services image" class="service-img">
                    <!-- services icon -->
                    <span class="service-icon">
                        <i class="fas fa-home fa-fw"></i>
                    </span>
                </div>
                <!-- services info -->
                <div class="service-info">
                    <h4>Home</h4>
                    <p>For all those who work from home get any kind of gadgets from us at an affordable price and upgrade your setup. Up your game with our premium products that provide will you with the best efficiency . </p>
                    <a href="profile.php?action=apply&subject=2" class="button">Apply</a>
                </div>
            </article>

            <!-- card 3rd -->
            <article class="service-card">
                <!-- img container -->
                <div class="service-img-container">
                    <!-- image -->
                    <img src="./Images/gaming.jpeg" alt="services image" class="service-img">
                    <!-- services icon -->
                    <span class="service-icon">
                        <i class="fas fa-gamepad fa-fw"></i>
                    </span>
                </div>
                <!-- services info -->
                <div class="service-info">
                    <h4>Gaming</h4>
                    <p>Integrating all the latest features and better thermal execution, we offer splendid gaming devices. The extensive display, sturdy battery life, and up-to-the-mark processor will be a boon to all the gamers. </p>
                    <a href="profile.php?action=apply&subject=3" class="button">Apply</a>
                </div>
            </article>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="section-center">
            <!-- contact info -->
            <article class="contact-info clearfix section-center">
                <!-- contact item address-->
                <div class="contact-item ">
                    <h4 class="contact-title">
                        <span class="contact-icon">
                            <i class="fas fa-location-pin-lock"></i>
                        </span>
                        address
                    </h4>
                    <h4 class="contact-text">
                        6969 N Gwarko <br>
                        Lalitpur, Nepal 458894
                    </h4>
                </div>
                <!-- contact item mail-->
                <div class="contact-item">
                    <h4 class="contact-title">
                        <span class="contact-icon">
                            <i class="fas fa-envelope-circle-check"></i>
                        </span>
                        mail
                    </h4>
                    <h4 class="contact-text">
                        nischalshakyacc@gmail.com
                    </h4>
                </div>
                <!-- contact item other-->
                <div class="contact-item">
                    <h4 class="contact-title">
                        <span class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        telephone
                    </h4>
                    <h4 class="contact-text">
                        +977 9861884348 <br>
                        01-5512498
                    </h4>
                </div>
            </article>
            <!-- contact form -->
            <article class="form">
                <h3>Contact Us</h3>
                <form action="mailto:nischalshakyacc@gmail.com" enctype="text/plain" method="POST">
                    <div class="form-group">
                        <!-- inputs -->
                        <input type="text" name="name" placeholder="Jhon Doe" class="form-control">
                        <input type="email" name="email" class="form-control" placeholder="example@mail.com">
                        <textarea name="message" placeholder="Message" class="form-control" rows="5"></textarea>
                    </div>
                    <!-- button -->
                    <button type="submit" class="submit-button button">Submit</button>
                </form>
            </article>
        </div>
    </section>
    <!-- footer -->
    <?php
    include("./footer.php");
    ?>
</body>

</html>
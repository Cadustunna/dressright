<?php
$hideElements = isset($_GET['controller']) && $_GET['controller'] == 'users' && 
               (isset($_GET['action']) && ($_GET['action'] == 'login' || $_GET['action'] == 'register'));
?>

<body>
    <!-- main-content -->
    <section class="main-content" id="home">

        <?php if (!$hideElements) : ?>
        <!-- header -->
        <header>
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav>
                    <div class="logo-w3ls" id="logo-w3ls">
                        <h1>
                            <a href="index.php"><span>D</span>ressright</a>
                        </h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-4 mr-3 active"><a href="index.php?controller=home&action=index">Home</a></li>
                        <li class="mr-lg-4 mr-3">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-sort-desc" aria-hidden="true"></span> </label>
                            <a href="#">Gallery <span class="fa fa-sort-desc" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="index.php?controller=home&action=clothings">Clothings</a></li>
                                <li><a href="gallery.php">Jewelries and Accessories</a></li>
                            </ul>
                        </li>
                        <li class="mr-lg-4 mr-3"><a href="index.php?controller=home&action=about">About</a></li>                        
                        <li class="mr-lg-4 mr-3"><a href="index.php?controller=home&action=contact">Contact</a></li>
                        <li class="mr-lg-4 mr-3"><a href="index.php?controller=users&action=login">Login</a></li>
                        <li class="mr-lg-4 mr-3"><a href="index.php?controller=users&action=register">Signup</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <?php endif; ?>

        <!-- Your page content goes here -->

    </section>
</body>

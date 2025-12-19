<?php
$hideElements = isset($_GET['controller']) && $_GET['controller'] == 'users' && 
               (isset($_GET['action']) && ($_GET['action'] == 'login' || $_GET['action'] == 'register'));
?>

<?php if (!$hideElements) : ?>
    <!--/footer-->
    <footer class="footer">
        <div class="container-fluid p-lg-5 p-md-3">

            <div class="row py-sm-4 py-3">
                <div class="col-lg-4 footer-end-grid">
                    <h2>
                        <a href="index.php"><span>D</span>ressright</a>
                    </h2>
                    <p class="my-4 text-justify">Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio.</p>
                    <h3>Follow Us</h3>
                    <ul class="social-icons text-center d-flex">
                        <li>
                            <a href="#">
                               Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              Google +
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Dribble
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4">
                    <h3>Useful Link</h3>
                    <ul class="list-footer-w3layouts">
                        <li>
                            <a href="index.php" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="about.php" class="nav-link">
                               About
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="blog.php" class="nav-link">
                               Blog Posts
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="gallery.php" class="nav-link">
                              Gallery
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2  mt-sm-5">
                    <ul class="list-footer-w3layouts">
                        <li>
                            <a href="#login" class="nav-link">
                              Login
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="#register" class="nav-link">
                               Register
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="#" class="nav-link">
                                License
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="subscribe col-lg-4">
                    <h3>Subscribe Now</h3>
                    <p class="my-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.</p>
                    <form action="#" method="post" class="newsletter">
                        <input class="email" type="email" placeholder="Your email..." required="">
                        <input class="form-control" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between pt-lg-3  footer-bottom-cpy">
                <div class="copy-right">
                    <p>© 2025 Dressright. All rights reserved | Design by <span>Felixson Adumeta</span>

                    </p>
                </div>
                <div class="social-content pb-md-0 pb-4">
                    <ul class="social-icons text-center d-flex">
                        <li class="ml-lg-5">
                            <a href="#" class="reg-in">
                                Privacy and Policy
                            </a>
                        </li>
                        <li>
                            <a href="#register" class="nav-link reg-in two">
                               Register
                            </a>
                        </li>

                    </ul>


                </div>
            </div>
            <div class="text-right mt-3">
                <a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </footer>
    <!-- popup-login-->
    <div id="login" class="pop-overlay animate">
        <div class="popup">
            <div class="login px-4 mx-auto mw-100">
                <h5 class="text-left mb-4">Login Now</h5>
                <form action="#" method="post">
                    <div class="form-group">
                        <label class="mb-2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                    <p class="text-left pb-4">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                    </p>
                </form>
            </div>


            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!--// popup-login-->
    <!-- popup-login-->
    <div id="register" class="pop-overlay animate">
        <div class="popup">
            <div class="login px-4 mx-auto mw-100">
                <h5 class="text-left mb-4">Register Now</h5>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>First name</label>

                        <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                    </div>

                    <div class="form-group">
                        <label class="mb-2">Password</label>
                        <input type="password" class="form-control" id="password1" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="password2" placeholder="" required="">
                    </div>

                    <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                    <p class="text-left pb-4">
                        <a href="#">By clicking Register, I agree to your terms</a>
                    </p>
                </form>

            </div>

            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!--// popup-login-->
    <!--//footer-->

</body>

</html>
<?php endif; ?>
<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row" style="padding-bottom: 40px;">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="index.php"> <span>Shop star.</span>
                        </a>
                    </div>
                    <ul>
                        <li>+91 9844321762</li>
                        <li>shopstar@gmail.com</li>
                        <li>Yeshwantpura Bengaluru</li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/explore" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="index.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget" style="display: <?php if ($active == 'Register' || $active == 'Login') {
                                                                echo 'none';
                                                            };  ?>;">
                    <h5>Account</h5>
                    <ul>

                        <?php if (!($_SESSION['customer_email'] == 'unset')) {
                            echo "<li><a href='account.php?orders'>My Account</a></li>";
                        } ?>
                        <li><a href="
                        <?php if (!($_SESSION['customer_email'] == 'unset')) {
                            echo "shopping-cart.php";
                        } else {
                            echo "login.php";
                        }
                         ?>">Shopping Cart</a></li>

                        <li><a href="
                        <?php if (!($_SESSION['customer_email'] == 'unset')) {
                            echo "check-out.php";
                        } else {
                            echo "login.php";
                        }
                         ?>
                        ">Check Out</a></li>

                    </ul>
                </div>
            </div>
            <?php
if(isset($_POST['submit1'])) {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        // Save email to database or subscribe to email service provider here
        // ...
        
        // Send confirmation email to user
        $to = $email;
        $subject = "Subscription Confirmation";
        $message = "Thank you for subscribing to our service!";
        $headers = "From: Shop star <shetty2anushrees@gmail.com>\r\n";
        $headers .= "Reply-To: shetty2anushrees@gmail.com\r\n";
        $headers .= "Content-Type: text/html\r\n";
         $headers .= "SMTPSecure: tls\r\n";
//        mail($to, $subject, $message, $headers);
        // Set SMTP settings dynamically
//        ini_set("SMTP", "smtp.gmail.com");
//        ini_set("smtp_port", "587");
//        ini_set("SMTP","ssl://smtp.gmail.com");
//ini_set("smtp_port","465");
        // Send email using PHP mail function
        if(mail($to, $subject, $message, $headers)) {
           echo '<p style="color: white; font-size: 18px;">Thank you for subscribing!</p>';
            // echo "Thank you for subscribing!";
        } else {
            echo "Error sending email. Please try again later.";
        }
    }
}
?>


            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Keep in touch</h5>
                    <p>Get E-mail updates about our latest special offers.</p>
                    <!--<form action="https://formsubmit.co/shetty2anushrees@gmail.com" class="subscribe-form" method="POST">-->
                    <form action="index.php" class="subscribe-form" method="POST">
                        <input type="text" placeholder="Enter Your Mail" name="email">
                        <button name="submit1">Subscribe</button>
                        <!--<button type="button" name="submit">Subscribe</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js" integrity="sha512-8vfyGnaOX2EeMypNMptU+MwwK206Jk1I/tMQV4NkhOz+W8glENoMhGyU6n/6VgQUhQcJH8NqQgHhMtZjJJBv3A==" crossorigin="anonymous"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

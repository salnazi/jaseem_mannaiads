<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once("head.php");
    ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php
        include_once("top_bar.php");
    ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php
        include_once("top_menu.php");
    ?>
    <!-- Navbar End -->

   <!-- Contact Start -->
   <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31098.390932454917!2d80.08607390469459!3d13.016630200460845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a528aa840d4e533%3A0x1121aa70163ed0fe!2sKanda%20Evergreen%20Sports%20Academy!5e0!3m2!1sen!2sin!4v1736773348389!5m2!1sen!2sin"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i> JAF PHP Marketplace </p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>Tamilnadu, India.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php
        include_once("footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top" style='background:var(--green);'><i class="fa fa-angle-double-up" ></i></a>


    <!-- JavaScript Libraries -->
    <?php
        include("footer_js.php");
    ?>
</body>

</html>
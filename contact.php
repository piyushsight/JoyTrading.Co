<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Piyush Aggarwal">

    <title>Contact - Joy Trading</title>

	<?php include_once 'header.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.400063109869!2d77.20210771454178!3d28.64773759014455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd67b72d849d%3A0x971f27e0a90b81f3!2sMicro+Max+Clean+Air+Equipments!5e0!3m2!1sen!2sin!4v1448798456010"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    <b>Joy Trading Co.<br />
					
					C-65, Flatted Factories Complex,<br />
					Jhandewalan, Near Jahndewalan Mandir<br />
					New Delhi - 110055, Delhi, India</b>
                </p>
                <p>
                    <i class="fa fa-phone"></i> <abbr title="Phone">M</abbr>: +(91)-9811452621<br />
                    <i class="fa fa-phone"></i> <abbr title="Phone">M</abbr>: +(91)-9560114933<br />
                    <i class="fa fa-phone"></i> <abbr title="Phone">M</abbr>: +(91)-7503622630</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:joytrading2004@yahoo.com">joytrading2004@yahoo.com</a>
                </p><p>info@joytrading.in</p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Saturday: 9:00 AM to 7:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Business Enquiry Form</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Describe our Requirement in Details Like:
- Products You Are Looking For
- Features / Specifications
- Application / Usage
- Minimum Order Quantity, etc,
to get Best QUOTES."></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

	<?php include_once 'footer.php' ?>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>

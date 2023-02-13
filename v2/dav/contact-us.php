<?php
    include('path.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us :: Belwet Mind Clinic</title>
    <?php include(ROOT_PATH . "/includes/head.php"); ?>
</head>

<body>
    <div class="content-wrapper">
        <!-- header section starts here -->
        <?php 
            $page = "contact";
            include(ROOT_PATH . "/includes/all-header.php"); 
        ?>
        <!-- header section ends here -->

        <!-- Heading starts  -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-8 pb-8 pt-md-8 pb-md-8 text-center">
                <div class="row">
                    <div class="col-xl-5 mx-auto mb-6">
                        <h1 class="display-1 mb-3">Contact Us</h1>
                        <p class="lead mb-0">It's a delight to have you here!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Heading ends  -->

        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col mt-n19 mb-16">
                        <div class="card shadow-lg">
                            <div class="row gx-0">
                                <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block"
                                    data-image-src="src/img/photos/tm1.jpg">
                                </div>
                                <!--/column -->
                                <div class="col-lg-6">
                                    <div class="p-10 p-md-11 p-lg-13">
                                        <h2 class="display-4 mb-3">Let’s Talk</h2>
                                        <p class="lead fs-lg">Let's make something great together. We are trusted by
                                            over 5000+ clients. Join them by using our services and grow your business.
                                        </p>
                                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
                                            vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac
                                            cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                                            amet risus.</p>
                                        <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                                    </div>
                                    <!--/div -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="row gy-10 gx-lg-8 gx-xl-12">
                            <div class="col-lg-8">
                                <form class="contact-form" method="post" action="src/php/contact.php">
                                    <div class="messages"></div>
                                    <div class="controls">
                                        <div class="row gx-4">
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                        placeholder="Jane" required="required"
                                                        data-error="First Name is required.">
                                                    <label for="form_name">First Name *</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- /column -->
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="form_lastname" type="text" name="surname"
                                                        class="form-control" placeholder="Doe" required="required"
                                                        data-error="Last Name is required.">
                                                    <label for="form_lastname">Last Name *</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- /column -->
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control" placeholder="jane.doe@example.com"
                                                        required="required" data-error="Valid email is required.">
                                                    <label for="form_email">Email *</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- /column -->
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="form_phone" type="tel" name="phone" class="form-control"
                                                        placeholder="Your phone number">
                                                    <label for="form_phone">Phone</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- /column -->
                                            <div class="col-12">
                                                <div class="form-label-group mb-4">
                                                    <textarea id="form_message" name="message" class="form-control"
                                                        placeholder="Your message" rows="5" required="required"
                                                        data-error="Message is required."></textarea>
                                                    <label for="form_message">Message *</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- /column -->
                                            <div class="col-12">
                                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                                    value="Send message">
                                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                            </div>
                                            <!-- /column -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.controls -->
                                </form>
                                <!-- /form -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-4">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-location-pin-alt"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Address</h5>
                                        <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <p>00 (123) 456 78 90 <br class="d-none d-md-block" />00 (987) 654 32 10</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-envelope"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0"><a href="mailto:sandbox@email.com"
                                                class="link-body">sandbox@email.com</a></p>
                                        <p><a href="mailto:help@sandbox.com" class="link-body">help@sandbox.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>




        <!-- Mission and vission starts  here  -->
        <section class="wrapper bg-light">
            <div class="container py-5 py-md-5">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-top">
                    <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-1">Our Mission & Vision</h2>
                    <div class="col-lg-6">
                        <h3 class="display-5">Mission</h3>
                        <p>A growing organization aimed at bringing effective and
                            outstanding quality services for people of all ages and cultures
                            to manage and live above life stresses and mental health
                            challenges. As they maximize their potential for complete
                            well-being and not just the absence of a challenge or
                            psychological disorder.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="display-5">Vision</h3>
                        <p>To be the most preferred clinic for convenient
                            mental health advocacy, training, therapy and
                            consultation services in Africa and beyond.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mission and vision ends here  -->

        <!-- SERVICE APPROACH STARTS HERE -->
        <section class="wrapper bg-light upper-end">
            <div class="container pb-14 pb-md-16">
                <!--/.row -->
                <h3 class="display-5 pb-5 pb-md-4">Our Service Approach</h3>
                <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
                    <div class="col-md-6 col-lg-3">
                        <span class="icon btn btn-circle btn-lg btn-danger disabled mb-4">
                            <span class="number">a</span>
                        </span>
                        <h4 class="mb-1">Evidence Focused</h4>
                        <p>We are attentive to our client's improvement and feedback.</p>

                        <div class="mt-12 mt-md-12">
                            <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4">
                                <span class="number">b</span>
                            </span>
                            <h4 class="mb-1">Convenience</h4>
                            <p>Almost everything ranging from shopping to business is conveniently delivered these days.
                                Why not therapy, coaching, training, and other mental health services?</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <span class="icon btn btn-circle btn-lg btn-warning disabled mb-4">
                            <span class="number">c</span>
                        </span>
                        <h4 class="mb-1">Personalized Profiling</h4>
                        <p>We understand that therapy without clinical and psychological assessment is short-lived.
                            Therefore, in between mind clinics, a psychological assessment precedes our services.</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <span class="icon btn btn-circle btn-lg btn-dark disabled mb-4">
                            <span class="number">d</span>
                        </span>
                        <h4 class="mb-1">Relaxing and Friendly</h4>
                        <p>We believe that clients live to regret and not heal when the service offered is rigid and
                            guilt-trapped. Being too professional without a touch of friendliness is not therapy. We
                            believe everyone deserves to be heard and to also live their best life. There is a plan for
                            everyone.</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <span class="icon btn btn-circle btn-lg btn-purple disabled mb-4">
                            <span class="number">e</span>
                        </span>
                        <h4 class="mb-1">Team Work</h4>
                        <p>Individually, we do not know and teamwork makes a dream work. So each team member sticks to
                            their areas of specialization.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICE APPROACH ENDS HERE -->
    </div>
    <?php 
            include(ROOT_PATH . "/includes/footer.php"); 
        ?>
    <!-- Footer ends here -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
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
                                    data-image-src="img/principles.jpg">
                                </div>
                                <!--/column -->
                                <div class="col-lg-6">
                                    <div class="p-10 p-md-11 p-lg-13">
                                        <h2 class="display-4 mb-3">Our Principles</h2>
                                        <p><span class="lead fs-md bold"><strong>Enlighten:</strong> </span>
                                            We provide updated and valuable
                                            information on mental health, psychological
                                            well-being, and how to overcome your weaknesses and maximize your strength.
                                        </p>
                                        <p><span class="lead fs-md bold"><strong>Communicate:</strong> </span>
                                            Without honest communication we can not know your request nor can we proffer
                                            the right and long-lasting solutions. We understand the importance of verbal
                                            (7%), tone (38%) and body language (55%).
                                        </p>
                                        <p><span class="lead fs-md bold"><strong>Connect:</strong> </span>
                                            We connect you to a verified specialist based on your unique profile and
                                            request.
                                        </p>
                                        <p><span class="lead fs-md bold"><strong>Explore:</strong> </span>
                                            We explore by researching various mental health topics as it concerns
                                            different races, cultures and age groups.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-7 pb-md-8">
                    <div class="container">
                        <p class=" mx-12 mx-md-14"> Temporarily, physical services are provided only in Kaduna. There
                            is
                            a provision for
                            physical
                            services in other locations to clients who make a request and also meet the terms and
                            conditions.
                        </p>
                        <p class=" mx-12 mx-md-14">Got questions, comments, or feedback? And If you are trying to
                            schedule an appointment you
                            can do
                            so by directly browsing through our service list. But if you don’t find what you are looking
                            for, you can tell us by filling out the contact form. We are here for you.
                        </p>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="row gy-10 gx-lg-8 gx-xl-12">
                            <div class="col-lg-8">
                                <form id="contactForm" class="contact-form" method="post">
                                    <div class="messages"></div>
                                    <div class="controls">
                                        <div class="row gx-4">
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                        placeholder="Full name" required="required">
                                                    <label for="form_name">Name *</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="gender" type="text" name="gender" class="form-control"
                                                        placeholder="Gender" required="required">
                                                    <label for="gender">Gender*</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="email" type="text" name="email" class="form-control"
                                                        placeholder="Email" required="required">
                                                    <label for="email">Email*</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="gender" type="text" name="gender" class="form-control"
                                                        placeholder="Gender" required="required">
                                                    <label for="gender">Date of birth*</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-label-group mb-4">
                                                    <input id="gender" type="text" name="gender" class="form-control"
                                                        placeholder="Gender" required="required">
                                                    <label for="gender">Profession*</label>
                                                </div>
                                            </div>
                                            
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
                                                    <label for="form_message">Reason for request *</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- /column -->
                                            <div class="col-12">
                                                <input id="contactFormbtn"  type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
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
                                                class="uil uil-phone-volume"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone</h5>
                                        <p>+234 815 730 2663 (WhatsApp only)
                                            <br class="d-none d-md-block" /> +234 701 573 6171(Calls only)
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i
                                                class="uil uil-envelope"></i> </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class=""><a href="mailto:belwetmindclinic@gmail.com"
                                                class="link-body">belwetmindclinic@gmail.com</a></p>
                                    </div>
                                </div>

                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-primary fs-28 me-4 mt-n1">
                                            <i class="uil uil-clock"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Working Hours</h5>
                                        <p>Monday to Friday – 11:00 am to 10:00 pm <br>
                                            Saturday to Sunday – Emergencies only with an extra fee of N5000.
                                            <stong>Temporarily, physical services are provided only in Kaduna. 
                                            There is a provision for physical services in other locations to clients 
                                            who make a request and also meet the terms and conditions.</strong>
                                        </p>
                                        
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
    <script>
        $(function(){
            $("#contactFormbtn").click(function(event){
                if ($("#contactForm")[0].checkValidity()){
                    event.preventDefault()
                    $("#contactFormbtn").val("Please wait") 
                }
                
                
                
            })
        })
    </script>
</body>

</html>
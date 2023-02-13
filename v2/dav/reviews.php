<?php
    include('path.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belwet Mind Clinic</title>
    <?php include(ROOT_PATH . "/includes/head.php"); ?>
</head>

<body>
    <div class="content-wrapper">
        <!-- header section starts here -->
        <?php 
            $page = "reviews";
            include(ROOT_PATH . "/includes/all-header.php"); 
        ?>
        <!-- header section ends here -->

        <!-- Heading starts  -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-8 pb-8 pt-md-8 pb-md-8 text-center">
                <div class="row">
                    <div class="col-xl-5 mx-auto mb-6">
                        <h1 class="display-1 mb-3">Reviews</h1>
                        <p class="lead mb-0">... become your best self and prevent a relapse</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Heading ends  -->


        <!-- Reviews starts here  -->

        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Happy Customers</h2>
                        <h3 class="display-4 mb-10 px-xl-10 px-xxl-15">CLIENT'S REVIEW AND REPORT.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="grid">
                    <div class="row isotope gy-6">
                        <div class="item col-md-6 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="icon mb-0">
                                        <p>“Why can you say about the service of therapist
                                            Abigail?.......,......,...............Response: I was having a difficult
                                            time taking some decisions. It was really weighing me down so I needed to
                                            talk to a professional about it. I had been searching for one for a long
                                            time but couldn't find someone I had no doubt about until I was referred to
                                            therapist Abigail. I enjoyed speaking with her. She's calm and listens
                                            actively. Her advice are also very helpful if followed. She helped me see
                                            the challenge I had in a different light and after our discussion, I feel
                                            much better than I was. Before consulting therapist Abigail my mental health
                                            status was 3, now my mental health status is 6. I booked for one session.
                                            ,.............,................................... My advice to those who
                                            will read my feedback is they should not hold back, have no fear because
                                            therapist Abigail is helping me and can help you through every psychological
                                            disorder just as she promises. I strongly recommend therapist Abigail.

                                            ”</p>
                                        <div class="blockquote-details">
                                            <div class="">
                                                <h5 class="mb-1">CE - </h5>
                                                <p class="mb-0 text-warning">Booked for 1 online therapy session from
                                                    Lagos</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.grid-view -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Reviews ends here  -->




        <!-- Footer starts here -->
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
<?php
    include('path.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coaching :: Belwet Mind Clinic</title>
    <?php include(ROOT_PATH . "/includes/head.php"); ?>
</head>

<body>
    <div class="content-wrapper">
        <!-- header section starts here -->
        <?php 
            $page = "services";
            include(ROOT_PATH . "/includes/all-header.php"); 
        ?>
        <!-- header section ends here -->

        <!-- Heading starts  -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-8 pb-8 pt-md-8 pb-md-8 text-center">
                <div class="row">
                    <div class="col-xl-5 mx-auto mb-6">
                        <h1 class="display-1 mb-3">Coaching</h1>
                        <p class="lead mb-0">... become your best self and prevent a relapse</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Heading ends  -->




        <section class="wrapper bg-gray">
            <div class="container pt-5 pb-1 pt-md-8 pb-md-0">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-16 align-items-top">
                    <div class="col-lg-5">
                        <figure><img class="w-auto" src="img/Services.avif" alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-7">
                        <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Training, Coaching, Mentorship and
                            Executive services</h2>
                        <div class="mb-7">
                            <h4 class="mb-1"> Our training, coaching, mentorship and executive services are as follows:
                            </h4>
                            <p>Stay ahead as you soar in life and profession by learning new skills, optimistic
                                behaviour, or acquiring knowledge.
                                Our services are offered individually or as a group; online or offline.
                                Our mental health therapist, neuro-linguistic programmer (nlp master), leadership and
                                business consultant has got you covered.</p>


                            <ul class="icon-list bullet-bg bullet-soft-primary mt-4 mb-4">
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Managing breakups and preparing for a healthy relationship.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span>Clarity on your vision, purpose, ambition and values</strong></span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Overcoming limiting beliefs.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Building more self-confidence, self-worth and self-image.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span>Managing difficult people.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Strengthening leadership capabilities.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Developing new strategies for problem-solving.
                                    </span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Dealing with pain and allergies.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Creating more freedom and choice over your mindset.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Excellently proffer solutions to mental health challenges.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Creating a mind-body connection.</span>
                                </li>
                                <li>
                                    <i class="uil uil-check"></i>
                                    <span> Succinctly explain the role of psychology in physical illness.
                                        (How an individual will have symptoms of high blood pressure whereas the cause
                                        might be depression.
                                        And when blood pressure medications are prescribed by doctors and used by the
                                        patient(s) instead of healing,
                                        the medications can induce other health challenges in the body).
                                        A lot of people now exhibit symptoms that mimic schizophrenia, other disorders
                                        and withdrawal symptoms because psychological factors were not ruled out when
                                        they visited the hospital with health complaints.
                                        Therefore, they were wrongly diagnosed and treated.
                                    </span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primarycolorbg rounded-pill">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
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
</body>

</html>
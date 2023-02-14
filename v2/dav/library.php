<?php
    include('path.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library :: Belwet Mind Clinic</title>
    <?php include(ROOT_PATH . "/includes/head.php"); ?>
</head>

<body>
    <div class="content-wrapper">
        <!-- header section starts here -->
        <?php 
            $page = "library";
            include(ROOT_PATH . "/includes/all-header.php"); 
        ?>
        <!-- header section ends here -->

        <!-- Heading starts  -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-8 pb-8 pt-md-8 pb-md-8 text-center">
                <div class="row">
                    <div class="col-xl-5 mx-auto mb-6">
                        <h1 class="display-1 mb-3">Library</h1>
                        <p class="lead mb-0">It's a delight to have you here!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Heading ends  -->

        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Our Library</h2>
                        <h3 class="display-4 mb-10 px-xl-10 px-xxl-15">Download our library <a target="_balnk" href="BELWET LIBRARY_0.pdf">here</a> .</h3>
                    </div>
                    <!-- /column -->
                </div>                
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
</body>

</html>
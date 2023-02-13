<header class="wrapper bg-soft-primary">
                <nav class="navbar center-nav transparent navbar-expand-lg navbar-light">
                    <div class="container flex-lg-row flex-nowrap align-items-center">
                        <div class="navbar-brand w-100">
                                <a href="index">
                                    <img class="logo-dark" height="50px" src="img/logo.png" alt="" />
                                    <img class="logo-light" height="50px" src="img/logo.png" alt="" />
                                </a>
                        </div>
                        <div class="navbar-collapse offcanvas-nav">
                            <div class="offcanvas-header d-lg-none d-xl-none">                                
                                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                            </div>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?> " href="index">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == 'about') { echo 'active'; } ?>" href="about-us">About Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link <?php if ($page == 'services') { echo 'active'; } ?> dropdown-toggle" href="#!">Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="therapy">Therapy</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="coaching">Coaching</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == 'reviews') { echo 'active'; } ?>" href="reviews">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == 'library') { echo 'active'; } ?>" href="library">Library</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == 'contact') { echo 'active'; } ?>" href="contact-us">Contact Us</a>
                                </li>
                            
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other w-100 d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                                <li class="nav-item d-lg-none">
                                    <div class="navbar-hamburger">
                                        <button class="hamburger animate plain" data-toggle="offcanvas-nav">
                                            <span></span>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.container -->
                </nav>
                <!-- /.navbar -->
            </header>
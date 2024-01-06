<!-- Topbar Start -->
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small><i class="fa fa-phone-alt mr-2"></i><a href="tel:<?= data('contact') ?>"><?= data('contact') ?></a></small>
                <!-- <small class="px-3">|</small> -->
                <!-- <small><i class="fa fa-envelope mr-2"></i><a href="mailto:< ?= data('email') ?>">< ?= data('email') ?></a></small> -->
            </div>
        </div>
        <div class="col-lg-6 text-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-primary px-2" href="<?= data('facebook') ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- <a class="text-primary px-2" href="< ?=data('twitter')?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="< ?=data('linkedin')?>">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="< ?=data('instagram')?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="< ?=data('youtube')?>">
                        <i class="fab fa-youtube"></i> -->
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5 flex-column">
        <a href="<?= the_site_url() ?>" class="navbar-brand ml-lg-3 d-flex position-relative">
            <img style="height: 50px; width: auto;" <?= img('favicon.jpg') ?>>
            <h1 class="m-0 text-primary" style="font-size: 38px;;"><span class="text-dark"><?= data('project') ?></span></h1>
            <span style="position: absolute; bottom: -5px; right: 0; font-size: 12.5px;"><?= data('tagline') ?></span>
        </a>
        <button type="button" class="navbar-toggler mt-2" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <!-- <a href="< ?=the_site_url()?>" data-menu="landing" class="nav-item nav-link active">Maison</a> -->
                <!-- <a href="< ?=the_site_url()?>about" data-menu="about" class="nav-item nav-link">À propos</a> -->
                <!-- <a href="< ?=the_site_url()?>services" data-menu="services" class="nav-item nav-link">La Carte</a> -->
                <!-- <a href="< ?=the_site_url()?>pricing" data-menu="pricing" class="nav-item nav-link">Plan tarifaire</a> -->
                <!-- <a href="< ?=the_site_url()?>sessions" data-menu="pricing" class="nav-item nav-link">Séance</a> -->
                <!-- <div class="nav-item dropdown">
                        <a href="< ?=the_site_url()?>test" class="nav-link dropdown-toggle" data-toggle="dropdown">test</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="< ?=the_site_url()?>test/test1" class="dropdown-item">test1</a>
                            <a href="opening.html" class="dropdown-item">Open Hours</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div> -->
                <!-- <a href="< ?=the_site_url()?>contact" data-menu="contact" class="nav-item nav-link">Contact</a> -->

                <?php

                foreach (the_menus() as $item => $link) {
                    $data_link = $link;
                    if($data_link == ''){
                        $data_link = 'landing';
                    }
                    if($p == $data_link){
                        echo '<a class="nav-item nav-link active font-15px" href="' . the_site_url() . $link . '">' . $item . '</a>';
                    } else {
                        echo '<a class="nav-item nav-link font-15px" href="' . the_site_url() . $link . '">' . $item . '</a>';
                    }
                }

                ?>
            </div>
            <!-- <a href="#" class="btn btn-primary d-none d-lg-block">Reserve Maintenant</a> -->
        </div>
    </nav>
</div>
<!-- Navbar End -->
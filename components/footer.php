<div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 mb-5">
                <a href="." class="navbar-brand">
                    <h1 class="mb-3 text-white" style="font-size: 38px;"><span class="text-primary"><?=data('project')?></span></h1>
                </a>
                <p class="text-justify">Spécialisé en Photobiomodulation, il fait partie des premiers centres en France proposant cette technique de soin, utilisant les propriétés naturelles et régénérantes de la lumière.</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i><a href="https://www.google.com/maps/place/8+Rue+Jean+le+Coz,+92500+Rueil-Malmaison,+France/@48.8760287,2.1774395,17z/data=!3m1!4b1!4m6!3m5!1s0x47e6635cf3ba8d85:0xb2b38fb295876c5c!8m2!3d48.8760252!4d2.1800144!16s%2Fg%2F11bw3y_b79?entry=ttu" target="_blank"><?=data('address')?></a></p>
                <p><i class="fa fa-phone-alt mr-2"></i><a href="tel:<?=data('contact')?>"><?=data('contact')?></a></p>
                <p style="font-size: 25px;">Mentions légales</p>
                <p>APTI+ PARTNERS SAS au capital de 1500euro <br>
                    64 bis rue de Monceau 75008 PARIS <br>
                    RCS Paris 878 790 765 <br>

                    Site hébergé par Ionos <br>
                    SIRET 431 303 775 00016 <br>
                    7 PL de la gare 57200 SARREGUEMINES</p>
                <!-- <p><i class="fa fa-envelope mr-2"></i><a href="mailto:< ?=data('email')?>">< ?=data('email')?></a></p> -->
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="<?=data('facebook')?>"><i class="fab fa-facebook-f"></i></a>
                    <!-- <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="< ?=data('twitter')?>"><i class="fab fa-twitter"></i></a> -->
                    <!-- <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="< ?=data('linkedin')?>"><i class="fab fa-linkedin-in"></i></a> -->
                    <!-- <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="< ?=data('instagram')?>"><i class="fab fa-instagram"></i></a> -->
                    <!-- <a class="btn btn-lg btn-primary btn-lg-square" href="< ?=data('youtube')?>"><i class="fab fa-youtube"></i></a> -->
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="row">
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4" style="font-size: 1.20rem;">LIENS RAPIDES</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php
                            
                                foreach (the_menus() as $item => $link) {
                                    echo '<a class="text-white-50" href="'.the_site_url().$link.'"><i class="fa fa-angle-right mr-2"></i>'.$item.'</a>';
                                }

                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4" style="font-size: 1.20rem;">Nos services</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php

                                foreach (services_menu() as $item) {
                                    echo '<a class="text-white-50 mb-2" href="'.the_site_url().'services"><i class="fa fa-angle-right mr-2"></i>'.$item.'</a>';
                                }
                            
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-5">
                        <!-- <h5 class="text-white text-uppercase mb-4">BULLETIN</h5>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Votre adresse e-mail">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">S'inscrire</button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=component('copyright')?>
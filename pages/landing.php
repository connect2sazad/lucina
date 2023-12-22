<?= component('hero-slider') ?>

<h1 class="text-center p-5 addon-h1">
    <p>Votre nouveau centre Santé & Bien-être ouvre ses portes à Rueil Malmaison.</p>
</h1>


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" <?= img('about.webp') ?> alt="">
            </div>
            <div class="col-lg-6">
                <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">LE SOIN PAR LA LUMIERE </h6>
                <h1 class="mb-4">LUCINA : Votre Centre De Photobiomodulation </h1>
                <p class="pl-4 border-left border-primary text-justify">
                    L'Institut Lucina vous accueille aux portes de Paris, à Rueil Malmaison. Spécialisé en Photobiomodulation, il fait partie des premiers centres en France proposant cette technique de soin, utilisant les propriétés naturelles et régénérantes de la lumière.
                <br><br>
                    Pratiquée depuis plus de 20 ans dans des domaines spécialisés, particulièrement développée aux Etats Unis et dans les pays nordiques, son efficacité et son innocuité ont été validées par de nombreuses études scientifiques et cliniques. Son développement en France reste plus récent.
                    <a href="<?= the_site_url() ?>about">En savoir plus...</a>
                </p>
                <!-- <div class="row pt-3 d-flex ">
                    <div class="col-md-6">
                        <div class="bg-light text-center p-4 h-100 addon-flex-center">
                            <h3 class="display-4 text-primary" data-toggle="counter-up">30</h3>
                            <h6 class="text-uppercase">ANS D'ÉTUDES</h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light text-center p-4 h-100 addon-flex-center">
                            <h3 class="display-4 text-primary" data-toggle="counter-up">5000</h3>
                            <h6 class="text-uppercase">ÉTUDES SCIENTIFIQUES PUBLIÉES</h6>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h1>LA CARTE DES SOINS </h1>
            <p>Une technique exploitant les effets de la lumière</p>
        </div>
    </div>
    <?= component('services-carousel') ?>
</div>
<!-- Service End -->


<!-- Open Hours Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" <?= img('opening.webp') ?> style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Heures d'ouverture</h6>
                    <h1 class="mb-4 text-break">Votre Centre De Photobiomodulation</h1>
                    <p class="text-justify">Spécialisé en Photobiomodulation, il fait partie des premiers centres en France proposant cette technique de soin, utilisant les propriétés naturelles et régénérantes de la lumière.</p>
                    <ul class="list-inline">
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Lundi - Vendredi : 9:00 AM - 7:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Samedi : 9:00 AM - 6:00 PM</li>
                        <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Dimanche : Fermé</li>
                    </ul>
                    <!-- <a href="" class="btn btn-primary mt-2">Book Now</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Open Hours End -->


<!-- A TRIPLE EXPERTISE start -->
<?= component('triple-expertise') ?>
<!-- A TRIPLE EXPERTISE end -->

<div class="container-fluid">
    <div class="container pb-5">
            <div class="card-body">
                <h5 class="card-title mb-3">UN MATÉRIEL CERTIFIÉ ET UN PRATICIEN QUALIFIÉ À VOTRE ÉCOUTE</h5>
                <p class="card-text">Tous nos équipements sont fabriqués en France et ont les certifications requises. Un gage d'efficacité et de sécurité.</p>
                <p class="card-text">Votre praticien est également un expert qualifié, formé pour la pratique de la Photobiomodulation et sur les équipements utilisés.</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
    </div>
</div>


<!-- Pricing Start -->
<?= component('pricing') ?>
<!-- Pricing End -->


<!-- <div class="container mt-5 pt-5 pb-5">
    <div class="media mt-5 d-flex img-text">
        <img class="mr-3" < ?=img('PHOTOBIOMODULATIONI.webp')?>>
        <div class="media-body ml-5">
            <h5 class="mt-0">UN PEU D'HISTOIRE : DE L'ANTIQUITE A LA RECHERCHE SPATIALE</h5>
            <p class="text-justify">Les effets bénéfiques de la lumière sont connus depuis l'antiquité par de nombreuses civilisations (Egypte, Grèce, Méso-Amérique, Chine, Inde). Son utilisation se développe surtout au milieu du XIXème siècle avec l'épidémie de tuberculose et le développement des sanatoriums, validant le traitement par la cure d'air, de lumière et de soleil, seul remède connu avant l'avènement des antibiotiques.</p>
            <p class="text-justify">Les progrès scientifiques et techniques réalisés dans le courant du XIX siècle permettront de poser les bases de la photobiomodulation (citons notamment le Dr Finsen prix Nobel de médecine en 1903 pour son étude sur l'utilisation de radiations lumineuses dans le traitement de certaines maladies ; Albert Einstein prix Nobel de physique en 1921 pour sa découverte de la loi de l'effet photoélectrique; <a href="<?=the_site_url()?>about/history">En savoir plus...</a></p>
        </div>
    </div>
</div> -->

<!-- Team Start -->
<?php //component('team')
?>
<!-- Team End -->


<!-- Testimonial Start -->
<?php //component('testimonials')
?>
<!-- Testimonial End -->

<!-- Contact Start -->
<?php component('contact')?>
<!-- Contact End -->
<style>
    /* .swiper {
        width: 100%;
        height: 100%;
        margin-bottom: 100px;
    } */

    .swiper-slide {
        /* font-size: 18px; */
        display: flex;
        flex-direction: column;
        text-align: left!important;
        /* justify-content: center; */
        /* align-items: center; */
        /* width: 80%; */
    }
    .swiper-slide > * {
        text-align: left;
    }

    /* .swiper-slide p {
        text-align: left;
    } */
</style>

<div class="container-fluid px-0 my-5">
<div class="row mx-0 mt-5 pt-5 justify-content-center">
        <div class="col-lg-9">
            <!-- <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">OUR SERVICE</h6> -->
            <h4 class="blue quicksand">LE DÉROULEMENT D'UNE SÉANCE</h4>
        </div>
    </div>

    <?= component('sessions-accordian') ?>


    <div class="row mx-0 mt-5 pt-5 justify-content-center">
        <div class="col-lg-9 mb-5 pb-5 ">
            <h4 class="blue quicksand">LE MOT DE VOTRE PRATICIEN</h4>
        </div>


        <div class="col-lg-10">
            <div class="container">
            <div class="row">
                <div class="col-5" style="height: 100%; display:flex; align-items:center;">
                    <p>
                        Notre approche est globale, et avant tout humaine, <br> nous avons à cœur de bien vous accueillir, <br>
                        d'être à votre écoute, <br> et de vous accompagner au mieux au quotidien.
                    </p>
                </div>
                <div class="col-3" style="margin-top: -52px;">
                    <img <?= img('lucina.jpeg') ?>>
                </div>
            </div>
            </div>

            <div class="container">
                <p>L'efficacité d'une technique de soin dépend de différents paramètres :</p>
                <!-- <div class="swiper mySwiper">
                    <div class="swiper-wrapper"> -->
                        <div class="swiper-slide">
                            <p><u>La technique elle-même</u>: son efficacité et son innocuité doivent être attestées par des études cliniques suffisamment nombreuses et fiables. La Photobiomodulation dispose ainsi de plus de 30 ans d'études et de plus de 5000 études scientifiques publiées dans le monde entier.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <p><u>Le matériel</u> : les équipements doivent être de qualité et habilités pour un usage professionnel.</p>
                                </div>
                                <div class="col-2">
                                    <img <?= img('sessions2.jpeg') ?> style="height: 300px; width:170px ">
                                </div>
                                <div class="col-10">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Tous nos équipements sont fabriqués en France, sont équipés de LED de qualité médicale, disposent des certifications requises pour une utilisation professionnelle (les paramètres et les puissances sont différents des </p>
                                        </div>
                                        <div class="col-8">
                                            <p>matériels vendus pour un usage particulier, et font l'objet de contrôles attestant leur conformité). Ils ont été évalués par des études cliniques officielles prouvant leur efficacité.</p>
                                        </div>
                                        <div class="col-4">
                                            <img <?= img('sessions3.jpeg') ?> style="height: 250px; width:320px ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p><u>Le praticien</u>: la qualité de sa formation et sa capacité à écouter et accompagner.</p>
                            <p class="my-3">
                                Votre praticien dispose de formations de référence en Photobiomodulation :
                            </p>
                            <ul>
                                <li>Formation Photobiomodulation/Mil-thérapie du CERS-TA (Centre de formation en Thérapies Alternatives) </li>
                                <li>Formation LED et Photobiomodulation de l'OFNT (Organisme de Formation aux Nouvelles Technologies) </li>
                                <li>Suivi du Diplôme Universitaire de Photobiomodulation à la faculté de médecine de l'université de Montpellier à Nîmes, en candidature libre.</li>
                            </ul>
                            <p class="my-3">
                                Et de deux formations complémentaires permettant de mieux vous accompagner :
                            </p>
                            <ul>
                                <li>Sophrologue certifié (formation enregistrée au RNCP - niveau 3 (FR) niveau 5 (EUR)</li>
                                <li>Coach consultant ((formation enregistrée au RNCP - niveau 5 (FR) niveau 7 (EUR).</li>
                            </ul>
                            <p>Il est également membre de l'EMALT qui est l'association européenne de référence en Photobiomodulation, et dispose de plusieurs années d'expérience dans les milieux sportifs.</p>
                            <p>Votre praticien n'est pas médecin, il ne peut procéder à aucun diagnostic ni à aucun traitement.</p>
                        </div>
                    <!-- </div>
                </div> -->
            </div>

        </div>

    </div>

</div>

<div class="container-fluid next-button mt-5 pt-5">
    <div class="row">
        <div class="col-2">
            <a href="contact">Découvrir » </a>
        </div>
    </div>
</div>
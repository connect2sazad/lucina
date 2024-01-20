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
    @media only screen and (max-width: 430px){
        .big-font{
            font-size: 20px;
        }
        .remove-in-phone{
            display: none;
        }
        .low-margin{
            margin-top: 10px!important;
        }
    }

</style>

<div class="container-fluid px-0 py-5 my-4">
    <!-- <div class="row mx-0">
        <div class="col-lg-12 flex-title">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">OUR SERVICE</h6>
            <h1 class="ml-5">LA CARTE DES SOINS</h1>
            <span class="mr-5">
                (cliquez sur chaque indication + pour en savoir plus)
            </span>
        </div>
    </div> -->
    <div class="row mx-0 pt-3 justify-content-center">
        <div class="col-lg-9 pb-3">
            <!-- <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">OUR SERVICE</h6> -->
            <h4 class="blue">LE DÉROULEMENT D'UNE SÉANCE</h4>
        </div>
        <div class="col-lg-9">

            <?= component('sessions-accordian') ?>
        </div>
    </div>



    <div class="row mx-0 mt-5 pt-5 justify-content-center">
        <div class="col-lg-9 mb-5 ">
            <h4 class="blue">LE MOT DE VOTRE PRATICIEN</h4>
        </div>


        <div class="col-lg-10">
            <div class="container mb-4">
            <div class="row">
                <div class="col-lg-5 col-xs-8 col-sm-8">
                    <p class="big-font">
                        Notre approche est globale, et avant tout humaine, <br> nous avons à cœur de bien vous accueillir, <br>
                        d'être à votre écoute, <br> et de vous accompagner au mieux au quotidien.
                    </p>
                </div>
                <div class="col-lg-3 col-xs-4 col-sm-4 align-content-center justify-content-center">
                    <img <?= img('lucina.jpeg') ?> class="small-img">
                </div>
            </div>
            </div>

            <div class="container">
                <p>L'efficacité d'une technique de soin dépend de différents paramètres :</p>
                <!-- <div class="swiper mySwiper">
                    <div class="swiper-wrapper"> -->
                        <div class="swiper-slide">
                            <p><strong class="blue">La technique elle-même</strong> : son efficacité  doit être attestée par des études cliniques suffisamment nombreuses et fiables. <br> La Photobiomodulation dispose de plus de 30 ans d'études et de plus de 5000 études scientifiques publiées dans le monde entier.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-12">
                                    <p><strong class="blue">Le matériel</strong> : les équipements doivent être de qualité et habilités pour un usage professionnel.</p>
                                </div>
                                <div class="col-2">
                                    <img <?= img('sessions2.jpeg') ?> style="height: 300px; width:180px ">
                                </div>
                                <div class="col-10">
                                    <div class="row">
                                        <div class="col-12">
                                            <p style="margin-left: 15px;">Tous nos équipements sont fabriqués en France, sont équipés de LED de qualité médicale,<br> et sont certifiés pour une utilisation professionnelle (les paramètres et les puissances sont différents des vendus pour un usage particulier, et font l'objet de contrôles attestant leur conformité). <br>   Ils ont été évalués par des études cliniques officielles prouvant leur efficacité et innocuité.</p>
                                        </div>
                                        <div class="col-4 remove-in-phone">
                                            <img <?= img('sessions3.jpeg') ?> style="height: 230px; width:300px; margin-top: 5px; margin-left: 441px ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p class="mt-5 low-margin"><strong class="blue">Le praticien</strong> : la qualité de sa formation et sa capacité à écouter et accompagner.</p>
                            <p class="my-3">
                                Votre praticien dispose de formations de référence en Photobiomodulation :
                            </p>
                            <ul>
                                <li>Formation Photobiomodulation et Mil-thérapie du CERS-TA (Centre de formation en Thérapies Alternatives)</li>
                                <li>Formation LED et Photobiomodulation de l'OFNT (Organisme de Formation aux Nouvelles Technologies) </li>
                                <li>Suivi du Diplôme Universitaire de Photobiomodulation à la faculté de médecine de Nîmes Montpellier, en candidature libre.</li>
                            </ul>
                            <p class="my-3">
                                Et de deux formations complémentaires permettant de mieux vous accompagner :
                            </p>
                            <ul>
                                <li>Sophrologue certifié (formation enregistrée au RNCP - niveau 3 (FR) niveau 5 (EUR)</li>
                                <li>Coach consultant ((formation enregistrée au RNCP - niveau 5 (FR) niveau 7 (EUR).</li>
                            </ul>
                            <p>Il est également membre de l'EMALT qui est l'association européenne de référence en Photobiomodulation,<br> et dispose de plusieurs années d'expérience dans les milieux sportifs.</p>
                            <p>Votre praticien n'est pas médecin, il ne peut procéder à aucun diagnostic ni à aucun traitement.</p>
                        </div>
                    <!-- </div>
                </div> -->
            </div>

        </div>

    </div>

</div>

<div class="container-fluid next-button mt-5">
    <div class="row">
        <div class="col-3">
            <a href="contact">Découvrir » </a>
        </div>
    </div>
</div>
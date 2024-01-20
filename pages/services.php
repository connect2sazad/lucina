<style>
    .font-bold-init{
        font-weight: 100!important;
    }
</style>

<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-4 responsive-padding">
    <!-- <div class="row mx-0">
        <div class="col-lg-12 flex-title">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">OUR SERVICE</h6>
            <h1 class="ml-5">LA CARTE DES SOINS</h1>
            <span class="mr-5">
                (cliquez sur chaque indication + pour en savoir plus)
            </span>
        </div>
    </div> -->
    <div class="row mx-0 pt-3 justify-content-center pt-0">
        <div class="col-lg-9 pb-5 ">
            <h4 class="blue font-bold-init" style="font-size: 19x;">LES DIFFÉRENTES INDICATIONS</h4>
        </div>
    </div>

    <?= component('services-block') ?>


    <div class="container-fluid pt-5 mt-5">
        <div class="row mx-0 mt-5 justify-content-center">
            <div class="col-lg-9 pb-5 ">
                <h4 class="mb-4 blue font-bold-init pb-5">LES DIFFÉRENTES FORMULES ET TARIFS</h4>
                <p>- En séance individuelle quand vous en ressentez l'envie ou le besoin. <br>
                    - En cure de 10 séances ou en abonnement* permettant d'apporter un complément régulier de lumière et un suivi tout au long de l'année.</p>
            </div>
        </div>
    </div>
    <?= component('pricing') ?>

    <!-- < ?=component('appointments')?> -->

</div>
<!-- Service End -->

<div class="container-fluid next-button mt-5">
    <div class="row">
        <div class="col-3">
            <a href="sessions">Découvrir » </a>
        </div>
    </div>
</div>
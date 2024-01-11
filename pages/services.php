<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
    <!-- <div class="row mx-0">
        <div class="col-lg-12 flex-title">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">OUR SERVICE</h6>
            <h1 class="ml-5">LA CARTE DES SOINS</h1>
            <span class="mr-5">
                (cliquez sur chaque indication + pour en savoir plus)
            </span>
        </div>
    </div> -->

    <div class="container-fluid px-5">
        <h4 class="quicksand">LES DIFFÉRENTES INDICATIONS</h4>
    </div>
    <?= component('services-block') ?>


    <div class="container-fluid px-5 pt-5 mt-5">
        <h4 class="mb-4 quicksand">LES DIFFÉRENTES FORMULES ET TARIFS</h4>
        <p>- En séance individuelle quand vous en ressentez l'envie ou le besoin. <br>
        - En cure de 10 séances ou en abonnement* permettant d'apporter un complément régulier de lumière et un suivi tout au long de l'année.</p>
    </div>
    <?= component('pricing') ?>

    <!-- < ?=component('appointments')?> -->

</div>
<!-- Service End -->
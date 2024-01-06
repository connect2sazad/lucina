<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <!-- <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">OUR SERVICE</h6> -->
            <h1>LA CARTE DES SOINS </h1>
        </div>
    </div>

    <div class="container-fluid px-5 pt-5 mt-5">
        <h4 class="text-decoration-underline">LES DIFFÉRENTES INDICATIONS</h4>
    </div>
    <?= component('services-block') ?>

    <div class="container-fluid px-5 pt-5 mt-5">
        <h4 class="text-decoration-underline">LES DIFFÉRENTES FORMULES</h4>
        <ul class="pt-3">
            <li>En séance individuelle quand vous en ressentez l'envie ou le besoin.</li>
            <li>En cure de 10 séances ou en abonnement* permettant d'apporter un complément régulier de lumière et un suivi tout au long de l'année.</li>
        </ul>
    </div>

    <div class="container-fluid px-5 pt-5 mt-5">
        <h4 class="text-decoration-underline">LES TARIFS</h4>
    </div>
    <?= component('pricing') ?>

    <!-- < ?=component('appointments')?> -->

</div>
<!-- Service End -->
<?php

include_once ___INC___ . "classes.php";


/***************************Bien être***************************************************************************** */

$bien_etre = new ServicesCard;

$bien_etre_item1 = new ServiceItem();
$bien_etre_item1->title = 'Ma pause détente';
$bien_etre_item1->desc = 'Ma pause détente évoque un moment de détente et de relaxation.';

$bien_etre_item2 = new ServiceItem();
$bien_etre_item2->title = 'Ma pause forme';
$bien_etre_item2->desc = 'Ma pause forme suggérant un moment dédié à la forme physique et au bien-être.';

$bien_etre_item3 = new ServiceItem();
$bien_etre_item3->title = 'Ma pause détox';
$bien_etre_item3->desc = 'Ma pause détox, suggérant un moment dédié à la purification et au bien-être intérieur.';

$bien_etre_item4 = new ServiceItem();
$bien_etre_item4->title = 'Ma pause anti-déprime';
$bien_etre_item4->desc = 'Ma pause anti-déprime, suggérant un moment dédié à la lutte contre le blues et au bien-être mental.';

$bien_etre_item5 = new ServiceItem();
$bien_etre_item5->title = 'Ma pause fortifiante';
$bien_etre_item5->desc = 'Ma pause fortifiante, suggérant un moment dédié au renforcement immunitaire et au bien-être global.';

$bien_etre->addServiceItem($bien_etre_item1);
$bien_etre->addServiceItem($bien_etre_item2);
$bien_etre->addServiceItem($bien_etre_item3);
$bien_etre->addServiceItem($bien_etre_item4);
$bien_etre->addServiceItem($bien_etre_item5);

/***************************Bien être***************************************************************************** */


/***************************Santé***************************************************************************** */
$sante = new ServicesCard;

$sante_item1 = new ServiceItem();
$sante_item1->title = 'Gestion du sommeil';
$sante_item1->desc = 'Ma pause détente évoque un moment de détente et de relaxation.';

$sante_item2 = new ServiceItem();
$sante_item2->title = 'Gestion du stress';
$sante_item2->desc = 'Ma pause forme suggérant un moment dédié à la forme physique et au bien-être.';

$sante_item3 = new ServiceItem();
$sante_item3->title = 'Gestion de la douleur';
$sante_item3->desc = 'Ma pause détox, suggérant un moment dédié à la purification et au bien-être intérieur.';

$sante_item4 = new ServiceItem();
$sante_item4->title = 'Soutien au sevrage tabagique';
$sante_item4->desc = 'Ma pause anti-déprime, suggérant un moment dédié à la lutte contre le blues et au bien-être mental.';

$sante_item5 = new ServiceItem();
$sante_item5->title = 'Luminothérapie dépression';
$sante_item5->desc = 'Ma pause fortifiante, suggérant un moment dédié au renforcement immunitaire et au bien-être global.';

$sante_item6 = new ServiceItem();
$sante_item6->title = 'Solution jambes lourdes';
$sante_item6->desc = 'Ma pause fortifiante, suggérant un moment dédié au renforcement immunitaire et au bien-être global.';

$sante->addServiceItem($sante_item1);
$sante->addServiceItem($sante_item2);
$sante->addServiceItem($sante_item3);
$sante->addServiceItem($sante_item4);
$sante->addServiceItem($sante_item5);
$sante->addServiceItem($sante_item6);
/***************************Santé***************************************************************************** */


/***************************Esthétique***************************************************************************** */
$esthetique = new ServicesCard;

$esthetique_item1 = new ServiceItem();
$esthetique_item1->title = 'Visage (anti-rides, éclat, fermeté, acné, couperose).';
$esthetique_item1->desc = 'Ma pause détente évoque un moment de détente et de relaxation.';

$esthetique_item2 = new ServiceItem();
$esthetique_item2->title = 'Cheveux (soin densificateur, réduction de l’alopécie)';
$esthetique_item2->desc = 'Ma pause forme suggérant un moment dédié à la forme physique et au bien-être.';

$esthetique_item3 = new ServiceItem();
$esthetique_item3->title = 'Corps entier (minceur, fermeté, anti-âge)';
$esthetique_item3->desc = 'Ma pause détox, suggérant un moment dédié à la purification et au bien-être intérieur.';

$esthetique->addServiceItem($esthetique_item1);
$esthetique->addServiceItem($esthetique_item2);
$esthetique->addServiceItem($esthetique_item3);
/***************************Esthétique***************************************************************************** */


/***************************Le coin du sportif***************************************************************************** */
$sportif = new ServicesCard;

$sportif_item1 = new ServiceItem();
$sportif_item1->title = 'Préparation sportive';
$sportif_item1->desc = 'Ma pause détente évoque un moment de détente et de relaxation.';

$sportif_item2 = new ServiceItem();
$sportif_item2->title = 'Récupération sportive';
$sportif_item2->desc = 'Ma pause forme suggérant un moment dédié à la forme physique et au bien-être.';

$sportif_item3 = new ServiceItem();
$sportif_item3->title = 'Suivi sportif';
$sportif_item3->desc = 'Ma pause détox, suggérant un moment dédié à la purification et au bien-être intérieur.';

$sportif->addServiceItem($sportif_item1);
$sportif->addServiceItem($sportif_item2);
$sportif->addServiceItem($sportif_item3);
/***************************Le coin du sportif***************************************************************************** */
?>

<!-- <div class="container-fluid px-5 mt-5">
    <h3 class="mb-3">Esthétique</h3>
    <div class="row">
        < ?= $esthetique->getServices(); ?>
    </div>
</div> -->

<!-- <div class="container-fluid px-5 mt-4">
    
    <h3 class="mb-3">Bien être</h3>
    <div class="row">
        < ?= $bien_etre->getServices(); ?>
    </div>
</div> -->

<!-- <div class="container-fluid px-5 mt-5">
    <h3 class="mb-3">Santé</h3>
    <div class="row">
        < ?= $sante->getServices(); ?>
    </div>
</div> -->

<!-- <div class="container-fluid px-5 mt-5">
    <h3 class="mb-3">Sport et compétition</h3>
    <div class="row">
        < ?= $sportif->getServices(); ?>
    </div>
</div> -->

<style>
    .card{
        border-radius: 10px;
        position: relative;
        padding-top: 20px;
        margin-right: -30px;
        margin-top: -20px;
    }

    .card .plus{
        position: absolute;
        right: 15px;
        bottom: 20px;
        font-weight: bolder;
        color: white;
        font-size: 20px;
        color: white;
    }
    .card .plus a{
        color: white;
        font-size: 13px;
        text-decoration: none;
        padding: 10px;
        border: 2px solid #DFDFDF;
        border-radius: 20px;
    }

    #KNjnsk .row{
        margin-bottom: 50px!important;
        margin-top: 50px!important;
    }
</style>

<div class="container mt-4" id="KNjnsk">
    <div class="row mb-4">
        <div class="col-2"></div>
        <div class="col-6">
            <div class="card p-2" style="background-color: #F4B183; color: black">
                <p class="text-center">Esthétique (visage et corps entier) :</p>
                <?= $esthetique->getServices(); ?>
                <div class="plus"><a href="<?=the_site_url()?>services/esthetique">Découvrir</a></div>
            </div>
        </div>
        <div class="col-4"><img <?=img('s1.jpg')?> style="height: 200px; width: 200px"></div>
    </div>
    <div class="row mb-4">
        <div class="col-4">
            <div class="card p-2" style="background-color: #4472C4; color: white">
                <div class="plus"><a href="<?=the_site_url()?>services/bien_entre">Découvrir</a></div>
                <p class="text-center">Bien être :</p>
                <?= $bien_etre->getServices(); ?>
            </div>
        </div>
        <div class="col-4"><img <?=img('s2.jpg')?> style="height: 200px; width: 200px"></div>
        <div class="col-4"></div>
    </div>
    <div class="row mb-4">
        <div class="col-2"></div>
        <div class="col-4">
            <div class="card p-2" style="background-color: #A9D18E; color: black">
                <div class="plus"><a href="<?=the_site_url()?>services/sante">Découvrir</a></div>
                <p class="text-center">Santé :</p>
                <?= $sante->getServices(); ?>
            </div>
        </div>
        <div class="col-4"><img <?=img('s3.jpg')?> style="height: 200px; width: 200px"></div>
        <div class="col-2"></div>
    </div>
    <div class="row mb-4">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card p-2" style="background-color: #FFE699; color: black">
                <div class="plus"><a href="<?=the_site_url()?>services/sport_et_competition">Découvrir</a></div>
                <p class="text-center">Sport et compétition :</p>
                <?= $sante->getServices(); ?>
            </div>
        </div>
        <div class="col-4"><img <?=img('s4.jpg')?> style="height: 200px; width: 200px"></div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card p-2 addon-tc" style="background-color: #2F5597; color: white">
                <u>Soins à la carte (sur demande)</u>
            </div>
        </div>
    </div>
</div>
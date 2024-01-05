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
</div>

<div class="container-fluid px-5 mt-4">
    
    <h3 class="mb-3">Bien être</h3>
    <div class="row">
        < ?= $bien_etre->getServices(); ?>
    </div>
</div>

<div class="container-fluid px-5 mt-5">
    <h3 class="mb-3">Santé</h3>
    <div class="row">
        < ?= $sante->getServices(); ?>
    </div>
</div>

<div class="container-fluid px-5 mt-5">
    <h3 class="mb-3">Sport et compétition</h3>
    <div class="row">
        < ?= $sportif->getServices(); ?>
    </div>
</div> -->


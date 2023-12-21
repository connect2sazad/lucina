<?php

include_once ___INC___ . "classes.php";

$services = new ServicesCarousel;

$serviceItem1 = new ServiceItem();
$serviceItem1->title = 'Ma pause détente';
$serviceItem1->desc = 'Ma pause détente évoque un moment de détente et de relaxation.';
$serviceItem1->img = 'services/Ma pause détente.webp';
$serviceItem1->link = '#';

$serviceItem2 = new ServiceItem();
$serviceItem2->title = 'Ma pause forme';
$serviceItem2->desc = 'Ma pause forme suggérant un moment dédié à la forme physique et au bien-être.';
$serviceItem2->img = 'services/Ma pause forme.webp';
$serviceItem2->link = '#';

$serviceItem3 = new ServiceItem();
$serviceItem3->title = 'Gestion du sommeil';
$serviceItem3->desc = 'Optimiser le sommeil pour un bien-être maximal avec une gestion attentive du repos.';
$serviceItem3->img = 'services/Gestion du sommeil.webp';
$serviceItem3->link = '#';

$serviceItem4 = new ServiceItem();
$serviceItem4->title = 'Gestion du stress';
$serviceItem4->desc = 'Gérer le stress avec des techniques de relaxation pour favoriser le bien-être au quotidien.';
$serviceItem4->img = 'services/Gestion du stress.webp';
$serviceItem4->link = '#';

$serviceItem5 = new ServiceItem();
$serviceItem5->title = 'Visage';
$serviceItem5->desc = 'Soigner et embellir le visage avec des soins adaptés pour une beauté naturelle éclatante.';
$serviceItem5->img = 'services/Visage.webp';
$serviceItem5->link = '#';

$serviceItem6 = new ServiceItem();
$serviceItem6->title = 'Récupération sportive';
$serviceItem6->desc = 'Optimiser la récupération sportive avec des stratégies efficaces pour une performance durable et optimale.';
$serviceItem6->img = 'services/Récupération sportive.webp';
$serviceItem6->link = '#';


$services->addServiceItem($serviceItem1);
$services->addServiceItem($serviceItem2);
$services->addServiceItem($serviceItem3);
$services->addServiceItem($serviceItem4);
$services->addServiceItem($serviceItem5);
$services->addServiceItem($serviceItem6);

?>


<div class="owl-carousel service-carousel">
    <!-- <div-- class="service-item position-relative">
        <img class="img-fluid" <?= img('service-1.jpg') ?>>
        <div class="service-text text-center">
            <h4 class="text-white font-weight-medium px-3">Ma pause détente</h4>
            <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
            <div class="w-100 bg-white text-center p-4">
                <a class="btn btn-primary" href="">Make Order</a>
            </div>
        </div>
    </div-->
    <?= $services->getServices(); ?>
</div>
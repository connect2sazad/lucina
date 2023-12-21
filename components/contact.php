<?=component('appointments')?>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.06545714329!2d2.1774394756633915!3d48.87602869946613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6635cf3ba8d85%3A0xb2b38fb295876c5c!2s8%20Rue%20Jean%20le%20Coz%2C%2092500%20Rueil-Malmaison%2C%20France!5e0!3m2!1sen!2sin!4v1702455974567!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                    <h2 class="mb-4">CONTACT ET PLAN D'ACCES</h2>
                    <p>
                        <strong>Adresse</strong> : <?= data('address') ?>
                    </p>
                    <p>
                        <strong>Téléphone</strong> : <?= data('contact') ?>
                    </p>
                    <p>
                        <strong>Bus</strong> : <br>
                        Arrêt le plus proche : Rueil Malmaison « Eglise de Rueil » desservi par les lignes:
                        <ul>
                            <li>144 (Rueil Malmaison RER - La Défense)</li>
                            <li>467 (Rueil Malmaison RER - Pont de Sèvres)</li>
                            <li>565 (Les Hauts de Rueil)</li>
                            <li>564 (Jonchère Malmaison Saint-Cucufa)</li>
                        </ul>
                    </p>
                    <p>
                        <strong>En voiture</strong> :
                        Parking le plus proche: parking Indigo Arcades  <br>
                        (Le cœur de ville dispose de nombreux parking pour vous accueillir).
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
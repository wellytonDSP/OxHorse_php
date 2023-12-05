<?php
require_once("../templates/header.php");
?>
<main>
    <section class="banners banner-1 d-flex flex-column justify-content-center text-center">
        


    </section>
    <section id="secao-genetica" class="banners d-flex flex-column justify-content-center text-center">
        <div class="container text-center">
            <div class="container">
                <h1 class="title-genetica">Espécies</h1>
            </div>
            <div class="container row ">
                <div class="col card-group">
                    <div class="card " style="width: 18rem;">
                        <img src="../img/Fotos_Angus/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                        <div class="card-body">
                            <h5 class="card-title">BOVINA</h5>
                            <button class="btn-logar justify-content-center text-uppercase"><a href="genetica.php">ACESSAR</a></button>
                        </div>
                    </div>
                </div>
                <div class="col card-group">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/Fotos_Crioulo/Foto_crioulo1.jpeg" class="card-img-top" alt="foto-brahman">
                        <div class="card-body">
                            <h5 class="card-title">EQUINA</h5>
                            <button href="#" class="btn-logar justify-content-center text-uppercase"><a href="genetica.php">ACESSAR</a></button>
                        </div>
                    </div>
                </div>
                <div class="col card-group">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/Fotos-Truie/Foto-truie1.jpeg" class="card-img-top" alt="foto-brahman">
                        <div class="card-body">
                            <h5 class="card-title">SUINA</h5>
                            <button href="#" class="btn-logar justify-content-center text-uppercase"><a href="genetica.php">ACESSAR</a></button>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</main>
<?php
require_once("../templates/footer.php");
?>
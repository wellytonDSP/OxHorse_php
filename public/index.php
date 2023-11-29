<?php
require_once("../templates/header.php");
?>
<main>
    <section class="banners banner-1 d-flex flex-column justify-content-center text-center">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="#" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


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
                            <a href="./genetica.php" class="btn btn-primary">ACESSAR</a>
                        </div>
                    </div>
                </div>
                <div class="col card-group">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/Fotos_Crioulo/Foto_crioulo1.jpeg" class="card-img-top" alt="foto-brahman">
                        <div class="card-body">
                            <h5 class="card-title">EQUINA</h5>
                            <a href="#" class="btn btn-primary">ACESSAR</a>
                        </div>
                    </div>
                </div>
                <div class="col card-group">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/Fotos-Truie/Foto-truie1.jpeg" class="card-img-top" alt="foto-brahman">
                        <div class="card-body">
                            <h5 class="card-title">SUINA</h5>
                            <a href="#" class="btn btn-primary">ACESSAR</a>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</main>
<?php
require_once("../templates/footer.php");
?>
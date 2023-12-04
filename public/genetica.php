<?php
require_once("../templates/header.php");
?>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <section class="banners d-flex flex-column justify-content-center text-center">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="../img/genetica/foto1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="../img/genetica/foto2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section>
            <h3>Touro de Corte:</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="../img/Fotos_Braford/Fotos_03.jpeg" class="card-img-top" alt="foto-angus">
                        </svg>
                        <div class="card-body">
                            <div class="product-infos ">
                                <div class="product-titles">
                                    <div class="title">Zeus</div>
                                </div>
                                <div class="infos ">
                                    <div class="info overflow">
                                        Pai:
                                        <span class="info-value uppercase">Cronos</span>
                                    </div>
                                    <div class="info overflow">
                                        Nascimento:
                                        <span class="info-value uppercase">19/09/2018</span>
                                    </div>
                                    <div class="info overflow">
                                        Proprietário:
                                        <span class="info-value uppercase">PECUARIA GOES LETA / GIOVANA CAMARGO GOES'</span>
                                    </div>
                                </div>

                                <div class="cotainer">
                                    <div class="price">
                                        R$ 385,00
                                        <span class="quantity">/10 doses</span>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <button class="btn btn-success btn-cards">Detalhes</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-success btn-cards mr-auto">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="../img/Fotos_Angus/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                        <div class="card-body">
                            <div class="product-infos ">
                                <div class="product-titles">
                                    <div class="title">José</div>
                                </div>
                                <div class="infos ">
                                    <div class="info overflow">
                                        Pai:
                                        <span class="info-value uppercase">PRUDENTE DA KAYLUA</span>
                                    </div>
                                    <div class="info overflow">
                                        Nascimento:
                                        <span class="info-value uppercase">19/09/2018</span>
                                    </div>
                                    <div class="info overflow">
                                        Proprietário:
                                        <span class="info-value uppercase">PDS AGROPECUARIA LTDA / WELLYTON DOS SANTOS PEDROSO</span>
                                    </div>
                                </div>

                                <div class="cotainer">
                                <div class="price">
                                        R$ 345,00
                                        <span class="quantity">/10 doses</span>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <button class="btn btn-success btn-cards">Detalhes</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-success btn-cards mr-auto">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-box card shadow-sm">
                        <img src="../img/Fotos_Nelore/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                        <div class="card-body">
                            <div class="product-infos ">
                                <div class="product-titles">
                                    <div class="title">Amenadieu</div>
                                </div>
                                <div class="infos ">
                                    <div class="info overflow">
                                        Pai:
                                        <span class="info-value uppercase">PRUDENTE DA KAYLUA</span>
                                    </div>
                                    <div class="info overflow">
                                        Nascimento:
                                        <span class="info-value uppercase">19/09/2018</span>
                                    </div>
                                    <div class="info overflow">
                                        Proprietário:
                                        <span class="info-value uppercase">TJG AGROPECUARIA LTDA / BRUNO GERALDO BORGES
                                            MORANDO</span>
                                    </div>
                                </div>

                                <div class="cotainer">
                                <div class="price">
                                        R$ 285,00
                                        <span class="quantity">/10 doses</span>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <button class="btn btn-success btn-cards">Detalhes</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-success btn-cards mr-auto">Adicionar ao Carrinho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    </div>
</div>
<?php
require_once("../templates/footer.php");
?>
<?php
require_once("../templates/header.php");


?>
<main>

    <div id="carouselExampleInterval" class="carousel slide container-fluid" style="padding: 0;"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="../img/banner/1.png" class="card-img-top img-banner" alt="logo">
            </div>
            <div class="carousel-item active " data-bs-interval="2000">
                <img src="../img/banner/3.png" class="card-img-top img-banner" alt="logo">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden" _msttexthash="116246" _msthash="303">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden" _msttexthash="113945" _msthash="304">Próximo</span>
        </button>
    </div>

    <h2 class="title mt-3 mb-3" style="text-align: center;">Categorias</h3>
        <div class="container row mx-auto g-2">
            <div class="col-6 col-md-6 col-xxl-3">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">ANIMAIS</text>
                    </svg>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-6 col-xxl-3">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Categoria genética"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">GENÉTICA</text>
                    </svg>
                    <a href="genetica.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-6 col-xxl-3">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">MATERIAIS</text>
                    </svg>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-6 col-md-6 col-xxl-3">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">PROFISSIONAIS</text>
                    </svg>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <h2 class="title mb-3 mt-3" style="text-align: center;">Mais populares</h2>
        <div class="container row mx-auto g-5">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Braford/Fotos_03.jpeg" class="card-img-top" alt="foto-angus">
                            </svg>
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319
                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Angus/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319
                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Nelore/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319
                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Nelore/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319

                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Nelore/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319

                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Nelore/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319

                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Nelore/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319

                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm">
                            <img src="../img/Fotos_Nelore/Foto_02.jpeg" class="card-img-top" alt="foto-angus">
                            <div class="card-body">
                                <div class="product-infos ">
                                    <div class="product-titles">
                                        <h1 class="title-card">ARG-4414 / Marcos</h1>
                                        <h2 class="subtitle-card">Proprietario: Fazenda Margorete</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="price">
                                            R$319

                                        </div>
                                        <div class="quantity align-self-end">,00/10 doses</div>
                                    </div>
                                    <text>Em <text class="parcelas">3x R$8,33 sem juros</text></text>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="mt-5 pt-4 pb-4">
            <div class="section-vantagens">
                <h2 class="text-center p-4">
                    Conheça nossas vantagens
                </h2>
                <div class="d-flex flex-column flex-lg-row align-items-center gap-3 justify-content-center px-3">
                    <div class="divs-vantagens d-flex align-items-center">
                        <div><i class="bi bi-truck fs-1"></i></div>
                        <div class=" flex-column">
                            <div class="ms-3 mb-1 fs-4">TRANSPORTE DE CONFIANÇA</div>
                            <div class="ms-3 fs-6">Garatia de entrega integra de todos os materias e animais</div>
                        </div>
                    </div>
                    <div class="divs-vantagens d-flex align-items-center">
                        <div><i class="bi bi-people-fill fs-1"></i></div>
                        <div>
                            <div class="ms-3 mb-1 fs-4">PROFISSIONAIS AVALIADOS</div>
                            <div class="ms-3 fs-6">Avaliação dos profissioais abertas para selecionar o melhor</div>
                        </div>
                    </div>
                    <div class="divs-vantagens d-flex align-items-center">
                        <div><i class="bi bi-cash-stack fs-1"></i></div>
                        <div>
                            <div class="ms-3 mb-1 fs-4">TRASAÇÃO SEGURA</div>
                            <div class="ms-3 fs-6">Trasações monitoradas por todo o processo</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <form>
                <h5>Quer receber nossas novidades, promoções exclusivas e 10% OFF na primeira compra? Cadastre-se!</h5>
                <div>
                    <input type="email" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail"
                        aria-describedby="button-addon2" />
                    <button type="button" id="button-addon2">Enviar</button>
                </div>
            </form> -->
        </section>
</main>
<?php
require_once("../templates/footer.php");
?>
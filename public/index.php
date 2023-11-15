<?php
require_once("../templates/header.php");
?>
<main>
    <section class="banners banner-1 d-flex flex-column justify-content-center text-center">
        <div class="banners-titulo">
            <div class="container-fluid row">
                <div class="col-md-6 justify-content-center text-center">

                    <h1 class="section-text-1">Tudo que você procura na pecuária em um só lugar!</h1>
                    <p class="section-text-1">Melhor site voltado a pecuaria do Brasil! </p>
                </div>
                <div class="container form-contact col-md-6">
                    <div class="title p-3">
                        <h4 class="title">Juntece a nós para o futuro</h4>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite um email para contato">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite um telefone para contato com (DDD)">
                    </div>
                    <button class="btn-logar mt-3">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="secao1" class="banners d-flex flex-column justify-content-center text-center">
        <div class="container text-center">
            <div class="container row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Génetica</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Pecuaria</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Ferramentas</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Representantes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <h2 class="mb-5 Title-section">Notícias<img style="width:max(35px, 3vw);" src="/img/icones/minhoca-logo.svg"></h2>
            <!-- BLOG -->
            <div class="row row-gutter-sm appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
                <div id="blogPosts">
                    <div class="row justify-content-around">


                        <div class="col-lg-4 col-md-6 row mb-4 mb-lg-0">
                            <!-- Post item-->
                            <div class="post-item ">
                                <div class="post-item-wrap row h-100">
                                    <div class="post-image text-sm-center">
                                        <a href="https://genexbrasil.com.br/blog/1o-simposio-genex-conecta-reune-pecuaristas-e-estudantes-em-busca-de-producao-integrada-e-sustentavel/" target="_blank">
                                            <div style="height: 200px;">
                                                <picture>
                                                    <source media="(max-width: 980px)" srcset="https://genexbrasil.com.br/blog/wp-content/uploads/2023/10/IMG_4564-150x150.jpg">
                                                    <img src="https://genexbrasil.com.br/blog/wp-content/uploads/2023/10/IMG_4564-300x225.jpg" alt="1º Simpósio GENEX CONECTA reúne pecuaristas e estudantes em busca de produção integrada e sustentável" title="1º Simpósio GENEX CONECTA reúne pecuaristas e estudantes em busca de produção integrada e sustentável" style="object-fit: cover; height: 100%; width: 100%;">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="post-item-description pb-0">

                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i> <span>30</span> out/2023</span>
                                        <h6 class="text-4  line-height-1-1 "> <a class="title-post text-decoration-none" href="https://genexbrasil.com.br/blog/1o-simposio-genex-conecta-reune-pecuaristas-e-estudantes-em-busca-de-producao-integrada-e-sustentavel/" target="_blank">1º Simpósio GENEX CONECTA reúne pecuaristas e estudantes em busca de produção integrada e sustentável</a></h6>

                                    </div>

                                    <div class="align-self-end">
                                        <a class="btn ps-0 m-b-30 btn-post" href="https://genexbrasil.com.br/blog/1o-simposio-genex-conecta-reune-pecuaristas-e-estudantes-em-busca-de-producao-integrada-e-sustentavel/" target="_blank">Saiba mais<i class="fa-solid ms-1 fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
                        </div>
                        <div class="col-lg-4 col-md-6 row mb-4 mb-lg-0">
                            <!-- Post item-->
                            <div class="post-item ">
                                <div class="post-item-wrap row h-100">
                                    <div class="post-image text-sm-center">
                                        <a href="https://genexbrasil.com.br/blog/genex-brasil-tem-novo-gerente-de-vendas/" target="_blank">
                                            <div style="height: 200px;">
                                                <picture>
                                                    <source media="(max-width: 980px)" srcset="https://genexbrasil.com.br/blog/wp-content/uploads/2023/10/Guilherme-Genex-150x150.png">
                                                    <img src="https://genexbrasil.com.br/blog/wp-content/uploads/2023/10/Guilherme-Genex-300x225.png" alt="GENEX Brasil tem novo gerente de vendas" title="GENEX Brasil tem novo gerente de vendas" style="object-fit: cover; height: 100%; width: 100%;">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="post-item-description pb-0">

                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i> <span>30</span> out/2023</span>
                                        <h6 class="text-4  line-height-1-1 "> <a class="title-post text-decoration-none" href="https://genexbrasil.com.br/blog/genex-brasil-tem-novo-gerente-de-vendas/" target="_blank">GENEX Brasil tem novo gerente de vendas</a></h6>

                                    </div>

                                    <div class="align-self-end">
                                        <a class="btn ps-0 m-b-30 btn-post" href="https://genexbrasil.com.br/blog/genex-brasil-tem-novo-gerente-de-vendas/" target="_blank">Saiba mais<i class="fa-solid ms-1 fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
                        </div>
                        <div class="col-lg-4 col-md-6 row mb-4 mb-lg-0">
                            <!-- Post item-->
                            <div class="post-item ">
                                <div class="post-item-wrap row h-100">
                                    <div class="post-image text-sm-center">
                                        <a href="https://genexbrasil.com.br/blog/simposio-genex-conecta/" target="_blank">
                                            <div style="height: 200px;">
                                                <picture>
                                                    <source media="(max-width: 980px)" srcset="https://genexbrasil.com.br/blog/wp-content/uploads/2023/10/SIMPOSIO-GENEX-CONECTA-150x150.jpg">
                                                    <img src="https://genexbrasil.com.br/blog/wp-content/uploads/2023/10/SIMPOSIO-GENEX-CONECTA-300x169.jpg" alt="1º Simpósio GENEX Conecta" title="1º Simpósio GENEX Conecta" style="object-fit: cover; height: 100%; width: 100%;">
                                                </picture>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="post-item-description pb-0">

                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i> <span>25</span> out/2023</span>
                                        <h6 class="text-4  line-height-1-1 "> <a class="title-post text-decoration-none" href="https://genexbrasil.com.br/blog/simposio-genex-conecta/" target="_blank">1º Simpósio GENEX Conecta</a></h6>

                                    </div>

                                    <div class="align-self-end">
                                        <a class="btn ps-0 m-b-30 btn-post" href="https://genexbrasil.com.br/blog/simposio-genex-conecta/" target="_blank">Saiba mais<i class="fa-solid ms-1 fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
                        </div>

                    </div>



                    <!-- end: BLOG -->
                </div>
            </div>
            <!-- end: BLOG -->
        </div>
    </section>
</main>
<?php
require_once("../templates/footer.php");
?>
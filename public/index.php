<?php
    require_once("../templates/header.php");
?>
<main>
    <section class="banners banner-1 d-flex flex-column justify-content-center text-center">
        <div class="banners-titulo row">
            <div class="col-md-6">
                <p>Tudo que você procura na pecuária em um só lugar</p>
            </div>

            <div class="container form-contact col-md-6">
                <div class="title p-3">
                    <h4 class="title">Juntece a nós para o futuro</h4>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Digite seu nome">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Digite um email para contato">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Digite um telefone para contato com (DDD)">
                </div>
                <button class="btn-logar mt-3">
                    Enviar
                </button>
            </div>
        </div>
    </section>
</main>
<?php
    require_once("../templates/footer.php");
?>
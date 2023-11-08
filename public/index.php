<?php
    require_once("../templates/header.php");
?>
<main>
    <section class="banners banner-1 d-flex flex-column justify-content-center text-center">
        <div class="banners-titulo">
            <div class="container form-contact">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Digite um email para contato">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    require_once("../templates/footer.php");
?>
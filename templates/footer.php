
<?php if(!empty($flassMessage["msg"])): ?>
    <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><?=$flassMessage["msg"]?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<script>
    window.onload = function () {
        var modal = new bootstrap.Modal(document.getElementById('modal-1'));
        modal.show();
    };
</script>
<?php endif; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

<footer class="footer">
    <div class="container">

        <div class="row pt-5 pb-3">

            <div class="col-lg-4 text-center text-lg-start mb-3">
                <img src="../img/logo2.png" alt="logo" width="120px" class="img-fluid">
                <div class="descricao-footer  mt-3 mb-2">
                    <p class="m-0 p-0">OxHorse. Evoluindo por gerações.</p>
                </div>
                <a class="text-center text-lg-start text-decoration-none text-white fw-bold" style="font-size:12px;" href="/politica-de-privacidade">Política de Privacidade</a>
            </div>

            <div class="col-lg-8">
                <div class="row">

                    <div class="col-7 mb-4 mb-md-0">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-white title-footer">Navegue por aqui</h6>
                            </div>
                            <div class="col-md-4">
                                <a class="subtitle-footer" href="/corte">Genética</a>
                                <a class="subtitle-footer" href="/leite">Pecuaria</a>
                            </div>
                            <div class="col-md-4">
                                <a class="subtitle-footer" href="/contato">Contato</a>
                                <a class="subtitle-footer" href="/genetica">Genética</a>
                                <a class="subtitle-footer" href="/cuidados">Cuidados</a>
                            </div>
                            <div class="col-md-4">
                                <a class="subtitle-footer" href="/tecnologia">Tecnologia</a>
                                <a class="subtitle-footer" href="https://produtos.genexbrasil.com.br/" target="_blank">Produtos</a>
                                <a class="subtitle-footer" href="/representantes">Representantes</a>
                                <a class="subtitle-footer" href="https://genex.erural.net" target="_blank">E-Commerce</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <h6 class="text-white title-footer">Contato</h6>


                        <ul class="fa-ul mb-4 mb-md-3 ms-4">
                            <li class="descricao-footer text-white">
                                <span class="fa-li"><i class="fa-solid fa-location-dot text-genex"></i></span>
                                Rua Esperamos que tenha um lugar um dia, nº 100,
                                Curitiba - PR, CEP: 12345-789
                            </li>
                            <li class="descricao-footer text-white">
                                <span class="fa-li"><i class="fa-solid fa-phone text-genex"></i></span>
                                +55 (41) 9 98854-8283
                            </li>
                        </ul>

                        <div class="text-center text-md-start">
                            <a href="#" target="_blank" class="redes-sociais-link redes-sociais-link-footer me-3">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="#" target="_blank" class="redes-sociais-link redes-sociais-link-footer me-3">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" target="_blank" class="redes-sociais-link redes-sociais-link-footer me-3">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="#" target="_blank" class="redes-sociais-link redes-sociais-link-footer">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-12 mt-4">
                <p class="text-white text-center">© 2023 | OxHorse - Todos os direitos reservados | Desenvolvido por: Giovana e Wellyton</p>
            </div>

        </div>

    </div>
</footer> 
</body>
</html>
<!-- rodapé -->
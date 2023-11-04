<?php
require_once("../templates/header_login_cadastro.php");
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="container-form-login ml-auto col-md-6">
                <div class="logo-login">
                    <a href="index.php"><img src="../img/logo2.png" alt="logo"></a>
                    <h3 class="mt-1">Cadastre-se</h3>
                </div>

                <form class="form-module" action="../config/process.php" method="POST">
                    <input type="hidden" name="type" value="cadastro">
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
                        <input type="text" name="nomeUsuario" class="form-control" id="nomeUsuario"
                            placeholder="Digite seu nome de usuário" required>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                        <input type="text" name="nomeCompleto" class="form-control" id="nomeCompleto"
                            placeholder="Digite seu nome de Completo" required>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail"
                            required>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha"
                            placeholder="Digite sua senha" required>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Confirmar Senha</label>
                        <input type="password" name="confirmacaoSenha" class="form-control" id="confirmacaoSenha"
                            placeholder="Confirme sua senha" required>
                    </div>
                    <div class="mb-1 form-check ">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Aceito os <a href="#">Termos de
                                uso!</a></label>
                    </div>
                    <button type="submit" class="btn-logar justify-content-center text-uppercase">cadastrar</button>
                    <p><a href="login.php">Já tem uma conta?</a></p>
                </form>
            </div>
        </div>

    </div>
</main>


<?php
require_once("../templates/footer.php");
?>
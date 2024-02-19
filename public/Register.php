<?php
require_once("../templates/header.php");
?>
<main>
    <div class="container " style="width:500px;">
        <form class="form-module" action="../config/process.php" method="POST">
            <input type="hidden" name="type" value="cadastro">
            <div class="container d-flex  justify-content-center">
                <img src="../img/logo/logo.png" class="card-img-top" alt="logo" style="width: 200px;">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
                <input type="text" name="nomeUsuario" class="form-control" id="nomeUsuario"
                    placeholder="Digite seu nome de usuário" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                <input type="text" name="nomeCompleto" class="form-control" id="nomeCompleto"
                    placeholder="Digite seu nome de Completo" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail"
                    required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha"
                    required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar Senha</label>
                <input type="password" name="confirmacaoSenha" class="form-control" id="confirmacaoSenha"
                    placeholder="Confirme sua senha" required>
            </div>
            <div class="mb-3 form-check ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Aceito os <a href="#">Termos de
                        uso!</a></label>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-success text-uppercase">cadastrar</button>
            </div>
            <div class="mb-3">
                <p><a href="login.php">Já tem uma conta?</a></p>
            </div>
        </form>

    </div>
</main>


<?php
require_once("../templates/footer.php");
?>
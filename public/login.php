<?php
    require_once("../templates/header_login_cadastro.php");
?>
<main>
    <div class="container-fluid">
        <div class="container-form-login ml-auto mr-auto col-md-6 justify-content-center">
            <div class="logo-login">
                <h1>Bem Vindo</h1>
                <h3>ao</h3>
                <a href="index.php"><img src="../img/logo2.png" alt="logo"></a>
            </div>
            <form class="form-module" action="../config/process.php" method="POST">
                <input type="hidden" name="type" value="login">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="login" id="login" class="form-control"
                        placeholder="Digite usuário ou email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Digite sua senha">
                </div>
                <div class="mb-3 form-check ">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Manter-se conectado!</label>
                </div>
                <button type="submit" class="btn-logar justify-content-center text-uppercase" data-bs-toggle="modal"
                    data-bs-target="#modal-1">entrar</button>
                <p>Não tem conta?<a class="ml-2" href="Register.php">Cadastre-se aqui!</a></p>
                <p><a class="ml-2" href="Register.php">Esqueceu a senha?</a></p>
            </form>
        </div>
    </div>
</main>


<?php
    require_once("../templates/footer-register.php");
?>
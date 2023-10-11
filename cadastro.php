<?php
    include_once("templates/header_login.php");
?>
<main>
    <div class="container-form ml-auto">
        <div class="logo-login">
            <h1>Bem Vindo</h1>
            <h3>ao</h3>
            <img src="img/logo2.png" alt="logo">
        </div>
        <form class="form-module">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome de usuário ou E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Manter-se conectado! </label>
            </div>
            <button type="submit" class="btn-logar justify-content-center text-uppercase">entrar</button>
        </form>
    </div>
</main>


<?php
    include_once("templates/footer.php");
?>
<?php
<<<<<<< HEAD
    require_once("templates/header_login_cadastro.php");
=======
    include_once("templates/header_login_cadastro.php");
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b
?>
<main>
    <div class="container-form-login ml-auto">
        <div class="logo-login">
            <h1>Bem Vindo</h1>
            <h3>ao</h3>
            <img src="img/logo2.png" alt="logo">
        </div>
        <form class="form-module" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="login">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome de usuário ou E-mail</label>
                <input type="email" name="login" id="login" class="form-control" placeholder="Digite usuário ou email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senhalogin" id="senhalogin" class="form-control" placeholder="Digite sua senha">
            </div>
            <div class="mb-3 form-check ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Manter-se conectado!</label>
            </div>
<<<<<<< HEAD
            <button type="submit" class="btn-logar justify-content-center text-uppercase">entrar</button>
=======
            <button type="submit" class="btn-logar justify-content-center text-uppercase" value="login">entrar</button>
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b
            <p>Não tem conta?<a class= "ml-2" href="cadastro.php">Cadastre-se aqui!</a></p>
            <p><a class= "ml-2" href="cadastro.php">Esqueceu a senha?</a></p>
        </form>
    </div>
</main>


<?php
    require_once("templates/footer.php");
?>
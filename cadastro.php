<?php
<<<<<<< HEAD
    require_once("templates/header_login_cadastro.php");
=======
    include_once("templates/header_login_cadastro.php");
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b
?>
<main>
    <div class="container-form-cadastro ml-auto">
        <div class="logo-login">
            <img src="img/logo2.png" alt="logo">
<<<<<<< HEAD
            <h3 class="mt-1">Cadastre-se</h3>
        </div>
        
        <form class="form-module" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="cadastro">
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
                <input type="text" name="nomeUsuario" class="form-control" id="nomeUsuario" placeholder="Digite seu nome de usuário">
=======
            <h3 class="mt-3">Cadastre-se</h3>
        </div>
        
        <form class="form-module" action="<?=$BASE_URL?>config/process.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
                <input type="text" name="nomeUsuario" class="form-control" id="nomeUsuario" placeholder="Digite seu nome de usuário">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                <input type="text" name="nomeCompleto"class="form-control" id="nomeCompleto" placeholder="Digite seu nome de Completo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nome Completo</label>
                <input type="text" name="nomeCompleto"class="form-control" id="nomeCompleto" placeholder="Digite seu nome de Completo">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senha"class="form-control" id="senha" placeholder="Digite sua senha">
            </div>
<<<<<<< HEAD
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Confirmar Senha</label>
                <input type="password" name="confirmacaoSenha" class="form-control" id="confirmacaoSenha" placeholder="Confirme sua senha">
            </div>
            <div class="mb-1 form-check ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Aceito os <a href="#">Termos de uso!</a></label>
            </div>
            <button type="submit" class="btn-logar justify-content-center text-uppercase">cadastrar</button>
=======
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar Senha</label>
                <input type="password" name="confirmacaoSenha" class="form-control" id="confirmacaoSenha" placeholder="Confirme sua senha">
            </div>
            <div class="mb-3 form-check ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Aceito os <a href="#">Termos de uso!</a></label>
            </div>
            <button type="submit" class="btn-logar justify-content-center text-uppercase" value="login">cadastrar</button>
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b
            <p><a href="login.php">Já tem uma conta?</a></p>
        </form>
    </div>
</main>


<?php
    require_once("templates/footer.php");
?>
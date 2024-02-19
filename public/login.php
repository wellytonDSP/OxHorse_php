<?php
    require_once("../templates/header.php");
?>
<main>
    <div class="container-fluid">
        <div class="container " style="width:500px;">
            <form class="form-module" action="../config/process.php" method="POST">
                <div class="container d-flex  justify-content-center">
                    <img src="../img/logo/logo.png" class="card-img-top" alt="logo" style="width: 200px;">
                </div>
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
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success text-uppercase" data-bs-toggle="modal"
                        data-bs-target="#modal-1" style="width: 150px; height: 50px;">entrar</button>
                </div>
                <div class="mb-3">
                    <p>Não tem conta?<a class="ml-2" href="Register.php">Cadastre-se aqui!</a></p>
                    <p><a class="ml-2" href="Register.php">Esqueceu a senha?</a></p>
                </div>
            </form>
        </div>
    </div>
</main>


<?php
    require_once("../templates/footer.php");

?>
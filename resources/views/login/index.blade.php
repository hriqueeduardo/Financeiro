<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/css/login.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    <title>Login</title>
</head>

<body>

    <section class="h-100 gradient-form">
        <div class="container py-5 h-100" style="margin-top: 50px;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">

                            <div class="col-lg-7 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Faça login para acessar o sistema</h4>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('img/cifra.png') }}" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Seja bem vindo</h4>
                                    </div>

                                    <form action="valida-login.php" method="POST">

                                        <div class="form-group">
                                            <label for="usuario" class="mb-2">Nome de usuário</label>
                                            <input type="text" class="form-control mb-3" id="usuario" name="usuario" placeholder="Digite o usuário" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="senha" class="mb-2">Senha</label>
                                            <input type="password" class="form-control mb-3" id="senha" name="senha" placeholder="Senha" required>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 col-12" type="submit">Entrar</button>
                                            <a class="text-muted" href="#!">Esqueceu sua senha ?</a>
                                            <br>
                                            <br>
                                            <a class="text-muted" href="cadastre-se.php">Cadastre-se</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
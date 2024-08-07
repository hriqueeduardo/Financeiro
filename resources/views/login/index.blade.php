<x-layout title="Login">
    <section class="h-100 gradient-form">
        <div class="container py-2 h-100" style="margin-top: 50px;">
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
                                <div class="card-body p-md-4 mx-md-3">

                                    <div class="text-center">
                                        <img src="{{ asset('img/cifra.png') }}" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Seja bem vindo</h4>
                                    </div>

                                    @if ($mensagem = Session::get('erro'))
                                        <div class="alert alert-danger">
                                            {{ $mensagem }}
                                        </div>
                                    @endif

                                    @if ($mensagemSucesso = Session::get('sucesso'))
                                    <div class="alert alert-success">
                                        {{ $mensagemSucesso }}
                                    </div>
                                    @endif

                                    <form action=" {{ route('login.auth') }} " method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="usuario" class="mb-2">Nome de usuário</label>
                                            <input type="text" class="form-control mb-3" id="usuario"
                                                name="usuario" placeholder="Digite o usuário" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="mb-2">Senha</label>
                                            <input type="password" class="form-control mb-3" id="senpasswordha"
                                                name="password" placeholder="Senha" required>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 col-12"
                                                type="submit">Entrar</button>
                                            <a class="text-muted sublinhado-link" href="#!">Esqueceu sua senha ?</a>
                                            <br>
                                            <br>
                                            <a class="text-muted sublinhado-link" href="{{ route('register.index') }}">Cadastre-se</a>
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
</x-layout>

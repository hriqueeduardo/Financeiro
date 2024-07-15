<x-layout title="Crie sua conta">
    <section class="h-100 gradient-form">
        <div class="container py-2 h-100" style="margin-top: 50px;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">

                            <div class="col-lg-7 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Crie sua conta e tenha acesso ao sistema</h4>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card-body p-md-4 mx-md-3">

                                    <div class="text-center">
                                        <img src="{{ asset('img/cifra.png') }}" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Crie sua conta</h4>
                                    </div>

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $erro)
                                                <li>{{ $erro }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                
                                    <form action=" {{ route('register.store') }} " method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="usuario" class="mb-2">Nome de usuário</label>
                                            <input type="text" class="form-control mb-2" id="usuario"
                                                name="usuario" placeholder="Digite o usuário" required value="{{ old('usuario') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="mb-2">Senha</label>
                                            <input type="password" class="form-control mb-2" id="password"
                                                name="password" placeholder="Senha" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation" class="mb-2">Confirme sua senha</label>
                                            <input type="password" class="form-control mb-2" id="password_confirmation"
                                                name="password_confirmation" placeholder="Senha" required>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 col-12" type="submit">Cadastre-se</button>
                                            <a class="text-muted sublinhado-link" href="{{ route('login') }}">Ja tem uma conta ?  faça login</a>
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

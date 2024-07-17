<x-layout title="Dashboard">

    <header class="bg-dark">
        <div>
            <h2 id="titulo">Controle Financeiro</h2>
            <span id="span-usuario">Bem vindo {{ Auth::user()->usuario }} <a href="{{ route('logout.destroy') }}"
                    id="btn-sair" class="btn btn-danger">Sair</a> </span>
        </div>
    </header>

    <x-modal_adicionar></x-modal_adicionar>
    <x-modal_alterar></x-modal_alterar>

        <div class="container-fluid">
            <div class="div" id="div-tabela">
                <div class="card text-center">
                    <div class="titulo card-header bg-dark text-light">
                        <strong>CONTAS A PAGAR</strong>
                    </div>

                    <div class="row mt-3">
                        <div class="form-group col-md-2">
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="span-mes">Mês</span>
                                </div>
                                <select class="form-select" id="mes">
                                    <option selected>Selecione...</option>
                                    <option>Janeiro</option>
                                    <option>Fevereiro</option>
                                    <option>Março</option>
                                    <option>Abril</option>
                                    <option>Maio</option>
                                    <option>Junho</option>
                                    <option>Julho</option>
                                    <option>Agosto</option>
                                    <option>Setembro</option>
                                    <option>Outubro</option>
                                    <option>Novembro</option>
                                    <option>Dezembro</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Ano</span>
                                </div>
                                <input type="text" class="form-control" maxlength="4">
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <button type="button" class="btn btn-primary col-sm-12">Filtrar</button>
                        </div>
                        <div class="form-group col-md-7">
                            <button id="botao-adicionar" type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalAdicionar">Adicionar nova Conta</button>
                        </div>
                    </div>

                    <div class="card-body" style="padding-top: 0;">

                        <div class="table-responsive">
                            <table id="tabela" class="table table-xl table-hover">
                                <thead class="bg-primary text-light">
                                    <tr>
                                        <th></th>
                                        <th>Descrição</th>
                                        <th>Valor</th>
                                        <th>Situação</th>
                                        <th class="col-xs-3 col-sm-3 col-md-4 col-lg-3">Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contas as $conta)
                                        <tr id="dados">
                                            <th scope="row"> </th>

                                            <!-- verifica se é um descrição do selected ou outro e exibe  -->
                                            @if ($conta->descricao === '10')
                                                @php($descricao = $conta->descricao_outro)
                                            @else
                                                @php($descricao = $conta->descricao)
                                            @endif


                                            <td>{{ $descricao }}</td>
                                            <td>{{ 'R$ ' . number_format($conta->valor, 2, ',', '.') }}</td>

                                            <!-- verifica a situção e deixa Em aberto/Pago e muda a cor conforme o tipo -->
                                            @if ($conta->situacao === 0)
                                                @php($situacao = 'Em aberto')
                                                @php($color = '#d9534f')
                                            @else
                                                @php($situacao = 'Pago')
                                                @php($color = '#58af9c')
                                            @endif

                                            <td class="situacoes" style="color:{{ $color }}"
                                                id="situacao-tabela">
                                                {{ $situacao }}</td>
                                            <td>
                                                <a class="btn btn-outline-success" href="">Pago</a>
                                                <button id="" style="margin: 0 5px 0 5px;" type="button"
                                                    class="btn btn-outline-primary" data-toggle="modal"
                                                    data-target="#modalAlterar" onclick="">Alterar</button>
                                                <a href="#modalExcluir-{{$conta->id}}" class="btn btn-outline-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalExcluir-{{$conta->id}}">Excluir</a>
                                                    @include('../components.modal_excluir')
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="?pagina=1" tabindex="-1">Anterior</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(atual)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="">Próximo</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="div" id="div-totais">
                <div class="card text-center">
                    <div class="titulo card-header bg-dark text-light">
                        <strong>TOTAIS</strong>
                    </div>
                    <div class="card-body">

                        <div class="card border-primary mb-3">
                            <div class="bg-primary text-light card-header border-primary"><strong>SALÁRIO</strong></div>
                            <div class="card-body text-primary">
                                <h5 id="salario" class="card-title">R$ 5.000,00</h5>
                            </div>
                        </div>

                        <div class="card border-danger  mb-3">
                            <div class="bg-danger  text-light card-header border-danger "><strong>TOTAL CONTAS</strong>
                            </div>
                            <div class="card-body text-danger">
                                <h5 id="total-contas" class="card-title">

                                </h5>
                            </div>
                        </div>

                        <div class="card border-warning   mb-3">
                            <div class="bg-warning   text-light card-header border-warning  ">
                                <strong>DISPONÍVEL</strong>
                            </div>
                            <div class="card-body text-warning">
                                <h5 id="saldo-disponivel" class="card-title"></h5>
                            </div>
                        </div>

                        <div class="card border-success   mb-3">
                            <div class="bg-success   text-light card-header border-success  "><strong>TOTAL
                                    PAGO</strong>
                            </div>
                            <div class="card-body text-success">
                                <h5 id="total-pago" class="card-title"></h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/custom.js') }}"></script>

</x-layout>

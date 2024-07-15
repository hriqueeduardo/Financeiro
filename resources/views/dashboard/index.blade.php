<x-layout title="Dashboard">

    <header class="bg-dark">
        <div>
            <h2 id="titulo">Controle Financeiro</h2>
            <span id="span-usuario">Bem vindo {{ Auth::user()->usuario }} <a href="{{ route('logout.destroy') }}" id="btn-sair" class="btn btn-danger">Sair</a> </span>
        </div>
    </header>

    <x-modal_adicionar></x-modal_adicionar>


    <div style="margin-left: 18px;" class="div" id="div-tabela">
        <div class="card text-center">
            <div class="titulo card-header bg-dark text-light">
                <strong>CONTAS A PAGAR</strong>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2" style="margin: 0;">
                    <div class="input-group mb-3" style="margin: 0 20px;">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Mês</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
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
                <div class="form-group col-md-2" style="margin: 0;">
                    <div class="input-group" style="margin-left: 40px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Ano</span>
                        </div>
                        <input type="text" class="form-control" maxlength="4">
                    </div>
                </div>
                <div class="form-group col-md-2" style="margin: 0;">
                    <button type="button" class="btn btn-primary col-sm-6">Filtrar</button>
                </div>
                <div class="form-group col-md-6" style="margin: 0;">
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
                            <tr id="dados">
                                <th scope="row"> </th>
                                <td> </td>
                                <td class="valor-tabela" id="valor-tabela"></td>
                                <td class="situacoes" style="" id="td-situacao"> </td>
                                <td>
                                    <a class="btn btn-outline-success"
                                        href="">Pago</a>
                                    <button id="" style="margin: 0 5px 0 5px;" type="button"
                                        class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#modalAlterar"
                                        onclick="">Alterar</button>
                                    <button id="btn-excluir" class="btn btn-outline-danger"
                                        data-id="">Excluir</button>
                                </td>
                            </tr>
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

    <!-- Modal Confirmação de exclusão -->
    <div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="excluirModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="excluirModalLabel">Excluir item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir o item ?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                    <a id="confirma-exclusao" class="btn btn-danger delete-yes" href="">Confirmar</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de alteração -->
    <div class="modal fade bd-example-modal-lg" id="modalAlterar" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="">Alterar Registro</h5>
                </div>
                <div class="modal-body">
                    <form action="alterar.php" method="post">
                        <div class="row">
                            <div class="form-group col-md-4 mb-2">
                                <label for="alterarCodigo">Código</label>
                                <input style="background: #d3d3d3;" type="text" class="form-control"
                                    id="alterarCodigo" name="alterarCodigo" readonly>
                            </div>
                            <div class="form-group col-md-8 mb-2">
                                <label for="alterarDescricao">Descrição</label>
                                <select id="alterarDescricao" name="alterarDescricao" class="form-control"
                                    onchange="Verifica(this.value)">
                                    <option>Cartão Nubank</option>
                                    <option>Cartão Neon</option>
                                    <option>Cartão PicPay</option>
                                    <option>Cartão Santander</option>
                                    <option>Cartão Magalu</option>
                                    <option>Cartão Renner</option>
                                    <option>Cartão Avenida</option>
                                    <option>Cartão Havan</option>
                                    <option>Cartão Vuon</option>
                                    <option>Claro</option>
                                    <option value="10">Outros</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="alterarOutros">Outros</label>
                                <input type="text" class="form-control" id="alterarOutros" name="alterarOutros"
                                    placeholder="Descrição" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="alterarValor">Valor</label>
                                <input type="text" class="form-control" id="alterarValor" name="alterarValor">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="alterarSituacao">Situação</label>
                                <select class="form-control" id="alterarSituacao" name="alterarSituacao">
                                    <option>Em aberto</option>
                                    <option>Pago</option>
                                </select>
                            </div>
                        </div>
                        <div style="margin-top: 20px;" class="modal-footer">
                        </div>
                        <div style="float: right;">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
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
                    <div class="bg-warning   text-light card-header border-warning  "><strong>DISPONÍVEL</strong></div>
                    <div class="card-body text-warning">
                        <h5 id="saldo-disponivel" class="card-title"></h5>
                    </div>
                </div>

                <div class="card border-success   mb-3">
                    <div class="bg-success   text-light card-header border-success  "><strong>TOTAL PAGO</strong></div>
                    <div class="card-body text-success">
                        <h5 id="total-pago" class="card-title"></h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>

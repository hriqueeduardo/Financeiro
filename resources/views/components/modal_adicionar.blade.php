@vite(['resources/css/modal-adicionar.css'])

<!-- modal de adicionar contas -->
<div class="modal fade bd-example-modal-lg" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar uma conta</h5>
                <button type="button" class="close d-flex" data-bs-dismiss="modal" aria-bs-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="inserir.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="descricao">Descrição</label>
                            <select id="descricao" name="descricao" class="form-control" onchange="">
                                <option selected>Selecione...</option>
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
                    <div class="form-group">
                        <label for="outros">Outros</label>
                        <input type="text" class="form-control" id="outros" name="outros" placeholder="Descrição"
                            disabled>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="valor">Valor</label>
                                <input type="text" class="form-control" id="valor" name="valor"
                                    placeholder="R$ 0,00" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="situacao">Situação</label>
                            <select id="situacao" name="situacao" class="form-control">
                                <option selected>Selecione...</option>
                                <option>Em aberto</option>
                                <option>Pago</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="vencimento">Data Vencimento</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                                        <path
                                            d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z">
                                        </path>
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z">
                                        </path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="vencimento" name="vencimento">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button style="margin-right: 5px;" type="submit" class="btn btn-primary" data-toggle="modal"
                            data-target="#cadastrado">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
                                    <input type="text" class="form-control" id="alterarOutros"
                                        name="alterarOutros" placeholder="Descrição" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="alterarValor">Valor</label>
                                    <input type="text" class="form-control" id="alterarValor"
                                        name="alterarValor">
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
                                <div style="float: right;">
                                    <button type="button" class="btn btn-danger"
                                        data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<!-- modal de detalhes da contas -->
<div class="modal modal-lg flex" id="modalVisualizar-{{ $conta->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Detalhes da conta</h5>
                <button type="button" class="btn-close bg-light-subtle" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @if ($conta->descricao === '10')
                    @php($descricao = $conta->descricao_outro)
                @else
                    @php($descricao = $conta->descricao)                    
                @endif

                @if ($conta->situacao === 0)
                    @php($situacao = 'Em aberto')
                @else
                    @php($situacao = 'Pago')
                @endif

                <p><span class="texto">Descrição: </span> {{ $descricao }}</p>
                <p><span class="texto">Valor: </span> {{ 'R$ ' . number_format($conta->valor, 2, ',', '.') }}</p>
                <p><span class="texto">Data Vencimento: </span> {{ Carbon\Carbon::parse($conta->data_vencimeto)->format('d/m/Y') }}</p>
                <p><span class="texto">Situação: </span> {{ $situacao }}</p>
                <p class="mb-5"><span class="texto">Descrição detalhada: </span> {{ $conta->descricao_detalhada }}</p>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>


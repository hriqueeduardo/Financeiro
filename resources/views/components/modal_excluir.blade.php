
        <!-- Modal Confirmação de exclusão -->
        <div class="modal fade" id="modalExcluir-{{$conta->id}}" tabindex="-1" role="dialog" aria-bs-labelledby="excluirModalLabel"
            aria-bs-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white" id="excluirModalLabel">Excluir item</h5>
                        <button type="button" class="btn-close bg-light-subtle" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir o item ? 

                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('dashboard.destroy', $conta->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-danger">Confirmar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
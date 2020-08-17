<!-- Button trigger modal -->
<a href="#" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#modalEliminar{{ $item->id }}">
  borrar
</a>

<!-- Modal -->
<div class="modal fade" id="modalEliminar{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('modelNotes.destroy',$item) }}" method="post">
        @csrf
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Eliminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Solo los creadores de la nota pueden borrar una nota, esta acción no puede des hacerse...
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
        </form>
    </div>
</div>

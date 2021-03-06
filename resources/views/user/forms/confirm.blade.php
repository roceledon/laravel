<!-- Modal -->
<div class="modal fade" id="myModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Eliminar usuario {{$user->name}}</h4>
            </div>
            <div class="modal-body text-justify">
                ¿Estas seguro de eliminar al usuario {{$user->name}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Cancelar</button>
                <button type="submit" class="btn btn-danger" ><i class="fa fa-minus-circle"></i> Eliminar</button>
            </div>
        </div>
    </div>
</div>
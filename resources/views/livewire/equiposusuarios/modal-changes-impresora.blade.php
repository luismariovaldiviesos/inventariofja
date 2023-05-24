<div wire:ignore.self id="modalChangesImp" class="modal" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">
                    <b class="text-theme-1">{{$af}}</b>
                </h2>
            </div>

            <div class="modal-body grid gap-4">
                <div class="row">
                    <div class="col-sm-12">
                        <b>OBSERVACIONES IMPRESORA</b>
                        <textarea id="observacionesIMP" cols="30" rows="10" class="form-control kioskboard"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer text-right">
                <button onclick="closeModalImp()" class="btn btn-outline-secondary mr-5">Cerrar Ventana</button>

                <button type="button" wire:click.prevent="addObservacionesImp(document.getElementById('observacionesIMP').value)" class="btn btn-primary">Aplicar Cambios</button>
            </div>

        </div>
    </div>
</div>

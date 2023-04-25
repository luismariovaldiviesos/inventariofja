<div wire:ignore.self id="modalChanges" class="modal" data-backdrop="static" tabindex="-1">
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
                        <b>OBSERVACIONES AL ACTIVO FIJO</b>
                        <textarea id="observaciones" cols="30" rows="10" class="form-control kioskboard"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer text-right">
                <button onclick="closeModal()" class="btn btn-outline-secondary mr-5">Cerrar Ventana</button>
                {{-- @if(strlen($observaciones) >0)
                <button wire:click.prevent="removeChanges" class="btn btn-outline-primary mr-5">Quitar Cambios</button>
                @endif --}}
                <button type="button" wire:click.prevent="addObservaciones(document.getElementById('observaciones').value)" class="btn btn-primary">Aplicar Cambios</button>
            </div>

        </div>
    </div>
</div>

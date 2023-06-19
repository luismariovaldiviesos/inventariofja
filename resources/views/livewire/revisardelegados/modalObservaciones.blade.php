<div wire:ignore.self id="modalObservaciones" class="modal" data-backdrop="static" tabindex="-1">

    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title text-white">
                <b>Detalle </b>
            </h5>
            <h6 class="text-center text-warning" wire:loading>POR FAVOR ESPERE</h6>
          </div>
          <div class="modal-body">

            <div class="table-responsive">
              <table class="table table-bordered table striped mt-1">
                <thead class="text-white" style="background: #3B3F5C">
                  <tr>
                    <th class="table-th text-white text-center">ID</th>
                    <th class="table-th text-white text-center">OBSERVACION</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($oberservaciones as $d)
                  <tr>
                    <td class='text-center'><h6>{{$d->id}}</h6></td>
                    <td class='text-center'><h6>{{$d->observation}}</h6></td>


                  </tr>
                  @endforeach
                </tbody>
                <tfoot>

                </tfoot>
              </table>
            </div>




          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark close-btn text-info" data-dismiss="modal">CERRAR</button>
          </div>
        </div>
      </div>
</div>

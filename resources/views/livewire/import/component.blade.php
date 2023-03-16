<div>

    @if (!$form)

    <div class="row sales layout-top-spacing">

        <div class="col-sm-12">
            <div class="widget widget-chart-one">
                <div class="widget-heading">
                    <h4 class="card-title">
                        <b>Módulo de Importar Catálogos</b>
                    </h4>

                </div>


                <div class="widget-content">
                    {{-- <div class="row">
                        <div class="col-sm-12 col-md-11">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileCategories" accept=".xlsx, .xls,">
                                <label class="custom-file-label">Buscar excel CATEGORIAS</label>
                                @error('fileCategories') <span class="text-danger er">{{ $message}}</span>@enderror

                            </div>



                        </div>
                        <div class="col-sm-12 col-md-1 text-right">
                            <button wire:click.prevent="uploadCategories()" class="btn btn-dark" {{$fileCategories =='' ? 'disabled' : ''}}>Importar</button>
                        </div>
                    </div> --}}

                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-11">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="filePcs" accept=".xlsx, .xls,">
                                    @error('filePcs')
                                        <span class="text-danger er">{{ $message}}</span>
                                    @enderror
                                <div class="col-sm-12 col-md-1 text-right">
                                    <button wire:click.prevent="cargaPCS()" {{$filePcs =='' ? 'disabled' : ''}} class="btn btn-dark">Importar</button>
                                </div>
                            </div>

                        </div>

                    </div>




                </div>


            </div>


        </div>


    </div>

    @else

        {{-- @include('livewire.cantones.form') --}}

    @endif

    {{-- @include('livewire.sales.keyboard') --}}


    {{-- para el buscador  --}}
    <script>
         document.addEventListener('click', (e) => {
            if(e.target.id == 'search'){
                KioskBoard.run('#search', {})

                // para no hacer click fuera click dentro
                document.getElementById('search').blur()
                document.getElementById('search').focus()

                const inputSearch = document.getElementById('search')
                inputSearch.addEventListener('change', (e) => {
                 @this.search = e.target.value  // iguala lo que esta en id search con search del comoponente
                 })

            }
        })


    </script>

</div>

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

                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-11">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="filePcs" accept=".xlsx, .xls,">
                                    @error('filePcs')
                                        <span class="text-danger er">{{ $message}}</span>
                                    @enderror
                                    <button wire:click.prevent="cargaPCS()" {{$filePcs =='' ? 'disabled' : ''}} class="btn btn-dark">Carga PC</button>

                            </div>

                        </div>

                    </div>

                     <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileLaptops" accept=".xlsx, .xls,">
                                    @error('fileLaptops') <span class="text-danger er">{{ $message}}</span>@enderror <br>
                                <button wire:click.prevent="cargaLaptops()" class="btn btn-dark" {{$fileLaptops =='' ? 'disabled' : ''}}>Carga Laptops</button>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileImpresoras" accept=".xlsx, .xls,">
                                    @error('fileImpresoras') <span class="text-danger er">{{ $message}}</span>@enderror <br>
                                <button wire:click.prevent="cargaImpresoras()" class="btn btn-dark" {{$fileImpresoras =='' ? 'disabled' : ''}}>Carga Impresoras</button>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileMonitores" accept=".xlsx, .xls,">
                                    @error('fileMonitores') <span class="text-danger er">{{ $message}}</span>@enderror <br>
                                <button wire:click.prevent="cargaMonitores()" class="btn btn-dark" {{$fileMonitores =='' ? 'disabled' : ''}}>Carga MOnitores</button>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileTeclados" accept=".xlsx, .xls,">
                                    @error('fileTeclados') <span class="text-danger er">{{ $message}}</span>@enderror <br>
                                <button wire:click.prevent="cargaTeclados()" class="btn btn-dark" {{$fileTeclados =='' ? 'disabled' : ''}}>Carga Teclados</button>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileratones" accept=".xlsx, .xls,">
                                    @error('fileratones') <span class="text-danger er">{{ $message}}</span>@enderror <br>
                                <button wire:click.prevent="cargaRatones()" class="btn btn-dark" {{$fileratones =='' ? 'disabled' : ''}}>Carga Mouse</button>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileTelefonos" accept=".xlsx, .xls,">
                                    @error('fileTelefonos') <span class="text-danger er">{{ $message}}</span>@enderror <br>
                                <button wire:click.prevent="cargaTelefonos()" class="btn btn-dark" {{$fileTelefonos =='' ? 'disabled' : ''}}>Carga Telefonos</button>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input form-control" wire:model="fileScanners" accept=".xlsx, .xls,">
                                    @error('fileScanners') <span class="text-danger er">{{ $message}}</span>@enderror <br>
                                <button wire:click.prevent="cargaScanners()" class="btn btn-dark" {{$fileScanners =='' ? 'disabled' : ''}}>Carga Scanners</button>
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

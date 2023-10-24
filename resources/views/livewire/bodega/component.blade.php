<div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
    <div class="intro-y col-span-12 lg:col-span-9">
        <h2 class="text-lg font-medium text-center text-theme-1 py-4">
            EQUIPOS ASIGNADOS
        </h2>
        <div class="post intro-y overflow-hidden box">
            <div class="post__tabs nav nav-tabs flex-col sm:flex-row bg-gray-300 dark:bg-dark-2 text-gray-600" role="tablist">

                <a wire:click="setTabActive('tabPcs')"
                title="Productos Agregados"
                data-toggle="tab"
                data-target="#tabPcs"
                href="javascript:;"
                class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabPcs ? 'active' : '' }}"
                id="content-tab"
                role="tab" >
                <i class="fas fa-list mr-2"></i>PCS
                </a>

                <a wire:click="setTabActive('tabLaptops')"
                    title="Seleccionar Categoría"
                    data-toggle="tab" data-target="#tabLaptops"
                    href="javascript:;"
                    class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabLaptops ? 'active' : '' }}"
                    id="meta-title-tab" role="tab" aria-selected="false">
                    <i class="fas fa-th-large mr-2"></i> LAPTOPS
                </a>

                <a wire:click="setTabActive('tabMonitores')"
                title="Seleccionar Categoría"
                data-toggle="tab" data-target="#tabMonitores"
                href="javascript:;"
                class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabMonitores ? 'active' : '' }}"
                id="meta-title-tab" role="tab" aria-selected="false">
                <i class="fas fa-th-large mr-2"></i> MONITORES
                </a>

                <a wire:click="setTabActive('tabTeclados')"
                title="Seleccionar Categoría"
                data-toggle="tab" data-target="#tabTeclados"
                href="javascript:;"
                class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabTeclados ? 'active' : '' }}"
                id="meta-title-tab" role="tab" aria-selected="false">
                <i class="fas fa-th-large mr-2"></i> TECLADOS
                </a>

                <a wire:click="setTabActive('tabMouses')"
                title="Seleccionar Categoría"
                data-toggle="tab" data-target="#tabMouses"
                href="javascript:;"
                class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabMouses ? 'active' : '' }}"
                id="meta-title-tab" role="tab" aria-selected="false">
                <i class="fas fa-th-large mr-2"></i> MOUSE
                </a>
                <a wire:click="setTabActive('tabTelefonos')"
                title="Seleccionar Categoría"
                data-toggle="tab" data-target="#tabTelefonos"
                href="javascript:;"
                class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabTelefonos ? 'active' : '' }}"
                id="meta-title-tab" role="tab" aria-selected="false">
                <i class="fas fa-th-large mr-2"></i> TELEFONOS
                </a>
                <a wire:click="setTabActive('tabScanners')"
                title="Seleccionar Categoría"
                data-toggle="tab" data-target="#tabScanners"
                href="javascript:;"
                class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabScanners ? 'active' : '' }}"
                id="meta-title-tab" role="tab" aria-selected="false">
                <i class="fas fa-th-large mr-2"></i> SCANNERS
                </a>
                <a wire:click="setTabActive('tabImpresoras')"
                title="Seleccionar Categoría"
                data-toggle="tab" data-target="#tabImpresoras"
                href="javascript:;"
                class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center {{$tabImpresoras ? 'active' : '' }}"
                id="meta-title-tab" role="tab" aria-selected="false">
                <i class="fas fa-th-large mr-2"></i> IMPRESORAS
                </a>

            </div>

            <div class="post__content tab-content">


                {{-- PCS --}}

                <div id="tabPcs" class="tab-pane {{$tabPcs ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pcs as $pc )
                                            <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">

                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $pc->serie }}</h6>

                                                </td>

                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $pc->af }}</h6>
                                                </td>
                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $pc->modelo->nombre }}</h6>
                                                </td>
                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $pc->modelo->marca->nombre }}</h6>
                                                </td>
                                               
                                                

                                            </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY LAPTOPS REGISTRADAS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- FIN PCS --}}



                {{-- LAPTOPS --}}

                <div id="tabLaptops" class="tab-pane  {{$tabLaptops ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">

                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($laptops as $laptop )
                                            <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">

                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $laptop->serie }}</h6>

                                                </td>

                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $laptop->af }}</h6>
                                                </td>
                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $laptop->modelo->nombre }}</h6>
                                                </td>
                                                <td class="dark:border-dark-5">
                                                    <h6 class="mb-1 font-medium">{{ $laptop->modelo->marca->nombre }}</h6>
                                                </td>
                                               
                                                

                                            </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY LAPTOPS REGISTRADAS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>






                            </div>
                        </div>
                    </div>
                </div>

                {{-- FIN LAPTOPS --}}


                {{-- MONITORES --}}

                <div id="tabMonitores" class="tab-pane  {{$tabMonitores ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">

                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                        </tr>                            
                                    </thead>
                                    <tbody>
                                        @forelse ($monitores as $monitor )
                                        <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">
                                            <td class="dark:border-dark-5">
                                              <h6 class="mb-1 font-medium">{{ $monitor->serie }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $monitor->af }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $monitor->marca->nombre }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $monitor->marca->modelo }}</h6>
                                            </td>
                                      </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY MONITORES REGISTRADOS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>






                            </div>
                        </div>
                    </div>
                </div>

                {{-- FIN MONITORES   --}}

                 {{-- teclados --}}

                 <div id="tabTeclados" class="tab-pane  {{$tabTeclados ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">

                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                          <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                        </tr>                            
                                    </thead>
                                    <tbody>
                                        @forelse ($teclados as $teclado )
                                        <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">
                                            <td class="dark:border-dark-5">
                                              <h6 class="mb-1 font-medium">{{ $teclado->serie }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $teclado->af }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $teclado->marca->nombre }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $teclado->marca->modelo }}</h6>
                                            </td>
                                      </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY TECLADOS REGISTRADOS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- fin teclads   --}}


                 {{-- mouses --}}

                 <div id="tabMouses" class="tab-pane  {{$tabMouses ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                          </tr>  
                                    </thead>
                                    <tbody>
                                        @forelse ($mouses as $mouse )
                                        <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">
                                            <td class="dark:border-dark-5">
                                              <h6 class="mb-1 font-medium">{{ $mouse->serie }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $mouse->af }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $mouse->marca->nombre }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $mouse->marca->modelo }}</h6>
                                            </td>
                                      </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY RATONES REGISTRADOS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- fin mouese   --}}

                  {{-- telefonos --}}

                  <div id="tabTelefonos" class="tab-pane  {{$tabTelefonos ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                          </tr>                            
                                    </thead>
                                    <tbody>
                                        @forelse ($telefonos as $telefono )
                                        <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">
                                            <td class="dark:border-dark-5">
                                              <h6 class="mb-1 font-medium">{{ $telefono->serie }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $telefono->af }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $telefono->modelo->nombre }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $telefono->modelo->marca->nombre }}</h6>
                                            </td>
                                      </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY TELEFONOS REGISTRADOS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- fin telefonos   --}}

                 {{-- scanner --}}

                 <div id="tabScanners" class="tab-pane  {{$tabScanners ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                          </tr> 
                                    </thead>
                                    <tbody>
                                        @forelse ($scanners as $scanner )
                                        <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">
                                            <td class="dark:border-dark-5">
                                              <h6 class="mb-1 font-medium">{{ $scanner->serie }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $scanner->af }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $scanner->modelo->nombre }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $scanner->modelo->marca->nombre }}</h6>
                                            </td>
                                      </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY SACNNERS REGISTRADOS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- fin SCANNER   --}}

                 {{-- scanner --}}

                 <div id="tabImpresoras" class="tab-pane  {{$tabImpresoras ? 'active' : '' }}" role="tabpanel" aria-labelledby="content-tab">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                        <tr class="text-theme-1">
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA</th>
                                          </tr> 
                                    </thead>
                                    <tbody>
                                        @forelse ($impresoras as $impresora )
                                        <tr class=" dark:bg-dark-1 {{ $loop->index % 2> 0 ? 'bg-gray-200' : '' }}">
                                            <td class="dark:border-dark-5">
                                              <h6 class="mb-1 font-medium">{{ $impresora->serie }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $impresora->af }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $impresora->modelo->nombre }}</h6>
                                            </td>
                                            <td class="dark:border-dark-5">
                                                <h6 class="mb-1 font-medium">{{ $impresora->modelo->marca->nombre }}</h6>
                                            </td>
                                      </tr>
                                        @empty
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <td colspan="2">
                                                    <h6 class="text-center">NO HAY IMPRESORAS REGISTRADAS </h6>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- fin SCANNER   --}}

            </div>
        </div>

    </div>

    <div class="col-span-12 lg:col-span-3">
        <div class="intro-y box p-5">
            <div>
                <h2 class="text-2xl text-center mb-3">TOTAL EN BODEGA</h2>
            </div>

            {{-- azul amarikilo y rojo  --}}
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">PCS</h1>
                @if ($totpcs <=5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$totpcs}}</small>
                </button>
                @elseif ($totpcs >= 5 && $totpcs <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$totpcs}}</small>
                </button>
                @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$totpcs}}</small>
                </button>
                @endif

            </div>
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">LAPTOPS</h1>
                @if ($totlaptops < 5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$totlaptops}}</small>
                </button>

                @elseif ($totlaptops >= 5 && $totlaptops <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$totlaptops}}</small>
                </button>
                @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$totlaptops}}</small>
                </button>
                @endif
            </div>
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">MONITORES</h1>
                @if ($totmonitores < 5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$totmonitores}}</small>
                </button>
               @elseif ($totmonitores >= 5 && $totmonitores <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$totmonitores}}</small>
                </button>
                @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$totmonitores}}</small>
                </button>
                @endif
            </div>
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">TECLADOS</h1>
                @if ($totteclados < 5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$totteclados}}</small>
                </button>
                @elseif ($totteclados >= 5 && $totteclados <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$totteclados}}</small>
                </button>
                @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$totteclados}}</small>
                </button>
                @endif
            </div>
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">MOUSES</h1>
                @if ($totmouses < 5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$totmouses}}</small>
                </button>
                @elseif ($totmouses >= 5 && $totmouses <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$totmouses}}</small>
                </button>
                @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$totmouses}}</small>
                </button>
                @endif
            </div>
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">TELEFONOS</h1>
                @if ($tottelefonos < 5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$tottelefonos}}</small>
                </button>
               @elseif ($tottelefonos >= 5 && $tottelefonos <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$tottelefonos}}</small>
                </button>
               @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$tottelefonos}}</small>
                </button>
                @endif
            </div>
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">SCANNERS</h1>
                @if ($totscanners < 5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$totscanners}}</small>
                </button>
               @elseif ($totscanners >= 5 && $totscanners <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$totscanners}}</small>
                </button>
               @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$totscanners}}</small>
                </button>
                @endif
            </div>
            <div class="mt-3">
                <h1 class="text-2x1 font-bold">IMPRESORAS</h1>
                @if ($totimpresoras < 5)
                <button class="btn btn-primary text-white" type="button">
                    <small class="font-normal">{{$totimpresoras}}</small>
                </button>
               @elseif ($totimpresoras >= 5 && $totimpresoras <=10)
                <button class="btn btn-warning text-white" type="button">
                    <small class="font-normal">{{$totimpresoras}}</small>
                </button>
              @else
                <button class="btn btn-danger text-white" type="button">
                    <small class="font-normal">{{$totimpresoras}}</small>
                </button>
                @endif
            </div>

        </div>
    </div>


    {{-- @include('livewire.revisardelegados.modalObservaciones')
    @include('livewire.revisardelegados.script')
    @include('livewire.usuariosaf.modal-customers')
    @include('livewire.usuariosaf.script') --}}




</div>

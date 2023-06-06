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
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >USUARRIO REPORTA</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >OBSERVACIONES</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >ASIGNAR</th>
                                                {{-- <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >NOVEDAD </th> --}}

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
                                                        <h6 class="mb-1 font-medium">{{ $pc->usuario }}</h6>
                                                    </td>
                                                    <td class="dark:border-dark-5">
                                                        {{-- <h6 class="mb-1 font-medium">{{ $pc->observacion }}</h6> --}}
                                                        <button wire:click.prevent="getDetails({{$pc->id}})"
                                                            class="btn btn-dark btn-sm">
                                                            <i class="fas fa-list"></i>
                                                        </button>
                                                    </td>
                                                    <td class="dark:border-dark-5 text-center">
                                                        <div class="d-flex justify-content-center">

                                                            {{-- <button onclick="openModal({{ $pc->id }})"
                                                                class="btn btn-success fas fa-search  mb-3">
                                                             </button>&nbsp --}}
                                                             <button onclick="openModalCustomer()" class="btn btn-outline-dark w-full mb-3">
                                                                {{$usuarioSelected}}
                                                            </button>


                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                                wire:click.prevent="aceptaActivo({{ $pc->id }})"
                                                                type="button">
                                                                <i class="fas fa-thumbs-up"></i>&nbsp
                                                                <small class="font-normal">OK</small>
                                                                </button>




                                                        </div>
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr class="bg-gray-200 dark:bg-dark-1">
                                                    <td colspan="2">
                                                        <h6 class="text-center">NO HAY PC REGISTRADOS </h6>
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
                                            <tr class="text-theme-6">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >INVENTARIO</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($laptops as $laptop)
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

                                                <td class="dark:border-dark-5 text-center">

                                                    <div class="d-flex justify-content-center">

                                                        @if ($laptop->inventariado == false && $laptop->revisar_delegado == false)
                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                            wire:click.prevent="aceptLaptop({{ $laptop->id }})"
                                                            type="button">
                                                            <i class="fas fa-thumbs-up"></i>&nbsp
                                                            <small class="font-normal">aceptar</small>
                                                            </button>

                                                            <button onclick="openModalLaptop({{ $laptop->id }})"
                                                            class="btn btn-danger fas fa-thumbs-down  mb-3">
                                                            </button>&nbsp


                                                        @endif
                                                        @if ($laptop->inventariado == true && $laptop->revisar_delegado == false)
                                                            <button class="btn btn-success text-white border-0 ml-3"
                                                            type="button">
                                                           VALIDADO
                                                            </button>
                                                        @endif
                                                        @if ($laptop->inventariado == false && $laptop->revisar_delegado == true)
                                                        <button class="btn btn-dark text-white border-0 ml-3"
                                                        type="button">
                                                            REVISAR DELEGADO
                                                        </button>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO TIENE LAPTOPS A SU CARGO</td>
                                            </tr>
                                            @endforelse
                                        </tbody> --}}
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
                                            <tr class="text-theme-6">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >INVENTARIO</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($monitores  as $monitor)
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

                                                <td class="dark:border-dark-5 text-center">

                                                    <div class="d-flex justify-content-center">

                                                        @if ($monitor->inventariado == false && $monitor->revisar_delegado == false)
                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                            wire:click.prevent="aceptMonitor({{ $monitor->id }})"
                                                            type="button">
                                                            <i class="fas fa-thumbs-up"></i>&nbsp
                                                            <small class="font-normal">aceptar</small>
                                                            </button>

                                                            <button onclick="openModalMonitor({{ $monitor->id }})"
                                                            class="btn btn-danger fas fa-thumbs-down  mb-3">
                                                            </button>&nbsp


                                                        @endif
                                                        @if ($monitor->inventariado == true && $monitor->revisar_delegado == false)
                                                            <button class="btn btn-success text-white border-0 ml-3"
                                                            type="button">
                                                           VALIDADO
                                                            </button>
                                                        @endif
                                                        @if ($monitor->inventariado == false && $monitor->revisar_delegado == true)
                                                        <button class="btn btn-dark text-white border-0 ml-3"
                                                        type="button">
                                                            REVISAR DELEGADO
                                                        </button>
                                                        @endif
                                                    </div>
                                                </td>


                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO TIENE MONITORES A SU CARGO</td>
                                            </tr>
                                            @endforelse --}}
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
                                            <tr class="text-theme-6">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >INVENTARIO</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($teclados  as $teclado)
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

                                                <td class="dark:border-dark-5 text-center">

                                                    <div class="d-flex justify-content-center">

                                                        @if ($teclado->inventariado == false && $teclado->revisar_delegado == false)
                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                            wire:click.prevent="aceptTeclado({{ $teclado->id }})"
                                                            type="button">
                                                            <i class="fas fa-thumbs-up"></i>&nbsp
                                                            <small class="font-normal">aceptar</small>
                                                            </button>

                                                            <button onclick="openModalTeclado({{ $teclado->id }})"
                                                            class="btn btn-danger fas fa-thumbs-down  mb-3">
                                                            </button>&nbsp


                                                        @endif
                                                        @if ($teclado->inventariado == true && $teclado->revisar_delegado == false)
                                                            <button class="btn btn-success text-white border-0 ml-3"
                                                            type="button">
                                                           VALIDADO
                                                            </button>
                                                        @endif
                                                        @if ($teclado->inventariado == false && $teclado->revisar_delegado == true)
                                                        <button class="btn btn-dark text-white border-0 ml-3"
                                                        type="button">
                                                            REVISAR DELEGADO
                                                        </button>
                                                        @endif
                                                    </div>
                                                </td>


                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO TIENE TECLADOS A SU CARGO</td>
                                            </tr>
                                            @endforelse --}}
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
                                            <tr class="text-theme-6">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MARCA </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >INVENTARIO</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($mouses  as $mouse)
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

                                                <td class="dark:border-dark-5 text-center">

                                                    <div class="d-flex justify-content-center">

                                                        @if ($mouse->inventariado == false && $mouse->revisar_delegado == false)
                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                            wire:click.prevent="aceptRaton({{ $mouse->id }})"
                                                            type="button">
                                                            <i class="fas fa-thumbs-up"></i>&nbsp
                                                            <small class="font-normal">aceptar</small>
                                                            </button>

                                                            <button onclick="openModalRaton({{ $mouse->id }})"
                                                            class="btn btn-danger fas fa-thumbs-down  mb-3">
                                                            </button>&nbsp


                                                        @endif
                                                        @if ($mouse->inventariado == true && $mouse->revisar_delegado == false)
                                                            <button class="btn btn-success text-white border-0 ml-3"
                                                            type="button">
                                                           VALIDADO
                                                            </button>
                                                        @endif
                                                        @if ($mouse->inventariado == false && $mouse->revisar_delegado == true)
                                                        <button class="btn btn-dark text-white border-0 ml-3"
                                                        type="button">
                                                            REVISAR DELEGADO
                                                        </button>
                                                        @endif
                                                    </div>
                                                </td>


                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO TIENE MOUESE A SU CARGO</td>
                                            </tr>
                                            @endforelse --}}
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
                                            <tr class="text-theme-6">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >INVENTARIO</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($telefonos  as $telefono)
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
                                                <td class="dark:border-dark-5 text-center">

                                                    <div class="d-flex justify-content-center">

                                                        @if ($telefono->inventariado == false && $telefono->revisar_delegado == false)
                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                            wire:click.prevent="aceptTelefono({{ $telefono->id }})"
                                                            type="button">
                                                            <i class="fas fa-thumbs-up"></i>&nbsp
                                                            <small class="font-normal">aceptar</small>
                                                            </button>

                                                            <button onclick="openModalTelefono({{ $telefono->id }})"
                                                            class="btn btn-danger fas fa-thumbs-down  mb-3">
                                                            </button>&nbsp


                                                        @endif
                                                        @if ($telefono->inventariado == true && $telefono->revisar_delegado == false)
                                                            <button class="btn btn-success text-white border-0 ml-3"
                                                            type="button">
                                                           VALIDADO
                                                            </button>
                                                        @endif
                                                        @if ($telefono->inventariado == false && $telefono->revisar_delegado == true)
                                                        <button class="btn btn-dark text-white border-0 ml-3"
                                                        type="button">
                                                            REVISAR DELEGADO
                                                        </button>
                                                        @endif
                                                    </div>
                                                </td>


                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO TIENE MOUESE A SU CARGO</td>
                                            </tr>
                                            @endforelse --}}
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
                                            <tr class="text-theme-6">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >INVENTARIO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($scanners  as $scanner)
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
                                                <td class="dark:border-dark-5 text-center">

                                                    <div class="d-flex justify-content-center">

                                                        @if ($scanner->inventariado == false && $scanner->revisar_delegado == false)
                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                            wire:click.prevent="aceptScanner({{ $scanner->id }})"
                                                            type="button">
                                                            <i class="fas fa-thumbs-up"></i>&nbsp
                                                            <small class="font-normal">aceptar</small>
                                                            </button>

                                                            <button onclick="openModalScanner({{ $scanner->id }})"
                                                            class="btn btn-danger fas fa-thumbs-down  mb-3">
                                                            </button>&nbsp


                                                        @endif
                                                        @if ($scanner->inventariado == true && $scanner->revisar_delegado == false)
                                                            <button class="btn btn-success text-white border-0 ml-3"
                                                            type="button">
                                                           VALIDADO
                                                            </button>
                                                        @endif
                                                        @if ($scanner->inventariado == false && $scanner->revisar_delegado == true)
                                                        <button class="btn btn-dark text-white border-0 ml-3"
                                                        type="button">
                                                            REVISAR DELEGADO
                                                        </button>
                                                        @endif
                                                    </div>
                                                </td>


                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO TIENE SCANNER A SU CARGO</td>
                                            </tr>
                                            @endforelse --}}
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
                                            <tr class="text-theme-6">
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >SERIE</th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >ACTIVO FIJO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >MODELO </th>
                                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center" >INVENTARIO</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @forelse($impresoras  as $impresora)
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

                                                <td class="dark:border-dark-5 text-center">

                                                    <div class="d-flex justify-content-center">

                                                        @if ($impresora->inventariado == false && $impresora->revisar_delegado == false)
                                                            <button class="btn btn-primary text-white border-0 ml-3"
                                                            wire:click.prevent="aceptImpresora({{ $impresora->id }})"
                                                            type="button">
                                                            <i class="fas fa-thumbs-up"></i>&nbsp
                                                            <small class="font-normal">aceptar</small>
                                                            </button>

                                                            <button onclick="openModalImpresora({{ $impresora->id }})"
                                                            class="btn btn-danger fas fa-thumbs-down  mb-3">
                                                            </button>&nbsp


                                                        @endif
                                                        @if ($impresora->inventariado == true && $impresora->revisar_delegado == false)
                                                            <button class="btn btn-success text-white border-0 ml-3"
                                                            type="button">
                                                           VALIDADO
                                                            </button>
                                                        @endif
                                                        @if ($impresora->inventariado == false && $impresora->revisar_delegado == true)
                                                        <button class="btn btn-dark text-white border-0 ml-3"
                                                        type="button">
                                                            REVISAR DELEGADO
                                                        </button>
                                                        @endif
                                                    </div>
                                                </td>


                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">NO TIENE SCANNER A SU CARGO</td>
                                            </tr>
                                            @endforelse --}}
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
                    <h2 class="text-2xl text-center mb-3">Resumen de Inventario</h2>
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">ITEMS</h1>
                    {{-- <h4 class="text-2x5">{{$totpcs+$totlaptops+$totmonitores+ $totteclados+ $totmouses+ $tottelefonos+ $totscanners+ $totimpresoras}}</h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">PCS</h1>
                    {{-- <h4 class="text-2x1">{{$totpcs}}</h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">LAPTOP</h1>
                    {{-- <h4 class="text-2x1"> {{$totlaptops}}</h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">MONITORES</h1>
                    {{-- <h4 class="text-2x1"> {{$totmonitores}}</h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">TECLADOS</h1>
                    {{-- <h4 class="text-2x1"> {{$totteclados}}</h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">MOUSES</h1>
                    {{-- <h4 class="text-2x1"> {{$totmouses}}</h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">TELEFONOS</h1>
                    {{-- <h4 class="text-2x1"> {{$tottelefonos}}</h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">SCANNERS</h1>
                    {{-- <h4 class="text-2x1"> {{$totscanners}} </h4> --}}
                </div>
                <div class="mt-3">
                    <h1 class="text-2x1 font-bold">IMPRESORAS</h1>
                    {{-- <h4 class="text-2x1"> {{$totimpresoras}} </h4> --}}
                </div>

            </div>
        </div>

        {{-- @include('livewire.equiposusuarios.modal-changes')
        @include('livewire.equiposusuarios.modal-changes-laptop')
        @include('livewire.equiposusuarios.modal-changes-monitor')
        @include('livewire.equiposusuarios.modal-changes-teclado')
        @include('livewire.equiposusuarios.modal-changes-mouse')
        @include('livewire.equiposusuarios.modal-changes-telefono')
        @include('livewire.equiposusuarios.modal-changes-scanner')
        @include('livewire.equiposusuarios.modal-changes-impresora') --}}
        @include('livewire.revisardelegados.modalObservaciones')
        @include('livewire.revisardelegados.script')
        @include('livewire.usuariosaf.modal-customers')
        @include('livewire.usuariosaf.script')




    </div>

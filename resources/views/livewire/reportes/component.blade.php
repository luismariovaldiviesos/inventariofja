<div>
    <div class=" col-span-12">
        <div class="intro-y box">
            <h2 class="text-lg font-medium text-center text-theme-1 py-4">
                REPORTE DE INVENTARIO
            </h2>

            <div class="grid grid-cols-12 gap-5 p-5">

                <div class="col-span-12 sm:col-span-6 xl:col-span-3 ">
                    <div class="grid grid-cols-6">
                        <div class="col-end-2 bg-amber-500">

                            <select wire:model='tipo_id' class="form-select form-select-lg sm:mr-2">
                               <option>Elegir AF</option>
                               @foreach ($tipos as $tipo )
                               <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                @endforeach

                            </select>
                            @error('tipo_id')
                            <x-alert msg="{{ $message }}" />
                        @enderror
                        </div>
                    </div>
                </div>




                <div class="col-span-12 sm:col-span-6 xl:col-span-4 ">

                    <button wire:click.prevent="getReport" class="btn btn-primary " >Consultar</button>
                    {{-- <button wire:click.prevent="ReportPDF" class="btn btn-danger " >PDF</button> --}}
                    @if($tipo_id !=0)
                    <a class="btn btn-danger"
                        href="{{ url('reportexls' . '/' . $tipo_id) }}" target="_blank">Exportar a Excel</a>"
                    </a>
                    @endif
                </div>


            </div>

            <div class="p-5" id="striped-rows-table">
                <div class="preview">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr class="text-theme-1">
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">USUARIO</th>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">SERIE</th>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">ACTIVO FIJO</th>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap text-center">MODELO-MARCA</th>

                                </tr>
                            </thead>
                            <tbody>

                                {{-- @forelse ($orders as $order )
                                    <tr class="dark:bg-dark-1 {{$loop->index % 2 >0 ? 'bg-gray-200' : '' }} font-normal">
                                        <td class="text-center"> {{ $order->id }} </td>
                                        <td class="text-center"> ${{ number_format($order->total,2) }} </td>
                                        <td class="text-center"> {{ $order->items }} </td>
                                        <td class="text-center"> {{ $order->user->name }} </td>
                                        <td class="text-center"> {{ $order->customer->businame }} </td>
                                        <td class="text-center"> {{ $order->created_at }} </td>

                                        <td class="dark:border-dark-5 text-center">
                                            <button wire:click.prevent="rePrint({{ $order->id }})" type="button" class="ms-3 btn btn-warning text-white bg-light border-0 ml-3"><i class="fas fa-print fa-2x"></i></button>

                                            <button wire:click.prevent="viewDetails({{ $order->id }})" type="button" class="ms-3 btn btn-warning text-white bg-light border-0 ml-3"><i class="fas fa-eye fa-2x"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-gray-200 dark:bg-dark-1">
                                        <td colspan="7">
                                            <h6 class="text-center">SIN INFORMACIÓN</h6>
                                        </td>
                                    </tr>
                                @endforelse --}}

                            </tbody>
                            <tfoot>
                                {{-- <tr class="font-large bg-theme-26   text-white">
                                    <td>TOTALES</td>
                                    <td class="text-center">${{number_format($orders->sum('total'),2) }}</td>
                                    <td class="text-center">{{$orders->sum('items')}}</td>
                                </tr> --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-span-12 p-5">
                {{-- @if(count($orders) > 0)
                {{$orders->links()}}
                @endif --}}
            </div>
        </div>
    </div>

    {{-- @include('livewire.reports.detail')
    @include('livewire.reports.modal-users')
    @include('livewire.sales.keyboard') --}}




</div>

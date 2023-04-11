<div>



    <div class="intro-y grid grid-cols-12 gap-6 mt-5">


        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box">
                <h4 class="p-3 text-center text-theme-1 font-bold">EQUIPOS POR ASIGNAR USUARIO</h4>
                <div id="chartxasignar">
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-6">
            <div class="intro-y box ">
                <h4 class="p-3 text-center text-theme-1 font-bold">TOP 5 DE USUARIOS CON MAS ACTIVOS</h4>
                <div id="chartArea">

                    <table class="table">
                        <thead>
                            <tr class="text-theme-1">
                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >NOMBRE</th>
                                <th class="border-b-2 dark:border-dark-5 whitespace-nowrap" >CANTIDAD</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topPC as  $pc)
                            <tr>
                                <td class="dark:border-dark-5">
                                    <h6 class="mb-1 font-medium">{{ $pc->name   }}</h6>
                                </td>
                                <td class="dark:border-dark-5">
                                    <h6 class="mb-1 font-medium">{{ $pc->NumBienes   }}</h6>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

    <div class="intro-y grid grid-cols-12 pt-5">
        <div class="col-span-12 ">
            <div class="intro-y box ">
                <h4 class="p-3 text-center text-theme-1 font-bold"> TOTAL DE EQUIPOS  {{$year}}</h4>
                <div id="chart">
                </div>
            </div>
        </div>
    </div>

    @include('livewire.dash.scripts')

</div>

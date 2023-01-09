<div class="intro-y col-span-12">
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
                {{ $componentName  }} | <span class="font-normal">{{ $action }}</span>
            </h2>
        </div>

        <div class="p-5 ">
            <div class="preview">

                <div class="mt-3">
                    <div class="sm:grid grid-cols-2 gap-5">
                        <div>
                            <label  class="form-label">Serie del Scanner</label>
                            <input wire:model='serie' id="serie" type="text" class="form-control form-control-lg border-start-0 kioskboard" maxlength="250">
                            @error('serie')
                                <x-alert msg="{{ $message }}" />
                            @enderror
                        </div>
                        <div>
                            <label  class="form-label">Activo fijo del Scanner</label>
                            <input wire:model='af' id="af" type="text" class="form-control form-control-lg border-start-0 kioskboard" maxlength="250">
                            @error('af')
                                <x-alert msg="{{ $message }}" />
                            @enderror
                        </div>

                        <div class="grid grid-cols-6">
                            <div class="col-end-2 bg-amber-500">
                                <label class="form-label">Año de compra</label>
                                <select wire:model="ac" class="form-select form-select-lg">
                                    @foreach($listYears as $y)
                                    <option value="{{$y}}">{{$y}}</option>
                                    @endforeach
                                </select>
                                @error('ac')
                                <x-alert msg="{{ $message }}" />
                            @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-6">
                            <div class="col-end-2 bg-amber-500">
                                <label class="form-label">Modelo</label>
                                <select wire:model='modelo_id' class="form-select form-select-lg sm:mr-2">
                                   <option selected="elegir">Elegir</option>
                                   @foreach ($modelos as $modelo )
                                   <option value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                                    @endforeach

                                </select>
                                @error('modelo_id')
                                <x-alert msg="{{ $message }}" />
                            @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-6">
                            <div class="col-end-2 bg-amber-500">
                                <label class="form-label">Usuario a cargo</label>
                                <select wire:model='user_id' class="form-select form-select-lg sm:mr-2">
                                   <option selected="elegir">Elegir</option>
                                   @foreach ($usuarios as $user )
                                   <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach

                                </select>
                                @error('user_id')
                                <x-alert msg="{{ $message }}" />
                            @enderror
                            </div>
                        </div>


                    </div>
                </div>



                <div class="mt-5">
                    <x-back />

                    <x-save />
                </div>

            </div>
        </div>

    </div>


    <script>
        // KioskBoard.run('#categoryName', {})
        // const inputCatName = document.getElementById('categoryName')
        // if(inputCatName){
        //     inputCatName.addEventListener('change', ()=> {
        //         @this.name = e.target.value
        //     })
        // }
    </script>

</div>

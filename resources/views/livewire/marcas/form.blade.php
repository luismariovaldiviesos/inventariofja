<div class="intro-y col-span-12">
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
                {{ $componentName  }} | <span class="font-normal">{{ $action }}</span>
            </h2>
        </div>

        <div class="p-5 ">
            <div class="preview">
                <div x-data="{}" x-init="setTimeout(() => { refs.first.focus() }, 900  )">
                    <label class="form-label" >Nombre</label>
                    <input type="text" wire:model="nombre" x-ref="first" id="nombre"
                    class="form-control kioskboard {{ $errors->first('nombre') ?  "border-theme-6" : "" }}"
                    placeholder="nombre de la marca"
                    >
                    @error('nombre')
                        <x-alert msg="{{ $message }}" />
                    @enderror
                </div>
                <div class="grid grid-cols-6">
                    <div class="col-end-2 bg-amber-500">
                        <label class="form-label">Tipo </label>
                        <select wire:model='tipo_id' class="form-select form-select-lg sm:mr-2">
                           <option selected="elegir">Elegir</option>
                           @foreach ($tipos as $tipo )
                           <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                            @endforeach

                        </select>
                        @error('tipo_id')
                        <x-alert msg="{{ $message }}" />
                    @enderror
                    </div>
                </div>


                <div class="mt-5">

                    {{-- COMPONENTES DE BLADE PARA GUARDAR Y VOLVER --}}
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

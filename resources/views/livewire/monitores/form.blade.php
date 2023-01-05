<div class="intro-y col-span-12">
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
                {{ $componentName  }} | <span class="font-normal">{{ $action }}</span>
            </h2>
        </div>
       <div id="vertical-form" class="p-5">
        <div class="preview grid grid-cols-12 gap-5">

            <div class="col-span-4">
                <label  class="form-label">Serie Monitor</label>
                <input wire:model="serie"  id="serie" type="text"
                class="form-control  kioskboard"  placeholder="" />
                @error('serie')
                <x-alert msg="{{ $message }}" />
                @enderror
            </div>

            <div class="col-span-4">
                <label  class="form-label">Activo Fijo</label>
                <input wire:model="af"  id="af" type="text"
                class="form-control  kioskboard"  placeholder="" />
                @error('af')
                <x-alert msg="{{ $message }}" />
                @enderror
            </div>

            <div class="col-span-2">
                <label class="form-label">MArca</label>
                            <select wire:model.lazy='marca_id' class="form-select form-select-lg sm:mr-2">
                                <option value="Elegir" selected>Elegir</option>
                                @foreach ($marcas as $marca )
                                <option value="{{$marca->id}}" >{{$marca->nombre}}</option>
                                @endforeach
                            </select>
                            @error('marca_id')
                            <x-alert msg="{{ $message }}" />
                        @enderror
            </div>
            <div class="col-span-2">
                <label class="form-label">Usuarrio</label>
                            <select wire:model.lazy='user_id' class="form-select form-select-lg sm:mr-2">
                                <option value="Elegir" selected>Elegir</option>
                                @foreach ($usuarios as $usuario )
                                <option value="{{$usuario->id}}" >{{$usuario->name}}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                            <x-alert msg="{{ $message }}" />
                        @enderror
            </div>
            <div class="col-span-2">
                <label class="form-label">Unidad</label>
                            <select wire:model.lazy='unidad_id' class="form-select form-select-lg sm:mr-2">
                                <option value="Elegir" selected>Elegir</option>
                                @foreach ($unidades as $unidad )
                                <option value="{{$unidad->id}}" >{{$unidad->nombre}}</option>
                                @endforeach
                            </select>
                            @error('unidad_id')
                            <x-alert msg="{{ $message }}" />
                        @enderror
            </div>
        </div>

            <div class="col-span-12">

                <x-save />

            </div>
        </div>

    </div>
</div>

</div>

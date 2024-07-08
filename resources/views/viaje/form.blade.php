<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="destino_id" class="form-label">{{ __('Destinos') }}</label>
            <select class="form-select" name="destino_id" id="destino_id">
                @foreach ($destinos as $destino)
                    <option value="{{ $destino->id }}" @selected(count($viaje->toArray()) && $viaje->destino->id == $destino->id)>{{ $destino->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Código') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror"
                value="{{ old('codigo', $viaje?->codigo) }}" id="codigo" placeholder="Código">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="num_plazas" class="form-label">{{ __('Número de plazas') }}</label>
            <input type="number" name="num_plazas" class="form-control @error('num_plazas') is-invalid @enderror"
                value="{{ old('num_plazas', $viaje?->num_plazas) }}" id="num_plazas" placeholder="Número de plazas">
            {!! $errors->first('num_plazas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror"
                value="{{ old('fecha', $viaje?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="otros_datos" class="form-label">{{ __('Otros datos') }}</label>
            <input type="text" name="otros_datos" class="form-control @error('otros_datos') is-invalid @enderror"
                value="{{ old('otros_datos', $viaje?->otros_datos) }}" id="otros_datos" placeholder="Otros datos">
            {!! $errors->first('otros_datos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Datos') }}</button>
    </div>
</div>

<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Código') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror"
                value="{{ old('codigo', $destino?->codigo) }}" id="codigo" placeholder="Código">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $destino?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="otros_datos" class="form-label">{{ __('Otros datos') }}</label>
            <input type="text" name="otros_datos" class="form-control @error('otros_datos') is-invalid @enderror"
                value="{{ old('otros_datos', $destino?->otros_datos) }}" id="otros_datos" placeholder="Otros datos">
            {!! $errors->first('otros_datos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Datos') }}</button>
    </div>
</div>

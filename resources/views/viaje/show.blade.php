@extends('layouts.app')

@section('template_title')
    {{ $viaje->nombre ?? __('show') . " " . __('Viaje') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('show') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('viajes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Código:</strong>
                                    {{ $viaje->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Número de plazas:</strong>
                                    {{ $viaje->num_plazas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $viaje->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Otros datos:</strong>
                                    {{ $viaje->otros_datos }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

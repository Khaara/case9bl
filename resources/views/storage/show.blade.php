@extends('layouts.app')

@section('template_title')
    {{ $storage->name ?? "{{ __('Show') Storage" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Almacen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('storages.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $storage->ammount }}
                        </div>
                        <div class="form-group">
                            <strong>Id de Producto:</strong>
                            {{ $storage->item_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $purchase->name ?? "{{ __('Show') Purchase" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('purchases.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $purchase->ammount }}
                        </div>
                        <div class="form-group">
                            <strong>Id de Almacen:</strong>
                            {{ $purchase->storages_id }}
                        </div>
                        <div class="form-group">
                            <strong>Id de Producto:</strong>
                            {{ $purchase->item_id }}
                        </div>
                        <div class="form-group">
                            <strong>Id de Usuario:</strong>
                            {{ $purchase->manager_id }}
                        </div>
                        <div class="form-group">
                            <strong>Id de Cliente:</strong>
                            {{ $purchase->clients_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

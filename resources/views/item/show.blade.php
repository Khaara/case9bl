@extends('layouts.app')

@section('template_title')
    {{ $item->name ?? "{{ __('Show') Item" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('items.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $item->name }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $item->price }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $item->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Id de categoria:</strong>
                            {{ $item->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

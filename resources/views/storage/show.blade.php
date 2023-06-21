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
                            <span class="card-title">{{ __('Show') }} Storage</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('storages.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ammount:</strong>
                            {{ $storage->ammount }}
                        </div>
                        <div class="form-group">
                            <strong>Item Id:</strong>
                            {{ $storage->item_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

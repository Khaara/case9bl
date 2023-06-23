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
                            <span class="card-title">{{ __('Show') }} Purchase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('purchases.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ammount:</strong>
                            {{ $purchase->ammount }}
                        </div>
                        <div class="form-group">
                            <strong>Storages Id:</strong>
                            {{ $purchase->storages_id }}
                        </div>
                        <div class="form-group">
                            <strong>Item Id:</strong>
                            {{ $purchase->item_id }}
                        </div>
                        <div class="form-group">
                            <strong>Manager Id:</strong>
                            {{ $purchase->manager_id }}
                        </div>
                        <div class="form-group">
                            <strong>Clients Id:</strong>
                            {{ $purchase->clients_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

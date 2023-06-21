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
                            <span class="card-title">{{ __('Show') }} Item</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('items.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $item->name }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $item->price }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $item->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $item->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

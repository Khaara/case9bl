<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('ammount', $purchase->ammount, ['class' => 'form-control' . ($errors->has('ammount') ? ' is-invalid' : ''), 'placeholder' => 'Ammount']) }}
            {!! $errors->first('ammount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id de Almacen') }}
            {{ Form::text('storages_id', $purchase->storages_id, ['class' => 'form-control' . ($errors->has('storages_id') ? ' is-invalid' : ''), 'placeholder' => 'Storages Id']) }}
            {!! $errors->first('storages_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id de Producto') }}
            {{ Form::text('item_id', $purchase->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Id']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id de Usuario') }}
            {{ Form::text('manager_id', $purchase->manager_id, ['class' => 'form-control' . ($errors->has('manager_id') ? ' is-invalid' : ''), 'placeholder' => 'Manager Id']) }}
            {!! $errors->first('manager_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id de Cliente') }}
            {{ Form::text('clients_id', $purchase->clients_id, ['class' => 'form-control' . ($errors->has('clients_id') ? ' is-invalid' : ''), 'placeholder' => 'Clients Id']) }}
            {!! $errors->first('clients_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>

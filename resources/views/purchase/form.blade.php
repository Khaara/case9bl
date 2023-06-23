<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('ammount', $purchase->ammount, ['class' => 'form-control' . ($errors->has('ammount') ? ' is-invalid' : ''), 'placeholder' => 'cantidad']) }}
            {!! $errors->first('ammount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id de producto') }}
            {{ Form::text('item_id', $purchase->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id de vendedor') }}
            {{ Form::text('manager_id', $purchase->manager_id, ['class' => 'form-control' . ($errors->has('manager_id') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('manager_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id de cliente') }}
            {{ Form::text('clients_id', $purchase->clients_id, ['class' => 'form-control' . ($errors->has('clients_id') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('clients_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>
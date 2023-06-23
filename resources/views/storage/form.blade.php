<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('ammount', $storage->ammount, ['class' => 'form-control' . ($errors->has('ammount') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('ammount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id de Producto') }}
            {{ Form::text('item_id', $storage->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Id de producto']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>
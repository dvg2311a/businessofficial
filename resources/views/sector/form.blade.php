<div class="box box-info padding-1 container">
    <div class="box-body">

        <div class="form-group mt-3 col-3">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $sector->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group  mt-3 col-3">
            {{ Form::label('Descripción') }}
            {{ Form::text('description', $sector->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group  mt-3 col-3">
            {{ Form::label('Categoría') }}
            {{ Form::text('category', $sector->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-3 col-3">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta...']) !!}
</div>

@error('name')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la etiqueta...', 'readonly']) !!}
</div>

@error('slug')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="form-group">
    {!! Form::label('color', 'Color: ') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
</div>

@error('color')
    <small class="text-danger">{{ $message }}</small>
@enderror
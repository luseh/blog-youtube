<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Introduce el nombre del post']) !!}
</div>

@error('name')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Introduce el slug del post',
        'readonly',
    ]) !!}
</div>

@error('slug')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="form-group">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

@error('category_id')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="form-group">
    <p class="font-weight-bold">Etiquetas: </p>
    @foreach ($tags as $tag)
        <label class="mr-3">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado: </p>
    <label class="mr-4">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="mr-4">
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row mb-4">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" class="rounded" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img id="picture" class="rounded" src="https://cdn.pixabay.com/photo/2023/06/05/11/11/blue-tit-8041988_1280.jpg" alt="">
            @endisset
        </div>
    </div>
    <div class="col col-image">
        <div class="form-group">
            {!! Form::label('file', 'Añade una imagen a tu post:') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'images/*']) !!}
               
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora eum aperiam autem
                perspiciatis odio sit. Odit, quam? Officia ratione quod odit illum. Veniam sint mollitia enim ea
                velit tempore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil doloremque enim
                veritatis maiores reprehenderit perferendis voluptates voluptatum fugit eligendi, quos odit in
                illum necessitatibus a adipisci blanditiis officia provident magnam!</p>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
</div>

@error('extract')
    <small class="text-danger">{{ $message }}</small>
@enderror

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

@error('body')
    <small class="text-danger">{{ $message }}</small>
@enderror
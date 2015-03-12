<h1>Atividadesextras</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'atividadesextras')) }}

	<div class="form-group">
{{ Form::label('titulo', 'Titulo') }}
{{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('descricao', 'Descricao') }}
{{ Form::text('descricao', Input::old('descricao'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('urlImagem', 'UrlImagem') }}
{{ Form::text('urlImagem', Input::old('urlImagem'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idCurso', 'IdCurso') }}
{{ Form::select('idCurso', $cursos_list, null) }}
</div>
<div class="form-group">
{{ Form::label('idCategoria', 'IdCategoria') }}
{{ Form::select('idCategoria', $categorias_list, null) }}
</div>


	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
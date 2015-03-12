<h1>{{ $atividadesextras->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($atividadesextras, array('route' => array('atividadesextras.update', $atividadesextras->id), 'method' => 'PUT')) }}

	{{ Form::hidden('id', null, array('class' => 'form-control')) }}
<div class="form-group">
{{ Form::label('titulo', 'Titulo') }}
{{ Form::text('titulo', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('descricao', 'Descricao') }}
{{ Form::text('descricao', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('urlImagem', 'UrlImagem') }}
{{ Form::text('urlImagem', null, array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idCurso', 'IdCurso') }}
{{ Form::select('idCurso', array('' => 'SELECIONE UMA OPÇÃO') + $cursos_list, Input::old('idCurso'), array( 'class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('idCategoria', 'IdCategoria') }}
{{ Form::select('idCategoria', array('' => 'SELECIONE UMA OPÇÃO') + $categorias_list, Input::old('idCategoria'), array( 'class' => 'form-control')) }}
</div>


	{{ Form::submit('Editar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
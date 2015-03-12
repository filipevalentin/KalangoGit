<h1>Materialapoio</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'materialapoio')) }}

	<div class="form-group">
{{ Form::label('nome', 'Nome') }}
{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('descricao', 'Descricao') }}
{{ Form::text('descricao', Input::old('descricao'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('url', 'Url') }}
{{ Form::text('url', Input::old('url'), array('class' => 'form-control', '')) }}
</div>

<div class="form-group">
{{ Form::label('idAula', 'IdAula') }}
{{ Form::select('idAula', $aulas_list, null) }}
</div>


	{{ Form::submit('Cadastrar!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
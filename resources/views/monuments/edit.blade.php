@extends('layouts.app')

@section('content')
	<h1>Edit {{ $monument->name }}</h1>

	<!-- if there are creation errors, they will show here -->
	{{--  {{ HTML::ul($errors->all()) }}  --}}

	{{ Form::model($monument, array('route' => array('monuments.update', $monument->id), 'method' => 'PUT')) }}
			<div class="form-group">
					{{ Form::label('name', 'Name') }}
					{{ Form::text('name', null, array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
					{{ Form::label('desc', 'Description') }}
					{{ Form::text('desc', null, array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
					{{ Form::label('url', 'Url') }}
					{{ Form::text('url', null, array('class' => 'form-control')) }}
					{{--  {{ Form::select('url', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}  --}}
			</div>
			<div class="form-group">
					{{ Form::label('address', 'Addresse') }}
					{{ Form::text('address', null, array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
					{{ Form::label('city', 'Ville') }}
					{{ Form::text('city', null, array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
					{{ Form::label('zip_code', 'Code Postal') }}
					{{ Form::text('zip_code', null, array('class' => 'form-control')) }}
			</div>
		
			{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

	</div>
@endsection
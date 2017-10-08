@extends('layouts.app')

@section('content')
	<div class="container">
		<form method="POST" action="/monuments">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Nom :</label>
				<input type="text" class="form-control" id="name" name="name" aria-describedby="title" >
			</div>
			<div class="form-group">
				<label for="description">Description : </label>
				<textarea name="desc" id="description" class="form-control" ></textarea>
			</div>
			<div class="form-group">
				<label for="url">Url : </label>
				<input type="text" name="url" id="url" class="form-control" />
			</div>
			<div class="form-group">
				<label for="address">Addresse : </label>
				<input type="text" name="address" id="address" class="form-control" />
			</div>
			<div class="form-group">
				<label for="city">Ville : </label>
				<input type="text" name="city" id="city" class="form-control" />
			</div>
			<div class="form-group">
				<label for="zip_code">Code Postal : </label>
				<input type="text" name="zip_code" id="zip_code" class="form-control" />
			</div>
			<div class="form-group">
				<label for="lat">Lat : </label>
				<input type="number" name="lat" id="lat" class="form-control" />
			</div>
			<div class="form-group">
				<label for="lng">Lng: </label>
				<input type="number" name="lng" id="lng" class="form-control" />
			</div>
			<button type="submit" class="btn btn-primary">Sauvegarder</button>
		</form>
	</div>

@endsection
@extends ('layout')

@section ('content')

<div class="container">

	<div class="row text-center">

		<h1>Datos de la Localidad</h1>

		<div class="col-md-10 col-md-offset-1 text-left">
			@if ($errors->any())
			    <div class="alert alert-danger">
			      <button type="button" class="close" data-dismiss="alert">&times;</button>
			      <strong>Por favor corrige los siguentes errores:</strong>
			      <ul>
			      @foreach ($errors->all() as $error)
			        <li>{{ $error }}</li>
			      @endforeach
			      </ul>
			    </div>
			@endif
			<form action="{{ URL::asset('register_localidad') }}" method="POST" class="form-vertical" role="form">

				<fieldset class="cool-fieldset">
					<div class="form-group">
						<div class="col-sm-12">
			  				<p class="help-block margin-bottom-cero"><small>Nombre: </small></p>
			  				<input type="text" class="form-control" placeholder="Nombre de la Localidad..." name="localidad" id="localidad" value="{{ Input::old('localidad') }}">
				  		</div>
				  	</div>

					<div class="form-group">					
						<div class="col-sm-12">
							<br/>
							<input type="submit" value="Registrar Localidad" class="btn btn-success form-control">
						</div>
					</div>							  	

				</fieldset>					

			</form>

		</div>

	</div>

</div>

@stop
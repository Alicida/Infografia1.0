@extends('layout')

@section('content')
	<div class="container">
		{{-- {{ $slide->image->from }} --}}
		<form id="infographyForm"class="form" action="{{ App::$base_path }}/info/" method="post">

			<div class="row">
				<div class="col-md-4">

					<h2>Llamadas</h2>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Llamadas Efectivas</span>
		        <input type="number" name="calls" class="form-control" value="{{ $calls }}" required>
		      </div>

				</div>
				<div class="col-md-4">

					<h2>Género</h2>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Hombres</span>
		        <input type="number" name="genders[male]" class="form-control" value="{{ $genders->male }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Mujeres</span>
		        <input type="number" name="genders[female]" class="form-control" value="{{ $genders->female }}" required max="100">
		      </div>

				</div>
				<div class="col-md-4">

					<h2>Tipo de Conexión</h2>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Casa</span>
		        <input type="number" name="types[home]" class="form-control" value="{{ $types->home }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Trabajo</span>
		        <input type="number" name="types[office]" class="form-control" value="{{ $types->office }}" required max="100">
		      </div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-4">

					<h2>Tareas Principales</h2>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Navegar por internet</span>
		        <input type="number" name="tasks[browser]" class="form-control" value="{{ $tasks->browser }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Tareas Escolares</span>
		        <input type="number" name="tasks[homework]" class="form-control" value="{{ $tasks->homework }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Redes Sociales</span>
		        <input type="number" name="tasks[social]" class="form-control" value="{{ $tasks->social }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Videos/Peliculas</span>
		        <input type="number" name="tasks[movies]" class="form-control" value="{{ $tasks->movies }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Escuchar Música</span>
		        <input type="number" name="tasks[music]" class="form-control" value="{{ $tasks->music }}" required max="100">
		      </div>

				</div>
				<div class="col-md-8">

					<h2>Personas por red</h2>
					<div class="col-md-6">
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Una persona</span>
			        <input type="number" name="people[one]" class="form-control" value="{{ $people->one }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Dos personas</span>
			        <input type="number" name="people[two]" class="form-control" value="{{ $people->two }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Tres personas</span>
			        <input type="number" name="people[three]" class="form-control" value="{{ $people->three }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Cuatro Personas</span>
			        <input type="number" name="people[four]" class="form-control" value="{{ $people->four }}" required max="100">
			      </div>
					</div>
					<div class="col-md-6">
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Cinco Personas</span>
			        <input type="number" name="people[five]" class="form-control" value="{{ $people->five }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Más de cinco</span>
			        <input type="number" name="people[more]" class="form-control" value="{{ $people->more }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">PP</span>
			        <input type="number" name="pp" class="form-control" value="{{ $pp }}" required max="100">
			      </div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-4">

					<h2>Edad de los Usuarios</h2>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Menos de 10</span>
		        <input type="number" name="ages[beforeteen]" class="form-control" value="{{ $ages->beforeteen }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">De 10 a 15</span>
		        <input type="number" name="ages[teen]" class="form-control" value="{{ $ages->teen }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">De 15 a 20</span>
		        <input type="number" name="ages[fiveteen]" class="form-control" value="{{ $ages->fiveteen }}" required max="100">
		      </div>
		      <div class="input-group infography-input">
		        <span class="input-group-addon">Más de 21</span>
		        <input type="number" name="ages[aftertwenty]" class="form-control" value="{{ $ages->aftertwenty }}" required max="100">
		      </div>

				</div>
				<div class="col-md-8">

					<h2>Usuarios con Experiencia en internet</h2>
					<div class="col-md-6">

			      <div class="input-group infography-input">
			        <span class="input-group-addon">TELMEX</span>
			        <input type="number" name="providers[telmex]" class="form-control" value="{{ $providers->telmex }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Otro</span>
			        <input type="number" name="providers[others]" class="form-control" value="{{ $providers->others }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Izzi/Cablevisión</span>
			        <input type="number" name="providers[izzi]" class="form-control" value="{{ $providers->izzi }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Megacable</span>
			        <input type="number" name="providers[megacable]" class="form-control" value="{{ $providers->megacable }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">No recuerda</span>
			        <input type="number" name="providers[dontremember]" class="form-control" value="{{ $providers->dontremember }}" required max="100">
			      </div>

					</div>
					<div class="col-md-6">

						<div class="input-group infography-input">
			        <span class="input-group-addon">Total Play</span>
			        <input type="number" name="providers[total]" class="form-control" value="{{ $providers->total }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Dish</span>
			        <input type="number" name="providers[dish]" class="form-control" value="{{ $providers->dish }}" required max="100">
			      </div>
			      <div class="input-group infography-input">
			        <span class="input-group-addon">Sky</span>
			        <input type="number" name="providers[sky]" class="form-control" value="{{ $providers->sky }}" required max="100">
			      </div>
						<div class="input-group infography-input">
			        <span class="input-group-addon">Experiencia</span>
			        <input type="number" name="experience" class="form-control" value="{{ $experience }}" required max="100">
			      </div>

					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-4">

					<h2>Horarios de Conexión</h2>
					<div class="input-group infography-input">
		        <span class="input-group-addon">Conexión en la mañana</span>
		        <input type="number" name="times[morning]" class="form-control" value="{{ $times->morning }}" required max="100">
		      </div>
					<div class="input-group infography-input">
		        <span class="input-group-addon">Conexión en la tarde</span>
		        <input type="number" name="times[afternoon]" class="form-control" value="{{ $times->afternoon }}" required max="100">
		      </div>
					<div class="input-group infography-input">
		        <span class="input-group-addon">Conexión en la noche</span>
		        <input type="number" name="times[night]" class="form-control" value="{{ $times->night }}" required max="100">
		      </div>

				</div>
				<div class="col-md-4 col-md-offset-2">
					<br><br><br><br><br>
					<div class="input-group infography-input">
		        <a href="{{ App::$base_path }}" class="btn btn-danger">Cancelar</a>
		      </div>
					<div class="input-group infography-input">
		        <button type="submit" name="button" class="btn btn-success">Guardar</button>
		      </div>

				</div>
			</div>

    </form>
	</div>

@endsection

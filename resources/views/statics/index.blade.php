@extends('layout')

@section('content')
	<a href="{{ App::$base_path.'/form/' }}" class="btn btn-link">Editar</a>
	<div class="container">
		{{-- {{ $slide->image->from }} --}}
		@include('statics/_banner')
		@include('statics/_row-one')
		@include('statics/_row-two')
		@include('statics/_row-three')
		@include('statics/_row-four')
	</div>
	{{-- @foreach($tasks as $task)
		seccion {{ $category->name }}
	@endforeach --}}



@endsection

@section('style')

	.navigate { max-width: {{ $tasks->browser }}% }
	.homework { max-width: {{ $tasks->homework }}% }
	.socialNetwork { max-width: {{ $tasks->social }}% }
	.videosMovies { max-width: {{ $tasks->movies }}% }
	.music { max-width: {{ $tasks->music }}% }

	#morning{ height: {{ $times->morning }}% }
	#afternoon{ height: {{ $times->afternoon }}% }
	#night{ height: {{ $times->night }}% }

	#telmex{ width: {{ $providers->telmex }}% }
	#others{ width: {{ $providers->others }}% }
	#izzi{ width: {{ $providers->izzi }}% }
	#megacable{ width: {{ $providers->megacable }}% }
	#dontremember{ width: {{ $providers->dontremember }}% }
	#total{ width: {{ $providers->total }}% }
	#dish{ width: {{ $providers->dish }}% }
	#sky{ width: {{ $providers->sky }}% }

@endsection

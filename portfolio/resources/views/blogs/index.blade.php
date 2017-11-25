@extends('layouts.master')

@section('content')

	<div class="container pt">

		@if(Auth::check())
		@if(Auth::user()->admin)
			<div class="col-md-8 col-md-offset-2 centered">
				<div class="row">
					<a href='/projets/{{$projet->id}}/edit'
					class="col-md-4 col-md-offset-2 btn btn-warning">
						<span style="color:black;">Éditer</span>
					</a>
					<a href='/projets/{{$projet->id}}/delete' class="col-md-4 btn btn-danger">
						<span style="color:black;">Supprimer</span>
					</a>
				</div>

			<hr/>
			</div>
		@endif
		@endif

	@include('blog.list', ['blogs' => $blogs])

	</div><!-- /container -->

@endsection

@extends('layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Ajouter un nouvel article</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('articles.index')}}">
				Retour
			</a>
		</div>
	</div>
</div>
@if (count($errors) < 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> Il y avait certains problemes avec vos entrees. <br><br>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

{!!Form::open(array('route'=>'articles.store','method'=>'POST'))!!}
	@include('articles.form')
{!!Form::close()!!}
@endsection
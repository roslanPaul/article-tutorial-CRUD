@extends('layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Montrer l article</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('articles.index')}}"> Retour</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Corps :</strong>
			{{ $article->body }}
		</div>
	</div>
</div>
@endsection
@extends('layouts.app')
@section('content')
	<div class="alert alert-danger">
		<a href="{{ route('templates.user_master') }}">User Master</a>
	</div>
	<div class="alert alert-success">
		<a href="{{ route('templates.template_master') }}">Temlates Master</a>
	</div>

@endsection
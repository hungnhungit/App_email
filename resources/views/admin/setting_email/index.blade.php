@extends('layouts.app')
@section('content')
	<div class="alert alert-danger">
		<a href="{{ route('company.index') }}">List Company</a>
	</div>
	<div class="alert alert-success">
		<a href="{{ route('customer.index') }}">List Customer</a>
	</div>
	<div class="alert alert-primary">
		<a href="{{ route('role.index') }}">List Role</a>
	</div>
	
	<div class="alert alert-primary">
		<a href="{{ route('import.csv') }}">Import Data</a>
	</div>

	<div class="alert alert-primary">
		<a href="{{ route('email.config') }}">Get Data</a>
	</div>

@endsection
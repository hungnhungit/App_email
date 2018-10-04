@extends('layouts.app')
@section('content')
	<h3>List Email</h3>
	<a href="{{ route('email.history') }}">History Email</a>
	 <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Item 1</th>
        <th>Item 2</th>
        <th>Item 3</th>
        <th>Item 4</th>
        <th>Item 5</th>
        <th>Item 6</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td><a href="{{ route('email.edit') }}">1</a></td>
        <td>Item</td>
        <td>Item</td>
        <td>Item@example.com</td>
        <td>Item</td>
        <td>Item</td>
        <td>Item</td>
      </tr>
      <tr>
       <td><a href="{{ route('email.edit') }}">1</a></td>
        <td>Item</td>
        <td>Item</td>
        <td>Item@example.com</td>
        <td>Item</td>
        <td>Item</td>
        <td>Item</td>
      </tr>
      <tr>
       <td><a href="{{ route('email.edit') }}">1</a></td>
        <td>Item</td>
        <td>Item</td>
        <td>Item@example.com</td>
        <td>Item</td>
        <td>Item</td>
        <td>Item</td>
      </tr>
    </tbody>
  </table>
@endsection
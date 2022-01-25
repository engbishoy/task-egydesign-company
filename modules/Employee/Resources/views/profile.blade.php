
@extends('layouts.app')
@section('content')

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome {{auth()->user()->name}}</h1>
</div>


@endsection
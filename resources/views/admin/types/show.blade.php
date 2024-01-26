@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Tipologia: {{ $type->tipologia }}</h2>
        <p>Slug: {{ $type->slug }}</p>       
    </div>
@endsection
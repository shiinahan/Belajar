@extends('main')

@section('title')
    Search
@endsection

@section('content')

<h1>Hasil Pencarian untuk: {{ $query }}</h1>

@if($results->isEmpty())
    <p>Tidak ada hasil ditemukan.</p>
@else
    <ul>
        @foreach($results as $result)
            <li>{{ $result->your_column }}</li> <!-- Ganti dengan field yang sesuai -->
        @endforeach
    </ul>
@endif
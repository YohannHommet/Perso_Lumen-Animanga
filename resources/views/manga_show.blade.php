@extends("base.base")

@section('title')
    {{ $response['attributes']['canonicalTitle'] ?? "Details" }}
@endsection

@section('content')

    @include('_partials._show._show', ['title' => "Manga Stats"])

@endsection

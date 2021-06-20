@extends('base.base')

@section('title', 'Error 404')

@section('content')

    <div class="container-fluid p-0 m-0 g-0 error__container">
        <section class="error__section" style="background-image: url('{{ url('assets/img/error-404.png') }}')">

            <h2 class="error__section_title fs-1">Nani ?!</h2>
            <a href="{{ @route('home') }}" class="error__section_link text-center fs-5">Come back home bro</a>

        </section>
    </div>

@endsection

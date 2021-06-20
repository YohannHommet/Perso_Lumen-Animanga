@extends('base.base')

@section('title', 'Home')

@section('content')

    <section class="carousel" role="banner">

        @include('_partials._carousel')

    </section>

    <section class="anime">
        <div class="container">

            <h1 class="pb-3 border-bottom text-end mt-5">Anime selection...</h1>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

                @foreach($response as $anime)
                    <div class="col">
                        <div class="card-cover h-100 p-4 overflow-hidden text-white home-cards" style="background-image: url({{ $anime['attributes']['posterImage']['medium']}}); background-position: center center; background-repeat: no-repeat; background-size: cover">
                            <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-between">
                                <h2 class="py-5 my-5 display-6 lh-1 fw-bold">{{ $anime['attributes']['canonicalTitle'] }}</h2>
                                <ul class="d-flex list-unstyled mt-5 mb-0">
                                    <li class="d-flex align-items-center ms-auto">
                                        <a href="{{ @route("anime-show", ['id' => $anime['id']]) }}">
                                            <i class="fas fa-angle-double-right text-white" style="font-size: 1.8rem!important;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


@endsection

@extends('base.base')

@section('title', 'Home')

@section('content')

    <section class="carousel" role="banner">

        @include('_partials._carousel')

    </section>

    <section class="anime">
        <div class="container">

            <h1 class="pb-3 border-bottom text-end mt-5 pt-5">Anime selection...</h1>

            <div class="row row-cols-1 row-cols-lg-3 g-4 mt-4">
                <div class="col ms-auto">
                    <form action="" method="GET" class="js-filter-form ">
                        <div class="input-group">
                            <label for="anime"></label>
                            <input type="text" name="anime" id="anime" class="form-control js-filter-input">
                            <button class="btn btn-outline-info px-4" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                @if(!empty($animeResponse))
                    @foreach($animeResponse as $anime)
                        @include('_partials._cards._anime_cards')
                    @endforeach
                @else
                    <h2 class="text-center d-block m-auto my-5 fw-bold">No results..</h2>
                @endif
            </div>

        </div>
    </section>

    <section class="citations">
        <div class="container-fluid p-0 m-0 g-0">

            @include('_partials._citations._citations')

        </div>
    </section>

    <section class="anime">
        <div class="container">

            <h1 class="pb-3 border-bottom text-start mt-5 pt-5">Manga selection...</h1>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                @foreach($mangaResponse as $manga)
                    @include('_partials._cards._manga_cards')
                @endforeach
            </div>

        </div>
    </section>


@endsection

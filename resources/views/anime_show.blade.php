@extends("base.base")

@section('title')
    {{ $response['attributes']['canonicalTitle'] }}
@endsection

@section('content')

    @dump($response)
    <div class="container-fluid p-0 m-0 g-0">
        <section class="banner" style="background-image: url('{{ $response['attributes']['coverImage']['original'] }}');">

        </section>
    </div>




    <section class="anime">
        <div class="container">

            <h1 class="pb-3 border-bottom text-end mt-5">{{ $response['attributes']['canonicalTitle'] }}</h1>






        </div>


@endsection

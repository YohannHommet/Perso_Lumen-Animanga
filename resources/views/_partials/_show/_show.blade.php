
<div class="container-fluid p-0 m-0 g-0">
    <section class="banner" style="background-image: url('{{ $response['attributes']['coverImage']['original'] ?? $response['attributes']['posterImage']['original'] ?? "background unavailable" }}');">

    </section>
</div>

<section class="anime">
    <div class="container">

        <h1 class="pb-3 border-bottom text-end my-5">{{ $response['attributes']['canonicalTitle'] ?? $response['attributes']['titles']['en_jp'] ?? "???" }}</h1>

        <div class="row my-5">
            <div class="col-md-4 col-lg-3 mb-xs-4 mb-sm-4 mb-lg-0 stats">
                <div class="p-4 custom-card h-100">
                    <h4 class="h3 text-center m-4 pb-1 border-bottom">{{ $title }}</h4>

                    <ul class="list-group">
                        <li class="d-block m-auto mb-4 h5 text-muted">
                            {{ $response['attributes']['titles']['en_jp'] ?? "???" }}
                        </li>
                        <li class="d-block me-auto mb-3">
                            <strong class="">Start :</strong> {{ $response['attributes']['startDate'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">End :</strong> {{ $response['attributes']['endDate'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Average Rating :</strong> {{ $response['attributes']['averageRating'] ?? "" }} / 100
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Popularity Rank :</strong> {{ $response['attributes']['popularityRank'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Rating Rank :</strong> {{ $response['attributes']['ratingRank'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Episodes :</strong> {{ $response['attributes']['episodeCount'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Episodes Length :</strong> {{ $response['attributes']['episodeLength'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Total Length :</strong> {{ $response['attributes']['totalLength'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Show Type :</strong> {{ $response['attributes']['showType'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Age Rating Guide :</strong> {{ $response['attributes']['ageRatingGuide'] ?? "" }}
                        </li>

                        <li class="d-block me-auto mb-3">
                            <strong class="">Status :</strong> {{ $response['attributes']['status'] ?? "" }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-lg-9 mb-md-4">
                <div class="p-4 custom-card">
                    <h3 class="m-4 pb-1 text-end">Synopsis</h3>

                    <p class="fst-normal lh-base fs-5 text-end">
                        {{ $response['attributes']['synopsis'] ?? "Unknown" }}
                    </p>
                </div>

                <div class="mt-5 custom-card anime-custom-bg align-self-end" style="background-image: url('{{ $response['attributes']['posterImage']['large'] ?? "Unknown" }}');">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 col-lg-7 pe-5">
                <h2 class="my-5 pb-1 border-bottom text-start">Description</h2>
            </div>
        </div>

        <div class="row mb-5 gx-4">
            <div class="col-md-12 col-lg-7 pe-sm-0 pe-lg-5 text-justify">
                <p class="fst-normal lh-base fs-5" style="text-align: justify;">
                    {{ $response['attributes']['description'] ?? "Unknown" }}
                </p>
            </div>

            <div class="col-md-12 col-lg-5 mt-sm-4 mt-lg-0">
                <iframe class="yt-video" src="https://www.youtube.com/embed/{{ $response['attributes']['youtubeVideoId'] ?? "" }}"></iframe>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-6 mx-auto">
                <h5 class="text-center my-5 py-2 border-top border-bottom text-muted fs-6">Last update {{ $response['attributes']['updatedAt'] ?? "Unknown" }}</h5>
            </div>
        </div>

    </div>
</section>


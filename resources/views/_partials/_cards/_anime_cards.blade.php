<div class="col home_cards">
    <div class="card-cover h-100 p-4 overflow-hidden text-white home__cards" style="background-image: url({{ $anime['attributes']['posterImage']['medium']}});">
        <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-between">
            <h2 class="py-5 my-4 display-6 lh-1 fw-bold home__cards-title">{{ $anime['attributes']['canonicalTitle'] }}</h2>
            <ul class="d-flex list-unstyled mt-5 mb-0">
                <li class="d-flex align-items-center ms-auto">
                    <a href="{{ @route("anime-show", ['id' => $anime['id']]) }}" class="home__cards-link">
                        <i id="next" class="fas fa-angle-double-right text-white"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

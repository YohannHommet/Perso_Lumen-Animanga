const filter =
    {
        init: () =>
        {
            filter.bindEvents();
        },

        /**
         * Ajoute les comportements aux différents éléments
         */
        bindEvents: () =>
        {
            /** @property {HTMLFormElement} form */
            this.form = document.querySelector('.js-filter-form')
            this.form.addEventListener('submit', filter.handleFormSubmit.bind(this));
        },

        /**
         * Handle event on form input
         */
        handleFormSubmit: (e) =>
        {
            e.preventDefault();
            this.form = e.target;
            this.input = this.form.querySelector('.js-filter-input');
            filter.handleSearchRequest(this.input.value);
            this.input.value = "";
        },

        /**
         * @param {String} searchValue
         */
        handleSearchRequest: (searchValue) =>
        {
            const httpHeaders = new Headers();
            httpHeaders.append("Accept", "application/vnd.api+json");
            httpHeaders.append("Content-Type", "application/vnd.api+json");
            httpHeaders.append("Access-Control-Allow-Origin", "*");

            const fetchOptions = {
                method: "GET",
                cache: "no-cache",
                mode: "cors",
                headers: httpHeaders
            }

            const promise = fetch("https://kitsu.io/api/edge/anime?filter[text]=" + searchValue, fetchOptions);

            promise
                .then(response => {
                    return response.json()
                })
                .then(jsonResponse => {
                    const jsonElement = jsonResponse.data
                    this.homeCards = document.querySelectorAll('.home_cards')

                    for (let i = 0; i < homeCards.length; i++) {
                        this.homeCards[i].querySelector('.home__cards').style.background = "url(" + jsonElement[i].attributes.posterImage.medium + ")";
                        this.homeCards[i].querySelector('.home__cards-title').textContent = jsonElement[i].attributes.canonicalTitle;
                        this.homeCards[i].querySelector('.home__cards-link').setAttribute("href", "/anime/" + jsonElement[i].id)
                    }
                });
        }

    }


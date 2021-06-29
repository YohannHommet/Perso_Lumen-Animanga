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


        handleFormSubmit: (e) =>
        {
            console.log('ok2')
            e.preventDefault();
            this.form = e.target;
            this.input = this.form.querySelector('.js-filter-input');
            filter.handleSearchRequest(this.input.value);
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
                    const homeCards = document.querySelectorAll('.home_cards')

                    for (const jsonElementElement of jsonElement) {
                        for (const homeCard of homeCards) {
                            console.log(homeCard)
                            homeCard.querySelector('.home__cards').style.background = "url(" + jsonElementElement.attributes.posterImage.medium + ")";
                            homeCard.querySelector('.home__cards-title').textContent = jsonElementElement.attributes.canonicalTitle;
                            homeCard.querySelector('.home__cards-link').setAttribute("href", "/anime/" + jsonElementElement.id)

                        }

                    }

                });



            // 'attributes']['posterImage']['medium'

        }

















        //
        //
        // loadUrl: (e) =>
        // {
        // On affiche le loader avant de faire la requête
        // this.showLoader()
        // e.preventDefault()
        // /** @property {HTMLInputElement} search */
        // this.search = this.form.querySelector('input[type=text]');
        //
        // const params = new URLSearchParams(this.search.value);
        // params.set('ajax', 1)

        // const response = fetch( window.location.pathname + "?filter[text]=" + params.toString(), {
        //     headers: {
        //         'Accept': "application/vnd.api+json",
        //         "Content-Type": "application/vnd.api+json"
        //     }
        // })

        //
        // if (response.status >= 200 && response.status < 300) {
        //     const data = response.json();
        //     console.log(data)
        //
        //     params.delete('ajax')
        // } else {
        //     alert("Une erreur est survenue");
        // }

        // On enlève le loader après la requête
        // this.hideLoader();
        // },

        // showLoader: () =>
        // {
        //     this.form.classList.add('is-loading')
        //     const loader = this.form.querySelector('.js-loading')
        //     if (loader === null) {
        //         return
        //     }
        //     loader.setAttribute('aria-hidden', 'false')
        //     loader.style.display = null
        // },
        //
        // hideLoader: () =>
        // {
        //     this.form.classList.remove('is-loading')
        //     const loader = this.form.querySelector('.js-loading')
        //     if (loader === null) {
        //         return
        //     }
        //     loader.setAttribute('aria-hidden', 'true')
        //     loader.style.display = 'none'
        // }



    }


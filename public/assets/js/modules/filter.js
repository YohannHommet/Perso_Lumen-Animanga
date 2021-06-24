const filter =
    {
        init: () =>
        {
            console.log("filter.init")
            // filter.bindEvents();
        },

        /**
         * Ajoute les comportements aux différents éléments
         */
        // bindEvents: () =>
        // {
        //     /** @property {HTMLFormElement} form */
        //     this.form = document.querySelector('.js-filter-form')
        //     this.form.addEventListener('submit', filter.handleFormSubmit.bind(this));
        // },
        //
        //
        // handleFormSubmit: (e) =>
        // {
        //     console.log('ok');
        //     this.form = e.target;
        //     this.input = this.form.querySelector('.js-filter-input')
        // },
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


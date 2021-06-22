const citations =
    {
        randomButton: document.querySelector('.js-quote-button'),

        init: () =>
        {
            citations.handleNewApiRequest();
            citations.randomButton.addEventListener('click', citations.handleNewApiRequest)
        },


        handleNewApiRequest: () =>
        {
            const fetchOptions = {
                method: "GET",
                mode: "cors",
                cache: "no-cache"
            };

            const animechanApi = "https://animechan.vercel.app/api/random";

            const promise = fetch(animechanApi, fetchOptions);
            promise.then();
            promise
                .then(response => response.json())
                .then(quote => citations.showRandomQuote(quote));
        },


        /**
         *
         * @param {JSON} quote Json response from API
         */
        showRandomQuote: (quote) =>
        {
            const animeTitleElement   = document.querySelector('.js-quote-title');
            const animeContentElement = document.querySelector('.js-quote-content');
            const animeAuthorElement  = document.querySelector('.js-quote-author');

            animeTitleElement.textContent = quote.anime;
            animeContentElement.textContent = quote.quote;
            animeAuthorElement.textContent = quote.character;

        }


    }

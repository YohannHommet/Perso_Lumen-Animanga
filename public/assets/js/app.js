const app =
    {
        init: () =>
        {
            citations.init();
            filter.init();
        }
    }

    document.addEventListener('DOMContentLoaded', app.init);

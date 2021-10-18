export default () => {
    const searchClient = algoliasearch('Y200VLKSAK', '7de9716434e23c136dd1ae12b6c79f3a');

    const search = instantsearch({
        indexName: 'procedures',
        searchClient,
        routing: true,
        searchFunction: function (helper) {
            if (helper.state.query === '') {
                document.getElementById('search_res').classList.add('hidden');
                document.querySelector('#hits-1').innerHTML = '';
                document.querySelector('#hits-2').innerHTML = '';
                document.querySelector('#hits-3').innerHTML = '';
                return;
            } else {
                document.getElementById('search_res').classList.remove('hidden');
            }

            helper.search();
        }
    });

    search.addWidgets([
        instantsearch.widgets.searchBox({
            container: '#searchbox',
            placeholder: 'Pradėkite rašyti...',
            autofocus: true,
            showLoadingIndicator: true,
        }),

        instantsearch.widgets.hits({
            container: '#hits-1',
            templates: {
                item:
                    '<a href="/proceduros/{{slug}}" class="block">{{#helpers.highlight}}{ "attribute": "title.lt" }{{/helpers.highlight}}</a>',
            },
        }),

        instantsearch.widgets
            .index({ indexName: 'doctors' })
            .addWidgets([
                instantsearch.widgets.hits({
                    container: '#hits-2',
                    templates: {
                        item:
                            '<a href="/gydytojai/{{slug}}" class="block">{{#helpers.highlight}}{ "attribute": "title" }{{/helpers.highlight}}</a>',
                    },
                }),
            ]),

        instantsearch.widgets
            .index({ indexName: 'posts' })
            .addWidgets([
                instantsearch.widgets.hits({
                    container: '#hits-3',
                    templates: {
                        item:
                            '<a href="/naujienos/{{slug}}" class="block">{{#helpers.highlight}}{ "attribute": "title.lt" }{{/helpers.highlight}}</a>',
                    },
                }),
            ]),
    ]);

    search.start();

    document.getElementById('trigger_search').addEventListener('click', function() {
        setTimeout(() => document.querySelectorAll('.ais-SearchBox-input')[0].focus(), 300);
    });
}

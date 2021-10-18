import scrollMonitor from 'scrollmonitor'

export default () => {
    const footer_map = document.getElementById('footer_map');
    const contacts_map = document.getElementById('contacts_map');
    const footerMapelementWatcher = scrollMonitor.create(footer_map);

    if (contacts_map) {
        const contactMapelementWatcher = scrollMonitor.create(contacts_map);

        contactMapelementWatcher.one('enterViewport', function() {
            const script = document.createElement('script');
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD-MB6x16RzU_f51DYwbMM5XU-2zw6lajk&callback=initMapFooter';

            window.initMapFooter = function() {
                new google.maps.Map(document.getElementById('contacts_map'), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 8
                });
            };

            document.head.appendChild(script);
        });
    }

    footerMapelementWatcher.one('enterViewport', function() {
        const script = document.createElement('script');
        script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD-MB6x16RzU_f51DYwbMM5XU-2zw6lajk&callback=initMap';

        window.initMap = function() {
            new google.maps.Map(document.getElementById('footer_map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        };

        document.head.appendChild(script);
    });
}

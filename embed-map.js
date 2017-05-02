window.addEventListener('load', function() {
    var uluru = {
        lat: 50.0728431,
        lng: 14.435439999999971
    };

    function initMap(point) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: point
        });
        var marker = new google.maps.Marker({
            position: point,
            map: map
        });
    }

    initMap(uluru);
});
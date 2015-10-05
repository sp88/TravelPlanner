var cat;

$(".industries-tabs li a").on("click", function () {
    cat = $(this).attr('id');
});

function ajaxGetMarkers() {

    var trobber = $("#map-trobber");
    trobber.fadeIn(500);

    var error = $("#map-error");
    error.hide();

    var options_container = jQuery("div#map_options");
    var clusters = options_container.find(".clusters").html();
    var markers_type = options_container.find(".markers-type").html();

    if (clusters == 'true') {
        clusters = true;
    } else {
        clusters = false;
    }
    if (clusters) {
        jQuery("#map").removeData();
        reloadclearmap();
    } else {
        $.goMap.clearMarkers();
    }


    if (cat) cat = cat.toLowerCase();
    else cat = "allcat";

    var companus = new Array();
    var companus_count = $("#markers_count").html();
    for (i = 1; i <= companus_count; i++) {
        var companu_id = '#marker-' + i;
        companus[i] = new Array();
        companus[i][1] = $(companu_id).find("div.lat").html();
        companus[i][2] = $(companu_id).find("div.lan").html();
        companus[i][3] = $(companu_id).find("div.group").html();
        companus[i][4] = $(companu_id).find("div.icon").html();
        companus[i][6] = $(companu_id).find("div.name").html();
        companus[i][7] = $(companu_id).find("div.where").html();
        companus[i][8] = $(companu_id).find("div.id").html();
        if ($(companu_id).hasClass('load')) {
            companus[i][9] = true;
        } else {
            companus[i][9] = false;
        }
        companus[i][10] = $(companu_id).find("div.html").html();
        displayInfoBox(companus[i][8], false);
    }
    var counter = 0;
    for (i = 1; i <= companus_count; i++) {
        var companu_group = companus[i][3];
        companu_group = companu_group.toLowerCase();
        if (companu_group == cat) {
            if (markers_type == 'html') {
                $.goMap.createMarker({
                    latitude: companus[i][1],
                    longitude: companus[i][2],
                    id: companus[i][8],
                    group: companus[i][3],
                    icon: companus[i][4]
                });
                displayInfoBox(companus[i][8], true);

            } else {
                $.goMap.createMarker({
                    latitude: companus[i][1],
                    longitude: companus[i][2],
                    id: companus[i][8],
                    group: companus[i][3],
                    icon: companus[i][4],
                    html: companus[i][10]
                });
            }
            counter++;
        } else if (cat == "allcat") {
            if (companus[i][9]) {
                if (markers_type == 'html') {
                    $.goMap.createMarker({
                        latitude: companus[i][1],
                        longitude: companus[i][2],
                        id: companus[i][8],
                        group: companus[i][3],
                        icon: companus[i][4]
                    });
                    displayInfoBox(companus[i][8], true);

                } else {
                    $.goMap.createMarker({
                        latitude: companus[i][1],
                        longitude: companus[i][2],
                        id: companus[i][8],
                        group: companus[i][3],
                        icon: companus[i][4],
                        html: companus[i][10]
                    });
                }
                counter++;
            }
        }
    }
    if (counter == 0) {
        var map_lat = $("#markers_center").find("div.latitude").html();
        var map_lng = $("#markers_center").find("div.longitude").html();
        map_lat = Number(map_lat);
        map_lng = Number(map_lng);
        $.goMap.createMarker({
            latitude: map_lat + 0.2,
            longitude: map_lng + 0.3,
            icon: '   ',
            id: 'center-1'
        });
        $.goMap.createMarker({
            latitude: map_lat - 0.2,
            longitude: map_lng - 0.3,
            icon: '   ',
            id: 'center-2'
        });
        $.goMap.createMarker({
            latitude: map_lat + 0.2,
            longitude: map_lng - 0.3,
            icon: '   ',
            id: 'center-3'
        });
        $.goMap.createMarker({
            latitude: map_lat - 0.2,
            longitude: map_lng + 0.3,
            icon: '   ',
            id: 'center-4'
        });
        error.show();
        setTimeout(function () {
            error.fadeOut(500);
        }, 5000);
    }

    jQuery.goMap.fitBounds();

    $.goMap.removeMarker('center-1');
    $.goMap.removeMarker('center-2');
    $.goMap.removeMarker('center-3');
    $.goMap.removeMarker('center-4');

    if (clusters) {
        var markers = [];
        for (var i in $.goMap.markers) {
            var temp = $($.goMap.mapId).data($.goMap.markers[i]);
            markers.push(temp);
        }
        var markerclusterer = new MarkerClusterer($.goMap.map, markers);
    }

    setTimeout(function () {
        jQuery("#map-trobber").fadeOut(500);
    }, 500);

}
var map;

function initMap() {


    var latLng = {
        lat: parseFloat(options.latitude),
        lng: parseFloat(options.longitude)
    };

    map = new google.maps.Map(document.getElementById('map'), {
        center: latLng,
        zoom: parseInt(options.zoom)
    });


    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: 'La Pizzeria'

    });
}
$ = jQuery.noConflict();
$(document).ready(function() {

    $('html').removeClass('csscolumns');

    // Menu button
    $('.mobile-menu a').on('click', function() {
        $('nav.site-nav').toggle('slow');
    });


    // Show the mobile menu
    var breakPoint = 768;
    $(window).resize(function() {
        if ($(document).width() >= breakPoint) {
            $('nav.site-nav').show();
        } else {
            $('nav.site-nav').hide();
        }
    });

    // Fluid box plugin

    jQuery('.gallery a').each(function() {
        jQuery(this).attr({ 'data-fluidbox': '' });
    });

    if (jQuery('[data-fluidbox]').length > 0) {
        jQuery('[data-fluidbox]').fluidbox();
    }
});
// Adapt the map
var map = $('#map');
var breakPoint = 768;
if (map.length > 0) {
    if ($(document).width() >= breakPoint) {
        displayMap(0);
    } else {
        displayMap(300);
    }
}
$(window).resize(function() {
    if ($(document).width() >= breakPoint) {
        displayMap(0);
    } else {
        displayMap(300);
    }
});

function displayMap(value) {
    if (value == 0) {
        var locationSection = $('.location-reservation');
        var locationHeight = locationSection.height();
        $('#map').css({ 'height': locationHeight });
    } else {
        $('#map').css({ 'height': value });
    }
}
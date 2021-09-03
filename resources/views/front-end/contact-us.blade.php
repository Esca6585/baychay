{{-- <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact US || Rongcha - Matcha Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- All CSS Hear -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/mainmenu.css">
    <!-- Style CSS Hear -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
    <!-- Add your application content here -->

    


    <!-- jquery -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- all plugins JS hear -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mainmenu.js"></script>
    <script src="js/ajax-email.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
    <script>
        $disable_mouse_scroll = false;

        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: $disable_mouse_scroll,
                center: new google.maps.LatLng(40.6700, -73.9400),
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "hue": "#ff0000"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#42b311"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ],
            };
            var mapElement = document.getElementById('google-Map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                icon: 'http://demo.wphash.com/rongcha/wp-content/uploads/2018/07/green-map-marker.png',
                title: 'Snazzy!',
                animation: google.maps.Animation.BOUNCE
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>
    <!-- main JS -->
    <script src="js/main.js"></script>

    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html> --}}

@extends('layouts.baychay-template')

@section('contact-us')
    @include('layouts.contact-us')
@endsection
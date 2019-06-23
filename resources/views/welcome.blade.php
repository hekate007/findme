<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"
              href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893"/>
        <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js"
                type="text/javascript" charset="utf-8"></script>
        <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js"
                type="text/javascript" charset="utf-8"></script>

        <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

        <title>#FindMe</title>

        <!-- Styles -->
        <style>
            html,
            body {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url("/jpg/bg.jpg");
                /* Фоновый цвет и фоновый рисунок*/
                background-attachment: fixed;
                /* Фон страницы фиксируется */
                background-repeat: repeat-x;
                /* Изображение повторяется по горизонтали */
                -moz-background-size: 100%;
                /* Firefox 3.6+ */
                -webkit-background-size: 100%;
                /* Safari 3.1+ и Chrome 4.0+ */
                -o-background-size: 100%;
                /* Opera 9.6+ */
                background-size: 100%;
                /* Современные браузеры */
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 154px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="bg-light rounded-circle shadow-lg">
                    <p class="title m-b-md text-warning">
                        #FindMe
                    </p>
                </div>

                <div class="links">
                    <a href="{{ url('/organiz') }}" class="text-dark bg-light rounded" style="font-size: 30px;">Организация</a>
                    <a href="https://laracasts.com" class="text-dark bg-light rounded" style="font-size: 30px;">Волонтёр</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div>
                    <p class="text-light">
                        Enter radius to create a circle&nbsp&nbsp
                        <input type="text" id="radius" value=500 placeholder="radius">
                    </p>
                    <p class="text-light">
                        Enter the city to make a marker&nbsp&nbsp
                        <input type="text" id="town" value="Город Краснодар" placeholder="town">
                    </p>
                    <input type="checkbox" id="myCheck" checked>polygon (or curcle)
                    <button onclick="func()">
                        click
                    </button>
                </div>
                <div class="d-flex">
                    <div style="width: 90%; height: 700px" id="mapContainer" class="flex-center"></div>
                </div>
                <p>legend of map</p>
            </div>
        </div>
        <script>
            // Initialize the platform object:
            var platform = new H.service.Platform({
                'app_id': 'OPySOcvVnJ22XDheMqud',
                'app_code': 'oOZil_sqOqlQu9oXdOGCNg'
            });
            var pixelRatio = window.devicePixelRatio || 1;
            var defaultLayers = platform.createDefaultLayers({
                tileSize: pixelRatio === 1 ? 256 : 512,
                ppi: pixelRatio === 1 ? undefined : 320
            });
            // Obtain the default map types from the platform object
            var maptypes = platform.createDefaultLayers();

            // Instantiate (and display) a map object:
            var map = new H.Map(
                document.getElementById('mapContainer'),
                maptypes.normal.map,
                {
                    zoom: 10.5,
                    center: {lng: 38.98, lat: 45.03}
                });
            var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

            setUpClickListener(map);
            // Create the default UI components
            var ui = H.ui.UI.createDefault(map, maptypes);

            var geocodingParams = {
                searchText: 'Краснодар'
            };

            function func() {
                geocodingParams.searchText = document.getElementById('town').value;
                geocoder.geocode(geocodingParams, addMarker, function (e) {
                    alert(e);
                });
            }

            function setUpClickListener(map) {
                var arr = [];
                var count = 0;
// Attach an event listener to map display
// obtain the coordinates and display in an alert box.
                map.addEventListener('tap', function (evt) {
                    var coord = map.screenToGeo(evt.currentPointer.viewportX,
                        evt.currentPointer.viewportY);
                    if (document.getElementById("myCheck").checked == true) {
                        arr.push(Math.abs(coord.lat).toFixed(4), Math.abs(coord.lng).toFixed(4), 100);
                        map.addObject(new H.map.Circle(
                            {
                                lat: Math.abs(coord.lat),
                                lng: Math.abs(coord.lng)
                            }, 10, {
                                style: {
                                    strokeColor: 'rgba(0, 128, 128)', // Color of the perimeter
                                    lineWidth: 1,
                                    fillColor: 'rgba(0, 128, 128)' // Color of the circle
                                }
                            }
                        ));

//alert(arr);
                        count = count + 1;
                        if (count == 4) {
                            var lineString = new H.geo.LineString(
                                arr,
                                'values lat lng alt'
                            );
                            arr = [];
                            map.addObject(new H.map.Polygon(lineString, {
                                    style: {
                                        strokeColor: '#E8FA75',
                                        lineWidth: 1
                                    },
                                })
                            );
                            setUpClickListener(map);
                        }
                    } else {
                        map.addObject(new H.map.Circle(
// The central point of the circle
                            {
                                lat: Math.abs(coord.lat),
                                lng: Math.abs(coord.lng)
                            },
// The radius of the circle in meters
                            document.getElementById('radius').value,
                            {
                                style: {
                                    strokeColor: 'rgba(55, 85, 170, 0.4)', // Color of the perimeter
                                    lineWidth: 1,
                                    fillColor: 'rgba(0, 128, 0, 0.2)' // Color of the circle
                                }
                            }
                        ));
                    }
                });
            }


            var addMarker = function (result) {
                var locations = result.Response.View[0].Result,
                    position,
                    marker;
// Add a marker for each location found
                for (i = 0; i < locations.length; i++) {
                    position = {
                        lat: locations[i].Location.DisplayPosition.Latitude,
                        lng: locations[i].Location.DisplayPosition.Longitude
                    };

//маркер
                    marker = new H.map.Marker(position);
                    map.addObject(marker);
                    map.center = position;
                }
            };

            // Get an instance of the geocoding service:
            var geocoder = platform.getGeocodingService();

            // Call the geocode method with the geocoding parameters,
            // the callback and an error callback function (called if a
            // communication error occurs):
            geocoder.geocode(geocodingParams, onResult, function (e) {
                alert(e);
            });
        </script>
    </body>
</html>

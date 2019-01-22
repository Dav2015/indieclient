<!DOCTYPE html>
<html>
    <head>
        <title>Accessing Arguments in UI Events</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
                height: 100%;
            }
            /* Optional: Makes the sample page fill the window. */
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body>

        <div class="container " style="margin-top: 1%">
            <div class="row">
                <div class="col align-self-center">
                    <button type="button" class="btn btn-primary btn-lg" onclick="redirect()">Create Route</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div  style="margin-top: 1%" class="alert alert-info"  role="alert">
                        Click two or more times in the map to create a route. (only works in iberian peninsula)
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col">
                    <div  style="margin-top: 1%" class="alert alert-info"  role="alert">
                        For example: Click in Lisbon and Porto or Lisbon and Sagres or Lisbon and Barcelona
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 10px" id="map"></div>

        <script>
            let latLongArr = [];
            let counter = 0;

            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 7,
                    center: {lat: 38.8572032, lng: -7.1181092},
                });

                map.addListener('click', function (e) {
                    placeMarkerAndPanTo(e.latLng, map);
                    savelatLng(e.latLng)
                });
            }

            function placeMarkerAndPanTo(latLng, map) {
                counter++;
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    title: "Position: " + counter.toString(),
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    }
                });
                map.panTo(latLng);
            }

            function savelatLng(latLng) {
                latLongArr.push(latLng.toString());
            }

            function cleanLoc(latLng) {
                return latLng.toString().replace("(", "").replace(")", "").replace(" ", "");
            }

            function locToAttribute() {
                let out = "";
                for (let i = 0; i < latLongArr.length; i++) {
                    out += cleanLoc(latLongArr[i]) + ";";
                }
                out = out.substring(0, out.length - 1);
                return out;
            }

            function redirect() {
                window.location = "https://indieclient.azurewebsites.net/test/route?points=" + locToAttribute();
            }

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBev6P8BEdL-i1NpJV5uHr9VTonYmbEfQE&callback=initMap"
        type="text/javascript"></script>
    </body>
</html>
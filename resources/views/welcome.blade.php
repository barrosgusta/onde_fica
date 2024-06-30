@extends("layout/app")
@section("title")
    Imigra Fácil
@endsection
@section("head")
    <style>
        #map {
            height: 500px; /* Set the height of the map */
            width: 100%; /* The width of the map */
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsBjjtjYEHlFyIzM4gYYR7o-CBML1kUko"></script>
    <script>
        function initMap() {
            // Map options
            var options = {
                zoom: 13,
                center: { lat: -27.2163185, lng: -49.6428769 },
                mapId: '30578bac5d79b749'
            }

            // Create the map
            var map = new google.maps.Map(document.getElementById('map'), options);

            // Array of markers
            var markers = [
                {
                    coords: { lat: -27.2163539, lng: -49.6454764 },
                    content: `
                    <div>
                        <h2 class="text-xl"><strong>{{ __('places.place1Name') }}</strong></h2>
                        <p>{{ __('places.place1About') }}</p>
                        <p><strong>{{ __('home.address') }}</strong> Rua dos Navegantes, 53, Centro, Rio do Sul - SC, 89160-000</p>
                        <p><strong>{{ __('home.phone') }}</strong> (47) 3531-1100</p>
                        <a href="https://maps.app.goo.gl/HnTd4zvPoXwQBmyc8" class="text-blue-500">Local no Google Maps</a>
                    </div>
                    `
                },
                {
                    coords: { lat: -27.239953109171843, lng: -49.67853400000649 },
                    content: `
                    <div>
                        <h2 class="text-xl"><strong>{{ __('places.place2Name') }}</strong></h2>
                        <p>{{ __('places.place2About') }}</p>
                        <p><strong>{{ __('home.address') }}</strong> Estrada da Madeira, n° 2100 - Barragem</p>
                        <p><strong>{{ __('home.phone') }}</strong> (47) 3521-6092</p>
                        <a href="https://maps.app.goo.gl/P5BPythqueeerTXL7" class="text-blue-500">Local no Google Maps</a>
                    </div>
                    `
                },
                {
                    coords: { lat: -27.217757651741636, lng: -49.643661302585 },
                    content: `
                    <div>
                        <h2 class="text-xl"><strong>{{ __('places.place4Name') }}</strong></h2>
                        <p>{{ __('places.place4About') }}</p>
                        <p><strong>{{ __('home.address') }}</strong> Rua Vidal Ramos, 338, Centro, Rio do Sul - SC, 89160-000</p>
                        <a href="https://maps.app.goo.gl/DtajCzVHEufWeBSF9" class="text-blue-500">Local no Google Maps</a>
                    </div>
                    `
                },
                {
                    coords: { lat: -27.2252364707927, lng: -49.652333312774104 },
                    content: `
                    <div>
                        <h2 class="text-xl"><strong>{{ __('places.place5Name') }}</strong></h2>
                        <p>{{ __('places.place5About') }}</p>
                        <p><strong>{{ __('home.address') }}</strong> Rua dos Caçadores, 111, Bairro Canta Galo, Rio do Sul - SC, 89160-000</p>
                        <a href="https://maps.app.goo.gl/wZL3sF4ew6XDmtCi7" class="text-blue-500">Local no Google Maps</a>
                    </div>
                    `
                },
                {
                    coords: { lat: -27.21459461283213, lng: -49.643966191361244 },
                    content: `
                    <div>
                        <h2 class="text-xl"><strong>{{ __('places.place6Name') }}</strong></h2>
                        <p>{{ __('places.place6About') }}</p>
                        <p><strong>{{ __('home.address') }}</strong> R. São João, 180 - Centro, Rio do Sul - SC, 89160-147</p>
                        <a href="https://maps.app.goo.gl/wZL3sF4ew6XDmtCi7" class="text-blue-500">Local no Google Maps</a>
                    </div>
                    `
                }
            ];

            for (var i = 0; i < markers.length; i++) {
                addMarker(markers[i]);
            }

            function addMarker(props) {
                var marker = new google.maps.Marker({
                    position: props.coords,
                    map: map,
                    icon: props.iconImage // You can add custom icons if needed
                });

                // Check for custom content
                if (props.content) {
                    var infoWindow = new google.maps.InfoWindow({
                        content: props.content
                    });

                    marker.addListener('click', function () {
                        infoWindow.open(map, marker);
                    });
                }
            }
        }
    </script>
@endsection
@section("content")
    <h1 class="text-5xl xl:text-6xl mb-16 w-3/4">
        {{ __('home.welcome') }} <strong>{{ __('home.site') }}</strong>
    </h1>
    <div class="flex flex-col gap-7">
        <section>
            <h2 class="text-3xl mb-3">
                <strong>{{ __('home.places') }}</strong>
            </h2>
            <div id="map" class= "rounded-xl shadow-xl dark:invert dark:hue-rotate-180 border-2 border-black"></div>
        </section>
        <hr>
        <section>
            <h2 class="text-3xl mb-3">
                <strong>{{ __('home.neededDocs') }}</strong>
            </h2>
            <div class="flex flex-col gap-3">
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc1') }}</strong></h3>
                    <p>{{ __('docs.doc1About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc2') }}</strong></h3>
                    <p>{{ __('docs.doc2About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc3') }}</strong></h3>
                    <p>{{ __('docs.doc3About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc4') }}</strong></h3>
                    <p>{{ __('docs.doc4About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc5') }}</strong></h3>
                    <p>{{ __('docs.doc5About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc6') }}</strong></h3>
                    <p>{{ __('docs.doc6About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc7') }}</strong></h3>
                    <p>{{ __('docs.doc7About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc8') }}</strong></h3>
                    <p>{{ __('docs.doc8About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc9') }}</strong></h3>
                    <p>{{ __('docs.doc9About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('docs.doc10') }}</strong></h3>
                    <p>{{ __('docs.doc10About') }}</p>
                </div>
            </div>
        </section>
        <hr>
        <section>
            <h2 class="text-3xl mb-3">
                <strong>{{ __('home.guidance') }}</strong>
            </h2>
            <div class="flex flex-col gap-3">
                <div>
                    <h3 class="text-xl"><strong>{{ __('guidance.guidance1') }}</strong></h3>
                    <p>{{ __('guidance.guidance1About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('guidance.guidance2') }}</strong></h3>
                    <p>{{ __('guidance.guidance2About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('guidance.guidance3') }}</strong></h3>
                    <p>{{ __('guidance.guidance3About') }}</p>
                </div>
                <div>
                    <h3 class="text-xl"><strong>{{ __('guidance.guidance4') }}</strong></h3>
                    <p>{{ __('guidance.guidance4About') }}</p>
                </div>
            </div>
        </section>
    </div>
@endsection
@extends('front.index')
@section('content')
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- HERE JavaScript Libs & Style Sheets-->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://js.api.here.com/v3/3.1/mapsjs-ui.css"
    />
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
    ></script>
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
    ></script>
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"
    ></script>
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"
    ></script>
    <!-- HERE JavaScript Libs & Style Sheets end-->
  
  </head>
  <body dir="rtl">


        <div class="container py-5">

          <div class="section-map">
            <div class="map">
              
              <!--In the div HERE Map will be rendered-->
              <div id="mapContainer"></div>
      
              
            </div>
          </div>
      
        </div>

    
      <script>
        //Step 1: initialize communication with the platform
        // Replace variable YOUR_API_KEY with your own apikey
        var platform = new H.service.Platform({
          apikey: "nG7vsKlAkhghF2M2fj-SgSPtBpkmjxCM83jGnGv1lP4",
        });
        var defaultLayers = platform.createDefaultLayers();
        //Step 2: initialize a map - this map is focused on Egypt
        var map = new H.Map(
          document.getElementById("mapContainer"),
          defaultLayers.vector.normal.map,
          {
            center: { lat: 26.8206, lng: 30.8025 }, // Centered on Egypt
            zoom: 5, // Zoom level to focus on Egypt
            pixelRatio: window.devicePixelRatio || 1,
          }
        );
        // add a resize listener to make sure that the map occupies the whole container
        window.addEventListener("resize", () => map.getViewPort().resize());
        //Step 3: make the map interactive
        // MapEvents enables the event system
        // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
  
        // Create the default UI components
        var ui = H.ui.UI.createDefault(map, defaultLayers);
  
        // Array of locations for the pins in Egypt
        var locations = [
          { name: "Cairo", lat: 30.0444, lng: 31.2357 },
          { name: "Alexandria", lat: 31.2001, lng: 29.9187 },
          { name: "Luxor", lat: 25.6872, lng: 32.6396 },
          { name: "Aswan", lat: 24.0889, lng: 32.8998 },
          { name: "Sharm El Sheikh", lat: 27.9158, lng: 34.3297 },
          { name: "Hurghada", lat: 27.2579, lng: 33.8116 },
          { name: "Dahab", lat: 28.5093, lng: 34.5136 },
          { name: "Marsa Alam", lat: 25.1245, lng: 34.589 },
          { name: "Tanta", lat: 30.7917, lng: 30.9934 },
          { name: "Suez", lat: 29.9737, lng: 32.5263 },
        ];
  
        // Add an event listener to continuously trigger the customization function during map interaction
        map.addEventListener("mapviewchange", customizeInfoBubbleStyle);
  
        function customizeInfoBubbleStyle() {
          // Create a red icon for the markers
          var icon = new H.map.Icon(
            "https://maps.google.com/mapfiles/ms/icons/green-dot.png"
          );
  
          // Loop through each marker and customize the info bubble
          locations.forEach((location) => {
            // Create a marker with the custom icon
            var marker = new H.map.Marker(
              { lat: location.lat, lng: location.lng },
              { icon: icon }
            );
            map.addObject(marker);
  
            // Add an event listener to open the info bubble when clicking on the marker
            marker.addEventListener("tap", function (evt) {
              // Create a new info bubble for each marker click
              var bubble = new H.ui.InfoBubble(
                { lat: location.lat, lng: location.lng },
                {
                  content: `
                      <div class="info-bubble">
                          <img src="images/green1.jpg" class="logo" alt="Logo">
                          <ul>
                              <li>${location.name}</li>
                              <li>${location.name} Land</li>
                              <li>2478 K.M</li>
                              <!-- Add more list items as needed -->
                          </ul>
                      </div>`,
                }
              );
  
              // Close any previously opened bubbles
              ui.getBubbles().forEach((b) => ui.removeBubble(b));
  
              // Open the new bubble
              ui.addBubble(bubble);
            });
          });
        }
      </script>
      <script src="map.js"></script>
    </body>

@endsection
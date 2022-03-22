<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />
  <!-- <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css"> -->
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">

  <title>Larga Concept</title>
  <style>
    body {
      margin: 0;
    }

    #map {
      margin-top: 5vh;
      margin-left: auto;
      margin-right: auto;
      height: 85vh;
      width: 98vw;
    }

    button {
      display: block;
      margin-top: 5px;
      margin-left: auto;
      margin-right: auto;
      height: 5em;
      width: 30em;
    }
  </style>
  <script src="script.js" defer></script>
</head>

<body>
  <div id="map_container">
    <div id='map'></div>
  </div>
  <div>
    <button id="click_button">NEXT PAGE</button>
  </div>
</body>

</html>
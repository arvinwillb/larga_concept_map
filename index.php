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

  <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/master.css" rel="stylesheet">

  <title>Larga Concept</title>
  <style>
    #map {
      height: 85vh;
      margin: 0;
    }

    #click_button {
      display: block;
      margin-top: 20px;
      margin-left: auto;
      margin-right: auto;
      height: 8vh;
      width: 80%;
    }
  </style>
  <script src="script.js" defer></script>
</head>

<body>
  <div class="wrapper">
    <div id="body" class="active">
      <div class="content">
        <div class="container-fluid">
          <div class="page-title">

          </div>
          <div id="map_container">
            <div id='map'></div>
          </div>
          <div>
            <button id="click_button" class="btn btn-primary">NEXT PAGE</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>
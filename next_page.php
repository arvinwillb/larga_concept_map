<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blank Page | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">

            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "root", "new_test_db");

                        if (mysqli_query(mysqli_connect("localhost", "root", "root", "new_test_db"), "insert into larga_concept_map (map_data_dist, map_data_dur, map_data_destination_name) values ('" . $_GET['distance'] . "', '" . $_GET['duration'] . "', '" . $_GET['destination'] . "');")) {
                            echo '<h1>Destination: ' . $_GET['destination'] . '</h1>';
                            echo '<h1>Distance in km: ' . $_GET['distance'] . '</h1>';
                            echo '<h1>Duration (mins): ' . $_GET['duration'] . '</h1>';
                        } else {
                            echo 0;
                        }
                        ?>
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
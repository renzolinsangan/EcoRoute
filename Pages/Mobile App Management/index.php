<?php
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/EcoRoute/";
set_include_path($rootPath);
include('Modules/phpInclude.php');
include('Includes/php/mobileapp/mobileappModule.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoute</title>
    <link rel="stylesheet" href="../../Includes/css/mobileapp/mobileapp-style.css">
    <link rel="stylesheet" href="../../Includes/css/table-style.css">
    <?php include_once("Modules/header.php"); ?>
</head>
<body>
    <div class="main-content-wrapper">
        <?php include("Includes/php/sidebar.php"); ?>
        <div class="flex-grow-1 p-4" style="overflow-y: auto;">
            <div class="mobileapp-date-container row mb-4">
                <div class="col d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-calendar3" style="font-size: 2rem;"></i>
                        <div class="ms-2 d-flex flex-column justify-content-between" style="height: 2rem;">
                            <span id="currentDate" style="line-height: 1;"><?php echo date("M d, Y")?></span>
                            <small id="currentTime" style="line-height: 1;"><?php echo date("h:i A"); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobileapp-text-container row mb-4">
                <div class="col-12 col-sm-7 col-md-7 d-block align-items-center justify-content-start ps-sm-4 ps-md-4">
                    <h1 class="mobileapp-text-title fw-bold">MOBILE APP</h1>
                    <h1 class="mobileapp-text-title-extension fw-bold">MANAGEMENT</h1>
                </div>
            </div>
            <hr class="mb-4"> <!-- HORIZONTAL LINE -->
            <div class="mobileapp-button-container row d-flex ps-sm-4 ps-md-4 mb-4">
                <div class="col-12 col-sm-4 col-md-4">
                    <button type="button" id="ecorouteMapBtn" class="evaluated-list-btn btn me-2 ps-4 pe-4 active">EcoRoute Map</button>
                    <button type="button" id="sendNotificationBtn" class="application-list-btn btn ps-4 pe-4">Send Notifications</button>
                </div>
            </div>
            <div id="ecorouteMapContainer" class="mobileapp-ecoroutemap-application-container row ps-sm-4 ps-md-4 mb-0 mb-sm-2 mb-md-2">
                <p class="fw-bold">EcoRoute Map</p>
                <div class="col-12 col-sm-3 col-md-3 mb-4">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search fs-5"></i></span>
                        <input type="text" class="application-search-input form-control p-2" placeholder="Search">
                    </div>
                </div>
                <div class="col-12">
                    <div id="map"></div>
                </div>
            </div>
            <div id="sendNotificationContainer" class="sendnotification-application-container row ps-sm-4 ps-md-4 mb-0 mb-sm-2 mb-md-2 mt-0 d-none">
                <div class="sendnotification-application-container-note col-12 col-sm-12 col-md-12 mb-4">
                    <span class="fw-bold">Note: </span>
                    <span>You can send pre-made </span>
                    <span class="fw-bold">Eco-Alerts </span>
                    <span>and </span>
                    <span class="fw-bold">Eco-Travel Tips </span>
                    <span>or create and write on your own.</span>
                </div>
                <hr class="mb-4"> <!-- HORIZONTAL LINE -->
                <div class="sendnotification-application-container-send col-12 col-sm-12 col-md-12 mb-4">
                    <h2 class="fw-bold">Send Eco-Alerts & Eco-Travel Tips</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php include_once("Modules/footer.php"); ?>
    <!-- <script>var sqlData = "<?php echo addslashes($sqlData); ?>"; </script> -->
    <script type="text/javascript" src="../../Includes/js/mobileapp/mobileapp-js.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDkOZ87G-Zi9aT5PMOoujlfuOY58YErCU&callback=initMap"></script>
</body>
</html>
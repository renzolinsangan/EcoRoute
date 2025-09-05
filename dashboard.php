<?php
include('Modules/phpInclude.php');
include('Includes/php/dashboard/dashboardModule.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoute</title>
    <link rel="stylesheet" href="Includes/css/dashboard/dashboard-style.css">
    <?php include_once("Modules/header.php"); ?>
</head>
<body>
    <div class="main-content-wrapper">
        <?php include("Includes/php/sidebar.php"); ?>
        <div class="flex-grow-1 p-4" style="overflow-y: auto;">
            <div class="dashboard-date-container row mb-4">
                <div class="col d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center">
                        <!-- Calendar icon -->
                        <i class="bi bi-calendar3" style="font-size: 2rem;"></i>

                        <!-- Date/Time stacked -->
                        <div class="ms-2 d-flex flex-column justify-content-between" style="height: 2rem;">
                            <span id="currentDate" style="line-height: 1;"><?php echo date("M d, Y")?></span>
                            <small id="currentTime" style="line-height: 1;"><?php echo date("h:i A"); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-text-container row">
                <div class="col-12">
                    <!-- <div class="dashboard-text-container-card card ps-4 pt-3 pb-3"> -->
                        <h1 class="dashboard-text-title fw-bold">Hello, ADMIN!</h1>
                        <p class="text-body-secondary">Manage user accounts and track sustainability within Tagaytay City.</p>
                    <!-- </div> -->
                </div>
            </div>
            <hr class="mb-5"> <!-- HORIZONTAL LINE -->
            <div class="dashboard-data-container row">
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<< DATA CARDS <<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
                <?php echo cardBuilder('bi bi-people', 'Travelers in EcoRoute', '50'); ?>
                <?php echo cardBuilder('bi bi-leaf', 'Tourist Spots & Establishments in EcoRoute', '30'); ?>
                <?php echo cardBuilder('bi bi-buildings', 'Sustainability Recognized', '30'); ?>
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<< DATA CARDS <<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
            </div>
            <hr class="mb-5 mt-5"> <!-- HORIZONTAL LINE -->
            <div class="dashboard-map-container row">
                <div class="col-12">
                    <div class="dashboard-map-container-card card">
                        <div class="card-body ps-4 pe-4 pb-4">
                            <p class="fs-4 fw-bold">EcoRoute Map Preview</p>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php include_once("Modules/footer.php"); ?>
    <script type="text/javascript" src="Includes/js/dashboard/dashboard-js.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDkOZ87G-Zi9aT5PMOoujlfuOY58YErCU&callback=initMap"></script>
</body>
</html>
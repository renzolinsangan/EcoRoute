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
            <div class="dashboard-text-container row mb-4">
                <div class="col-12">
                    <div class="dashboard-text-container-card card ps-4 pt-3 pb-3">
                        <h1 class="dashboard-text-title">Hello, ADMIN!</h1>
                        <p class="text-body-secondary">Manage user accounts and track sustainability within Tagaytay City.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php include_once("Modules/footer.php"); ?>
</body>
</html>
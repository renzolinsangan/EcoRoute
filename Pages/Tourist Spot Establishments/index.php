<?php
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/EcoRoute/";
set_include_path($rootPath);
include('Modules/phpInclude.php');
include('Includes/php/touristspots/touristspotsModule.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoute</title>
    <link rel="stylesheet" href="../../Includes/css/touristspots/touristspots-style.css">
    <link rel="stylesheet" href="../../Includes/css/table-styles.css">
    <?php include_once("Modules/header.php"); ?>
</head>
<body>
    <div class="main-content-wrapper">
        <?php include("Includes/php/sidebar.php"); ?>
        <div class="flex-grow-1 p-4" style="overflow-y: auto;">
            <div class="touristspots-date-container row mb-4">
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
            <div class="touristspots-text-container row mb-4">
                <div class="col-12 col-sm-7 col-md-7 d-block align-items-center justify-content-start ps-sm-4 ps-md-4">
                    <h1 class="touristspots-text-title fw-bold">TOURIST SPOTS & ESTABLISHMENTS</h1>
                    <h1 class="touristspots-text-title-extension fw-bold">MANAGEMENT</h1>
                </div>
                <div class="col-1 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="card touristspots-datacount-container-card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="col-2 col-sm-2 col-md-2">
                                <div class="image-container ps-sm-4 ps-md-4 ps-md-4 pe-md-4">
                                    <i class="bi bi-buildings text-center fs-2"></i>
                                </div>
                            </div>
                            <div class="col-1 col-sm-1 col-md-1"></div>
                            <div class="col-7 col-sm-9 col-md-9">
                                <p class="mb-0">Establishments & Tourist Spots in EcoRoute</p>
                                <h1 class="fw-bold"><?php echo count($touristspotsDataArray ); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-4"> <!-- HORIZONTAL LINE -->
            <div class="touristspots-table-container row ps-sm-4 ps-md-4 mb-4">
                <p class="fw-bold">Tourist Spots & Establishments List</p>
                <div class="col-12 col-sm-9 col-md-9" id="travelersTableContainer">
                    <table id="touristspotsTable" class="table table-row-border table-hover dataTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="touristspots-action-container col-12 col-sm-3 col-md-3" id="travelersActionContainer">
                    <div class="touristspots-action-container-card card">
                        <div class="card-header text-center">
                            <h2>Actions</h2>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-4 col-sm-10 col-md-10 text-center mb-2">
                                    <button class="verify-user-btn btn w-100">Verify User</button>
                                </div>
                                <div class="col-4 col-sm-10 col-md-10 text-center mb-2">
                                    <button class="reset-password-btn btn w-100">Reset Password</button>
                                </div>
                                <div class="col-4 col-sm-10 col-md-10 text-center mb-2">
                                    <button class="edit-btn btn w-100">Edit List</button>
                                </div>
                                <div class="col-4 col-sm-10 col-md-10 text-center mb-2">
                                    <button class="delete-user-btn btn w-100">Delete User</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php include_once("Modules/footer.php"); ?>
    <script>var sqlData = "<?php echo addslashes($sqlData); ?>"; </script>
    <script type="text/javascript" src="../../Includes/js/touristspots/touristspots-js.js"></script>
</body>
</html>
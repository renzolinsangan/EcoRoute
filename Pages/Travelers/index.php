<?php
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/EcoRoute/";
set_include_path($rootPath);
include('Modules/phpInclude.php');
include('Includes/php/travelers/travelersModule.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoute</title>
    <link rel="stylesheet" href="../../Includes/css/travelers/travelers-style.css">
    <?php include_once("Modules/header.php"); ?>
</head>
<body>
    <div class="main-content-wrapper">
        <?php include("Includes/php/sidebar.php"); ?>
        <div class="flex-grow-1 p-4" style="overflow-y: auto;">
            <div class="travelers-date-container row mb-4">
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
            <div class="travelers-text-container row mb-4">
                <div class="col-12 col-sm-6 col-md-6 d-flex align-items-center justify-content-start ps-sm-4 ps-md-4">
                    <h1 class="travelers-text-title fw-bold">TRAVELERS MANAGEMENT</h1>
                </div>
                <div class="col-1 col-sm-3 col-md-3"></div>
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="card travelers-datacount-container-card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="col-2 col-sm-2 col-md-2">
                                <div class="image-container ps-sm-4 ps-md-4 ps-md-4 pe-md-4">
                                    <i class="bi bi-people text-center fs-2"></i>
                                </div>
                            </div>
                            <div class="col-1 col-sm-1 col-md-1"></div>
                            <div class="col-7 col-sm-9 col-md-9">
                                <p class="mb-0">Travelers in EcoRoute</p>
                                <h1 class="fw-bold"><?php echo count($travelersDataArray ); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-4"> <!-- HORIZONTAL LINE -->
            <div class="travelers-table-container row ps-sm-4 ps-md-4 mb-4">
                <p class="fw-bold">Travelers List</p>
                <div class="col-12 col-sm-9 col-md-9">
                    <table id="travelersTable" class="table table-row-border table-hover dataTable">
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
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php include_once("Modules/footer.php"); ?>
    <script>var sqlData = "<?php echo addslashes($sqlData); ?>"; </script>
    <script type="text/javascript" src="../../Includes/js/travelers/travelers-js.js"></script>
</body>
</html>
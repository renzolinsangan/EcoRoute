<?php
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/EcoRoute/";
set_include_path($rootPath);
include('Modules/phpInclude.php');
include('Includes/php/sustainability/sustainabilityModule.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoute</title>
    <link rel="stylesheet" href="../../Includes/css/sustainability/sustainability-style.css">
    <link rel="stylesheet" href="../../Includes/css/table-style.css">
    <?php include_once("Modules/header.php"); ?>
</head>
<body>
    <div class="main-content-wrapper">
        <?php include("Includes/php/sidebar.php"); ?>
        <div class="flex-grow-1 p-4" style="overflow-y: auto;">
            <div class="sustainability-date-container row mb-4">
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
            <div class="sustainability-text-container row mb-4">
                <div class="col-12 col-sm-7 col-md-7 d-block align-items-center justify-content-start ps-sm-4 ps-md-4">
                    <h1 class="sustainability-text-title fw-bold">SUSTAINABILITY RECOGNITION</h1>
                    <h1 class="sustainability-text-title-extension fw-bold">MANAGEMENT</h1>
                </div>
                <div class="col-1 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="card sustainability-datacount-container-card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="col-2 col-sm-2 col-md-2">
                                <div class="image-container ps-sm-4 ps-md-4 ps-md-4 pe-md-4">
                                    <i class="bi bi-tree text-center fs-2"></i>
                                </div>
                            </div>
                            <div class="col-1 col-sm-1 col-md-1"></div>
                            <div class="col-7 col-sm-9 col-md-9">
                                <p class="mb-0">Sustainability Recognized</p>
                                <h1 class="fw-bold">1</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-4"> <!-- HORIZONTAL LINE -->
            <div class="sustainability-button-container row d-flex ps-sm-4 ps-md-4 mb-4">
                <div class="col-12 col-sm-4 col-md-4">
                    <button type="button" id="evaluatedListBtn" class="evaluated-list-btn btn me-2 ps-4 pe-4 active">Evaluated List</button>
                    <button type="button" id="applicationListBtn" class="application-list-btn btn ps-4 pe-4">Application List</button>
                </div>
            </div>

            <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<< SECTION FOR EVALUATED LIST <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
            <div id="evaluatedListContainer" class="sustainability-table-container row ps-sm-4 ps-md-4 mb-4">
                <p class="fw-bold">Sustainability Recognition List</p>
                <div class="col-12 col-sm-9 col-md-9 mb-3" id="travelersTableContainer">
                    <table id="sustainabilityTable" class="table table-row-border table-hover dataTable">
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
                <div class="sustainability-action-container col-12 col-sm-3 col-md-3" id="travelersActionContainer">
                    <div class="sustainability-action-container-card card">
                        <div class="card-header text-center">
                            <h2>Actions</h2>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-4 col-sm-10 col-md-10 text-center mb-2">
                                    <button class="update-rating-btn btn w-100">Update Rating</button>
                                </div>
                                <div class="col-4 col-sm-10 col-md-10 text-center mb-2">
                                    <button class="edit-btn btn w-100">Edit Information</button>
                                </div>
                                <div class="col-4 col-sm-10 col-md-10 text-center mb-2">
                                    <button class="remove-badge-btn btn w-100">Remove Badge</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<< SECTION FOR EVALUATED LIST <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->

            <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<< SECTION FOR APPLICATION LIST <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
            <div id="applicationListContainer" class="sustainability-application-container row ps-sm-4 ps-md-4 mb-0 mb-sm-2 mb-md-2 d-none">
                <p class="fw-bold">Sustainability Recognition Applicants</p>
                <div class="col-12 col-sm-3 col-md-3 mb-4">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search fs-5"></i></span>
                        <input type="text" class="application-search-input form-control p-2" placeholder="Search">
                    </div>
                </div>
                <div class="col-12 col-sm-9 col-md-9 mb-4"></div> <!-- FOR FILTER IF WANT -->
                <div class="sustainability-application-container-image col-12 col-sm-3 col-md-3 mb-4 h-350 h-sm-100 h-md-100">
                    <br class="d-block d-sm-none d-md-none"><br class="d-block d-sm-none d-md-none"><br class="d-block d-sm-none d-md-none">
                    <br class="d-block d-sm-none d-md-none"><br class="d-block d-sm-none d-md-none"><br class="d-block d-sm-none d-md-none">
                    <br><br><br>
                </div>
                <div class="sustainability-application-container-data col-12 col-sm-9 col-md-9 mb-0 mb-sm-4 mb-md-4">
                    <div class="sustainability-application-container-data-row row">
                        <!-- <<<<<<<<<<<<<<<<<< HIGHER SECTION <<<<<<<<<<<<<<<<<< -->
                        <div class="col-12 col-sm-3 col-md-3 mt-2 ps-4 d-block">
                            <p class="fw-bold fs-4 mb-0">Minor Basilica of Saint Martin of Tours</p>
                            <p class="fs-5" style="color: #011901;">Taal Town Proper</p>
                        </div>
                        <div class="col-sm-4 col-md-4 d-none d-sm-block d-md-block"></div> <!-- divider -->
                        <div class="col-12 col-sm-5 col-md-5 mt-4 d-flex justify-content-start justify-content-sm-end justify-content-md-end ps-4 pe-sm-5 pe-md-5">
                            <p>Submitted: 04-22-2025</p>
                        </div>
                        <!-- <<<<<<<<<<<<<<<<<< HIGHER SECTION <<<<<<<<<<<<<<<<<< -->
                         
                        <!-- <<<<<<<<<<<<<<<<<< LOWER SECTION <<<<<<<<<<<<<<<<<< -->
                        <div class="col-12 col-sm-3 col-md-3 ps-4 mb-0 mb-sm-4 mb-md-4">
                            <!-- Star Rating -->
                            <div id="starRating" class="d-flex gap-2 mt-2"></div>
                        </div>
                        <div class="col-sm-6 col-md-6 mb-4"></div> <!-- divider -->
                        <div class="col-12 col-sm-3 col-md-3 mb-4 d-flex justify-content-end justify-content-sm-center justify-content-md-center align-items-sm-center align-items-md-center">
                            <button type="button" id="applicationBtnRedirect" class="view-application-btn btn ms-0 ms-sm-4 ms-md-4">View Application</button>
                        </div>
                        <!-- <<<<<<<<<<<<<<<<<< LOWER SECTION <<<<<<<<<<<<<<<<<< -->
                    </div>
                </div>
            </div>
            <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<< SECTION FOR APPLICATION LIST <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php include_once("Modules/footer.php"); ?>
    <!-- <script>var sqlData = "<?php echo addslashes($sqlData); ?>"; </script> -->
    <script type="text/javascript" src="../../Includes/js/sustainability/sustainability-js.js"></script>
</body>
</html>
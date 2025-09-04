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
    <link rel="stylesheet" href="../../Includes/css/sustainability/applicantinformation-style.css">
    <link rel="stylesheet" href="../../Includes/css/table-style.css">
    <?php include_once("Modules/header.php"); ?>
</head>
<body>
    <div class="main-content-wrapper">
        <?php include("Includes/php/sidebar.php"); ?>
        <div class="flex-grow-1 p-4" style="overflow-y: auto;">
            <div class="applicant-date-container row mb-4">
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
            <hr> <!-- HORIZONTAL LINE -->
            <i class="bi bi-arrow-return-left" id="arrowReturnToPage"></i>
            <h3 id="textInfo">Applicant's Information</h3>
            <div class="applicant-data-container row mt-4 mb-4">
                <div class="col-12 col-sm-8 col-md-8 mb-2">
                    <label for="">Tourist Spot/Establishment's Name</label>
                    <input type="text" class="form-control p-3" value="Minor Basilica of Saint Martin of Tours">
                </div>
                <div class="col-4 mb-2"></div> <!-- divider -->
                <div class="col-12 mb-2">
                    <label for="">Address</label>
                    <input type="text" class="form-control p-3" value="St. Martin Street, Poblacion, Taal, Batangas 4208, Philippines">
                </div>
                <div class="col-12 col-sm-4 col-md-4 mb-2">
                    <label for="">Email Address</label>
                    <input type="text" class="form-control p-3" value="TaalBasilica@gmail.com">
                </div>
                <div class="col-6 col-sm-4 col-md-4 mb-2">
                    <label for="">Contact No.</label>
                    <input type="text" class="form-control p-3" value="09648264560">
                </div>
                <div class="col-6 col-sm-4 col-md-4 mb-2">
                    <label for="" class="d-flex"><span class="d-none d-sm-flex">Submitted</span>&nbsp;Date</label>
                    <input type="text" class="form-control p-3" value="04-22-2025">
                </div>
            </div>
            <hr> <!-- HORIZONTAL LINE -->
            <h3 id="textInfo">Rating Assessment&nbsp;<span><i class="bi bi-info-circle"></i></span></h3>
            <div class="applicant-assessment-container row mt-4">
                <div class="applicant-assessment-container-data col-12">
                    <h4 class="asessment-title-text">1. Environmental Management&nbsp;<span><i class="bi bi-info-circle"></i></span></h4>
                    <div class="assessment-title-card card">
                        <div class="assessment-title-card-row p-3 row">
                            <div class="assessment-title-card-col-left col-5 col-sm-5 col-md-5">
                                <div class="card">
                                    <div class="card-body d-block mb-0 mb-sm-4 mb-md-4">
                                        <div class="icon-container d-flex justify-content-center align-items-center gap-2 gap-sm-4 gap-md-4 mb-2">
                                            <i class="bi bi-file-image fs-1"></i>
                                            <i class="bi bi-file-earmark-text fs-1"></i>
                                        </div>
                                        <div class="button-container d-flex justify-content-center align-items-center">
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <button class="view-proof-btn btn w-100"><span class="d-none d-sm-block d-md-block">View Proof</span><i class="bi bi-eye fs-4 d-block d-sm-none d-md-none"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="asessment-title-card-col-right col-7 col-sm-7 col-md-7">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero cupiditate iure labore nesciunt non vel repellendus maiores debitis at perspiciatis impedit architecto voluptatem, corporis possimus quae adipisci autem aspernatur ex, voluptate deleniti quo? Temporibus vel recusandae, similique nemo aut cumque, incidunt laborum animi unde quo eaque non? Aliquam, non autem.</p>
                                    </div>
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
    <script type="text/javascript" src="../../Includes/js/sustainability/sustainability-js.js"></script>
</body>
</html>
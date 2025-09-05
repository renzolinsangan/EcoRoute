<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoute - Rating Guide</title>
    <style>
        .bi.bi-leaf, .bi.bi-leaf-fill, .bi.bi-check-square-fill {
            color: #20AB38;
        }

        .main-card, .leaf-card {
            border: 2px solid #011901;
        }

        .medal-container-card-1 {
            border-radius: 50% !important;
            background-color: #00BFFF;
        }

        .medal-container-card-2 {
            border-radius: 50% !important;
            background-color: #BB00FF;
        }

        .medal-container-card-3 {
            border-radius: 50% !important;
            background-color: #FF6F00;
        }

        .medal-container-card-4 {
            border-radius: 50% !important;
            background-color: #FFDD00;
        }

        .medal-container-card-5 {
            border-radius: 50% !important;
            background-color: #2EF651;
        }

        .medal-container-card .card-body i{
            color: #032F04;
        }
    </style>
</head>
<body>
    <div class="row p-4">
        <div class="col-12 col-sm-12 col-md-12">
            <p class="text-body-secondary">Once a criteria is thoroughly evaluated and assessed, you can click/check the checkbox indicating that the proof and description is approved.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <p>Every <span class="fw-bold">CHECK</span> is equivalent to <span class="fw-bold">ONE LEAF</span>. The many the leaves, the higher the <span class="fw-bold">LEVEL OF SUSTAINABILITY RECOGNITION</span>.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 mb-3">
            <div class="main-card card">
                <div class="card-body pt-2 pb-2 d-flex justify-content-start align-items-center">
                    <i class="bi bi-check-square-fill fs-1"></i>
                    <span class="fs-sm-4 fs-md-4 ms-1 ms-sm-3 ms-md-3 fw-bold">1 Check</span>
                    <span class="fs-sm-3 fs-md-3 ms-1 ms-sm-4 ms-md-4 fw-bold">=</span>
                    <div class="leaf-card card ms-1 ms-sm-4 ms-md-4 pt-1 pb-1 ps-2 pe-2">
                        <i class="bi bi-leaf-fill fs-3"></i>
                    </div>
                    <div class="leaf-container-data d-block pt-3">
                        <p class="mb-0 ms-1 ms-sm-2 ms-md-2 fw-bold">1 Leaf</p>
                        <p class="ms-1 ms-sm-2 ms-md-2 fw-medium">(Level 1 Sustainability Badge)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="medal-container-row row ps-4 pe-4">
                <?php $customOrder = [1, 4, 2, 5, 3]; ?>
                <?php foreach ($customOrder as $level) : ?>
                    <div class="medal-container-col col-6 col-sm-6 col-md-6 mb-3">
                        <div class="row">
                            <div class="col-4">
                                <div class="medal-container-card-<?php echo $level; ?> card">
                                    <div class="card-body d-flex align-items-center justify-content-center p-2">
                                        <i class="bi bi-award fs-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 pt-1 ps-0 d-block">
                                <p class="fw-bold mb-0">Level <?php echo $level; ?></p>
                                <div class="leaf-container d-flex align-items-center">
                                    <p class="fw-medium me-1 mb-0"><?php echo $level; ?></p>
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <i class="bi <?php echo ($i <= $level -1 ? 'bi-leaf-fill' : 'bi-leaf'); ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>
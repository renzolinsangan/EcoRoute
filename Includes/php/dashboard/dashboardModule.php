<?php
function cardBuilder ($iconClass, $pText, $h1Text) {
    echo '
    <div class="col-12 col-sm-4 col-md-4 mb-3 mb-sm-0 mb-md-0">
        <div class="card dashboard-data-container-card">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="col-2 col-sm-2 col-md-2">
                    <div class="image-container">
                        <i class="'.$iconClass.' text-center fs-2"></i>
                    </div>
                </div>
                <div class="col-1 col-sm-1 col-md-1"></div>
                <div class="col-7 col-sm-9 col-md-9">
                    <p class="mb-0">'.$pText.'</p>
                    <h1 class="fw-bold">'.$h1Text.'</h1>
                </div>
            </div>
        </div>
    </div>';
}
?>
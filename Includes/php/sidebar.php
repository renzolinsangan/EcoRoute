<link rel="stylesheet" href="<?php echo $serverPath; ?>Includes/css/sidebar-style.css">

<!-- SIDEBAR (visible on desktop only) -->
<div class="sidebar flex-shrink-0 p-3 bg-white border-end d-none d-lg-flex flex-column" style="width: 245px;">

    <div class="sidebar-icon-container text-center mb-4 mt-3">
        <img id="sideBarIcon" src="<?php echo $serverPath;?>Includes/Images/ecoroute-icon.png" alt="ecoroute-icon">
    </div>

    <!-- Main menu -->
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-3">
            <a href="<?php echo $dashboardPath; ?>" class="nav-link <?php echo $dashboardClass; ?>">
                <i class="bi bi-house-door me-2"></i>&nbsp;Home
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="<?php echo $travelersPath; ?>" class="nav-link <?php echo $travelersClass; ?>">
                <i class="bi bi-people me-2"></i>&nbsp;Travelers
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="<?php echo $touristspotPath; ?>" class="nav-link <?php echo $touristspotClass; ?>">
                <i class="bi bi-buildings me-2"></i>&nbsp;Tourist Spot & Establishments
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="<?php echo $sustainabilityPath; ?>" class="nav-link <?php echo $sustainabilityClass; ?>">
                <i class="bi bi-leaf me-2"></i>&nbsp;Sustainability Recognition
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="<?php echo $mobileAppPath; ?>" class="nav-link <?php echo $mobileAppClass; ?>">
                <i class="bi bi-ui-checks-grid me-2"></i>&nbsp;Mobile App Management
            </a>
        </li>
    </ul>

    <!-- Bottom section -->
    <ul class="nav nav-pills flex-column mt-auto pt-3 border-top">
        <li class="nav-item">
            <a href="#" class="nav-link <?php echo $adminProfileClass; ?>">
                <i class="bi bi-person-circle me-2"></i>&nbsp;Admin Profile
            </a>
        </li>
        <li class="nav-item" id="logoutButton">
            <a href="#" class="nav-link <?php echo $settingsClass; ?>">
                <i class="bi bi-box-arrow-left me-2"></i>&nbsp;Logout
            </a>
        </li>
    </ul>

</div>
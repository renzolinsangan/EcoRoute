<?php
include('Modules/phpInclude.php');

$activePageStatus = $_GET['active'];

switch($activePageStatus) {
    case "dashboard":
        $_SESSION['active'] = $activePageStatus;
        header("Location: dashboard?active=" . $activePageStatus);
        break;
    case "travelers" :
        $_SESSION['active'] = $activePageStatus;
        header("Location: Pages/Travelers/index?active=" . $activePageStatus);
        break;
    case "touristspot":
        $_SESSION['active'] = $activePageStatus;
        header("Location: Pages/Tourist%20Spot%20Establishments/index?active=" . $activePageStatus);
        break;
    case "sustainability": 
        $_SESSION['active'] = $activePageStatus;
        header("Location: Pages/Sustainability%20Recognition/index?active=" . $activePageStatus);
        break;
    case "mobileapp": 
        $_SESSION['active'] = $activePageStatus;
        header("Location: Pages/Mobile%20App%20Management/index?active=" . $activePageStatus);
        break;
    default:
        echo "There is an error in redirect.php, please try again!";
        break;
}
?>
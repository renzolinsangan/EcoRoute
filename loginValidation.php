<?php
include('Modules/phpInclude.php');

$userNameInput = isset($_POST['userName']) ? $_POST['userName'] : '';
$userPasswordInput = isset($_POST['userPassword']) ? $_POST['userPassword'] : '';
$userRoleSelect = isset($_POST['userRole']) ? $_POST['userRole'] : '';

// validation
if(empty($userNameInput)) {
    echo "usernameempty";
} else if(empty($userPasswordInput)) {
    echo "userpasswordempty";
} else if(empty($userRoleSelect)) {
    echo "userroleempty";
} else {
    $userDataArray = [];

    $sql = "SELECT userId, userName, userPassword, userEmail, firstName, lastName, userRole FROM ecoroute_users WHERE userName LIKE '$userNameInput' OR userEmail LIKE '$userNameInput' AND userRole = $userRoleSelect";
    $queryEcoRouteUsers = $db->query($sql);

    if($queryEcoRouteUsers && $queryEcoRouteUsers->num_rows > 0) {
        $resultEcoRouteUsers = $queryEcoRouteUsers->fetch_object();
        $userPassword = $resultEcoRouteUsers->userPassword;
        $userRole = $resultEcoRouteUsers->userRole;

        if($userPasswordInput == $userPassword && $userRoleSelect == $userRole) {
            $_SESSION['userId'] = $resultEcoRouteUsers->userId;
            $_SESSION['userName'] = $resultEcoRouteUsers->userName;
            $_SESSION['userPassword'] = $resultEcoRouteUsers->userPassword;
            $_SESSION['userEmail'] = $resultEcoRouteUsers->userEmail;
            $_SESSION['firstName'] = $resultEcoRouteUsers->firstName;
            $_SESSION['lastName'] = $resultEcoRouteUsers->lastName;
            $_SESSION['userRole'] = $resultEcoRouteUsers->userRole;
            $_SESSION['active'] = "dashboard";

            echo "loginsuccess";
            exit();
        } else {
            echo "invalidcredentials";
            exit();
        }
    } else {
        echo "invalidcredentials";
        exit();
    }
}
// validation
?>
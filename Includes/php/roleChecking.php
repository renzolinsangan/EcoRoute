<?php
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/EcoRoute/";
include($rootPath . 'Includes/php/dbConnection.php');

$dataArray = [];
$userName = isset($_POST['userName']) ? $_POST['userName'] : "";

$sql = "SELECT userRole FROM ecoroute_users WHERE userName = '$userName' AND userStatus = 0";
$queryCheckUserRole = $db->query($sql);

if($queryCheckUserRole && $queryCheckUserRole->num_rows > 0) {
    $resultCheckUserRole = $queryCheckUserRole->fetch_object();
    $dataArray = [
        'status' => 'success',
        'userRole' => $resultCheckUserRole->userRole,
    ];
}

echo json_encode($dataArray);
?>
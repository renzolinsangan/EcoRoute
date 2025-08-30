<?php
// FOR TRAVELERS DATA
$travelersDataArray = [];
$counter = 0;

$sql = "SELECT userId, firstName, lastName, userEmail, userName, userRole, verificationStatus, userStatus FROM ecoroute_users WHERE userRole = 0";
$queryTravelersData = $db->query($sql);
$sqlData = $sql;

if($queryTravelersData && $queryTravelersData->num_rows > 0) {
    while($resultTravelersData = $queryTravelersData->fetch_object()) {
        $travelersDataArray[] = [
            'counter' => $counter+=1,
            'userId' => $resultTravelersData->userId,
            'firstName' => $resultTravelersData->firstName,
            'lastName' => $resultTravelersData->lastName,
            'userEmail' => $resultTravelersData->userEmail,
            'userName' => $resultTravelersData->userName,
        ];
    }
}

// echo "<pre>";
// print_r($travelersDataArray);
// echo "</pre>";
?>
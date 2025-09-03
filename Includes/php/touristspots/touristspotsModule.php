<?php
// FOR TOURIST SPOTS & ESTABLISHMENTS DATA
$touristspotsDataArray = [];
$counter = 0;

$sql = "SELECT userId, firstName, lastName, userEmail, userName, userRole, verificationStatus, userStatus FROM ecoroute_users WHERE userRole = 1";
$queryTouristSpotsData = $db->query($sql);
$sqlData = $sql;

if($queryTouristSpotsData && $queryTouristSpotsData->num_rows > 0) {
    while($resultTouristSpotsData = $queryTouristSpotsData->fetch_object()) {
        $touristspotsDataArray[] = [
            'counter' => $counter+=1,
            'userId' => $resultTouristSpotsData->userId,
            'firstName' => $resultTouristSpotsData->firstName,
            'lastName' => $resultTouristSpotsData->lastName,
            'userEmail' => $resultTouristSpotsData->userEmail,
            'userName' => $resultTouristSpotsData->userName,
        ];
    }
}

// echo "<pre>";
// print_r($touristspotsDataArray);
// echo "</pre>";
?>
<?php
$rootPath = $_SERVER['DOCUMENT_ROOT'] . "/EcoRoute/";
set_include_path($rootPath);
include('Modules/phpInclude.php');

$requestData = $_REQUEST;
$data = [];

$columns = [
    0 => 'userId',     // counter (not used in DB, just index)
    1 => 'lastName',
    2 => 'firstName',
    3 => 'userEmail',
    4 => 'userName',
    5 => 'userStatus'
];

$sqlData = isset($_POST['sqlData']) ? $_POST['sqlData'] : "";

// --- Base query
$sql = $sqlData;
$query = $db->query($sql);
$totalData = $query->num_rows;
$totalFiltered = $totalData;

// --- Ordering
if (!empty($requestData['order'])) {
    $colIndex = intval($requestData['order'][0]['column']);
    $colName  = $columns[$colIndex];
    $dir      = $requestData['order'][0]['dir'] === 'desc' ? 'DESC' : 'ASC';
    $sql .= " ORDER BY $colName $dir ";
}

// --- Paging
$start  = intval($requestData['start']);
$length = intval($requestData['length']);
$sql .= " LIMIT $start, $length ";

$query = $db->query($sql);

$counter = $start; // continue count from page start
if ($query && $query->num_rows > 0) {
    while ($row = $query->fetch_object()) {
        $nestedData = [];
        $nestedData[] = ++$counter; // row count
        $nestedData[] = $row->lastName;
        $nestedData[] = $row->firstName;
        $nestedData[] = $row->userEmail;
        $nestedData[] = $row->userName;
        $nestedData[] = $row->userStatus;

        $data[] = $nestedData;
    }
}

$json_data = [
    "draw"            => intval($requestData['draw']),  // important for DataTables
    "recordsTotal"    => intval($totalData),
    "recordsFiltered" => intval($totalFiltered),
    "data"            => $data
];

echo json_encode($json_data);
?>

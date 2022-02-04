<?php

include '../db.php';
$district_id = $_POST['district_data'];

$upazila = "SELECT * FROM `central_npf_domains` where  parent_id = $district_id";
$upazila_result = mysqli_query($link,$upazila);

$output = '<option value=""> Select District </option>';
while($upazila_row = mysqli_fetch_assoc($upazila_result)){
    $output.= '<option value="' .$upazila_row['domain_id']. '">'. $upazila_row['sitename_bn'] . '</option>';
}

echo $output;



?>
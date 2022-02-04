<?php

include '../db.php';

$division_id = $_POST['division_data'];

$district = "SELECT * FROM `central_npf_domains` where  parent_id = $division_id";
$district_result = mysqli_query($link,$district);

$output = '<option value=""> Select District </option>';
while($district_row = mysqli_fetch_assoc($district_result)){
    $output.= '<option value="' .$district_row['domain_id']. '">'. $district_row['sitename_bn'] . '</option>';
}

echo $output;



?>
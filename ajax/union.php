<?php

include '../db.php';
$upazila_id = $_POST['upazila_data'];

$union = "SELECT * FROM `central_npf_domains` where  parent_id = $upazila_id AND NOT domain_type_id = 7";
$union_result = mysqli_query($link,$union);

$output = '<option value=""> Select District </option>';
while($union_row = mysqli_fetch_assoc($union_result)){
    $output.= '<option value="' .$union_row['domain_id']. '">'. $union_row['sitename_bn'] . '</option>';
}

echo $output;



?>
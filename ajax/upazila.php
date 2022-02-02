<?php

include '../db.php';
$district_id = $_POST['district_data'];

$upazila = "select * from upazila where district_id = $district_id";
$upazila_result = mysqli_query($link,$upazila);

$output = '<option value=""> Select District </option>';
while($upazila_row = mysqli_fetch_assoc($upazila_result)){
    $output.= '<option value="' .$upazila_row['id']. '">'. $upazila_row['upa_name'] . '</option>';
}

echo $output;



?>
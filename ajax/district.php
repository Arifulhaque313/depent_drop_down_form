<?php

include '../db.php';

$division_id = $_POST['division_data'];

$district = "select * from district where division_id = $division_id";
$district_result = mysqli_query($link,$district);

$output = '<option value=""> Select District </option>';
while($district_row = mysqli_fetch_assoc($district_result)){
    $output.= '<option value="' .$district_row['id']. '">'. $district_row['district_name'] . '</option>';
}

echo $output;



?>
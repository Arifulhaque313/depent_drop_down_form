<?php

include 'db.php';

if(isset($_POST['submit'])){

    $division = mysqli_real_escape_string($link,$_POST['division']);
    $district = mysqli_real_escape_string($link,$_POST['district']);
    $upazila = mysqli_real_escape_string($link,$_POST['upazila']);
    $union = mysqli_real_escape_string($link,$_POST['union']);
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $designation = mysqli_real_escape_string($link,$_POST['designation']);
    $gender = mysqli_real_escape_string($link,$_POST['gender']);
    $mobile = mysqli_real_escape_string($link,$_POST['mobile']);
   
   

    $training = mysqli_real_escape_string($link,$_POST['training']);

    if(empty($upazila)){
        $upazila = null;
    }

    if($training == "yes"){
        $time = mysqli_real_escape_string($link,$_POST['t_time']);
    }
    else{
        $time = 0;
    }

    echo $division . '<br>';
    echo $district . '<br>';
    echo $upazila . '<br>';
    echo $union .'<br>';
   
   
    echo $name .'<br>';
    echo $designation .'<br>';
    echo $gender .'<br>';
    echo $mobile .'<br>';

    echo $training .'<br>';
    echo $time;

 
}



?>
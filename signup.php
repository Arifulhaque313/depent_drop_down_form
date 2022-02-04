<?php

include 'db.php';

if(isset($_POST['submit'])){

    $division = mysqli_real_escape_string($link,$_POST['division']);
    $district = mysqli_real_escape_string($link,$_POST['district']);
     $upazila = mysqli_real_escape_string($link,$_POST['upazila']);
    
    
    

    
   

    $training = mysqli_real_escape_string($link,$_POST['training']);

    if(empty($upazila)){
        $upazila = null;
    }

    if($training == "yes"){
        $time = mysqli_real_escape_string($link,$_POST['time']);
    }
    else{
        $time = 0;
    }

    echo $division . '<br>';
    echo $district . '<br>';
    echo $upazila . '<br>';
    echo $training .'<br>';
    echo $time;


 
}



?>
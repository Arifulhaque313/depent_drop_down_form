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
    $email = mysqli_real_escape_string($link,$_POST['email']);

    $training = mysqli_real_escape_string($link,$_POST['training']);

    $created_at = date("d-m-Y"); 

   


    // training checking 
    if($training == "yes"){
        $training_time = mysqli_real_escape_string($link,$_POST['training_time']);
    }
    else{
        $training_time = 0;
    }



    $domain_id;
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
   
   


    if(!empty($division)){

        if(!empty($district)){

            // $district_query = "select * from central_npf_domains where domain_id = $district";
            // $districtname = mysqli_query($link, $district_query);
            // while($row = mysqli_fetch_assoc( $districtname)){
            //   $d = $row['sitename_bn'];
            // }


            $domain_id = $district;

            if(!empty($upazila)){
                $domain_id = $upazila;

                if(!empty($union)){
                    $domain_id = $union;
                }

                else
                {
                    $domain_id = $upazila;
                }

            }
            else
            {
                $domain_id = $district; 
            }   

        }
          
    }


    //__echo domain id and district name__

    // echo $domain_id .'<br>';
    // echo $d;


    
    if(!preg_match ("/^[0-9]*$/", $mobile)){
        ?>
        <script>
          alert("Please insert valid mobile number")
          window.location.href="index.php";
        </script>
        <?php  
      }

      elseif(strlen ($mobile) != 11){
        ?>
        <script>
          alert("Mobile number should be 11 digit")
          window.location.href="index.php";
        </script>
        <?php  
      }


    elseif(!preg_match ($pattern, $email) ){
        ?>
        <script>
          alert("Email Is invalid")
          window.location.href="index.php";
        </script>
        <?php  
  
      }


      elseif(!preg_match ("/^[0-9]*$/", $training_time)){
        ?>
        <script>
          alert("Please insert number")
          window.location.href="index.php";
        </script>
        <?php  
      }


      else{

            $query = "insert into users(domain_id,name,designation,gender,mobile,email,traning_time,created_at) values('$domain_id','$name','$designation','$gender','$mobile','$email','$training_time','$created_at')";
        mysqli_query($link,$query);
        
      }




     

     
     



  


   
    
    // echo $domain_id .'<br>';

   
   
   
    //     echo"Name : ". $name .'<br>';
    //     echo "Designation : " .$designation .'<br>';
    //     echo "Gender : ".$gender .'<br>';
    //     echo "mobile number : " .$mobile .'<br>';
    
    //     echo "Training : " .$training .'<br>';
    //     echo "Training time : ". $training_time;

      
 
}

?>

<script>

    window.location.href = 'readdb.php';   

</script>

<?php
 include 'db.php';
 
 $div_query = "SELECT * FROM users 
 INNER JOIN central_npf_domains ON  users.domain_id = central_npf_domains.domain_id";
 $div_result = mysqli_query($link,$div_query);
 
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jquert link  -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">
    <title>TMS</title>
  </head>
  <body>
    
  

    <div class="container d-flex justify-content-center my-5">


        <div class="div w-75">

                <table class="table">
                    <thead>
                            <tr>
                                <th>Sr. no </th>
                                <th>Domain_id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Site name</th>
                            </tr>
                    </thead>

                   

                    <tbody>
                         <?php
                            $i =1;
                           while($row = mysqli_fetch_assoc( $div_result)){
                                $domain_id = $row['domain_id'];   
                                $name = $row['name'];   
                                $email = $row['email'];   
                                $designation = $row['designation'];   
                                $sitename_bn = $row['sitename_bn'];   
                                $id = $row['id'];   
                                 

                       

                    ?>

                            <tr>
                                <td><?php   echo $id ;?></td>
                                <td><?php   echo  $domain_id;?></td>
                                <td><?php   echo  $name;?></td>
                                <td><?php   echo  $email;?></td>
                                <td><?php   echo  $designation?></td>
                                <td><?php   echo  $sitename_bn?></td>
                               
                            </tr>


                            <?php  

                           }
                            ?>

                    </tbody>
                </table>
        </div>


    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
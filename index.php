<?php
 include 'db.php';
 
 $div_query = "SELECT  * FROM `central_npf_domains` where domain_type_id = 4";
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
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="ctr">

        <div class="form-head  bg-success">
            <div class="row px-3 py-2">
                <div class="col-12 col-md-6 col-lg 6 text-start">
                    <h6 class="text-white">ফরম টাইটেল</h6>
                </div>
                <div class="col-12 col-md-6 col-lg 6 text-end">
                    <button class="btn btn-primary">click here</button>
                </div>
            </div>
        </div>


<!-- form start  -->
        <form action="signup.php" method="post" class="p-3">

        <center><h6> <b>রেজিট্রেশন নির্দেশনাঃ </b> প্রত্যেক প্রশিক্ষণার্থীকে তার নিজ কার্যালয়ের অফিস / ইউনিয়ন সিলেক্ট করে রেজিস্ট্রেশন করতে হবে। <span><a href="#">বিস্তারিত</a></span> </h6></center>

        <div class="my-3">
            <div class="row ">
                <div class="col-12 col-md-6 col-lg-6">
                    <label for="" class=""><span><b>বিভাগ :</b></span> ‍<b class="text-danger fs-5">*</b></label>
                    <select name="division" id="division" class="form-select select-h">
                    <option value="">--Select Division--</option>
                        <?php   while($row = mysqli_fetch_assoc( $div_result)){ ?>

                        <option value="<?php echo $row['domain_id']; ?>"> <?php echo $row['sitename_bn']; ?> </option>

                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                <label for="" class=""><span><b>জেলা / বিভাগীয় পর্যায়ের অফিস:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                    <select name="district" id="district" class="form-select">
                        <!-- <option value="">1</option> -->
                    </select>
                </div>
            </div>
        </div>


        <div class="my-3">
            <div class="row ">
                <div class="col-12 col-md-6 col-lg-6">
                    <label for="" class=""><span><b>উপজেলা / জেলা পর্যায়ের অফিস:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                    <select name="upazila" id="upazila" class="form-select">
                        <!-- <option value="">1</option> -->
                    </select>
                </div>


                <div class="col-12 col-md-6 col-lg-6">
                    <label for="" class=""><span><b>উপজেলা পর্যায়ের অফিস:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                    <select name="union" id="union" class="form-select">
                        <!-- <option value="">1</option> -->
                    </select>
                </div>
                
            </div>
        </div>


        <div class="my-3">
            <div class="row ">
                <div class="col-12 col-md-3 lg-md-3">
                <label for="" class=""><span><b>নাম:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                <input type="text" name = "name" class="form-control" placeholder = "আপনার নাম লিখুন">
                </div>
                <div class="col-12 col-md-2 lg-md-2 ">
                <label for="" class=""><span><b>পদবি:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                <input type="text" name="designation" class="form-control" placeholder ="সহকারি প্রোগ্রামার">

                </div>
                <div class="col-12 col-md-2 lg-md-2">
                <label for="" class=""><span><b>জেন্ডার:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                <select name="gender" id="" class="form-select">
                    <option value="">Select Gender</option>
                    <option value="male">পুরুষ</option>
                    <option value="female">মহিলা</option>
                    
                </select>

                </div>
                <div class="col-12 col-md-2 lg-md-2">
                <label for="" class=""><span><b>মোবাইল নম্বর:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                <input type="text" name="mobile" class="form-control" placeholder="017********">

                </div>
                <div class="col-12 col-md-3 lg-md-3">
                <label for="" class=""><span><b>ইমেইল:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                <input type="email" name="email" class="form-control" placeholder = "rohim111@gmail.com">

                </div>
                
                
            </div>
        </div>


        <div class="mb-3">

                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3">

                       <label for="" class=""><span><b>আপনি কি পূর্বে প্রশিক্ষণটি নিয়েছেন:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                       <select name="training" id="training" class="form-select">
                           <option value="">--Select--</option>
                           <option value="yes">Yes</option>
                           <option value="no">No</option>
                       </select>

                    </div>
                    <div class="col-12 col-md-2 col-lg-2 hidden" id="time">

                       <label for="" class=""><span><b>কত বার:</b></span> ‍<b class="text-danger fs-5">*</b></label>
                       <input type="text" name = "t_time" class="form-control">

                    </div>
                </div>


        </div>


        <div class="mt-4 mb-3 text-center">
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>

        </form>

  </div>














  <script>
    //   District state 

    $('#division').on('change',function(){
        var division_id = this.value;
        // console.log(division_id);
        $.ajax({
            url:'ajax/district.php',
            type:"POST",
            data:{
                division_data: division_id
            },
            success:function(result){
                $('#district').html(result);
                // console.log(result);
            }
        })
    });
    //upazila

    $('#district').on('change',function(){
        var district_id = this.value;
        // console.log(division_id);
        $.ajax({
            url:'ajax/upazila.php',
            type:"POST",
            data:{
                district_data: district_id
            },
            success:function(result){
                 $('#upazila').html(result);
                // console.log(result);
            }
        })
    });

    // Union 
    $('#upazila').on('change',function(){
        var upazila_id = this.value;
        // console.log(division_id);
        $.ajax({
            url:'ajax/union.php',
            type:"POST",
            data:{
                upazila_data: upazila_id
            },
            success:function(result){
                 $('#union').html(result);
                // console.log(result);
            }
        })
    });



    // tranning 

    // $('#training').on('change',function(){
    //     alert(this.value);

    // });

    $('#training').change(function(){
        var responseID = $(this).val();

        if(responseID == "yes"){
            $('#time').removeClass("hidden");
            $('#time').addClass("show");

        }
        else{
            $('#time').addClass("hidden");
            $('#time').removeClass("show");
        }
        console.log(responseID);
    
    });


  

  </script>









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
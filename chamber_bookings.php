<?php   

 include 'mr_api/db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SATHI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet" />
    <link href="css/slick-theme.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<style media="screen">
  .form-control,.form-select{font-size: 18px;}
</style>
<body style="background: #fff;" >
  <div id="demo2"></div>
<!--   <div class="loader" id="loader">
<img src="images/loading_icon_ball.gif" class="" alt="page loder">
</div> -->
    <div class="wrapper" style="">
      <header class="header">
        <div class="container">
          <div class="row" style="align-items:center">
            <div class="col-12 d-flex justify-content-center" >
              
              <!-- <a onclick="history.back()"> <img src="images/back_arrow.png" style="height: 40px;" alt="" class="img-fluid"> </a> -->
              <div class="" style="position: relative; width: 100%; text-align: center;">
                <span class="text-info" style="position: absolute; bottom: -3px;left: 36.4%; font-size: 12px;">Powered By</span>
                <h6>Ayushman Doctors</h6>
              </div>
            </div>
          </div>
        </div>
      </header>

        <form id="add_profile">
        <div class="container" style="">
<span class="form_area" >

          <div class="row">
            
            <div class="col-12">
              <h3 class="text-center mt-2">A Doctor appointment booking request has been sent by</h3>
              <!-- <h2 class="heading text-info">Applo Pharmacy Store</h2> -->
              <h2 class="text-info text-center pt-2 pb-2">Applo Pharmacy Store</h2>
              <input type="hidden" name="mr_id" class="mr_id" value="">
              <input type="text" name="patient_name"class="form-control" required placeholder="Patient Name" value="">
                <input type="text" name="date_of_birth"class="form-control" required placeholder="Date of Birth" value="">
                <input type="number" name="fone_no"class="form-control"required placeholder="+91 7985689325" value="">
                <!-- <input type="text" name="profession"class="form-control" required placeholder="What is your profession?" value=""> -->
                <select name="doctor_id" id="" class="form-control">
                  <option value="">Select Doctor</option>

                  <?php   
                  $doctor="SELECT * FROM `doctor_tbl` WHERE `chamber_id`='$_GET[chamber_id];'";
                  $doctor_q=mysqli_query($conn,$doctor);
                  while($doctor_row=mysqli_fetch_assoc($doctor_q)){
                  ?>
                  <option value="<?php  echo $doctor_row['doctor_id']; ?>"><?php  echo $doctor_row['doctor_name']; ?></option>


                  <?php
                }
                  ?>
                </select>


<!--                 <div class="file-input text-center" style="margin-top:30px;">
                                <input type="file" accept="image/*" capture name="image" onChange="img_pathUrl(this);" required id="file-input"class="file-input__input"/>
                                <label class="file-input__label" for="file-input">
                                  <span><img src="images/file.png" style="height:40px;margin:0 auto"><br>Upload Selfi</span></label>
                              </div> -->
              </div>
          </div>
</span>
<span class="pay_area" style="display: none;">
          <div class="row pt-3 pb-3">
            <div class="col-md-3">
              <div class="card" style="border-radius: 11px;border-color: #00ABF6;">
                <div class="card-body">
                  <p class="text-info" style="font-weight: bold; font-size: 18px;">Monday</p>
                  <p class="" style="font-weight: bold; font-size: 18px;">12 PM - 4 PM</p>
                </div><!-- card body -->
              </div><!-- //card -->
            </div><!-- //row -->

             <div class="col-md-3">
              <div class="card" style="border-radius: 11px;border-color: #00ABF6;">
                <div class="card-body">
                  <p class="text-info" style="font-weight: bold; font-size: 18px;">Monday</p>
                  <p class="" style="font-weight: bold; font-size: 18px;">12 PM - 4 PM</p>
                </div><!-- card body -->
              </div><!-- //card -->
            </div><!-- //row -->

             <div class="col-md-3">
              <div class="card" style="border-radius: 11px;border-color: #00ABF6;">
                <div class="card-body">
                  <p class="text-info" style="font-weight: bold; font-size: 18px;">Monday</p>
                  <p class="" style="font-weight: bold; font-size: 18px;">12 PM - 4 PM</p>
                </div><!-- card body -->
              </div><!-- //card -->
            </div><!-- //row -->

             <div class="col-md-3">
              <div class="card" style="border-radius: 11px;border-color: #00ABF6;">
                <div class="card-body">
                  <p class="text-info" style="font-weight: bold; font-size: 18px;">Monday</p>
                  <p class="" style="font-weight: bold; font-size: 18px;">12 PM - 4 PM</p>
                </div><!-- card body -->
              </div><!-- //card -->
            </div><!-- //row -->
            
          </div><!-- end row -->
          <div class="row pt-3 pb-3">
            <div class="col-md-9 col-sm-6">A non refundable convenience fee of Rs. 10/-<br> charged for this appointment</div>
            <div class="col-md-3 col-sm-6">&#8377; 10 </div>
          </div><!-- end row -->
</span>

          <button type="submit" class="btn btn-primary next_btn w-100 mt-4 mb-4">Next</button>

          <button type="submit" class="btn btn-primary pay_btn w-100 mt-4 mb-4" style="display: none;"><a href="success.php">Pay & Book Appointment</a></button>
        </div>
              </form>
    </div>
    <!-- <script src="https://kit.fontawesome.com/ac2f30a668.js" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script src="js/slick.js" type="text/javascript"></script>
    <!-- <script type="text/javascript">
    function checkValue(str, max) {
    if (str.charAt(0) !== '0' || str == '00') {
      var num = parseInt(str);
      if (isNaN(num) || num <= 0 || num > max) num = 1;
      str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
    };
    return str;
  };

// reformat by date
function date_reformat_dd(date) {
  date.addEventListener('input', function(e) {
    this.type = 'text';
    var input = this.value;
    if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
    var values = input.split('-').map(function(v) {
      return v.replace(/\D/g, '')
    });
    if (values[1]) values[1] = checkValue(values[1], 12);
    if (values[0]) values[0] = checkValue(values[0], 31);
    var output = values.map(function(v, i) {
      return v.length == 2 && i < 2 ? v + '-' : v;
    });
    this.value = output.join('').substr(0, 14);
  });
}

    </script> -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyC3_0CATLLF1cfbBJr204-L927-I22OVSo"></script>

    <script>


    // $('.loader').fadeOut('slow');



    // $(document).on('input', ".wt", function() {
    //      var regex = /^\d{0,2}(\.\d+)?$/;
    //      var value = $(this).val();
    //      if (!regex.test(value)) {
    //          $(this).val(parseFloat(value.slice(0, 2) + "." + value.slice(2)));
    //      }
    //  });
    // var user_id = window.localStorage.getItem("user_id");
    // $('.user_id').val(user_id);

    // $('.continue_btn').click(function () {
    //   window.location.href='home.html';
    // })


    </script>
    <script>
      //=====================next_btn==========
 $('.next_btn').on('click',function(){
  $('.pay_area').css('display','block');
  $('.pay_btn').css('display','block');
  $('.form_area').css('display','none');
  $('.next_btn').css('display','none');

 });
      //=================fetch doctor list================

 $.ajax({

        url : 'https://easebizz.com/projects/ayushman_doctors/mr_API/ajax_fetch_doctor_list.php',
        type:'GET',
        dataType:'json',
        success:function(res){

        }


 }); //end ajax

         
    </script>
</body>

</html>

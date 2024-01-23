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

         <div style="position: absolute; top: 40%; left: 50%; transform: translateX(-50%); width: 100%;">
           <span style="position: absolute; top:-55px; left: 50%; transform: translateX(-50%);" ><img src="images/correct2.png"class="img-fluid" style="height:55px;margin-bottom:15px; text-align: center;" alt=""></span>
           <p class="pt-3" style="text-align: center;">Your appointment has been</p>
           <p style="text-align: center; margin-top: -19px;">booked  succssfully</p>
           <p style="font-weight: bolder; margin-top: -10px;padding-top:2px; text-align: center;">Booking ID: 2938493489</p>
           <p style="text-align: center;">Patient Queue Traking Link</p>
           <p style="text-align: center;"><input type="text" id="text-to-copy" style="width: 20%;border: 1px solid #0DCAF0; height:40px;" value="https://easebizz.com/projects/ayushman_doctors/mr_API/ajax_fetch_doctor_list.php"><input type="button" style="width: 5%;background-color: #0DCAF0; border: 1px solid #0DCAF0;color:#fff; height:40px;" value="COPY" id="copy-button"></p>

           <p style="text-align: center;">This link has been also sent to you via SMS</p>


           
         </div>
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
      //=================Coy Clipbord================
 $(document).ready(function() {
      $('#copy-button').click(function() {
        var textToCopy = $('#text-to-copy').val();
        var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textToCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
      });
    });

         
    </script>
</body>

</html>

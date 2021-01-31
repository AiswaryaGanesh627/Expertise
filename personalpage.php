<?php

 session_start();
 $con = mysqli_connect("localhost","root","","jobsdb"); 
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta name="description" content="Expertise is an exclusive job searching website for graduates, newbies and professionals looking forward to delving deep into the sea of Information Technology and data manipulation.">
<meta name="keywords" content="Jobs,Expertise,IT,Data manipulation">
    <title>Expertise</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!--  For the navigation bar-->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="icon" type="image/x-icon" sizes="16x16" href="ico/job_logo1.png">
 <link rel="stylesheet" type="text/css" href="font-awesome-animation.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style type="text/css">
      html {
  scroll-behavior: smooth;
}

.image-career-banner {
    background: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url(./img/05.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: auto;
    background-position: center center;
    color: #fff;
    padding-top: 145px;
    padding-bottom:330px;


 }
 #header nav ul li a:hover {
  color: #DCE908;
}
.sticky .navbar-nav li .nav-link:hover{
  color: #DCE908 !important;
}

.modal {
 display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content */
.modal-content {
   margin: 6% auto ; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 800px;
  max-height: 2000px;
  height: auto !important;
  display: inline-block;
  position:relative;
  padding: 5px;
  background: white;
 
}


/* The Close Button */
.closenow {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.closenow:hover,
.closenow:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  top: 180;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}


 
.submit{
  width: 40%;
  padding: 10px 30px;
  cursor: pointer;
  margin: auto;
  display: block;
  background: linear-gradient(to right,#ff105f,#ffad06);
  border:0;
  border-radius:30px;
  outline: none;
 }

.section-title {
    text-align: center;
    padding-bottom: 30px;
}
.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.form-group {
    margin-bottom: 1rem;
}

.form-control {
    display: block;
    width: 90%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


</style>
</head>
<body id="Expertise">
  <header>
<section id="header">
  <div class="container-fluid" id="sticky-header">
    <nav class="navbar fixed-top navbar-expand-lg stroke" >
      <a class="navbar-brand brand" href="#" style="padding-left: 100px"> <img src="ico/job_logo3.png" style="width: 140px" class="pt-1"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars fa-1x text-white"></span>
      </button>
      <div class="collapse navbar-collapse fill" id="navbarNavDropdown">
        <ul class="navbar-nav " style="margin-left: 550px" >
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li>
            <a class="nav-link" href="#"><?php echo $_SESSION['email']; ?></a>
           </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="myprofile">Complete your profile</a>

  <div id="myMode" class="modal">
  <div class="modal-content">
    <span class="closenow">&times;</span>
    <div class="imgcontainer">
  <img src="ico/job_logo8.png" alt="Avatar" class="avatar">
</div>
    <form action="personalpage.php" method="post" enctype="multipart/form-data">
   <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" data-msg="Please enter your last name">
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="email2" id="email2" placeholder="Registered Email" data-rule="minlen:4" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="mob" id="mob" placeholder="Mobile Number" data-msg="Please enter your mobile number">
                  <div class="validate"></div>
                </div>
              </div>
        
               <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <select name="gender" class="form-control" style="font-size: 15px">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-6 form-group">
                   <label for="nation" style="font-size: 15px;color: #999;">Nationality</label>
                  <select name="nation" id="nation" class="form-control" style="font-size: 15px">
<option value="Indian">Indian</option>
<option value="Other">Others</option>
</select>
                </div>
                <div class="col-lg-6 form-group">
                   <label for="state" style="font-size: 15px;color: #999;">State</label>
                  <select name="state" id="state" class="form-control" style="font-size: 15px">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</div>
</div>

<h4 align="left"> Education</h4>

<div class="form-row">
                <div class="col-lg-6 form-group">
                  <label for="quali" style="font-size: 15px;color: #999;">Highest Qualification</label>
                  <select name="quali" id="quali" class="form-control" style="font-size: 15px">
                    <option value="Ph.D">Ph.D</option>
                  <option value="Post-Graduate">Post Graduate</option>
                  <option value="Under-Graduate">Under Graduate</option>
                  <option value="Higher Secondary">Higher Secondary</option>
                  <option value="Diploma">Diploma</option>
                  </select>
                </div>
                <div class="col-lg-6 form-group">
                   <label for="role" style="font-size: 15px;color: #999;">Performing role</label>
                  <select name="role" id="role" class="form-control" style="font-size: 15px">
                  <option value="fresher">Fresher</option>
                  <option value="working">Working</option>
                  </select>
                </div>
              </div>


              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <label for="clg" style="font-size: 15px;color: #999;">Institution name</label>
                  <input type="text" class="form-control" name="clg" id="clg" placeholder="Institution name" data-rule="minlen:4" data-msg="Please enter your instituion name">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <label for="exp" style="font-size: 15px;color: #999;">Years of experience</label>
                  <select name="exp" id="exp" class="form-control" style="font-size: 15px">
                  <option value="zero">0</option>
                  <option value="one">1</option>
                  <option value="two">2</option>
                  <option value="three">3</option>
                  <option value="threeplus">3+</option>
                  </select>
                </div>
              </div>

    <h4 align="left"> Field of Interest</h4>

    <div class="form-row">
                <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field1" id="field1" placeholder="Field 1" >
                </div>
                 <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field2" id="field2" placeholder="Field 2" >
                </div>
              </div>
              <br>
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field3" id="field3" placeholder="Field 3" >
                </div>
                 <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field4" id="field4" placeholder="Field 4" >
                </div>
              </div>
     <h4 align="left">Upload details</h4>

                <div class="form-row">
                <div class="col-lg-6 form-group">
                  <p style="font-size: 18px; text-align: center;color: #999">Upload your photo</p>
                                  </div>
                <div class="form-group">
                  <input name="userpic" id="userpic" type="file" accept="image/png, image/jpg" /><br>
                  <p style="font-size: 12px; text-align: center;color: #999">Please upload only JPG or PNG image</p>
                  </div>
                   </div>

      <div class="form-row">
                <div class="col-lg-6 form-group">
                  <p style="font-size: 18px; text-align: center;color: #999">Upload your resume</p>
                  </div>
                <div class="form-group">
                  <input name="userfile" id="userfile" type="file" accept="application/pdf, application/vnd.ms-word" />
                  <p style="font-size: 12px; text-align: center;color: #999">Please upload only PDF or WORD document</p>
</div>
</div>



    <br><br><br><button type="submit"  class="submit" name="pro" id="pro">Upload Profile</button>
    <p style="font-size: 12px; text-align: center;color: #999">By completing your profile, you agree to our terms and policy</p>

    <?php
  
  if(isset($_POST['pro'])) {

  $mail = $_SESSION['email'];  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email    =  $_POST['email2'];
 $mobno = $_POST['mob'];
$dob = $_POST['dob']; 
$gender = $_POST['gender'];
$nation = $_POST['nation'];
$state = $_POST['state'];
$quali = $_POST['quali'];
$role = $_POST['role'];
$clg = $_POST['clg'];
$exp = $_POST['exp'];
$field1 = $_POST['field1'];  
$field2 = $_POST['field2'];  
$field3 = $_POST['field3'];  
$field4 = $_POST['field4'];  
$pic = basename($_FILES['userpic']['name']);
$filename = basename($_FILES['userfile']['name']);
$folder_name="uploads";
if (!file_exists($folder_name))/* Check folder exists or not */
      {
        @mkdir($folder_name, 0777);/* Create folder by using mkdir function */
              echo "Folder Created";/* Success Message */
      }

$destination = 'uploads/' . $pic;
$destination1 = 'uploads/' . $filename;
$extension = pathinfo($pic, PATHINFO_EXTENSION);
$extension1 = pathinfo($filename, PATHINFO_EXTENSION);

$file1 = $_FILES['userpic']['tmp_name'];
  $size1 = $_FILES['userpic']['size'];
 $file = $_FILES['userfile']['tmp_name'];
  $size = $_FILES['userfile']['size'];

  $result = mysqli_query($con,"SELECT * FROM `profile` WHERE `email` = '$email'");



    if (!in_array($extension1, ['zip', 'pdf', 'docx']) &&  !in_array($extension, ['jpg', 'png'])) {
        echo "You file extension must be .zip,.png or .docx for resume and .jpg or .png for photo";
    } elseif ($_FILES['userfile']['size'] > 1000000 && $_FILES['userpic']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    }
      else if(mysqli_num_rows($result) == 1){
       if (move_uploaded_file($file, $destination1) && move_uploaded_file($file1, $destination)) {
                mysqli_query($con,"UPDATE `profile` SET `qualification` = '$quali',`role` = '$role',`institution` = '$clg',`year_of_exp` = '$exp',`field1` = '$field1',`field2` = '$field2',`field3` = '$field3',`field4` = '$field4',`pic` = '$pic',`file` = '$filename' WHERE `email` = '$email'");
                 echo "<center>Profile updated successfully!!</center>";
        }

       

    } 


    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination1) && move_uploaded_file($file1, $destination)) {
            if(mysqli_query($con, "INSERT INTO `profile` (`pro_id`,`first_name`,`last_name`,`email`,`mobno`,`date_of_birth`,`gender`,`nation`,`state`,`qualification`,`role`,`institution`,`year_of_exp`,`field1`,`field2`,`field3`,`field4`,`pic`,`file`) VALUES ('','$fname','$lname','$email','$mobno','$dob','$gender','$nation','$state','$quali','$role','$clg','$exp','$field1','$field2','$field3','$field4','$pic','$filename')")){
               echo "<center>Profile completed successfully!!</center>"; 
             }else{
              
              echo "<center>Profile completion failed!!</center>"; 
            }
 }
} 
        
}

?>
  
  </form>
</div>
</div>

<script>
// Get the modal
var modal1 = document.getElementById("myMode");

// Get the button that opens the modal
var btn1 = document.getElementById("myprofile");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("closenow")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Sign Out</a>
          </li>
        </ul>
      </div>
     </nav>
   </div>
 </section>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script type="text/javascript">
   /*$('body').on('mouseenter mouseleave','.dropdown-hover',function(e){
     let dropdown=$(e.target).closest('.dropdown-hover');
      dropdown.addClass('show');
      
    setTimeout(function(){
          dropdown[dropdown.is(':hover')?'addClass':'removeClass']('show');
      },300);
  });*/
  $(".dropdown")
  .mouseover(function () {
      $(this).addClass('show').attr('aria-expanded', "true");
      $(this).find('.dropdown-menu').addClass('show');
  })
  .mouseout(function () {
      $(this).removeClass('show').attr('aria-expanded', "false");
      $(this).find('.dropdown-menu').removeClass('show');
  });

  var wind = $(window);
var sticky = $('#sticky-header');
wind.on('scroll', function () {
    var scroll = wind.scrollTop();
    if (scroll < 180) {
        sticky.removeClass('sticky');
    } else {
        sticky.addClass('sticky');
    }
});
</script></header>
<div class="image-career-banner" id="Home">
   <div class="container">
    <div class="row">
      <div class="intro-content">
         <h1 class="text-justify" style="color: white;" data-aos="zoom-in" data-aos-duration="2000">Welcome <?php echo $_SESSION['username'];?>!</h1>
        <h2 class="text-justify" data-aos="zoom-in" data-aos-duration="2000">EXPERTISE</h2>
        <h3 class="text-justify" data-aos="zoom-in" data-aos-duration="2000">We are the career experts!</h3>
         </div>
            
    </div>
</div>
</div>
<section>
<div class="container mt-5">


<?php
include('simple_html_dom.php');

$mail = $_SESSION['email'];
 $res = mysqli_query($con,"SELECT `field1`,`field2`,`field3`,`field4` FROM `profile` WHERE `email` = '$mail'");
 if(mysqli_num_rows($res) == 1){
  $row = mysqli_fetch_assoc($res);
  $field1 = $row["field1"];
  $field2 = $row["field2"];
  $field3 = $row["field3"];
  $field4 = $row["field4"];

if($field1 != "")
  {
    
  echo "<h4><b>" . $field1.  "</b></h4><br><br>";
  
  $url =  "https://www.google.co.in/search?q=".str_replace(' ','%20',$field1);
  // note how referer is set manually
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  
  $body = curl_exec($ch);
  curl_close($ch);
// echo $body; 
$domresults = new simple_html_dom();
$domresults->load($body);

foreach ($domresults->find('a[href^=/url?]') as $link) {
  # code...
  if(!empty($link->plaintext) && $link->plaintext!="Sign in")
      echo $link->plaintext , '<br>';
}
echo "<br><br>";

}

if($field2 != "")
  {
    
 echo "<h4><b>" . $field2.  "</b></h4><br><br>";
  
  $url =  "https://www.google.co.in/search?q=".str_replace(' ','%20',$field2);
  // note how referer is set manually
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  
  $body = curl_exec($ch);
  curl_close($ch);
// echo $body; 
$domresults = new simple_html_dom();
$domresults->load($body);

foreach ($domresults->find('a[href^=/url?]') as $link) {
  # code...
  if(!empty($link->plaintext) && $link->plaintext!="Sign in")
      echo $link->plaintext , '<br>';
}
echo "<br><br>";
}

if($field3 != "")
  {
    
  echo "<h4><b>" . $field3.  "</b></h4><br><br>";
  
  $url =  "https://www.google.co.in/search?q=".str_replace(' ','%20',$field3);
  // note how referer is set manually
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  
  $body = curl_exec($ch);
  curl_close($ch);
// echo $body; 
$domresults = new simple_html_dom();
$domresults->load($body);

foreach ($domresults->find('a[href^=/url?]') as $link) {
  # code...
  if(!empty($link->plaintext) && $link->plaintext!="Sign in")
      echo $link->plaintext , '<br>';
}
echo "<br><br>";

}


if($field4 != "")
  {
    
    echo "<h4><b>" . $field4.  "</b></h4><br><br>";
  $url =  "https://www.google.co.in/search?q=".str_replace(' ','%20',$field4);
  // note how referer is set manually
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  
  $body = curl_exec($ch);
  curl_close($ch);
// echo $body; 
$domresults = new simple_html_dom();
$domresults->load($body);

foreach ($domresults->find('a[href^=/url?]') as $link) {
  # code...
  if(!empty($link->plaintext) && $link->plaintext!="Sign in")
      echo $link->plaintext , '<br>';
}

}
echo "<br><br>";
} 
?>
</div>
  
</section>

 <section>
  <style type="text/css">
  /*footer*/
.col_white_amrc { color:#FFF;}
footer { width:100%; background-color:#232323; min-height:15px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;letter-spacing: 1px;}


.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_amrc {
  list-style-type:none;
  padding:0px;
  display:table;
  margin-top: 10px;
  margin-right: auto;
  margin-bottom: 10px;
  margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-right:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li a:hover { color:#232323; background-color: #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
.headin5_amrc{
  font-size: 18px;
  letter-spacing: 1px;
}
</style>

<footer class="footer">
<div class="container">
<p class="foote_bottom_ul_amrc text-center">© 2020 <a href="#">Expertise Job Forum (P) Ltd.</a> | All Rights Reserved. </p>
<ul class="social_footer_ul">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>


</footer></section>




  

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript">
  wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
</script>
<!-- <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>

  <script type="text/javascript">
    $(document).ready(function() {
        var page = $('body');  // set to the main content of the page   
        $(window).mousewheel(function(event, delta, deltaX, deltaY){
            if (delta < 0) page.scrollTop(page.scrollTop() + 65);
            else if (delta > 0) page.scrollTop(page.scrollTop() - 65);
            return false;
        })
    });
  </script>
</body>
</html>
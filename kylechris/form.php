<?php
$db = mysqli_connect("premium88.web-hosting.com", "xenpaowt_akwagis", "Fayo@123*", "xenpaowt_akwagis");
$conn = new mysqli("premium88.web-hosting.com", "xenpaowt_akwagis", "Fayo@123*", "xenpaowt_akwagis");
  // Create database connection
// $db = mysqli_connect("localhost", "root", "", "akwagis_new");
// $conn = new mysqli("localhost", "root", "", "akwagis_new");
 if (isset($_POST['mycode'])) {
    $code =$_POST['mycode'];
}
else{
 $code =$_POST['code'];   
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//if(isset($_POST['code'])){

$sql = "SELECT pins FROM mypins Where pins='".$code."' AND status=0";
$result = $conn->query($sql);


if ($result) {
  // output data of each row


  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['mycode'])) {
    // Get image name
    $image = $_FILES['fileupload']['name'];
    // Get text
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $othername = mysqli_real_escape_string($db, $_POST['othername']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $address2 = mysqli_real_escape_string($db, $_POST['address2']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $marital = mysqli_real_escape_string($db, $_POST['marital']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $village = mysqli_real_escape_string($db, $_POST['village']);
    $smartphone = mysqli_real_escape_string($db, $_POST['smartphone']);
    $health = mysqli_real_escape_string($db, $_POST['health']);
    $sick = mysqli_real_escape_string($db, $_POST['sick']);
    $sicklong = mysqli_real_escape_string($db, $_POST['sicklong']);
    $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
    $school_year = mysqli_real_escape_string($db, $_POST['school_year']);
    $computer = mysqli_real_escape_string($db, $_POST['computer']);
    $ename = mysqli_real_escape_string($db, $_POST['ename']);
    $elname = mysqli_real_escape_string($db, $_POST['elname']);
    $eothername = mysqli_real_escape_string($db, $_POST['eothername']);
    $relationship = mysqli_real_escape_string($db, $_POST['relationship']);
    $eaddress = mysqli_real_escape_string($db, $_POST['eaddress']);
    $eemail = mysqli_real_escape_string($db, $_POST['eemail']);
    $ephone = mysqli_real_escape_string($db, $_POST['ephone']);
    $rname = mysqli_real_escape_string($db, $_POST['rname']);
    $rlname = mysqli_real_escape_string($db, $_POST['rlname']);
    $rothername = mysqli_real_escape_string($db, $_POST['rothername']);
    $position = mysqli_real_escape_string($db, $_POST['position']);
    $remail = mysqli_real_escape_string($db, $_POST['remail']);
    $rphone = mysqli_real_escape_string($db, $_POST['rphone']);
    $raddress = mysqli_real_escape_string($db, $_POST['raddress']);
    $oaddress = mysqli_real_escape_string($db, $_POST['oaddress']);

    $rname2 = mysqli_real_escape_string($db, $_POST['rname2']);
    $rlname2 = mysqli_real_escape_string($db, $_POST['rlname2']);
    $rothername2 = mysqli_real_escape_string($db, $_POST['rothername2']);
    $position2 = mysqli_real_escape_string($db, $_POST['position2']);
    $remail2 = mysqli_real_escape_string($db, $_POST['remail2']);
    $rphone2 = mysqli_real_escape_string($db, $_POST['rphone2']);
    $raddress2 = mysqli_real_escape_string($db, $_POST['raddress2']);
    $oaddress2 = mysqli_real_escape_string($db, $_POST['oaddress2']);


    $laddress = mysqli_real_escape_string($db, $_POST['laddress']);
    $laddress2 = mysqli_real_escape_string($db, $_POST['laddress2']);
    $laddress3 = mysqli_real_escape_string($db, $_POST['laddress3']);
    $laddress4 = mysqli_real_escape_string($db, $_POST['laddress4']);
    $laddress5 = mysqli_real_escape_string($db, $_POST['laddress5']);
    $laddress6 = mysqli_real_escape_string($db, $_POST['laddress6']);
    $lstart = mysqli_real_escape_string($db, $_POST['lstart']);
    $lstart2 = mysqli_real_escape_string($db, $_POST['lstart2']);
    $lstart3 = mysqli_real_escape_string($db, $_POST['lstart3']);
    $lstart4 = mysqli_real_escape_string($db, $_POST['lstart4']);
    $lstart5 = mysqli_real_escape_string($db, $_POST['lstart5']);
    $lstart6 = mysqli_real_escape_string($db, $_POST['lstart6']);
    $lend = mysqli_real_escape_string($db, $_POST['lend']);
    $lend2 = mysqli_real_escape_string($db, $_POST['lend2']);
    $lend3 = mysqli_real_escape_string($db, $_POST['lend3']);
    $lend4 = mysqli_real_escape_string($db, $_POST['lend4']);
    $lend5 = mysqli_real_escape_string($db, $_POST['lend5']);
    $lend6 = mysqli_real_escape_string($db, $_POST['lend6']);
    $mycode = mysqli_real_escape_string($db, $_POST['mycode']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO enumerator (name, lname, othername, address, address2, phone, email, gender, marital, dob, state, village, smartphone, health, sick, sicklong, qualification, school_year, computer, ename, elname, eothername, relationship, eaddress, eemail, ephone, rname, rlname, rothername, position, remail, rphone, raddress, oaddress, rname2, rlname2, rothername2, position2, remail2, rphone2, raddress2, oaddress2, image, laddress, lstart, lend, laddress2, lstart2, lend2, laddress3, lstart3, lend3, laddress4, lstart4, lend4, laddress5, lstart5, lend5, laddress6, lstart6, lend6, code) VALUES ('$name', '$lname', '$othername', '$address', '$address2', '$phone', '$email', '$gender', '$marital', '$dob', '$state', '$village', '$smartphone', '$health', '$sick', '$sicklong', '$qualification', '$school_year', '$computer', '$ename', '$elname', '$eothername', '$relationship', '$eaddress', '$eemail', '$ephone', '$rname', '$rlname', '$rothername', '$position', '$remail', '$rphone', '$raddress', '$oaddress', '$rname2', '$rlname2', '$rothername2', '$position2', '$remail2', '$rphone2', '$raddress2', '$oaddress2', '$target', '$laddress', '$lstart', '$lend', '$laddress2', '$lstart2', '$lend2', '$laddress3', '$lstart3', '$lend3', '$laddress4', '$lstart4', '$lend4', '$laddress5', '$lstart5', '$lend5', '$laddress6', '$lstart6', '$lend6', '$mycode')";
    // execute query
    

    if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target)) {
        $result = mysqli_query($db, $sql);
         $sql2 = "UPDATE mypins SET status=1, user_id='".$email."' WHERE pins='".$mycode."'";
         mysqli_query($db, $sql2);
        $msg = "Registration successful";
    }else{
        $msg = "Registration Failed";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="KYLECHRIS Enumerator Registration Form">
    <meta name="author" content="Ansonika">
    <title>KYLECHRIS | Enumerator Registration Form</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> -->

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- MODERNIZR MENU -->
    <script src="js/modernizr.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">

    <link href="/path/to/jquery.simpleDatepicker.css" rel="stylesheet" />
    <script src="/path/to/jquery.min.js"></script>
    <script src="/path/to/jquery.simpleDatepicker.js"></script>
    
 

</head>

<body>
    
    <!-- <div id="preloader">
        <div data-loader="circle-side"></div>
    </div> --><!-- /Preload -->
    
    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->
    
  <!--   <nav>
        <ul class="cd-primary-nav">
            <li><a href="index.html" class="animated_link">Home</a></li>
            <li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>
            <li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>
            <li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>
            <li><a href="about.html" class="animated_link">About Us</a></li>
            <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
            <li><a href="rtl/index.html" class="animated_link">RTL Version</a></li>
        </ul>
    </nav> -->
    <!-- /menu -->
    
    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-4 content-left">
                <div class="content-left-wrapper">
                    <a href="index.php" id="logo"><img src="assets/img/logo.png" alt="" width="49" height="35"></a>
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div>
                        <figure><img src="img/info_graphic_1.svg" alt="" class="img-fluid"></figure>
                        <h2>Enumerator Registration Form</h2>
                        <p>Thank you for your interest in becoming one of our Field enumerators. Complete the form below accurately to move your application to the next stage.</p>
                        <a href="index.php" class="btn_1 rounded" target="_parent">Home Page</a>
                        <a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
                    </div>
                    <div class="copy">© 2020 Kylechris.com</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->

            <div class="col-lg-8 content-right" id="start">
                <div id="wizard_container">
                    <div id="top-wizard">
                            <!-- <div id="progressbar"></div> -->
                        </div>
                        <!-- /top-wizard -->
                        <?php if($msg!=""){?>
                            <div class="alert alert-success" role="alert">
                          <p><span>Success!</span>  <?php echo $msg; ?>.</p>
                        </div>
                        <?php 
                        } else {?>
                        <div></div>
                        <!-- <form id="wrapped" action="submit.php" method="post" enctype="multipart/form-data"> -->
                            <form action="form.php" method="post" enctype="multipart/form-data">
                             <input id="mycode" name="mycode" type="hidden" value="<?php echo $code;?>">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <h3 class="main_question"><strong>1/7</strong>Complete the form below accurately to move your application to the next stage</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                        <label for="name">First Name</label>
                                        <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text"  name="lname" id="lname" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                    
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="othername">Other Name</label>
                                            <input type="text" name="othername" id="othername" class="form-control" onchange="getVals(this, 'othername');">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="text" name="dob" id="dob" class="form-control required" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <label>Sex</label>
                                        <div class="form-group radio_input">
                                            <label class="container_radio mr-3">Male
                                                <input type="radio" name="gender" value="Male" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">Female
                                                <input type="radio" name="gender" value="Female" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label>Marital Status</label>
                                        <div class="form-group radio_input">
                                            <label class="container_radio mr-3">Single
                                                <input type="radio" name="marital" value="Single" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">Married
                                                <input type="radio" name="marital" value="Married" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group add_bottom_30">
                                    <label>Passport photo<br><small>(File accepted: .jpg, .png, .gif, .jpeg - Max file size: 150KB)</small></label>
                                    <div class="fileupload">
                                        <input type="file" name="fileupload">
                                    </div>
                                </div>
                                </div>

                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>2/7 Contact address details</strong></h3>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="address">Street</label>
                                                <input type="text" name="address" id="address" class="form-control required" onchange="getVals(this, 'address');">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="village">Village/Ward</label>
                                                <input type="text" name="village" id="village" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="address2">LGA</label>
                                                <input type="text" name="address2" id="address2" class="form-control" onchange="getVals(this, 'address2');">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text"  name="state" id="state" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end step -->
                                <div class="step">
                                    <h3 class="main_question"><strong>3/7 Contact Address in the Last Six years</strong></h3>
                                
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" name="laddress" id="laddress" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                            <label for="lname">Start Date</label>
                                            <input type="text"  name="lstart" id="lstart" class="form-control required" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="othername">End Date</label>
                                                <input type="text" name="lend" id="lend" class="form-control required" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" name="laddress2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                            <label for="lname">Start Date</label>
                                            <input type="text"  name="lstart2" id="lstart2" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="othername">End Date</label>
                                                <input type="text" name="lend2" id="lend2" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" name="laddress3" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                            <label for="lname">Start Date</label>
                                            <input type="text"  name="lstart3" id="lstart3" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="othername">End Date</label>
                                                <input type="text" name="lend3" id="lend3" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" name="laddress4" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                            <label for="lname">Start Date</label>
                                            <input type="text" name="lstart4" id="lstart4" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="othername">End Date</label>
                                                <input type="text" name="lend4" id="lend4" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" name="laddress5" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                            <label for="lname">Start Date</label>
                                            <input type="text" name="lstart5" id="lstart5" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="othername">End Date</label>
                                                <input type="text" name="lend5" id="lend5" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" name="laddress6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                            <label for="lname">Start Date</label>
                                            <input type="text" name="lstart6" id="lstart6" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="othername">End Date</label>
                                                <input type="text" name="lend6" id="lend6" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- step-->
                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>4/7</strong></h3>
                                <h3 class="main_question">Do you have a Smart phone Tablet? </h3>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">Yes
                                                    <input type="radio" name="smartphone" value="Yes" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                             </div>
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">No
                                                    <input type="radio" name="smartphone" value="No" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="main_question">Do you have any Health related issue?  </p>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">Yes
                                                    <input type="radio" name="health" value="Yes" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                             </div>
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">No
                                                    <input type="radio" name="health" value="No" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="main_question">Have you been sick of FEVER in the last 21 days?   </h3>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">Yes
                                                    <input type="radio" name="sick" value="Yes" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                             </div>
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">No
                                                    <input type="radio" name="sick" value="No" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sicklong">If YES, How long? </label>
                                        <input type="text"  name="sicklong" id="sicklong" class="form-control">
                                    </div>
                                </div>
                                <!-- step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>5/7</strong>Educational Information</h3>
                                    <div class="form-group">
                                        <label for="qualification">Highest qualification</label>
                                        <input type="text"  name="qualification" id="qualification" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="school_year">Last school Attended/Year? </label>
                                        <input type="text"  name="school_year" id="school_year" class="form-control required">
                                    </div>

                                    <h3 class="main_question">Are you a computer literate?  </h3>
                                
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">Yes
                                                    <input type="radio" name="computer" value="Yes" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                             </div>
                                            <div class="col-xl-6">
                                                <label class="container_radio version_2">No
                                                    <input type="radio" name="computer" value="No" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>6/7</strong>Emergency Contact Information</h3>
                                    <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                        <label for="ename">First Name</label>
                                        <input type="text" name="ename" id="ename" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                        <label for="elname">Last Name</label>
                                        <input type="text"  name="elname" id="elname" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="eothername">Other Name</label>
                                            <input type="text" name="eothername" id="eothername" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="relationship">Relationship</label>
                                            <input type="text" name="relationship" id="relationship" class="form-control required">
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="eaddress">Contact Address</label>
                                            <input type="text" name="eaddress" id="eaddress" class="form-control required">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="eemail">Email Address</label>
                                            <input type="email" name="eemail" id="eemail" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="ephone">Phone</label>
                                            <input type="text" name="ephone" id="ephone" class="form-control required">
                                        </div>
                                    </div>
                                </div>
                                </div> 
                                <!-- /step-->
                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>7/7</strong>Referee</h3>
                                    <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                        <label for="rname">First Name</label>
                                        <input type="text" name="rname" id="rname" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                        <label for="rlname">Last Name</label>
                                        <input type="text"  name="rlname" id="rlname" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="rothername">Other Name</label>
                                            <input type="text" name="rothername" id="rothername" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="position">Position</label>
                                            <input type="text" name="position" id="position" class="form-control required">
                                        </div>                                        
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="rmail">Email Address</label>
                                            <input type="rmail" name="remail" id="eemail" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="rphone">Phone</label>
                                            <input type="text" name="rphone" id="rphone" class="form-control required">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="raddress">Contact Address</label>
                                            <input type="text" name="raddress" id="raddress" class="form-control required">
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="oaddress">Office Address</label>
                                            <input type="text" name="oaddress" id="oaddress" class="form-control">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <b> Second Referee</b>
                                <hr>

                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                        <label for="rname">First Name</label>
                                        <input type="text" name="rname2" id="rname2" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                        <label for="rlname">Last Name</label>
                                        <input type="text"  name="rlname2" id="rlname2" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="rothername">Other Name</label>
                                            <input type="text" name="rothername2" id="rothername" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="position">Position</label>
                                            <input type="text" name="position2" id="position2" class="form-control required">
                                        </div>                                        
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="rmail">Email Address</label>
                                            <input type="rmail" name="remail2" id="eemail2" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label for="rphone">Phone</label>
                                            <input type="text" name="rphone2" id="rphone2" class="form-control required">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="raddress">Contact Address</label>
                                            <input type="text" name="raddress2" id="raddress2" class="form-control required">
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="oaddress">Office Address</label>
                                            <input type="text" name="oaddress2" id="oaddress2" class="form-control">
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                </div> 
                                <!-- /step-->
                                <div class="submit step">
                                    <!-- <h3 class="main_question"><strong>7/7</strong>Summary</h3> -->
                                    <div class="summary">
                                    <div class="wrapper">
                                        <h3>Thank you for your time</span>!</h3>
                                        <p>We would contat you shortly on this email address <strong id="email_field"></strong></p>
                                    </div>
                                    <div class="text-center">
                                        <div class="form-group terms">
                                            <label class="container_check">I hereby certify that the information provided is correct
                                                <input type="checkbox" name="terms" value="Yes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" name="forward" class="forward">Next</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    <?php } ?>
                    </div>
                    <!-- /Wizard container -->
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
    </div>
    <!-- /container-fluid -->

    <?php

} else {
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="KYLECHRIS Enumerator Registration Form">
    <meta name="author" content="Ansonika">
    <title>KYLECHRIS | Enumerator Registration Form</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> -->

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- MODERNIZR MENU -->
    <script src="js/modernizr.js"></script>
    
 

</head>

<body>
    
    <!-- <div id="preloader">
        <div data-loader="circle-side"></div>
    </div> --><!-- /Preload -->
    
    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->
    
  <!--   <nav>
        <ul class="cd-primary-nav">
            <li><a href="index.html" class="animated_link">Home</a></li>
            <li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>
            <li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>
            <li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>
            <li><a href="about.html" class="animated_link">About Us</a></li>
            <li><a href="contacts.html" class="animated_link">Contact Us</a></li>
            <li><a href="rtl/index.html" class="animated_link">RTL Version</a></li>
        </ul>
    </nav> -->
    <!-- /menu -->
    
    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-4 content-left">
                <div class="content-left-wrapper">
                    <a href="index.php" id="logo"><img src="assets/img/logo.png" alt="" width="49" height="35"></a>
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div>
                        <figure><img src="img/info_graphic_1.svg" alt="" class="img-fluid"></figure>
                        <h2>Enumerator Registration Form</h2>
                        <p>We analyze and convert geospatial data into informative, interactive and aesthetically pleasing 2D and 3D to satisfy specific needs</p>
                        <a href="index.php" class="btn_1 rounded" target="_parent">Home Page</a>
                        <a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
                    </div>
                    <div class="copy">© 2020 Kylechris.com</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->
 <div class="col-lg-8 content-right" id="start">
                <div id="wizard_container">
                            <form action="form.php" method="post">
                             <input id="form" name="form" type="hidden" value="form">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="submit">
                                    <div class="wrapper">
                                        <h3><font color=red>Invalid code, try again</h3>
                                        <p>Thank you die your interest in becoming one of our Field enumerators. Complete the form below accurately to move your application to the next stage. </p>
                                    </div>
                                    <div class="">
                                            <div class="form-group">
                                            <label for="code">Enter your registration code</label>
                                            <input type="text" name="code" id="code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="submit" name="process" class="submit">Continue</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
            </div>

<?php }
$conn->close();

?>

    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <!-- /cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div>
    <!-- /cd-overlay-content -->

   
    
    
    <!-- /.modal -->
    
    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.5.1.min.js"></script> 
    <script src="js/common_scripts.min.js"></script>
    <script src="js/velocity.min.js"></script>
    <!-- <script src="js/functions.js"></script> -->

    <!-- Wizard script -->
    <script src="js/func_1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
$( function() {
    $( "#dob" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "1950:2012",
    });
    $( "#lstart" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lend" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lstart2" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lend2" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lstart3" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lend3" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lstart4" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lend4" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lstart5" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lend5" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });

    $( "#lstart6" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
    $( "#lend6" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        yearRange: "2006:2021",
    });
});
  </script>

</body>
</html>
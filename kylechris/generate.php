<?php
$db = mysqli_connect("premium88.web-hosting.com", "xenpaowt_akwagis", "Fayo@123*", "xenpaowt_akwagis");

  $num="";
  for ($i=0; $i<20; $i++) { 
        $num = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
         $sql = "INSERT INTO mypins (pins) VALUES ('".$num."')";
         $result = mysqli_query($db, $sql);
         echo $sql."<br>";
    }
      $msg = 'PINS Generated Successfully.';

      echo $msg;

          ?>
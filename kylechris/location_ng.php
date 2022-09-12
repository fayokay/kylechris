

<?php
  date_default_timezone_set('Africa/Lagos');
// $Date =date("Y-m-d H:i:s"); 
// $LOG =$_POST['LOG'];
// $LAT =$_POST['LAT'];
// $IME =$_POST['IME']; 
// $SIMSerial =$_POST['SIMSerial']; 
// if($_POST['PhoneNo']=="")
// {
// $PhoneNo ="null"; 
// }
// else
// {
// $PhoneNo =$_POST['PhoneNo']; 
// }
// if($_POST['DeviceProduct']=="")
// {
// $DeviceProduct ="null"; 
// }
// else
// {
// $DeviceProduct =$_POST['DeviceProduct']; 
// }

// $DeviceName =$_POST['DeviceName']; 
// $DeviceModel =$_POST['DeviceModel']; 
// $DeviceBat =$_POST['DeviceBat']; 
// $Username =$_POST['Username']; 
// $Name =$_POST['Name']; 
// // array for JSON response
// $response = array();
 

//     // include db connect class
// include('config.php'); 


// if($LAT==""){
// 		$sql_cod = mysqli_query($dbconnect, "SELECT * FROM my_stlgwdpu_cod_all WHERE PUCODE = '".$Username."'");
// 		$row_cod=mysqli_fetch_array($sql_cod);	
	
// 		$LAT =$row_cod['LAT'];
// 		$LOG = $row_cod['LOG'];
// 		$cordinate="Appended";
// 		}


	  
// 	  $sql_Others = mysqli_query($appCon, "SELECT * FROM my_stlgwdpu_all WHERE Username = '".$Username."'");
// 	  $row_Others=mysqli_fetch_array($sql_Others);	

// 	$LGA=$row_Others['LGA'];
// 	$WARD=$row_Others['Ward'];
// 	$Phone=$row_Others['Phone'];
// 	$name=$row_Others['Names'];
// 	$PUNAME=$row_Others['Unit'];
// 	$RegTotal=$row_Others['Total'];
// 	 $DIST= $row['sendist'];
	  
	  
 

// 	  // mysql inserting a new row
// $resultss = mysqli_query($appCon,"INSERT INTO ele_location (Username, PName, LOG, LAT, IME, SIMSerial, SIMOperator, DeviceName, DeviceModel, DeviceProduct, bat) VALUES ('".$Username."','".$Name."','".$LOG."', '".$LAT."', '".$IME."', '".$SIMSerial."', '".$PhoneNo."', '".$DeviceName."', '".$DeviceModel."', '".$DeviceProduct."','".$DeviceBat."')");



//  	$sql_Ichk = mysqli_query($appCon, "SELECT Username FROM ele_location WHERE Username = '".$Username."'");
// 	$row_Ichk=mysqli_num_rows($sql_Ichk);

// 		if($row_Ichk==1)
// 		{
// 		$mycnt=1;
// 		}
// 		else {
// 		$mycnt=0;
// 		}
		
		 
//     // check if row inserted or not
//     if ($resultss) {
	
// 	//API Url
// $url = 'https://www.kylechris.com:6143/geoevent/rest/receiver/Hbeat-json-in';
 
 $url = 'https://geokylechris.com/server/rest/services/Hosted/HeartBeat/FeatureServer/0/addFeatures'; 
 $array[] = array("attributes"=> array(
	"note" => "Testing",
	"esrignss_receiver" => "Graffiti1",
	"locationx" => "880165.0823",
	"locationy" => "518613.8104",
	"bat_lev" => "6%",
	"picture" => "link",
	"surv_no" => "link",
	"status" => 1
	),
"geometry" => array("x" => 881264.8723,
         "y" => 518657.5912));
  $jsonDataEncoded = json_encode($array);
  //$post = 'f=json&features=%5B%7B%22attributes%22%3A%7B%22note%22%3A%22Testing%22%2C%22esrignss_receiver%22%3A%22Graffiti1%22%2C%22locationx%22%3A%22880165.0823%22%2C%22locationy%22%3A%22518613.8104%22%2C%22bat_lev%22%3A%226%25%22%2C%22picture%22%3A%22link%22%2C%22surv_no%22%3A%22link%22%2C%22status%22%3A1%7D%2C%22geometry%22%3A%7B%22x%22%3A881264.8723%2C%22y%22%3A518657.5912%7D%7D%5D';//

  $post = 'f=json&features='.urlencode($jsonDataEncoded);

  //[{"attributes":{"note":"Testing","esrignss_receiver":"Graffiti1","locationx":"880165.0823","locationy":"518613.8104","bat_lev":"6%","picture":"link","surv_no":"link","status":1},"geometry":{"x":881264.8723,"y":518657.5912}}]

  //echo $post;

  //exit;


 $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://geokylechris.com/server/rest/services/Hosted/HeartBeat/FeatureServer/0/addFeatures',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Cookie: AGS_ROLES="419jqfa+uOZgYod4xPOQ8Q=="'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


exit;
 
// //Initiate cURL.
 $ch = curl_init($url);
// $ch2 = curl_init($url2);
 
//The JSON data.





  $jsonDataEncoded = json_encode($array);
  echo $jsonDataEncoded;

  //Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 2);
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
 
//Execute the request
$result = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo curl_errno($ch)."<br>";
echo curl_error($ch);
echo $httpcode."<br>";
echo $result."<br>";

// Check if any error occurred
if(!curl_errno($ch))
{
 $info = curl_getinfo($ch);

 echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
}

//print_r($info);

// Close handle
curl_close($ch);

//echo $result."<br>".$httpcode;
      

  exit;


// $jsonData = array(
// 	  {
//       "attributes" : {
//         "note" : "Test",
//         "esrignss_receiver" : "Graffiti1",
//         "locationx" : "880165.0823",
//         "locationy" : "518613.8104",
// 		"bat_lev" : "4%",
// 		"picture" : "link",
// 		"surv_no" : "link",
// 		"status" : 1
//       },
// 	"geometry" : {
//         "x" : 881264.8723,
//         "y" : 518657.5912
//       }
      
//     }


//     "Date" => "$Date",
//     "Pucode" => "$Username",
//     "Name" => "$Name",
//     "latitude" => "$LAT",
//     "longitude" => "$LOG",
//     "IMEI" => "$IME",
//     "SIMSerial" => "$SIMSerial",
//     "PhoneNo" => "$PhoneNo",
//     "DeviceName" => "$DeviceName",
//     "DeviceModel" => "$DeviceModel",
//     "Battery" => "$DeviceBat",
// 	"DIST" =>  "$DIST",
// 	"LGA" =>  "$LGA",
// 	"WARD" => "$WARD",
// 	"PUNAME" => "$PUNAME",
// 	"VoteTotal" => "$RegTotal",
// 	"Cordinate" => "$cordinate",
// 	"Phone" => "$Phone",
// 	"Name" => "$Name",
// 	"MyCnt" => "$mycnt"
	
// );

$jsonData2 = array(
    "Date" => "$Date",
    "Pucode" => "$Username",
    "Name" => "$Name",
    "latitude" => "$LAT",
    "longitude" => "$LOG",
    "IMEI" => "$IME",
    "SIMSerial" => "$SIMSerial",
    "PhoneNo" => "$PhoneNo",
    "DeviceName" => "$DeviceName",
    "DeviceModel" => "$DeviceModel",
    "Battery" => "$DeviceBat",
    "TAG" => "LOC",
	"DIST" =>  "$DIST",
	"LGA" =>  "$LGA",
	"WARD" => "$WARD",
	"PUNAME" => "$PUNAME",
	"VoteTotal" => "$VoteTotal",
	"Cordinate" => "$cordinate",

);
 
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
$jsonDataEncoded2 = json_encode($jsonData2);
 
// //Tell cURL that we want to send a POST request.
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch2, CURLOPT_POST, 1);
// //Attach our encoded JSON string to the POST fields.
// curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
// curl_setopt($ch2, CURLOPT_POSTFIELDS, $jsonDataEncoded2);
//   curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($ch2,CURLOPT_RETURNTRANSFER, true);
// //Set the content type to application/json
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
// curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
 
// //Execute the request
// $result = curl_exec($ch);
// $result2 = curl_exec($ch2);
//         echo "SUCCESS";
//     } else {
//     echo "FAILURE";
//     }
	
// //echo $jsonDataEncoded;

?>
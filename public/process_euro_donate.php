<?php 
require_once "../src/conn.php"; 

$email = $_POST["email"];
$amount = $_POST["amount"]; 
$name = $_POST["name"];
$errors = [];
if(isset($_POST["amount"])){
    if(empty($email) || empty($name) || empty($amount)){
     $errors1 = "Email is requuired";
    $errors2 = "Please enter amount";
    $errors3 = "Please provide a name";
     header("location: donate.php?error1=$errors1&error2=$errors2&error3=$errors3" );
    } 
        
    else{
           
$request =[
    "tx_ref" => "edudot-eur-".randnum(13),
    "amount" => $amount,
    "currency" => "EUR",
    "redirect_url"=> "https://localhost/edudot/public/donate_process.php",
    "payment_options"=>"card",
    "meta"=>[
       "amount" => $amount,
    ],
    "customer"=>[
       "email"=> $email,
       "name"=> $name,
               ],
    "customizations"=>[
       "title"=>"EDUDOT",
       "description"=>"User donation",
       "logo"=>"http://localhost/edudot/src/icons/logo2.png"
    ]];
    // echo '<pre>';
    // echo json_encode($request);
    // echo '</pre>';
    // exit;
    // fluterwave endpoint
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($request),
        CURLOPT_HTTPHEADER => array('Authorization: Bearer FLWSECK_TEST-a6a12e324ac1f84a14185d7521cb97a4-X',
        'Content-Type: application/json'),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $res = json_decode($response);

    if($res->status == 'success'){
        $link = $res->data->link;
        header("Location: $link");
    }
    else {
        $errors4 = "payment proccessing failed";

 header("location: donate.php?error=$errors4" );
} 
      

    // echo '<pre>';
    // echo $response;
    // echo '</pre>';
    // header("location: ucc confirmation.php?message=payment successful&id=$id&email=$email" );


}
// /////////////////
}

function randnum($n){
$chars = "a0b1c2d3e40e1d2c3b4a5ee6dd7cc8bb9aae0d1c2b3a4abcde4a3b2c1d0e9aa8bb7cc6dd5ee4a3b2c1d0e";
$str = "";

for($i = 0; $i <= $n ; $i++){
 $index = rand(0, strlen($chars )-1);
$str.= $chars[$index];
}   
return $str;
}

// function mydate(){
// $newdate = date('Y');
// return $newdate;
// } 

?>
<?php 
require_once "../src/conn.php"; 
$id = $_POST["id"];
$email = $_POST["email"];
$amount = $_POST["amount"]; 

if(isset($_POST["amount"])){

    if(empty($email)){
     $errors = "email is requuired";
    
     header("location: generate.php?error=email is required&id=$id" );
    } else{

$request =[
        "tx_ref" => "edudot-usd-".randnum(12),
        "amount" => $amount,
        "currency" => "USD",
        "redirect_url"=> "https://localhost/edudot/public/process.php?id=$id",
        "payment_options"=>"card",
        "meta"=>[
           "ucc"=>"edudot/".mydate()."/".randnum(8),
           "scholarid" => $id,
        ],
        "customer"=>[
           "email"=> $email,
                   ],
        "customizations"=>[
           "title"=>"UCC GENERATION",
           "description"=>"Payment for service fee",
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
            $errors = "payment proccessing failed";
    
     header("location: generate.php?error=$errors&id=$id" );
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

function mydate(){
 $newdate = date('Y');
return $newdate;
} 

// echo randnum(9)."<br>";
// echo $mydate;

?>
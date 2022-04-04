<?php
require_once "../src/conn.php";
 if(isset($_GET["status"]))
{

    if($_GET["status"] == "cancelled")
    {
        header("Location: donate.php");
    }
    else if($_GET["status"] == "successful")
        {      
          $txid = $_GET["transaction_id"];
          
          $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: Bearer FLWSECK_TEST-a6a12e324ac1f84a14185d7521cb97a4-X',
            'Content-Type: application/json'),
        ));

        $response = curl_exec($curl); 
        curl_close($curl);
        $res = json_decode($response);
//echo json_encode($res);
        if($res->status == "success"){
        
        $name = $res->data->customer->name;
        $email = $res->data->customer->email;
        
         header("location: donate confirmation.php?message=payment successful&name=$name" );
        }
        elseif($res->status == "error"){
            
        header("location: donate_failed.php");
        }


         }

        
}


?>
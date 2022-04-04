<?php
require_once "../src/conn.php";
 if(isset($_GET["status"]))
{
   $id= $_GET["id"];
    if($_GET["status"] == "cancelled")
    {
        header("Location: generate.php?id=$id");
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
        if($res->status == "success"){
        $ucc = strtoupper($res->data->meta->ucc);
        $scholarid = $res->data->meta->scholarid;
        $email = $res->data->customer->email;
         $create_date = date("Y-m-d");
        $year = date("Y") + 1;
        $days = date("m-d");
        $expire_date = $year."-".$days;

        $statement = $pdo->prepare("INSERT INTO ucc (email, ucc, create_date, expire_date)
        VALUES(:email, :ucc, :create_date, :expire_date)");
        $statement->bindValue(":email",$email);
        $statement->bindValue("ucc",$ucc);    
        $statement->bindValue(":create_date",$create_date);
        $statement->bindValue(":expire_date",$expire_date);
        $statement->execute();

        require_once "../public/email.php";

         header("location: ucc confirmation.php?message=payment successful&id=$scholarid&email=$email&ucc=$ucc" );
        }
        elseif($res->status == "error"){
        header("location: ucc_failed.php");
        }


         }

        
}


?>
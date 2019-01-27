<?php

include '../../connection.php';

// if (isset($_GET['btnSend'])) 
// {

    // Counry Code
    $code = "91";

    //Your authentication key
    $APIKEY = "2ejv4X4UbkM";

    //Multiple mobiles numbers separated by comma
    $mobile = $_GET['mobile'];
    $MobileNo = $code . $mobile;

    //Sender ID,While using route4 sender id should be 6 characters long.
    $SenderID = "NIMSED";

    //Your message to send, Add URL encoding here.
    $name = $_GET['nm'];
    $Message = "Dear Nimslite ".$name.", Many many happy returns of the day & Wish you happy birthday from Nims-Family.";

    //Define route 
    $ServiceName = "TEMPLATE_BASED";
    //Prepare you post parameters
    $postData = array(
        'APIKEY' => $APIKEY,
        'MobileNo' => $MobileNo,
        'SenderID' => $SenderID,
        'Message' => $Message,
        'ServiceName' => $ServiceName
    );

    //API URL
    $url="https://smsapi.24x7sms.com/api_2.0/SendSMS.aspx";

    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
    ));


    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    //get response
    $output = curl_exec($ch);

    //Print error if any
    if(curl_errno($ch))
    {
        // echo 'error:' . curl_error($ch);

        echo curl_error($ch);
    }
    else
    {
        $sms_nm = "Birthday_Reminder";
        $sms_msg = mysqli_real_escape_string($conn,$Message);
            
        $query = "INSERT INTO sms_dtls (sms_mobile, sms_nm, sms_msg) VALUES ('$MobileNo', '$sms_nm', '$sms_msg')";
        $result = mysqli_query($conn,$query);

       
    }

    curl_close($ch);

    // echo $output;

    ?>
<script type="text/javascript">
    alert("SMS Sent!!!");
    window.location.href="dashboard.php";
</script>

<?php  

// }

?>
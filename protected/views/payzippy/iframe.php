<?php

Yii::import('application.extensions.payzippy-sdk.ChargingRequest');


// Convert the "transaction_amount" to Paisa.
$transaction_amount = $_POST["PayzippyForm"]["transaction_amount"];

// Get an instance of ChargingRequest.
$pz_charging = new ChargingRequest();

// Set all the parameters that you want to send in the request.
// You can also overwrite the default parameters set in the Config.php file.
$pz_charging->set_buyer_email_address($_POST["PayzippyForm"]["buyer_email_address"])
    ->set_merchant_transaction_id($_POST["PayzippyForm"]["merchant_transaction_id"])
    ->set_transaction_amount($transaction_amount)
    ->set_payment_method($_POST["PayzippyForm"]["payment_method"])
    ->set_bank_name($_POST["PayzippyForm"]["bank_name"])
    ->set_ui_mode($_POST["PayzippyForm"]["ui_mode"]);

// Finally, call the charge function, to get the charging_arr.
// It has the keys - "status", "error_message", "url", "params".
$charging_object = $pz_charging->charge();

// If there was an error while getting the $charging_object, the value
// "error" will be set to "ERROR".
if ($charging_object["status"] != "OK") {
    echo '<p>Error: ', $charging_object["error_message"], "</p>";
    exit();
}
?>

<!--
For integration using IFRAME mode, create a new HTML IFRAME element
and set its "src" attribute to $charging_object["url"]
 -->
 <section class="wrapper">
<h3>Integration using iframe</h3>
<iframe src="<?php echo $charging_object["url"]; ?>" height="600px" width="100%"></iframe>
</section>

<?php

$qty = $_GET["q"];
$order_id = uniqid();
$item = "Galaxy Z Fold 1";
$amount = "70000";
$fname = "pasan";
$lname = "perera";
$mobile = "0716578904";
$address = "No.23,Colombo Road, pilimathalawa";
$city = "kandy";
$email = "pasan@gmail.com";
$currency = "LKR";

$merchant_id = "1227789";
$merchant_secret = "MTAwNTA0NjAxODUzMTE4Mjg2NjE5NTEwNTE0OTIzMzY5NzMwNjc4";

$hash = strtoupper(
    md5(
        $merchant_id .
            $order_id .
            number_format($amount, 2, '.', '') .
            $currency .
            strtoupper(md5($merchant_secret))
    )
);

$array["id"] = $order_id;
$array["item"] = $item;
$array["amount"] = $amount;
$array["fname"] = $fname;
$array["lname"] = $lname;
$array["mobile"] = $mobile;
$array["address"] = $address;
$array["city"] = $city;
$array["email"] = $email;
$array["hash"] = $hash;


echo json_encode($array);

?>

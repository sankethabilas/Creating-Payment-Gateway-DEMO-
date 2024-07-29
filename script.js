function buynow() {
  var qty = 2;

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;
      
      var obj = JSON.parse(t);
      //alert(obj["fname"]);

          // Payment completed. It can be a successful failure.
    payhere.onCompleted = function onCompleted(orderId) {
        console.log("Payment completed. OrderID:" + orderId);
        // Note: validate the payment and show success or failure page to the customer
    };

    // Payment window closed
    payhere.onDismissed = function onDismissed() {
        // Note: Prompt user to pay again or show an error page
        console.log("Payment dismissed");
    };

    // Error occurred
    payhere.onError = function onError(error) {
        // Note: show an error page
        console.log("Error:"  + error);
    };

    // Put the payment variables here
    var payment = {
        "sandbox": true,
        "merchant_id": "1227789",    // Replace your Merchant ID
        "return_url": "http://localhost/day25.index.php",     // Important
        "cancel_url": undefined,     // Important
        "notify_url": "http://sample.com/notify",
        "order_id": obj["id"],
        "items": obj["item"],
        "amount": obj["amount"],
        "currency": "LKR",
        "hash": obj["hash"], // *Replace with generated hash retrieved from backend
        "first_name": obj["fname"],
        "last_name": obj["lname"],
        "email": obj["email"],
        "phone": obj["mobile"],
        "address": obj["address"],
        "city": obj["city"],
        "country": "Sri Lanka",
        "delivery_address": obj["address"],
        "delivery_city": obj["city"],
        "delivery_country": "Sri Lanka",
        "custom_1": "",
        "custom_2": ""
    };

    // Show the payhere.js popup, when "PayHere Pay" is clicked
    //document.getElementById('payhere-payment').onclick = function (e) {
        payhere.startPayment(payment);
   // };

    }
  }
  r.open("GET", "buyprocess.php?q=" + qty, true);
  r.send();
}

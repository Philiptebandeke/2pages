<!-- php artisan serve -->
<!DOCTYPE html>
<html>

<head>


    <!-- <link rel="stylesheet" type="text/css" href="css/overview.css?<?php echo time() ?>"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/payments2.css') }}">
    <!-- {{ asset('css/style.css') }} -->
    <title>Payments</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body onload="zoomPage()">
    <div id="bg"></div>
    <div id="rectangle1"> </div>
    <img id="image3" src="{{ asset('/images/image3.png') }}">
    <div id="rectangle14"  onclick="gotom('overview')" > </div>

    <img id="dashboard21"   onclick="gotom('overview')" src="{{ asset('/images/dashboard-21.png') }}">
    <span id="dashboard"  onclick="gotom('overview')">Dashboard</span>
    <!-- 
            
         -->
    <!-- <div id="sheet"></div> -->
    <div id="rectangle2"> </div>

    <img id="card" src="{{ asset('/images/card.png') }}">
    <!-- #F7F8FC -->
    <span id="Payments">Payments</span>
    <span id="Overview">Checkout</span>


    <img id="iconsearch" src="{{ asset('/images/search.svg') }}">
    <img id="iconnotificationsnew" src="{{ asset('/images/new.svg') }}">
    <img id="dividerlinevertical" src="{{ asset('/images/vertical.svg') }}">
    <div id="name">Edward Kamya</div>
    
    <img id="mheader" src="{{ asset('/images/m%20header.png') }}">
    <img id="profilecircle" src="{{ asset('/images/profile%20circle.svg') }}">
<img src="{{ asset('/images/Ellipse%202.png') }}" id="Ellipse3">
<div id="rectangle9"></div>
<div id="PAYMENTMETHOD">PAYMENT METHOD</div>
<div id="ChooseaPaymentMethod">Choose a Payment Method</div>
<div id="rectangle15" onclick="gotom('payments')" ></div>
<img id="image8"  onclick="gotom('payments')" src="{{ asset('/images/image%208.png') }}">
<div id="Card" onclick="gotom('payments')" >Card</div>
<div id="Rectangle17"></div>
<img id="image6"   src="{{ asset('/images/image%206.png') }}">
<div id="Rectangle18"></div>
<img id="image7" src="{{ asset('/images/image%207.png') }}">
<div id="BillingAddress">1. Billing Address</div>
<div id="CardDetails">2. Mobile Money Details</div>
<div id="PaymentSummary">Payment Summary</div>
<div id="FullNames">Full Names</div>
<div id="CardNumber">Phone Number</div>
<div id="Rectangle19"></div>
<div id="Rectangle28"></div>
<div id="MoneyTransfertoMukisaJohn4506284300890001">Money Transfer to Mukisa John<br>4506 2843 0089 0001</div>
<div id="Sub-total">Sub-total</div>
<div id="UGX50000">UGX 50,000</div>
<div id="TOTAL">TOTAL</div>
<div id="UGX500002">UGX 50,000</div>
<div id="Address1">Address 1</div>
<div id="ExpiryDate">Amount</div>
<div id="Rectangle20"></div>
<div id="Rectangle24"></div>
<div id="Address2">Address 2</div>
<div id="CardHolderName">Description</div>
<div id="Rectangle21"></div>
<div id="Rectangle26"></div>
<div id="ZipCode">Zip Code</div>
<div id="Rectangle22"></div>
<div id="Rectangle27"></div>
<div id="ConfirmPayment">Send Prompt</div>
<div id="MMYY">UGX</div>
<img id="Vector" src="{{ asset('/images/Vector.svg') }}">
<div id="Rectangle23"></div>
<div id="d256">+256</div>
<img id="image11" src="{{ asset('/images/i11.png') }}">
<div id="Rectangle25"></div>
<div id="d731000000">731 000 000</div>
</body>

</html>
<script>
    function scaleAllElements() {
  // Get the device width.
  const deviceWidth = window.innerWidth;

  // Get all of the elements on the page.
  const elements = document.querySelectorAll("*");

  // Loop through all of the elements and scale them.
  for (const element of elements) {
    // Get the current width of the element.
    // const elementWidth = element.getBoundingClientRect().width;

    // Calculate the scaling factor.
    // const scaleFactor = deviceWidth / elementWidth;
    const scaleFactor = deviceWidth / element.offsetWidth;
           
    // Set the scale of the element.
    element.style.transform = `scale(${scaleFactor})`;
  }
}

// Call the scaleAllElements() function when the page loads.
// window.onload = scaleAllElements;
function zoomPageToDeviceWidth() {
  // Get the device width
  const deviceWidth = document.documentElement.clientWidth;

  // Set the zoom level for the page
  document.documentElement.style.zoom = deviceWidth / window.innerWidth;
}

// Call the zoomPageToDeviceWidth function when the page loads
// window.addEventListener('load', zoomPageToDeviceWidth);
function zoomPage() {
      var screenWidth = window.innerWidth;
      var pageWidth = document.body.offsetWidth;
      var zoomLevel = screenWidth / pageWidth;

      document.body.style.zoom = zoomLevel;
    }
function gotom(page){
    // if(page == 'payments'){
        // window.location.href = "{{ url('/"+page+"') }}";
        window.location.href = page;
    // }
}
</script>
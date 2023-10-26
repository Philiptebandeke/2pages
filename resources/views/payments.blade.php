<!-- php artisan serve -->
<!DOCTYPE html>
<html>

<head>


  <!-- <link rel="stylesheet" type="text/css" href="css/overview.css?<?php echo time() ?>"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/payments.css') }}">
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
  <div id="rectangle14" onclick="gotom('overview')"> </div>

  <img id="dashboard21" onclick="gotom('overview')" src="{{ asset('/images/dashboard-21.png') }}">
  <span id="dashboard" onclick="gotom('overview')">Dashboard</span>
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
  <form id="form1">
    <div id="rectangle15"></div>
    <img id="image8" src="{{ asset('/images/image%208.png') }}">
    <div id="Card">Card</div>
    <img id="Vector" src="{{ asset('/images/Vector.svg') }}">
    <div id="Rectangle17" onclick="gotomb(2)"></div>
    <img id="image6" onclick="gotomb(2)" src="{{ asset('/images/image%206.png') }}">
    <div id="Rectangle18"></div>
    <img id="image7" src="{{ asset('/images/image%207.png') }}">

    <!-- action="/" -->
    <div id="BillingAddress">1. Billing Address</div>
    <div id="CardDetails">2. Card Details</div>
    <div id="PaymentSummary">Payment Summary</div>
    <div id="FullNames">Full Names</div>
    <div id="CardNumber">Card Number</div>
    <div id="Rectangle19">
      <input type="text" name="fullnames" class="turo">
    </div>
    <div id="Rectangle23"><input type="text" name="cardnumber" class="turo">
    </div>
    <img id="image9" src="{{ asset('/images/image9.png') }}">
    <div id="Rectangle28"></div>
    <div id="MoneyTransfertoMukisaJohn4506284300890001">Money Transfer to Mukisa John<br>4506 2843 0089 0001</div>
    <div id="Sub-total">Sub-total</div>
    <div id="UGX50000">UGX 50,000</div>
    <div id="TOTAL">TOTAL</div>
    <div id="UGX500002">UGX 50,000</div>
    <div id="Address1">Address 1</div>
    <div id="ExpiryDate">Expiry Date</div>
    <div id="CCV">CCV</div>
    <div id="Rectangle20"> <input type="text" name="address1" class="turo">
    </div>
    <div id="Rectangle24"><input type="text" placeholder="MM/YY" name="expirydate" class="turo">
    </div>
    <div id="Rectangle25"><input type="text" name="ccv" class="turo">
    </div>
    <div id="Address2">Address 2</div>
    <div id="CardHolderName">Card Holder Name</div>
    <div id="Rectangle21"> <input type="text" name="address2" class="turo">
    </div>
    <div id="Rectangle26"><input type="text" name="cardholdername" class="turo">
    </div>
    <div id="ZipCode">Zip Code</div>
    <div id="Rectangle22"> <input type="text" name="zipcode" class="turo">
    </div>
    <div id="Rectangle27" onclick="submitForm(1)"></div>
    <div id="ConfirmPayment" onclick="submitForm(1)">Confirm Payment</div>
    <!-- <div id="MMYY">MM/YY</div> -->
  </form>
  <form id="form2">


    <div id="rectangle15_2" onclick="gotomb(1)"></div>
    <img id="image8" onclick="gotomb(1)" src="{{ asset('/images/image%208.png') }}">
    <div id="Card" onclick="gotomb(1)">Card</div>
    <div id="Rectangle17_2"></div>
    <img id="image6" src="{{ asset('/images/image%206.png') }}">
    <div id="Rectangle18"></div>
    <img id="image7" src="{{ asset('/images/image%207.png') }}">
    <!-- <form> -->
    <div id="BillingAddress">1. Billing Address</div>
    <div id="CardDetails">2. Mobile Money Details</div>
    <div id="PaymentSummary">Payment Summary</div>
    <div id="FullNames">Full Names</div>
    <div id="CardNumber">Phone Number</div>
    <div id="Rectangle19"> <input type="text" name="fullnames" class="turo">
    </div>
    <div id="Rectangle28"></div>
    <div id="MoneyTransfertoMukisaJohn4506284300890001">Money Transfer to Mukisa John<br>4506 2843 0089 0001</div>
    <div id="Sub-total">Sub-total</div>
    <div id="UGX50000">UGX 50,000</div>
    <div id="TOTAL">TOTAL</div>
    <div id="UGX500002">UGX 50,000</div>
    <div id="Address1">Address 1</div>
    <div id="ExpiryDate">Amount</div>
    <div id="Rectangle20"><input type="text"  name="address1" class="turo" >
</div>
    <div id="Rectangle24"><input type="text" placeholder="UGX"  name="amount" class="turo" >
</div>
    <div id="Address2">Address 2</div>
    <div id="CardHolderName">Description</div>
    <div id="Rectangle21"><input type="text"  name="address2" class="turo" >
</div>
    <div id="Rectangle26"><input type="text"  name="description" class="turo" >
</div>
    <div id="ZipCode">Zip Code</div>
    <div id="Rectangle22"><input type="text"  name="zipcode" class="turo" >
</div>
    <div id="Rectangle27" onclick="submitForm(2)"></div>
    <div id="ConfirmPayment" onclick="submitForm(2)">Send Prompt</div>
    <!-- <div id="MMYY">UGX</div> -->
    <img id="Vector_2" src="{{ asset('/images/Vector.svg') }}">
    <div id="Rectangle23"><input placeholder="+256" type="text"  name="prefix" class="turo" ></div>
    <div id="d256">
</div>
    <img id="image11" src="{{ asset('/images/i11.png') }}">
    <div id="Rectangle25"><input type="text"  name="phonenumber" placeholder="731 000 000" class="turo" ></div>
    <div id="d731000000">
</div>
  </form>

</body>

</html>
<script>
  function submitForm(w) {
    // Submit the form
    document.querySelector("#form" + w).submit();
  }

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

  function gotom(page) {
    // if(page == 'payments'){
    // window.location.href = "{{ url('/"+page+"') }}";
    window.location.href = page;
    // }
  }

  function gotomb(wq) {
    document.querySelector("#form" + wq).style.display = "unset";
    var hide = 1
    if (wq == 1) {
      hide = 2
    }
    document.querySelector("#form" + hide).style.display = "none"

  }
</script>
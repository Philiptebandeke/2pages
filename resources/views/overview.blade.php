<!-- php artisan serve -->
<!DOCTYPE html>
<html>

<head>


    <!-- <link rel="stylesheet" type="text/css" href="css/overview.css?<?php echo time() ?>"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/overview.css') }}">
    <!-- {{ asset('css/style.css') }} -->
    <title>Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body onload="zoomPage()">
    <div id="bg"></div>
    <div id="rectangle1"> </div>
    <img id="image3" src="{{ asset('/images/image3.png') }}">
    <div id="rectangle14"> </div>

    <img id="dashboard21" src="{{ asset('/images/dashboard-21.png') }}">
    <span id="dashboard">Dashboard</span>
    <!-- 
            
         -->
    <!-- <div id="sheet"></div> -->
    <div id="rectangle2" onclick="gotom('payments')"> </div>

    <img id="card" onclick="gotom('payments')" src="{{ asset('/images/card.png') }}">
    <!-- #F7F8FC -->
    <span id="Payments" onclick="gotom('payments')">Payments</span>
    <span id="Overview">Overview</span>
    <div id="Rectangle3"></div>
    <img src="{{ asset('/images/Ellipse1.png') }}" id="Ellipse1">
    <img id="money1" src="{{ asset('/images/money%201.png') }}">
    <div id="d1800000">1,800,000</div>
    <div id="MobileMoney">Mobile Money</div>
    <div id="Rectangle7"></div>
    <div id="Rectangle7"></div>
    <div id="d15500000">15,500,000</div>
    <img id="credit-card1" src="{{ asset('/images/credit-card1.png') }}">
    <img src="{{ asset('/images/Ellipse%202.png') }}" id="Ellipse2">
    <div id="CardTransactions">Card Transactions</div>
    <img id="iconsearch" src="{{ asset('/images/search.svg') }}">
    <img id="iconnotificationsnew" src="{{ asset('/images/new.svg') }}">
    <img id="dividerlinevertical" src="{{ asset('/images/vertical.svg') }}">
    <div id="name">Edward Kamya</div>
    
    <img id="mheader" src="{{ asset('/images/m%20header.png') }}">
    <img id="profilecircle" src="{{ asset('/images/profile%20circle.svg') }}">
<div id="Rectangle8"></div>
<img src="{{ asset('/images/Ellipse%202.png') }}" id="Ellipse3">

<img id="cashier1" src="{{ asset('/images/cashier%201.png') }}">
<div id="d1256">1,256</div>
<div id="Merchants">Merchants</div>
<div id="Rectangle6"></div>
<img id="group1" src="{{ asset('/images/group%201.png') }}">
<div id="d289" >289</div>
<div id="TotalUsers">Total Users</div>
<img src="{{ asset('/images/Ellipse%202.png') }}" id="Ellipse4">
<div id="Rectangle9"></div>
<div id="Weekly">Weekly</div>
<div id="Monthly">Monthly</div>
<div id="Line1"></div>
<img id="Untitleddesign51" 
src="{{ asset('/images/Untitled%20design%20(5)%201.png') }}">
<div id="Statistics">Statistics</div>
<img id="Untitleddesign71" 
src="{{ asset('/images/Untitled%20design%20(7)%201.png') }}">
<div id="SummarybyGender">Summary by Gender</div>
<div id="Rectangle10"></div>
<div id="d258000000">258,000,000</div>
<div id="TotalBalance">Total Balance</div>
<div id="Rectangle11"></div>
<div id="Rectangle12"></div>
<img id="card2" src="{{ asset('/images/card2.png') }}">
<div id="Rectangle13"></div>
<img id="transfer" src="{{ asset('/images/transfer.png') }}">
<div id="Send">Send</div>
<div id="Transfer">Transfer</div>
<div id="Rectangle19"></div>
<div id="BillPayments">Bill Payments</div>
<div id="Weekly">Weekly</div>
<div id="Line5"></div>
<div id="Monthly">Monthly</div>
<div id="Rectangle20"></div>
<div id="Rectangle21"></div>
<div id="Water">Water</div>
<div id="UGX140000">UGX 140,000</div>
<div id="Rectangle23"></div>
<div id="Rectangle24"></div>
<div id="UMEME">UMEME</div>
<div id="UGX40000">UGX 40,000</div>
<div id="Rectangle25"></div>

<div id="Rectangle26"></div>
<div id="URA">URA</div>
<div id="UGX1400002">UGX 140,000</div>
<div id="Rectangle27"></div>
<div id="Rectangle28"></div>
<div id="Airtime">Airtime</div>
<div id="UGX20000">UGX 20,000</div>
<div id="Rectangle29"></div>
<div id="Rectangle30"></div>
<div id="MobileData">Mobile Data</div>
<div id="UGX1840000">UGX 1,840,000</div>
<div id="Rectangle22"></div>
<div id="ViewAll">View All</div>
<div id="sheet2"></div>
<div id="RecentTransactions">Recent Transactions</div>
<div id="Today">Today</div>

<div id="Weekly2">Weekly</div>
<div id="Monthly2">Monthly</div>
<div id="Rectangle15"></div>
<img id="card1" src="{{ asset('/images/card%20(1).png') }}">

<div id="Rectangle16"></div>
<img id="transfer21" src="{{ asset('/images/transfer%20(2)%201.png') }}">
<div id="Rectangle17"></div>
<img id="card3" src="{{ asset('/images/card%20(1).png') }}">
<div id="ViewAll2">View All</div>
<div id="CindyKanyake">Cindy Kanyake</div>
<div id="October17">October 17</div>
<div id="UGX5000">UGX 5,000</div>
<div id="Complete">Complete</div>
<div id="Sending">Sending</div>
<div id="d053423AM">05:34:23 AM</div>
<div id="Line2"></div>
<!--  -->

<div id="JaneAmasi">Jane Amasi</div>
<div id="October172">October 17</div>
<div id="UGX15000">UGX 15,000</div>
<div id="Complete2">Complete</div>
<div id="Sending2">Transfer</div>
<div id="d053423AM2">05:34:23 AM</div>
<div id="Line3"></div>
<!--  -->

<div id="DavidBruce">David Bruce</div>
<div id="October173">October 17</div>
<div id="UGX8000">UGX 8,000</div>
<div id="Failed">Failed</div>
<div id="Sending3">Sending</div>
<div id="d053423AM3">05:34:23 AM</div>
<div id="Line4"></div>
<!--  -->

<div id="Rectangle18"></div>
<img id="card4" src="{{ asset('/images/card%20(1).png') }}">
<div id="JackieNamusoke">Jackie Namusoke</div>
<div id="October174">October 17</div>
<div id="UGX10000">UGX 10,000</div>
<div id="Pending">Pending</div>
<div id="Sending4">Sending</div>
<div id="d053423AM4">05:34:23 AM</div>
<div id="Line4"></div>
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
        window.location.href = "{{ url('/payments') }}";
    // }
}
</script>
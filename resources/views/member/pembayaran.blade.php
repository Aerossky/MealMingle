@extends('layouts.main')
@section('title', 'Pembayaran')

@section('content')
    <?php

    use App\Http\Controllers\KeranjangController;

    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = 'SB-Mid-server-zpzntRCJ92vSVOJ_YTAd5oax';
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $gross_amount = app('App\Http\Controllers\KeranjangController')->getGrossAmount();

    $params = [
        'transaction_details' => [
            'order_id' => rand(),
            'gross_amount' => $gross_amount,
        ],
        'customer_details' => [
            'first_name' => 'test',
            'last_name' => 'jovan',
            'email' => 'customer@gmail.com',
            'phone' => '08111222333',
        ],
    ];

    $snapToken = \Midtrans\Snap::getSnapToken($params);

    ?>

    <div>
        <button id="pay-button">Pay!</button>
        <div id="snap-container"></div>
    </div>

    <script src="https://app.stg.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-e0qRivbYCaYwzFIp"></script>

    <script>
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.embed('$snapToken', {
                embedId: 'snap-container'
            });
        });
    </script>

@endsection


{{-- <html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  <script type="text/javascript"
		src="https://app.stg.midtrans.com/snap/snap.js"
    data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
  <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>

<body>
  <button id="pay-button">Pay!</button>

  <!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
  <div id="snap-container"></div>

  <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
      // Also, use the embedId that you defined in the div above, here.
      window.snap.embed('YOUR_SNAP_TOKEN', {
        embedId: 'snap-container'
      });
    });
  </script>
</body>

</html> --}}

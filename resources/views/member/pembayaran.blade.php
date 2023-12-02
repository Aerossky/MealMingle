<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Pastikan untuk mengganti 'YOUR_CLIENT_KEY' dengan kunci klien (client key) yang valid dari akun Midtrans Anda -->
    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Ganti dengan src="https://app.midtrans.com/snap/snap.js" untuk lingkungan Produksi -->

    <script type="text/javascript">
        // Fungsi untuk memulai pembayaran saat tombol 'Pay!' ditekan
        function payWithSnap() {
            // Ganti 'YOUR_TRANSACTION_TOKEN' dengan token transaksi yang valid dari backend Anda
            var snapToken = '{{ $snapToken }}';

            snap.pay(snapToken, {
                onSuccess: function(result) {
                    // Tindakan ketika pembayaran berhasil
                    alert("Pembayaran sukses!");
                    console.log(result);
                },
                onPending: function(result) {
                    // Tindakan ketika pembayaran tertunda
                    alert("Pembayaran menunggu!");
                    console.log(result);
                },
                onError: function(result) {
                    // Tindakan ketika pembayaran gagal
                    alert("Pembayaran gagal!");
                    console.log(result);
                },
                onClose: function() {
                    // Tindakan ketika popup ditutup tanpa menyelesaikan pembayaran
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        }
    </script>
</head>

<body>

    <button onclick="payWithSnap()">Pay!</button>

</body>

</html>

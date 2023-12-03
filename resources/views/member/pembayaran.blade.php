<html>


<style>
    body {
        /* Ganti path dengan path yang sesuai ke file SVG di folder public */
        background-image: url('{{ asset('svg/bg-pembayaran.svg') }}');
        /* Atur properti lain sesuai kebutuhan, seperti ukuran, posisi, dan pengulangan background */
        backgrou
    }

    nd-size: cover;
    /* Contoh pengaturan lain */
    /* background-repeat: no-repeat;
           background-position: center center; */
</style>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Pastikan untuk mengganti 'YOUR_CLIENT_KEY' dengan kunci klien (client key) yang valid dari akun Midtrans Anda -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
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
                    // redirect ke halaman
                    window.location.href = "/";
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
        // Panggil payWithSnap() otomatis saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            payWithSnap();
        });
    </script>

</head>

<body>


</body>

</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/css/mainview.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>    <link rel="icon" href="{{ asset("img/Pink_Typography_Swash_Letter_NO_Logo-removebg-preview (1) 3.png") }}">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript" src="{{ asset("js/mainview.js") }}"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/css/sidebar.css') }}">
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Thrift House</title>
</head>
<style>
    .qr {
        margin-top: 0%;
        margin-bottom: 0%;
        margin-left: 40%;
        margin-right: 10%;
        height: 40%;
        
    }
</style>
<body >

    <div style="margin-left:4%; margin-top:2%">
        <a href="/home" class="btn btn-primary" id="btn"><i class="fa fa-arrow-left">Back to home</i></a>
    </div><hr>
    
    {{-- QR code --}}
    <h1 style="text-align:center; margin-top:1%">Scan Me!</h1>
    <img src="{{ asset('svg/qr-code.svg') }}" alt="" class="qr"><br>
    
    @if (!empty($pesanan))
        @foreach ($pesanan as $pesanan)
            <h2 style="text-align:center; margin-top:2%">Kode Barang : {{ $pesanan->kode }}</h2><hr>
        @endforeach
    @endif
    
    <div style="margin-left: 4%; margin-top: 2%;">
        <h5>Jangan lupa untuk di Screenshot</h5>
        <p style="margin-bottom:0%">*pastikan untuk menyalin kode barang anda sebelum menutup halaman web anda.</p>
        <p>Lalu scan code qr WhatsApp tersebut dan tempel kode barang yang anda salin tadi pada halaman kontak WhatsApp yang sudah anda scan.</p>
    </div>
    
    @include('sweetalert::alert')

</body>
</html>
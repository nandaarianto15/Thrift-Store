{{-- @extends('layout.produk') --}}


{{-- @section('container') --}}
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
    body {
        background-color: #dadada
    }
</style>

<body>
    
    <div class="container">
        
        {{-- product man collection cards --}}
        <br><h1><a href="/pria" class="ttl">PRIA</a></h1><hr>
    
        <div class="row">
            <div class="col-md-12">
                <a href="/pria" class="btn btn-primary" id="btn"><i class="fa fa-arrow-left"> Return</i></a>
            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4>{{ $barang->nama_barang}}</h4>
                    </div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('img/koleksipria') }}/{{ $barang->gambar }}" alt="" class="rounded mx-auto d-block" style="width: 70%">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h2>{{ $barang->nama_barang }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td> : </td>
                                            <td>Rp.{{ number_format($barang->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td> : </td>
                                            <td>{{ $barang->keterangan }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <form action="{{ url('pesan') }}/{{ $barang->id }}" method="POST">
                                                @csrf
                                                    <button type="submit" id="btn" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                                </form>
                                            </td>     
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
    <br>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>


    
    
    <script>
        const toTop = document.querySelector(".to-top");
        
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            } else {
                toTop.classList.remove("active");
            }
        })
    </script>

{{-- @endsection --}}

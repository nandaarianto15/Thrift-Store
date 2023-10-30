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
        background-color: #949494;
        margin-top: 5%;
    }
</style>

<body>
    
    <div class="container">
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded mb-5">
                        <div class="card-body">
                            <a href="{{ url('profile') }}" class="btn btn-primary" id="btn"><i class="fa fa-arrow-left"> </i> Back</a>
                            
                            <p align="right" class="mx-4 mb-0">Tanggal : 
                                <?php
                                        echo $tanggal->toDateString(); 
                                        ?>
                            </p><br>

                            <div class="mb-2 mx-2" align="right">
                                <form action="{{ url('shop') }}" method="GET">
                                    <input type="search" name="cari" placeholder="Cari kode pesanan .." value="{{ old('cari') }}">
                                    <input type="submit" value="search">
                                </form>
                            </div>
                            
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Kode Pesanan</th>
                                    <th scope="col">Jumlah Harga</th>
                                    <th scope="col">Detail Barang</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1; 
                                    ?>
                                  @foreach ($pesanans as $pesanan)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $pesanan->updated_at }}</td>
                                        <td>{{ $pesanan->status }}</td>
                                        <td>{{ $pesanan->kode }}</td>
                                        <td>Rp.{{ number_format($pesanan->jumlah_harga) }}</td>
                                        <td><a href="{{ url('detail_barang') }}/{{ $pesanan->id }}" class="btn btn-success">Detail</a></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>  
                              {{ $pesanans->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        {{-- @include('sweetalert::alert') --}}
        
    
        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>

    </div>
</body>    

    
    
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


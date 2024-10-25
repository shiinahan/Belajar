@extends('main')

@section('title')
    Home 
@endsection

@section('content')
    <style> 
        .card-carousel .carousel-item {
            display: flex;
            justify-content: start;
            /* Align items to the left */
        }
        .card-carousel .carousel-item .card {
            margin-right: 1rem;
            /* Space between cards */
        }
        .carousel-inner img {
            width: 100%;
            height: 400px; /* Adjust the height as needed */
            object-fit: cover;
            margin-top: 20px;
        }
        .bgMe{
            border-radius: 20px;
        }
        .product-card {
            margin-bottom: 15px;
            width: 210px;
            height: auto;
        }
        .product-card img{
            width: 100px;
            height: auto;
        }
        .carousel-item {
            display: flex;
            justify-content: center; /* Center the cards horizontally */
        }
        .container{
            padding: 10px;
        }
    </style>
    
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <div class="container-fluid">
                    <img src="{{url ('assets/images/lendingpej.jpg')}}" class="img-fluid" width="3000px" alt="Responsive image">
                </div> 
            </div>
        </div>    
    </div>

    <div class="container-fluid mt-4">
        <div class="row my-3">
            {{-- @foreach ($data as $item)
                <div class="col-6 col-md-3 col-lg-2 m-2">
                    <div class="card product-card">
                        <div class="container text-center">
                            <img src="{{ url('assets/produkImages', $item->photo) }}" class="card-img-top img-fluid" alt="Product Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px">{{ $item->nama_barang }}</h5>
                            <p class="card-text" style="font-size: 12px;">Harga: Rp{{ number_format($item->harga) }}</p>
                            <div class="text-secondary" style="font-size: 12px">
                                <strong>Seller: </strong>{{ $item->getSeller->name }}
                            </div>
                            <a href="#" class="btn btn-sm btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach --}}
            <!-- Add more product cards here -->
        </div>
        <div class="row mb-3">
            <div class="col text-center">
                <a href="http://wa.me/6285384815194" class="btn btn-success btn-sm" target="_blank">
                    WhatsApp
                </a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col text-center">
                <a href="{{url('/menu')}}" class="btn btn-outline-secondary btn-sm">
                    Lihat Semua Produk
                </a>
            </div>
        </div>
    </div>
@endsection
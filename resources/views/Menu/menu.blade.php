@extends('main')
@section('title')
    Etalase
@endsection

@section('content')
    <style>
        .card {
            background-color: #b60404;
            color: #f6ebc5;
        }

        .container {
            padding: 10px;
        }

        .pagination {
            margin: 20px 0;
        }

        .page-item .page-link {
            background-color: #b60404;
            color: #f6ebc5;
        }

        .page-item.active .page-link {
            background-color: #f6ebc5;
            color: #b60404;
        }

        .page-item.disabled .page-link {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-search {
            background-color: #b60404;
            color: #f6ebc5;
        }

        .form-select {
            background-color: #b60404;
            color: #f6ebc5;
            border: 1px solid #f6ebc5;
        }

        .form-select option {
            background-color: #b60404;
            color: #f6ebc5;
        }

        .form-select:hover {
            background-color: #9b0303;
            color: #f6ebc5;
        }

        .form-select:focus {
            border-color: #f6ebc5;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        @media (max-width: 576px) {
            .btn-checkout span {
                display: none;
            }

            .btn-checkout i {
                font-size: 1.5rem;
            }
        }
    </style>

    <div class="container-fluid pt-3 mb-3">
        <div class="row mb-5">
            <div class="col-6 offset-3">
                <div class="mt-3 mb-3 d-flex justify-content-between align-items-center">
                    <form action="{{ url('/menu') }}" method="get" class="me-2">
                        <div class="input-group">
                            <select name="sort" class="form-select" onchange="updateSort(this)">
                                <option value="">Urutkan Berdasarkan</option>
                                <option value="nama" data-order="asc">Abjad A-Z</option>
                                <option value="nama" data-order="desc">Abjad Z-A</option>
                                <option value="harga" data-order="asc">Harga Termurah</option>
                                <option value="harga" data-order="desc">Harga Termahal</option>
                                <option value="kategori" data-order="desc">Kategori</option>
                            </select>
                        </div>
                    </form>

                    <form action="{{ url('/menu') }}" method="get" class="ms-3">
                        <!-- Tambahkan ms-3 untuk memberikan margin ke kiri -->
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search Product ...">
                            <button class="btn btn-search" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="row align-items-center">
            <div class="row align-items-center">
                @foreach ($data as $item)
                    <div class="col-md-2 col-lg-2 mb-4">
                        <div class="card">
                            <div class="container text-center">
                                <img src="{{ url('assets/produkImages', $item->photo) }}" class="card-img-top img-fluid"
                                    alt="Product Image">
                            </div>
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="card-title">{{ $item->nama_menu }}</h5>
                                <p class="card-text">Kategori: {{ $item->getKategori->nama_kategori}}
                                </p>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <p class="card-text">Rp{{ number_format($item->harga) }}</p>
                                    <a href="{{ url('/checkout') }}/{{ $item->id }}"
                                        class="btn btn-success btn-sm mt-2">
                                        <i class="bi bi-cart"></i> Checkout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $data->lastPage(); $i++)
                        <li class="page-item {{ $i == $data->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script>
        function updateSort(select) {
            const sortValue = select.value;
            const orderValue = select.options[select.selectedIndex].getAttribute('data-order');
            const searchQuery = document.querySelector('input[name="search"]').value;

            const url = new URL('{{ url('/menu') }}', window.location.origin);
            if (sortValue) {
                url.searchParams.set('sort', sortValue);
                url.searchParams.set('order', orderValue);
            }
            if (searchQuery) {
                url.searchParams.set('search', searchQuery);
            }
            window.location.href = url.toString();
        }
    </script>
@endsection

<table class="table table-hover">
    <thead>
        <tr>
            <th width="20" style="background-color: #FFF0D1">
                <h6 class="mt-1" style="color: #b60404"><b>No.</b></h6>
            </th>
            <th class="text-center" style="background-color: #FFF0D1">
                <h6 class="mt-1" style="color: #b60404"><b>Tanggal Pemesanan</b></h6>
            </th>
            <th class="text-center" style="background-color: #FFF0D1">
                <h6 class="mt-1" style="color: #b60404"><b>Uang Masuk</b></h6>
            </th>
            <th class="text-center" style="background-color: #FFF0D1">
                <h6 class="mt-1" style="color: #b60404"><b>Jenis Pembayaran</b></h6>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($getUang as $item)
            <tr>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                    <b>{{ ($getUang->currentPage() - 1) * $getUang->perPage() + $loop->iteration }}</b>
                </td>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                    {{ $item->tgl }}
                </td>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                    {{ 'Rp' . number_format($item->harga, 0, ',', '.') }}
                </td>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                    {{ $item->pembayaran }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

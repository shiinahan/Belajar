<style>
    .alamat {
        word-wrap: break-word; /* Membungkus kata panjang */
        white-space: normal; /* Memastikan teks dapat membungkus */
        max-width: 150px; /* Atur lebar maksimum sesuai kebutuhan */
    }
</style>

<table class="table table-hover">
    <thead>
        <tr>
            <th width="20" style="background-color: #FFF0D1"><h6 class="mt-1" style="color: #b60404"><b>No.</b></h6></th>
            <th class="text-center" style="background-color: #FFF0D1"><h6 class="mt-1" style="color: #b60404"><b>Tanggal Pemesanan</b></h6></th>
            <th class="text-center" style="background-color: #FFF0D1"><h6 class="mt-1" style="color: #b60404"><b>Nama Pelanggan</b></h6></th>
            <th class="text-center" style="background-color: #FFF0D1"><h6 class="mt-1" style="color: #b60404"><b>Nomor</b></h6></th>
            <th class="text-center" style="background-color: #FFF0D1"><h6 class="mt-1" style="color: #b60404"><b>Alamat</b></h6></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">
                    <b>{{ (($data->currentPage() - 1) * $data->perPage()) + $loop->iteration }}</b>
                </td>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">{{$item->tgl}}</td>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">{{$item->namapelanggan}}</td>
                <td class="text-center" style="background-color: #FFF0D1; color: #493628">{{$item->notelp}}</td>
                <td class="text-center alamat" style="background-color: #FFF0D1; color: #493628">{{$item->alamat}}</td> <!-- Tambahkan kelas 'alamat' -->
            </tr>
        @endforeach
    </tbody>
</table>

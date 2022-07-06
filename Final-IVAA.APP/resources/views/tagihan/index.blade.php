@extends('layouts.app')

@section('content')
@section('menuTagihan', 'active')
<div class="container-fluid p-0">
    <div class="col-12 mb-1  col-md-6">
        <a href="{{ url('/tagihan/tambahtagihan') }}"><button style="width: 100%" type="button"
                class="btn btn-success">Tambah Tagihan</button></a>
    </div>
</div>
<table class="table table-hover my-0">
    <thead>
        <tr class="table-info">
            <th scope="col">No</th>
            <th scope="col">Rekening Tagihan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $total = 0;
            $no = 0;
            ?>
            @foreach ($data as $tagihan)
                <?php
                $total += $tagihan->jumlah;
                $no += 1;
                ?>
                <th>{{ $no }}</th>
                <td>{{ $tagihan->rek_tagihan }}</td>
                <td>{{ $tagihan->tanggal }}</td>
                <td>{{ currency_IDR($tagihan->jumlah) }}</td>
                <td><a href="{{ url('/tagihan') }}/{{ $tagihan->id_tagihan }}/edit"><button type="button"
                            class="btn btn-warning btn-sm mb-2 mb-sm-0">Edit</button></a>
                    <button type="button" class="btn btn-danger btn-sm delete" data-id="{{ $tagihan->id_tagihan }}"
                        data-ket="{{ $tagihan->rek_tagihan }}">Hapus</button>
                </td>
        </tr>
        @endforeach
        <tr class="text-center">
            <td colspan="6"><strong>Total Tagihan = {{ currency_IDR($total) }}</strong></td>
        </tr>

    </tbody>
</table>
</div>
<script>
    $('.delete').click(function() {
        var kolamid = $(this).attr('data-id');
        var ket = $(this).attr('data-ket');
        swal({
                title: "Yakin Menghapus Data?",
                text: "Anda akan menghapus data tagihan " + ket + " !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "tagihan/" + kolamid + "/hapus"
                    swal("Data Kolam Berhasil Di hapus!", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi di hapus!");
                }
            });
    });
</script>
@endsection

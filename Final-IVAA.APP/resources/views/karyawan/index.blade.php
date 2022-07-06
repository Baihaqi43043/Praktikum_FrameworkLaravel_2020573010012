@extends('layouts.app')

@section('content')
@section('menuKaryawan','active')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Karyawan</strong> Dashboard</h1>
  {{-- filter:start --}}
  <form action="{{url('/karyawan')}}" class="row" method="POST">
    @csrf
    <div class="form-grup row mt-2">
      <div class="col-10 col-md-10 col-lg-3">
        <select name="id_karyawan" class="form-select">
          <option selected>Pilih Karyawan</option>
           @foreach ($dataKaryawan as $item)
              <option value="{{ $item->id_karyawan }}">
                 {{ $item->nama }}</option>
           @endforeach
        </select>
     </div>
     <div class="col-2 col-md-1 ">
      <button type="submit" class="btn btn-primary mb-3">Filter</button>
   </div>
   <div class="col-12 col-md-4 col-lg-3 ms-3 ms-md-0"> <a style="width: 100%" href="{{url('karyawan/create')}}" class="btn btn-success">Tambah Data Karyawan</a></div>
   <div class="col-12 col-md-4 col-lg-3 ms-3 ms-md-0 mt-2 mt-md-0"> 
    <a style="width: 100%" href="{{url('karyawan/peminjaman')}}" class="btn btn-warning ">Tambah Data Peminjaman</a>
  </div>
  <div class="col-12 col-md-2 ms-3 ms-md-0 mt-2 mt-md-0 mb-3 mb-lg-0"> 
    <button style="width: 100%" type="button" class="btn btn-primary">Print Data</button>
  </div>
    </div>
 </form>
 {{-- filter:end --}}
 
<table class="table table-hover my-0">
  <thead>
    <tr class="table-info">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  
  <tbody>
  <?php
    $total = 0;
    $no = 0;
    ?>
    @foreach ($data as $item)
    <?php
    $total += $item->jumlah;
    $no += 1;
    ?>
    <tr>
      <td>{{ $no }}</td>
      <td>{{ $item->nama }}</td>
      <td>{{ $item->alamat }}</td>
      <td>{{ currency_IDR($item->jumlah) }}</td>
      <td><a href="{{url('/karyawan')}}/{{$item->karyawan_id}}/edit"><button type="button" class="btn btn-warning btn-sm mb-1 mb-md-0 ">Edit</button></a>
        <a href="#"><button type="button"  class="btn btn-danger btn-sm mb-1 mb-md-0 delete"  data-id="{{$item->id_peminjaman}}" data-nama="{{ $item->nama }}">Hapus</button></a>
    </td>
    </tr>
    @endforeach
    <tr class="text-center">
      <td colspan="6"><strong>Total = {{currency_IDR($total)}}</strong></td>
    </tr>
  </tbody>
  </table>
</div>

<script>

  $('.delete').click( function(){
    var pinjamid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
            swal({
          title: "Yakin Menghapus Data?",
          text: "Anda akan menghapus data pinjaman dengan nama "+nama+" !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = "/karyawan/"+pinjamid+"/hapus"
            swal("Data Berhasil Di hapus!", {
              icon: "success",
            });
          } else {
            swal("Data tidak jadi di hapus!");
          }
        });
  });
</script>
@endsection

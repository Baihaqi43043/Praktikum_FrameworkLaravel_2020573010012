@include('layout.header')
<h1 class="text-center p-3">Informasi</h1>
<ol >
    <li>Jurusan : {{$data[0]}}</li>
    <li>Prodi : {{$data[1]}}</li>
</ol>
@include('layout.footer')
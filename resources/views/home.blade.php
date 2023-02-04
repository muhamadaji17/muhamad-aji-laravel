@extends('layouts.main')


@section('container')

<h3>Data Karyawan</h3>
<a href="/tambahData" class="mt-4 mb-4 btn btn-primary">Tambah Data</a>
@if($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@endif
<table class="table text-center">
    <thead>
        <tr>
            <th scope=" col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">ALamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($karyawan as $k)
        <tr>
            <th><?= $no++; ?></th>
            <td>{{ $k['foto']; }}</td>
            <td>{{ $k['nama']; }}</td>
            <td>{{ $k['email']; }}</td>
            <td>{{ $k['alamat']; }}</td>
            <td> <a href="/detail/{{ $k['id']; }}" class="btn btn-success">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
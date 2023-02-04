@extends('layouts.main')

@section('container')

<div class="container" style="margin-left: 15px;">
    <div class="row">
        <div class="col">
            <h2>Data Karyawan</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <p>
                            <div class="row lign-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Nama : {{ $karyawan['nama']; }}</label>
                                </div>
                                <div>
                                    <label for="inputPassword6" class="col-form-label">Email : {{ $karyawan['email']; }}</label>
                                </div>
                                <div>
                                    <label for="inputPassword6" class="col-form-label">Alamat : {{ $karyawan['alamat']; }}</label>
                                </div>
                                <div>
                                    <label for="inputPassword6" class="col-form-label">Agama : {{ $karyawan['agama']; }}</label>
                                </div>
                                <div>
                                    <label for="inputPassword6" class="col-form-label">JenisKelamin : {{ $karyawan['jenisKelamin']; }}</label>
                                </div>
                                <div>
                                    <label for="inputPassword6" class="col-form-label">Dibuat Pada : {{ $karyawan['created_at']->format('d M Y H:i:s'); }}</label>
                                </div>
                            </div>
                            <a href="/editKaryawan/{{$karyawan['id'];}}" class="btn btn-warning">Edit</a>
                            <a href="/deleteData/{{$karyawan['id'];}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
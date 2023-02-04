@extends('layouts.main')

@section('container')

<h3>Tambah Data Karyawan</h3>
<div class="container">
    <div class="row col-md-10 ">
        <div class="card">
            <div class="card-body">
                <form action="/saveData/" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama ">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-Mail</label>
                        <input type="email" class="form-control" id="email" name='email' placeholder="Masukan Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenisKelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukan Agama">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Tambah</button>
                        <button class="btn btn-danger" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
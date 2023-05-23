@extends('layout.dashboard')
@section('container')

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif


    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="ms-md-auto d-flex">
                        <h4>Input Informasi MBKM</h4>
                        <a href="/dashboard/pendaftaran-mbkm/personal" class="btn btn-primary d-flex ms-md-auto ms-3">Formulir MBKM Saya</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/dashboard/pendaftaran-mbkm/create" method="post">
                        @csrf
                        <div class="row">   
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Nama</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Masukan Nama" autofocus required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nim" class="form-control-label">NIM</label>
                                    <input class="form-control @error('nim') is-invalid @enderror" id="nim" type="text" name="nim" placeholder="Masukan NIM" required>
                                    @error('nim')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fakultas" class="form-label">Fakultas</label>
                                <select class="form-select @error('fakultas') is-invalid @enderror" id="fakultas" name="fakultas" required>
                                    <option value="" disabled selected>Pilih Fakultas</option>
                                    <option value="Teknik">Fakultas Teknik</option>
                                    <option value="Teknik">Fakultas Ilmu Budaya</option>
                                </select>
                                @error('fakultas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select @error('fakultas') is-invalid @enderror" id="jurusan" name="jurusan" required>
                                    <option value="" disabled selected>Pilih Jurusan</option>
                                    <option value="1">Teknik Elektro</jurusann>
                                    <option value="2">Teknik Komputer</jurusann>
                                    <option value="3">Teknik Bimodik</jurusann>
                                </select>
                                @error('jurusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <select class="form-select @error('semester') is-invalid @enderror" id="semester" name="semester" required>
                                    <option value="" disabled selected>Pilih Semester</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                @error('semester')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="program" class="form-label">Program</label>
                                <select class="form-select @error('program') is-invalid @enderror" id="program" name="program" required>
                                    <option value="" disabled selected>Pilih Program</option>
                                    <option value="1">Kampus Merdeka</option>
                                    <option value="2">Bangkit</option>
                                </select>
                                @error('program')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_mulai" class="form-control-label">Input Tanggal Mulai</label>
                                    <input class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" type="datetime-local" name="tanggal_mulai" required>
                                    @error('tanggal_mulai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_selesai" class="form-control-label">Input Tanggal Selesai</label>
                                    <input class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" type="datetime-local" name="tanggal_selesai" required>
                                    @error('tanggal_selesai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_program_perusahaan" class="form-control-label">Tempat Program(Perusahaan)</label>
                                    <input class="form-control @error('tempat_program_perusahaan') is-invalid @enderror" id="tempat_program_perusahaan" type="text" name="tempat_program_perusahaan" placeholder="Tempat Program (Perusahaan)" required>
                                    @error('tempat_program_perusahaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lokasi_program" class="form-control-label">Lokasi Program</label>
                                    <input class="form-control @error('lokasi_program') is-invalid @enderror" id="lokasi_program" type="text" name="lokasi_program" placeholder="Masukan Lokasi Program" required>
                                    @error('lokasi_program')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="program_keberapa" class="form-control-label">Pengambilan Program Ke-Berapa</label>
                                    <input class="form-control @error('program_keberapa') is-invalid @enderror" id="program_keberapa" type="text" name="program_keberapa" placeholder="Program Ke-" required>
                                    @error('program_keberapa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <button type="submit" class="btn btn-primary ms-md-auto me-3 d-flex">Buat Formulir Mbkm</button>      
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
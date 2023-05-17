@extends('layout.dashboard')
@section('container')
<form >
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h4>Input Informasi MBKM</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama</label>
                            <input class="form-control" type="text" >
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">NIM</label>
                            <input class="form-control" type="email">
                        </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="fakultas" class="form-label">Fakultas</label>
                            <select class="form-select" name="fakultas">
                                <option value="" disabled selected>Pilih Fakultas</option>
                                <option value="Teknik">Fakultas Teknik</option>
                                <option value="Teknik">Fakultas Ilmu Budaya</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" name="jurusan">
                                <option value="" disabled selected>Pilih Jurusan</option>
                                <option value="">Teknik Elektro</jurusann>
                                <option value="">Teknik Komputer</jurusann>
                                <option value="">Teknik Bimodik</jurusann>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" name="semester">
                                <option value="" disabled selected>Pilih Semester</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="program" class="form-label">Program</label>
                            <select class="form-select" name="program">
                                <option value="" disabled selected>Pilih Program</option>
                                <option value="">Kampus Merdeka</option>
                                <option value="">Bangkit</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Input Tanggal Mulai</label>
                            <input class="form-control" type="datetime-local" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Input Tanggal Selesai</label>
                            <input class="form-control" type="datetime-local" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Tempat Program(Perusahaan)</label>
                            <input class="form-control" type="text" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Lokasi Program</label>
                            <input class="form-control" type="text" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Pengambilan Program Ke-Berapa</label>
                            <input class="form-control" type="text" >
                            </div>
                        </div>
                        
                    </div>
                    <hr class="horizontal dark">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@extends('layout.dashboard')
@section('container')
<form >
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
                        <div class="col-md-6">
                            <label for="dropdown">Fakultas</label>
                            <div class="dropdown">
                                <a href="#" class="btn dropdown-toggle w-100 " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                    {{-- <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png" /> Pilih Fakultas --}}
                                    <i class="ni ni-ruler-pencil"></i> Pilih Fakultas
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png" /> Deutsch
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/GB.png" /> English(UK)
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/FR.png" /> Français
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="dropdown">Jurusan</label>
                            <div class="dropdown">
                                <a href="#" class="btn dropdown-toggle w-100 " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                    <i class="ni ni-ruler-pencil"></i> Pilih Jurusan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png" /> Deutsch
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/GB.png" /> English(UK)
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                        <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/FR.png" /> Français
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dropdown">Semester</label>
                                <div class="dropdown">
                                    <a href="#" class="btn dropdown-toggle w-100 " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                        {{-- <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png" /> Pilih Fakultas --}}
                                        <i class="ni ni-ruler-pencil"></i> Pilih Semester
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png" /> Deutsch
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/GB.png" /> English(UK)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/FR.png" /> Français
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dropdown">Program</label>
                                <div class="dropdown">
                                    <a href="#" class="btn dropdown-toggle w-100 " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                        {{-- <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png" /> Pilih Fakultas --}}
                                        <i class="ni ni-ruler-pencil"></i> Pilih Program
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png" /> Deutsch
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/GB.png" /> English(UK)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            <img src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/FR.png" /> Français
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
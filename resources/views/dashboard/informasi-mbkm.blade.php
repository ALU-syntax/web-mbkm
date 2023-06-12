@extends('layout.dashboard')
@section('container')

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="ms-md-auto d-flex">
                        <h4>Input Informasi MBKM</h4>
                        <a href="/dashboard/informasi-mbkm/personal" class="btn btn-primary d-flex ms-md-auto ms-3">Formulir MBKM Saya</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/dashboard/informasi-mbkm/create" method="post">
                        @csrf
                        <div class="row">   
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Nama</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" placeholder="Masukan Nama" autofocus required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nim" class="form-control-label">NIM</label>
                                    <input class="form-control @error('nim') is-invalid @enderror" id="nim" type="text" value="{{ old('nim', auth()->user()->nim) }}" name="nim" placeholder="Masukan NIM" required>
                                    @error('nim')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fakultas" class="form-label">Jurusan</label>
                                <select class="form-select @error('fakultas') is-invalid @enderror" id="fakultas" name="fakultas" required>
                                    <option value="" disabled selected>Pilih Jurusan</option>
                                    @foreach($fakultas as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('fakultas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jurusan" class="form-label">Prodi</label>
                                <select class="form-select @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" required>
                                    <option value="" disabled selected>Pilih Prodi</option>
                                </select>
                                <small>*note:<i> pilih jurusan terlebih dahulu</i></small>
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
                                    @foreach($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->name }}</option>
                                    @endforeach
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
                                    <input class="form-control @error('tempat_program_perusahaan') is-invalid @enderror" id="tempat_program_perusahaan" type="text" name="tempat_program_perusahaan" placeholder="Tempat Program (Perusahaan). ex: Google, Bukalapak" required>
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
                                    <select class="form-select @error('program_keberapa') is-invalid @enderror" id="program_keberapa" name="program_keberapa" required>
                                        <option value="" disabled selected>Program Ke-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    @error('program_keberapa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dosen_pembimbing" class="form-label">Dosen Pembimbing</label>
                                <select id="dosen_pembimbing" class="form-select @error('dosen_pembimbing') is-invalid @enderror" name="dosen_pembimbing">
                                    <option value="" disabled selected>Pilih Dosen Pembimbing</option>
                                    @foreach($dosbing as $dosen)
                                        <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
                                    @endforeach
                                </select>
                                <small>*note: <i>bisa dipilih nanti</i></small>
                                <div id="reset">
                                    <span id="reset-btn" class="badge badge-pill badge-md bg-gradient-warning">Reset</span>
                                    {{-- <button type="reset" id="reset-btn" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Reset</button> --}}
                                    {{-- <button  id="reset-btn" class="badge badge-pill badge-md bg-gradient-warning m-btn--air m-btn--custom">Reset</button> --}}
                                </div>
                                @error('dosen_pembimbing')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <button type="submit" class="btn btn-primary ms-md-auto me-3 d-flex">Buat Formulir Mbkm</button>      
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- <button type="reset" id="reset-btn" class="btn btn-secondary m-btn m-btn--air m-btn--custom"> --}}

        
    <script>
        $( "#reset-btn" ).click(function() {
            // $('#m_select2_3').val('').change();
            $('#dosen_pembimbing').val('').change();
        });

    </script>

    <script>
         $(document).ready(function () {
            
            $('#fakultas').on('change', function () {
                var idFakultas = this.value;
                $("#jurusan").html('');
                $.ajax({
                    url: "{{url('/api/fetch-jurusan')}}",
                    type: "POST",
                    data: {
                        fakultas_id: idFakultas,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#jurusan').html('<option value="" disabled selected>Pilih Jurusan</option>');
                        $.each(result.jurusan, function (key, value) {
                            $("#jurusan").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        // $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });
        });
    </script>
@endsection
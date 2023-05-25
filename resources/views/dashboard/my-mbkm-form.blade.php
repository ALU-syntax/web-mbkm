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
            <div class="card-header">
                <h3>Formulir Pendaftaran MBKM Saya</h3>
            </div>

            <div class="card-body">

                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIM</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fakultas</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jurusan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Semester</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Mulai</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Selesai</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat Program Perusahaan</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi Program</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program Ke-</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Dibuat</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($mbkms as $mbkm)
                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->name }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->nim }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->dataFakultas->name }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->dataJurusan->name }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->semester }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->dataProgram->name }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->tanggal_mulai }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->tanggal_selesai }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->tempat_program_perusahaan }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->lokasi_program }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->program_keberapa }}</p>
                                </td>
                                <td class="align-middle text-center text-sm" >
                                    @if($mbkm->status == 'Dalam Pengecekan')
                                        <span class="badge badge-sm bg-gradient-secondary">{{ $mbkm->status }}</span>
                                    @endif    
                                    @if($mbkm->status == 'Diterima')
                                        <span class="badge badge-sm bg-gradient-success">{{ $mbkm->status }}</span>
                                    @endif
                                    @if($mbkm->status == 'Ditolak')
                                        <span class="badge badge-sm bg-gradient-danger">{{ $mbkm->status }}</span>
                                    @endif
                                </td>
                                
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{ $mbkm->created_at }}</p>
                                </td>
                            </tr>                        
                        @endforeach
                        
                      </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
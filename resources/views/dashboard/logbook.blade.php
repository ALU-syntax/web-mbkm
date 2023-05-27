@extends('layout.dashboard')
@section('container')
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <h5>Logbook {{ auth()->user()->name }}</h5>
                    <div class="ms-md-auto d-flex">
                      <div class="input-group ms-md-auto d-flex">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control me-3" placeholder="Search here..." onfocus="focused(this)" onfocusout="defocused(this)">
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

              {{-- @if($posts->count()) --}}
              {{-- @foreach($posts as $post) --}}
              <div class="row mt-3">
                <div class="d-flex align-items-center">
                  <h4>Nama Perusahaan</h4>
                  <small class="ms-2 m-0">Program</small>
                  <div class="ms-md-auto">
                    <p>tanggal mulai - tanggal selesai</p>
                  </div>
                </div>
                <small class="mt-0">Program Ke : </small>
                <small class="mt-0">Dosen Pembimbing</small>
              </div>
              <div class="row mt-3">
                <p>Alamat</p>
                <div class="d-flex">
                   {{-- <div class="btn btn-info me-2">Share</div>   --}}
                   <div class="btn btn-info">Detail</div>
                </div>
              </div>
              <hr class="horizontal dark mt-0">
              {{-- @endforeach   --}}

              {{-- @else
                <h3>Belum Ada Logbook</h3>
                <hr class="horizontal dark mt-0">
              @endif --}}
          </div>
        </div>
      </div>    
@endsection
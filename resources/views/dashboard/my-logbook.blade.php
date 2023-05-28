@extends('layout.dashboard')
@section('container')
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <h5>Logbook {{ auth()->user()->name }}</h5>
                    <div class="ms-md-auto d-flex">
                      <a href="/dashboard/logbook/create/{{ $idLogbook }}" class="btn btn-outline-primary align-items-center d-flex m-0 me-5 w-50"><i class="fas fa-plus me-2" aria-hidden="true"></i>Isi Logbook</a>
                      <div class="input-group ms-md-auto d-flex">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control me-3" placeholder="Search here..." onfocus="focused(this)" onfocusout="defocused(this)">
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                  @if($log_logbooks->count())
                  @foreach($log_logbooks as $logbook)
                    <div class="col-md-4 mb-3">
                      <div class="card h-100" >
                          <div class="card-body">
                            <p class="card-text"><b>{{ $logbook->tanggal_dibuat }}</b></p>
                            <p class="card-text">{!! $logbook->excerpt !!}</p>
                            <p>
                              <small class="text-body-secondary">lokasi: {{ $logbook->lokasi }}</small>
                            </p>
                            
                          </div>
                          <div class="d-flex justify-content-between align-items-center p-3">
                            <div class="btn-group">
                                {{-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> --}}
                                <a href="/dashboard/logbook/{{ $logbook->id }}/detail" class="btn btn-sm btn-primary">Read more</a>
                            </div>
                            </div>
                      </div>
                    </div>
                  @endforeach
                  @else
                    <h3>Logbook kosong</h3>
                    <hr class="horizontal dark mt-0">
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>    



@endsection
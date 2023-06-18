@extends('layout.dashboard')
@section('container')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
              <div class="ms-md-auto d-flex">
                <h4>Logbook {{ $owner }}</h4>
              </div>
            </div>

            <div class="card-body">
                @if($log_logbook->count())
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0" >
                      <thead>
                        <tr >
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Week.</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Tanggal</th>
                          <th class="text-secondary opacity-7 col-2"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($log_logbook as $data)
                            <tr >
                                <td class="align-middle text-center text-sm ">
                                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                </td>
                                <td class="text-sm text-center ">
                                    <p class="text-xs font-weight-bold mb-0">{{ $data->tanggal_dibuat }}</p>
                                </td>
                                <td class="align-middle text-center text-sm ">
                                  <td>
                                    <a href="/logbook/dosbing/detail/logbook-mahasiswa/{{ $data->id }}" ><span class="badge badge-primary"></span><i class="fa fa-regular fa-eye" style="color: #3eeefe;"></i></a>
                                  </td>
                                </td>
                          @endforeach
                      </tbody>
                    </table>
                </div>
                @else
                <h3>Belum Ada Logbook</h3>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
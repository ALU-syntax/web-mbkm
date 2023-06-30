@extends('layout.dashboard')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
              <div class="ms-md-auto d-flex">
                <h4>Data Mahasiswa</h4>
              </div>
              <div class="input-group ms-md-auto d-flex">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control me-3" placeholder="Search here..." onfocus="focused(this)" onfocusout="defocused(this)">
              </div>
            </div>

            <div class="card-body">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
                @if($mahasiswa->count())
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0" >
                      <thead>
                        <tr class="row">
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-2">No.</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-8">Nama</th>
                          <th class="text-secondary opacity-7 col-2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <h3 class="mt-5">List Mahasiswa</h3>
                        @foreach($mahasiswa as $data)
                            <tr class="row">
                                <td class="align-middle text-center text-sm col-2">
                                    <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                </td>
                                <td class="text-sm text-center col-8">
                                    <p class="text-xs font-weight-bold mb-0">{{ $data->name }}</p>
                                </td>
                                <td class="text-sm text-center col-2">
                                    <a href="/dashboard/pa/{{ $data->id }}" ><span class="badge badge-primary"></span><i class="fa fa-regular fa-eye" style="color: #3eeefe;"></i></a>
                                </td>
                                {{-- <td class="align-middle text-center text-sm">
                                  <td>
                                    <a href="/dashboard/fakultas/" ><span class="badge badge-primary"></span><i class="fa fa-regular fa-pen" style="color: #fecb3e;"></i></a>
                                    <form action="/dashboard/fakultas//delete" method="post" class="d-inline">
                                      @csrf
                                      <button class="border-0 bg-transparent" onclick="return confirm('Data Jurusan dari Fakultas yang bersangkutan akan ikut terhapus secara permanen, Apakah kamu yakin?')">
                                        <span class="badge badge-danger"></span>
                                        <i class="fa fa-solid fa-trash" style="color: #bf0040;"></i>
                                      </button>
                                    </form>
                                  </td>
                                </td> --}}
                          @endforeach
                      </tbody>
                    </table>
                </div>
                @else
                <h3>Belum Ada Mahasiswa</h3>
                <hr class="horizontal dark mt-0">
                @endif
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endsection
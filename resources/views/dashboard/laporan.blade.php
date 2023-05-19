@extends('layout.dashboard')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Hasil Laporan</h3>
            </div>

            <div class="card-body">
                <div class="d-flex align-items-center">
                    <form action="">
                        @csrf
                        <div class="ms-md-auto d-flex">
                            <label for="dokumen" class="form-label">Post Dokumen</label>
                            <input class="form-control" type="file" id="dokumen" name="dokumen">  
                        </div>
                    </form>
                    
                </div>

                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">File</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Comment</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="img/document.png" width="75" height="75" alt="">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Uji Kelayakan Aspal Sampah Plastik.pdf</h6>
                                <p class="text-xs text-secondary mb-0">By Ghifari Tufail</p>
                              </div>
                            </div>
                          </td>

                          <td>
                            <p class="text-xs font-weight-bold mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            
                          </td>

                          <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">Accepted</span>
                          </td>

                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                          </td>

                          <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                              Edit
                            </a>
                          </td>
                        </tr>

                        <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="img/document.png" width="75" height="75" alt="">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Uji Kelayakan Aspal Sampah Plastik.pdf</h6>
                                  <p class="text-xs text-secondary mb-0">By Ghifari Tufail</p>
                                </div>
                              </div>
                            </td>
  
                            <td>
                              <p class="text-xs font-weight-bold mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                              
                            </td>
  
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-danger">Perlu Perbaikan</span>
                            </td>
  
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
  
                            <td class="align-middle">
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                              </a>
                            </td>
                          </tr>

                      </tbody>
                    </table>
                </div>

                <div class="d-flex align-items-center m-2">
                    <div class="ms-md-auto d-flex">
                        <Button class="btn btn-outline-primary align-items-center d-flex m-2">Upload Form TTD</Button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
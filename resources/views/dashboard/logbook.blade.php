@extends('layout.dashboard')
@section('container')
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <h5>Logbook Saefullah</h5>
                    <div class="ms-md-auto d-flex">
                      <a href="/dashboard/logbook/create" class="btn btn-outline-primary align-items-center d-flex m-0 me-5 w-50"><i class="fas fa-plus me-2" aria-hidden="true"></i>Isi Logbook</a>
                      <div class="input-group ms-md-auto d-flex">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control me-3" placeholder="Search here..." onfocus="focused(this)" onfocusout="defocused(this)">
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <div class="card" >
                            <div class="card-body">
                              <p class="card-text">11 Agustus 1045 20:10</p>

                              <p>
                                <small class="text-body-secondary">
                                    By. <a class="text-decoration-none" href="/posts?author="> 
                                        Ardian
                                    </a>
                                </small>
                              </p>
                              <a href="/posts/" class="btn btn-primary">Read more</a>
                            </div>
                          </div>
                    </div>
    
                    <div class="col-md-2 mb-3">
                        <div class="card" >
                            <div class="card-body">
                              <p class="card-text">12 Agustus 1045 20:10</p>

                              <p>
                                <small class="text-body-secondary">
                                    By. <a class="text-decoration-none" href="/posts?author="> 
                                        Ardian
                                    </a>
                                </small>
                              </p>
                              <a href="/posts/" class="btn btn-primary">Read more</a>
                            </div>
                          </div>
                    </div>
    
                    <div class="col-md-2 mb-3">
                        <div class="card" >
                            <div class="card-body">
                              <p class="card-text">13 Agustus 1045 20:10</p>

                              <p>
                                <small class="text-body-secondary">
                                    By. <a class="text-decoration-none" href="/posts?author="> 
                                        Ardian
                                    </a>
                                </small>
                              </p>
                              <a href="/posts/" class="btn btn-primary">Read more</a>
                            </div>
                          </div>
                    </div>
    
                    <div class="col-md-2 mb-3">
                        <div class="card" >
                            <div class="card-body">
                              <p class="card-text">14 Agustus 1045 20:10</p>

                              <p>
                                <small class="text-body-secondary">
                                    By. <a class="text-decoration-none" href="/posts?author="> 
                                        Ardian
                                    </a>
                                </small>
                              </p>
                              <a href="/posts/" class="btn btn-primary">Read more</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-2 mb-3">
                        <div class="card" >
                            <div class="card-body">
                              <p class="card-text">15 Agustus 1045 20:10</p>

                              <p>
                                <small class="text-body-secondary">
                                    By. <a class="text-decoration-none" href="/posts?author="> 
                                        Ardian
                                    </a>
                                </small>
                              </p>
                              <a href="/posts/" class="btn btn-primary">Read more</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-2 mb-3">
                        <div class="card" >
                            <div class="card-body">
                              <p class="card-text">16 Agustus 1045 20:10</p>

                              <p>
                                <small class="text-body-secondary">
                                    By. <a class="text-decoration-none" href="/posts?author="> 
                                        Ardian
                                    </a>
                                </small>
                              </p>
                              <a href="/posts/" class="btn btn-primary">Read more</a>
                            </div>
                          </div>
                    </div>
                </div>
          </div>
        </div>
      </div>    
@endsection
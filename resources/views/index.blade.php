@extends('layout.main')

@section('container')

<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Sistem Informasi MBKM</h1>
          <p class="lead text-body-secondary">Selamat Datang di Sistem Informasi MBKM Politeknik Negeri Jakarta</p>
          <p>
            {{-- <a href="#" class="btn btn-primary my-2">Main call to action</a> --}}
            <a href="#" class="btn btn-secondary my-2">selengkapnya</a>
            {{-- <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button> --}}
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col-md-4">
            <div class="card h-100 shadow-sm" >
                <img src="img/kampus_mengajar.JPG" width="100" height="200" class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">Kampus Mengajar</h3>
                <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-end mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/msib.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">MSIB (Magang)</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="img/msib.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">MSIB (Studi Independent)</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="img/pmm.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">Pertukaran Mahasiswa Merdeka</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="img/wirausaha.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">Wirausaha Merdeka</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="img/iisma.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">IISMA (Indonesian International Student Mobility Awards)</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card h-100shadow-sm">
                <img src="img/praktisi.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">Praktisi Mengajar</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="img/bangkit.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">Bangkit</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="img/gerilya.JPG" width="100" height="200"  class="card-img-top" alt="kampus_mengajar_logo">
              <div class="card-body">
                <h3 class="card-title">Gerilya</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-body-secondary">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </main>
@endsection
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="https://neidra.online" target="_blank">
      <img src="/img/logopnj.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">SIMBKM</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  {{-- <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main"> --}}
  <div class="w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if($active == 'Forum') active @endif" href="/dashboard/forum">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Forum</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Pendaftaran MBKM') active @endif" href="/dashboard/pendaftaran-mbkm">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-ruler-pencil text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pendaftaran MBKM</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Upload Kurikulum') active @endif" href="/dashboard/upload-kurikulum">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Upload Kurikulum</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Hasil Konversi') active @endif" href="/dashboard/hasil-konversi">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-paper-diploma text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Hasil Konversi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Logbook') active @endif" href="/dashboard/logbook">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-book-bookmark text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logbook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Laporan') active @endif" href="/dashboard/laporan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Admin pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Create User') active @endif" href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Create User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Master Data') active @endif" href="./pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Master Data</span>
          </a>
        </li>
    </ul>
  </div>
</aside>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-4 fixed-start ms-4 pb-2" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="https://neidra.online" target="_blank">
      <img src="/img/logopnj.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">SIMBKM</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  {{-- <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main"> --}}
  <div class="w-auto mb-4" id="sidenav-collapse-main">
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
          <a class="nav-link @if($active == 'Buat Akun') active @endif" href="/dashboard/register">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Buat Akun</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($active == 'Fakultas') active @endif" href="/dashboard/fakultas">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-building text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Fakultas</span>
          </a>
        </li>        
        <li class="nav-item">
          <a class="nav-link @if($active == 'Jurusan') active @endif" href="/dashboard/jurusan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-archive-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Jurusan</span>
          </a>
        </li>        
        <li class="nav-item">
          <a class="nav-link @if($active == 'Role') active @endif" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-badge text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Role</span>
          </a>
        </li>        

    </ul>
  </div>
</aside>
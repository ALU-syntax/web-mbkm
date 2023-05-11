<style>
.nav-link {color: grey}
.nav-link:hover {color: black}
.navbar-nav .nav-link.active{color: black}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-light ">
  <div class="container">
    <a href="/" class="d-flex align-items-center me-3 mb-2 mb-lg-0 text-white text-decoration-none">
      <img src="img/logopnj.png" alt="logo" width="75" height="75">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ $active === 'home' ? 'active' : '' }}"  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
        </li> --}}
      </ul>
    </div>
    <div class="text-end">
      <button type="button" class="btn btn-outline-primary me-2">Login</button>
      <button type="button" class="btn btn-warning">Sign-up</button>
    </div>
  </div>
</nav>

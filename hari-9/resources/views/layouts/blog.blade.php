<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','Simple Blog')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-brand { letter-spacing: .5px; font-weight: 700; }
    .post-card .category-badge { position: absolute; top: 10px; right: 10px; }
    .post-card .card-body { position: relative; }
    .tag-badge { margin-right: .25rem; }
    .hero { background: linear-gradient(90deg,#f8f9fa,#fff); border:1px solid #eee; }
    .sidebar .list-group-item { display:flex; justify-content:space-between; align-items:center; }
    footer { border-top: 1px solid #eee; }
  </style>
  @stack('head')
</head>
<body>

  {{-- NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('blog.index') }}">📰 SimpleBlog</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navbarMain" class="collapse navbar-collapse">
        {{-- Kategori Dropdown --}}
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kategori</a>
            <ul class="dropdown-menu">
              @isset($categories)
                @foreach($categories as $cat)
                  <li>
                    <a class="dropdown-item" href="{{ route('blog.cat',$cat->slug) }}">
                      {{ $cat->name }} <span class="badge bg-secondary">{{ $cat->posts_count ?? $cat->posts()->count() }}</span>
                    </a>
                  </li>
                @endforeach
              @endisset
            </ul>
          </li>
        </ul>

        {{-- Search --}}
        <form class="d-flex" role="search" method="GET" action="{{ url()->current() }}">
          <input class="form-control me-2" type="search" name="q" placeholder="Cari artikel..." value="{{ $q ?? request('q') }}">
          <button class="btn btn-outline-light" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>

  {{-- CONTENT --}}
  <div class="container my-4">
    @yield('content')
  </div>

  {{-- FOOTER --}}
  <footer class="py-4 text-center text-muted">
    <div class="container">
      <small>&copy; {{ date('Y') }} SimpleBlog • Dibuat dengan ❤️, Laravel & Bootstrap</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>

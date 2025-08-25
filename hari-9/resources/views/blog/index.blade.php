@php use Illuminate\Support\Str; @endphp
@extends('layouts.blog')

@section('title','Beranda')

@section('content')
  {{-- HERO --}}
  <div class="p-4 p-md-5 mb-4 rounded hero">
    <div class="row">
      <div class="col-md-8">
        <h1 class="display-6 fw-bold">Selamat datang di SimpleBlog</h1>
        <p class="lead text-muted mb-0">
          Baca artikel terbaru, filter berdasarkan kategori, atau cari topik favoritmu.
        </p>
      </div>
      <div class="col-md-4">
        {{-- mini filter tanggal --}}
        <form class="row g-2" method="GET" action="{{ route('blog.index') }}">
          <input type="hidden" name="q" value="{{ request('q') }}">
          <div class="col-6">
            <input type="date" name="from" class="form-control" value="{{ request('from') }}">
          </div>
          <div class="col-6">
            <input type="date" name="until" class="form-control" value="{{ request('until') }}">
          </div>
          <div class="col-12 d-grid">
            <button class="btn btn-outline-secondary">Filter Tanggal</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    {{-- MAIN LIST --}}
    <div class="col-lg-8">
      @if($posts->count())
        <div class="row g-4">
          @foreach($posts as $post)
            <div class="col-md-6">
              <div class="card h-100 post-card">
                <div class="card-body">
                  <a href="{{ route('blog.cat', $post->category->slug) }}"
                     class="badge text-bg-light border position-absolute category-badge">
                    {{ $post->category->name }}
                  </a>
                  <h5 class="card-title">
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none">
                      {{ $post->title }}
                    </a>
                  </h5>
                  <p class="card-text text-muted small mb-2">
                    {{ optional($post->published_at)->format('d M Y') ?? 'Draft' }}
                  </p>
                  <p class="card-text">{{ Str::limit(strip_tags($post->content), 140) }}</p>
                  <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-sm btn-primary">
                    Baca Selengkapnya
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="mt-4">
          {{ $posts->links() }}
        </div>
      @else
        <div class="alert alert-warning">Belum ada artikel ditemukan.</div>
      @endif
    </div>

    {{-- SIDEBAR --}}
    <aside class="col-lg-4 sidebar">
      <div class="mb-4">
        <h5 class="mb-3">Kategori</h5>
        <div class="list-group">
          @foreach($categories as $cat)
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
               href="{{ route('blog.cat',$cat->slug) }}">
              <span>{{ $cat->name }}</span>
              <span class="badge bg-secondary">{{ $cat->posts_count }}</span>
            </a>
          @endforeach
        </div>
      </div>

      <div>
        <h5 class="mb-3">Terbaru</h5>
        <ul class="list-unstyled">
          @foreach($recent as $r)
            <li class="mb-2">
              <a class="text-decoration-none" href="{{ route('blog.show', $r->slug) }}">
                {{ Str::limit($r->title, 60) }}
              </a>
              <div class="small text-muted">{{ optional($r->published_at)->format('d M Y') }}</div>
            </li>
          @endforeach
        </ul>
      </div>
    </aside>
  </div>
@endsection

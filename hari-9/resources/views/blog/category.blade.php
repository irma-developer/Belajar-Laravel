@php use Illuminate\Support\Str; @endphp
@extends('layouts.blog')

@section('title','Kategori: ' . $category->name)

@section('content')
  <div class="pb-2 mb-4 border-bottom">
    <h2 class="fw-bold">Kategori: {{ $category->name }}</h2>
    <p class="text-muted">Artikel yang termasuk kategori ini.</p>
  </div>

  <div class="row">
    <div class="col-lg-8">
      @if($posts->count())
        <div class="row g-4">
          @foreach($posts as $post)
            <div class="col-md-6">
              <div class="card h-100 post-card">
                <div class="card-body">
                  <span class="badge text-bg-light border position-absolute category-badge">
                    {{ $post->category->name }}
                  </span>
                  <h5 class="card-title">
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none">
                      {{ $post->title }}
                    </a>
                  </h5>
                  <p class="card-text text-muted small mb-2">
                    {{ optional($post->published_at)->format('d M Y') ?? 'Draft' }}
                  </p>
                  <p class="card-text">{{ Str::limit(strip_tags($post->content), 140) }}</p>
                  <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-sm btn-primary">Baca</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="mt-4">
          {{ $posts->links() }}
        </div>
      @else
        <div class="alert alert-warning">Belum ada artikel di kategori ini.</div>
      @endif
    </div>

    {{-- Sidebar sama seperti index --}}
    <aside class="col-lg-4 sidebar">
      <div class="mb-4">
        <h5 class="mb-3">Kategori</h5>
        <div class="list-group">
          @foreach($categories as $cat)
            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center
                      {{ $cat->id === $category->id ? 'active' : '' }}"
               href="{{ route('blog.cat',$cat->slug) }}">
              <span>{{ $cat->name }}</span>
              <span class="badge bg-light text-dark">{{ $cat->posts_count }}</span>
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

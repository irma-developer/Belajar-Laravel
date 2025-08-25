@extends('layouts.blog')

@section('title', $post->title)

@section('content')
  <div class="row">
    <div class="col-lg-8">
      <div class="mb-3">
        <a class="badge text-bg-light border text-decoration-none" href="{{ route('blog.cat',$post->category->slug) }}">
          {{ $post->category->name }}
        </a>
        <span class="text-muted small ms-2">
          {{ optional($post->published_at)->format('d M Y H:i') ?? 'Draft' }}
        </span>
      </div>

      <h1 class="fw-bold mb-3">{{ $post->title }}</h1>

      <article class="mb-4">
        {!! $post->content !!}
      </article>

      @if($post->tags->count())
        <div class="mb-4">
          @foreach($post->tags as $tag)
            <span class="badge bg-primary tag-badge">#{{ $tag->name }}</span>
          @endforeach
        </div>
      @endif

      <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">← Kembali</a>
    </div>

    {{-- Sidebar --}}
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
              <a class="text-decoration-none" href="{{ route('blog.show', $r->slug) }}">{{ \Illuminate\Support\Str::limit($r->title, 60) }}</a>
              <div class="small text-muted">{{ optional($r->published_at)->format('d M Y') }}</div>
            </li>
          @endforeach
        </ul>
      </div>
    </aside>
  </div>
@endsection

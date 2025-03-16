@extends('userpanel.components.master')
@section('title', 'Blog Page')
@section('content')
@include('userpanel.components.header')


    <!-- blog-hero-page Section -->
    <header class="blog-hero-page">
      <div class="blog-hero-page-overlay"></div>
      <div class="blog-hero-page-content">
          <h1>Culinary Chronicles</h1>
          <p>Exploring flavors, sharing stories, and celebrating the art of gastronomy</p>
      </div>
  </header>

  <!-- Blog Cards Section -->
  <main class="blog-container">
    <div class="blog-grid">
        @foreach($BlogData as $blog)
        <article class="blog-card">
            <div class="card-image">
                <img src="{{ asset($blog->img_url) }}" alt="Seasonal Menu">
            </div>
            <div class="card-content">
                <span class="category">{{ $blog->disease_name }}</span>
                <h2>{{ $blog->blog_title }}</h2>
                <p>{!! $blog->blog_description !!}</p>
                <div class="card-meta">
                    <span class="author">{{ $blog->blog_author }}</span>
                    <span class="read-time">
                        <a href="{{ route('single-blog-page', ['id' => $blog->id]) }}">See More</a>
                    </span>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</main>



@include('userpanel.components.footer')
@endsection

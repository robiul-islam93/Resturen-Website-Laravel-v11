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
          <!-- Card 1 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&q=80&w=800" alt="Seasonal Menu">
              </div>
              <div class="card-content">
                  <span class="category">Seasonal Specials</span>
                  <h2>Spring Menu Highlights</h2>
                  <p>Discover our new seasonal dishes featuring fresh, local ingredients and innovative flavors.</p>
                  <div class="card-meta">
                      <span class="author">Chef Maria Santos</span>
                      <span class="read-time">5 min read</span>
                  </div>
              </div>
          </article>

          <!-- Card 2 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1507048331197-7d4ac70811cf?auto=format&fit=crop&q=80&w=800" alt="Wine Pairing">
              </div>
              <div class="card-content">
                  <span class="category">Wine & Dine</span>
                  <h2>Perfect Wine Pairings</h2>
                  <p>Expert tips on matching wines with our signature dishes for an elevated dining experience.</p>
                  <div class="card-meta">
                      <span class="author">James Wilson</span>
                      <span class="read-time">8 min read</span>
                  </div>
              </div>
          </article>

          <!-- Card 3 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?auto=format&fit=crop&q=80&w=800" alt="Cooking Techniques">
              </div>
              <div class="card-content">
                  <span class="category">Culinary Arts</span>
                  <h2>Behind the Kitchen Doors</h2>
                  <p>A glimpse into our kitchen's innovative cooking techniques and culinary secrets.</p>
                  <div class="card-meta">
                      <span class="author">Chef David Lee</span>
                      <span class="read-time">10 min read</span>
                  </div>
              </div>
          </article>

          <!-- Card 4 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&q=80&w=800" alt="Desserts">
              </div>
              <div class="card-content">
                  <span class="category">Sweet Endings</span>
                  <h2>Artisanal Desserts</h2>
                  <p>Exploring our pastry chef's creative process and signature dessert creations.</p>
                  <div class="card-meta">
                      <span class="author">Emma Chen</span>
                      <span class="read-time">6 min read</span>
                  </div>
              </div>
          </article>

          <!-- Card 5 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1466637574441-749b8f19452f?auto=format&fit=crop&q=80&w=800" alt="Local Ingredients">
              </div>
              <div class="card-content">
                  <span class="category">Farm to Table</span>
                  <h2>Local Ingredient Spotlight</h2>
                  <p>Meet our local suppliers and learn about the ingredients that make our dishes special.</p>
                  <div class="card-meta">
                      <span class="author">Sarah Thompson</span>
                      <span class="read-time">7 min read</span>
                  </div>
              </div>
          </article>

          <!-- Card 6 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&q=80&w=800" alt="Restaurant Interior">
              </div>
              <div class="card-content">
                  <span class="category">Ambiance</span>
                  <h2>Design & Dining Experience</h2>
                  <p>The story behind our restaurant's architecture and atmospheric design.</p>
                  <div class="card-meta">
                      <span class="author">Michael Roberts</span>
                      <span class="read-time">12 min read</span>
                  </div>
              </div>
          </article>

          <!-- Card 7 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&q=80&w=800" alt="Signature Dishes">
              </div>
              <div class="card-content">
                  <span class="category">Signature Dishes</span>
                  <h2>Most Beloved Recipes</h2>
                  <p>The stories and inspiration behind our most popular dishes.</p>
                  <div class="card-meta">
                      <span class="author">Chef Alex Martinez</span>
                      <span class="read-time">9 min read</span>
                  </div>
              </div>
          </article>

          <!-- Card 8 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&q=80&w=800" alt="Cocktails">
              </div>
              <div class="card-content">
                  <span class="category">Mixology</span>
                  <h2>Craft Cocktail Collection</h2>
                  <p>Exploring our innovative cocktail menu and mixology techniques.</p>
                  <div class="card-meta">
                      <span class="author">Linda Martinez</span>
                      <span class="read-time">8 min read</span>
                  </div>
              </div>
          </article>
          <!-- Card 8 -->
          <article class="blog-card">
              <div class="card-image">
                  <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?auto=format&fit=crop&q=80&w=800&h=500" alt="Cocktails">
              </div>
              <div class="card-content">
                  <span class="category">Mixology</span>
                  <h2>Spring Season: Menu Items</h2>
                  <p>Exploring our innovative cocktail menu and mixology techniques.</p>
                  <div class="card-meta">
                      <span class="author">Linda Martinez</span>
                      <span class="read-time">8 min read</span>
                  </div>
              </div>
          </article>
      </div>
  </main>


@include('userpanel.components.footer')
@endsection

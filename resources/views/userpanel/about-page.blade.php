@extends('userpanel.components.master')
@section('title', 'About Page')
@section('content')
@include('userpanel.components.header')




  <!-- Hero Section -->
  <div class="about-hero">
    <div class="about-overlay">
      <div class="container">
        <div class="about-content">
          <h1>Our Story</h1>
          <p class="subtitle">A Culinary Journey Since 1970</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Story Section -->
  <section class="story-section">
    <div class="container">
      <div class="story-grid">
        <div class="story-content">
          <h2>A Legacy of Excellence</h2>
          <p>Founded in 1970, our restaurant has been at the forefront of culinary innovation for over five decades. What started as a small family kitchen has evolved into one of the city's most celebrated dining destinations.</p>
          <p>Our philosophy is simple: use the finest ingredients, honor traditional techniques, and present dishes that tell a story. Every plate that leaves our kitchen is a reflection of our commitment to excellence.</p>
        </div>
        <div class="story-image">
          <img src="{{asset('userpanel/assets/img/about-img/about-story-img.jpeg')}}" alt="Restaurant Interior" class="rounded-image">
        </div>
      </div>
    </div>
  </section>

  <!-- Values Section -->
  <section class="values-section">
    <div class="container">
      <h2 class="section-title">Our Values</h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 20v-8m0 0V4m0 8h8m-8 0H4"/>
            </svg>
          </div>
          <h3>Quality First</h3>
          <p>We source only the finest ingredients from local farmers and trusted suppliers.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
              <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
            </svg>
          </div>
          <h3>Culinary Innovation</h3>
          <p>We blend traditional techniques with modern creativity to create unique flavors.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <h3>Family Culture</h3>
          <p>Our team is our family, and we treat every guest as part of it.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team-section">
    <div class="container">
      <h2 class="section-title">Meet Our Team</h2>
      <div class="team-grid">
        <div class="team-card">
          <img src="{{asset('userpanel/assets/img/about-img/our-team-img-1.jpeg')}}" alt="Head Chef">
          <div class="team-info">
            <h3>James Wilson</h3>
            <p class="role">Head Chef</p>
            <p class="bio">With 20 years of experience in fine dining, James brings creativity and precision to every dish.</p>
          </div>
        </div>
        <div class="team-card">
          <img src="{{asset('userpanel/assets/img/about-img/our-team-img-2.jpeg')}}" alt="Sous Chef">
          <div class="team-info">
            <h3>Maria Rodriguez</h3>
            <p class="role">Sous Chef</p>
            <p class="bio">A master of flavor combinations, Maria's innovative approach has earned multiple culinary awards.</p>
          </div>
        </div>
        <div class="team-card">
          <img src="{{asset('userpanel/assets/img/about-img/our-team-img-3.jpeg')}}" alt="Pastry Chef">
          <div class="team-info">
            <h3>Sophie Chen</h3>
            <p class="role">Pastry Chef</p>
            <p class="bio">Sophie's artistic touch transforms desserts into unforgettable culinary experiences.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Awards Section -->
  <section class="awards-section">
    <div class="container">
      <h2 class="section-title">Recognition & Awards</h2>
      <div class="awards-grid">
        <div class="award">
          <div class="award-year">2023</div>
          <h3>Best Fine Dining Restaurant</h3>
          <p>City Culinary Excellence Awards</p>
        </div>
        <div class="award">
          <div class="award-year">2022</div>
          <h3>Chef of the Year</h3>
          <p>National Restaurant Association</p>
        </div>
        <div class="award">
          <div class="award-year">2021</div>
          <h3>Innovation in Cuisine</h3>
          <p>International Food Critics Circle</p>
        </div>
      </div>
    </div>
  </section>






@include('userpanel.components.footer')
@endsection

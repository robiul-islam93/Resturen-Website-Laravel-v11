@extends('userpanel.components.master')
@section('title', 'Home Page')
@section('content')
@include('userpanel.components.header')

<!-- Hero Section -->
<div class="hero">
    <div class="hero-overlay">
      <div class="container">
        <div class="hero-content">
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#FA5B0F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chef-hat">
                <path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"></path>
                <line x1="6" y1="17" x2="18" y2="17"></line>
              </svg>

            Welcome to My Kitchen
          </h1>
          <p>Where passion meets culinary excellence. Explore our modern kitchen setup and discover the art of cooking through our carefully curated collection of recipes and techniques.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- My Kitchen Section -->
  <div class="container">
    <h2 class="section-title">My Kitchen Gallery</h2>
    <!-- Kitchen Images Grid -->
    <div class="image-grid">
      <div class="card">
        <img src="{{asset('userpanel/assets/img/kithen-img/kithen-img-1.jpeg')}}" alt="Modern Kitchen Setup">
        <div class="card-overlay">
          <h3>Modern Kitchen Setup</h3>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('userpanel/assets/img/kithen-img/kithen-img-2.jpeg')}}" alt="Cooking Station">
        <div class="card-overlay">
          <h3>Cooking Station</h3>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('userpanel/assets/img/kithen-img/kithen-img-3.jpeg')}}" alt="Chef's Paradise">
        <div class="card-overlay">
          <h3>Chef's Paradise</h3>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('userpanel/assets/img/kithen-img/kithen-img-4.jpeg')}}" alt="Prep Area">
        <div class="card-overlay">
          <h3>Prep Area</h3>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('userpanel/assets/img/kithen-img/kithen-img-5.jpeg')}}" alt="Kitchen Tools">
        <div class="card-overlay">
          <h3>Kitchen Tools</h3>
        </div>
      </div>
      <div class="card">
        <img src="{{asset('userpanel/assets/img/kithen-img/kithen-img-6.jpeg')}}" alt="Culinary Space">
        <div class="card-overlay">
          <h3>Culinary Space</h3>
        </div>
      </div>
    </div>

    <h2 class="section-title">Cooking Videos</h2>
    <div class="video-grid">
      <div class="video-card" onclick="openModal('modal1')">
        <div class="video-thumbnail">
          <img src="https://images.unsplash.com/photo-1507048331197-7d4ac70811cf" alt="Perfect Pasta Making">
          <div class="play-overlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="play-icon">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="10 8 16 12 10 16 10 8"></polygon>
            </svg>
          </div>
          <div class="duration">4:30</div>
        </div>
        <div class="video-info">
          <h3>Perfect Pasta Making</h3>
        </div>
      </div>
      <div class="video-card">
        <div class="video-thumbnail">
          <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352" alt="Baking Essentials">
          <div class="play-overlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="play-icon">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="10 8 16 12 10 16 10 8"></polygon>
            </svg>
          </div>
          <div class="duration">5:45</div>
        </div>
        <div class="video-info">
          <h3>Baking Essentials</h3>
        </div>
      </div>
      <div class="video-card">
        <div class="video-thumbnail">
          <img src="https://images.unsplash.com/photo-1516824711718-9c1e683412ac" alt="Knife Skills">
          <div class="play-overlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="play-icon">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="10 8 16 12 10 16 10 8"></polygon>
            </svg>
          </div>
          <div class="duration">3:20</div>
        </div>
        <div class="video-info">
          <h3>Knife Skills</h3>
        </div>
      </div>
      <div class="video-card">
        <div class="video-thumbnail">
          <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2" alt="Sauce Making">
          <div class="play-overlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="play-icon">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="10 8 16 12 10 16 10 8"></polygon>
            </svg>
          </div>
          <div class="duration">6:15</div>
        </div>
        <div class="video-info">
          <h3>Sauce Making</h3>
        </div>
      </div>
      <div class="video-card">
        <div class="video-thumbnail">
          <img src="https://images.unsplash.com/photo-1547592180-85f173990554" alt="Plating Techniques">
          <div class="play-overlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="play-icon">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="10 8 16 12 10 16 10 8"></polygon>
            </svg>
          </div>
          <div class="duration">4:50</div>
        </div>
        <div class="video-info">
          <h3>Plating Techniques</h3>
        </div>
      </div>
      <div class="video-card">
        <div class="video-thumbnail">
          <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19" alt="Kitchen Organization">
          <div class="play-overlay">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="play-icon">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="10 8 16 12 10 16 10 8"></polygon>
            </svg>
          </div>
          <div class="duration">5:30</div>
        </div>
        <div class="video-info">
          <h3>Kitchen Organization</h3>
        </div>
      </div>
    </div>
  </div>

  <div id="modal1" class="modal" onclick="closeModal('modal1')">
    <div class="modal-content" onclick="event.stopPropagation()">
        <button class="close-btn" onclick="closeModal('modal1')">X</button>
        <video controls src="{{asset('userpanel/assets/video/SampleVideo_1280x720_1mb.mp4')}}"></video>
    </div>
</div>



<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = "flex";
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }
</script>

@include('userpanel.components.footer')
@endsection

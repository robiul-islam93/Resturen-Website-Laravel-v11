@extends('userpanel.components.master')
@section('title', 'Single Blog Page')
@section('content')
@include('userpanel.components.header')



<div class="container-fluid px-0">
    <!-- Blog Hero Section -->
    <article class="blog-post">
      <div class="single-blog-hero position-relative mb-5">
        <div class="single-blog-hero-image">
          <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&q=80&w=800" alt="Modern cuisine dish" class="w-100" />
        </div>
        <div class="hero-overlay"></div>
        <div class="single-blog-hero-content  text-center position-absolute start-50 top-50 translate-middle">
          <div class="single-blog-post-meta mb-4">
            <span class="text-white me-4"><i class="bi bi-calendar3"></i> March 15, 2024</span>
            <span class="text-white"><i class="bi bi-person"></i>Seasonal Specials</span>
          </div>
          <h1 class="display-3 text-white mb-4">The Link Between Food & Mental Health: What You Eat Matters</h1>

        </div>
      </div>

      <div class="container">
        <!-- Blog Content -->
        <div class="single-blog-content mb-5">
          <p class="single-blog-lead">
            What you eat has a profound impact on your mental well-being. While many focus on diet for physical health, nutrition also plays a important role in brain function, mood regulation, and emotional stability. The connection between food and mental health is largely influenced by the gut-brain axis, where trillions of gut bacteria communicate with the brain through neurotransmitters like serotonin. A diet high in processed foods, sugars, and unhealthy fats can disrupt this balance, leading to increased stress, anxiety, and even depression.
            Certain nutrients are essential for maintaining a healthy mind. Omega-3 fatty acids found in salmon, walnuts, and flaxseeds help reduce inflammation and support cognitive function. B vitamins from whole grains, eggs, and leafy greens play a important role in energy production and stress management. Antioxidants from berries, dark chocolate, and green tea help combat oxidative stress, which has been linked to mental health disorders. Probiotic and prebiotic-rich foods like yogurt, kefir, bananas, and garlic support gut health, which directly influences mood stability.
          </p>

          <div class="single-blog-content-section">
            <p>
                One of the best diets for mental health is the Mediterranean diet, which emphasizes whole foods such as fruits, vegetables, nuts, whole grains, and lean proteins. Research has shown that this diet can significantly reduce the risk of depression and improve overall brain function. It provides the necessary nutrients to support emotional balance and cognitive clarity while reducing inflammation in the body.
            </p>

            <div class="quote-section my-5">
              <blockquote>
                <p>"Beyond what you eat, how you eat also matters. Practicing mindful eating by slowing down, savoring each bite,
                    and avoiding distractions can improve digestion and strengthen the connection between food and emotions. Being
                    conscious of the quality of food and how it makes you feel can lead to better choices and a healthier relationship
                    with eating.By making small, mindful changes to your diet, you can nourish both your body and mind. Prioritizing nutrient-dense
                     foods over processed options, staying hydrated, and maintaining a balanced diet can enhance mental clarity, reduce stress, and
                     promote overall emotional well-being. Food is more than just fuel—it has the power to shape your thoughts, feelings, and overall
                     mental health."</p>
                <cite>— Zahra Jabeen</cite>
              </blockquote>
            </div>

            <h2>The Art of Modern Plating</h2>
            <p>
              Modern plating is where science meets artistry. Each dish is carefully composed to engage all senses, creating a harmonious balance between visual appeal and flavor complexity. We believe that the first taste is taken with the eyes, setting the stage for the culinary journey that follows.
            </p>
          </div>
        </div>

        <!-- Review Section -->
        <div class="reviews-section mb-5">
          <h3>Guest Experiences</h3>
          <div class="row g-4 mt-2">
            <div class="col-md-6">
              <div class="review-card">
                <div class="review-header d-flex align-items-center mb-3">
                  <img src="https://i.pravatar.cc/50?img=3" alt="User" class="rounded-circle">
                  <div class="ms-3">
                    <h6 class="mb-1">Michael Chen</h6>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <p>The fusion of traditional techniques with modern presentation is absolutely stunning. Each dish tells a story of innovation while respecting culinary heritage.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="review-card">
                <div class="review-header d-flex align-items-center mb-3">
                  <img src="https://i.pravatar.cc/50?img=4" alt="User" class="rounded-circle">
                  <div class="ms-3">
                    <h6 class="mb-1">Emma Thompson</h6>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </div>
                  </div>
                </div>
                <p>An extraordinary culinary experience that pushes boundaries while maintaining the essence of classic flavors. The attention to detail is remarkable.</p>
              </div>
            </div>
          </div>

          <!-- Add Review Form -->
          <div class="add-review mt-5">
            <h4>Share Your Experience</h4>
             <form class="contact-form"action="{{route('contact.store')}}" method="POST">
          @csrf
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="name" name="name" required>
                    <label for="name">Full Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email Address</label>
                </div>
            </div>

            <div class="form-group full-width">
                <textarea id="message" name="message" rows="5" required></textarea>
                <label for="message">Your Message</label>
            </div>
            <button type="submit" class="submit-button">
                Send Message
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>

          </div>
        </div>

        <!-- Related Posts Section -->
        <div class="related-posts mb-5">
          <h3>Explore More Culinary Stories</h3>
          <div class="row g-4 mt-2">
            <div class="col-lg-4 col-md-6">
              <div class="post-card">
                <div class="post-image">
                  <img src="https://images.unsplash.com/photo-1547592180-85f173990554" alt="Molecular Gastronomy">
                </div>
                <div class="post-content">
                  <h5>The Science of Molecular Gastronomy</h5>
                  <p>Exploring the intersection of science and cuisine in modern cooking techniques...</p>
                  <a href="#" class="btn btn-outline">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="post-card">
                <div class="post-image">
                  <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5" alt="Sustainable Cuisine">
                </div>
                <div class="post-content">
                  <h5>Sustainable Fine Dining</h5>
                  <p>How luxury restaurants are embracing eco-friendly practices...</p>
                  <a href="#" class="btn btn-outline">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="post-card">
                <div class="post-image">
                  <img src="https://images.unsplash.com/photo-1607877742574-a1d40c130c87" alt="Wine Pairing">
                </div>
                <div class="post-content">
                  <h5>The Art of Wine Pairing</h5>
                  <p>A guide to elevating your dining experience through perfect wine selections...</p>
                  <a href="#" class="btn btn-outline">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>


@include('userpanel.components.footer')
@endsection

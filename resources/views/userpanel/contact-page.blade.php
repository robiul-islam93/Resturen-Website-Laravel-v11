@extends('userpanel.components.master')
@section('title', 'Contact Page')
@section('content')
@include('userpanel.components.header')


 <!-- Contact Hero Section -->
 <section class="contact-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Get in Touch</h1>
        <p class="tagline">We're Here to Serve You</p>
    </div>
</section>




<!-- Contact Information Section -->
<section class="contact-info-section">
    <div class="contact-grid">
        <div class="contact-card">
            <div class="icon-circle">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3>Visit Us</h3>
            <p>123 Gourmet Street</p>
            <p>New York, NY 10001</p>
        </div>
        <div class="contact-card">
            <div class="icon-circle">
                <i class="fas fa-phone"></i>
            </div>
            <h3>Call Us</h3>
            <p>Reservations: (212) 555-0123</p>
            <p>Events: (212) 555-0124</p>
        </div>
        <div class="contact-card">
            <div class="icon-circle">
                <i class="fas fa-envelope"></i>
            </div>
            <h3>Email Us</h3>
            <p>info@lamaison.com</p>
            <p>events@lamaison.com</p>
        </div>
    </div>
</section>


<!-- Hours Section -->
<section class="hours-section">
  <div class="hours-container">
      <div class="hours-content">
          <h2>Opening Hours</h2>
          <div class="hours-grid">
              <div class="hours-item">
                  <span class="day">Monday</span>
                  <span class="time">Closed</span>
              </div>
              <div class="hours-item">
                  <span class="day">Tuesday - Thursday</span>
                  <span class="time">5:30 PM - 10:00 PM</span>
              </div>
              <div class="hours-item">
                  <span class="day">Friday - Saturday</span>
                  <span class="time">5:30 PM - 11:00 PM</span>
              </div>
              <div class="hours-item">
                  <span class="day">Sunday</span>
                  <span class="time">5:30 PM - 9:30 PM</span>
              </div>
          </div>
      </div>
  </div>
</section>



<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="form-container">
        <h2>Send Us a Message</h2>
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
            <div class="form-row">
                <div class="form-group">
                    <input type="tel" id="phone" name="mobile">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="form-group">
                    <select id="subject" name="subject" required>
                        <option value="">Select Purpose</option>
                        <option value="reservation">Make a Reservation</option>
                        <option value="private-event">Private Event</option>
                        <option value="feedback">Feedback</option>
                        <option value="other">Other</option>
                    </select>
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
</section>


<!-- Map Section -->
<section class="map-section">
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25436351647!2d-74.11976373946229!3d40.69766374934027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1696055159621!5m2!1sen!2sus"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>



@include('userpanel.components.footer')
@endsection

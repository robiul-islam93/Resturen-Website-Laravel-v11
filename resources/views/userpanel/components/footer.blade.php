<footer class="footer">
    <div class="container py-5">
        <div class="row g-4">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-about">
                    <h3>Taste Haven</h3>
                    <p>Experience culinary excellence in every bite. Our commitment to quality and service makes every dining moment special.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Reservations</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h3>Contact Info</h3>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Dining Street, Food City, FC 12345</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+1 (555) 123-4567</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>info@tastehaven.com</span>
                    </li>
                </ul>
            </div>

            <!-- Opening Hours -->
            <div class="col-lg-3 col-md-6">
                <h3>Opening Hours</h3>
                <ul class="opening-hours">
                    <li>
                        <span>Monday - Friday</span>
                        <span>9:00 AM - 10:00 PM</span>
                    </li>
                    <li>
                        <span>Saturday</span>
                        <span>10:00 AM - 11:00 PM</span>
                    </li>
                    <li>
                        <span>Sunday</span>
                        <span>10:00 AM - 9:00 PM</span>
                    </li>
                </ul>
                <button class="reservation-btn">Book a Table</button>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2024 Taste Haven. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>

    <button id="backToTop">&#8679;</button>
</footer>


<script>
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.classList.add("show");
        } else {
            backToTop.classList.remove("show");
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>


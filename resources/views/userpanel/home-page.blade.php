@extends('userpanel.components.master')
@section('title', 'Home Page')
@section('content')
@include('userpanel.components.header')


<!------------------------------------------------- Hero Start ------------------------------------------------->

<div class="hero-slider" data-carousel>
  <div
    class="carousel-cell"
    style="
      background-image: url('{{asset('userpanel/assets/img/hero-img/home-page-slider.jpg')}}');
    "
  >
    <div class="overlay"></div>
    <div class="slide-content">
      <div class="mask">
        <h2 class="title">Slide 1</h2>
      </div>
      <div class="divider"></div>
      <div class="mask">
        <p class="caption">Flickity is fun to use.</p>

      </div>
    </div>
  </div>
  <div
    class="carousel-cell"
    style="
      background-image: url('{{asset('userpanel/assets/img/hero-img/hero-page-slider2n.jpg')}}');
    "
  >
    <div class="overlay"></div>
    <div class="slide-content">
      <div class="mask">
        <h2 class="title">Slide 2</h2>
      </div>
      <div class="divider"></div>
      <div class="mask">
        <p class="caption">Flickity is flexible.</p>

      </div>
    </div>
  </div>
  <div
    class="carousel-cell"
    style="
      background-image: url('{{asset('userpanel/assets/img/hero-img/hero-page-slider-3d.jpg')}}');
    "
  >
    <div class="overlay"></div>
    <div class="slide-content">
      <div class="mask">
        <h2 class="title">Slide 3</h2>
      </div>
      <div class="divider"></div>
      <div class="mask">
        <p class="caption">Flickity is awesome.</p>

      </div>
    </div>
  </div>
</div>
<!----------------------------------------------- Hero End ----------------------------------------------->

<!-------------------------------------------- Royal Restaurant Gift card section Start here  ----------------->

<section class="offers-section container">
  <h2>We Offer Top Notch</h2>
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="offer-card">
        <img
          src="{{asset('userpanel/assets/img/special-offers-img/lunch_special.webp')}}"
          alt="Lunch Special"
        />
        <div class="offer-details">
          <span class="tag">FEELING HUNGRY</span>
          <h3>Lunch Special</h3>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="offer-card">
        <div class="offer-details">
          <span class="tag highlight">THE ROYAL EXPERIENCE</span>
          <h3>Royal Restaurant Mega Offer</h3>
        </div>
        <img
          src="{{asset('userpanel/assets/img/special-offers-img/mega_offer.webp')}}"
          alt="Royal Restaurant Mega Offer"
        />
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="offer-card">
        <img
          src="{{asset('userpanel/assets/img/special-offers-img/dinning_special.webp')}}"
          alt="Dining Special"
        />
        <div class="offer-details">
          <span class="tag">SET YOUR LOVELY MOMENT</span>
          <h3>Dining Special</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!------------------------------------- Royal Restaurant Gift card section End here  ----------------------------->

<!-- Kitchen Recipe Video Section Start  -->

<!-- About Section Start -->
<div class="about">
  <div class="container">
    <div class="row about-section">
      <!-- Text Section -->
      <div class="col-lg-6">
        <h6>ABOUT US</h6>
        <h2>From Our Kitchen to Your Table</h2>
        <article>
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random
            text. It has roots in classical Latin literature from 45 BC,
            making it over 2000 years old.
          </p>
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random
            text. It has roots in classical Latin literature from 45 BC,
            making it over 2000 years old.
          </p>
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random
            text. It has roots in classical Latin literature from 45 BC,
            making it over 2000 years old.
          </p>
        </article>
        <div class="wrap">
          <button class="discover-btn">DISCOVER MORE</button>
          <p class="ceo">CEO of Royal Restaurant</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div
          class="video-thumbnail"
          data-bs-toggle="modal"
          data-bs-target="#videoModal"
        >
          <img
            src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/1_2x.webp')}}"
            alt="Video Thumbnail"
          />
          <i class="fas fa-play play-btn"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div
    class="modal fade"
    id="videoModal"
    tabindex="-1"
    aria-labelledby="videoModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="videoModalLabel">Watch Our Story</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="ratio ratio-16x9">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/kpHBxLqkikw?si=FibWPrbB7pUgz0oB"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section End -->

<!-- Bootstrap Modal for Video -->
<div
  class="modal fade"
  id="videoModal"
  tabindex="-1"
  aria-labelledby="videoModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Our Kitchen Story</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe
            src="{{asset('userpanel/assets/img/home-image.png')}}"
            title="YouTube video"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Kitchen Recipe Video Section End  -->

<!------------------------------------------ Special Offer section start ------------------------------------------>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Specialties</span>
        <h2 class="mb-2">Our Menu</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="menu-wrap">
          <div class="heading-menu text-center ftco-animate">
            <h3>Breakfast</h3>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-1.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-2.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus border-bottom-0 d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-3.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <span class="flat flaticon-bread" style="left: 0;"></span>
          <span class="flat flaticon-breakfast" style="right: 0;"></span>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="menu-wrap">
          <div class="heading-menu text-center ftco-animate">
            <h3>Lunch</h3>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/lunch-1.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/lunch-2.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus border-bottom-0 d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/lunch-3.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <span class="flat flaticon-pizza" style="left: 0;"></span>
          <span class="flat flaticon-chicken" style="right: 0;"></span>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="menu-wrap">
          <div class="heading-menu text-center ftco-animate">
            <h3>Dinner</h3>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dinner-1.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dinner-2.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <div class="menus border-bottom-0 d-flex ftco-animate">
            <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dinner-3.jpg')}});"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3>Beef Roast Source</h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
            </div>
          </div>
          <span class="flat flaticon-omelette" style="left: 0;"></span>
          <span class="flat flaticon-burger" style="right: 0;"></span>
        </div>
      </div>

    </div>
  </div>

</section>


<!------------------------------------------- Special Offer section end ------------------------------------------->

<!----------------------------------------- Resturent Tab menu Section Start  ------------------------------------->

<!-- Dishes Start -->
<div class="our_dishes">
  <div class="container">
    <div class="heading">
      <div>
        <h2>Signature Dishes</h2>
      </div>
    </div>
    <div class="tab-buttons">
      <button class="tab-btn active" data-tab="allfood">All Food</button>
      <button class="tab-btn" data-tab="breakfast">Breakfast</button>
      <button class="tab-btn" data-tab="lunch">Lunch</button>
      <button class="tab-btn" data-tab="dinner">Dinner</button>
    </div>

    <div id="allfood" class="tab-content active">
      <!-- Daynamic code -->
    </div>

    <div id="breakfast" class="tab-content">
      <div class="row g-3 g-md-4">
        <div class="col-xl-3 col-sm-6 col-13 d-flex align-item-stretch">
          <div class="dishes_card">
            <div class="dishes">
              <img
                src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/1_2x.webp')}}"
                alt="Food 1"
              />

              <div class="view_icon">
                <a href="#" class="icon">
                  <i class="fa-solid fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="dish_details">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(5.1)</span>
              </div>
              <h3 class="dishes_name">steak with mashed potato</h3>
              <div class="price">
                <span>$149.99</span>
                <button class="order_btn">Order Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-13 d-flex align-item-stretch">
          <div class="dishes_card">
            <div class="dishes">
              <img
                src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/2_2x.webp')}}"
                alt="Food 2"
              />

              <div class="view_icon">
                <a href="#" class="icon">
                  <i class="fa-solid fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="dish_details">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(5.1)</span>
              </div>
              <h3 class="dishes_name">steak with mashed potato</h3>
              <div class="price">
                <span>$149.99</span>
                <button class="order_btn">Order Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-13 d-flex align-item-stretch">
          <div class="dishes_card">
            <div class="dishes">
              <img
                src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/3_2x.webp')}}"
                alt=""
              />

              <div class="view_icon">
                <a href="#" class="icon">
                  <i class="fa-solid fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="dish_details">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(5.1)</span>
              </div>
              <h3 class="dishes_name">steak with mashed potato</h3>
              <div class="price">
                <span>$149.99</span>
                <button class="order_btn">Order Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-13 d-flex align-item-stretch">
          <div class="dishes_card">
            <div class="dishes">
              <img
                src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/4_2x.webp')}}"
                alt=""
              />

              <div class="view_icon">
                <a href="#" class="icon">
                  <i class="fa-solid fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="dish_details">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(5.1)</span>
              </div>
              <h3 class="dishes_name">steak with mashed potato</h3>
              <div class="price">
                <span>$149.99</span>
                <button class="order_btn">Order Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="lunch" class="tab-content">
      <div class="row g-3 g-md-4">
        <div class="col-xl-3 col-sm-6 col-13 d-flex align-item-stretch">
          <div class="dishes_card">
            <div class="dishes">
              <img
                src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/5_2x.webp')}}"
                alt=""
              />

              <div class="view_icon">
                <a href="#" class="icon">
                  <i class="fa-solid fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="dish_details">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(5.1)</span>
              </div>
              <h3 class="dishes_name">steak with mashed potato</h3>
              <div class="price">
                <span>$149.99</span>
                <button class="order_btn">Order Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-13 d-flex align-item-stretch">
          <div class="dishes_card">
            <div class="dishes">
              <img
                src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/6_2x.webp')}}"
                alt=""
              />

              <div class="view_icon">
                <a href="#" class="icon">
                  <i class="fa-solid fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="dish_details">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(5.1)</span>
              </div>
              <h3 class="dishes_name">steak with mashed potato</h3>
              <div class="price">
                <span>$149.99</span>
                <button class="order_btn">Order Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="dinner" class="tab-content">
      <div class="row g-3 g-md-4">
        <div class="col-xl-3 col-sm-6 col-13 d-flex align-item-stretch">
          <div class="dishes_card">
            <div class="dishes">
              <img
                src="{{asset('userpanel/assets/img/signature-dishes-img/all-signature-dishes-img/8_2x.webp')}}"
                alt=""
              />

              <div class="view_icon">
                <a href="#" class="icon">
                  <i class="fa-solid fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="dish_details">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span>(5.1)</span>
              </div>
              <h3 class="dishes_name">steak with mashed potato</h3>
              <div class="price">
                <span>$149.99</span>
                <button class="order_btn">Order Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div id="imageModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img id="modalImage" src="" alt="Food Image" />
    </div>
  </div>
</div>
<!-- Dishes End -->
<!----------------------------------------- Resturent Tab menu Section End  ------------------------------------->

<!------------------------------------ Regervaton Section Start  ------------------------------------>

<section class="reservation-section">
  <div class="reservation-form">
    <h1>Book A Table Now</h1>
    <p>Reservation</p>
    <form action="book.table.store" method="POST">
        @csrf
      <div class="row mb-3">
        <div class="col-md-6">
          <input
            type="text"
            class="form-control"
            placeholder="Name"
            name="name"
            required
          />
        </div>
        <div class="col-md-6">
          <input
            type="text"
            class="form-control"
            name="mobile"
            placeholder="Phone Number"
            required
          />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <input
            type="date"
            id="custom-datepicker"
            name="date"
            class="form-control"
            placeholder="Select Date"
            required
          />
        </div>

        <div class="col-md-4">
          <select class="form-select" name="time_slot" required>
            <option selected>Time Slot</option>
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Evening</option>
          </select>
        </div>
        <div class="col-md-4">
          <select class="form-select" name="guest" required>
            <option selected>Occupancy</option>
            <option value="1">1 Person</option>
            <option value="2">2 Persons</option>
            <option value="4">4 Persons</option>
            <option value="more">More</option>
          </select>
        </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <textarea name="message" id="" cols="98" rows="10"></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-reserve">Reserve Now</button>
    </form>
  </div>
</section>

<!-- Regervaton Section End  -->

<!------------------------------- News and blog section start here -------------------------->

<section class="mt-5 news-blog-section">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="text-uppercase">News & Blog</h2>
      <h3 class="text-secondary">What's Happening</h3>
    </div>

    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="vlog-card">
                <img
                  src="{{asset('userpanel/assets/img/news-blog-1.png')}}"
                  class="img-fluid"
                  alt="Valentine Special"
                />
                <div class="card-body">
                  <span class="badge badge-custom">EVENTS</span>
                  <p class="card-date">February 14, 2024</p>
                  <h5 class="card-title">Valentine Special</h5>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="vlog-card">
                <img
                  src="{{asset('userpanel/assets/img/news-blog-2.png')}}"
                  class="img-fluid"
                  alt="Tortellini Pasta"
                />
                <div class="card-body">
                  <span class="badge badge-custom">RECIPE</span>
                  <p class="card-date">June 17, 2024</p>
                  <h5 class="card-title">Tortellini Pasta</h5>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="vlog-card">
                <img
                  src="{{asset('userpanel/assets/img/news-blog-3.png')}}"
                  class="img-fluid"
                  alt="Seasoning Desert"
                />
                <div class="card-body">
                  <span class="badge badge-custom">FOOD</span>
                  <span class="badge badge-custom">SHOP</span>
                  <p class="card-date">June 17, 2024</p>
                  <h5 class="card-title">Seasoning Desert</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--------------------------------- News and blog section end here -------------->

<!------------------------- Happy customer section start here ------------------------->

<section id="reviews">
  <div class="container">
    <div class="reviews-heading">
      <span>Reviews</span>
      <h1>Customer Hear What They Say!</h1>
    </div>

    <div class="row customer-slider">
      <div class="col-lg-5">
        <div class="right-section">
          <div class="customer-profiles">
            <div class="profile active" data-customer="1">
              <img
                src="{{asset('userpanel/assets/img/customer-review-img/customer-img2.jpeg')}}"
                alt="Customer 1"
              />
            </div>
            <div class="profile" data-customer="2">
              <img
                src="{{asset('userpanel/assets/img/customer-review-img/customer-img2.jpeg')}}"
                alt="Customer 2"
              />
            </div>
            <div class="profile" data-customer="3">
              <img
                src="{{asset('userpanel/assets/img/customer-review-img/customer-img2.jpeg')}}"
                alt="Customer 3"
              />
            </div>
            <div class="profile" data-customer="4">
              <img
                src="{{asset('userpanel/assets/img/customer-review-img/customer-img2.jpeg')}}"
                alt="Customer 4"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="left-section">
          <div class="navigation">
            <button class="prev">&lt;</button>
          </div>
          <div class="customer-content">
            <div class="content active" data-customer="1">
              <h3>Craig L. Villasenor</h3>
              <p>Assistant Manager</p>
              <p>
                There are many variations of passages of Lorem Ipsum
                available, There are many variations of passages of Lorem
                Ipsum available, There are many variations of passages of
                Lorem Ipsum available, There are many variations of passages
                of Lorem Ipsum available, There are many variations of
                passages of Lorem Ipsum available,
              </p>
            </div>
            <div class="content" data-customer="2">
              <h3>Jane Doe</h3>
              <p>Project Manager</p>
              <p>Another content for customer 2...</p>
            </div>
            <div class="content" data-customer="3">
              <h3>John Smith</h3>
              <p>Designer</p>
              <p>Another content for customer 3...</p>
            </div>
            <div class="content" data-customer="4">
              <h3>Sarah Connor</h3>
              <p>Engineer</p>
              <p>Another content for customer 4...</p>
            </div>
          </div>
          <div class="navigation">
            <button class="next">&gt;</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!---------------------- Happy customer section end here ---------------------->





@include('userpanel.components.footer')
@endsection

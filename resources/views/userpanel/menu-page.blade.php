@extends('userpanel.components.master')
@section('title', 'Menu Page')
@section('content')
@include('userpanel.components.header')



{{-- menu hero section start  --}}



    <!-- hero-menu-content Section -->
    <section class="hero-menu-content">
        <div class="hero-menu-content-content">
            <h1>La Maison</h1>
            <p class="tagline">Experience Culinary Excellence</p>
        </div>
    </section>

{{-- menu hero section end  --}}



    <!-- Featured Products Section -->
    <section class="featured">
        <h2>Our Signature Dishes</h2>
        <div class="featured-grid">
            <div class="featured-item">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947" alt="Beef Wellington">
                <h3>Beef Wellington</h3>
                <p>Our award-winning signature dish</p>
            </div>
            <div class="featured-item">
                <img src="https://images.unsplash.com/photo-1559847844-5315695dadae" alt="Lobster Thermidor">
                <h3>Lobster Thermidor</h3>
                <p>Fresh seafood excellence</p>
            </div>
            <div class="featured-item">
                <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307" alt="Chocolate Soufflé">
                <h3>Chocolate Soufflé</h3>
                <p>Decadent house specialty</p>
            </div>
        </div>
    </section>


    <!-- Featured Products Section End-->


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
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
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-4.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-5.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-6.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-7.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/breakfast-8.jpg')}});"></div>
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
                    <div class="menus d-flex ftco-animate">
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
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(assets/img/menu-img/lunch-4.jpg);"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/lunch-5.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/lunch-6.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/lunch-7.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/lunch-8.jpg')}});"></div>
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
                    <div class="menus d-flex ftco-animate">
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
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dinner-4.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dinner-5.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dinner-6.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dessert-3.jpg')}});"></div>
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

            <!--  -->
            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Desserts</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dessert-1.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dessert-2.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-2.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-1.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dessert-3.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dessert-3.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dessert-4.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/dessert-5.jpg')}});"></div>
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
                    <span class="flat flaticon-cupcake" style="left: 0;"></span>
                    <span class="flat flaticon-ice-cream" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Wine Card</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-1.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-2.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-3.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-4.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-5.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-6.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-7.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-8.jpg')}});"></div>
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
                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Drinks &amp; Tea</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/drink-1.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/drink-2.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/drink-3.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/drink-4.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/drink-5.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/wine-8.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/drink-6.jpg')}});"></div>
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
                        <div class="menu-img img" style="background-image: url({{asset('userpanel/assets/img/menu-img/drink-7.jpg')}});"></div>
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
                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>
        </div>
    </div>

</section>





@include('userpanel.components.footer')
@endsection

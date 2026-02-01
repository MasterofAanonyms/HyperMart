<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HyperMart | Buy smarter. Live better.</title>
    <link rel="shortcut icon" href="public/images/icon.ico" type="image/x-icon">

    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400;700&family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body>

    <?php include "public/components/navbar.php" ?>

    <div class="hero-wrapper">
        <div class="hero-slider">
            <!-- Navigation buttons removed -->

            <!-- Slide 1: Summer Style -->
            <div class="slide active" style="background-color: #fdf5f0;">
                <div class="container">
                    <div class="content">

                        <h1>Step into<br><span style="color: var(--hyper-orange);">Summer Style</span></h1>
                        <p>HyperMart Exclusive <b>Fashion Collection <br>2026.</b></p>
                        <div class="cta-group">
                            <a href="#" class="btn-primary"
                                style="background: #fff; color: #333; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">Shop
                                Details</a>
                        </div>
                    </div>
                    <img src="public/images/slide1_vectors.png" class="product-img" alt="Summer Collection">
                </div>
            </div>

            <!-- Slide 2: Electronics -->
            <div class="slide" style="background-color: #ffffffff;">
                <div class="container">
                    <div class="content">
                        <h1>Buy Smarter.<br><span style="color: var(--hyper-orange);">Live Better.</span></h1>
                        <p>Top Brand Electronics with up to <b>40% <br>Discount.</b></p>
                        <div class="cta-group">
                            <a href="#" class="btn-primary"
                                style="background: #fff; color: #333; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">Shop
                                Details</a>
                        </div>
                    </div>
                    <img src="public/images/slide2_vectors.png" class="product-img" alt="Electronics">
                </div>
            </div>

            <!-- Slide 3: App Download -->
            <div class="slide" style="background-color: #ffffff;">
                <div class="container">
                    <div class="content" style="padding-right: 0px;">
                        <div
                            style="display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 10px;">
                            <img src="public/images/logo.png" alt="HyperMart"
                                style="height: 80px; width: auto; object-fit: contain;">
                            <p
                                style="font-size: 1.4rem; color: #6b7280; font-style: italic; font-weight: 500; margin-top: 5px; margin-left: 10px;">
                                Buy smarter. Live better.</p>
                        </div>
                        <p>
                            Download the mobile app and get <b>up to 50%</b>
                            <br>
                            discount for <b>5 products</b>
                        </p>
                        <div class="cta-group">
                            <a href="#" class="btn-primary"
                                style="background: #fbbf24; color: #111; border: none; padding: 12px 35px; font-size: 1.1rem; border-radius: 50px; font-weight: 700; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">Download
                                Now</a>
                        </div>
                    </div>
                    <img src="public/images/banner3.png" class="product-img"
                        style="max-height: 480px; object-fit: contain;" alt="Mobile App">
                </div>
            </div>

            <!-- Pagination Dots -->
            <div class="slider-dots">
                <span class="dot active" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
            </div>
        </div>

        <!-- Services Section -->
        <div class="services-section">
            <div class="container services-container">
                <div class="service-item">
                    <img src="public/images/icons/delivery.png" alt="Delivery" class="service-icon">
                    <span class="service-text">Delivery guarantee</span>
                </div>
                <div class="service-divider"></div>
                <div class="service-item">
                    <img src="public/images/icons/returns.png" alt="Returns" class="service-icon">
                    <span class="service-text">Free returns</span>
                </div>
                <div class="service-divider"></div>
                <div class="service-item">
                    <img src="public/images/icons/app.png" alt="App" class="service-icon">
                    <span class="service-text">Get the HyperMart App</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals Section -->
    <section class="deals-section" style="background-color: #fff; padding: 50px 0;">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">

            <!-- Left Column: 50% Discount -->
            <div class="deal-column">
                <!-- Banner -->
                <div class="deal-banner banner-yellow">
                    <div class="banner-content">
                        <span class="banner-title">50% Discount for all these products</span>
                        <span class="banner-separator">|</span>
                        <a href="#" class="banner-link">Don't Miss this offer</a>
                    </div>
                    <span class="banner-icon">🎉</span>
                </div>

                <!-- Products Grid -->
                <div class="products-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card glow-yellow">
                        <div class="card-image-wrapper">
                            <img src="public/uploads/products/p1.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Men's CloudComfort™ Platform Slides</h3>
                            <div class="price-row">
                                <span class="old-price">Rs. 999.00</span>
                                <span class="product-price">Rs. 799.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card glow-yellow">
                        <div class="card-image-wrapper">
                            <img src="public/uploads/products/p2.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Luxury Chronograph Watch</h3>
                            <div class="price-row">
                                <span class="old-price">Rs. 999.00</span>
                                <span class="product-price">Rs. 799.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="view-more-container">
                    <a href="#" class="view-more-btn">View more →</a>
                </div>
            </div>

            <!-- Right Column: 75% Discount -->
            <div class="deal-column">
                <!-- Banner -->
                <div class="deal-banner banner-orange">
                    <div class="banner-content">
                        <span class="banner-title">75% Discount for just 5 products</span>
                        <span class="banner-subtitle">(limited stocks available)</span>
                    </div>
                    <span class="banner-icon">⚠️</span>
                </div>

                <!-- Products Grid -->
                <div class="products-grid">
                    <!-- Product Card 3 -->
                    <div class="product-card glow-orange">
                        <div class="card-image-wrapper">
                            <img src="public/uploads/products/p3.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Winter Thermal Mask</h3>
                            <div class="price-row">
                                <span class="old-price">Rs. 999.00</span>
                                <span class="product-price">Rs. 799.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card glow-orange">
                        <div class="card-image-wrapper">
                            <img src="public/uploads/products/p4.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Night Vision Cycle Wheels</h3>
                            <div class="price-row">
                                <span class="old-price">Rs. 999.00</span>
                                <span class="product-price">Rs. 799.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                                <button class="action-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="view-more-container">
                    <a href="#" class="view-more-btn">View more →</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Summer Offers Section -->
    <section class="summer-section reveal">
        <div class="container">
            <!-- Header -->
            <div class="summer-header">
                <img src="public/images/icons/coco.png" alt="Coconut Tree" class="coconut-icon">
                <h2 class="section-title">Summer Offers</h2>
                <img src="public/images/icons/coco.png" alt="Coconut Tree" class="coconut-icon">
            </div>
            <h3 class="section-subtitle">EXPLORE YOUR INTERESTS</h3>

            <!-- Category Navigation -->
            <div class="category-nav-wrapper">
                <button class="nav-btn prev">❮</button>
                <div class="category-list">
                    <a href="#" class="category-pill active">Recommended</a>
                    <a href="#" class="category-pill">Men</a>
                    <a href="#" class="category-pill">Women</a>
                    <a href="#" class="category-pill">Kids</a>
                    <a href="#" class="category-pill">Electronics</a>
                    <a href="#" class="category-pill">New Arrivals</a>
                    <a href="#" class="category-pill">Home & Kitchen</a>
                    <a href="#" class="category-pill">Sports</a>
                    <a href="#" class="category-pill">Beauty</a>
                </div>
                <button class="nav-btn next">❯</button>
            </div>

            <!-- Product Grid -->
            <div class="summer-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p5.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Men's CloudComfort™ Platform Slides</h3>
                        <p class="product-price">Rs. 799.00</p>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p6.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Men's CloudComfort™ Platform Slides </h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 999.00</span>
                            <span class="product-price">Rs. 799.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p7.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Men's CloudComfort™ Platform Slides </h3>
                        <p class="product-price">Rs. 799.00</p>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p8.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Men's CloudComfort™ Platform Slides </h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 999.00</span>
                            <span class="product-price">Rs. 799.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>

                <!-- Product 5 (Duplicate for layout) -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p9.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">CloudComfort Slides</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 999.00</span>
                            <span class="product-price">Rs. 799.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <button class="see-more-btn">See more</button>
        </div>
    </section>

    <!-- Promo Banners Section -->
    <section class="promo-banners-section reveal">
        <div class="promo-grid">
            <!-- Banner 1 -->
            <div class="promo-item">
                <img src="public/images/banner4.png" alt="Kids Clothes" class="promo-bg">
                <div class="promo-content">
                    <h3 class="promo-title">KIDS<br>CLOTHES</h3>
                    <p class="promo-discount">50%<br>OFF</p>
                    <a href="#" class="promo-btn">GET HERE</a>
                </div>
            </div>
            <!-- Banner 2 -->
            <div class="promo-item">
                <img src="public/images/banner5.png" alt="Womens Clothes" class="promo-bg">
                <div class="promo-content">
                    <h3 class="promo-title">WOMENS<br>CLOTHES</h3>
                    <p class="promo-discount">40%<br>OFF</p>
                    <a href="#" class="promo-btn">GET HERE</a>
                </div>
            </div>
            <!-- Banner 3 -->
            <div class="promo-item">
                <img src="public/images/banner6.png" alt="Footwear" class="promo-bg">
                <div class="promo-content">
                    <h3 class="promo-title">EVERY<br>FOOTWARE</h3>
                    <p class="promo-discount">75%<br>OFF</p>
                    <a href="#" class="promo-btn">GET HERE</a>
                </div>
            </div>
            <!-- Banner 4 -->
            <div class="promo-item">
                <img src="public/images/banner7.png" alt="Mens Clothes" class="promo-bg">
                <div class="promo-content">
                    <h3 class="promo-title">MENS<br>CLOTHES</h3>
                    <p class="promo-discount">50%<br>OFF</p>
                    <a href="#" class="promo-btn">GET HERE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section -->
    <section class="shop-section reveal">
        <div class="container" style="max-width: 100%; padding: 0 40px;">
            <!-- Header -->
            <div class="summer-header">
                <span style="font-size: 40px;">🛍️</span>
                <h2 class="section-title">Shop</h2>
                <span style="font-size: 40px;">🛍️</span>
            </div>
            <h3 class="section-subtitle">EXPLORE YOUR BETTER LIFE</h3>

            <div class="shop-grid">
                <!-- Product Card 1 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p10.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 1</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p11.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 2</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p12.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 3</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p13.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 4</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p14.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 5</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 6 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p15.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 6</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 7 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p16.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 7</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 8 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p8.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 8</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 9 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p1.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 9</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
                <!-- Product Card 10 -->
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="public/uploads/products/p10.png" alt="Product" class="card-img">
                        <button class="quick-view-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Quick view
                        </button>
                    </div>
                    <div class="card-details">
                        <h3 class="product-title">Premium Shop Item 10</h3>
                        <div class="price-row">
                            <span class="old-price">Rs. 1299.00</span>
                            <span class="product-price">Rs. 999.00</span>
                        </div>
                        <div class="card-actions">
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </button>
                        </div>
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <button class="see-more-btn">See more</button>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section reveal">
        <div class="container">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h3>Subscribe to our newsletter to get updates to your inbox.</h3>
                    <p>Get 20% on your first order</p>
                </div>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-col brand-col">
                    <div class="footer-logo flex ">
                        <img src="public/images/icon.ico" alt="HyperMart" style="height: 40px; margin-bottom: 20px;">
                        <h1 style="font-size: 24px; margin-left: 10px;">| Hyper🛒 Mart</h1>
                    </div>
                    <p class="footer-desc">This project is developed primarily for learning high-performance online
                        marketplace using modern software engineering practices.</p>
                </div>
                <!-- Quick Links -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Customer Service -->
                <div class="footer-col">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li style="display: flex; gap: 10px; align-items: flex-start;">
                            <span>📍</span>
                            <span>123 Shopping Ave, <br>Retail City, RC 54321</span>
                        </li>
                        <li style="display: flex; gap: 10px; align-items: center;">
                            <span>📧</span>
                            <span>support@hypermart.com</span>
                        </li>
                        <li style="display: flex; gap: 10px; align-items: center;">
                            <span>📞</span>
                            <span>+1 234 567 890</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 <a href="#" class="text-decoration-none hover:text-yellow-500">HyperMart</a>. All rights
                    reserved.</p>
                <div class="payment-methods">
                    <span style="font-size: 12px;">Credit/Debit Cards</span>
                    <span style="font-size: 12px;">PayPal</span>
                    <span style="font-size: 12px;">Bank Transfer</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="public/js/animate.js"></script>
</body>

</html>
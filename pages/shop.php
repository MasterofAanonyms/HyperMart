<?php
// pages/shop.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | HyperMart</title>
    <link rel="shortcut icon" href="../public/images/icon.ico" type="image/x-icon">

    <!-- Using same CSS structure as index.php -->
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400;700&family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            yellow: '#FDB913',
                            orange: '#ff9900',
                            dark: '#1A1A1A',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfcfc;
        }

        /* Shop page specific layout */
        .shop-layout {
            display: flex;
            gap: 30px;
            padding: 40px 0;
            max-width: 1400px;
            margin: 0 auto;
        }

        .shop-sidebar {
            width: 250px;
            flex-shrink: 0;
            background: #fff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            height: fit-content;
        }

        .shop-main {
            flex: 1;
        }

        /* Sidebar Elements */
        .filter-section {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #f3f4f6;
        }

        .filter-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .filter-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 16px;
            font-family: 'Outfit', sans-serif;
        }

        .filter-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .filter-list li {
            margin-bottom: 12px;
        }

        .filter-label {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #4b5563;
            cursor: pointer;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        .filter-label:hover {
            color: #ff9900;
        }

        .filter-checkbox {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            accent-color: #ff9900;
            cursor: pointer;
        }

        .price-range {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .price-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            outline: none;
            font-size: 0.9rem;
        }

        .price-input:focus {
            border-color: #ff9900;
        }

        /* Adjust grid for the remaining space */
        .shop-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        /* Page Header
        .shop-page-header {
            background: linear-gradient(135deg, #ffffffff 0%, #ffffffff 100%);
            padding: 40px 0;
            text-align: center;
            border-bottom: 1px solid #ffffffff;
        } */

        .shop-page-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #111;
            font-family: 'Alexandria', sans-serif;
        }

        .breadcrumb {
            margin-top: 10px;
            color: #6b7280;
            font-size: 0.95rem;
        }

        .breadcrumb a {
            color: #ff9900;
            text-decoration: none;
        }

        /* Mobile fixes */
        @media (max-width: 1200px) {
            .shop-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 992px) {
            .shop-layout {
                flex-direction: column;
            }

            .shop-sidebar {
                width: 100%;
            }

            .shop-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .shop-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .shop-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <?php include '../public/components/navbar2.php'; ?>

    <!-- Page Header -->
    <!-- <div class="shop-page-header border-b border-gray-200"> -->

    <!-- Offer Banner Slider -->
    <div class="relative overflow-hidden w-full bg-gray-100" style="height: 500px;">
        <div id="shop-slider" class="flex transition-transform duration-500 ease-in-out h-full"
            style="transform: translateX(0%);">
            <!-- Slide 1 -->
            <div class="min-w-full h-full relative">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/002/658/593/small/close-up-of-colorful-t-shirts-on-hangers-photo.jpg"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                    <div class="text-white text-center">
                        <h2 class="text-4xl font-bold font-display mb-2">🏷️ Summer Sale</h2>
                        <p class="text-xl">Up to 50% Off on Selected Items</p>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="min-w-full h-full relative">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070&auto=format&fit=crop"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                    <div class="text-white text-center">
                        <h2 class="text-4xl font-bold font-display mb-2">Mega Discounts</h2>
                        <p class="text-xl">Premium Brands at Unbeatable Prices</p>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="min-w-full h-full relative">
                <!-- Promo Banners Section -->
                <section class="promo-banners-section w-full h-full">
                    <div class="promo-grid" style="height: 100%;">
                        <!-- Banner 1 -->
                        <div class="promo-item">
                            <img src="../public/images/banner4.png" alt="Kids Clothes" class="promo-bg">
                            <div class="promo-content">
                                <h3 class="promo-title">KIDS<br>CLOTHES</h3>
                                <p class="promo-discount">50%<br>OFF</p>
                                <a href="#" class="promo-btn">GET HERE</a>
                            </div>
                        </div>
                        <!-- Banner 2 -->
                        <div class="promo-item">
                            <img src="../public/images/banner5.png" alt="Womens Clothes" class="promo-bg">
                            <div class="promo-content">
                                <h3 class="promo-title">WOMENS<br>CLOTHES</h3>
                                <p class="promo-discount">40%<br>OFF</p>
                                <a href="#" class="promo-btn">GET HERE</a>
                            </div>
                        </div>
                        <!-- Banner 3 -->
                        <div class="promo-item">
                            <img src="../public/images/banner6.png" alt="Footwear" class="promo-bg">
                            <div class="promo-content">
                                <h3 class="promo-title">EVERY<br>FOOTWARE</h3>
                                <p class="promo-discount">75%<br>OFF</p>
                                <a href="#" class="promo-btn">GET HERE</a>
                            </div>
                        </div>
                        <!-- Banner 4 -->
                        <div class="promo-item">
                            <img src="../public/images/banner7.png" alt="Mens Clothes" class="promo-bg">
                            <div class="promo-content">
                                <h3 class="promo-title">MENS<br>CLOTHES</h3>
                                <p class="promo-discount">50%<br>OFF</p>
                                <a href="#" class="promo-btn">GET HERE</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Controls -->
        <button onclick="moveShopSlide(-1)"
            class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/30 hover:bg-white/50 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-colors border border-white/40">❮</button>
        <button onclick="moveShopSlide(1)"
            class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white/30 hover:bg-white/50 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-colors border border-white/40">❯</button>

        <!-- Navigation Dots -->
        <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2 z-10" id="shop-slider-dots">
            <button class="w-3 h-3 rounded-full bg-white opacity-100 transition-opacity"
                onclick="goToShopSlide(0)"></button>
            <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity"
                onclick="goToShopSlide(1)"></button>
            <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity"
                onclick="goToShopSlide(2)"></button>
        </div>
    </div>
    </div>

    <!-- Main Layout -->
    <div class="container px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="shop-layout">

            <!-- Sidebar / Filters -->
            <div class="shop-sidebar">

                <div class="filter-section">
                    <h3 class="filter-title">Advanced Search</h3>
                    <div class="relative mb-3 flex items-center">
                        <svg class="absolute left-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="Search products..." class="price-input pl-10 w-full"
                            style="padding-left: 2.5rem; padding-right: 10px;">
                    </div>
                    <div class="mb-3">
                        <select class="price-input w-full text-gray-600 outline-none">
                            <option value="">Select Offer</option>
                            <option value="50">50% Off & More</option>
                            <option value="40">40% Off & More</option>
                            <option value="buy1get1">Buy 1 Get 1 Free</option>
                            <option value="clearance">Clearance Sale</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="price-input w-full text-gray-600 outline-none">
                            <option value="">Select Brand</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                            <option value="puma">Puma</option>
                            <option value="samsung">Samsung</option>
                            <option value="apple">Apple</option>
                            <option value="sony">Sony</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="price-input w-full text-gray-600 outline-none">
                            <option value="">Select Color</option>
                            <option value="black">Black</option>
                            <option value="white">White</option>
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            <option value="green">Green</option>
                            <option value="yellow">Yellow</option>
                        </select>
                    </div>
                    <button
                        class="w-full mt-2 bg-brand-orange text-white font-semibold py-2 rounded-lg hover:bg-orange-600 transition-colors">Search</button>
                </div>

                <div class="filter-section">
                    <h3 class="filter-title">Categories</h3>
                    <ul class="filter-list">
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox" checked> All
                                Products</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox"> Men
                                Fashion</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox"> Women
                                Fashion</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox">
                                Electronics</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox"> Home &
                                Garden</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox"> Kids &
                                Toys</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox"> Sports &
                                Outdoor</label></li>
                    </ul>
                </div>

                <div class="filter-section">
                    <h3 class="filter-title">Price Range</h3>
                    <div class="price-range">
                        <input type="number" placeholder="Min" class="price-input">
                        <span class="text-gray-400">-</span>
                        <input type="number" placeholder="Max" class="price-input">
                    </div>
                    <button
                        class="w-full mt-3 bg-gray-900 text-white font-semibold py-2 rounded-lg hover:bg-black transition-colors">Apply</button>
                </div>

                <div class="filter-section">
                    <h3 class="filter-title">Availability</h3>
                    <ul class="filter-list">
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox" checked> In
                                Stock</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox"> Pre
                                Order</label></li>
                        <li><label class="filter-label"><input type="checkbox" class="filter-checkbox"> Out of
                                Stock</label></li>
                    </ul>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="shop-main">

                <div class="flex justify-between items-center mb-6">
                    <p class="text-gray-500 font-medium">Showing 1–12 of 144 results</p>
                    <select
                        class="border border-gray-300 rounded-lg px-4 py-2 text-gray-700 outline-none focus:border-brand-orange">
                        <option>Default Sorting</option>
                        <option>Sort by popularity</option>
                        <option>Sort by new arrivals</option>
                        <option>Sort by price: low to high</option>
                        <option>Sort by price: high to low</option>
                    </select>
                </div>

                <div class="shop-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p5.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Men's CloudComfort™ Platform Slides</h3>
                            <p class="product-price" style="color:#b45309; font-weight:800;">Rs. 799.00</p>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p6.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Premium Fashion Sneakers</h3>
                            <div class="price-row" style="margin-bottom: 5px;">
                                <span class="old-price">Rs. 2499.00</span>
                                <span class="product-price" style="color:#b45309; font-weight:800;">Rs. 1999.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p7.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Wireless Noise-cancelling Headphones</h3>
                            <p class="product-price" style="color:#b45309; font-weight:800;">Rs. 3499.00</p>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p8.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Classic Leather Watch</h3>
                            <div class="price-row" style="margin-bottom: 5px;">
                                <span class="old-price">Rs. 5999.00</span>
                                <span class="product-price" style="color:#b45309; font-weight:800;">Rs. 4499.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p9.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Comfort Running Shoes</h3>
                            <div class="price-row" style="margin-bottom: 5px;">
                                <span class="old-price">Rs. 3299.00</span>
                                <span class="product-price" style="color:#b45309; font-weight:800;">Rs. 2499.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p10.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Men's Casual Polo Shirt</h3>
                            <p class="product-price" style="color:#b45309; font-weight:800;">Rs. 1299.00</p>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 7 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p11.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Women's Summer Dress</h3>
                            <div class="price-row" style="margin-bottom: 5px;">
                                <span class="old-price">Rs. 2199.00</span>
                                <span class="product-price" style="color:#b45309; font-weight:800;">Rs. 1899.00</span>
                            </div>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <!-- Product Card 8 -->
                    <div class="product-card">
                        <div class="card-image-wrapper">
                            <img src="../public/uploads/products/p12.png" alt="Product" class="card-img">
                            <button class="quick-view-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg> Quick view
                            </button>
                        </div>
                        <div class="card-details">
                            <h3 class="product-title">Designer Sunglasses</h3>
                            <p class="product-price" style="color:#b45309; font-weight:800;">Rs. 1499.00</p>
                            <div class="card-actions">
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg></button>
                                <button class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg></button>
                            </div>
                            <button class="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-12 gap-2">
                    <button
                        class="w-10 h-10 rounded-full flex justify-center items-center border border-gray-300 text-gray-400 cursor-not-allowed">❮</button>
                    <button
                        class="w-10 h-10 rounded-full flex justify-center items-center font-bold bg-brand-orange text-white">1</button>
                    <button
                        class="w-10 h-10 rounded-full flex justify-center items-center font-bold text-gray-600 hover:bg-gray-100 transition-colors">2</button>
                    <button
                        class="w-10 h-10 rounded-full flex justify-center items-center font-bold text-gray-600 hover:bg-gray-100 transition-colors">3</button>
                    <button
                        class="w-10 h-10 rounded-full flex justify-center items-center font-bold text-gray-600 hover:bg-gray-100 transition-colors">4</button>
                    <button
                        class="w-10 h-10 rounded-full flex justify-center items-center border border-gray-300 text-gray-600 hover:bg-gray-100 transition-colors">❯</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer derived from faq.php -->
    <footer class="text-center py-8 mt-12 border-t border-gray-200 bg-white">
        <p class="mb-2 text-gray-700">&copy; 2026 <strong>HyperMart</strong>. All rights reserved.</p>
        <div class="flex justify-center gap-4 text-sm text-gray-600">
            <a href="privacy-policy.php" class="text-brand-orange hover:underline">Privacy Policy</a>
            <span>|</span>
            <a href="terms-of-service.php" class="text-brand-orange hover:underline">Terms of Service</a>
            <span>|</span>
            <a href="refund-policy.php" class="text-brand-orange hover:underline">Refund Policy</a>
            <span>|</span>
            <a href="faq.php" class="text-brand-orange hover:underline">FAQ</a>
        </div>
    </footer>

    <script>
        let currentShopSlide = 0;
        const totalShopSlides = 3;

        function updateShopSlider() {
            const slider = document.getElementById('shop-slider');
            if (slider) {
                slider.style.transform = `translateX(-${currentShopSlide * 100}%)`;
            }
            const dots = document.querySelectorAll('#shop-slider-dots button');
            dots.forEach((dot, index) => {
                if (index === currentShopSlide) {
                    dot.classList.remove('opacity-50');
                    dot.classList.add('opacity-100');
                } else {
                    dot.classList.add('opacity-50');
                    dot.classList.remove('opacity-100');
                }
            });
        }

        function moveShopSlide(dir) {
            currentShopSlide = (currentShopSlide + dir + totalShopSlides) % totalShopSlides;
            updateShopSlider();
        }

        function goToShopSlide(index) {
            currentShopSlide = index;
            updateShopSlider();
        }

        // Auto slide
        setInterval(() => {
            moveShopSlide(1);
        }, 5000);
    </script>
</body>

</html>
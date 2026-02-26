<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Outfit', 'sans-serif'],
                },
                colors: {
                    brand: {
                        yellow: '#FDB913',
                        orange: '#F58634',
                        dark: '#1A1A1A',
                    }
                },
                boxShadow: {
                    'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                    'inner-light': 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.01)',
                }
            }
        }
    }
</script>

<div class="w-full">

    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 z-30 bg-white flex flex-col gap-6 w-full p-4 sm:p-8">

        <!-- Top Row: Logo, Links, Profile/Cart -->
        <div class="flex flex-row items-center justify-between gap-6 lg:gap-0">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="public/images/logo.png" alt="HyperMart" class="h-8 sm:h-12 lg:h-16 w-auto object-contain">
            </div>

            <!-- Navigation Links (Hidden on Mobile, Visible on LG) -->
            <!-- Removed underline effect, simple color change on hover -->
            <div class="hidden lg:flex items-center gap-8 xl:gap-12">
                <a href="#"
                    class="relative group text-gray-900 font-bold text-lg hover:text-brand-yellow transition-colors">
                    Home
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-yellow transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#shop"
                    class="relative group text-gray-900 font-bold text-lg hover:text-brand-yellow transition-colors">
                    Shop
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-yellow transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#offer"
                    class="relative group font-bold text-lg hover:text-brand-yellow transition-colors blink-soft">
                    Leastest offers🏝️
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-brand-yellow transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- Mobile Menu Button & Right Icons -->
            <div class="flex items-center gap-4 sm:gap-6 w-auto justify-end">
                <!-- Mobile Menu Icon -->
                <button class="lg:hidden text-gray-700 hover:text-brand-yellow">
                    <img src="public/images/icons/menu.svg" alt="Menu" class="w-8 h-8">
                </button>

                <!-- User Profile Dropdown -->
                <div class="relative group dropdown-container hidden lg:block">
                    <button id="user-menu-btn"
                        class="text-black hover:text-brand-yellow transition-transform hover:scale-110 duration-200 p-2 rounded-full hover:bg-gray-50">
                        <img src="public/images/icons/user.svg" alt="User" class="w-8 h-8 sm:w-9 sm:h-9">
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="user-dropdown"
                        class="absolute right-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-soft p-2 hidden z-50 border border-gray-100 transform origin-top-right transition-all duration-200">
                        <ul class="flex flex-col text-gray-700">
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <img src="public/images/icons/user_outline.svg"
                                        onerror="this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZT0iY3VycmVudENvbG9yIiNsYXNzPSJ3LTYgaC02Ij48cGF0aCBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGQ9Ik0xNy45ODIgMTguNzI1QTEyLjQwNSAxMi40MDUgMCAwMSAxMiAyMS43NWFhMTIuNDA1IDEyLjQwNSAwIDAxLTUuOTgyLTMuMDI1bS0uNjUyLS4zNjVhMTIuNzkzIDEyLjc5MyAwIDAxLTIuOTM3LTIuMzEgbS4zNjUtLjY1MmExMi44MzEgMTIuODMxIDAgMDEtMS4wODItLjUwNW0xLjk5LTEuOTlhMTEuNzI1IDExLjcyNSAwIDAxNC4wNjItMy4wMTlNMjFkNy41IDEuNWEuNzUuNzUgMCAwMS43NS43NWMwIDUuMDU2LTIuMzgzIDkuNTU1LTYuMDg0IDEyLjQzNmMtMy4zIDIuNTctNy4yNTQgMi4xMjYtOS42NyAxLjE0NWEuNzUuNzUgMCAwMS0uMjktLjIzbC0uMjctLjM5MyIgLz48L3N2Zz4='"
                                        alt="" class="w-5 h-5 opacity-70">
                                    Your Profile
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>
                                    Your Orders
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                    </svg>
                                    Your reviews
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                                    </svg>
                                    Coupon & offers
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    Account & security
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                    Watchlist
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-70">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Browsing history
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="relative group dropdown-container hidden lg:block">
                    <button id="noti-menu-btn"
                        class="text-black hover:text-brand-yellow transition-transform hover:scale-110 duration-200 p-2 rounded-full hover:bg-gray-50 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                            stroke="currentColor" class="w-8 h-8 sm:w-9 sm:h-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                        <span
                            class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white animate-pulse"></span>
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="noti-dropdown"
                        class="absolute right-0 top-full mt-2 w-80 bg-white rounded-2xl shadow-soft p-4 hidden z-50 border border-gray-100 transform origin-top-right transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-bold text-gray-800 text-lg">Notifications</h3>
                            <button class="text-xs text-brand-orange font-medium hover:underline">Mark all as
                                read</button>
                        </div>
                        <ul class="flex flex-col gap-3 max-h-64 overflow-y-auto pr-1 custom-scrollbar">
                            <li class="flex gap-3 hover:bg-gray-50 p-2 rounded-xl transition-colors cursor-pointer">
                                <div
                                    class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H4.5a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 0114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Order Shipped</p>
                                    <p class="text-xs text-gray-500 line-clamp-2">Your order #12345 has been shipped and
                                        is on its way!</p>
                                    <p class="text-[10px] text-gray-400 mt-1">2 mins ago</p>
                                </div>
                            </li>
                            <li class="flex gap-3 hover:bg-gray-50 p-2 rounded-xl transition-colors cursor-pointer">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center text-green-500 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Order Delivered</p>
                                    <p class="text-xs text-gray-500 line-clamp-2">Your package has been delivered
                                        successfully.</p>
                                    <p class="text-[10px] text-gray-400 mt-1">1 hour ago</p>
                                </div>
                            </li>
                            <li class="flex gap-3 hover:bg-gray-50 p-2 rounded-xl transition-colors cursor-pointer">
                                <div
                                    class="w-10 h-10 rounded-full bg-brand-yellow/10 flex items-center justify-center text-brand-orange shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H4.5a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 0114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Flash Sale Alert!</p>
                                    <p class="text-xs text-gray-500 line-clamp-2">50% off on all electronics for the
                                        next 4 hours.</p>
                                    <p class="text-[10px] text-gray-400 mt-1">3 hours ago</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <button
                    class="relative text-black hover:text-brand-yellow transition-transform hover:scale-110 duration-200 p-2 rounded-full hover:bg-gray-50 group">
                    <img src="public/images/icons/cart.svg" alt="Cart" class="w-8 h-8 sm:w-9 sm:h-9">
                    <span
                        class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full border border-white group-hover:animate-ping"></span>
                </button>
            </div>
        </div>

        <!-- Bottom Row: Search & Action Pills -->
        <div
            class="flex flex-row items-center justify-between gap-2 w-full overflow-x-auto sm:overflow-visible no-scrollbar">

            <!-- Left Action Group -->
            <div class="flex flex-row items-center gap-1 sm:gap-2 flex-shrink-0">
                <button
                    class="hidden lg:flex shadow-md bg-white border border-gray-100 hover:border-gray-200 text-gray-800 font-medium py-2.5 px-2 sm:px-4 rounded-full flex items-center gap-2 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 group whitespace-nowrap text-sm sm:text-base">
                    <span
                        class="bg-black text-white p-1 rounded-full group-hover:rotate-12 transition-transform shadow-sm flex items-center justify-center">
                        <img src="public/images/icons/big_deals.svg" alt="Big Deals" class="w-3 h-3 invert">
                    </span>
                    Big Deals
                </button>
                <button
                    class="hidden lg:flex shadow-md bg-white border border-gray-100 hover:border-gray-200 text-gray-800 font-medium py-2.5 px-2 sm:px-4 rounded-full flex items-center gap-2 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 group whitespace-nowrap text-sm sm:text-base">
                    <span
                        class="bg-black text-white p-1 rounded-full group-hover:rotate-12 transition-transform shadow-sm flex items-center justify-center">
                        <img src="public/images/icons/gift_cards.svg" alt="Gift Cards" class="w-3 h-3 invert">
                    </span>
                    Gift cards
                </button>
                <div class="relative group dropdown-container">
                    <button id="category-menu-btn"
                        class="shadow-md z-40 bg-white border border-gray-100 hover:border-gray-200 text-gray-800 font-medium py-2.5 px-2 sm:px-4 rounded-full flex items-center gap-2 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 hover:bg-gray-50 whitespace-nowrap text-sm sm:text-base">
                        Categories
                        <img src="public/images/icons/categories.svg" alt="Categories"
                            class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180">
                    </button>
                    <!-- Category Dropdown Menu -->
                    <div id="category-dropdown"
                        class="absolute left-0 top-full mt-2 w-56 bg-white rounded-2xl shadow-soft p-2 hidden z-50 border border-gray-100 origin-top-left transition-all duration-200">
                        <ul class="flex flex-col text-gray-700">
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-gray-50 rounded-xl transition-colors">
                                    <span
                                        class="w-6 h-6 flex items-center justify-center bg-blue-50 text-blue-500 rounded-lg text-xs">📱</span>
                                    Electronics
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-gray-50 rounded-xl transition-colors">
                                    <span
                                        class="w-6 h-6 flex items-center justify-center bg-pink-50 text-pink-500 rounded-lg text-xs">👗</span>
                                    Fashion
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-gray-50 rounded-xl transition-colors">
                                    <span
                                        class="w-6 h-6 flex items-center justify-center bg-green-50 text-green-500 rounded-lg text-xs">🏡</span>
                                    Home & Garden
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-gray-50 rounded-xl transition-colors">
                                    <span
                                        class="w-6 h-6 flex items-center justify-center bg-orange-50 text-orange-500 rounded-lg text-xs">⚽</span>
                                    Sports
                                </a></li>
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-gray-50 rounded-xl transition-colors">
                                    <span
                                        class="w-6 h-6 flex items-center justify-center bg-purple-50 text-purple-500 rounded-lg text-xs">🧸</span>
                                    Toys & Hobbies
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="flex-grow-[2]  min-w-[200px]">
                <div class="relative group w-full">
                    <input type="text" placeholder="Search here..."
                        class="shadow-md z-40 w-full bg-white border border-gray-100 hover:border-gray-200 text-gray-700 rounded-full py-3 px-6 pl-6 pr-14 focus:outline-none focus:ring-2 focus:ring-brand-yellow/50 focus:bg-white transition-all shadow-inner-light placeholder-gray-300 font-medium h-12">
                    <button
                        class="absolute right-1 top-1 bottom-1 w-10 h-10 bg-transparent flex items-center justify-center rounded-full text-gray-700 hover:bg-gray-200 transition-colors">
                        <img src=" public/images/icons/search.svg" alt="Search" class="w-6 h-6 stroke-2 p-0.5">
                    </button>
                </div>
            </div>

            <!-- Right Action Group -->
            <div class="hidden lg:flex flex-row items-center gap-1 sm:gap-2 flex-shrink-0">
                <button
                    class="shadow-md bg-white border border-gray-100 hover:border-gray-200 text-gray-800 font-medium py-2.5 px-2 sm:px-4 rounded-full flex items-center gap-2 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 group whitespace-nowrap text-sm sm:text-base">
                    <span
                        class="text-gray-900 group-hover:scale-110 transition-transform flex items-center justify-center">
                        <img src="public/images/icons/todays_deals.svg" alt="Today's Deals" class="w-5 h-5">
                    </span>
                    Today's Deals
                </button>
                <button
                    class="shadow-md bg-white border border-gray-100 hover:border-gray-200 text-gray-800 font-medium py-2.5 px-2 sm:px-4 rounded-full flex items-center gap-2 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200 group whitespace-nowrap text-sm sm:text-base">
                    <span
                        class="text-gray-900 group-hover:-rotate-12 transition-transform flex items-center justify-center">
                        <img src="public/images/icons/sell.svg" alt="Sell" class="w-5 h-5">
                    </span>
                    Sell On HyperMart
                </button>
            </div>
        </div>
    </nav>
</div>

<!-- Mobile Menu Overlay & Drawer -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-40 hidden opacity-0 transition-opacity duration-300">
</div>

<div id="mobile-menu-drawer"
    class="fixed top-0 left-0 h-full w-[80%] sm:w-[350px] bg-white z-50 transform -translate-x-full transition-transform duration-300 shadow-2xl flex flex-col">
    <div class="p-6 flex items-center justify-between border-b border-gray-100">
        <img src="public/images/logo.png" alt="HyperMart" class="h-10 w-auto object-contain">
        <button id="close-mobile-menu"
            class="text-gray-500 hover:text-gray-800 p-2 rounded-full hover:bg-gray-100 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto py-6 px-4">
        <nav class="flex flex-col gap-2">
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all">
                Home
            </a>
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all">
                Shop
            </a>
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all">
                New arrivals
            </a>
            <div class="h-px bg-gray-100 my-2 mx-4"></div>
            <!-- Added Mobile Apps -->
            <!-- Mobile Notifications Accordion -->
            <div class="flex flex-col">
                <button id="mobile-noti-btn"
                    class="flex items-center justify-between px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all w-full group">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 object-contain">
                            <path fill-rule="evenodd"
                                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9c.46.557.97 1.054 1.516 1.482l.008.006.009.006a6.004 6.004 0 01-3.066 0l.009-.006.008-.006a12.15 12.15 0 011.516-1.482z"
                                clip-rule="evenodd" />
                        </svg>
                        Notifications
                        <span class="bg-red-500 text-white text-[10px] px-1.5 py-0.5 rounded-full ml-1">3</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor"
                        class="w-5 h-5 transition-transform duration-200 group-aria-expanded:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <!-- Sub-menu -->
                <div id="mobile-noti-menu" class="hidden flex-col pl-4 gap-1 mt-1 border-l-2 border-gray-100 ml-6">
                    <!-- Items copied from desktop for mobile -->
                    <div class="flex gap-3 hover:bg-gray-50 p-2 rounded-xl transition-colors cursor-pointer">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H4.5a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 0114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-gray-800">Order Shipped</p>
                            <p class="text-xs text-gray-500 line-clamp-1">Your order #12345 has been shipped...</p>
                        </div>
                    </div>
                    <div class="flex gap-3 hover:bg-gray-50 p-2 rounded-xl transition-colors cursor-pointer">
                        <div
                            class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-500 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-gray-800">Order Delivered</p>
                            <p class="text-xs text-gray-500 line-clamp-1">Your package has been delivered...</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all">
                <img src="public/images/icons/big_deals.svg" alt="Big Deals" class="w-6 h-6 object-contain">
                Big Deals
            </a>
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all">
                <img src="public/images/icons/gift_cards.svg" alt="Gift Cards" class="w-6 h-6 object-contain">
                Gift Cards
            </a>
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all">
                <img src="public/images/icons/todays_deals.svg" alt="Today's Deals" class="w-6 h-6 object-contain">
                Today's Deals
            </a>
            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all">
                <img src="public/images/icons/sell.svg" alt="Sell" class="w-6 h-6 object-contain">
                Sell On HyperMart
            </a>
        </nav>
    </div>

    <div class="p-6 border-t border-gray-100 bg-gray-50">
        <!-- Mobile User Accordion (Moved to Footer) -->
        <div class="flex flex-col mb-4">
            <button id="mobile-user-btn"
                class="flex items-center justify-between px-4 py-3 rounded-xl text-gray-800 font-bold text-lg hover:bg-brand-yellow/10 hover:text-brand-yellow transition-all w-full group bg-white border border-gray-200 shadow-sm">
                <div class="flex items-center gap-3">
                    <img src="public/images/icons/user.svg" alt="User" class="w-6 h-6 object-contain">
                    Profile
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor"
                    class="w-5 h-5 transition-transform duration-200 group-aria-expanded:rotate-180">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <!-- Sub-menu -->
            <div id="mobile-user-menu" class="hidden flex-col pl-4 gap-1 mt-1 border-l-2 border-gray-100 ml-6">
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 font-medium hover:text-brand-yellow hover:bg-gray-50 transition-all">
                    Your Profile
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 font-medium hover:text-brand-yellow hover:bg-gray-50 transition-all">
                    Your Orders
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 font-medium hover:text-brand-yellow hover:bg-gray-50 transition-all">
                    Your reviews
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 font-medium hover:text-brand-yellow hover:bg-gray-50 transition-all">
                    Coupon & offers
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 font-medium hover:text-brand-yellow hover:bg-gray-50 transition-all">
                    Account & security
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 font-medium hover:text-brand-yellow hover:bg-gray-50 transition-all">
                    Watchlist
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2.5 rounded-lg text-gray-600 font-medium hover:text-brand-yellow hover:bg-gray-50 transition-all">
                    Browsing history
                </a>
            </div>
        </div>

        <button
            class="hidden w-full bg-brand-dark text-white font-bold py-3 rounded-xl hover:bg-black transition-colors mb-3 flex items-center justify-center gap-2">
            <img src="public/images/icons/user.svg" alt="User" class="w-5 h-5 invert">
            Sign In
        </button>
        <p class="text-center text-sm text-gray-500">© 2026 HyperMart</p>
    </div>
</div>
<!-- public/components/navbar2.php -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="../index.php" class="flex items-center">
                <img src="../public/images/logo.png" alt="HyperMart" class="h-10">
            </a>

            <!-- Expanded Nav Links for Shop -->
            <div class="hidden md:flex space-x-8">
                <a href="../index.php"
                    class="text-gray-900 font-semibold hover:text-brand-orange transition-colors">Home</a>
                <a href="shop.php" class="text-brand-orange font-bold border-b-2 border-brand-orange pb-1">Shop</a>
                <a href="../index.php#summer-offers"
                    class="text-gray-900 font-semibold hover:text-brand-orange transition-colors">Summer Offers</a>
            </div>

            <div class="flex items-center gap-4">
                <!-- User Profile Dropdown -->
                <div class="relative group dropdown-container hidden lg:block">
                    <button id="user-menu-btn"
                        class="text-black hover:text-brand-yellow transition-transform hover:scale-110 duration-200 p-2 rounded-full hover:bg-gray-50">
                        <img src="../public/images/icons/user.svg" alt="User" class="w-8 h-8 sm:w-9 sm:h-9">
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="user-dropdown"
                        class="absolute right-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-soft p-2 hidden z-50 border border-gray-100 transform origin-top-right transition-all duration-200 group-hover:block">
                        <ul class="flex flex-col text-gray-700">
                            <li><a href="#"
                                    class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-xl transition-colors font-medium">
                                    <img src="../public/images/icons/user_outline.svg"
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
                                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
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
                <!-- cart simple icon -->
                <button
                    class="relative text-black hover:text-brand-yellow transition-transform hover:scale-110 duration-200 p-2 rounded-full hover:bg-gray-50 group">
                    <img src="../public/images/icons/cart.svg" alt="Cart" class="w-8 h-8 sm:w-9 sm:h-9">
                    <span
                        class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full border border-white group-hover:animate-ping"></span>
                </button>
            </div>
        </div>
    </div>
</nav>
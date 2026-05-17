<!-- Enhanced Ecommerce Navbar with Purple Neon Theme -->
<nav x-data="{ wishlistOpen: false, cartOpen: false }" class="sticky top-0 z-50 bg-gradient-to-r from-slate-950 via-purple-950 to-slate-950 border-b border-purple-500/30 backdrop-blur-md shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Logo Section -->
            <div class="flex-shrink-0 flex items-center gap-3 group cursor-pointer">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative bg-slate-950 px-3 py-2 rounded-lg">
                        <svg class="w-6 h-6 text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-white tracking-wider">STORE</h1>
                    <p class="text-xs text-purple-400 font-medium">Premium</p>
                </div>
            </div>

            <!-- Desktop Search Bar -->
            <div class="hidden md:flex flex-1 max-w-md mx-8">
                <div class="w-full relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg blur opacity-0 group-focus-within:opacity-40 transition duration-300"></div>
                    <input
                        type="text"
                        placeholder="Search products..."
                        class="relative w-full bg-slate-900 text-white placeholder-gray-400 px-4 py-2.5 rounded-lg border border-purple-500/30 focus:border-purple-400 focus:outline-none focus:ring-1 focus:ring-purple-400/50 transition"
                    />
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 text-purple-400 hover:text-purple-300 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Desktop Navigation Menu -->
            <div class="hidden lg:flex items-center gap-1">
                <nav class="flex gap-0">
                    <a href="/" class="px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 relative group transition">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/products" class="px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 relative group transition">
                        Products
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/category" class="px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 relative group transition">
                        Categories
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#" class="px-3 py-2 text-sm font-medium text-gray-300 hover:text-purple-300 relative group transition">
                        Testimonials
                        <span class="absolute bottom-0 left-0 w-0.5 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </nav>
            </div>

            <!-- Right Side Icons -->
            <div class="flex items-center gap-2 sm:gap-4">
                
                <!-- Search Icon (Mobile) -->
                <button class="lg:hidden p-2 text-gray-300 hover:text-purple-300 transition relative group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <div class="absolute inset-0 bg-purple-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition"></div>
                </button>

                <!-- Wishlist -->
                <button @click="wishlistOpen = true" class="p-2 text-gray-300 hover:text-pink-400 transition relative group hidden sm:block">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-linear-to-r from-pink-500 to-red-500 text-white text-xs font-bold rounded-full flex items-center justify-center">0</span>
                    <div class="absolute inset-0 bg-pink-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition"></div>
                </button>

                <div 
                x-show="wishlistOpen"
                x-transition
                class="fixed min-h-dvh inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50"
                style="display: none;"
            >
                <!-- Modal Box -->
                <div 
                    @click.away="wishlistOpen = false"
                    class="bg-slate-900 border border-purple-500/30 rounded-xl w-[90%] max-w-md shadow-2xl"
                >
                    <!-- Header -->
                    <div class="flex justify-between items-center px-5 py-3 border-b border-purple-500/20">
                        <h2 class="text-white font-semibold">Wishlist</h2>
                        <button @click="wishlistOpen = false" class="text-gray-400 hover:text-red-400 text-xl">
                            &times;
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="p-5 text-gray-300 text-sm">
                        <p>Your wishlist is empty 🛒</p>
                    </div>

                    <!-- Footer -->
                    <div class="px-5 py-3 border-t border-purple-500/20 text-right">
                        <button 
                            @click="wishlistOpen = false"
                            class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg text-sm transition">
                            Close
                        </button>
                    </div>
                </div>
            </div>

                <!-- Shopping Cart -->
                <button @click="cartOpen = true" class="p-2 text-gray-300 hover:text-cyan-400 transition relative group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-xs font-bold rounded-full flex items-center justify-center">0</span>
                    <div class="absolute inset-0 bg-cyan-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition"></div>
                </button>

                <!-- Cart Modal -->
                <div 
                    x-show="cartOpen"
                    x-transition
                    class="fixed inset-0 min-h-dvh bg-black/60 backdrop-blur-sm flex items-center justify-center z-50"
                    style="display: none;"
                >
                    <!-- Modal Box -->
                    <div 
                        @click.away="cartOpen = false"
                        class="bg-slate-900 border border-cyan-500/30 rounded-xl w-[90%] max-w-md shadow-2xl"
                    >
                        <!-- Header -->
                        <div class="flex justify-between items-center px-5 py-3 border-b border-cyan-500/20">
                            <h2 class="text-white font-semibold">Shopping Cart</h2>
                            <button @click="cartOpen = false" class="text-gray-400 hover:text-red-400 text-xl">
                                &times;
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="p-5 text-gray-300 text-sm">
                            <p>Your cart is empty 🛒</p>
                        </div>

                        <!-- Footer -->
                        <div class="px-5 py-3 border-t border-cyan-500/20 flex justify-between items-center">
                            <span class="text-white font-medium">Total: $0</span>
                            <button 
                                class="px-4 py-2 bg-cyan-600 hover:bg-cyan-700 text-white rounded-lg text-sm transition">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Account -->
                <div class="relative group hidden sm:block">
                    <button class="p-2 text-gray-300 hover:text-purple-300 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <div class="absolute inset-0 bg-purple-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition"></div>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-slate-900 border border-purple-500/30 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-200">
                        <div class="px-4 py-3 border-b border-purple-500/20">
                            <p class="text-sm text-gray-300">Guest User</p>
                        </div>
                        <a href="/manage-account" class="block px-4 py-2 text-sm text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">My Account</a>
                        <a href="/upload-products" class="block px-4 py-2 text-sm text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">Upload Products</a>
                        <a href="/view-all" class="block px-4 py-2 text-sm text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">My Products</a>
                        <div class="border-t border-purple-500/20">
                            <a href="/register" class="block px-4 py-2 text-sm text-purple-300 hover:text-purple-200 hover:bg-purple-500/10 transition">Sign In</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="lg:hidden p-2 text-gray-300 hover:text-purple-300 transition" id="mobile-menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Search Bar -->
        <div class="lg:hidden pb-4">
            <div class="relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg blur opacity-0 group-focus-within:opacity-40 transition duration-300"></div>
                <input
                    type="text"
                    placeholder="Search products..."
                    class="relative w-full bg-slate-900 text-white placeholder-gray-400 px-4 py-2.5 rounded-lg border border-purple-500/30 focus:border-purple-400 focus:outline-none outline-none focus:ring-1 focus:ring-purple-400/50 transition"
                />
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="border-t border-purple-500/20 py-2">
                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">Home</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">Products</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">Categories</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">Deals</a>
                <a href="#" class="block px-4 py-2 text-purple-300 border-t border-purple-500/20 hover:bg-purple-500/10 transition">Sign In</a>
            </div>
        </div>
    </div>
    <!-- Wishlist Modal -->

</nav>


<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<!-- Mobile Menu Toggle Script -->
<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

<!-- Navbar Styles -->
<style>
    /* Smooth transitions */
    
    nav {
        font-family: "Montserrat", sans-serif;
    }

    /* Glow effect on hover for logo */
    .group:hover {
        animation: navGlow 0.3s ease-in-out;
    }

    @keyframes navGlow {
        0% {
            filter: drop-shadow(0 0 0px rgba(139, 92, 246, 0));
        }
        50% {
            filter: drop-shadow(0 0 8px rgba(139, 92, 246, 0.5));
        }
        100% {
            filter: drop-shadow(0 0 12px rgba(139, 92, 246, 0.8));
        }
    }

    /* Cart animation */
    .relative button:hover svg {
        transform: scale(1.1);
        transition: transform 0.2s ease;
    }

    /* Smooth underline animation */
    .relative.group span {
        transform-origin: left;
    }
</style>
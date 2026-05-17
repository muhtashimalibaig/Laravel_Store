<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Neon Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: var(--bg-primary);
        }
    </style>
</head>

<body class="min-h-screen text-white">

    @include('components.navbar')

    <!-- Background Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(139,92,246,0.25),transparent_60%)] pointer-events-none"></div>

    <main class="relative z-10 px-4 py-12">

        <div class="max-w-7xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold">All Products</h1>
                <p class="text-slate-400 mt-2">Browse all available items in your store</p>
            </div>

            <!-- Filter Bar -->
            <div class="flex flex-col sm:flex-row gap-4 justify-between items-center mb-8">

                <input type="text" placeholder="Search products..."
                    class="w-full sm:w-80 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:ring-1 focus:ring-purple-500/40">

                <select class="px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white">
                    <option>All Categories</option>
                    <option>Streetwear</option>
                    <option>Fitness</option>
                    <option>Accessories</option>
                    <option>Tech</option>
                </select>

            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Product Card -->
                <div class="neon-banner-card group hover:-translate-y-1 transition">

                    <div class="relative">

                        <!-- Badge -->
                        <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full bg-purple-500/20 text-purple-300">
                            New
                        </span>

                        <!-- Image -->
                        <div class="h-40 bg-slate-900 rounded-xl flex items-center justify-center">
                            <span class="text-slate-500 text-sm">Product Image</span>
                        </div>

                    </div>

                    <!-- Info -->
                    <div class="mt-4 space-y-2">

                        <h3 class="text-lg font-semibold group-hover:text-purple-300 transition">
                            Neon Jacket
                        </h3>

                        <p class="text-sm text-slate-400">
                            Premium reflective streetwear jacket
                        </p>

                        <div class="flex items-center justify-between mt-3">

                            <span class="text-purple-300 font-bold">$120</span>

                            <span class="text-xs text-slate-400">
                                Stock: 12
                            </span>

                        </div>

                        <!-- Button -->
                        <button class="w-full mt-3 py-2 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 text-white text-sm font-semibold hover:-translate-y-0.5 transition">
                            View Product
                        </button>

                    </div>

                </div>

                <!-- Duplicate cards (example) -->
                <div class="neon-banner-card group hover:-translate-y-1 transition">
                    <div class="relative">
                        <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full bg-cyan-500/20 text-cyan-300">
                            Hot
                        </span>

                        <div class="h-40 bg-slate-900 rounded-xl flex items-center justify-center">
                            <span class="text-slate-500 text-sm">Product Image</span>
                        </div>
                    </div>

                    <div class="mt-4 space-y-2">
                        <h3 class="text-lg font-semibold group-hover:text-purple-300 transition">
                            Smart Watch
                        </h3>

                        <p class="text-sm text-slate-400">
                            Futuristic fitness tracking watch
                        </p>

                        <div class="flex items-center justify-between mt-3">
                            <span class="text-purple-300 font-bold">$89</span>
                            <span class="text-xs text-slate-400">Stock: 5</span>
                        </div>

                        <button class="w-full mt-3 py-2 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 text-white text-sm font-semibold hover:-translate-y-0.5 transition">
                            View Product
                        </button>
                    </div>
                </div>

                <!-- Third card -->
                <div class="neon-banner-card group hover:-translate-y-1 transition">
                    <div class="relative">
                        <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full bg-pink-500/20 text-pink-300">
                            Sale
                        </span>

                        <div class="h-40 bg-slate-900 rounded-xl flex items-center justify-center">
                            <span class="text-slate-500 text-sm">Product Image</span>
                        </div>
                    </div>

                    <div class="mt-4 space-y-2">
                        <h3 class="text-lg font-semibold group-hover:text-purple-300 transition">
                            Neon Sneakers
                        </h3>

                        <p class="text-sm text-slate-400">
                            Glow-in-the-dark running shoes
                        </p>

                        <div class="flex items-center justify-between mt-3">
                            <span class="text-purple-300 font-bold">$150</span>
                            <span class="text-xs text-slate-400">Stock: 20</span>
                        </div>

                        <button class="w-full mt-3 py-2 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 text-white text-sm font-semibold hover:-translate-y-0.5 transition">
                            View Product
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </main>

    @include('components.footer')

</body>
</html>
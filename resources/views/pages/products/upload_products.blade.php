<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product - Neon Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: var(--bg-primary);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    @include('components.navbar')

    <main class="flex-1 flex items-center justify-center px-4 py-12 relative">

        <!-- Background Glow -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(139,92,246,0.25),transparent_60%)] pointer-events-none"></div>

        <div class="w-full max-w-3xl relative z-10">

            <div class="neon-banner-card">

                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-white">Upload Product</h1>
                    <p class="text-sm text-slate-400 mt-2">Add new items to your store catalog</p>
                </div>

                <form class="space-y-5">

                    <!-- IMAGE UPLOAD BOX -->
                    <div class="border border-dashed border-purple-500/40 rounded-2xl p-6 text-center bg-slate-900/40 hover:bg-slate-900/60 transition">
                        
                        <div class="flex flex-col items-center gap-3">

                            <div class="w-14 h-14 rounded-full bg-purple-500/10 flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0l-3 3m3-3l3 3m6 4v12m0 0l3-3m-3 3l-3-3"/>
                                </svg>
                            </div>

                            <p class="text-sm text-slate-300">Drag & drop product image here</p>
                            <p class="text-xs text-slate-500">PNG, JPG up to 2MB</p>

                            <input type="file" class="mt-3 text-sm text-slate-400">
                        </div>

                    </div>

                    <!-- PRODUCT NAME + PRICE -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div>
                            <label class="text-sm text-slate-300">Product Name</label>
                            <input type="text" placeholder="Enter product name"
                                class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:border-purple-400 focus:ring-1 focus:ring-purple-500/40 focus:outline-none">
                        </div>

                        <div>
                            <label class="text-sm text-slate-300">Price</label>
                            <input type="text" placeholder="$0.00"
                                class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:border-purple-400 focus:ring-1 focus:ring-purple-500/40 focus:outline-none">
                        </div>

                    </div>

                    <!-- CATEGORY + STOCK -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div>
                            <label class="text-sm text-slate-300">Category</label>
                            <select class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:border-purple-400 focus:ring-1 focus:ring-purple-500/40 focus:outline-none">
                                <option>Streetwear</option>
                                <option>Fitness</option>
                                <option>Accessories</option>
                                <option>Tech</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-sm text-slate-300">Stock</label>
                            <input type="number" placeholder="0"
                                class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:border-purple-400 focus:ring-1 focus:ring-purple-500/40 focus:outline-none">
                        </div>

                    </div>

                    <!-- DESCRIPTION -->
                    <div>
                        <label class="text-sm text-slate-300">Description</label>
                        <textarea rows="4" placeholder="Write product details..."
                            class="w-full mt-1 px-4 py-3 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:border-purple-400 focus:ring-1 focus:ring-purple-500/40 focus:outline-none"></textarea>
                    </div>

                    <div class="flex justify-between items-center">
                    <!-- BUTTON -->
                    <x-button>Upload Products</x-button>
                    <x-button href="/" variant="secondary" :icon="false">Cancel</x-button>
                    </div>
                </form>

            </div>

        </div>

    </main>

    @include('components.footer')

</body>
</html>
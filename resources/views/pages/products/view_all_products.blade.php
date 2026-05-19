<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Neon Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

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
           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

@forelse($products as $product)

<div class="neon-banner-card group hover:-translate-y-1 transition">

    <!-- ACTIONS -->
    <div class="flex justify-end gap-2 mb-2">

        <!-- EDIT -->
        <a href="{{ route('products.edit', $product->id) }}"
           class="p-2 rounded-lg bg-blue-500/10 hover:bg-blue-500/20">
            <i data-lucide="edit" class="w-5 h-5 text-blue-400"></i>
        </a>

        <!-- DELETE -->
        <form action="{{ route('products.delete', $product->id) }}"
              method="POST"
              onsubmit="return confirm('Delete this product?')">

            @csrf
            @method('DELETE')

            <button class="p-2 rounded-lg bg-red-500/10 hover:bg-red-500/20">
                <i data-lucide="trash-2" class="w-5 h-5 text-red-400"></i>
            </button>
        </form>

    </div>

    <!-- IMAGE -->
    <div class="h-80 bg-slate-900 rounded-xl overflow-hidden">
        <img src="{{ asset('storage/' . $product->product_image) }}"
             class="w-full h-full object-cover">
    </div>

    <!-- INFO -->
    <div class="mt-4 space-y-2">

        <h3 class="text-lg font-semibold">
            {{ $product->product_name }}
        </h3>

        <p class="text-sm text-slate-400 line-clamp-2">
            {{ $product->description }}
        </p>

        <div class="flex justify-between">
            <span class="text-purple-300 font-bold">${{ $product->price }}</span>
            <span class="text-green-400 text-xs">Stock: {{ $product->stock }}</span>
        </div>

    </div>

</div>

@empty
<div class="col-span-3 text-center text-slate-400">
    No products found
</div>
@endforelse

</div>

        </div>

    </main>

    @include('components.footer')

    <!-- Activate Lucide -->
    <script>
        lucide.createIcons();
    </script>

</body>
</html>
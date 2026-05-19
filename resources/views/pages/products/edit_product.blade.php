<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - Neon Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: var(--bg-primary);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col text-white">

@include('components.navbar')

<main class="flex-1 flex items-center justify-center px-4 py-12 relative">

    <!-- Glow Background -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(139,92,246,0.25),transparent_60%)] pointer-events-none"></div>

    <div class="w-full max-w-3xl relative z-10">

        <div class="neon-banner-card p-8">

            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold">Edit Product</h1>
                <p class="text-sm text-slate-400 mt-2">Update your product details</p>
            </div>

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('products.update', $product->id) }}"
                  class="space-y-6">

                @csrf
                @method('PUT')

                <!-- IMAGE SECTION -->
                <div class="border border-dashed border-purple-500/40 rounded-2xl p-6 text-center bg-slate-900/40">

                    <div class="flex flex-col items-center gap-4">

                        <img src="{{ asset('storage/' . $product->product_image) }}"
                             class="w-28 h-28 rounded-xl object-cover border border-purple-500/30">

                        <input type="file" name="product_image"
                               class="text-sm text-slate-400">
                    </div>

                </div>

                <!-- GRID INPUTS -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <!-- NAME -->
                    <div>
                        <label class="text-sm text-slate-300">Product Name</label>
                        <input type="text"
                               name="product_name"
                               value="{{ $product->product_name }}"
                               class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:ring-1 focus:ring-purple-500/40">
                    </div>

                    <!-- PRICE -->
                    <div>
                        <label class="text-sm text-slate-300">Price</label>
                        <input type="text"
                               name="price"
                               value="{{ $product->price }}"
                               class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:ring-1 focus:ring-purple-500/40">
                    </div>

                    <!-- CATEGORY -->
                    <div>
                        <label class="text-sm text-slate-300">Category</label>
                        <select name="category"
                                class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white">

                            <option value="Streetwear" {{ $product->category == 'Streetwear' ? 'selected' : '' }}>Streetwear</option>
                            <option value="Fitness" {{ $product->category == 'Fitness' ? 'selected' : '' }}>Fitness</option>
                            <option value="Accessories" {{ $product->category == 'Accessories' ? 'selected' : '' }}>Accessories</option>
                            <option value="Tech" {{ $product->category == 'Tech' ? 'selected' : '' }}>Tech</option>

                        </select>
                    </div>

                    <!-- STOCK -->
                    <div>
                        <label class="text-sm text-slate-300">Stock</label>
                        <input type="number"
                               name="stock"
                               value="{{ $product->stock }}"
                               class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white">
                    </div>

                </div>

                <!-- DESCRIPTION -->
                <div>
                    <label class="text-sm text-slate-300">Description</label>
                    <textarea name="description"
                              rows="4"
                              class="w-full mt-1 px-4 py-3 rounded-xl bg-slate-900 border border-purple-500/20 text-white">{{ $product->description }}</textarea>
                </div>

                <!-- BUTTONS -->
                <div class="flex justify-between items-center pt-2">

                    <button type="submit"
                            class="px-6 py-2 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold hover:-translate-y-0.5 transition">
                        Update Product
                    </button>

                    <a href="{{ route('products.index') }}"
                       class="px-5 py-2 rounded-xl bg-slate-800 text-slate-300 hover:bg-slate-700 transition">
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</main>

@include('components.footer')

</body>
</html>
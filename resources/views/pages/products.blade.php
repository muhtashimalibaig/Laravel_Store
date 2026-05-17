<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products – ECOMMERCE</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-dvh bg-slate-950 text-white">
    @include('components.navbar')

    <main class="relative px-4 py-10 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto space-y-10">
            <section class="rounded-[2rem] border border-purple-500/15 bg-slate-950/80 p-8 shadow-[0_30px_90px_rgba(10,8,32,0.65)] backdrop-blur-xl">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.28em] text-purple-300">Products</p>
                        <h1 class="mt-3 text-4xl font-semibold text-white sm:text-5xl">Explore the neon collection.</h1>
                        <p class="mt-4 max-w-2xl text-slate-300">Curated drops for bold streetwear, tech, and accessories in a premium neon style.</p>
                    </div>
                    <a href="#grid" class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-3 text-sm font-semibold text-white shadow-[0_15px_40px_rgba(139,92,246,0.35)] transition hover:-translate-y-0.5 hover:shadow-[0_20px_45px_rgba(139,92,246,0.45)]">
                        Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </section>
            <section>

                <h2 class="text-4xl text-center">No Products yet</h2>
            
            </section>
        </div>
    </main>
    @include('components.footer')
</body>
</html>

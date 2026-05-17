<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category � ECOMMERCE</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-dvh bg-slate-950 text-white">
    @include('components.navbar')

    <main class="relative px-4 py-10 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto space-y-10">
            <section class="rounded-4xl border border-purple-500/15 bg-slate-950/80 p-8 shadow-[0_30px_90px_rgba(10,8,32,0.65)] backdrop-blur-xl">
                <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                    <div class="space-y-4">
                        <p class="text-sm uppercase tracking-[0.28em] text-purple-300">Shopping categories</p>
                        <h1 class="text-4xl font-semibold text-white sm:text-5xl">Find your perfect neon style.</h1>
                        <p class="max-w-2xl text-slate-300">Explore curated product categories with premium neon details for fashion, fitness, tech, and accessories.</p>
                    </div>
                    <div class="rounded-[1.75rem] bg-slate-900/80 p-6 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
                        <p class="text-sm uppercase tracking-[0.24em] text-purple-300">Browse by type</p>
                        <div class="mt-5 grid gap-3">
                            <a href="#fashion" class="rounded-3xl border border-purple-500/20 bg-purple-500/10 px-4 py-3 text-sm text-white transition hover:border-purple-400 hover:bg-purple-500/15">Fashion</a>
                            <a href="#fitness" class="rounded-3xl border border-cyan-500/15 bg-cyan-500/10 px-4 py-3 text-sm text-cyan-200 transition hover:border-cyan-400 hover:bg-cyan-500/15">Fitness</a>
                            <a href="#accessories" class="rounded-3xl border border-pink-500/15 bg-pink-500/10 px-4 py-3 text-sm text-pink-200 transition hover:border-pink-400 hover:bg-pink-500/15">Accessories</a>
                            <a href="#tech" class="rounded-3xl border border-green-500/15 bg-green-500/10 px-4 py-3 text-sm text-neon-green transition hover:border-green-400 hover:bg-green-500/15">Tech</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="fashion" class="space-y-6">
                <div class="flex items-center justify-between gap-4 rounded-[1.75rem] border border-purple-500/15 bg-slate-950/80 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.32)]">
                    <div>
                        <h2 class="text-2xl font-semibold text-white">Fashion & streetwear</h2>
                        <p class="mt-2 text-slate-400">Bold neon garments and statement outerwear made for modern city nights.</p>
                    </div>
                    <span class="rounded-full border border-purple-500/25 bg-purple-500/10 px-4 py-2 text-sm text-purple-200">6 items</span>
                </div>
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <article class="category-card group">
                        <div class="icon-circle bg-purple-500/10 text-purple-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Signature jackets</h3>
                        <p class="mt-2 text-sm text-slate-400">Reflective outerwear with luminous piping and modern cuts.</p>
                    </article>
                    <article class="category-card group">
                        <div class="icon-circle bg-cyan-500/10 text-cyan-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Neon sneakers</h3>
                        <p class="mt-2 text-sm text-slate-400">Light-up soles and premium comfort for the neon street look.</p>
                    </article>
                    <article class="category-card group">
                        <div class="icon-circle bg-pink-500/10 text-pink-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4l4 8-4 8-4-8 4-8z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Festival tees</h3>
                        <p class="mt-2 text-sm text-slate-400">Glow-ready tops and bold prints for every after-dark moment.</p>
                    </article>
                </div>
            </section>

            <section id="fitness" class="space-y-6">
                <div class="flex flex-col gap-4 rounded-[1.75rem] border border-cyan-500/20 bg-slate-950/80 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.32)] sm:flex-row sm:justify-between sm:items-center">
                    <div>
                        <h2 class="text-2xl font-semibold text-white">Fitness & active</h2>
                        <p class="mt-2 text-slate-400">Activewear with motion-ready neon details and lightweight support.</p>
                    </div>
                    <span class="rounded-full border border-cyan-500/25 bg-cyan-500/10 px-4 py-2 text-sm text-cyan-200">5 items</span>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="category-card">
                        <div class="icon-circle bg-cyan-500/10 text-cyan-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 7l10 10M17 7L7 17" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Performance leggings</h3>
                        <p class="mt-2 text-sm text-slate-400">Stretch fit with glow trim and high-energy color accents.</p>
                    </article>
                    <article class="category-card">
                        <div class="icon-circle bg-green-500/10 text-neon-green">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Training tops</h3>
                        <p class="mt-2 text-sm text-slate-400">Moisture-wicking shirts with neon logo details.</p>
                    </article>
                </div>
            </section>

            <section id="accessories" class="space-y-6">
                <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <article class="category-card group">
                        <div class="icon-circle bg-pink-500/10 text-pink-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Glow headphones</h3>
                        <p class="mt-2 text-sm text-slate-400">Wireless audio with neon accents and premium comfort.</p>
                    </article>
                    <article class="category-card group">
                        <div class="icon-circle bg-purple-500/10 text-purple-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Light-up bags</h3>
                        <p class="mt-2 text-sm text-slate-400">Daypack and sling bags designed to glow after dark.</p>
                    </article>
                    <article class="category-card group">
                        <div class="icon-circle bg-cyan-500/10 text-cyan-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Statement jewelry</h3>
                        <p class="mt-2 text-sm text-slate-400">Layered chains and rings with striking neon shimmer.</p>
                    </article>
                </div>
            </section>

            <section id="tech" class="space-y-6">
                <div class="flex flex-col gap-4 rounded-[1.75rem] border border-green-500/20 bg-slate-950/80 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.32)] sm:flex-row sm:justify-between sm:items-center">
                    <div>
                        <h2 class="text-2xl font-semibold text-white">Tech essentials</h2>
                        <p class="mt-2 text-slate-400">Futuristic gadgets and charging gear built for the neon shopper.</p>
                    </div>
                    <span class="rounded-full border border-green-500/25 bg-green-500/10 px-4 py-2 text-sm text-neon-green">4 items</span>
                </div>
                <div class="grid gap-6 md:grid-cols-2">
                    <article class="category-card">
                        <div class="icon-circle bg-neon-green/10 text-neon-green">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 118 0v2" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 11h14" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Smart band</h3>
                        <p class="mt-2 text-sm text-slate-400">Neon fitness band to track health, sleep, and workouts.</p>
                    </article>
                    <article class="category-card">
                        <div class="icon-circle bg-purple-500/10 text-purple-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h6" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5h14v14H5z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Wireless charger</h3>
                        <p class="mt-2 text-sm text-slate-400">Fast charging pad with glowing edge lighting.</p>
                    </article>
                </div>
            </section>
        </div>
    </main>

    @include('components.footer')
</body>
</html>

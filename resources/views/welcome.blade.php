<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOMMERCE PAGE</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-white">
    @include('components.navbar')

    <main class="relative overflow-hidden">
        <section class="relative px-4 pt-10 pb-16 sm:px-6 lg:px-8 lg:pb-24">
            <div class="absolute inset-x-0 top-0 h-full bg-[radial-gradient(circle_at_top,_rgba(139,92,246,0.35),_transparent_55%)] pointer-events-none"></div>
            <div class="max-w-7xl mx-auto">
                <div class="grid gap-10 lg:grid-cols-[1.2fr_0.8fr] items-center">
                    <div class="space-y-6">
                        <span class="inline-flex items-center gap-2 rounded-full border border-purple-500/30 bg-white/5 px-4 py-2 text-sm text-purple-200 shadow-[0_0_30px_rgba(139,92,246,0.12)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            New arrivals, drops & exclusive offers
                        </span>

                        <div class="space-y-4">
                            <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-6xl">Neon fashion for the bold digital shopper.</h1>
                            <p class="max-w-xl text-lg text-slate-300 sm:text-xl">Discover premium streetwear, accessories, and tech essentials with powerful neon styling and immersive product experiences.</p>
                        </div>

                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <a href="#products" class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-3 text-sm font-semibold text-white shadow-[0_15px_40px_rgba(139,92,246,0.35)] transition hover:-translate-y-0.5 hover:shadow-[0_20px_45px_rgba(139,92,246,0.45)]">
                                Shop best sellers
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                           <x-button variant="secondary" :icon="false">
                            Browse Collection
                           </x-button>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-3">
                            <div class="neon-banner-card">
                                <p class="text-xs uppercase tracking-[0.24em] text-purple-300">Free delivery</p>
                                <p class="mt-2 text-lg font-semibold text-white">Orders over $75</p>
                            </div>
                            <div class="neon-banner-card">
                                <p class="text-xs uppercase tracking-[0.24em] text-cyan-300">24/7 support</p>
                                <p class="mt-2 text-lg font-semibold text-white">Live shopping help</p>
                            </div>
                            <div class="neon-banner-card">
                                <p class="text-xs uppercase tracking-[0.24em] text-pink-300">Secure pay</p>
                                <p class="mt-2 text-lg font-semibold text-white">Shop with confidence</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-[2rem] border border-purple-500/20 bg-slate-900/70 p-6 shadow-[0_20px_80px_rgba(0,0,0,0.45)] backdrop-blur-xl">
                        <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-gradient-to-tr from-pink-500/30 to-purple-500/10 blur-3xl"></div>
                        <div class="relative overflow-hidden rounded-[1.75rem] border border-purple-500/15 bg-slate-950 p-6">
                            <div class="flex items-center justify-between text-sm text-slate-400">
                                <span class="inline-flex items-center gap-2">
                                    <span class="rounded-full bg-purple-500/10 px-3 py-1 text-purple-300">Hot</span>
                                    Top trending
                                </span>
                                <span class="text-purple-300">Sale 20% off</span>
                            </div>
                            <div class="mt-6 grid gap-4 sm:grid-cols-[1fr_auto] sm:items-center">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.25em] text-purple-300">Elite collection</p>
                                    <h2 class="mt-3 text-3xl font-semibold text-white">Neon Runner Jacket</h2>
                                    <p class="mt-4 text-sm leading-6 text-slate-400">Lightweight reflective jacket with glow piping, perfect for city nights and festival style.</p>
                                    <x-button :icon="false" class="mt-5">
                                        Limited Editions
                                    </x-button>
                                </div>
                            </div>
                            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                                <div class="feature-pill">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7V5a3 3 0 013-3h10a3 3 0 013 3v2" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 11h14l-1 9H6l-1-9z" />
                                    </svg>
                                    Fast shipping
                                </div>
                                <div class="feature-pill">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 20h6" />
                                    </svg>
                                    30-day returns
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="collections" class="px-4 pb-16 sm:px-6 lg:px-8 lg:pb-24">
            <div class="max-w-7xl mx-auto">
                <div class="mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.28em] text-purple-300">Collections</p>
                        <h2 class="mt-3 text-3xl font-semibold text-white">Shop by category</h2>
                    </div>
                    <a href="#products" class="text-sm font-semibold text-purple-300 transition hover:text-white">See all categories →</a>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                    <article class="category-card">
                        <div class="icon-circle bg-purple-500/10 text-purple-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M20.338 11c-.152-1.025-1.01-2.335-1.981-3.254C16.784 6.113 15.003 5 12 5c-3.004 0-4.785 1.113-6.357 2.746C4.673 8.665 3.815 9.975 3.664 11c-.1.663.016 1.58.48 2.322 1.102 1.95 3.318 3.814 7.856 5.883 4.538-2.069 6.753-3.933 7.855-5.883.464-.742.581-1.659.481-2.322z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Streetwear</h3>
                        <p class="mt-2 text-sm text-slate-400">Bold jackets, sneakers, and neon elevated outfits.</p>
                    </article>
                    <article class="category-card">
                        <div class="icon-circle bg-cyan-500/10 text-cyan-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Fitness</h3>
                        <p class="mt-2 text-sm text-slate-400">Performance gear and activewear with neon accents.</p>
                    </article>
                    <article class="category-card">
                        <div class="icon-circle bg-pink-500/10 text-pink-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Accessories</h3>
                        <p class="mt-2 text-sm text-slate-400">Bags, headphones, and glowing essentials.</p>
                    </article>
                    <article class="category-card">
                        <div class="icon-circle bg-green-500/10 text-neon-green">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 118 0v2" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 11h14" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-xl font-semibold text-white">Tech</h3>
                        <p class="mt-2 text-sm text-slate-400">Chargers, speakers, and futuristic gadgets.</p>
                    </article>
                </div>
            </div>
        </section>


        <section class="px-4 pb-24 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto rounded-[2rem] border border-purple-500/15 bg-slate-950/80 p-8 shadow-[0_30px_90px_rgba(10,8,32,0.65)] backdrop-blur-xl">
                <div class="grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-center">
                    <div class="space-y-4">
                        <p class="text-sm uppercase tracking-[0.28em] text-purple-300">Why choose us</p>
                        <h2 class="text-3xl font-semibold text-white">A neon-first shopping experience that feels premium.</h2>
                        <p class="text-slate-300">From glowing product previews to bold category collections, everything is designed to feel futuristic, fast, and fun.</p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="feature-card">
                            <span class="feature-icon bg-purple-500/10 text-purple-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-semibold text-white">Instant drops</h3>
                                <p class="text-sm text-slate-400">New products launch with glowing visuals and fast checkout.</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <span class="feature-icon bg-cyan-500/10 text-cyan-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20l9-5-9-5-9 5 9 5z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 12l9-5-9-5-9 5 9 5z" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-semibold text-white">Fast delivery</h3>
                                <p class="text-sm text-slate-400">Express shipping available on all neon-ready orders.</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <span class="feature-icon bg-pink-500/10 text-pink-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 1.104-.895 2-2 2s-2-.896-2-2 .895-2 2-2 2 .896 2 2z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 11c0 1.104-.895 2-2 2s-2-.896-2-2 .895-2 2-2 2 .896 2 2z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 13c2.485 0 4.5 1.567 4.5 3.5V20H7.5v-3.5C7.5 14.567 9.515 13 12 13z" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-semibold text-white">Premium quality</h3>
                                <p class="text-sm text-slate-400">Only top-rated items with polished neon details.</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <span class="feature-icon bg-green-500/10 text-neon-green">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="text-lg font-semibold text-white">Secure payments</h3>
                                <p class="text-sm text-slate-400">Encrypted checkout with all major payment networks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>

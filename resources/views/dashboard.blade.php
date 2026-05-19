<x-app-layout>
    <div class="min-h-screen bg-slate-950 text-white">
        
        <!-- Dashboard Header -->
        <section class="px-6 py-10 border-b border-purple-500/20">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <p class="text-sm uppercase tracking-[0.28em] text-purple-300">
                        Dashboard
                    </p>
                    <div class="flex items-center gap-2">
                    <h1 class="text-2xl font-bold mt-2">
                        Welcome Back
                    </h1> <span class="text-4xl text-[#00e5ff] border-b-2 border-[#00e5ff] font-extrabold tracking-tighter">{{ Auth::user()->name }}</span>
                    </div>
                    <p class="text-slate-400 mt-2">
                        Manage your store, products and orders from one place.
                    </p>
                </div>

                <a href="#"
                   class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-3 text-sm font-semibold shadow-lg hover:scale-105 transition">
                    Add Product
                </a>
            </div>
        </section>

        <!-- Stats Cards -->
        <section class="px-6 py-10">
            <div class="max-w-7xl mx-auto grid gap-6 md:grid-cols-3">
                
                <div class="rounded-2xl border border-purple-500/20 bg-slate-900 p-6 shadow-lg">
                    <p class="text-sm text-slate-400">Total Products</p>
                    <h2 class="text-3xl font-bold mt-3 text-purple-300">124</h2>
                </div>

                <div class="rounded-2xl border border-cyan-500/20 bg-slate-900 p-6 shadow-lg">
                    <p class="text-sm text-slate-400">Orders</p>
                    <h2 class="text-3xl font-bold mt-3 text-cyan-300">87</h2>
                </div>

                <div class="rounded-2xl border border-pink-500/20 bg-slate-900 p-6 shadow-lg">
                    <p class="text-sm text-slate-400">Revenue</p>
                    <h2 class="text-3xl font-bold mt-3 text-pink-300">$4,230</h2>
                </div>

            </div>
        </section>

        <!-- Recent Activity -->
        <section class="px-6 pb-12">
            <div class="max-w-7xl mx-auto rounded-3xl border border-purple-500/20 bg-slate-900 p-8 shadow-xl">
                <h2 class="text-2xl font-semibold mb-6">Recent Activity</h2>

                <div class="space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                        <span>New order placed</span>
                        <span class="text-purple-300">2 mins ago</span>
                    </div>

                    <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                        <span>Product updated</span>
                        <span class="text-cyan-300">10 mins ago</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <span>New user registered</span>
                        <span class="text-pink-300">30 mins ago</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @include('components.footer')
</x-app-layout>
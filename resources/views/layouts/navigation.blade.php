<nav x-data="{ open: false, userDropdown: false }"
    class="sticky top-0 z-50 bg-gradient-to-r from-slate-950 via-purple-950 to-slate-950 border-b border-purple-500/30 backdrop-blur-md shadow-lg">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between items-center h-20">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg blur opacity-70 group-hover:opacity-100 transition">
                        </div>

                        <div class="relative bg-slate-950 px-3 py-2 rounded-lg">
                            <svg class="w-6 h-6 text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-xl font-bold text-white">STORE</h1>
                        <p class="text-xs text-purple-400">Premium</p>
                    </div>
                </a>
            </div>

            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-6">
                <a href="/"
                    class="text-gray-300 hover:text-purple-300 transition relative group">
                    Home
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('dashboard') }}"
                    class="text-gray-300 hover:text-purple-300 transition relative group">
                    Dashboard
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 group-hover:w-full transition-all duration-300"></span>
                </a>

                <a href="{{ route('profile.edit') }}"
                    class="text-gray-300 hover:text-purple-300 transition relative group">
                    Profile
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 group-hover:w-full transition-all duration-300"></span>
                </a>

            </div>

            <!-- Right Side -->
            <div class="flex items-center gap-4">

                <!-- User Dropdown -->
                <div class="relative" x-data="{ dropdown: false }">
                    <button @click="dropdown = !dropdown"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg bg-slate-900 border border-purple-500/20 hover:border-purple-400 transition">

                        <div class="text-sm text-white">
                            {{ Auth::user()->name }}
                        </div>

                        <svg class="w-4 h-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div x-show="dropdown" @click.away="dropdown = false" x-transition
                        class="absolute right-0 mt-2 w-48 bg-slate-900 border border-purple-500/30 rounded-lg shadow-xl overflow-hidden"
                        style="display:none;">

                        <div class="px-4 py-3 border-b border-purple-500/20">
                            <p class="text-sm text-white">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-slate-400">{{ Auth::user()->email }}</p>
                        </div>

                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-3 text-sm text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 transition">
                            Edit Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-3 text-sm text-red-300 hover:bg-red-500/10 transition">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="open = ! open"
                    class="lg:hidden p-2 text-gray-300 hover:text-purple-300 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />

                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-transition class="lg:hidden border-t border-purple-500/20 py-4" style="display:none;">
            <a href="{{ route('dashboard') }}"
                class="block px-4 py-2 text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 rounded-lg">
                Dashboard
            </a>

            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 text-gray-300 hover:text-purple-300 hover:bg-purple-500/10 rounded-lg">
                Profile
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-300 hover:bg-red-500/10 rounded-lg">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
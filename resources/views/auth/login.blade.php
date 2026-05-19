<x-guest-layout>
    <div class="bg-slate-950 text-white flex items-center justify-center px-4 relative overflow-hidden">

        <!-- Background Glow -->

        <div class="relative w-full max-w-md">
            <div class="rounded-3xl border border-purple-500/20 bg-slate-900/80 backdrop-blur-xl shadow-[0_20px_80px_rgba(0,0,0,0.45)] p-8">

                <!-- Logo / Heading -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                        Welcome Back
                    </h1>
                    <p class="text-slate-400 mt-2 text-sm">
                        Login to continue shopping
                    </p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4 text-green-400" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-slate-300" />

                        <x-text-input
                            id="email"
                            class="block mt-2 w-full rounded-xl border border-purple-500/20 bg-slate-950 text-white! focus:border-purple-400 focus:ring-purple-500"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="username"
                        />

                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-slate-300" />

                        <x-text-input
                            id="password"
                            class="block mt-2 w-full rounded-xl border border-purple-500/20 bg-slate-950 text-white focus:border-purple-400 focus:ring-purple-500"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        />

                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                    </div>

                    <!-- Remember -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center">
                            <input
                                id="remember_me"
                                type="checkbox"
                                class="rounded border-purple-500/30 bg-slate-950 text-purple-500 shadow-sm focus:ring-purple-500"
                                name="remember"
                            >
                            <span class="ms-2 text-sm text-slate-400">
                                {{ __('Remember me') }}
                            </span>
                        </label>

                        @if (Route::has('password.request'))
                            <a
                                class="text-sm text-purple-300 hover:text-white transition"
                                href="{{ route('password.request') }}"
                            >
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <button
                        type="submit"
                        class="w-full rounded-full bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-3 font-semibold text-white shadow-[0_15px_40px_rgba(139,92,246,0.35)] transition hover:-translate-y-0.5 hover:shadow-[0_20px_45px_rgba(139,92,246,0.45)]"
                    >
                        {{ __('Log in') }}
                    </button>
                </form>

                <!-- Register -->
                <p class="text-center text-sm text-slate-400 mt-6">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-purple-300 hover:text-white font-medium transition">
                        Sign up
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
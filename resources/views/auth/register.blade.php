<x-guest-layout>
    <div class="flex items-center justify-center bg-slate-950">
        <form method="POST" action="{{ route('register') }}"
              class="w-full max-w-md bg-slate-900 border border-purple-500/20 p-8 rounded-2xl shadow-xl">
            @csrf

            <h2 class="text-2xl font-bold text-white text-center mb-6">
                Create Account
            </h2>

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-purple-300" />
                <x-text-input id="name"
                    class="block mt-1 w-full bg-slate-950 border-purple-500/30 text-white"
                    type="text" name="name" :value="old('name')" required />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-purple-300" />
                <x-text-input id="email"
                    class="block mt-1 w-full bg-slate-950 border-purple-500/30 text-white"
                    type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-purple-300" />
                <x-text-input id="password"
                    class="block mt-1 w-full bg-slate-950 border-purple-500/30 text-white"
                    type="password" name="password" required />
            </div>

            <!-- Confirm -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-purple-300" />
                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full bg-slate-950 border-purple-500/30 text-white"
                    type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-sm text-purple-300 hover:text-white">
                    Already registered? Login
                </a>

                <x-primary-button class="bg-gradient-to-r from-purple-500 to-pink-500">
                    Register
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
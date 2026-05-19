<section class="space-y-6">

    <!-- Header -->
    <header class="rounded-2xl border border-purple-500/20 bg-slate-900/60 p-6 backdrop-blur-xl">
        <h2 class="text-xl font-semibold text-white">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-2 text-sm text-slate-300">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <!-- Form -->
    <form method="post"
          action="{{ route('password.update') }}"
          class="mt-6 space-y-6 rounded-2xl border border-purple-500/20 bg-slate-900/60 p-6 backdrop-blur-xl shadow-xl">

        @csrf
        @method('put')

        <!-- Current Password -->
        <div>
            <x-input-label for="update_password_current_password"
                :value="__('Current Password')"
                class="text-purple-300" />

            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="mt-1 block w-full bg-slate-950 border border-purple-500/30 text-white focus:border-pink-500 focus:ring-pink-500 rounded-lg"
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2 text-red-400"
            />
        </div>

        <!-- New Password -->
        <div>
            <x-input-label for="update_password_password"
                :value="__('New Password')"
                class="text-purple-300" />

            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="mt-1 block w-full bg-slate-950 border border-purple-500/30 text-white focus:border-pink-500 focus:ring-pink-500 rounded-lg"
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2 text-red-400"
            />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="update_password_password_confirmation"
                :value="__('Confirm Password')"
                class="text-purple-300" />

            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-1 block w-full bg-slate-950 border border-purple-500/30 text-white focus:border-pink-500 focus:ring-pink-500 rounded-lg"
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2 text-red-400"
            />
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4 pt-2">

            <x-primary-button
                class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white px-5 py-2 rounded-lg shadow-lg shadow-purple-500/20 transition"
            >
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400"
                >
                    {{ __('Saved.') }}
                </p>
            @endif

        </div>

    </form>

</section>
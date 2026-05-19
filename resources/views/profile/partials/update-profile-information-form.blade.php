<section class="space-y-6">

    <!-- Header -->
    <header class="rounded-2xl border border-purple-500/20 bg-slate-900/60 p-6 backdrop-blur-xl">
        <h2 class="text-xl font-semibold text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-2 text-sm text-slate-300">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <!-- Verify Form (UNCHANGED) -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Profile Update Form -->
    <form method="post" action="{{ route('profile.update') }}"
          class="mt-6 space-y-6 rounded-2xl border border-purple-500/20 bg-slate-900/60 p-6 backdrop-blur-xl shadow-xl">

        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="text-purple-300" />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full bg-slate-950 border border-purple-500/30 text-white focus:border-pink-500 focus:ring-pink-500 rounded-lg"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-purple-300" />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full bg-slate-950 border border-purple-500/30 text-white focus:border-pink-500 focus:ring-pink-500 rounded-lg"
                :value="old('email', $user->email)"
                required
                autocomplete="username"
            />

            <x-input-error class="mt-2 text-red-400" :messages="$errors->get('email')" />

            <!-- Email verification -->
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-4 rounded-xl border border-yellow-500/30 bg-yellow-500/10">

                    <p class="text-sm text-yellow-200">
                        {{ __('Your email address is unverified.') }}
                    </p>

                    <button form="send-verification"
                        class="mt-2 underline text-sm text-purple-300 hover:text-purple-200 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif

                </div>
            @endif
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4 pt-2">

            <x-primary-button
                class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white px-5 py-2 rounded-lg shadow-lg shadow-purple-500/20 transition"
            >
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
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
<section class="space-y-6">

    <!-- Header -->
    <header class="rounded-2xl border border-red-500/20 bg-slate-900/60 p-6 backdrop-blur-xl">
        <h2 class="text-xl font-semibold text-red-400">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-2 text-sm text-slate-300 leading-6">
            {{ __('Once your account is deleted, all of its data will be permanently removed. Please download any data you wish to keep before proceeding.') }}
        </p>
    </header>

    <!-- Delete Button -->
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 text-white px-5 py-3 rounded-xl shadow-lg shadow-red-500/20 transition hover:-translate-y-0.5"
    >
        {{ __('Delete Account') }}
    </x-danger-button>

    <!-- Modal -->
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>

        <form method="post"
              action="{{ route('profile.destroy') }}"
              class="p-6 bg-slate-900 border border-purple-500/20 rounded-2xl shadow-2xl backdrop-blur-xl">

            @csrf
            @method('delete')

            <!-- Title -->
            <h2 class="text-xl font-semibold text-white">
                {{ __('Are you absolutely sure?') }}
            </h2>

            <p class="mt-2 text-sm text-slate-300">
                {{ __('This action cannot be undone. All your data will be permanently deleted from our servers.') }}
            </p>

            <!-- Password -->
            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="text-purple-300" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-2 block w-full bg-slate-950 border border-purple-500/30 text-white focus:border-pink-500 focus:ring-pink-500 rounded-lg"
                    placeholder="Enter your password"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-red-400" />
            </div>

            <!-- Buttons -->
            <div class="mt-6 flex justify-end gap-3">

                <x-secondary-button
                    x-on:click="$dispatch('close')"
                    class="px-4 py-2 rounded-lg bg-slate-800 text-gray-300 hover:bg-slate-700 transition"
                >
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button
                    class="px-5 py-2 rounded-lg bg-gradient-to-r from-red-500 to-pink-600 hover:from-red-600 hover:to-pink-700 shadow-lg"
                >
                    {{ __('Delete Account') }}
                </x-danger-button>

            </div>
        </form>

    </x-modal>

</section>
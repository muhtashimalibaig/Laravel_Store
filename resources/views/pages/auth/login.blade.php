<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Neon Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: var(--bg-primary);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <!-- Navbar (inside body) -->
    @include('components.navbar')

    <!-- Page Content -->
    <main class="flex-1 flex items-center justify-center px-4 py-12 relative">

        <!-- Background Glow -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(139,92,246,0.25),transparent_60%)] pointer-events-none"></div>

        <!-- Card -->
        <div class="w-full max-w-xl relative z-10">

            <div class="neon-banner-card">

                <!-- Header -->
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-white">Login Account</h1>
                    <p class="text-sm text-slate-400 mt-2">
                        Join Neon Store & start shopping
                    </p>
                </div>

                <!-- Form -->
                <form class="space-y-4">


                <!-- Row 2: Email + Mobile -->
                    <div>
                        <label class="text-sm text-slate-300">Email</label>
                        <input type="email"
                        placeholder="Enter Email"
                            class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:border-purple-400 focus:ring-1 focus:ring-purple-500/40">
                    </div>

                <!-- Row 3: Password full width -->
                <div>
                    <label class="text-sm text-slate-300">Password</label>
                    <input type="password"
                    placeholder="Enter Password"
                        class="w-full mt-1 px-4 py-2 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:border-purple-400 focus:ring-1 focus:ring-purple-500/40">
                </div>

                <!-- Button -->
                <x-button :icon="false" class="text-center w-full mt-5">
                    Login
                </x-button>

            </form>

                <!-- Footer -->
                <p class="text-center text-sm text-slate-400 mt-6">
                    Do Not have an account Yet?
                    <a href="/register" class="text-purple-400 hover:text-purple-300">
                        create account
                    </a>
                </p>

            </div>
        </div>

    </main>

</body>
</html>
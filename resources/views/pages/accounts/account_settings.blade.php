<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: var(--bg-primary);
        }
    </style>
</head>

<body class="text-white">

    <!-- Ambient Glow Background -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(139,92,246,0.35),transparent_55%)] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(0,229,255,0.08),transparent_60%)] pointer-events-none"></div>

    @include('components.navbar')

    <main class="relative z-10 px-4 py-14 flex justify-center">

        <div class="w-full max-w-3xl">

            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-5xl font-bold tracking-tight text-white">
                    Account Settings
                </h1>
                <p class="text-slate-400 mt-3 text-lg">
                    Manage your profile, security & preferences
                </p>
            </div>

            <!-- Main Card -->
            <div class="neon-banner-card rounded-3xl p-8 relative overflow-hidden">

                <!-- Decorative Glow -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-purple-500/20 blur-3xl rounded-full"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-cyan-500/10 blur-3xl rounded-full"></div>

               <form class="space-y-8">

                <!-- Title Row -->
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-semibold text-white">Update Your Profile</h2>
                    <p class="text-sm text-slate-400">Compare old data with new changes</p>
                </div>

                <!-- NAME -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <!-- Old -->
                    <div class="border rounded-xl border-(--primary-light) p-4">
                        <p class="text-xs uppercase tracking-widest text-purple-300 mb-2">Old Name</p>
                        <input type="text" value="Muhtashim Ali"
                            class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-purple-500/20 text-slate-400"
                            readonly>
                    </div>

                    <!-- New -->
                    <div class="border rounded-xl border-(--primary-dark) p-4">
                        <p class="text-xs uppercase tracking-widest text-cyan-300 mb-2">New Name</p>
                        <input type="text" placeholder="Enter new name"
                            class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-cyan-500/20 text-white
                            focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-500/30 transition">
                    </div>

                </div>

                <!-- USERNAME + EMAIL -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <!-- Old -->
                    <div class="border rounded-xl border-(--primary-light) p-4 space-y-3">
                        <div>
                            <p class="text-xs text-purple-300 mb-1">Old Username</p>
                            <input class="w-full px-4 py-2 rounded-lg bg-slate-950 text-slate-400 border border-purple-500/10" value="muhtashim_dev" readonly>
                        </div>

                        <div>
                            <p class="text-xs text-purple-300 mb-1">Old Email</p>
                            <input class="w-full px-4 py-2 rounded-lg bg-slate-950 text-slate-400 border border-purple-500/10" value="old@email.com" readonly>
                        </div>
                    </div>

                    <!-- New -->
                    <div class="border rounded-xl border-(--primary-dark) p-4 space-y-3">
                        <div>
                            <p class="text-xs text-cyan-300 mb-1">New Username</p>
                            <input type="text" placeholder="New username"
                                class="w-full px-4 py-2 rounded-lg bg-slate-900 text-white border border-cyan-500/20 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-500/30">
                        </div>

                        <div>
                            <p class="text-xs text-cyan-300 mb-1">New Email</p>
                            <input type="email" placeholder="New email"
                                class="w-full px-4 py-2 rounded-lg bg-slate-900 text-white border border-cyan-500/20 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-500/30">
                        </div>
                    </div>

                </div>

                <!-- MOBILE -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <!-- Old -->
                    <div class="border rounded-xl border-(--primary-light) p-4">
                        <p class="text-xs text-purple-300 mb-2">Old Mobile</p>
                        <input value="0300-1234567"
                            class="w-full px-4 py-3 rounded-xl bg-slate-950 text-slate-400 border border-purple-500/10"
                            readonly>
                    </div>

                    <!-- New -->
                    <div class="border rounded-xl border-(--primary-dark) p-4">
                        <p class="text-xs text-cyan-300 mb-2">New Mobile</p>
                        <input type="text" placeholder="Enter new mobile"
                            class="w-full px-4 py-3 rounded-xl bg-slate-900 text-white border border-cyan-500/20
                            focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-500/30">
                    </div>

                </div>

                <!-- PASSWORD -->
                <div class="border rounded-xl border-(--primary-light) p-5">
                    <p class="text-xs text-pink-300 mb-2 uppercase tracking-widest">Change Password</p>
                    <input type="password" placeholder="Enter new password"
                        class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-pink-500/20 text-white
                        focus:outline-none focus:border-pink-400 focus:ring-2 focus:ring-pink-500/30">
                </div>

                <!-- ACTION BUTTONS -->
                <div class="flex justify-between items-center sm:flex-row gap-4">

                    <x-button>
                        Save Changes
                    </x-button>


                    <x-button variant="secondary" :icon="false">
                        Save Changes
                    </x-button>

                    

                </div>

            </form>

            </div>

        </div>

    </main>

</body>
</html>
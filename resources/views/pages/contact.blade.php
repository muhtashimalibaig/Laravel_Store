<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Neon Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: var(--bg-primary);
        }
    </style>
</head>

<body class="text-white">

    @include('components.navbar')

    <!-- Background Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(139,92,246,0.25),transparent_60%)] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(0,229,255,0.08),transparent_60%)] pointer-events-none"></div>

    <main class="relative z-10 px-4 py-14">

        <div class="max-w-7xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold">Contact Us</h1>
                <p class="text-slate-400 mt-2">We’re here to help you 24/7</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- CONTACT FORM -->
                <div class="neon-banner-card p-6">

                    <h2 class="text-2xl font-semibold mb-6">Send us a message</h2>

                    <form class="space-y-5">

                        <!-- Name + Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <div>
                                <label class="text-sm text-slate-300">Name</label>
                                <input type="text"
                                    placeholder="Your name"
                                    class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/30">
                            </div>

                            <div>
                                <label class="text-sm text-slate-300">Email</label>
                                <input type="email"
                                    placeholder="Your email"
                                    class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/30">
                            </div>

                        </div>

                        <!-- Subject -->
                        <div>
                            <label class="text-sm text-slate-300">Subject</label>
                            <input type="text"
                                placeholder="Subject"
                                class="w-full mt-1 px-4 py-2.5 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/30">
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="text-sm text-slate-300">Message</label>
                            <textarea rows="5"
                                placeholder="Write your message..."
                                class="w-full mt-1 px-4 py-3 rounded-xl bg-slate-900 border border-purple-500/20 text-white focus:outline-none focus:ring-2 focus:ring-purple-500/30"></textarea>
                        </div>

                        <!-- Button -->
                        <button type="submit"
                            class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold shadow-[0_20px_60px_rgba(139,92,246,0.35)] hover:-translate-y-1 transition">
                            Send Message
                        </button>

                    </form>

                </div>

                <!-- CONTACT INFO -->
                <div class="space-y-6">

                    <!-- Card 1 -->
                    <div class="neon-banner-card p-6 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center">
                            📧
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Email Support</h3>
                            <p class="text-slate-400 text-sm">support@neonstore.com</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="neon-banner-card p-6 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 flex items-center justify-center">
                            📞
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Phone</h3>
                            <p class="text-slate-400 text-sm">+92 300 1234567</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="neon-banner-card p-6 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-pink-500/10 flex items-center justify-center">
                            📍
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Location</h3>
                            <p class="text-slate-400 text-sm">Punjab, Pakistan</p>
                        </div>
                    </div>

                    <!-- Extra Info -->
                    <div class="neon-banner-card p-6">
                        <h3 class="text-lg font-semibold mb-2">Working Hours</h3>
                        <p class="text-slate-400 text-sm">
                            Monday - Saturday<br>
                            9:00 AM - 8:00 PM
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </main>

    @include('components.footer')

</body>
</html>
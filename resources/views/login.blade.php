<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in — Campus Service Portal</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] } } } };
    </script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-white text-slate-900 font-sans antialiased min-h-screen flex flex-col">
    <!-- Start: Sign in -->
    <div class="flex-1 flex items-center justify-center p-4 bg-white">
        <div class="w-full max-w-md">
            <!-- Start: Brand -->
            <div class="flex justify-center mb-8">
                <a href="index.html" class="inline-flex flex-col items-center gap-3">
                    <img src="assets/img/logo.png" alt="Campus Service Portal" class="h-16 w-16">
                    <span class="text-sm font-semibold text-slate-900">Campus Service Portal</span>
                </a>
            </div>
            <!-- End: Brand -->

            <!-- Start: Sign in card -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8">
                <div class="mb-6">
                    <h1 class="text-xl font-bold text-slate-900">Sign in</h1>
                    <p class="mt-1 text-sm text-slate-500">Use your campus email to open a ticket or check one you already sent.</p>
                </div>

                <!-- Start: Sign in form -->
                <form action="dashboard.html" method="get" class="space-y-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-2">Campus email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i data-lucide="mail" class="h-5 w-5"></i>
                            </div>
                            <input type="email" id="email" name="email" required autofocus placeholder="you@campus.ac.ug"
                                class="block w-full pl-10 pr-3 py-3 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#2563eb] focus:ring-1 focus:ring-[#2563eb]">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-600 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i data-lucide="lock" class="h-5 w-5"></i>
                            </div>
                            <input type="password" id="password" name="password" required placeholder="••••••••"
                                class="block w-full pl-10 pr-3 py-3 rounded-xl bg-white border border-slate-300 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#2563eb] focus:ring-1 focus:ring-[#2563eb]">
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-[#2563eb] focus:ring-[#2563eb]">
                            <span class="text-sm text-slate-500">Keep me signed in</span>
                        </label>
                        <a href="forgot-password.html" class="text-sm font-medium text-[#2563eb] hover:text-[#1d4ed8]">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8]">Sign in</button>
                </form>
                <!-- End: Sign in form -->

                <!-- Start: Demo accounts -->
                <div class="mt-6 pt-6 border-t border-slate-200">
                    <p class="text-xs text-slate-500 mb-3 text-center">Try a demo account</p>
                    <div class="grid grid-cols-3 gap-2">
                        <a href="dashboard.html" class="text-center text-xs px-2 py-2 rounded-lg border border-slate-200 bg-white hover:border-[#2563eb]">Student</a>
                        <a href="staff/dashboard.html" class="text-center text-xs px-2 py-2 rounded-lg border border-slate-200 bg-white hover:border-[#d97706]">Staff</a>
                        <a href="admin/dashboard.html" class="text-center text-xs px-2 py-2 rounded-lg border border-slate-200 bg-white hover:border-[#2563eb]">Admin</a>
                    </div>
                </div>
                <!-- End: Demo accounts -->

                <p class="mt-6 text-center text-sm text-slate-500">
                    New here?
                    <a href="register.html" class="text-[#2563eb] hover:text-[#1d4ed8]">Create an account</a>
                </p>
            </div>
            <!-- End: Sign in card -->
        </div>
    </div>
    <!-- End: Sign in -->

    <!-- Start: Footer -->
    <footer class="bg-[#1e3a8a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-3">
                <p class="text-sm text-blue-100">© 2026 <span class="font-semibold text-white">Campus Service Portal</span>. All rights reserved.</p>
                <p class="text-sm text-blue-200">Estates · ICT · Halls · Hostels · Registry</p>
            </div>
        </div>
    </footer>
    <!-- End: Footer -->
    <script>lucide.createIcons();</script>
</body>
</html>

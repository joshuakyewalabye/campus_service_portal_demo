<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose a new password — Campus Service Portal</title>
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
    <!-- Start: New password -->
    <div class="flex-1 flex items-center justify-center p-4 bg-white">
        <div class="w-full max-w-md">
            <!-- Start: Brand -->
            <div class="flex justify-center mb-8">
                <a href="index.html"><img src="assets/img/logo.png" alt="Campus Service Portal" class="h-16 w-16"></a>
            </div>
            <!-- End: Brand -->

            <!-- Start: New password card -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8">
                <h1 class="text-xl font-bold mb-2">Choose a new password</h1>
                <p class="text-sm text-slate-500 mb-6">Use at least 8 characters. You will sign in again after you save it.</p>
                <!-- Start: New password form -->
                <form action="login.html" method="get" class="space-y-5">
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-600 mb-2">New password</label>
                        <input type="password" id="password" name="password" required minlength="8" class="input-field">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-600 mb-2">Confirm new password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required minlength="8" class="input-field">
                    </div>
                    <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8]">Update password</button>
                </form>
                <!-- End: New password form -->
            </div>
            <!-- End: New password card -->
        </div>
    </div>
    <!-- End: New password -->

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

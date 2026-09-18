<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account — Campus Service Portal</title>
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
    <!-- Start: Register -->
    <div class="flex-1 flex items-center justify-center p-4 bg-white">
        <div class="w-full max-w-md">
            <!-- Start: Brand -->
            <div class="flex justify-center mb-8">
                <a href="index.html"><img src="assets/img/logo.png" alt="Campus Service Portal" class="h-16 w-16"></a>
            </div>
            <!-- End: Brand -->

            <!-- Start: Register card -->
            <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8">
                <div class="mb-6">
                    <h1 class="text-xl font-bold">Create your account</h1>
                    <p class="mt-1 text-sm text-slate-500">Students and lecturers can sign up here. If you work in a department such as Estates, ICT, or Halls, ask the helpdesk admin to add you.</p>
                    <p class="mt-2 text-xs text-[#d97706]">All fields are required.</p>
                </div>

                <!-- Start: Register form -->
                <form action="dashboard.html" method="get" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-600 mb-2">Full name <span class="text-[#d97706]">*</span></label>
                        <input type="text" id="name" name="name" required minlength="2" autofocus placeholder="Aisha Namuli" class="input-field">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-600 mb-2">Campus email <span class="text-[#d97706]">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="aisha.namuli@campus.ac.ug" class="input-field">
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium text-slate-600 mb-2">I am a <span class="text-[#d97706]">*</span></label>
                        <select id="role" name="role" required class="input-field">
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-600 mb-2">Password <span class="text-[#d97706]">*</span></label>
                        <input type="password" id="password" name="password" required minlength="8" class="input-field">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-600 mb-2">Confirm password <span class="text-[#d97706]">*</span></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required minlength="8" class="input-field">
                    </div>
                    <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8]">Create account</button>
                </form>
                <!-- End: Register form -->

                <p class="mt-6 text-center text-sm text-slate-500">
                    Already have an account?
                    <a href="login.html" class="text-[#2563eb] hover:text-[#1d4ed8]">Sign in</a>
                </p>
            </div>
            <!-- End: Register card -->
        </div>
    </div>
    <!-- End: Register -->

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

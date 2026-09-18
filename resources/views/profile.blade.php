<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account — Campus Service Portal</title>
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
<body class="bg-white text-slate-900 font-sans antialiased min-h-screen">
    <!-- Start: Sidebar toggle (checkbox, no JavaScript) -->
    <input type="checkbox" id="sidebar-toggle" class="peer hidden">
    <label for="sidebar-toggle" class="fixed inset-0 bg-slate-900/30 z-30 hidden peer-checked:block sm:!hidden"></label>
    <!-- End: Sidebar toggle -->

    <!-- Start: Header -->
    <header class="fixed top-0 z-50 w-full bg-white border-b border-slate-200">
        <div class="px-2 py-2 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <label for="sidebar-toggle" class="inline-flex items-center p-2 text-slate-500 rounded-lg sm:hidden hover:bg-slate-100 cursor-pointer">
                        <span class="sr-only">Open sidebar</span>
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </label>
                    <a href="dashboard.html" class="flex items-center ms-2 md:me-8">
                        <img src="assets/img/logo.png" alt="Campus Service Portal" class="h-10 w-10 me-3">
                        <div class="flex flex-col">
                            <span class="font-semibold text-slate-900 text-base">Campus Service Portal</span>
                            <span class="text-xs text-slate-500">Campus helpdesk</span>
                        </div>
                    </a>
                </div>
                <div class="flex items-center space-x-3">
                    <!-- Start: Header notifications -->
                    <details class="menu-dropdown relative">
                        <summary class="p-2 text-slate-500 rounded-lg hover:text-slate-900 hover:bg-slate-100 cursor-pointer relative list-none">
                            <i data-lucide="bell" class="w-5 h-5"></i>
                            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-[#d97706] rounded-full"></span>
                        </summary>
                        <div class="absolute right-0 mt-2 w-80 bg-white border border-slate-200 rounded-lg shadow-lg z-50">
                            <div class="px-4 py-2 border-b border-slate-200 flex justify-between items-center bg-slate-50">
                                <p class="text-sm font-medium">Notifications</p>
                                <a href="notifications.html" class="text-xs text-[#2563eb]">View all</a>
                            </div>
                            <a href="requests/show.html" class="block px-4 py-3 hover:bg-slate-50 border-b border-slate-200">
                                <p class="text-sm">Status updated to <span class="text-[#d97706]">In progress</span></p>
                                <p class="text-xs text-slate-500 mt-1">Broken projector — Lecture Hall B2 · 12 min ago</p>
                            </a>
                            <a href="requests/show.html" class="block px-4 py-3 hover:bg-slate-50">
                                <p class="text-sm">New comment from Estates</p>
                                <p class="text-xs text-slate-500 mt-1">Technician scheduled for Monday · 1 hr ago</p>
                            </a>
                        </div>
                    </details>
                    <!-- End: Header notifications -->
                    <!-- Start: Header user menu -->
                    <details class="menu-dropdown relative">
                        <summary class="flex items-center gap-2 bg-slate-50 rounded-lg p-1 text-sm border border-slate-200 hover:bg-slate-100 cursor-pointer list-none">
                            <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center text-[#2563eb] border border-blue-100 text-xs font-semibold">AN</div>
                            <div class="hidden md:block text-left mr-1">
                                <div class="text-xs font-medium text-slate-900">Aisha Namuli</div>
                                <div class="text-[10px] text-slate-500">Student</div>
                            </div>
                            <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                        </summary>
                        <div class="absolute right-0 mt-2 w-56 bg-white border border-slate-200 rounded-lg shadow-lg z-50">
                            <div class="px-4 py-3 border-b border-slate-200 bg-slate-50">
                                <p class="text-sm font-medium">Aisha Namuli</p>
                                <p class="text-xs text-slate-500 truncate">aisha.namuli@campus.ac.ug</p>
                            </div>
                            <a href="profile.html" class="flex items-center px-4 py-2 text-sm text-slate-600 hover:bg-slate-50"><i data-lucide="user" class="w-4 h-4 mr-2"></i>My Profile</a>
                            <a href="profile.html" class="flex items-center px-4 py-2 text-sm text-slate-600 hover:bg-slate-50"><i data-lucide="settings" class="w-4 h-4 mr-2"></i>Account Settings</a>
                            <a href="login.html" class="flex items-center px-4 py-2 text-sm text-[#d97706] hover:bg-slate-50 border-t border-slate-200"><i data-lucide="log-out" class="w-4 h-4 mr-2"></i>Sign out</a>
                        </div>
                    </details>
                    <!-- End: Header user menu -->
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 -translate-x-full peer-checked:translate-x-0 sm:translate-x-0 bg-white border-r border-slate-200 flex flex-col">
        <div class="flex-1 px-3 py-4 overflow-y-auto sidebar-scrollbar">
            <div class="space-y-1 mb-5"><p class="px-3 text-xs font-semibold text-slate-400 uppercase mb-2">Main</p><a href="dashboard.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="layout-dashboard" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">Dashboard</span></a><a href="requests/index.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="clipboard-list" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">My tickets</span></a><a href="requests/create.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="plus-circle" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">New ticket</span></a><a href="notifications.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="bell" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">Notifications</span></a></div><div class="space-y-1 mb-5"><p class="px-3 text-xs font-semibold text-slate-400 uppercase mb-2">Account</p><a href="profile.html" class="sidebar-item active border-l-3 border-[#2563eb] bg-blue-50 text-[#2563eb] flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="user-cog" class="w-5 h-5 text-[#2563eb] group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">My Account</span></a></div>
        </div>
        <!-- Start: Sidebar user card -->
        <div class="mt-auto border-t border-slate-200 p-4">
            <div class="flex items-center space-x-3 mb-3">
                <div class="relative">
                    <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center bg-white text-sm font-semibold text-[#2563eb]">AN</div>
                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-slate-900 truncate">Aisha Namuli</p>
                    <p class="text-xs text-slate-500 truncate">aisha.namuli@campus.ac.ug</p>
                </div>
            </div>
            <div class="flex items-center gap-2 px-3 py-2 bg-white rounded-lg border border-slate-200">
                <i data-lucide="graduation-cap" class="w-4 h-4 text-[#2563eb]"></i>
                <span class="text-xs font-semibold text-slate-800 uppercase tracking-wide">Student</span>
            </div>
        </div>
        <!-- End: Sidebar user card -->
    </aside>
    <!-- End: Sidebar -->

    <!-- Start: Main content -->
    <div class="pt-16 sm:pl-64 min-h-screen flex flex-col">
        <main class="flex-1 pb-8 px-4 sm:px-8 lg:px-10 pt-6">

            <!-- Start: Page heading -->
            <div class="max-w-2xl">
                <h1 class="text-xl font-semibold mb-2">Your account</h1>
                <p class="text-sm text-slate-500 mb-6">Change your name or password. Your role is set by the helpdesk admin.</p>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Profile form -->
            <form action="profile.html" method="get" class="bg-white border border-slate-200 rounded-xl p-6 space-y-5 shadow-sm max-w-2xl">
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Full name</label>
                    <input class="input-field" name="name" value="Aisha Namuli">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Email</label>
                    <input type="email" class="input-field" name="email" value="aisha.namuli@campus.ac.ug">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Role</label>
                    <input class="input-field bg-slate-50" value="Student" disabled>
                    <p class="text-xs text-slate-500 mt-2">Role changes are performed by an administrator.</p>
                </div>
                <hr class="border-slate-200">
                <p class="text-sm font-medium text-slate-600">Change password (optional)</p>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Current password</label>
                    <input type="password" name="current_password" class="input-field">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">New password</label>
                    <input type="password" name="password" class="input-field">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-2">Confirm new password</label>
                    <input type="password" name="password_confirmation" class="input-field">
                </div>
                <button type="submit" class="px-5 py-2.5 bg-[#2563eb] hover:bg-[#1d4ed8] rounded-lg text-sm font-medium text-white">Save changes</button>
            </form>
            <!-- End: Profile form -->

        </main>
        <!-- Start: Footer -->
        <footer class="bg-[#1e3a8a] mt-auto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex flex-col md:flex-row justify-between items-center gap-3">
                    <p class="text-sm text-blue-100">© 2026 <span class="font-semibold text-white">Campus Service Portal</span>. All rights reserved.</p>
                    <p class="text-sm text-blue-200">Estates · ICT · Halls · Hostels · Registry</p>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->
    </div>
    <!-- End: Main content -->

    <script>lucide.createIcons();</script>
</body>
</html>

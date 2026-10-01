<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact list | Campus Service Portal</title>
    <meta name="description" content="Messages sent to the campus helpdesk.">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 400: '#60a5fa', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8' },
                        gold: { 400: '#fbbf24', 500: '#f59e0b', 600: '#d97706' },
                    },
                    fontFamily: { sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'] },
                }
            }
        };
    </script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-white text-slate-900 font-sans antialiased">
    <!-- Start: Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="index.html" class="flex items-center gap-3">
                    <img src="assets/img/logo.png" alt="Campus Service Portal" class="h-11 w-11">
                    <div class="hidden sm:block">
                        <p class="text-sm font-semibold text-slate-900 leading-tight">Campus Service Portal</p>
                        <p class="text-[11px] text-slate-500">Helpdesk for students and staff</p>
                    </div>
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="index.html" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Home</a>
                    <a href="index.html#how-it-works" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">How it works</a>
                    <a href="index.html#services" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Services</a>
                    <a href="index.html#who" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Who can use it</a>
                    <a href="contact.html" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Contact us</a>
                    <a href="contact-list.html" class="text-slate-900 text-sm font-medium">Contact list</a>
                    <a href="login.html" class="px-5 py-2.5 border border-slate-200 text-slate-900 rounded-lg font-medium text-sm hover:bg-white hover:border-[#2563eb]/40">Sign in</a>
                    <a href="register.html" class="px-5 py-2.5 bg-[#2563eb] text-white rounded-lg font-medium text-sm hover:bg-[#1d4ed8] glow-blue">Create account</a>
                </div>
                <label for="mobile-nav-toggle" class="md:hidden p-2 text-slate-900 cursor-pointer">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </label>
            </div>
            <input type="checkbox" id="mobile-nav-toggle" class="peer hidden">
            <div class="hidden peer-checked:block md:!hidden py-4 border-t border-slate-200">
                <div class="flex flex-col gap-4">
                    <a href="index.html" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Home</a>
                    <a href="index.html#how-it-works" class="text-slate-500 hover:text-slate-900 text-sm font-medium">How it works</a>
                    <a href="index.html#services" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Services</a>
                    <a href="index.html#who" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Who can use it</a>
                    <a href="contact.html" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Contact us</a>
                    <a href="contact-list.html" class="text-slate-900 text-sm font-medium">Contact list</a>
                    <a href="login.html" class="px-5 py-2.5 border border-slate-200 text-slate-900 rounded-lg font-medium text-sm text-center">Sign in</a>
                    <a href="register.html" class="px-5 py-2.5 bg-[#2563eb] text-white rounded-lg font-medium text-sm text-center">Create account</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header -->

    <!-- Start: Contact list -->
    <section class="relative pt-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-16 lg:py-20">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#d97706] mb-3">Helpdesk</p>
                    <h1 class="text-3xl sm:text-4xl font-bold leading-tight">Contact list</h1>
                    <p class="text-sm sm:text-base text-slate-500 mt-3 max-w-xl">Messages sent from the contact form.</p>
                </div>
                <a href="contact.html" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 border border-slate-200 text-slate-900 rounded-lg font-medium text-sm hover:border-[#2563eb]/40">
                    <i data-lucide="mail" class="w-4 h-4"></i>
                    New message
                </a>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[860px]">
                        <thead>
                            <tr class="border-b border-slate-200 bg-slate-50">
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Name</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Email</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Department</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Message</th>
                                <th class="py-3 px-4 text-center text-sm font-semibold text-slate-500">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm font-medium">Aisha Namuli</td>
                                <td class="py-3 px-4 text-sm text-slate-500">aisha.namuli@campus.ac.ug</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-blue-50 text-[#2563eb]">Estates</span></td>
                                <td class="py-3 px-4 text-sm text-slate-500 max-w-xs">The light in Hostel C, corridor 2, has been out since Monday.</td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="contact.html" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-[#2563eb] bg-blue-50 border border-blue-100 hover:bg-blue-100">
                                            <i data-lucide="eye" class="w-3.5 h-3.5"></i>
                                            View
                                        </a>
                                        <a href="contact.html" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-[#d97706] bg-amber-50 border border-amber-100 hover:bg-amber-100">
                                            <i data-lucide="edit" class="w-3.5 h-3.5"></i>
                                            Edit
                                        </a>
                                        <a href="#delete-confirm" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-red-600 bg-white border border-red-200 hover:bg-red-50">
                                            <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Contact list -->

    <!-- Start: Footer -->
    <footer class="bg-[#1e3a8a] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <img src="assets/img/logo.png" alt="" class="h-12 w-12">
                        <span class="font-semibold">Campus Service Portal</span>
                    </div>
                    <p class="text-blue-100 text-sm leading-relaxed max-w-sm">The campus helpdesk for repairs, room bookings, and ICT support. Sign in with your campus email.</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Quick links</h4>
                    <ul class="space-y-3 text-sm text-blue-100">
                        <li><a href="login.html" class="hover:text-white">Sign in</a></li>
                        <li><a href="register.html" class="hover:text-white">Create account</a></li>
                        <li><a href="requests/create.html" class="hover:text-white">Open a ticket</a></li>
                        <li><a href="staff/dashboard.html" class="hover:text-white">Staff inbox</a></li>
                        <li><a href="contact.html" class="hover:text-white">Contact us</a></li>
                        <li><a href="contact-list.html" class="hover:text-white">Contact list</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Departments</h4>
                    <ul class="space-y-3 text-sm text-blue-100">
                        <li>Estates — Block A, ground floor</li>
                        <li>ICT Helpdesk — Library, 1st floor</li>
                        <li>Halls office — Academic block</li>
                        <li>Hostels office — Gate 2</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Contact</h4>
                    <ul class="space-y-2 text-sm text-blue-100">
                        <li><a href="mailto:helpdesk@campus.ac.ug" class="hover:text-white">helpdesk@campus.ac.ug</a></li>
                        <li>Estates: 0414 000 210</li>
                        <li>ICT: 0414 000 211</li>
                        <li class="text-[#fbbf24] pt-2">Mon–Fri, 8:00am – 5:00pm</li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-blue-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-blue-200">
                <p>© 2026 Campus Service Portal. All rights reserved.</p>
                <p>Privacy · Acceptable use · Helpdesk policy</p>
            </div>
        </div>
    </footer>
    <!-- End: Footer -->

    <script>lucide.createIcons();</script>
</body>
</html>

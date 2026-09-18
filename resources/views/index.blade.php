@extends('layouts.main')
@section('content')
    <!-- Start: Header -->
  @include('layouts.header')
    <!-- End: Header -->

    <!-- Start: Hero -->
    <section class="relative pt-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center py-16 lg:py-20">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-slate-200 bg-white mb-6">
                        <i data-lucide="clock" class="w-4 h-4 text-[#d97706]"></i>
                        <span class="text-sm text-slate-500">Helpdesk hours: Mon–Fri, 8:00am – 5:00pm</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-5 leading-tight">
                        Something broken on campus?<br>
                        <span class="text-gradient">Tell us here.</span>
                    </h1>
                    <p class="text-sm sm:text-base text-slate-500 max-w-xl mx-auto lg:mx-0 mb-6 leading-relaxed">
                        Use your campus email to report a fault, book a room, or ask ICT for help. You will see who picked up your ticket and when they plan to come.
                    </p>
                    <div class="grid gap-2 text-left max-w-xl mx-auto lg:mx-0 mb-8">
                        <div class="flex items-start gap-2 text-sm text-slate-600">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i>
                            <span>Open a ticket in about a minute from your phone.</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-slate-600">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i>
                            <span>Get an email when Estates or ICT takes the job.</span>
                        </div>
                        <div class="flex items-start gap-2 text-sm text-slate-600">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i>
                            <span>Add a photo so the technician knows what to bring.</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="register.html" class="group flex items-center gap-2 px-8 py-4 bg-[#2563eb] text-white rounded-xl font-semibold text-sm hover:bg-[#1d4ed8] glow-blue w-full sm:w-auto justify-center">
                            Open a ticket
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="login.html" class="flex items-center justify-center gap-2 px-8 py-4 border border-slate-200 bg-white rounded-xl font-semibold text-sm text-slate-900 hover:border-[#2563eb]/40 w-full sm:w-auto">
                            I already have an account
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-xl">
                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <p class="text-xs uppercase tracking-wider text-[#d97706] font-semibold">Today</p>
                                <p class="text-lg font-semibold mt-1">Tickets being handled</p>
                            </div>
                            <span class="text-xs px-2.5 py-1 rounded-full bg-blue-50 text-[#2563eb] border border-blue-100">12 open</span>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                <div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center shrink-0">
                                    <i data-lucide="monitor-play" class="w-4 h-4 text-[#2563eb]"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate">No display in Lecture Hall B2</p>
                                    <p class="text-xs text-slate-500 mt-0.5">ICT · Peter is on site</p>
                                </div>
                                <span class="text-[11px] px-2 py-1 rounded-full bg-amber-50 text-[#d97706] shrink-0">Working on it</span>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                <div class="w-9 h-9 rounded-lg bg-amber-50 flex items-center justify-center shrink-0">
                                    <i data-lucide="droplets" class="w-4 h-4 text-[#d97706]"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate">Tap leaking in Hostel C, room 14</p>
                                    <p class="text-xs text-slate-500 mt-0.5">Estates · waiting for a plumber</p>
                                </div>
                                <span class="text-[11px] px-2 py-1 rounded-full bg-blue-50 text-[#2563eb] shrink-0">New</span>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                <div class="w-9 h-9 rounded-lg bg-emerald-50 flex items-center justify-center shrink-0">
                                    <i data-lucide="calendar-check" class="w-4 h-4 text-emerald-600"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate">Hall A1 reserved for Friday seminar</p>
                                    <p class="text-xs text-slate-500 mt-0.5">Halls office · confirmed</p>
                                </div>
                                <span class="text-[11px] px-2 py-1 rounded-full bg-emerald-50 text-emerald-700 shrink-0">Done</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start: Hero stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 pb-16 border-t border-slate-200 pt-8">
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="timer" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">~1 min</div><div class="text-sm text-slate-500">To open a ticket</div></div>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="building-2" class="w-6 h-6 text-[#d97706]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">5 departments</div><div class="text-sm text-slate-500">Ready to help</div></div>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="bell" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Email alerts</div><div class="text-sm text-slate-500">When your ticket moves</div></div>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="smartphone" class="w-6 h-6 text-[#d97706]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Works on phone</div><div class="text-sm text-slate-500">No app to install</div></div>
                </div>
            </div>
            <!-- End: Hero stats -->
        </div>
    </section>
    <!-- End: Hero -->

    <!-- Start: How it works -->
    <section id="how-it-works" class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#d97706] mb-3">How it works</p>
                <h2 class="text-2xl sm:text-3xl font-bold mb-3">Four steps, then you are done</h2>
                <p class="text-sm text-slate-500">You do not need to visit an office unless the team asks you to come in.</p>
            </div>
            <ol class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#2563eb]">Step 01</span>
                    <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center my-4"><i data-lucide="file-plus" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <h3 class="font-bold mb-2">Write it down</h3>
                    <p class="text-sm text-slate-500">Say what is wrong, where it is, and attach a photo if you have one.</p>
                </li>
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#d97706]">Step 02</span>
                    <div class="w-12 h-12 rounded-lg bg-amber-50 flex items-center justify-center my-4"><i data-lucide="user-check" class="w-6 h-6 text-[#d97706]"></i></div>
                    <h3 class="font-bold mb-2">Someone takes it</h3>
                    <p class="text-sm text-slate-500">The department that owns the job assigns a person. You get a name, not a silent inbox.</p>
                </li>
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#2563eb]">Step 03</span>
                    <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center my-4"><i data-lucide="wrench" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <h3 class="font-bold mb-2">They come and fix it</h3>
                    <p class="text-sm text-slate-500">Ask a question on the ticket if you need to change the time or add a detail.</p>
                </li>
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#d97706]">Step 04</span>
                    <div class="w-12 h-12 rounded-lg bg-amber-50 flex items-center justify-center my-4"><i data-lucide="check-circle-2" class="w-6 h-6 text-[#d97706]"></i></div>
                    <h3 class="font-bold mb-2">You confirm</h3>
                    <p class="text-sm text-slate-500">If it is still broken, reopen the ticket and it goes back to the same person.</p>
                </li>
            </ol>
        </div>
    </section>
    <!-- End: How it works -->

    <!-- Start: Why use the portal -->
    <section class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-[#d97706] font-semibold text-sm uppercase tracking-wider">Why use the portal</span>
                    <h2 class="text-2xl sm:text-3xl font-bold mt-3 mb-6">Stop walking to the estates office and hoping someone wrote it down</h2>
                    <p class="text-slate-500 text-sm mb-8 leading-relaxed">
                        If the projector fails in the middle of a lecture, you should not have to find the ICT office on foot, then send the same message to three class groups. Open one ticket. The right people see it.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3"><i data-lucide="eye" class="w-5 h-5 text-[#2563eb] shrink-0"></i><span>See whether anyone has opened your ticket</span></div>
                        <div class="flex items-center gap-3"><i data-lucide="user" class="w-5 h-5 text-[#2563eb] shrink-0"></i><span>Know the name of the person handling it</span></div>
                        <div class="flex items-center gap-3"><i data-lucide="message-square" class="w-5 h-5 text-[#2563eb] shrink-0"></i><span>Reply on the ticket instead of starting a new chat</span></div>
                        <div class="flex items-center gap-3"><i data-lucide="history" class="w-5 h-5 text-[#2563eb] shrink-0"></i><span>Keep a record if the same fault comes back next week</span></div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="p-6 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center mb-4"><i data-lucide="message-square" class="w-6 h-6 text-[#2563eb]"></i></div><h3 class="font-bold mb-2">Messages stay on the ticket</h3><p class="text-sm text-slate-500">No more “please resend the photo” after a group chat scrolls past it.</p></div>
                    <div class="p-6 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-lg bg-amber-50 flex items-center justify-center mb-4"><i data-lucide="camera" class="w-6 h-6 text-[#d97706]"></i></div><h3 class="font-bold mb-2">Photos help a lot</h3><p class="text-sm text-slate-500">A picture of the leak or the error screen saves a wasted trip.</p></div>
                    <div class="p-6 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center mb-4"><i data-lucide="mail" class="w-6 h-6 text-[#2563eb]"></i></div><h3 class="font-bold mb-2">Email when it changes</h3><p class="text-sm text-slate-500">You hear about it even if you are not logged in.</p></div>
                    <div class="p-6 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-lg bg-amber-50 flex items-center justify-center mb-4"><i data-lucide="shield-check" class="w-6 h-6 text-[#d97706]"></i></div><h3 class="font-bold mb-2">Your account is yours</h3><p class="text-sm text-slate-500">Only you see your tickets. Staff only see work for their department.</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Why use the portal -->

    <!-- Start: Services -->
    <section id="services" class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#2563eb] mb-3">Services</p>
                <h2 class="text-2xl sm:text-3xl font-bold mb-3">What you can ask for</h2>
                <p class="text-sm text-slate-500">Choose the department that should handle it. If you are not sure, pick Administration and they will route it.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center"><div class="w-12 h-12 mx-auto rounded-lg bg-blue-50 flex items-center justify-center mb-3"><i data-lucide="hammer" class="w-6 h-6 text-[#2563eb]"></i></div><h3 class="font-semibold mb-1">Estates</h3><p class="text-xs text-slate-500">Leaks, lights, broken furniture, AC</p></div>
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center"><div class="w-12 h-12 mx-auto rounded-lg bg-amber-50 flex items-center justify-center mb-3"><i data-lucide="monitor-smartphone" class="w-6 h-6 text-[#d97706]"></i></div><h3 class="font-semibold mb-1">ICT Support</h3><p class="text-xs text-slate-500">Wi-Fi, projectors, campus accounts</p></div>
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center"><div class="w-12 h-12 mx-auto rounded-lg bg-blue-50 flex items-center justify-center mb-3"><i data-lucide="door-open" class="w-6 h-6 text-[#2563eb]"></i></div><h3 class="font-semibold mb-1">Halls</h3><p class="text-xs text-slate-500">Book a lecture room or lab</p></div>
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center"><div class="w-12 h-12 mx-auto rounded-lg bg-amber-50 flex items-center justify-center mb-3"><i data-lucide="home" class="w-6 h-6 text-[#d97706]"></i></div><h3 class="font-semibold mb-1">Hostels</h3><p class="text-xs text-slate-500">Room faults, water, night security</p></div>
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center sm:col-span-2 lg:col-span-1"><div class="w-12 h-12 mx-auto rounded-lg bg-blue-50 flex items-center justify-center mb-3"><i data-lucide="calendar-clock" class="w-6 h-6 text-[#2563eb]"></i></div><h3 class="font-semibold mb-1">Registry</h3><p class="text-xs text-slate-500">Appointments and letters</p></div>
            </div>
        </div>
    </section>
    <!-- End: Services -->

    <!-- Start: Who can use it -->
    <section id="who" class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#d97706] mb-3">Accounts</p>
                <h2 class="text-2xl sm:text-3xl font-bold mb-3">Sign in with the account you already have</h2>
                <p class="text-sm text-slate-500">Students register themselves. Department staff are added by the helpdesk admin.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 rounded-xl bg-white border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-lg bg-blue-50 flex items-center justify-center"><i data-lucide="graduation-cap" class="w-5 h-5 text-[#2563eb]"></i></div>
                        <h3 class="font-bold">Students</h3>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">Report a problem in class, the library, or your hostel.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Open and follow your own tickets</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Leave a comment or a photo</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Say if the fix did not work</li>
                    </ul>
                    <a href="dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm text-[#2563eb]">Open student home <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
                <div class="p-6 rounded-xl bg-white border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-lg bg-amber-50 flex items-center justify-center"><i data-lucide="briefcase" class="w-5 h-5 text-[#d97706]"></i></div>
                        <h3 class="font-bold">Department staff</h3>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">Work the inbox for Estates, ICT, Halls, Hostels, or Registry.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#d97706] mt-0.5"></i>See new requests for your department</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#d97706] mt-0.5"></i>Take a ticket or pass it to a colleague</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#d97706] mt-0.5"></i>Mark it done and leave a short note</li>
                    </ul>
                    <a href="staff/dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm text-[#d97706]">Open staff home <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
                <div class="p-6 rounded-xl bg-white border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-lg bg-blue-50 flex items-center justify-center"><i data-lucide="shield" class="w-5 h-5 text-[#2563eb]"></i></div>
                        <h3 class="font-bold">Helpdesk admin</h3>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">Keep the departments, categories, and user list up to date.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>See every ticket on campus</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Add a department or a category</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Create a staff login when someone joins</li>
                    </ul>
                    <a href="admin/dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm text-[#2563eb]">Open admin home <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Who can use it -->

    <!-- Start: Call to action -->
    <section class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="rounded-2xl border border-slate-200 bg-white p-10 sm:p-14">
                <h2 class="text-2xl sm:text-3xl font-bold mb-4">Need help today?</h2>
                <p class="text-slate-500 mb-8 max-w-xl mx-auto">Create an account with your campus email. If you already signed up last semester, just sign in.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="register.html" class="px-8 py-4 bg-[#2563eb] text-white rounded-xl font-semibold text-sm hover:bg-[#1d4ed8] glow-blue">Create account</a>
                    <a href="login.html" class="px-8 py-4 border border-slate-200 bg-white rounded-xl font-semibold text-sm hover:border-[#2563eb]/40">Sign in</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Call to action -->

    <!-- Start: Footer -->
   @include('layouts.footer')
    <!-- End: Footer -->
@endsectionS

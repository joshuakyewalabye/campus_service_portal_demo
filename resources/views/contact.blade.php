@extends('layouts.main')
@section('content')
    <!-- Start: Header -->
   @include('layouts.header')
    <!-- End: Header -->

    <!-- Start: Contact -->
    <section class="relative pt-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start py-16 lg:py-20">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#d97706] mb-3">Contact us</p>
                    <h1 class="text-3xl sm:text-4xl font-bold mb-5 leading-tight">
                        Need the helpdesk?<br>
                        <span class="text-gradient">We are on campus.</span>
                    </h1>
                    <p class="text-sm sm:text-base text-slate-500 mb-8 leading-relaxed">
                        Use this page for general questions. For a leak, projector, or room booking, open a ticket after you sign in — that reaches the right department faster.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3 p-4 rounded-xl border border-slate-200">
                            <div class="w-11 h-11 rounded-lg bg-blue-50 flex items-center justify-center shrink-0">
                                <i data-lucide="mail" class="w-5 h-5 text-[#2563eb]"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Email</p>
                                <a href="mailto:helpdesk@campus.ac.ug" class="text-sm text-[#2563eb]">helpdesk@campus.ac.ug</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 rounded-xl border border-slate-200">
                            <div class="w-11 h-11 rounded-lg bg-amber-50 flex items-center justify-center shrink-0">
                                <i data-lucide="phone" class="w-5 h-5 text-[#d97706]"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Phone</p>
                                <p class="text-sm text-slate-500">Estates: 0414 000 210</p>
                                <p class="text-sm text-slate-500">ICT: 0414 000 211</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 p-4 rounded-xl border border-slate-200">
                            <div class="w-11 h-11 rounded-lg bg-blue-50 flex items-center justify-center shrink-0">
                                <i data-lucide="clock" class="w-5 h-5 text-[#2563eb]"></i>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Helpdesk hours</p>
                                <p class="text-sm text-slate-500">Monday–Friday, 8:00am – 5:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-xl">
                    <p class="text-xs uppercase tracking-wider text-[#d97706] font-semibold">Send a message</p>
                    <h2 class="text-lg font-semibold mt-1 mb-6">We will reply to your campus email</h2>

                    <form action="{{route('contact.store')}}" method="POST" class="space-y-4">
                        <!-- insert a csrf token , cross site request forgery we must pass -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-600 mb-2">Full name</label>
                            <input type="text" id="name" name="full_name" required minlength="2" placeholder="Aisha Namuli" class="input-field">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-600 mb-2">Campus email</label>
                            <input type="email" id="email" name="campus_email" required placeholder="aisha.namuli@campus.ac.ug" class="input-field">
                        </div>
                        <div>
                            <label for="department" class="block text-sm font-medium text-slate-600 mb-2">Department</label>
                            <select id="department" name="department" required class="input-field">
                                <option value="">Choose one</option>
                                <option value="estates">Estates</option>
                                <option value="ict">ICT Support</option>
                                <option value="halls">Halls</option>
                                <option value="hostels">Hostels</option>
                                <option value="registry">Registry</option>
                                <option value="admin">Administration</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-600 mb-2">Message</label>
                            <textarea id="message" name="message" required rows="5" placeholder="How can we help?" class="input-field"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 px-4 rounded-xl text-sm font-semibold text-white bg-[#2563eb] hover:bg-[#1d4ed8] glow-blue">
                            Send message
                        </button>
                        <p class="text-xs text-slate-500 text-center">Faults and bookings should go through a ticket, not this form.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Contact -->

    <!-- Start: Offices -->
    <section class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#2563eb] mb-3">Offices</p>
                <h2 class="text-2xl sm:text-3xl font-bold mb-3">Where to find us on campus</h2>
                <p class="text-sm text-slate-500">Walk in during helpdesk hours, or send a message and we will point you to the right desk.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center">
                    <div class="w-12 h-12 mx-auto rounded-lg bg-blue-50 flex items-center justify-center mb-3">
                        <i data-lucide="hammer" class="w-6 h-6 text-[#2563eb]"></i>
                    </div>
                    <h3 class="font-semibold mb-1">Estates</h3>
                    <p class="text-xs text-slate-500">Block A, ground floor</p>
                </div>
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center">
                    <div class="w-12 h-12 mx-auto rounded-lg bg-amber-50 flex items-center justify-center mb-3">
                        <i data-lucide="monitor-smartphone" class="w-6 h-6 text-[#d97706]"></i>
                    </div>
                    <h3 class="font-semibold mb-1">ICT Helpdesk</h3>
                    <p class="text-xs text-slate-500">Library, 1st floor</p>
                </div>
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center">
                    <div class="w-12 h-12 mx-auto rounded-lg bg-blue-50 flex items-center justify-center mb-3">
                        <i data-lucide="door-open" class="w-6 h-6 text-[#2563eb]"></i>
                    </div>
                    <h3 class="font-semibold mb-1">Halls office</h3>
                    <p class="text-xs text-slate-500">Academic block</p>
                </div>
                <div class="p-5 rounded-xl bg-white border border-slate-200 text-center">
                    <div class="w-12 h-12 mx-auto rounded-lg bg-amber-50 flex items-center justify-center mb-3">
                        <i data-lucide="home" class="w-6 h-6 text-[#d97706]"></i>
                    </div>
                    <h3 class="font-semibold mb-1">Hostels office</h3>
                    <p class="text-xs text-slate-500">Gate 2</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Offices -->

    <!-- Start: Footer -->
   @include('layouts.footer')
    <!-- End: Footer -->
@endsection

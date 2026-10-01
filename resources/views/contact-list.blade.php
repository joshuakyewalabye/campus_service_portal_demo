@extends('layouts.main')
@section('content')
    <!-- Start: Header -->
@include('layouts.header')
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
                            @foreach($contacts as $contact)
                            <tr class="hover:bg-slate-50">
                                <td class="py-3 px-4 text-sm font-medium">{{$contact->full_name}}</td>
                                <td class="py-3 px-4 text-sm text-slate-500">{{$contact->campus_email}}</td>
                                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-blue-50 text-[#2563eb]">{{$contact->department}}</span></td>
                                <td class="py-3 px-4 text-sm text-slate-500 max-w-xs">{{$contact->message}}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Contact list -->

    <!-- Start: Footer -->
@include('layouts.footer')
    <!-- End: Footer -->
@endsection

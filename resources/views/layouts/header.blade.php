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
                    <a href="{{route('index')}}" class="text-slate-900 text-sm font-medium">Home</a>
                    <a href="#how-it-works" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">How it works</a>
                    <a href="#services" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Services</a>
                    <a href="#who" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Who can use it</a>
                    <a href="{{route('contact')}}" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Contact us</a>
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
                    <a href="{{route('index')}}" class="text-slate-900 text-sm font-medium">Home</a>
                    <a href="#how-it-works" class="text-slate-500 hover:text-slate-900 text-sm font-medium">How it works</a>
                    <a href="#services" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Services</a>
                    <a href="#who" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Who can use it</a>
                    <a href="{{route('contact')}}" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Contact us</a>
                    <a href="login.html" class="px-5 py-2.5 border border-slate-200 text-slate-900 rounded-lg font-medium text-sm text-center">Sign in</a>
                    <a href="register.html" class="px-5 py-2.5 bg-[#2563eb] text-white rounded-lg font-medium text-sm text-center">Create account</a>
                </div>
            </div>
        </div>
    </header>

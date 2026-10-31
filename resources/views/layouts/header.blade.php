 <header class="sticky top-0 z-50 border-b border-stone-200 bg-white">
        <div class="relative mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-x-6 px-4 py-3">
            <a href="index.html" class="flex items-center gap-3">
                <img src="assets/img/logo.png" alt="SMS logo" class="h-10 w-10">
                <span class="leading-tight"><span class="block font-extrabold">Student Management</span><span class="block text-xs text-stone-500">MUBS academic records</span></span>
            </a>
            <input type="checkbox" id="nav-toggle" class="peer hidden">
            <label for="nav-toggle" class="cursor-pointer rounded-lg p-2 text-stone-600 hover:bg-stone-100 lg:hidden"><span class="sr-only">Toggle menu</span><i data-lucide="menu" class="h-6 w-6"></i></label>
            <nav class="hidden w-full flex-col gap-1 pt-3 peer-checked:flex lg:flex lg:w-auto lg:flex-1 lg:flex-row lg:items-center lg:justify-end lg:gap-6 lg:pt-0">
                <a href="{{ route('index') }}" class="block py-2 lg:py-1 text-sm border-b-2 text-brand font-bold border-accent">Home</a>
                <a href="{{ route('about') }}" class="block py-2 lg:py-1 text-sm border-b-2 text-stone-600 border-transparent hover:text-brand">About Us</a>
                <a href="{{ route('courses') }}" class="block py-2 lg:py-1 text-sm border-b-2 text-stone-600 border-transparent hover:text-brand">Courses</a>
                <a href="{{ route('lecturers') }}" class="block py-2 lg:py-1 text-sm border-b-2 text-stone-600 border-transparent hover:text-brand">Lecturers</a>
                <a href="{{ route('dashboard') }}" class="block py-2 lg:py-1 text-sm border-b-2 text-stone-600 border-transparent hover:text-brand">Dashboard</a>
               
             <a href="{{ route('contact') }}" class="block py-2 lg:py-1 text-sm border-b-2 text-stone-600 border-transparent hover:text-brand">Contact</a>
             <details class="menu-dropdown relative">
    <summary class="flex cursor-pointer items-center gap-1 border-b-2 py-2 text-sm lg:py-1 text-stone-600 border-transparent hover:text-brand">
        Records <i data-lucide="chevron-down" class="h-4 w-4"></i>
    </summary>
    <div class="z-50 mt-1 w-48 rounded-lg border border-stone-200 bg-white py-1 shadow-lg lg:absolute lg:right-0">
        <a href="{{ url('/students') }}" class="block px-4 py-2 text-sm text-stone-700 hover:bg-brand-soft">Students</a>
        <a href="{{ url('/registrations') }}" class="block px-4 py-2 text-sm text-stone-700 hover:bg-brand-soft">Registrations</a>
        <a href="{{ url('/admin/users') }}" class="block px-4 py-2 text-sm text-stone-700 hover:bg-brand-soft">Users and roles</a>
    </div>
</details>
             <!-- Blade: @can('manage students') -->
                <details class="menu-dropdown relative">
                    <summary class="flex cursor-pointer items-center gap-1 border-b-2 py-2 text-sm lg:py-1 text-stone-600 border-transparent hover:text-brand">Records <i data-lucide="chevron-down" class="h-4 w-4"></i></summary>
                    <div class="z-50 mt-1 w-48 rounded-lg border border-stone-200 bg-white py-1 shadow-lg lg:absolute lg:right-0">
                        <a href="{{ route('students') }}" class="block px-4 py-2 text-sm text-stone-700 hover:bg-brand-soft">Students</a>
                        <a href="{{ route('registrations') }}" class="block px-4 py-2 text-sm text-stone-700 hover:bg-brand-soft">Registrations</a>
                        <a href="admin/users.html" class="block px-4 py-2 text-sm text-stone-700 hover:bg-brand-soft">Users and roles</a>
                    </div>
                </details>
                <!-- Blade: @endcan -->
                <!-- Blade: @guest -->
                <a href="login.html" class="block py-2 text-sm font-semibold text-brand lg:py-1">Sign In</a>
                <a href="register.html" class="block rounded-lg bg-brand px-4 py-2 text-center text-sm font-semibold text-white hover:bg-brand-dark">Create Account</a>
                <!-- Blade: @endguest -->
            </nav>
        </div>
    </header>
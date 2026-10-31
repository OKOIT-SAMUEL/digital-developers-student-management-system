@extends('layouts.main')
@section('content')
 @include('layouts.header')
    
  
    
    <!-- Start: Main content -->
    <main class="flex-1">

        <section class="bg-mesh">
            <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-20 md:grid-cols-2">
                <div class="animate-fade-in">
                    <h1 class="font-display text-4xl font-bold leading-[1.1] tracking-tight md:text-6xl">Every student, course and enrolment in one place.</h1>
                    <p class="lead mt-6">Administrators keep the records, lecturers see who is in their classes, and students register for courses without queues or paperwork.</p>
                    <div class="mt-8 flex flex-wrap gap-3"><a href="register.html" class="glow rounded-lg bg-brand px-6 py-3 text-sm font-semibold text-white hover:bg-brand-dark">Create Account</a><a href="courses.html" class="rounded-lg border border-stone-300 bg-white px-6 py-3 text-sm font-semibold hover:bg-stone-100">Browse courses</a></div>
                </div>
                <div class="rounded-xl border border-stone-200 bg-white p-5 shadow-lg">

                    <p class="mb-1 font-display text-lg font-bold">OKOIT SAMUEL</p>
                    <p class="mb-4 text-sm text-stone-500">Year 3 · Bachelor of Business Computing</p>
                    <ul class="divide-y divide-stone-100 text-sm">
                        <li class="flex justify-between gap-3 py-2.5">
                            <span>BUC3131 Advanced Web Application Development</span>
                            <span class="font-semibold text-brand">Registered</span></li>
                            <li class="flex justify-between gap-3 py-2.5">
                                <span>BUC3112 Mobile Application Development</span>
                                <span class="font-semibold text-brand">Registered</span></li>
                                <li class="flex justify-between gap-3 py-2.5">
                                    <span>BIT2105 Object Oriented Programming</span>
                                    <span class="font-semibold text-accent">Open</span></li></ul>
                                    <p class="mt-4 rounded-lg bg-stone-50 px-3 py-2 text-xs text-stone-600">14 of 15 credit units registered this semester.</p></div>
            </div>
        </section>
        <section class="border-y border-stone-200 bg-white"><div class="mx-auto grid max-w-7xl grid-cols-2 divide-x divide-stone-200 md:grid-cols-4"><div class="px-6 py-6 text-center"><p class="font-display text-3xl font-bold text-brand">240</p><p class="text-sm text-stone-600">Students enrolled</p></div><div class="px-6 py-6 text-center"><p class="font-display text-3xl font-bold text-brand">18</p><p class="text-sm text-stone-600">Courses offered</p></div><div class="px-6 py-6 text-center"><p class="font-display text-3xl font-bold text-brand">12</p><p class="text-sm text-stone-600">Lecturers</p></div><div class="px-6 py-6 text-center"><p class="font-display text-3xl font-bold text-brand">612</p><p class="text-sm text-stone-600">Course registrations</p></div></div></section>
        <section class="mx-auto max-w-7xl px-4 py-16">
            <h2 class="font-display text-2xl font-bold tracking-tight">Built around three roles</h2><p class="mt-1 text-sm text-stone-600">Each person sees only what their role allows.</p>
            <div class="mt-8 grid gap-5 md:grid-cols-3">
                <div class="rounded-xl border border-stone-200 bg-white p-5 "><i data-lucide="shield-check" class="mb-3 h-6 w-6 text-brand"></i><h3 class="text-xl font-bold">Administrator</h3><p class="mt-2 text-sm text-stone-600">Keeps the university records accurate and controls who can do what.</p><ul class="mt-4 space-y-1.5 text-sm text-stone-700"><li>Add, edit and remove students</li><li>Manage the course catalogue</li><li>Oversee all registrations</li><li>Create users and assign roles</li></ul></div>
                <div class="rounded-xl border border-stone-200 bg-white p-5 "><i data-lucide="presentation" class="mb-3 h-6 w-6 text-accent"></i><h3 class="text-xl font-bold">Lecturer</h3><p class="mt-2 text-sm text-stone-600">Knows who is in class before the first lecture.</p><ul class="mt-4 space-y-1.5 text-sm text-stone-700"><li>See assigned courses</li><li>View registered students per course</li><li>Check seat numbers as they change</li></ul></div>
                <div class="rounded-xl border border-stone-200 bg-white p-5 "><i data-lucide="graduation-cap" class="mb-3 h-6 w-6 text-brand"></i><h3 class="text-xl font-bold">Student</h3><p class="mt-2 text-sm text-stone-600">Registers for courses and keeps track of them.</p><ul class="mt-4 space-y-1.5 text-sm text-stone-700"><li>Browse available courses</li><li>Register for a course</li><li>View only your own registrations</li></ul></div>
            </div>
        </section>
        <section class="bg-white"><div class="mx-auto max-w-7xl px-4 py-16">
            <h2 class="font-display text-2xl font-bold tracking-tight">Courses open for registration</h2><p class="mt-1 text-sm text-stone-600">A few of this semester's courses. Seat numbers update as students register.</p>
            <div class="mt-8 grid gap-5 md:grid-cols-3"><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-start justify-between"><span class="rounded-md bg-brand-soft px-2 py-1 text-xs font-bold text-brand-dark">BUC3131</span><span class="whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-brand-soft text-brand-dark border-brand-line">Open</span></div><h3 class="mt-3 text-lg font-bold">Advanced Web Application Development</h3><p class="mt-1 text-sm text-stone-600">Mr Mosh Gyagenda · 5 credit units</p><div class="mt-4"><div><div class="mb-1 flex justify-between text-sm"><span>Seats taken</span><span class="text-stone-500">215 of 265</span></div><div class="h-2 rounded-full bg-stone-100"><div class="h-2 rounded-full bg-brand" style="width:84%"></div></div></div></div></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-start justify-between"><span class="rounded-md bg-brand-soft px-2 py-1 text-xs font-bold text-brand-dark">BUC3112</span><span class="whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-brand-soft text-brand-dark border-brand-line">Open</span></div><h3 class="mt-3 text-lg font-bold">Mobile Application Development</h3><p class="mt-1 text-sm text-stone-600">Ms Joy Tiko · 5 credit units</p><div class="mt-4"><div><div class="mb-1 flex justify-between text-sm"><span>Seats taken</span><span class="text-stone-500">100 of 150</span></div><div class="h-2 rounded-full bg-stone-100"><div class="h-2 rounded-full bg-brand" style="width:82%"></div></div></div></div></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-start justify-between"><span class="rounded-md bg-brand-soft px-2 py-1 text-xs font-bold text-brand-dark">BIT2105</span><span class="whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-brand-soft text-brand-dark border-brand-line">Open</span></div><h3 class="mt-3 text-lg font-bold">Object Oriented Programming</h3><p class="mt-1 text-sm text-stone-600">Mr Makubuya Rodgers · 4 credit units</p><div class="mt-4"><div><div class="mb-1 flex justify-between text-sm"><span>Seats taken</span><span class="text-stone-500">100 of 196</span></div><div class="h-2 rounded-full bg-stone-100"><div class="h-2 rounded-full bg-brand" style="width:72%"></div></div></div></div></div></div>
            <p class="mt-6"><a href="courses.html" class="text-sm font-bold text-brand hover:underline">See all courses</a></p>
        </div></section>
        <section class="mx-auto grid max-w-7xl gap-12 px-4 py-16 md:grid-cols-2">
            <div><h2 class="font-display text-2xl font-bold tracking-tight">How registration works</h2><ol class="mt-8 space-y-6"><li class="flex gap-4"><span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand font-bold text-white">1</span><div><p class="font-bold">Create your account</p><p class="text-sm text-stone-600">Sign up with your university email. An administrator assigns your role.</p></div></li><li class="flex gap-4"><span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand font-bold text-white">2</span><div><p class="font-bold">Browse available courses</p><p class="text-sm text-stone-600">See every course, its lecturer, credit units and how many seats are left.</p></div></li><li class="flex gap-4"><span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand font-bold text-white">3</span><div><p class="font-bold">Register in one step</p><p class="text-sm text-stone-600">Pick a course and confirm. The system blocks duplicate registrations for you.</p></div></li><li class="flex gap-4"><span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand font-bold text-white">4</span><div><p class="font-bold">Lecturers see the class list</p><p class="text-sm text-stone-600">Lecturers open their assigned courses and view every registered student.</p></div></li></ol></div>
            <div><h2 class="font-display text-2xl font-bold tracking-tight">Latest news</h2><div class="mt-8 space-y-4"><div class="rounded-xl border border-stone-200 bg-white p-5 "><p class="text-xs font-semibold text-accent">27 Oct 2026</p><h3 class="mt-1 font-bold">Registration for Semester II opens</h3><p class="mt-2 text-sm text-stone-600">Students can register for Semester II courses from 9 November. Check seat availability early.</p></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><p class="text-xs font-semibold text-accent">24 Oct 2026</p><h3 class="mt-1 font-bold">New course: Software Engineering</h3><p class="mt-2 text-sm text-stone-600">BUC3120 joins the Year 3 catalogue, taught by Proffessor Kyeyune.</p></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><p class="text-xs font-semibold text-accent">20 Oct 2026</p><h3 class="mt-1 font-bold">Lecturer class lists now online</h3><p class="mt-2 text-sm text-stone-600">Lecturers can view registered students for every assigned course from their dashboard.</p></div></div></div>
        </section>
        <section class="mx-auto max-w-7xl px-4 pb-16"><div class="rounded-2xl bg-brand px-8 py-10 text-white md:flex md:items-center md:justify-between md:gap-8"><div><h2 class="font-display text-2xl font-bold">Ready to register for your courses?</h2><p class="mt-2 max-w-xl text-teal-50">Create your account in under a minute and see which courses still have seats.</p></div><a href="register.html" class="mt-6 inline-block whitespace-nowrap rounded-lg bg-white px-5 py-3 text-sm font-bold text-brand hover:bg-brand-soft md:mt-0">Create Account</a></div></section>
    </main>
    <!-- End: Main content -->
    
    @include('layouts.footer')
 @endsection

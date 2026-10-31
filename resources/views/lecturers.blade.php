@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <!-- Start: Main content -->
    <main class="flex-1">
<div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8">
            <div class="flex flex-wrap items-end justify-between gap-4"><div><h1 class="font-display text-3xl font-bold tracking-tight md:text-4xl">Lecturers</h1><p class="lead mt-2">Meet the academic staff and see which courses each of them teaches.</p></div></div>
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
    <div class="rounded-xl border border-stone-200 bg-white p-5 ">
        <div class="flex items-center justify-between">
            <p class="text-sm text-stone-500">Lecturers</p>
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <i data-lucide="presentation" class="h-4 w-4"></i></span></div>
                <p class="mt-2 font-display text-3xl font-bold">30</p>
                <p class="mt-1 text-xs text-stone-500">5 shown below</p></div>
                <div class="rounded-xl border border-stone-200 bg-white p-5 ">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-stone-500">Departments</p>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent-soft text-accent">
                            <i data-lucide="building" class="h-4 w-4"></i></span></div>
                            <p class="mt-2 font-display text-3xl font-bold">5</p>
                            <p class="mt-1 text-xs text-stone-500"> Computing and Informatics</p></div>
                            <div class="rounded-xl border border-stone-200 bg-white p-5 ">
                                <div class="flex items-center justify-between">
                                <p class="text-sm text-stone-500">Courses assigned</p>
                                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-soft text-brand">
                                    <i data-lucide="book-open" class="h-4 w-4"></i></span></div>
                                    <p class="mt-2 font-display text-3xl font-bold">18</p>
                                    <p class="mt-1 text-xs text-stone-500">All courses covered</p></div>
                                    
                                    <div class="rounded-xl border border-stone-200 bg-white p-5 ">
                                        
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm text-stone-500">Avg. class size</p>
                                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent-soft text-accent"><i data-lucide="users" class="h-4 w-4"></i></span></div><p class="mt-2 font-display text-3xl font-bold">42</p><p class="mt-1 text-xs text-stone-500">Students per course</p></div></div>
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-xl border border-stone-200 bg-white p-5 ">
                    <div class="flex items-center gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-accent-soft font-display text-lg font-bold text-accent">MG</div>
                        <div><h2 class="font-display text-xl font-bold">Mr Mosh Gyagenda</h2>
                            <p class="text-xs text-stone-500">Computing and Informatics</p></div>
                        </div><dl class="mt-5 space-y-2 text-sm">
                            
                            <div class="flex gap-2">
                                <dt class="w-24 shrink-0 font-semibold">Email</dt>
                                <dd class="text-stone-600">gyagendamosh@mubs.ac.ug</dd></div>
                                <div class="flex gap-2">
                                    <dt class="w-24 shrink-0 font-semibold">Courses</dt>
                                    <dd class="text-stone-600">BUC3131</dd></div>
                                    <div class="flex gap-2"><dt class="w-24 shrink-0 font-semibold">Office hours</dt>
                                        <dd class="text-stone-600">Tue and Thur, 2:00 to 4:00 pm</dd></div>
                                        <div class="flex gap-2"><dt class="w-24 shrink-0 font-semibold">Teaches</dt>
                                            <dd class="text-stone-600">Advanced Web Application Development</dd></div></dl>
                                            <a href="courses.html" class="mt-5 inline-block text-sm font-bold text-brand hover:underline">View their courses</a></div>

                                            <div class="rounded-xl border border-stone-200 bg-white p-5 ">
                                                <div class="flex items-center gap-4">
                                                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-accent-soft font-display text-lg font-bold text-accent">JY</div>
                                                    <div><h2 class="font-display text-xl font-bold">Ms Joy Tiko </h2><p class="text-xs text-stone-500">Computing and Informatics</p></div></div>
                                                    <dl class="mt-5 space-y-2 text-sm">
                                                        <div class="flex gap-2"><dt class="w-24 shrink-0 font-semibold">Email</dt>
                                                            <dd class="text-stone-600">joytiko@mubs.ac.ug</dd></div>
                                                            <div class="flex gap-2"><dt class="w-24 shrink-0 font-semibold">Courses</dt>
                                                                <dd class="text-stone-600">BUC3112</dd></div><div class="flex gap-2">
                                                                    <dt class="w-24 shrink-0 font-semibold">Office hours</dt>
                                                                    <dd class="text-stone-600">Tue and Thu, 10:00 am to 12:00 pm</dd></div>
                                                                    <div class="flex gap-2"><dt class="w-24 shrink-0 font-semibold">Teaches</dt>
                                                                        <dd class="text-stone-600">Mobile Application Development </dd></div></dl>
                                                                        <a href="courses.html" class="mt-5 inline-block text-sm font-bold text-brand hover:underline">View their courses</a></div>

                                                                        <div class="rounded-xl border border-stone-200 bg-white p-5 ">
                                                                            <div class="flex items-center gap-4">
                                                                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-accent-soft font-display text-lg font-bold text-accent">MR</div>
                                                                                <div><h2 class="font-display text-xl font-bold">Mr Makubuya Rodgers</h2>
                                                                                    <p class="text-xs text-stone-500">Computing and Informatics</p></div></div>
                                                                                    <dl class="mt-5 space-y-2 text-sm"><div class="flex gap-2">
                                                                                        <dt class="w-24 shrink-0 font-semibold">Email</dt>
                                                                                        <dd class="text-stone-600">rodgersm@mubs.ac.ug</dd></div>
                                                                                        <div class="flex gap-2"><dt class="w-24 shrink-0 font-semibold">Courses</dt>
                                                                                            <dd class="text-stone-600"> BIT2105</dd></div><div class="flex gap-2">
                                                                                                <dt class="w-24 shrink-0 font-semibold">Office hours</dt>
                                                                                                <dd class="text-stone-600">Fri, 9:00 am to 1:00 pm</dd></div>
                                                                                                <div class="flex gap-2"><dt class="w-24 shrink-0 font-semibold">Teaches</dt>
                                                                                                    <dd class="text-stone-600">Object Oriented Programming</dd></div></dl>
                                                                                                    <a href="courses.html" class="mt-5 inline-block text-sm font-bold text-brand hover:underline">View their courses</a></div>
                                                                                                </div>
            <div>
                <h2 class="font-display text-2xl font-bold tracking-tight">Teaching assignments</h2>
                <p class="mt-1 text-sm text-stone-600">Who teaches what, and how many students are registered.</p>

                <div class="mt-4"><div class="overflow-x-auto rounded-xl border border-stone-200 bg-white">
                    <table class="w-full text-left text-sm tabular-nums">
                        
                        <thead class="bg-stone-100 text-stone-600">
                            <tr>
                                <th class="px-4 py-3 font-semibold">Lecturer</th>
                                <th class="px-4 py-3 font-semibold">Code</th>
                                <th class="px-4 py-3 font-semibold">Course</th>
                                <th class="px-4 py-3 font-semibold">Registered students</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                <td class="px-4 py-3">Mr Mosh Gyagenda</td>
                                <td class="px-4 py-3"><b>BUC3131</b></td>
                                <td class="px-4 py-3">Advanced Web Application Development</td>
                                <td class="px-4 py-3">265</td>
                            </tr>

                            <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                <td class="px-4 py-3">Mr Makubuya Rodgers</td>
                                <td class="px-4 py-3"><b>BIT2105</b></td>
                                <td class="px-4 py-3">Object Oriented Programming</td>
                                <td class="px-4 py-3">196</td></tr>

                                <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                    <td class="px-4 py-3">Ms Joy Tiko</td>
                                    <td class="px-4 py-3"><b>BUC3112</b></td>
                                    <td class="px-4 py-3">Mobile Application Development</td>
                                    <td class="px-4 py-3">150</td></tr>

                                    <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                        <td class="px-4 py-3">Mr Mujungu Godfrey</td>
                                        <td class="px-4 py-3"><b>BUC3120</b></td>
                                        <td class="px-4 py-3">Accounting Information Systems</td>
                                        <td class="px-4 py-3">300</td>
                                    </tr>

                                        <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                            <td class="px-4 py-3">Mr Bashir Mutebi</td>
                                            <td class="px-4 py-3"><b>BBA1101</b></td>
                                            <td class="px-4 py-3">Business Application Programming</td>
                                            <td class="px-4 py-3">170</td>
                                        </tr>

                                            <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                                <td class="px-4 py-3">Mr Bukoma Sadat</td>
                                                <td class="px-4 py-3"><b>BBA2203</b></td>
                                                <td class="px-4 py-3">Internet Concepts and Web Designing</td>
                                                <td class="px-4 py-3">200</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
        </div>
    </main>
    <!-- End: Main content -->
   @include('layouts.footer')
 @endsection


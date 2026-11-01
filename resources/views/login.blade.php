@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <!-- Start: Main content -->
    <main class="flex-1">
<div class="bg-mesh">
    <div class="mx-auto grid max-w-5xl items-center gap-10 px-4 py-14 md:grid-cols-2"><div>
        <h1 class="font-display text-4xl font-bold leading-tight tracking-tight">Welcome back.</h1>
        <p class="lead mt-4">Sign in to see your courses, registrations and class lists.</p>
        <ul class="mt-8 space-y-5"><li class="flex gap-4">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-soft text-brand"><i data-lucide="book-open" class="h-5 w-5"></i>
            </span><div><p class="font-bold">Your courses</p><p class="text-sm text-stone-600">See what you are registered for and what is still open.</p></div>
        </li><li class="flex gap-4">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <i data-lucide="clipboard-check" class="h-5 w-5"></i></span>
                <div><p class="font-bold">Registrations</p>
                    <p class="text-sm text-stone-600">Register for a course in one step.</p></div>
                </li><li class="flex gap-4">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-soft text-brand">
                        <i data-lucide="users" class="h-5 w-5"></i></span>
                        <div><p class="font-bold">Class lists</p>
                            <p class="text-sm text-stone-600">Lecturers see everyone registered for their courses.</p></div>
                        </li></ul></div><div><div class="rounded-xl border border-stone-200 bg-white p-5 shadow-sm">
                            <h2 class="font-display text-2xl font-bold">Sign in</h2>
                            <p class="mb-6 text-sm text-stone-500">Use the account created for you.</p>
                            <!-- Blade: <form method="POST" action="route(login)"> @csrf -->
                                @if(session('error'))
    <p class="mb-4 rounded-lg bg-accent-soft px-4 py-2 text-sm text-accent">{{ session('error') }}</p>
@endif

<form class="space-y-4" method="POST" action="/login">
    @csrf
                                 <div>
                                    <label class="mb-1 block text-sm font-semibold">Email</label>
                                    <input type="email" name="email" value="" placeholder="you@mubs.ac.ug" class="input-field ">
                                </div>

                                    <div>
                                        <label class="mb-1 block text-sm font-semibold">Password</label>
                                        <input type="password" name="password" value="" placeholder="••••••••" class="input-field ">
                                    </div>

                                        <div class="flex items-center justify-between text-sm">

                                            <label class="flex items-center gap-2 text-stone-600">
                                                <input type="checkbox" name="remember"> Remember me</label>
                                                <a href="{{ route('contact') }}" class="font-semibold text-brand">Forgot password?</a>
                                            </div>
                                            <button class="w-full rounded-lg bg-brand py-2.5 text-sm font-semibold text-white hover:bg-brand-dark">Sign In</button>
                                        </form>
                                        <p class="mt-5 text-center text-sm text-stone-500">No account? <a href="/register" class="font-semibold text-brand">Create Account</a></p>
                                    </div>
                                        <div class="mt-5"><p class="mb-2 text-sm font-bold">Sample logins (for marking)</p>
                                            <div class="overflow-x-auto rounded-xl border border-stone-200 bg-white">
                                                <table class="w-full text-left text-sm tabular-nums">
                                                    <thead class="bg-stone-100 text-stone-600">
                                                        <tr>
                                                            <th class="px-4 py-3 font-semibold">Role</th>
                                                            <th class="px-4 py-3 font-semibold">Email</th>
                                                            <th class="px-4 py-3 font-semibold">Password</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                                            <td class="px-4 py-3">Administrator</td>
                                                            <td class="px-4 py-3">admin@mubs.ac.ug</td>
                                                            <td class="px-4 py-3">password</td>
                                                        </tr>
                                                        <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                                            <td class="px-4 py-3">Lecturer</td>
                                                            <td class="px-4 py-3">lecturer@mubs.ac.ug</td>
                                                            <td class="px-4 py-3">password</td></tr>
                                                            <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                                                <td class="px-4 py-3">Student</td>
                                                                <td class="px-4 py-3">student@mubs.ac.ug</td>
                                                                <td class="px-4 py-3">password</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    </main>
    <!-- End: Main content -->
      @include('layouts.footer')
 @endsection

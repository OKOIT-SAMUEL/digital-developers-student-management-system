@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <!-- Start: Main content -->
    <main class="flex-1">
<div class="bg-mesh">
    <div class="mx-auto grid max-w-5xl items-center gap-10 px-4 py-14 md:grid-cols-2"><div>
        <h1 class="font-display text-4xl font-bold leading-tight tracking-tight">Join the portal.</h1>
        <p class="lead mt-4">Students can create their own account. Lecturer and administrator accounts are created by the registry.</p>

        <ul class="mt-8 space-y-5">
            <li class="flex gap-4">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <i data-lucide="zap" class="h-5 w-5">

                </i>

            </span>

            <div>
                <p class="font-bold">Register in seconds</p>
                <p class="text-sm text-stone-600">Choose a course and confirm. No forms to print.</p>
            </div>
        </li>

        <li class="flex gap-4">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <i data-lucide="eye" class="h-5 w-5">

                </i>

            </span>

            <div>
                <p class="font-bold">See only your own records</p>
                <p class="text-sm text-stone-600">Your registrations are private to you.</p>
            </div>
        </li>

        <li class="flex gap-4">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-soft text-brand">
                <i data-lucide="bell" class="h-5 w-5">

                </i>

            </span>

            <div>
                <p class="font-bold">Stay informed</p>
                <p class="text-sm text-stone-600">Read announcements about registration dates and new courses.</p>
            </div>
        </li>
    </ul>
</div>
<div>
    <div class="rounded-xl border border-stone-200 bg-white p-5 shadow-sm">
        <h2 class="font-display text-2xl font-bold">Create account</h2>
        <p class="mb-6 text-sm text-stone-500">It takes less than a minute.</p>

@if(session('error'))
    <p class="mb-4 rounded-lg bg-accent-soft px-4 py-2 text-sm text-accent">{{ session('error') }}</p>
@endif

<form class="space-y-4" method="POST" action="/register">
    @csrf
            <div>
                <label class="mb-1 block text-sm font-semibold">Full name</label>
                <input type="text" name="name" value="" placeholder="Okoit Samuel" class="input-field ">
            </div>
            <div>
                <label class="mb-1 block text-sm font-semibold">University email</label>
                <input type="email" name="email" value="" placeholder="2400719748@mubs.ac.ug" class="input-field ">
            </div>

            <div>
                <label class="mb-1 block text-sm font-semibold">Registration number</label>
                <input type="text" name="reg_no" value="" placeholder="24/U/19748/EVE" class="input-field ">
            </div>

            <div>
                <label class="mb-1 block text-sm font-semibold">Password</label>
                <input type="password" name="password" value="" placeholder="At least 8 characters" class="input-field ">
                <p class="mt-1 text-xs text-stone-500">Use at least 8 characters with a number.</p>
            </div>

            <div>
                <label class="mb-1 block text-sm font-semibold">Confirm password</label>
                <input type="password" name="password_confirmation" value="" placeholder="Repeat password" class="input-field ">
            </div>
            <label class="flex items-start gap-2 text-sm text-stone-600">
                <input type="checkbox" class="mt-1"> I agree to the university conduct and data policies.</label>
                <button class="w-full rounded-lg bg-brand py-2.5 text-sm font-semibold text-white hover:bg-brand-dark">Create Account</button>
            </form>
            <p class="mt-5 text-center text-sm text-stone-500">Already registered? <a href="/login" class="font-semibold text-brand">Sign In</a></p>
        </div>
    </div>
</div>

</div>
    </main>
    <!-- End: Main content -->
       @include('layouts.footer')
 @endsection


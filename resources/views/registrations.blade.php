@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <!-- Start: Main content -->
    <main class="flex-1">
<div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8">
            <div class="flex flex-wrap items-end justify-between gap-4"><div><h1 class="font-display text-3xl font-bold tracking-tight md:text-4xl">Course registrations</h1><p class="lead mt-2">Students see only their own rows. Duplicates and full courses are blocked.</p></div><a href="{{ url('/enroll') }}" class="inline-flex items-center gap-2 rounded-lg bg-brand px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-dark"><i data-lucide="plus" class="h-4 w-4"></i>New registration</a></div>
            <!-- Blade: @if(session('success')) -->
            <div class="flex items-center gap-3 rounded-lg border border-brand-line bg-brand-soft px-4 py-3 text-sm text-brand-dark" role="alert"><i data-lucide="check-circle" class="h-4 w-4"></i>Okoit Samuel was registered for BUC3131.</div>
            <!-- Blade: @endif -->
            <!-- Blade: @if(session('error')) -->
            <div class="flex items-center gap-3 rounded-lg border border-rose-200 bg-accent-soft px-4 py-3 text-sm text-accent" role="alert"><i data-lucide="alert-circle" class="h-4 w-4"></i>Acam Naume is already registered for BUC3131.</div>
            <!-- Blade: @endif -->
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4"><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-center justify-between"><p class="text-sm text-stone-500">Registrations</p><span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-soft text-brand"><i data-lucide="clipboard-check" class="h-4 w-4"></i></span></div><p class="mt-2 font-display text-3xl font-bold">{{ $registrations->count() }}</p><p class="mt-1 text-xs text-brand">+99 this month</p></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-center justify-between"><p class="text-sm text-stone-500">This week</p><span class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent-soft text-accent"><i data-lucide="calendar" class="h-4 w-4"></i></span></div><p class="mt-2 font-display text-3xl font-bold">41</p><p class="mt-1 text-xs text-brand">+8 from last week</p></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-center justify-between"><p class="text-sm text-stone-500">Blocked duplicates</p><span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-soft text-brand"><i data-lucide="copy-x" class="h-4 w-4"></i></span></div><p class="mt-2 font-display text-3xl font-bold">7</p><p class="mt-1 text-xs text-stone-500">This week</p></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-center justify-between"><p class="text-sm text-stone-500">Avg. courses per student</p><span class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent-soft text-accent"><i data-lucide="gauge" class="h-4 w-4"></i></span></div><p class="mt-2 font-display text-3xl font-bold">2.6</p><p class="mt-1 text-xs text-stone-500">Of 5 allowed</p></div></div>
            <div class="flex flex-wrap gap-3"><div class="relative min-w-[16rem] flex-1">
                <i data-lucide="search" class="absolute left-3 top-3.5 h-4 w-4 text-stone-400"></i>
                <input class="input-field pl-9" placeholder="Search by student or course">
            </div>
            <select class="input-field sm:w-48">
                <option>All courses</option>
                <option>BUC3131</option>
                <option>BUC3112</option>
                <option>BIT2105</option>
                <option>BBA1101</option>
                <option>BUC3120</option>
                <option>BBA2203</option>
            </select>
            <select class="input-field sm:w-48">
                <option>All dates</option>
                <option>This week</option>
                <option>This month</option>
            </select>
        </div>
            <div class="overflow-x-auto rounded-xl border border-stone-200 bg-white">
                <table class="w-full text-left text-sm tabular-nums">
                    <thead class="bg-stone-100 text-stone-600">
                        <tr>
                            <th class="px-4 py-3 font-semibold">Student</th>
                            <th class="px-4 py-3 font-semibold">Course</th>
                            <th class="px-4 py-3 font-semibold">Date</th>
                            <th class="px-4 py-3 font-semibold">Status</th>
                            <th class="px-4 py-3 font-semibold">

                            </th>
                        </tr>
                    </thead>

                  <tbody>
    @foreach($registrations as $reg)
        <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
            <td class="px-4 py-3">{{ $reg->student }}</td>
            <td class="px-4 py-3">{{ $reg->course }}</td>
            <td class="px-4 py-3">{{ $reg->created_at->format('d M Y') }}</td>
            <td class="px-4 py-3"><span class="whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-brand-soft text-brand-dark border-brand-line">Registered</span></td>
            <td class="px-4 py-3"></td>
        </tr>
    @endforeach
</tbody>
                </table>
            </div>
            <div class="flex flex-wrap items-center justify-between gap-3 text-sm text-stone-600"><span>Showing {{ $registrations->count() }} registrations</span><div class="flex gap-2"><a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 opacity-50">Previous</a><a href="#" class="rounded-lg bg-brand px-3 py-1.5 font-semibold text-white">1</a><a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 hover:bg-stone-100">2</a><a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 hover:bg-stone-100">3</a><a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 hover:bg-stone-100">Next</a></div></div>
        </div>
    </main>
    <!-- End: Main content -->
     @include('layouts.footer')
 @endsection
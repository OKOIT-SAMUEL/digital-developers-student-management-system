@extends('layouts.main')
@section('content')
 @include('layouts.header')
    
  
    <!-- Start: Main content -->
    <main class="flex-1">
<section class="bg-mesh"><div class="mx-auto max-w-7xl px-4 py-16"><h1 class="font-display max-w-3xl text-4xl font-bold leading-tight tracking-tight md:text-5xl">We are here to help.</h1><p class="lead mt-5">Questions about your account, a course or a registration? Send us a message or visit the registry office.</p></div></section>
        <section class="mx-auto grid max-w-7xl gap-6 px-4 py-12 md:grid-cols-3">
            <div class="rounded-xl border border-stone-200 bg-white p-5 md:col-span-2"><h2 class="mb-4 font-display text-xl font-bold">Send us a message</h2>
                <form class="space-y-4" action="{{ route('contact.store') }}" method="POST">

                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="mb-1 block text-sm font-semibold">Your name</label>
                            <input type="text" name="your_name" value="" placeholder="Okoit Samuel" class="input-field ">
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Email</label>
                            <input type="email" name="campus_email" value="" placeholder="Samuel@mubs.ac.ug" class="input-field ">
                        </div>
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Topic</label>
                        <select name="topic" class="input-field">
                            <option>Account and login</option>
                            <option>Course registration</option>
                            <option>Student records</option>
                            <option>Something else</option>
                        </select>
                    </div>
                    <div>
                        <label class="mb-1 block text-sm font-semibold">Message</label>
                        <textarea rows="5" name="message" class="input-field" placeholder="How can we help?"></textarea>
                    </div>
                    <button class="rounded-lg bg-brand px-5 py-2.5 text-sm font-semibold text-white hover:bg-brand-dark">Send message</button>
                </form>
            </div>

            <div class="space-y-4">
                <div class="rounded-xl border border-stone-200 bg-white p-5 "><h2 class="mb-4 font-display text-xl font-bold">Registry office</h2><ul class="space-y-3 text-sm text-stone-600"><li class="flex gap-3"><i data-lucide="map-pin" class="h-4 w-4 shrink-0 text-brand"></i>MUBS, Nakawa, Kampala</li><li class="flex gap-3"><i data-lucide="mail" class="h-4 w-4 shrink-0 text-brand"></i>registry@mubs.ac.ug</li><li class="flex gap-3"><i data-lucide="phone" class="h-4 w-4 shrink-0 text-brand"></i>+256 766905975</li><li class="flex gap-3"><i data-lucide="clock" class="h-4 w-4 shrink-0 text-brand"></i>Mon to Fri, 8:00 am to 5:00 pm</li></ul></div>
                <div class="rounded-xl border border-stone-200 bg-white p-5 "><h2 class="mb-3 font-display text-xl font-bold">Technical support</h2><p class="text-sm text-stone-600">Problems with the system itself, such as errors or missing pages.</p><p class="mt-3 text-sm font-semibold text-brand">support@mubs.ac.ug</p></div>
            </div>
        </section>
        <section class="mx-auto max-w-3xl px-4 pb-16"><h2 class="font-display text-2xl font-bold tracking-tight">Frequently asked questions</h2><div class="mt-6 space-y-3"><details class="group rounded-lg border border-stone-200 bg-white px-4 py-3"><summary class="flex cursor-pointer items-center justify-between font-bold">I cannot sign in. What should I do?<i data-lucide="chevron-down" class="h-4 w-4 text-stone-400"></i></summary><p class="mt-2 text-sm text-stone-600">Check that you are using your university email. If the problem continues, ask the registry to reset your password.</p></details><details class="group rounded-lg border border-stone-200 bg-white px-4 py-3"><summary class="flex cursor-pointer items-center justify-between font-bold">Why can I not register for a course?<i data-lucide="chevron-down" class="h-4 w-4 text-stone-400"></i></summary><p class="mt-2 text-sm text-stone-600">You may already be registered for it, or the course has no seats left. The error message tells you which.</p></details><details class="group rounded-lg border border-stone-200 bg-white px-4 py-3"><summary class="flex cursor-pointer items-center justify-between font-bold">Who creates lecturer accounts?<i data-lucide="chevron-down" class="h-4 w-4 text-stone-400"></i></summary><p class="mt-2 text-sm text-stone-600">Administrators create lecturer accounts and assign the Lecturer role. Students can create their own accounts.</p></details><details class="group rounded-lg border border-stone-200 bg-white px-4 py-3"><summary class="flex cursor-pointer items-center justify-between font-bold">Can I drop a course after registering?<i data-lucide="chevron-down" class="h-4 w-4 text-stone-400"></i></summary><p class="mt-2 text-sm text-stone-600">Contact the registry office. Only administrators can remove a registration.</p></details></div></section>
    </main>
    <!-- End: Main content -->
     @include('layouts.footer')
 @endsection
  
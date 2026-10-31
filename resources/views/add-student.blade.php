@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <main class="flex-1">
        <div class="mx-auto w-full max-w-3xl space-y-6 px-4 py-8">

            <h1 class="font-display text-3xl font-bold tracking-tight md:text-4xl">Add student</h1>

            <div class="rounded-xl border border-stone-200 bg-white p-5">
                <form method="POST" action="/add-student" class="space-y-4">
                    @csrf

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Full name</label>
                        <input type="text" name="your_name" class="input-field">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Registration number</label>
                        <input type="text" name="reg_no" class="input-field">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Campus email</label>
                        <input type="email" name="campus_email" class="input-field">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Programme</label>
                        <input type="text" name="programme" class="input-field">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Year</label>
                        <select name="year" class="input-field">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Phone</label>
                        <input type="text" name="phone" class="input-field">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Status</label>
                        <select name="status" class="input-field">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full rounded-lg bg-brand px-4 py-2 text-sm font-semibold text-white hover:bg-brand-dark">Save student</button>
                </form>
            </div>

        </div>
    </main>
 @include('layouts.footer')
@endsection
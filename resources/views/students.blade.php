@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <!-- Start: Main content -->
    <main class="flex-1">
        <div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8">

            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <h1 class="font-display text-3xl font-bold tracking-tight md:text-4xl">Students</h1>
                    <p class="lead mt-2">Create and remove student records.</p>
                </div>
                <a href="#form" class="inline-flex items-center gap-2 rounded-lg bg-brand px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-dark">
                    <i data-lucide="plus" class="h-4 w-4"></i>Add student
                </a>
            </div>

            @if(session('success'))
                <div class="flex items-center gap-3 rounded-lg border border-brand-line bg-brand-soft px-4 py-3 text-sm text-brand-dark" role="alert">
                    <i data-lucide="check-circle" class="h-4 w-4"></i>{{ session('success') }}
                </div>
            @endif

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-xl border border-stone-200 bg-white p-5">
                    <p class="text-sm text-stone-500">Students</p>
                    <p class="mt-2 font-display text-3xl font-bold">{{ $students->count() }}</p>
                </div>
                <div class="rounded-xl border border-stone-200 bg-white p-5">
                    <p class="text-sm text-stone-500">BBC</p>
                    <p class="mt-2 font-display text-3xl font-bold">{{ $students->where('programme', 'BBC')->count() }}</p>
                </div>
                <div class="rounded-xl border border-stone-200 bg-white p-5">
                    <p class="text-sm text-stone-500">BIT</p>
                    <p class="mt-2 font-display text-3xl font-bold">{{ $students->where('programme', 'BIT')->count() }}</p>
                </div>
                <div class="rounded-xl border border-stone-200 bg-white p-5">
                    <p class="text-sm text-stone-500">BBA</p>
                    <p class="mt-2 font-display text-3xl font-bold">{{ $students->where('programme', 'BBA')->count() }}</p>
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl border border-stone-200 bg-white">
                <table class="w-full text-left text-sm tabular-nums">
                    <thead class="bg-stone-100 text-stone-600">
                        <tr>
                            <th class="px-4 py-3 font-semibold">Reg. no</th>
                            <th class="px-4 py-3 font-semibold">Name</th>
                            <th class="px-4 py-3 font-semibold">Email</th>
                            <th class="px-4 py-3 font-semibold">Programme</th>
                            <th class="px-4 py-3 font-semibold">Year</th>
                            <th class="px-4 py-3 font-semibold">Status</th>
                            <th class="px-4 py-3 font-semibold"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                            <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
                                <td class="px-4 py-3"><span class="font-bold">{{ $student->reg_no }}</span></td>
                                <td class="px-4 py-3">{{ $student->name }}</td>
                                <td class="px-4 py-3">{{ $student->email }}</td>
                                <td class="px-4 py-3"><span class="whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-brand-soft text-brand-dark border-brand-line">{{ $student->programme }}</span></td>
                                <td class="px-4 py-3">{{ $student->year }}</td>
                                <td class="px-4 py-3"><span class="whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-brand-soft text-brand-dark border-brand-line">{{ $student->status }}</span></td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-end gap-3">
                                        <form method="POST" action="{{ route('students.destroy', $student->id) }}" onsubmit="return confirm('Delete this student?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-accent" title="Delete"><i data-lucide="trash-2" class="h-4 w-4"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-10 text-center text-stone-500">No students yet. Add one using the form below.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div id="form">
                <div class="rounded-xl border border-stone-200 bg-white p-5">
                    <h2 class="font-display text-xl font-bold">Add student</h2>
                    <p class="mb-4 text-sm text-stone-600">All fields are required. The registration number must be unique.</p>

                    <form class="grid gap-4 sm:grid-cols-2" action="{{ route('student.store') }}" method="POST">
                        @csrf

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Full name</label>
                            <input type="text" name="your_name" placeholder="Okoit Samuel" class="input-field" required>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Registration number</label>
                            <input type="text" name="reg_no" placeholder="24/U/19748/EVE" class="input-field" required>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Email</label>
                            <input type="email" name="campus_email" placeholder="2400719748@mubs.ac.ug" class="input-field" required>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Programme</label>
                            <select name="programme" class="input-field">
                                <option>BBC</option>
                                <option>BIT</option>
                                <option>BBA</option>
                                <option>BOIM</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Year of study</label>
                            <select name="year" class="input-field">
                                <option>Year 1</option>
                                <option>Year 2</option>
                                <option>Year 3</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Phone</label>
                            <input type="tel" name="phone" placeholder="+256 766905975" class="input-field" required>
                        </div>

                        <div class="flex justify-end gap-2 sm:col-span-2">
                            <button type="submit" class="rounded-lg bg-brand px-4 py-2 text-sm font-semibold text-white hover:bg-brand-dark">Save student</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
    <!-- End: Main content -->

   @include('layouts.footer')
@endsection

@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <!-- Start: Main content -->
    <main class="flex-1">
<div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8">
            <div class="flex flex-wrap items-end justify-between gap-4"><div><h1 class="font-display text-3xl font-bold tracking-tight md:text-4xl">Courses</h1><p class="lead mt-2">Browse the catalogue, check seats and manage lecturers and credit units.</p></div><a href="#form" class="inline-flex items-center gap-2 rounded-lg bg-brand px-4 py-2.5 text-sm font-semibold text-white hover:bg-brand-dark"><i data-lucide="plus" class="h-4 w-4"></i>Add course</a></div>
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
    <div class="rounded-xl border border-stone-200 bg-white p-5 ">
        <div class="flex items-center justify-between">
            <p class="text-sm text-stone-500">Courses</p>
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-soft text-brand"><i data-lucide="book-open" class="h-4 w-4"></i></span>
        </div><p class="mt-2 font-display text-3xl font-bold">18</p>
        <p class="mt-1 text-xs text-stone-500">6 shown below</p>
    </div>
    <div class="rounded-xl border border-stone-200 bg-white p-5 ">
        <div class="flex items-center justify-between">
            <p class="text-sm text-stone-500">Total seats</p>
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent-soft text-accent">
                <i data-lucide="armchair" class="h-4 w-4"></i>
            </span></div><p class="mt-2 font-display text-3xl font-bold">760</p><p class="mt-1 text-xs text-stone-500">546 taken</p></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-center justify-between"><p class="text-sm text-stone-500">Average credits</p><span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-soft text-brand"><i data-lucide="gauge" class="h-4 w-4"></i></span></div><p class="mt-2 font-display text-3xl font-bold">5.4</p><p class="mt-1 text-xs text-stone-500">Per course</p></div><div class="rounded-xl border border-stone-200 bg-white p-5 "><div class="flex items-center justify-between"><p class="text-sm text-stone-500">Almost full</p><span class="flex h-9 w-9 items-center justify-center rounded-lg bg-accent-soft text-accent"><i data-lucide="alert-triangle" class="h-4 w-4"></i></span></div><p class="mt-2 font-display text-3xl font-bold">3</p><p class="mt-1 text-xs text-stone-500">Above 90%</p></div></div>
            <div class="flex flex-wrap gap-3">
                <div class="relative min-w-[16rem] flex-1">
                    <i data-lucide="search" class="absolute left-3 top-3.5 h-4 w-4 text-stone-400"></i>
                    <input class="input-field pl-9" placeholder="Search by code or title">
                </div><select class="input-field sm:w-48">
                <option>All lecturers</option>
                <option>Mr Mosh Gyagenda</option>
                <option>Ms Joy Tiko</option>
                <option>Mr Bashir Mutebi</option></select><select class="input-field sm:w-48">
                    <option>All levels</option>
                    <option>Year 1</option>
                    <option>Year 2</option>
                    <option>Year 3</option>
                </select><select class="input-field sm:w-48">
                    <option>Any status</option>
                    <option>Open</option>
                    <option>Almost full</option></select></div>
            <div class="overflow-x-auto rounded-xl border border-stone-200 bg-white">
                <table class="w-full text-left text-sm tabular-nums">
                    <thead class="bg-stone-100 text-stone-600">
                        <tr>
                            <th class="px-4 py-3 font-semibold">Code</th>
                            <th class="px-4 py-3 font-semibold">Title</th>
                            <th class="px-4 py-3 font-semibold">Lecturer</th>
                            <th class="px-4 py-3 font-semibold">Credits</th>
                            <th class="px-4 py-3 font-semibold">Seats taken</th>
                            <th class="px-4 py-3 font-semibold">Status</th>
                            <th class="px-4 py-3 font-semibold"></th>
                        </tr>
                    </thead>

                    <tbody>
    @foreach ($courses as $course)
        <tr class="border-t border-stone-100 hover:bg-brand-soft/50">
            <td class="px-4 py-3"><span class="font-bold">{{ $course->course_code }}</span></td>
            <td class="px-4 py-3">{{ $course->course_title }}</td>
            <td class="px-4 py-3">{{ $course->lecturer_id }}</td>
            <td class="px-4 py-3">{{ $course->credits }}</td>
            <td class="px-4 py-3">{{ $course->capacity }}</td>
            <td class="px-4 py-3">
                <span class="whitespace-nowrap rounded-full border px-2.5 py-0.5 text-xs font-semibold bg-brand-soft text-brand-dark border-brand-line">Open</span>
            </td>
            <td class="px-4 py-3">
                <div class="flex justify-end gap-3">
                    <a href="#" class="text-brand" title="Edit">
                        <i data-lucide="pencil" class="h-4 w-4"></i>
                    </a>

                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                          onsubmit="return confirm('Delete this course?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-accent" title="Delete">
                            <i data-lucide="trash-2" class="h-4 w-4"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
                    
                       
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
            <div class="flex flex-wrap items-center justify-between gap-3 text-sm text-stone-600">
                <span>Showing 1 to 6 of 18</span><div class="flex gap-2">
                    <a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 opacity-50">Previous</a>
                    <a href="#" class="rounded-lg bg-brand px-3 py-1.5 font-semibold text-white">1</a>
                    <a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 hover:bg-stone-100">2</a>
                    <a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 hover:bg-stone-100">3</a>
                    <a href="#" class="rounded-lg border border-stone-300 px-3 py-1.5 hover:bg-stone-100">Next</a></div></div>

            <div id="form"><div class="rounded-xl border border-stone-200 bg-white p-5 ">
                <h2 class="font-display text-xl font-bold">Add course</h2>
                <p class="mb-4 text-sm text-stone-600">Course codes must be unique. Seats cannot be fewer than students already registered.</p>
               
                <form class="grid gap-4 sm:grid-cols-2" action="{{ route('courses.store') }}" method="POST">
                @csrf
                    <div>
                        <label class="mb-1 block text-sm font-semibold">Course code</label>
                        <input type="text" name="course_code" value="" placeholder="BUC3131" class="input-field ">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Course title</label>
                        <input type="text" name="course_title" value="" placeholder="Advanced Web Application Development" class="input-field ">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Lecturer</label>
                        <select name="lecturer_id" class="input-field">
                            <option>Mr Mosh Gyagenda</option>
                            <option>Ms Joy Tiko</option>
                            <option>Mr Makubuya Rodgers</option>
                            <option>Mr Bashir Mutebi</option>
                            <option>Mr Sendi Samuel</option>
                            <option>Mr Mujungu Godfrey</option>
                            <option>Mr Nafula Robinah</option>
                            <option>Mr Nandudu Diana</option>
                        </select>
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Credit units</label>
                        <input type="number" name="credits" value="" placeholder="3" class="input-field ">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Seats available</label>
                        <input type="number" name="capacity" value="" placeholder="45" class="input-field ">
                    </div>

                    <div>
                        <label class="mb-1 block text-sm font-semibold">Level</label>
                        <select name="level" class="input-field">
                            <option>Year 1</option>
                            <option>Year 2</option>
                            <option>Year 3</option>
                        </select>
                    </div>
                    <div class="flex justify-end gap-2 sm:col-span-2">
                        <a href="#" class="rounded-lg border border-stone-300 px-4 py-2 text-sm font-semibold hover:bg-stone-100">Cancel</a>
                        <button class="rounded-lg bg-brand px-4 py-2 text-sm font-semibold text-white hover:bg-brand-dark">Save course</button>
                    </div>
                </form>

               <table class="w-full text-left text-sm mt-6">
    <tr>
        <th>Code</th>
        <th>Title</th>
        <th>Lecturer</th>
        <th>Credits</th>
        <th>Seats</th>
        <th>Level</th>
        <th>Action</th>
    </tr>
    @foreach ($courses as $course)
        <tr>
            <td>{{ $course->course_code }}</td>
            <td>{{ $course->course_title }}</td>
            <td>{{ $course->lecturer_id }}</td>
            <td>{{ $course->credits }}</td>
            <td>{{ $course->capacity }}</td>
            <td>{{ $course->level }}</td>
            <td>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                      onsubmit="return confirm('Delete this course?');">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 font-semibold hover:underline">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
            
            </div>

        </div>

        </div>
    </main>
    <!-- End: Main content -->
    @include('layouts.footer')
 @endsection


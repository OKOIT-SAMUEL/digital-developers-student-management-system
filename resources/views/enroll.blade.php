@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <main class="flex-1">
        <div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8">

            <h1 class="font-display text-3xl font-bold tracking-tight md:text-4xl">Course registration</h1>

            <div class="grid gap-6 lg:grid-cols-3">

                <div class="rounded-xl border border-stone-200 bg-white p-5">
                    <form method="POST" action="/enroll" class="space-y-4">
                        @csrf

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Student</label>
                            <select name="student" class="input-field">
                                @foreach($students as $student)
                                <option value="{{ $student->name }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Course</label>
                            <select name="course" class="input-field">
                                <option>BUC3131 Advanced Web Application Development</option>
                                <option>BUC3112 Mobile Application Development</option>
                                <option>BIT2105 Object Oriented Programming</option>
                                <option>BBA1101 App Development</option>
                                <option>BUC3120 Business Law</option>
                            </select>
                        </div>

                        <div>
                            <label class="mb-1 block text-sm font-semibold">Note (optional)</label>
                            <textarea name="note" rows="3" class="input-field w-full"></textarea>
                        </div>

                        <button type="submit" class="w-full rounded-lg bg-brand px-4 py-2 text-sm font-semibold text-white hover:bg-brand-dark">Register</button>
                    </form>
                </div>

                <div class="rounded-xl border border-stone-200 bg-white p-5 lg:col-span-2">
                    <h3 class="font-bold">Registered so far</h3>
                    <table class="mt-3 w-full text-left text-sm">
                        <tr class="border-b border-stone-200">
                            <th class="py-2">Student</th>
                            <th class="py-2">Course</th>
                            <th class="py-2">Note</th>
                        </tr>
                        @foreach($registrations as $reg)
                            <tr class="border-b border-stone-100">
                                <td class="py-2">{{ $reg->student }}</td>
                                <td class="py-2">{{ $reg->course }}</td>
                                <td class="py-2">{{ $reg->note }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </main>
 @include('layouts.footer')
@endsection
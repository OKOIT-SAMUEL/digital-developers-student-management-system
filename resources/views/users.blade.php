@extends('layouts.main')
@section('content')
 @include('layouts.header')
    <main class="flex-1">
        <div class="mx-auto w-full max-w-7xl space-y-6 px-4 py-8">

            <h1 class="font-display text-3xl font-bold tracking-tight md:text-4xl">Users and roles</h1>

            <div class="overflow-x-auto rounded-xl border border-stone-200 bg-white">
                <table class="w-full text-left text-sm">
                    <thead class="bg-stone-100 text-stone-600">
                        <tr>
                            <th class="px-4 py-3 font-semibold">Name</th>
                            <th class="px-4 py-3 font-semibold">Email</th>
                            <th class="px-4 py-3 font-semibold">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="border-t border-stone-100">
                                <td class="px-4 py-3">{{ $user->name }}</td>
                                <td class="px-4 py-3">{{ $user->email }}</td>
                                <td class="px-4 py-3">{{ $user->role }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
 @include('layouts.footer')
@endsection
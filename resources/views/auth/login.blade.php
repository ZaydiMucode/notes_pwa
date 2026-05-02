@extends('layouts.app')


@section('content')

<div class="min-h-screen flex flex-col items-center justify-center bg-gray-900 px-4">
    <!-- Weather Card -->
    <div class="glass-card shadow-lg bg-white/10 backdrop-blur-md p-4 rounded-xl text-white mb-6 w-full max-w-sm border border-white/20">
        <div class="card-body text-center" id="weather">
            @if($weather)
                <h5 class="text-lg font-semibold">{{ $weather['city'] }}</h5>
                <div class="text-3xl font-bold">{{ $weather['temp'] }}°C</div>
                <div class="capitalize text-sm opacity-80">{{ $weather['description'] }}</div>
            @else
                <div class="text-sm opacity-80">Weather unavailable right now.</div>
            @endif
        </div>
    </div>
    <!-- Login Card -->
    <div class="w-full max-w-sm bg-gray-800 p-8 rounded-2xl shadow-lg">
        <h2 class="text-center text-2xl font-bold text-white mb-6">Login to your account</h2>
        <!-- Display general errors (like wrong credentials) -->
        @if ($errors->any())
            <div class="mb-4 p-3 rounded bg-red-500/20 border border-red-500 text-red-200 text-sm">
                {{ $errors->first() }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-200">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="mt-2 block w-full rounded-md bg-gray-700 px-3 py-2 text-white border border-gray-600 focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-200">Password</label>
                <input id="password" type="password" name="password" required
                    class="mt-2 block w-full rounded-md bg-gray-700 px-3 py-2 text-white border border-gray-600 focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <button type="submit" class="w-full rounded-md bg-indigo-500 py-2 text-sm font-semibold text-white hover:bg-indigo-400 transition shadow-md">
                Log in
            </button>
            <div class="text-center text-gray-400 text-sm mt-4">
                Don't have an account? <a href="{{ route('register') }}" class="text-indigo-400 hover:underline">Register here</a>
            </div>
        </form>
    </div>
</div>

@endsection


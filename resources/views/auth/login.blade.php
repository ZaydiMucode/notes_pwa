@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-900">
    
    <div class="w-full max-w-sm bg-gray-800 p-8 rounded-2xl shadow-lg">
        
        <h2 class="text-center text-2xl font-bold text-white mb-6">
            Login to your account
        </h2>

        <form action="{{route('login')}}" method ="POST" class="space-y-6">
            
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-200">
                    Email address
                </label>
                <input 
                    id="email" 
                    type="email" 
                    name="email" 
                    required 
                    autocomplete="email"
                    class="mt-2 block w-full rounded-md bg-gray-700 px-3 py-2 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500"
                />
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-gray-200">
                        Password
                    </label>
                    
                </div>
                <input 
                    id="password" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    class="mt-2 block w-full rounded-md bg-gray-700 px-3 py-2 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500"
                />
            </div>

            <div>
                <button 
                    type="submit"
                    class="w-full rounded-md bg-indigo-500 py-2 text-sm font-semibold text-white hover:bg-indigo-400 transition"
                >
                    Log in
                </button>
            </div>

        </form>

    </div>

</div>




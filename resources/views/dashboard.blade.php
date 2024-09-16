<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">   
                    <h1 style="margin-top: 20px; font-weight: bold; text-align: center; margin: 20px;">Hello, happy!</h1>
                    <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo" style="object-fit: cover; border-radius: 100%; width: 200px; height: 200px; margin-left: auto; margin-right: auto;">
                    <h1 style="text-align: center; margin-top: 20px;">You are what you are. Just be yourself.</h1>
                    <p style="font-size: 18px; color: #FFFFFF; text-align: center; margin-top: 20px;">You're logged in!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

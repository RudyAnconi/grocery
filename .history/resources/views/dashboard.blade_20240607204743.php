<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center fixed inset-0 p-5">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg border border-gray-200 sm:rounded-lg">
                <div class="p-6 text-gray-900 h-screen pt-20">
                    {{ __("Create a new list") }}
                </div>
                <div class="p-6 text-gray-900 h-screen pt-20">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6 text-gray-900 h-screen pt-20">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6 text-gray-900 h-screen pt-20">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

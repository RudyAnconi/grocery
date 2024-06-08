<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center fixed inset-0 p-5">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article id="section-list" class="bg-white overflow-hidden shadow-lg border border-gray-200 sm:rounded-lg
            overflow-y-scroll" style="scroll-snap-type: y mandatory">
                <section class="p-6 text-gray-900 h-screen pt-20 flex justify-center items-center" style="scroll-snap-align: start">
                    <x-primary-button>{{ __('Create a new list') }}</x-primary-button>
                </section>
                <section class="p-6 text-gray-900 h-screen pt-20" style="scroll-snap-align: start">
                    <div class="flex justify-between">
                        <strong>{{ __('Store Name') }}</strong> <small>{{ __('06/07/2024 8h56 PM') }}</small>
                    </div>
                </section>
                <section class="p-6 text-gray-900 h-screen pt-20" style="scroll-snap-align: start">
                    {{ __("You're logged in!") }}
                </section>
                <section class="p-6 text-gray-900 h-screen pt-20" style="scroll-snap-align: start">
                    {{ __("You're logged in!") }}
                </section>
            </article>
        </div>
    </div>
</x-app-layout>

<x-mobile-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center p-5">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <article id="section-list"
        class="bg-white 
     h-dvh snap-y snap-mandatory">
        <section class="p-6 text-gray-900 h-dvh pt-20 flex justify-center items-center snap-start border border-gray-200 ">
            <x-primary-button>{{ __('Create a new list') }}</x-primary-button>
        </section>
        <section class="p-6 text-gray-900 h-dvh pt-20 snap-start border border-gray-200">
            <div class="flex justify-between">
                <strong>{{ __('Store Name') }}</strong> <small>{{ __('06/07/2024 8h56 PM') }}</small>
            </div>
        </section>
        <section class="p-6 text-gray-900 h-dvh pt-20 snap-start border border-gray-200">
            {{ __("You're logged in!") }}
        </section>
        <section class="p-6 text-gray-900 h-dvh pt-20 snap-start border border-gray-200">
            {{ __("You're logged in!") }}
        </section>
    </article>
    </div>
</x-mobile-layout>

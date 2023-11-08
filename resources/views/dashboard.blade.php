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
                    {{ __("Welcome to machine books") }}
                </div>
            </div>
        </div>
    </div>


    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to our school, dear students! We are excited to have you join our learning community. As you embark on this educational journey, we hope you find inspiration, knowledge, and growth. Remember that each day is an opportunity to expand your horizons and reach your full potential. Our dedicated faculty and staff are here to support you in every step of your academic adventure. We believe in your abilities and look forward to witnessing your success. Let's make this academic year a memorable and enriching experience together!") }}
                </div>
            </div>
        </div>
    </div>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900 dark:text-green-400">
                    <a href="{{ route('books.register') }}">{{ __('Register Book')}}</a>
                </div>
        

                <div class="p-6 text-gray-900 dark:text-green-400">
                    <a href="{{ route('books.list') }}">{{ __('List Books')}}</a>
                </div>

            </div>
        </div>
    </div>










</x-app-layout>

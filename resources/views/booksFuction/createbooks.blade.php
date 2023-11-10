<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Register Book') }}
        </h2>
    </x-slot>


    <div class="container">  
        <form method="POST" id="contact" action="{{ route('books.register') }}">
            @csrf

            <h4>{{ __('Section to register books')}}</h4>
     
            <input placeholder="{{ __('Tittle')}}" name="tittle"  type="text" required>
            <x-input-error :messages="$errors->get('tittle')" class="mt-2" />

            <input placeholder="{{ __('Category')}}" name="category"  type="text" required>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />

            <input placeholder="{{ __('Pages')}}" name="pages"  type="text" required>
            <x-input-error :messages="$errors->get('pages')" class="mt-2" />

            <textarea placeholder="{{ __('Description')}}" name="description"  required></textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />


             {{-- Muestra el boton --}}
             <x-primary-button class="mt-4" >
                {{ __('Save') }}
            </x-primary-button>
            
        </form> 
    </div>



</x-app-layout>

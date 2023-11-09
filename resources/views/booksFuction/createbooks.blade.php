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
            <input placeholder="{{ __('Category')}}" name="category"  type="text" required>
            <input placeholder="{{ __('Pages')}}" name="pages"  type="text" required>
            <textarea placeholder="{{ __('Description')}}" name="description"  required></textarea>

             {{-- Muestra el boton --}}
             <x-primary-button class="mt-4" >
                {{ __('Save') }}
            </x-primary-button>
            
        </form> 
    </div>



</x-app-layout>

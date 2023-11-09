<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Books') }}
        </h2>
    </x-slot>


    <div class="container">  
        <form method="POST" id="contact" action="{{ route('books.update',$books) }}">
            @csrf  @method('PUT')

            <h4>{{ __('Section to edit books')}}</h4>
     
            <input placeholder="{{ __('Tittle')}}" name="tittle" value="{{ old('tittle', $books->tittle) }}"  type="text" required>
            <input placeholder="{{ __('Category')}}" name="category" value="{{ old('category', $books->category) }}"  type="text" required>
            <input placeholder="{{ __('Pages')}}" name="pages" value="{{ old('pages', $books->pages) }}"  type="text" required>
            <textarea placeholder="{{ __('Description')}}" name="description" required>{{ old('description', $books->description) }}</textarea>

             {{-- Muestra el boton --}}
             <x-primary-button class="mt-4" >
                {{ __('Update') }}
            </x-primary-button>
            
        </form> 
    </div>



</x-app-layout>

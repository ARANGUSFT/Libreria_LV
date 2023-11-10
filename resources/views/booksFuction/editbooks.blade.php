<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>


    <div class="container">  
        <form method="POST" id="contact" action="{{ route('books.update',$books) }}">
            @csrf  @method('PUT')

            <h4>{{ __('Section to edit books')}}</h4>
     
            <input placeholder="{{ __('Tittle')}}" name="tittle" value="{{ old('tittle', $books->tittle) }}"  type="text" required>
            <x-input-error :messages="$errors->get('tittle')" class="mt-2" />

            <input placeholder="{{ __('Category')}}" name="category" value="{{ old('category', $books->category) }}"  type="text" required>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />

            <input placeholder="{{ __('Pages')}}" name="pages" value="{{ old('pages', $books->pages) }}"  type="text" required>
            <x-input-error :messages="$errors->get('pages')" class="mt-2" />

            <textarea placeholder="{{ __('Description')}}" name="description" required>{{ old('description', $books->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />


            
             <x-primary-button class="mt-4" >
                {{ __('Update') }}
            </x-primary-button>
            
        </form> 
    </div>



</x-app-layout>

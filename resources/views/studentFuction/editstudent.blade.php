<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>


    <div class="container">  
        
        <form method="POST" id="contact" action="{{ route('students.update', $ver) }}">
            @csrf  @method('PUT')

            <h4>{{ __('Section to edit students')}}</h4>
     
            <input placeholder="{{ __('Name')}}" name="name" value="{{ old('name', $ver->name) }}"  type="text" required>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            
            <input placeholder="{{ __('Last Name')}}" name="lastname" value="{{ old('lastname', $ver->lastname) }}"  type="text" required>
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />

            
            <input placeholder="{{ __('Course')}}" name="course" value="{{ old('course', $ver->course) }}"  type="text" required>
            <x-input-error :messages="$errors->get('course')" class="mt-2" />

            
            <input placeholder="{{ __('Gmail')}}" name="gmail" value="{{ old('gmail', $ver->gmail) }}"  type="email" required>
            <x-input-error :messages="$errors->get('gmail')" class="mt-2" />

            
            <label for="book_id">{{ __('Select Book') }}</label>
                <select name="book_id" id="book_id" required>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->tittle }}</option>
                    @endforeach
                </select>

                
            <x-input-error :messages="$errors->get('book_id')" class="mt-2" />


        



            
             <x-primary-button class="mt-4" >
                {{ __('Update') }}
            </x-primary-button>
            
        </form> 
    </div>



</x-app-layout>

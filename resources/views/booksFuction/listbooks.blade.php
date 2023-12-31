    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('List Book') }}
            </h2>
        </x-slot>

        <table>
              
            <tr>
              <th>Usuario</th>
              <th>Nombre Tarea</th>
              <th>Categoria</th>
              <th>Total Paginas</th>
              <th>Descripcion</th>
              <th>Acciones</th>
            </tr>
    
            @foreach($books as $datos)
             <tr>
                {{-- Para llamar el nombre se deben ajustar unas cosas en el modelo --}}
                <th>{{ $datos->user->name }}</th>
                <td>{{ $datos->tittle }}</td>
                <td>{{ $datos->category }}</td>
                <td>{{ $datos->pages }}</td>
                <td>{{ $datos->description }}</td>
                <td>
                    <x-primary-button class="mt-4" >
                      <a href="{{ route('books.edit', $datos)}}">{{ __('Edit Book')}}</a>
                    </x-primary-button>


                    <form action="{{ route('books.destroy', $datos) }}" method="POST">
                        @csrf @method('DELETE')

                    <x-primary-button class="mt-4" >
                      {{ __('Delete Book')}}
                    </x-primary-button>

                    </form>                 
                </td>
             </tr>
            @endforeach
    
        </table> 
    
    </x-app-layout>
    

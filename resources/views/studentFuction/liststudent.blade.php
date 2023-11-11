<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('List Student') }}
    </h2>
</x-slot>

<table>
      
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Curso</th>
      <th>Correo</th>
      <th>Libro Seleccionado</th>
      <th>Acciones</th>
    </tr>

    @foreach($student as $datos)
     <tr>
        <td>{{ $datos->name}}</td>
        <td>{{ $datos->lastname }}</td>
        <td>{{ $datos->course }}</td>
        <td>{{ $datos->gmail }}</td>
        <td>{{ $datos->book->tittle }}</td>
        <td>
            <x-primary-button class="mt-4" >
              <a href="{{ route('students.edit', $datos)}}">{{ __('Edit Student')}}</a>
            </x-primary-button>


            <form action="{{ route('students.destroy', $datos) }}" method="POST">
                @csrf @method('DELETE')

            <x-primary-button class="mt-4" >
              {{ __('Delete Student')}}
            </x-primary-button>

            </form>                 
        </td>
     </tr>
    @endforeach

</table> 

</x-app-layout>


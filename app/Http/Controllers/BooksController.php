<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
 

    public function index()
    {
        return view('booksFuction.createbooks');
    }


    public function list()
    {
        return view('booksFuction.listbooks', [
            'books' => Books::with('user')->latest()->get()
        ]);
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'tittle' => ['required', 'min:4', 'max:20'],
            'category' => ['required', 'min:4', 'max:20'],
            'pages' => ['required', 'min:4', 'max:20'],
            'description' => ['required', 'min:4', 'max:20']
        ]);
    
        // Crear un nuevo libro relacionado con el usuario autenticado
        // El "book" viene desde el modelo User
        auth()->user()->book()->create([
            'tittle' => $request->get('tittle'),
            'category' => $request->get('category'),
            'pages' => $request->get('pages'),
            'description' => $request->get('description'),
        ]);
    
        // Mensaje de éxito
        session()->flash('status', __('Add Book'));
    
        // Redireccionar a la lista de libros después de crear el libro
        return redirect()->route('books.form');
    }
    


    public function show(Books $books)
    {
        //
    }

  

    public function edit(Books $books)
    {
        // Valida que el usuario autenticado no es el que creo las tareas muestra un error
        // $this->authorize('update',$books);
        return view('booksFuction.editbooks', [
            'books' => $books
        ]);
    }

    

    public function update(Request $request, Books $books)
    {
        // Se utiliza el metodo UPDATE de la politica
        // $this->authorize('update',$books);

        // Validación de datos del formulario
        $validate = $request->validate([
            'tittle' => ['required', 'min:4', 'max:20'],
            'category' => ['required', 'min:4', 'max:20'],
            'pages' => ['required', 'min:4', 'max:20'],
            'description' => ['required', 'min:4', 'max:20']
        ]);

        // Se validan de que esten bien y se actualiza
        $books->update($validate);

        // Retorna a la vista con un mensaje
        return to_route('books.list')
        ->with('status', __('Chirp update successfully'));

    }

    
    public function destroy(Books $books)
    {
        //
    }
}

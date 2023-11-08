<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booksFuction.listbooks');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
        auth()->user()->books()->create([
            'tittle' => $request->input('tittle'),
            'category' => $request->input('category'),
            'pages' => $request->input('pages'),
            'description' => $request->input('description'),
        ]);
    
        // Mensaje de éxito
        session()->flash('status', __('Add Book'));
    
        // Redireccionar a la lista de libros después de crear el libro
        return redirect()->route('books.list');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        //
    }
}

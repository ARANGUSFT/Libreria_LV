<?php

namespace App\Http\Controllers;

use App\Models\Students;
//Se llama el modelo a utilizar
use App\Models\Books;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index()
    {
        //Se llama el modelo a utilizar
        $books = Books::all();
        return view('studentFuction/registerstudent', compact('books'));
    }


    public function list()
    {
        $student =Students::all();
        return view('studentFuction/liststudent', compact('student'));
    }

  
    public function create()
    {
      //
    }

   
    public function store(Request $request)
    {
          // Validación de datos del formulario
          $request->validate([
            'name' => ['required', 'min:4', 'max:150'],
            'lastname' => ['required', 'min:4', 'max:150'],
            'course' => ['required', 'min:4', 'max:150'],
            'gmail' => ['required', 'email', 'min:4', 'max:255'],
            'book_id' => ['required', 'exists:books,id'], // Asegura que el libro seleccionado existe en la tabla de libros
        ]);

        // Crear un nuevo estudiante
        $student = Students::create([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'course' => $request->input('course'),
            'gmail' => $request->input('gmail'),
            'book_id' => $request->input('book_id'),
        ]);

        // Mensaje de éxito
        session()->flash('status', __('Add Student'));

        // Redireccionar a la lista de estudiantes después de crear el estudiante
        return redirect()->route('students.form');
    }

   
    public function show(Students $students)
    {
        //
    }

   
    public function edit(Students $students)
    {
        
        //Se llama el modelo a utilizar
        $books = Books::all();

        return view('studentFuction.editstudent', [
            'ver' => $students,
            'books'  => $books
        ]);

        
    }

   
    public function update(Request $request, Students $students)
    {
     
        // Validación de datos del formulario
        $validate = $request->validate([
            'name' => ['required', 'min:4', 'max:150'],
            'lastname' => ['required', 'min:4', 'max:150'],
            'course' => ['required', 'min:4', 'max:150'],
            'gmail' => ['required', 'email', 'min:4', 'max:255'],
            'book_id' => ['required', 'exists:books,id'], // Asegura que el libro seleccionado existe en la tabla de libros
        ]);


        // Se validan de que esten bien y se actualiza
        $students->update($validate);

        // Retorna a la vista con un mensaje
        return to_route('students.list')
        ->with('status', __('Student update successfully'));
    }

 
    public function destroy(Students $students)
    {
        $students->delete();

        return to_route('students.list')
        ->with('status', __('Students delete successfully')); 
    }
}

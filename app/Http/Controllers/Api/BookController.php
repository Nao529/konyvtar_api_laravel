<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Összes könyv lekérése
    public function index()
    {
        return response()->json(Book::all());
    }

    // Új könyv létrehozása
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'published_year' => 'nullable|integer',
            'available' => 'boolean'
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    // Egy könyv lekérése
    public function show(Book $book)
    {
        return response()->json($book);
    }

    // Könyv módosítása
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:255',
            'published_year' => 'nullable|integer',
            'available' => 'boolean'
        ]);

        $book->update($validated);

        return response()->json($book);
    }

    // Könyv törlése
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json([
            'message' => 'A könyv sikeresen törölve!'
        ]);
    }
}
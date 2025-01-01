<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookPostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use App\Models\Book;
use App\Models\Category;


class BookController extends Controller
{
    public function index(): Response
    {
        $books = Book::with('category')
        ->orderBy('category_id')
        ->orderBy('title')
        ->get();
        
        // return view('admin/books/index',[
        //     'books' => $books,
        // ]);
        return response()
        -> view('admin/books/index', ['books' => $books])
        -> header('Content-Type', 'text/html')
        -> header('Content-Encoding', 'utf-8');
    }

    public function show(string $id): Book
    {
        $book = Book::findOrFail($id);
        return $book;
    }

    public function create(): View
    {
        $categories = Category::all();

        return view('admin.books.create', [
            'categories' => $categories,
        ]);
    }

    public function store(BookPostRequest $request): RedirectResponse
    {
        $book = new Book();
        $book->category_id = $request->category_id;
        $book->title = $request->title;
        $book->price = $request->price;

        $book->save();

        // return $book;
        return redirect(route('book.index'))->with('message', $book->title."を追加しました");
    }
}
